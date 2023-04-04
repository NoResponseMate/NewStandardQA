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

use Sylius\PriceHistoryPlugin\Application\Command\ApplyLowestPriceOnChannelPricings;
use Sylius\PriceHistoryPlugin\Application\CommandHandler\ApplyLowestPriceOnChannelPricingsHandler as BaseHandler;

class ApplyLowestPriceOnChannelPricingsCommandHandler
{
    public function __construct(private BaseHandler $handler)
    {
    }

    public function __invoke(ApplyLowestPriceOnChannelPricings $applyLowestPriceOnChannelPricings): void
    {
        $this->handler->__invoke($applyLowestPriceOnChannelPricings);
    }
}
