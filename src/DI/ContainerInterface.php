<?php declare(strict_types=1);

namespace Madyanov\Interfaces\DI;

interface ContainerInterface extends \Psr\Container\ContainerInterface
{
    public function bind($interface, $factory, bool $share = false);
    public function share($interface, $value);
    public function build($factory, array $parameters = []);
    public function register(array $providers);
}
