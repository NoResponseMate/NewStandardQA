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

use Symfony\Component\Serializer\Normalizer\ContextAwareDenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Sylius\PriceHistoryPlugin\Infrastructure\Serializer\ChannelDenormalizer as BaseDenormalizer;

class ChannelDenormalizer implements ContextAwareDenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    public function __construct(private BaseDenormalizer $decoratedDenormalizer)
    {
    }

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return $this->decoratedDenormalizer->supportsDenormalization($data, $type, $format, $context);
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = [])
    {
        return $this->decoratedDenormalizer->denormalize($data, $type, $format, $context);
    }
}
