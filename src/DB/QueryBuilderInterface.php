<?php declare(strict_types=1);

namespace Madyanov\Interfaces\DB;

interface QueryBuilderInterface
{
    public function insert($table);
    public function select($table);
    public function update($table);
    public function delete($table);
    public function query(string $sql);
    public function transaction(callable $handler);
    public function execute(QueryInterface $query);
    public function fetchLazy(QueryInterface $query);
    public function fetchChunks(QueryInterface $query, int $size);
    public function fetchOne(QueryInterface $query);
    public function fetchRow(QueryInterface $query);
    public function fetchColumn(QueryInterface $query);
    public function fetchAll(QueryInterface $query);
    public function fetchPairs(QueryInterface $query);
    public function fetchAssoc(QueryInterface $query);
}
