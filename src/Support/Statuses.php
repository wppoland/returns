<?php

declare(strict_types=1);

namespace Returns\Support;

defined('ABSPATH') || exit;

/**
 * Canonical list of return-request statuses and their human-readable labels.
 *
 * Statuses are stored as a post meta value on the return CPT (not as a post
 * status) so they stay decoupled from WordPress publish states. The customer
 * sees the same label in My Account that the merchant sets in wp-admin.
 */
final class Statuses
{
    public const REQUESTED = 'requested';
    public const APPROVED  = 'approved';
    public const REJECTED  = 'rejected';
    public const COMPLETED = 'completed';

    /**
     * @return array<string, string> status key => translated label
     */
    public static function all(): array
    {
        return [
            self::REQUESTED => __('Requested', 'returns'),
            self::APPROVED  => __('Approved', 'returns'),
            self::REJECTED  => __('Rejected', 'returns'),
            self::COMPLETED => __('Completed', 'returns'),
        ];
    }

    public static function label(string $status): string
    {
        $all = self::all();

        return $all[$status] ?? $all[self::REQUESTED];
    }

    public static function isValid(string $status): bool
    {
        return array_key_exists($status, self::all());
    }

    /**
     * A CSS-safe modifier suffix for a status, for storefront/admin badges.
     */
    public static function slug(string $status): string
    {
        return self::isValid($status) ? $status : self::REQUESTED;
    }

    /**
     * The ordered waypoints a return travels through on its way back, with each
     * step's state relative to the given current status. A rejected return
     * forks off the path: the journey ends at the rejection marker.
     *
     * @return array<int, array{key: string, label: string, state: string}>
     *               state is one of: done | current | upcoming
     */
    public static function journey(string $current): array
    {
        $current = self::slug($current);

        if (self::REJECTED === $current) {
            return [
                ['key' => self::REQUESTED, 'label' => self::label(self::REQUESTED), 'state' => 'done'],
                ['key' => self::REJECTED, 'label' => self::label(self::REJECTED), 'state' => 'current'],
            ];
        }

        $path  = [self::REQUESTED, self::APPROVED, self::COMPLETED];
        $index = array_search($current, $path, true);
        $index = false === $index ? 0 : $index;

        $steps = [];

        foreach ($path as $position => $key) {
            $state = $position < $index ? 'done' : ($position === $index ? 'current' : 'upcoming');

            $steps[] = [
                'key'   => $key,
                'label' => self::label($key),
                'state' => $state,
            ];
        }

        return $steps;
    }
}
