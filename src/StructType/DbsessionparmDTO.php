<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DbsessionparmDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DbsessionparmDTO extends AbstractStructBase
{
    /**
     * The paramName
     * @var string|null
     */
    protected ?string $paramName = null;
    /**
     * The paramValue
     * @var string|null
     */
    protected ?string $paramValue = null;
    /**
     * The sessionId
     * @var string|null
     */
    protected ?string $sessionId = null;
    /**
     * Constructor method for DbsessionparmDTO
     * @uses DbsessionparmDTO::setParamName()
     * @uses DbsessionparmDTO::setParamValue()
     * @uses DbsessionparmDTO::setSessionId()
     * @param string $paramName
     * @param string $paramValue
     * @param string $sessionId
     */
    public function __construct(?string $paramName = null, ?string $paramValue = null, ?string $sessionId = null)
    {
        $this
            ->setParamName($paramName)
            ->setParamValue($paramValue)
            ->setSessionId($sessionId);
    }
    /**
     * Get paramName value
     * @return string|null
     */
    public function getParamName(): ?string
    {
        return $this->paramName;
    }
    /**
     * Set paramName value
     * @param string $paramName
     * @return \Pggns\MidocoApi\Order\StructType\DbsessionparmDTO
     */
    public function setParamName(?string $paramName = null): self
    {
        // validation for constraint: string
        if (!is_null($paramName) && !is_string($paramName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paramName, true), gettype($paramName)), __LINE__);
        }
        $this->paramName = $paramName;
        
        return $this;
    }
    /**
     * Get paramValue value
     * @return string|null
     */
    public function getParamValue(): ?string
    {
        return $this->paramValue;
    }
    /**
     * Set paramValue value
     * @param string $paramValue
     * @return \Pggns\MidocoApi\Order\StructType\DbsessionparmDTO
     */
    public function setParamValue(?string $paramValue = null): self
    {
        // validation for constraint: string
        if (!is_null($paramValue) && !is_string($paramValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paramValue, true), gettype($paramValue)), __LINE__);
        }
        $this->paramValue = $paramValue;
        
        return $this;
    }
    /**
     * Get sessionId value
     * @return string|null
     */
    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param string $sessionId
     * @return \Pggns\MidocoApi\Order\StructType\DbsessionparmDTO
     */
    public function setSessionId(?string $sessionId = null): self
    {
        // validation for constraint: string
        if (!is_null($sessionId) && !is_string($sessionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sessionId, true), gettype($sessionId)), __LINE__);
        }
        $this->sessionId = $sessionId;
        
        return $this;
    }
}
