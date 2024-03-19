<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingVatCalculationDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BillingVatCalculationDTO extends AbstractStructBase
{
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The isOwn
     * @var bool|null
     */
    protected ?bool $isOwn = null;
    /**
     * The vatAddress
     * @var string|null
     */
    protected ?string $vatAddress = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The vatBase
     * @var float|null
     */
    protected ?float $vatBase = null;
    /**
     * The vatDescription
     * @var string|null
     */
    protected ?string $vatDescription = null;
    /**
     * The vatId
     * @var string|null
     */
    protected ?string $vatId = null;
    /**
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * Constructor method for BillingVatCalculationDTO
     * @uses BillingVatCalculationDTO::setDocumentId()
     * @uses BillingVatCalculationDTO::setIsOwn()
     * @uses BillingVatCalculationDTO::setVatAddress()
     * @uses BillingVatCalculationDTO::setVatAmount()
     * @uses BillingVatCalculationDTO::setVatBase()
     * @uses BillingVatCalculationDTO::setVatDescription()
     * @uses BillingVatCalculationDTO::setVatId()
     * @uses BillingVatCalculationDTO::setVatPercent()
     * @param int $documentId
     * @param bool $isOwn
     * @param string $vatAddress
     * @param float $vatAmount
     * @param float $vatBase
     * @param string $vatDescription
     * @param string $vatId
     * @param float $vatPercent
     */
    public function __construct(?int $documentId = null, ?bool $isOwn = null, ?string $vatAddress = null, ?float $vatAmount = null, ?float $vatBase = null, ?string $vatDescription = null, ?string $vatId = null, ?float $vatPercent = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setIsOwn($isOwn)
            ->setVatAddress($vatAddress)
            ->setVatAmount($vatAmount)
            ->setVatBase($vatBase)
            ->setVatDescription($vatDescription)
            ->setVatId($vatId)
            ->setVatPercent($vatPercent);
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\BillingVatCalculationDTO
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Get isOwn value
     * @return bool|null
     */
    public function getIsOwn(): ?bool
    {
        return $this->isOwn;
    }
    /**
     * Set isOwn value
     * @param bool $isOwn
     * @return \Pggns\MidocoApi\Order\StructType\BillingVatCalculationDTO
     */
    public function setIsOwn(?bool $isOwn = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOwn) && !is_bool($isOwn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOwn, true), gettype($isOwn)), __LINE__);
        }
        $this->isOwn = $isOwn;
        
        return $this;
    }
    /**
     * Get vatAddress value
     * @return string|null
     */
    public function getVatAddress(): ?string
    {
        return $this->vatAddress;
    }
    /**
     * Set vatAddress value
     * @param string $vatAddress
     * @return \Pggns\MidocoApi\Order\StructType\BillingVatCalculationDTO
     */
    public function setVatAddress(?string $vatAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($vatAddress) && !is_string($vatAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatAddress, true), gettype($vatAddress)), __LINE__);
        }
        $this->vatAddress = $vatAddress;
        
        return $this;
    }
    /**
     * Get vatAmount value
     * @return float|null
     */
    public function getVatAmount(): ?float
    {
        return $this->vatAmount;
    }
    /**
     * Set vatAmount value
     * @param float $vatAmount
     * @return \Pggns\MidocoApi\Order\StructType\BillingVatCalculationDTO
     */
    public function setVatAmount(?float $vatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($vatAmount) && !(is_float($vatAmount) || is_numeric($vatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatAmount, true), gettype($vatAmount)), __LINE__);
        }
        $this->vatAmount = $vatAmount;
        
        return $this;
    }
    /**
     * Get vatBase value
     * @return float|null
     */
    public function getVatBase(): ?float
    {
        return $this->vatBase;
    }
    /**
     * Set vatBase value
     * @param float $vatBase
     * @return \Pggns\MidocoApi\Order\StructType\BillingVatCalculationDTO
     */
    public function setVatBase(?float $vatBase = null): self
    {
        // validation for constraint: float
        if (!is_null($vatBase) && !(is_float($vatBase) || is_numeric($vatBase))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatBase, true), gettype($vatBase)), __LINE__);
        }
        $this->vatBase = $vatBase;
        
        return $this;
    }
    /**
     * Get vatDescription value
     * @return string|null
     */
    public function getVatDescription(): ?string
    {
        return $this->vatDescription;
    }
    /**
     * Set vatDescription value
     * @param string $vatDescription
     * @return \Pggns\MidocoApi\Order\StructType\BillingVatCalculationDTO
     */
    public function setVatDescription(?string $vatDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($vatDescription) && !is_string($vatDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatDescription, true), gettype($vatDescription)), __LINE__);
        }
        $this->vatDescription = $vatDescription;
        
        return $this;
    }
    /**
     * Get vatId value
     * @return string|null
     */
    public function getVatId(): ?string
    {
        return $this->vatId;
    }
    /**
     * Set vatId value
     * @param string $vatId
     * @return \Pggns\MidocoApi\Order\StructType\BillingVatCalculationDTO
     */
    public function setVatId(?string $vatId = null): self
    {
        // validation for constraint: string
        if (!is_null($vatId) && !is_string($vatId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatId, true), gettype($vatId)), __LINE__);
        }
        $this->vatId = $vatId;
        
        return $this;
    }
    /**
     * Get vatPercent value
     * @return float|null
     */
    public function getVatPercent(): ?float
    {
        return $this->vatPercent;
    }
    /**
     * Set vatPercent value
     * @param float $vatPercent
     * @return \Pggns\MidocoApi\Order\StructType\BillingVatCalculationDTO
     */
    public function setVatPercent(?float $vatPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($vatPercent) && !(is_float($vatPercent) || is_numeric($vatPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatPercent, true), gettype($vatPercent)), __LINE__);
        }
        $this->vatPercent = $vatPercent;
        
        return $this;
    }
}
