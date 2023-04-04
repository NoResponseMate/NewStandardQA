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

use Doctrine\ORM\Event\OnFlushEventArgs;
use Sylius\PriceHistoryPlugin\Infrastructure\EventListener\OnFlushEntityObserverListener;

final class EntityObserverListener
{
    public function __construct(private OnFlushEntityObserverListener $listener)
    {
    }

    public function onFlush(OnFlushEventArgs $eventArgs): void
    {
        $this->listener->onFlush($eventArgs);
    }
}
