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

use Sylius\PriceHistoryPlugin\Application\Processor\ProductLowestPriceBeforeDiscountProcessorInterface;
use Sylius\PriceHistoryPlugin\Domain\Model\ChannelPricingInterface;

class ProductLowestPriceBeforeDiscountProcessor implements ProductLowestPriceBeforeDiscountProcessorInterface
{
    public function __construct(
        private ProductLowestPriceBeforeDiscountProcessorInterface $processor,
    ) {
    }

    public function process(ChannelPricingInterface $channelPricing): void
    {
        $this->processor->process($channelPricing);
    }
}
