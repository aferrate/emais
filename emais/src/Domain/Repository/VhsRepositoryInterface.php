<?php

namespace App\Domain\Repository;

use App\Domain\Model\Vhs;

interface VhsRepositoryInterface
{
    /**
     * @return array<mixed>
     */
    public function findAll(): array;
    public function findOneById(int $id): ?Vhs;
    public function save(Vhs $vhs): void;
}
