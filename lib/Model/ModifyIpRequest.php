<?php

declare(strict_types=1);

namespace Upcloud\ApiClient\Model;

use Upcloud\ApiClient\HttpClient\UpcloudApiRequest;

class ModifyIpRequest extends UpcloudApiRequest
{

    /**
     * @var IpAddress|null
     */
    private $ipAddress;

    /**
     * Constructor
     * @param mixed[] $data
     */
    public function __construct(array $data = null)
    {
        parent::__construct();
        $this->setIpAddress($data['ip_address'] ?? null);
    }

    /**
     * @return IpAddress|null
     */
    public function getIpAddress(): ?IpAddress
    {
        return $this->ipAddress;
    }

    /**
     * @param IpAddress|array|null $ipAddress
     * @return ModifyIpRequest
     */
    public function setIpAddress($ipAddress): ModifyIpRequest
    {
        if (is_array($ipAddress)) {
            $this->ipAddress = new IpAddress($ipAddress);
        } else {
            $this->ipAddress = $ipAddress;
        }

        return $this;
    }
}


