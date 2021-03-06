<?php

declare(strict_types=1);

namespace Upcloud\ApiClient\Model;

use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;

class AttachStorageDeviceRequest extends StorageDeviceRequest
{
    public function __toString()
    {
        return $this->serializer->serialize($this, 'json', [
            AbstractNormalizer::IGNORED_ATTRIBUTES => [
                'title', 'size', 'tier', 'action', 'partOfPlan', 'storageSize', 'storageTitle'
            ]
        ]);
    }
}


