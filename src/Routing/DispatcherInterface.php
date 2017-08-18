<?php declare(strict_types=1);

namespace Madyanov\Interfaces\Routing;

use Psr\Http\Message\ServerRequestInterface;

interface DispatcherInterface
{
    public function dispatch(callable $action, ServerRequestInterface $request, array $middleware = []);
}
