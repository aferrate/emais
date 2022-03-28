<?php

namespace App\Application\UseCases;

use App\Domain\Repository\VhsRepositoryInterface;

class GetAllVhs
{
    private VhsRepositoryInterface $vhsRepository;

    public function __construct(VhsRepositoryInterface $vhsRepository)
    {
        $this->vhsRepository = $vhsRepository;
    }

    /**
     * @return array<mixed>
     */
    public function execute(): array
    {
        $result = $this->vhsRepository->findAll();
        $result = (empty($result)) ? ['message' => 'no data found'] : $result;

        return $result;
    }
}
