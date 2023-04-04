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

use Doctrine\Bundle\DoctrineBundle\EventSubscriber\EventSubscriberInterface;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Sylius\PriceHistoryPlugin\Infrastructure\EventSubscriber\ChannelPricingLogEntryEventSubscriber;

class EventSubscriber implements EventSubscriberInterface
{
    public function __construct(private ChannelPricingLogEntryEventSubscriber $eventSubscriber)
    {
    }

    public function getSubscribedEvents(): array
    {
        return $this->eventSubscriber->getSubscribedEvents();
    }


    public function postPersist(LifecycleEventArgs $event): void
    {
        $this->eventSubscriber->postPersist($event);
    }
}
