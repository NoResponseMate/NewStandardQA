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

use Sylius\PriceHistoryPlugin\Infrastructure\EntityObserver\EntityObserverInterface;

class CreateLogEntryOnPriceChangeObserver implements EntityObserverInterface
{
    public function __construct(private EntityObserverInterface $priceChangeObserver)
    {
    }

    public function onChange(object $entity): void
    {
        $this->priceChangeObserver->onChange($entity);
    }

    public function supports(object $entity): bool
    {
        return $this->priceChangeObserver->supports($entity);
    }

    public function observedFields(): array
    {
        return $this->priceChangeObserver->observedFields();
    }
}
