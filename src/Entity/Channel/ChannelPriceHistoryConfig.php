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

namespace App\Entity\Channel;

use Doctrine\ORM\Mapping as ORM;
use Sylius\PriceHistoryPlugin\Domain\Model\ChannelPriceHistoryConfig as BaseChannelPriceHistoryConfig;

/**
 * @ORM\Entity()
 * @ORM\Table(name="sylius_channel_price_history_config")
 */
class ChannelPriceHistoryConfig extends BaseChannelPriceHistoryConfig
{
}
