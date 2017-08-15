<?php
/**
 * Storage
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Upcloud api
 *
 * Upcloud api specification
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Storage Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Storage implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Storage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'access' => 'string',
        'backup_rule' => '\Swagger\Client\Model\BackupRule',
        'backups' => '\Swagger\Client\Model\StorageBackups',
        'license' => 'float',
        'servers' => '\Swagger\Client\Model\StorageServers',
        'size' => 'float',
        'state' => 'string',
        'tier' => 'string',
        'title' => 'string',
        'type' => 'string',
        'uuid' => 'string',
        'zone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'access' => null,
        'backup_rule' => null,
        'backups' => null,
        'license' => null,
        'servers' => null,
        'size' => null,
        'state' => null,
        'tier' => null,
        'title' => null,
        'type' => null,
        'uuid' => 'uuid',
        'zone' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'access' => 'access',
        'backup_rule' => 'backup_rule',
        'backups' => 'backups',
        'license' => 'license',
        'servers' => 'servers',
        'size' => 'size',
        'state' => 'state',
        'tier' => 'tier',
        'title' => 'title',
        'type' => 'type',
        'uuid' => 'uuid',
        'zone' => 'zone'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'access' => 'setAccess',
        'backup_rule' => 'setBackupRule',
        'backups' => 'setBackups',
        'license' => 'setLicense',
        'servers' => 'setServers',
        'size' => 'setSize',
        'state' => 'setState',
        'tier' => 'setTier',
        'title' => 'setTitle',
        'type' => 'setType',
        'uuid' => 'setUuid',
        'zone' => 'setZone'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'access' => 'getAccess',
        'backup_rule' => 'getBackupRule',
        'backups' => 'getBackups',
        'license' => 'getLicense',
        'servers' => 'getServers',
        'size' => 'getSize',
        'state' => 'getState',
        'tier' => 'getTier',
        'title' => 'getTitle',
        'type' => 'getType',
        'uuid' => 'getUuid',
        'zone' => 'getZone'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const ACCESS__PUBLIC = 'public';
    const ACCESS__PRIVATE = 'private';
    const STATE_ONLINE = 'online';
    const STATE_MAINTENANCE = 'maintenance';
    const STATE_CLONING = 'cloning';
    const STATE_BACKUPING = 'backuping';
    const STATE_ERROR = 'error';
    const TIER_HDD = 'hdd';
    const TIER_MAXIOPS = 'maxiops';
    const TYPE_NORMAL = 'normal';
    const TYPE_DISK = 'disk';
    const TYPE_CDROM = 'cdrom';
    const TYPE_TEMPLATE = 'template';
    const TYPE_BACKUP = 'backup';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getAccessAllowableValues()
    {
        return [
            self::ACCESS__PUBLIC,
            self::ACCESS__PRIVATE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ONLINE,
            self::STATE_MAINTENANCE,
            self::STATE_CLONING,
            self::STATE_BACKUPING,
            self::STATE_ERROR,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTierAllowableValues()
    {
        return [
            self::TIER_HDD,
            self::TIER_MAXIOPS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NORMAL,
            self::TYPE_DISK,
            self::TYPE_CDROM,
            self::TYPE_TEMPLATE,
            self::TYPE_BACKUP,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['access'] = isset($data['access']) ? $data['access'] : null;
        $this->container['backup_rule'] = isset($data['backup_rule']) ? $data['backup_rule'] : null;
        $this->container['backups'] = isset($data['backups']) ? $data['backups'] : null;
        $this->container['license'] = isset($data['license']) ? $data['license'] : null;
        $this->container['servers'] = isset($data['servers']) ? $data['servers'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['tier'] = isset($data['tier']) ? $data['tier'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['zone'] = isset($data['zone']) ? $data['zone'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getAccessAllowableValues();
        if (!in_array($this->container['access'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'access', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getTierAllowableValues();
        if (!in_array($this->container['tier'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'tier', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = $this->getAccessAllowableValues();
        if (!in_array($this->container['access'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getTierAllowableValues();
        if (!in_array($this->container['tier'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets access
     * @return string
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
     * Sets access
     * @param string $access
     * @return $this
     */
    public function setAccess($access)
    {
        $allowed_values = $this->getAccessAllowableValues();
        if (!is_null($access) && !in_array($access, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'access', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['access'] = $access;

        return $this;
    }

    /**
     * Gets backup_rule
     * @return \Swagger\Client\Model\BackupRule
     */
    public function getBackupRule()
    {
        return $this->container['backup_rule'];
    }

    /**
     * Sets backup_rule
     * @param \Swagger\Client\Model\BackupRule $backup_rule
     * @return $this
     */
    public function setBackupRule($backup_rule)
    {
        $this->container['backup_rule'] = $backup_rule;

        return $this;
    }

    /**
     * Gets backups
     * @return \Swagger\Client\Model\StorageBackups
     */
    public function getBackups()
    {
        return $this->container['backups'];
    }

    /**
     * Sets backups
     * @param \Swagger\Client\Model\StorageBackups $backups
     * @return $this
     */
    public function setBackups($backups)
    {
        $this->container['backups'] = $backups;

        return $this;
    }

    /**
     * Gets license
     * @return float
     */
    public function getLicense()
    {
        return $this->container['license'];
    }

    /**
     * Sets license
     * @param float $license
     * @return $this
     */
    public function setLicense($license)
    {
        $this->container['license'] = $license;

        return $this;
    }

    /**
     * Gets servers
     * @return \Swagger\Client\Model\StorageServers
     */
    public function getServers()
    {
        return $this->container['servers'];
    }

    /**
     * Sets servers
     * @param \Swagger\Client\Model\StorageServers $servers
     * @return $this
     */
    public function setServers($servers)
    {
        $this->container['servers'] = $servers;

        return $this;
    }

    /**
     * Gets size
     * @return float
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     * @param float $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets tier
     * @return string
     */
    public function getTier()
    {
        return $this->container['tier'];
    }

    /**
     * Sets tier
     * @param string $tier
     * @return $this
     */
    public function setTier($tier)
    {
        $allowed_values = $this->getTierAllowableValues();
        if (!is_null($tier) && !in_array($tier, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tier', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['tier'] = $tier;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets uuid
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     * @param string $uuid
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets zone
     * @return string
     */
    public function getZone()
    {
        return $this->container['zone'];
    }

    /**
     * Sets zone
     * @param string $zone
     * @return $this
     */
    public function setZone($zone)
    {
        $this->container['zone'] = $zone;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


