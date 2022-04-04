<?php

namespace App\Application\UseCases;

use App\Domain\Repository\VhsRepositoryInterface;
use App\Domain\Serializer\SerializerInterface;

class GetAllVhs
{
    private VhsRepositoryInterface $vhsRepository;
    private SerializerInterface $serializer;

    public function __construct(VhsRepositoryInterface $vhsRepository, SerializerInterface $serializer)
    {
        $this->vhsRepository = $vhsRepository;
        $this->serializer = $serializer;
    }

    /**
     * @return array<mixed>
     */
    public function execute(): array
    {
        $result = $this->vhsRepository->findAll();
        $result = (empty($result)) ? ['data' => 'no data found'] : json_decode($this->serializer->serialize($result), true);

        return $result;
    }
}
