<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetActualConsentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetActualConsentRequest extends AbstractStructBase
{
    /**
     * The isGroup
     * @var bool|null
     */
    protected ?bool $isGroup = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for GetActualConsentRequest
     * @uses GetActualConsentRequest::setIsGroup()
     * @uses GetActualConsentRequest::setType()
     * @uses GetActualConsentRequest::setUnitName()
     * @param bool $isGroup
     * @param string $type
     * @param string $unitName
     */
    public function __construct(?bool $isGroup = null, ?string $type = null, ?string $unitName = null)
    {
        $this
            ->setIsGroup($isGroup)
            ->setType($type)
            ->setUnitName($unitName);
    }
    /**
     * Get isGroup value
     * @return bool|null
     */
    public function getIsGroup(): ?bool
    {
        return $this->isGroup;
    }
    /**
     * Set isGroup value
     * @param bool $isGroup
     * @return \Pggns\MidocoApi\Order\StructType\GetActualConsentRequest
     */
    public function setIsGroup(?bool $isGroup = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isGroup) && !is_bool($isGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isGroup, true), gettype($isGroup)), __LINE__);
        }
        $this->isGroup = $isGroup;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\GetActualConsentRequest
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\GetActualConsentRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
