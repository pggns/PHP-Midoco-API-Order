<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmCcCardDTO StructType
 * @subpackage Structs
 */
class CrmCcCardDTO extends AbstractStructBase
{
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
     * The ccCardId
     * @var int|null
     */
    protected ?int $ccCardId = null;
    /**
     * The ccTokenReference
     * @var int|null
     */
    protected ?int $ccTokenReference = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The issuer
     * @var string|null
     */
    protected ?string $issuer = null;
    /**
     * The merchantWhitelisted
     * @var bool|null
     */
    protected ?bool $merchantWhitelisted = null;
    /**
     * The owner
     * @var string|null
     */
    protected ?string $owner = null;
    /**
     * The tokenChecked
     * @var bool|null
     */
    protected ?bool $tokenChecked = null;
    /**
     * The typeDescription
     * @var string|null
     */
    protected ?string $typeDescription = null;
    /**
     * The validMonth
     * @var int|null
     */
    protected ?int $validMonth = null;
    /**
     * The validYear
     * @var int|null
     */
    protected ?int $validYear = null;
    /**
     * Constructor method for CrmCcCardDTO
     * @uses CrmCcCardDTO::setCardNo()
     * @uses CrmCcCardDTO::setCardType()
     * @uses CrmCcCardDTO::setCcCardId()
     * @uses CrmCcCardDTO::setCcTokenReference()
     * @uses CrmCcCardDTO::setCustomerId()
     * @uses CrmCcCardDTO::setIssuer()
     * @uses CrmCcCardDTO::setMerchantWhitelisted()
     * @uses CrmCcCardDTO::setOwner()
     * @uses CrmCcCardDTO::setTokenChecked()
     * @uses CrmCcCardDTO::setTypeDescription()
     * @uses CrmCcCardDTO::setValidMonth()
     * @uses CrmCcCardDTO::setValidYear()
     * @param string $cardNo
     * @param string $cardType
     * @param int $ccCardId
     * @param int $ccTokenReference
     * @param int $customerId
     * @param string $issuer
     * @param bool $merchantWhitelisted
     * @param string $owner
     * @param bool $tokenChecked
     * @param string $typeDescription
     * @param int $validMonth
     * @param int $validYear
     */
    public function __construct(?string $cardNo = null, ?string $cardType = null, ?int $ccCardId = null, ?int $ccTokenReference = null, ?int $customerId = null, ?string $issuer = null, ?bool $merchantWhitelisted = null, ?string $owner = null, ?bool $tokenChecked = null, ?string $typeDescription = null, ?int $validMonth = null, ?int $validYear = null)
    {
        $this
            ->setCardNo($cardNo)
            ->setCardType($cardType)
            ->setCcCardId($ccCardId)
            ->setCcTokenReference($ccTokenReference)
            ->setCustomerId($customerId)
            ->setIssuer($issuer)
            ->setMerchantWhitelisted($merchantWhitelisted)
            ->setOwner($owner)
            ->setTokenChecked($tokenChecked)
            ->setTypeDescription($typeDescription)
            ->setValidMonth($validMonth)
            ->setValidYear($validYear);
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardDTO
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
     * Get ccCardId value
     * @return int|null
     */
    public function getCcCardId(): ?int
    {
        return $this->ccCardId;
    }
    /**
     * Set ccCardId value
     * @param int $ccCardId
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardDTO
     */
    public function setCcCardId(?int $ccCardId = null): self
    {
        // validation for constraint: int
        if (!is_null($ccCardId) && !(is_int($ccCardId) || ctype_digit($ccCardId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccCardId, true), gettype($ccCardId)), __LINE__);
        }
        $this->ccCardId = $ccCardId;
        
        return $this;
    }
    /**
     * Get ccTokenReference value
     * @return int|null
     */
    public function getCcTokenReference(): ?int
    {
        return $this->ccTokenReference;
    }
    /**
     * Set ccTokenReference value
     * @param int $ccTokenReference
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardDTO
     */
    public function setCcTokenReference(?int $ccTokenReference = null): self
    {
        // validation for constraint: int
        if (!is_null($ccTokenReference) && !(is_int($ccTokenReference) || ctype_digit($ccTokenReference))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccTokenReference, true), gettype($ccTokenReference)), __LINE__);
        }
        $this->ccTokenReference = $ccTokenReference;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get issuer value
     * @return string|null
     */
    public function getIssuer(): ?string
    {
        return $this->issuer;
    }
    /**
     * Set issuer value
     * @param string $issuer
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardDTO
     */
    public function setIssuer(?string $issuer = null): self
    {
        // validation for constraint: string
        if (!is_null($issuer) && !is_string($issuer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issuer, true), gettype($issuer)), __LINE__);
        }
        $this->issuer = $issuer;
        
        return $this;
    }
    /**
     * Get merchantWhitelisted value
     * @return bool|null
     */
    public function getMerchantWhitelisted(): ?bool
    {
        return $this->merchantWhitelisted;
    }
    /**
     * Set merchantWhitelisted value
     * @param bool $merchantWhitelisted
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardDTO
     */
    public function setMerchantWhitelisted(?bool $merchantWhitelisted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($merchantWhitelisted) && !is_bool($merchantWhitelisted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($merchantWhitelisted, true), gettype($merchantWhitelisted)), __LINE__);
        }
        $this->merchantWhitelisted = $merchantWhitelisted;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardDTO
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
    /**
     * Get tokenChecked value
     * @return bool|null
     */
    public function getTokenChecked(): ?bool
    {
        return $this->tokenChecked;
    }
    /**
     * Set tokenChecked value
     * @param bool $tokenChecked
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardDTO
     */
    public function setTokenChecked(?bool $tokenChecked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($tokenChecked) && !is_bool($tokenChecked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tokenChecked, true), gettype($tokenChecked)), __LINE__);
        }
        $this->tokenChecked = $tokenChecked;
        
        return $this;
    }
    /**
     * Get typeDescription value
     * @return string|null
     */
    public function getTypeDescription(): ?string
    {
        return $this->typeDescription;
    }
    /**
     * Set typeDescription value
     * @param string $typeDescription
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardDTO
     */
    public function setTypeDescription(?string $typeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($typeDescription) && !is_string($typeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeDescription, true), gettype($typeDescription)), __LINE__);
        }
        $this->typeDescription = $typeDescription;
        
        return $this;
    }
    /**
     * Get validMonth value
     * @return int|null
     */
    public function getValidMonth(): ?int
    {
        return $this->validMonth;
    }
    /**
     * Set validMonth value
     * @param int $validMonth
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardDTO
     */
    public function setValidMonth(?int $validMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($validMonth) && !(is_int($validMonth) || ctype_digit($validMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($validMonth, true), gettype($validMonth)), __LINE__);
        }
        $this->validMonth = $validMonth;
        
        return $this;
    }
    /**
     * Get validYear value
     * @return int|null
     */
    public function getValidYear(): ?int
    {
        return $this->validYear;
    }
    /**
     * Set validYear value
     * @param int $validYear
     * @return \Pggns\MidocoApi\Order\StructType\CrmCcCardDTO
     */
    public function setValidYear(?int $validYear = null): self
    {
        // validation for constraint: int
        if (!is_null($validYear) && !(is_int($validYear) || ctype_digit($validYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($validYear, true), gettype($validYear)), __LINE__);
        }
        $this->validYear = $validYear;
        
        return $this;
    }
}
