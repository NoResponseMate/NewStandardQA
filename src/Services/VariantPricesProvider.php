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
use Sylius\Component\Core\Model\ProductInterface;
use Sylius\Component\Core\Provider\ProductVariantsPricesProviderInterface;

class VariantPricesProvider implements ProductVariantsPricesProviderInterface
{
    public function __construct(private ProductVariantsPricesProviderInterface $provider)
    {
    }

    public function provideVariantsPrices(ProductInterface $product, ChannelInterface $channel): array
    {
        return $this->provider->provideVariantsPrices($product, $channel);
    }
}
