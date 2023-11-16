<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCashBookChooserValue StructType
 * @subpackage Structs
 */
class MidocoCashBookChooserValue extends AbstractStructBase
{
    /**
     * The isSelected
     * @var bool|null
     */
    protected ?bool $isSelected = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The cashBookId
     * @var int|null
     */
    protected ?int $cashBookId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for MidocoCashBookChooserValue
     * @uses MidocoCashBookChooserValue::setIsSelected()
     * @uses MidocoCashBookChooserValue::setUnitName()
     * @uses MidocoCashBookChooserValue::setCashBookId()
     * @uses MidocoCashBookChooserValue::setDescription()
     * @param bool $isSelected
     * @param string $unitName
     * @param int $cashBookId
     * @param string $description
     */
    public function __construct(?bool $isSelected = null, ?string $unitName = null, ?int $cashBookId = null, ?string $description = null)
    {
        $this
            ->setIsSelected($isSelected)
            ->setUnitName($unitName)
            ->setCashBookId($cashBookId)
            ->setDescription($description);
    }
    /**
     * Get isSelected value
     * @return bool|null
     */
    public function getIsSelected(): ?bool
    {
        return $this->isSelected;
    }
    /**
     * Set isSelected value
     * @param bool $isSelected
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCashBookChooserValue
     */
    public function setIsSelected(?bool $isSelected = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSelected) && !is_bool($isSelected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSelected, true), gettype($isSelected)), __LINE__);
        }
        $this->isSelected = $isSelected;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCashBookChooserValue
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
    /**
     * Get cashBookId value
     * @return int|null
     */
    public function getCashBookId(): ?int
    {
        return $this->cashBookId;
    }
    /**
     * Set cashBookId value
     * @param int $cashBookId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCashBookChooserValue
     */
    public function setCashBookId(?int $cashBookId = null): self
    {
        // validation for constraint: int
        if (!is_null($cashBookId) && !(is_int($cashBookId) || ctype_digit($cashBookId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cashBookId, true), gettype($cashBookId)), __LINE__);
        }
        $this->cashBookId = $cashBookId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCashBookChooserValue
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
}
