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

use Sylius\Component\Core\Model\ProductVariantInterface;
use Sylius\PriceHistoryPlugin\Application\Checker\ProductVariantLowestPriceDisplayCheckerInterface;

class ProductVariantLowestPriceDisplayChecker implements ProductVariantLowestPriceDisplayCheckerInterface
{
    public function __construct(private ProductVariantLowestPriceDisplayCheckerInterface $checker)
    {
    }

    public function isLowestPriceDisplayable(ProductVariantInterface $productVariant, array $context): bool
    {
        return $this->checker->isLowestPriceDisplayable($productVariant, $context);
    }
}
