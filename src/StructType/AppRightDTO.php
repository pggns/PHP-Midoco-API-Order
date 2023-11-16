<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AppRightDTO StructType
 * @subpackage Structs
 */
class AppRightDTO extends AbstractStructBase
{
    /**
     * The appId
     * @var string|null
     */
    protected ?string $appId = null;
    /**
     * The reqPasswordLevel
     * @var int|null
     */
    protected ?int $reqPasswordLevel = null;
    /**
     * The rightName
     * @var string|null
     */
    protected ?string $rightName = null;
    /**
     * Constructor method for AppRightDTO
     * @uses AppRightDTO::setAppId()
     * @uses AppRightDTO::setReqPasswordLevel()
     * @uses AppRightDTO::setRightName()
     * @param string $appId
     * @param int $reqPasswordLevel
     * @param string $rightName
     */
    public function __construct(?string $appId = null, ?int $reqPasswordLevel = null, ?string $rightName = null)
    {
        $this
            ->setAppId($appId)
            ->setReqPasswordLevel($reqPasswordLevel)
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
     * @return \Pggns\MidocoApi\Order\StructType\AppRightDTO
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
     * Get reqPasswordLevel value
     * @return int|null
     */
    public function getReqPasswordLevel(): ?int
    {
        return $this->reqPasswordLevel;
    }
    /**
     * Set reqPasswordLevel value
     * @param int $reqPasswordLevel
     * @return \Pggns\MidocoApi\Order\StructType\AppRightDTO
     */
    public function setReqPasswordLevel(?int $reqPasswordLevel = null): self
    {
        // validation for constraint: int
        if (!is_null($reqPasswordLevel) && !(is_int($reqPasswordLevel) || ctype_digit($reqPasswordLevel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($reqPasswordLevel, true), gettype($reqPasswordLevel)), __LINE__);
        }
        $this->reqPasswordLevel = $reqPasswordLevel;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AppRightDTO
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
