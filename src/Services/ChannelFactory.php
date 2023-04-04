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

use Sylius\Component\Channel\Factory\ChannelFactoryInterface;
use Sylius\PriceHistoryPlugin\Domain\Model\ChannelInterface;
use Sylius\PriceHistoryPlugin\Domain\Model\ChannelPriceHistoryConfigInterface;

class ChannelFactory implements ChannelFactoryInterface
{
    public function __construct(
        private ChannelFactoryInterface $factory,
    ) {
    }

    public function createNew(): ChannelInterface
    {
        /** @var ChannelInterface $channel */
        $channel = $this->factory->createNew();

        return $channel;
    }

    public function createNamed(string $name): ChannelInterface
    {
        /** @var ChannelInterface $channel */
        $channel = $this->factory->createNamed($name);

        return $channel;
    }
}
