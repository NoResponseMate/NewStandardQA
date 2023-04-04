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

use Doctrine\Persistence\ObjectManager;
use Sylius\Calendar\Provider\DateTimeProviderInterface;
use Sylius\Component\Core\Model\ChannelPricingInterface;
use Sylius\PriceHistoryPlugin\Application\Logger\PriceChangeLoggerInterface;
use Sylius\PriceHistoryPlugin\Domain\Factory\ChannelPricingLogEntryFactoryInterface;
use Webmozart\Assert\Assert;

class PriceChangeLogger implements PriceChangeLoggerInterface
{
    public function __construct(private PriceChangeLoggerInterface $priceChangeLogger)
    {
    }

    public function log(ChannelPricingInterface $channelPricing): void
    {
        $this->priceChangeLogger->log($channelPricing);
    }
}
