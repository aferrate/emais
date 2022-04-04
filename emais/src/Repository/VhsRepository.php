<?php

namespace App\Repository;

use App\Domain\Model\Vhs;
use App\Domain\Repository\VhsRepositoryInterface;
use Doctrine\ORM\AbstractQuery;
use Doctrine\ORM\EntityManagerInterface;

class VhsRepository implements VhsRepositoryInterface
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findAll(): array
    {
        return $this->entityManager->getRepository(Vhs::class)->findAll();
    }

    public function findOneById(int $id): ?Vhs
    {
        return $this->entityManager->getRepository(Vhs::class)->findOneBy(['id' => $id]);
    }

    public function save(Vhs $vhs): void
    {
        $this->entityManager->persist($vhs);
        $this->entityManager->flush();
    }
}
