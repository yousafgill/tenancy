<?php

declare(strict_types=1);

/*
 * This file is part of the tenancy/tenancy package.
 *
 * Copyright Tenancy for Laravel
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://tenancy.dev
 * @see https://github.com/tenancy
 */

namespace Tenancy\Misc\Spy;

use Tenancy\Misc\Help\Provider as HelpProvider;
use Tenancy\Misc\Spy\CLI\Commands;
use Tenancy\Support\Provider as SupportProvider;

class Provider extends SupportProvider
{
    public function register()
    {
        $this->app->register(HelpProvider::class);

        parent::register();

        $this->commands([
            Commands\Show::class,
        ]);
    }
}
