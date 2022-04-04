<?php

namespace App\Serializer;

use App\Domain\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer as SymfonySerializer;
use App\Domain\Model\Vhs;

class Serializer implements SerializerInterface
{
    private SymfonySerializer $serializer;

    public function __construct()
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];

        $this->serializer = new SymfonySerializer($normalizers, $encoders);
    }

    public function serialize(array $vhs): string
    {
        return $this->serializer->serialize($vhs, 'json');
    }

    public function deserialize(string $data, string $format = 'json'): Vhs
    {
        return $this->serializer->deserialize($data, Vhs::class, $format);
    }
}
