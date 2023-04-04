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

use Sylius\PriceHistoryPlugin\Infrastructure\Serializer\ProductVariantNormalizer;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

final class VariantNormalizer implements NormalizerInterface, NormalizerAwareInterface
{
    use NormalizerAwareTrait;

    public function __construct(private ProductVariantNormalizer $decoratedNormalizer)
    {
    }

    public function normalize(mixed $object, string $format = null, array $context = []): array
    {
        return $this->decoratedNormalizer->normalize($object, $format, $context);
    }

    public function supportsNormalization(mixed $data, string $format = null): bool
    {
        return $this->decoratedNormalizer->supportsNormalization($data, $format);
    }
}
