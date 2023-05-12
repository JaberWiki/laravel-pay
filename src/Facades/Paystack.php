<?php

/*
 * This file is part of the Laravel Paystack package.
 *
 * (c) Mohammad Jaber
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JaberWiki\Paystack\Facades;

use Illuminate\Support\Facades\Facade;

class Paystack extends Facade
{
    /**
     * Get the registered name of the component
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-pay';
    }
}
