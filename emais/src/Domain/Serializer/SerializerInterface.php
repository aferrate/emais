<?php

namespace App\Domain\Serializer;

use App\Domain\Model\Vhs;

interface SerializerInterface
{
    public function serialize(array $vhs): string;
    public function deserialize(string $data, string $format): Vhs;
}
