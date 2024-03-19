<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrgattribDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrgattribDTO extends AbstractStructBase
{
    /**
     * The attribName
     * @var string|null
     */
    protected ?string $attribName = null;
    /**
     * The isSystem
     * @var bool|null
     */
    protected ?bool $isSystem = null;
    /**
     * Constructor method for OrgattribDTO
     * @uses OrgattribDTO::setAttribName()
     * @uses OrgattribDTO::setIsSystem()
     * @param string $attribName
     * @param bool $isSystem
     */
    public function __construct(?string $attribName = null, ?bool $isSystem = null)
    {
        $this
            ->setAttribName($attribName)
            ->setIsSystem($isSystem);
    }
    /**
     * Get attribName value
     * @return string|null
     */
    public function getAttribName(): ?string
    {
        return $this->attribName;
    }
    /**
     * Set attribName value
     * @param string $attribName
     * @return \Pggns\MidocoApi\Order\StructType\OrgattribDTO
     */
    public function setAttribName(?string $attribName = null): self
    {
        // validation for constraint: string
        if (!is_null($attribName) && !is_string($attribName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attribName, true), gettype($attribName)), __LINE__);
        }
        $this->attribName = $attribName;
        
        return $this;
    }
    /**
     * Get isSystem value
     * @return bool|null
     */
    public function getIsSystem(): ?bool
    {
        return $this->isSystem;
    }
    /**
     * Set isSystem value
     * @param bool $isSystem
     * @return \Pggns\MidocoApi\Order\StructType\OrgattribDTO
     */
    public function setIsSystem(?bool $isSystem = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSystem) && !is_bool($isSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSystem, true), gettype($isSystem)), __LINE__);
        }
        $this->isSystem = $isSystem;
        
        return $this;
    }
}
