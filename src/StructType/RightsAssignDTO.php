<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RightsAssignDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RightsAssignDTO extends AbstractStructBase
{
    /**
     * The appId
     * @var string|null
     */
    protected ?string $appId = null;
    /**
     * The rightId
     * @var string|null
     */
    protected ?string $rightId = null;
    /**
     * The rightName
     * @var string|null
     */
    protected ?string $rightName = null;
    /**
     * Constructor method for RightsAssignDTO
     * @uses RightsAssignDTO::setAppId()
     * @uses RightsAssignDTO::setRightId()
     * @uses RightsAssignDTO::setRightName()
     * @param string $appId
     * @param string $rightId
     * @param string $rightName
     */
    public function __construct(?string $appId = null, ?string $rightId = null, ?string $rightName = null)
    {
        $this
            ->setAppId($appId)
            ->setRightId($rightId)
            ->setRightName($rightName);
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
     * @return \Pggns\MidocoApi\Order\StructType\RightsAssignDTO
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
     * Get rightId value
     * @return string|null
     */
    public function getRightId(): ?string
    {
        return $this->rightId;
    }
    /**
     * Set rightId value
     * @param string $rightId
     * @return \Pggns\MidocoApi\Order\StructType\RightsAssignDTO
     */
    public function setRightId(?string $rightId = null): self
    {
        // validation for constraint: string
        if (!is_null($rightId) && !is_string($rightId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rightId, true), gettype($rightId)), __LINE__);
        }
        $this->rightId = $rightId;
        
        return $this;
    }
    /**
     * Get rightName value
     * @return string|null
     */
    public function getRightName(): ?string
    {
        return $this->rightName;
    }
    /**
     * Set rightName value
     * @param string $rightName
     * @return \Pggns\MidocoApi\Order\StructType\RightsAssignDTO
     */
    public function setRightName(?string $rightName = null): self
    {
        // validation for constraint: string
        if (!is_null($rightName) && !is_string($rightName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rightName, true), gettype($rightName)), __LINE__);
        }
        $this->rightName = $rightName;
        
        return $this;
    }
}
