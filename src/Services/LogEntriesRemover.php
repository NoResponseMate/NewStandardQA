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

use Sylius\PriceHistoryPlugin\Application\Remover\ChannelPricingLogEntriesRemoverInterface;

class LogEntriesRemover implements ChannelPricingLogEntriesRemoverInterface
{
    public function __construct(private ChannelPricingLogEntriesRemoverInterface $remover)
    {
    }

    public function remove(int $fromDays): void
    {
        $this->remover->remove($fromDays);
    }
}
