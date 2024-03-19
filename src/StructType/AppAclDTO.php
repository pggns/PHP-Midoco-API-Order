<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AppAclDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AppAclDTO extends AbstractStructBase
{
    /**
     * The appId
     * @var string|null
     */
    protected ?string $appId = null;
    /**
     * The ipAddr
     * @var string|null
     */
    protected ?string $ipAddr = null;
    /**
     * The modulId
     * @var string|null
     */
    protected ?string $modulId = null;
    /**
     * Constructor method for AppAclDTO
     * @uses AppAclDTO::setAppId()
     * @uses AppAclDTO::setIpAddr()
     * @uses AppAclDTO::setModulId()
     * @param string $appId
     * @param string $ipAddr
     * @param string $modulId
     */
    public function __construct(?string $appId = null, ?string $ipAddr = null, ?string $modulId = null)
    {
        $this
            ->setAppId($appId)
            ->setIpAddr($ipAddr)
            ->setModulId($modulId);
    }
    /**
     * Get appId value
     * @return string|null
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }
    /**
     * Set appId value
     * @param string $appId
     * @return \Pggns\MidocoApi\Order\StructType\AppAclDTO
     */
    public function setAppId(?string $appId = null): self
    {
        // validation for constraint: string
        if (!is_null($appId) && !is_string($appId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($appId, true), gettype($appId)), __LINE__);
        }
        $this->appId = $appId;
        
        return $this;
    }
    /**
     * Get ipAddr value
     * @return string|null
     */
    public function getIpAddr(): ?string
    {
        return $this->ipAddr;
    }
    /**
     * Set ipAddr value
     * @param string $ipAddr
     * @return \Pggns\MidocoApi\Order\StructType\AppAclDTO
     */
    public function setIpAddr(?string $ipAddr = null): self
    {
        // validation for constraint: string
        if (!is_null($ipAddr) && !is_string($ipAddr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ipAddr, true), gettype($ipAddr)), __LINE__);
        }
        $this->ipAddr = $ipAddr;
        
        return $this;
    }
    /**
     * Get modulId value
     * @return string|null
     */
    public function getModulId(): ?string
    {
        return $this->modulId;
    }
    /**
     * Set modulId value
     * @param string $modulId
     * @return \Pggns\MidocoApi\Order\StructType\AppAclDTO
     */
    public function setModulId(?string $modulId = null): self
    {
        // validation for constraint: string
        if (!is_null($modulId) && !is_string($modulId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modulId, true), gettype($modulId)), __LINE__);
        }
        $this->modulId = $modulId;
        
        return $this;
    }
}
