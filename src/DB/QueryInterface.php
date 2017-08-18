<?php declare(strict_types=1);

namespace Madyanov\Interfaces\DB;

interface QueryInterface
{
    public function build();
    public function execute();
    public function getBindings();
}
