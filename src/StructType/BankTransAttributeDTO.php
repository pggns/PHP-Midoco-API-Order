<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankTransAttributeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BankTransAttributeDTO extends AbstractStructBase
{
    /**
     * The attributeName
     * @var string|null
     */
    protected ?string $attributeName = null;
    /**
     * The attributeValue
     * @var string|null
     */
    protected ?string $attributeValue = null;
    /**
     * The fileid
     * @var int|null
     */
    protected ?int $fileid = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The transactionPosition
     * @var int|null
     */
    protected ?int $transactionPosition = null;
    /**
     * Constructor method for BankTransAttributeDTO
     * @uses BankTransAttributeDTO::setAttributeName()
     * @uses BankTransAttributeDTO::setAttributeValue()
     * @uses BankTransAttributeDTO::setFileid()
     * @uses BankTransAttributeDTO::setPosition()
     * @uses BankTransAttributeDTO::setTransactionPosition()
     * @param string $attributeName
     * @param string $attributeValue
     * @param int $fileid
     * @param int $position
     * @param int $transactionPosition
     */
    public function __construct(?string $attributeName = null, ?string $attributeValue = null, ?int $fileid = null, ?int $position = null, ?int $transactionPosition = null)
    {
        $this
            ->setAttributeName($attributeName)
            ->setAttributeValue($attributeValue)
            ->setFileid($fileid)
            ->setPosition($position)
            ->setTransactionPosition($transactionPosition);
    }
    /**
     * Get attributeName value
     * @return string|null
     */
    public function getAttributeName(): ?string
    {
        return $this->attributeName;
    }
    /**
     * Set attributeName value
     * @param string $attributeName
     * @return \Pggns\MidocoApi\Order\StructType\BankTransAttributeDTO
     */
    public function setAttributeName(?string $attributeName = null): self
    {
        // validation for constraint: string
        if (!is_null($attributeName) && !is_string($attributeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeName, true), gettype($attributeName)), __LINE__);
        }
        $this->attributeName = $attributeName;
        
        return $this;
    }
    /**
     * Get attributeValue value
     * @return string|null
     */
    public function getAttributeValue(): ?string
    {
        return $this->attributeValue;
    }
    /**
     * Set attributeValue value
     * @param string $attributeValue
     * @return \Pggns\MidocoApi\Order\StructType\BankTransAttributeDTO
     */
    public function setAttributeValue(?string $attributeValue = null): self
    {
        // validation for constraint: string
        if (!is_null($attributeValue) && !is_string($attributeValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeValue, true), gettype($attributeValue)), __LINE__);
        }
        $this->attributeValue = $attributeValue;
        
        return $this;
    }
    /**
     * Get fileid value
     * @return int|null
     */
    public function getFileid(): ?int
    {
        return $this->fileid;
    }
    /**
     * Set fileid value
     * @param int $fileid
     * @return \Pggns\MidocoApi\Order\StructType\BankTransAttributeDTO
     */
    public function setFileid(?int $fileid = null): self
    {
        // validation for constraint: int
        if (!is_null($fileid) && !(is_int($fileid) || ctype_digit($fileid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fileid, true), gettype($fileid)), __LINE__);
        }
        $this->fileid = $fileid;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\BankTransAttributeDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get transactionPosition value
     * @return int|null
     */
    public function getTransactionPosition(): ?int
    {
        return $this->transactionPosition;
    }
    /**
     * Set transactionPosition value
     * @param int $transactionPosition
     * @return \Pggns\MidocoApi\Order\StructType\BankTransAttributeDTO
     */
    public function setTransactionPosition(?int $transactionPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionPosition) && !(is_int($transactionPosition) || ctype_digit($transactionPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionPosition, true), gettype($transactionPosition)), __LINE__);
        }
        $this->transactionPosition = $transactionPosition;
        
        return $this;
    }
}
