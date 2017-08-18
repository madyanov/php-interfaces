<?php declare(strict_types=1);

namespace Madyanov\Interfaces\Routing;

interface RouterInterface
{
    public function route(string $url);
}
