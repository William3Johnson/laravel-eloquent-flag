<?php

/*
 * This file is part of Laravel Eloquent Flag.
 *
 * (c) CyberCog <support@cybercog.su>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cog\Flag\Traits\Classic;

/**
 * Class HasKeptFlagBehavior.
 *
 * @package Cog\Flag\Traits\Classic
 */
trait HasKeptFlagBehavior
{
    /**
     * Boot the bootHasKeptFlagBehavior trait for a model.
     *
     * @return void
     */
    public static function bootHasKeptFlagBehavior()
    {
        static::creating(function ($entity) {
            if (!$entity->is_kept) {
                $entity->is_kept = false;
            }
        });

        static::updating(function ($entity) {
            if (!$entity->is_kept) {
                $entity->is_kept = true;
            }
        });
    }
}