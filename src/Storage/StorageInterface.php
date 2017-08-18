<?php declare(strict_types=1);

namespace Madyanov\Interfaces\Storage;

use Psr\SimpleCache\CacheInterface;

interface StorageInterface extends CacheInterface
{
    public function increment(string $key, int $offset = 1);
    public function decrement(string $key, int $offset = 1);
    public function add(string $key, $value, int $ttl = 0);
}
