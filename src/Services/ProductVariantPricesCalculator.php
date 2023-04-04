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
use Sylius\PriceHistoryPlugin\Application\Calculator\ProductVariantLowestPriceCalculatorInterface;

class ProductVariantPricesCalculator implements ProductVariantLowestPriceCalculatorInterface
{
    public function __construct(private ProductVariantLowestPriceCalculatorInterface $calculator)
    {
    }

    public function calculateLowestPriceBeforeDiscount(ProductVariantInterface $productVariant, array $context): ?int
    {
        return $this->calculator->calculateLowestPriceBeforeDiscount($productVariant, $context);
    }
}
