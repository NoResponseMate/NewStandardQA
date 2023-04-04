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
use Sylius\PriceHistoryPlugin\Application\Templating\Helper\PriceHelper as BasePriceHelper;
use Symfony\Component\Templating\Helper\Helper;
use Webmozart\Assert\Assert;

class PriceHelper extends Helper
{
    public function __construct(private Helper $helper)
    {
        Assert::isInstanceOf($helper, BasePriceHelper::class);
    }

    public function getLowestPriceBeforeDiscount(ProductVariantInterface $productVariant, array $context): ?int
    {
        return $this->helper->getLowestPriceBeforeDiscount($productVariant, $context);
    }

    public function hasLowestPriceBeforeDiscount(ProductVariantInterface $productVariant, array $context): bool
    {
        return $this->helper->hasLowestPriceBeforeDiscount($productVariant, $context);
    }

    public function getName(): string
    {
        return $this->helper->getName();
    }
}
