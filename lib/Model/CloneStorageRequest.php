<?php

declare(strict_types=1);

namespace Upcloud\ApiClient\Model;

use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;

class CloneStorageRequest extends StorageRequest
{

    public function __toString()
    {
        return $this->serializer->serialize($this, 'json', [
            AbstractNormalizer::IGNORED_ATTRIBUTES => [
                'access',  'backupRule', 'backups', 'license', 'servers', 'size', 'state',
                 'type', 'uuid',  'origin', 'created'
            ]
        ]);
    }
}


