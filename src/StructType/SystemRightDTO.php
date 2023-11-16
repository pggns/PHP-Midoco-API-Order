<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SystemRightDTO StructType
 * @subpackage Structs
 */
class SystemRightDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The isDefault
     * @var bool|null
     */
    protected ?bool $isDefault = null;
    /**
     * The rightId
     * @var string|null
     */
    protected ?string $rightId = null;
    /**
     * Constructor method for SystemRightDTO
     * @uses SystemRightDTO::setDescription()
     * @uses SystemRightDTO::setIsDefault()
     * @uses SystemRightDTO::setRightId()
     * @param string $description
     * @param bool $isDefault
     * @param string $rightId
     */
    public function __construct(?string $description = null, ?bool $isDefault = null, ?string $rightId = null)
    {
        $this
            ->setDescription($description)
            ->setIsDefault($isDefault)
            ->setRightId($rightId);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\SystemRightDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get isDefault value
     * @return bool|null
     */
    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }
    /**
     * Set isDefault value
     * @param bool $isDefault
     * @return \Pggns\MidocoApi\Order\StructType\SystemRightDTO
     */
    public function setIsDefault(?bool $isDefault = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDefault) && !is_bool($isDefault)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDefault, true), gettype($isDefault)), __LINE__);
        }
        $this->isDefault = $isDefault;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SystemRightDTO
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
}
