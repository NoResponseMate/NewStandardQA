<?php

declare(strict_types=1);

namespace App\Entity\Channel;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\ChannelPricing as BaseChannelPricing;
use Sylius\PriceHistoryPlugin\Domain\Model\ChannelPricingInterface;
use Sylius\PriceHistoryPlugin\Domain\Model\LowestPriceBeforeDiscountAwareTrait;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_channel_pricing")
 */
class ChannelPricing extends BaseChannelPricing implements ChannelPricingInterface
{
    use LowestPriceBeforeDiscountAwareTrait;
}
