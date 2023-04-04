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

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Sylius\PriceHistoryPlugin\Infrastructure\Cli\Command\ClearPriceHistoryCommand as BaseCommand;

#[AsCommand(
    name: 'sylius:price-history:clear',
    description: 'Clears the price history up to a given number of days ago',
)]
final class ClearPriceHistoryCommand extends Command
{
    protected static $defaultDescription = 'Clears the price history up to a given number of days ago';

    public function __construct(private BaseCommand $command)
    {
        parent::__construct();
    }

    public function run(InputInterface $input, OutputInterface $output): int
    {
        return $this->command->run($input, $output);
    }

    public static function getDefaultName(): string
    {
        return 'sylius:price-history:clear';
    }
}
