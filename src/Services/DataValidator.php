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

use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\PriceHistoryPlugin\Application\Validator\ResourceInputDataPropertiesValidatorInterface;

class DataValidator implements ResourceInputDataPropertiesValidatorInterface
{
    public function __construct(private ResourceInputDataPropertiesValidatorInterface $validator)
    {
    }

    public function validate(ResourceInterface $resource, array $inputData, array $validationGroups = []): void
    {
        $this->validator->validate($resource, $inputData, $validationGroups);
    }
}
