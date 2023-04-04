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

use Sylius\Component\Core\Model\ChannelInterface;
use Sylius\PriceHistoryPlugin\Application\CommandDispatcher\ApplyLowestPriceOnChannelPricingsCommandDispatcherInterface;

class ApplyLowestPriceOnChannelPricingsCommandDispatcher implements ApplyLowestPriceOnChannelPricingsCommandDispatcherInterface
{
    public function __construct(private ApplyLowestPriceOnChannelPricingsCommandDispatcherInterface $commandDispatcher)
    {
    }

    public function applyWithinChannel(ChannelInterface $channel): void
    {
        $this->commandDispatcher->applyWithinChannel($channel);
    }
}
