<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoImportCCard StructType
 * @subpackage Structs
 */
class MidocoImportCCard extends AbstractStructBase
{
    /**
     * The customerId
     * @var string|null
     */
    protected ?string $customerId = null;
    /**
     * The cardNo
     * @var string|null
     */
    protected ?string $cardNo = null;
    /**
     * The cardType
     * @var string|null
     */
    protected ?string $cardType = null;
    /**
     * The validMonth
     * @var string|null
     */
    protected ?string $validMonth = null;
    /**
     * The validYear
     * @var string|null
     */
    protected ?string $validYear = null;
    /**
     * The owner
     * @var string|null
     */
    protected ?string $owner = null;
    /**
     * Constructor method for MidocoImportCCard
     * @uses MidocoImportCCard::setCustomerId()
     * @uses MidocoImportCCard::setCardNo()
     * @uses MidocoImportCCard::setCardType()
     * @uses MidocoImportCCard::setValidMonth()
     * @uses MidocoImportCCard::setValidYear()
     * @uses MidocoImportCCard::setOwner()
     * @param string $customerId
     * @param string $cardNo
     * @param string $cardType
     * @param string $validMonth
     * @param string $validYear
     * @param string $owner
     */
    public function __construct(?string $customerId = null, ?string $cardNo = null, ?string $cardType = null, ?string $validMonth = null, ?string $validYear = null, ?string $owner = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setCardNo($cardNo)
            ->setCardType($cardType)
            ->setValidMonth($validMonth)
            ->setValidYear($validYear)
            ->setOwner($owner);
    }
    /**
     * Get customerId value
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param string $customerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportCCard
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get cardNo value
     * @return string|null
     */
    public function getCardNo(): ?string
    {
        return $this->cardNo;
    }
    /**
     * Set cardNo value
     * @param string $cardNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportCCard
     */
    public function setCardNo(?string $cardNo = null): self
    {
        // validation for constraint: string
        if (!is_null($cardNo) && !is_string($cardNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardNo, true), gettype($cardNo)), __LINE__);
        }
        $this->cardNo = $cardNo;
        
        return $this;
    }
    /**
     * Get cardType value
     * @return string|null
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }
    /**
     * Set cardType value
     * @param string $cardType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportCCard
     */
    public function setCardType(?string $cardType = null): self
    {
        // validation for constraint: string
        if (!is_null($cardType) && !is_string($cardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardType, true), gettype($cardType)), __LINE__);
        }
        $this->cardType = $cardType;
        
        return $this;
    }
    /**
     * Get validMonth value
     * @return string|null
     */
    public function getValidMonth(): ?string
    {
        return $this->validMonth;
    }
    /**
     * Set validMonth value
     * @param string $validMonth
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportCCard
     */
    public function setValidMonth(?string $validMonth = null): self
    {
        // validation for constraint: string
        if (!is_null($validMonth) && !is_string($validMonth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validMonth, true), gettype($validMonth)), __LINE__);
        }
        $this->validMonth = $validMonth;
        
        return $this;
    }
    /**
     * Get validYear value
     * @return string|null
     */
    public function getValidYear(): ?string
    {
        return $this->validYear;
    }
    /**
     * Set validYear value
     * @param string $validYear
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportCCard
     */
    public function setValidYear(?string $validYear = null): self
    {
        // validation for constraint: string
        if (!is_null($validYear) && !is_string($validYear)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validYear, true), gettype($validYear)), __LINE__);
        }
        $this->validYear = $validYear;
        
        return $this;
    }
    /**
     * Get owner value
     * @return string|null
     */
    public function getOwner(): ?string
    {
        return $this->owner;
    }
    /**
     * Set owner value
     * @param string $owner
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportCCard
     */
    public function setOwner(?string $owner = null): self
    {
        // validation for constraint: string
        if (!is_null($owner) && !is_string($owner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($owner, true), gettype($owner)), __LINE__);
        }
        $this->owner = $owner;
        
        return $this;
    }
}
