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

use Sylius\Component\Core\Model\ChannelPricingInterface;
use Sylius\PriceHistoryPlugin\Domain\Factory\ChannelPricingLogEntryFactoryInterface;
use Sylius\PriceHistoryPlugin\Domain\Model\ChannelPricingLogEntryInterface;

final class ChannelPricingLogEntryFactory implements ChannelPricingLogEntryFactoryInterface
{
    public function __construct(private ChannelPricingLogEntryFactoryInterface $factory)
    {
    }

    public function createNew(): object
    {
        return $this->factory->createNew();
    }

    public function create(
        ChannelPricingInterface $channelPricing,
        \DateTimeInterface $loggedAt,
        int $price,
        ?int $originalPrice = null,
    ): ChannelPricingLogEntryInterface {
        /** @var ChannelPricingLogEntryInterface $channelPricingLogEntry */
        $channelPricingLogEntry = $this->factory->create($channelPricing, $loggedAt, $price, $originalPrice);

        return $channelPricingLogEntry;
    }
}
