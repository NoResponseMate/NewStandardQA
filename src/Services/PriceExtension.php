<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Services;

use Sylius\PriceHistoryPlugin\Infrastructure\Twig\PriceExtension as BaseExtension;
use Twig\Extension\AbstractExtension;

class PriceExtension extends AbstractExtension
{
    public function __construct(private BaseExtension $extension)
    {
    }

    public function getFilters(): array
    {
        return $this->extension->getFilters();
    }
}
