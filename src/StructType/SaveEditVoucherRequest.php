<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveEditVoucherRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveEditVoucherRequest extends AbstractStructBase
{
    /**
     * The voucherId
     * @var int|null
     */
    protected ?int $voucherId = null;
    /**
     * The voucherNo
     * @var string|null
     */
    protected ?string $voucherNo = null;
    /**
     * The securityCode
     * @var string|null
     */
    protected ?string $securityCode = null;
    /**
     * The voucherTypeId
     * @var string|null
     */
    protected ?string $voucherTypeId = null;
    /**
     * The sellItemId
     * @var int|null
     */
    protected ?int $sellItemId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The isStorno
     * @var bool|null
     */
    protected ?bool $isStorno = null;
    /**
     * The created
     * @var string|null
     */
    protected ?string $created = null;
    /**
     * The creator
     * @var int|null
     */
    protected ?int $creator = null;
    /**
     * The voucherValue
     * @var float|null
     */
    protected ?float $voucherValue = null;
    /**
     * The isUpdate
     * @var bool|null
     */
    protected ?bool $isUpdate = null;
    /**
     * The originalValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $originalValue = null;
    /**
     * The fromCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fromCustomer = null;
    /**
     * The forCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $forCustomer = null;
    /**
     * Constructor method for SaveEditVoucherRequest
     * @uses SaveEditVoucherRequest::setVoucherId()
     * @uses SaveEditVoucherRequest::setVoucherNo()
     * @uses SaveEditVoucherRequest::setSecurityCode()
     * @uses SaveEditVoucherRequest::setVoucherTypeId()
     * @uses SaveEditVoucherRequest::setSellItemId()
     * @uses SaveEditVoucherRequest::setUnitName()
     * @uses SaveEditVoucherRequest::setIsStorno()
     * @uses SaveEditVoucherRequest::setCreated()
     * @uses SaveEditVoucherRequest::setCreator()
     * @uses SaveEditVoucherRequest::setVoucherValue()
     * @uses SaveEditVoucherRequest::setIsUpdate()
     * @uses SaveEditVoucherRequest::setOriginalValue()
     * @uses SaveEditVoucherRequest::setFromCustomer()
     * @uses SaveEditVoucherRequest::setForCustomer()
     * @param int $voucherId
     * @param string $voucherNo
     * @param string $securityCode
     * @param string $voucherTypeId
     * @param int $sellItemId
     * @param string $unitName
     * @param bool $isStorno
     * @param string $created
     * @param int $creator
     * @param float $voucherValue
     * @param bool $isUpdate
     * @param float $originalValue
     * @param string $fromCustomer
     * @param string $forCustomer
     */
    public function __construct(?int $voucherId = null, ?string $voucherNo = null, ?string $securityCode = null, ?string $voucherTypeId = null, ?int $sellItemId = null, ?string $unitName = null, ?bool $isStorno = null, ?string $created = null, ?int $creator = null, ?float $voucherValue = null, ?bool $isUpdate = null, ?float $originalValue = null, ?string $fromCustomer = null, ?string $forCustomer = null)
    {
        $this
            ->setVoucherId($voucherId)
            ->setVoucherNo($voucherNo)
            ->setSecurityCode($securityCode)
            ->setVoucherTypeId($voucherTypeId)
            ->setSellItemId($sellItemId)
            ->setUnitName($unitName)
            ->setIsStorno($isStorno)
            ->setCreated($created)
            ->setCreator($creator)
            ->setVoucherValue($voucherValue)
            ->setIsUpdate($isUpdate)
            ->setOriginalValue($originalValue)
            ->setFromCustomer($fromCustomer)
            ->setForCustomer($forCustomer);
    }
    /**
     * Get voucherId value
     * @return int|null
     */
    public function getVoucherId(): ?int
    {
        return $this->voucherId;
    }
    /**
     * Set voucherId value
     * @param int $voucherId
     * @return \Pggns\MidocoApi\Order\StructType\SaveEditVoucherRequest
     */
    public function setVoucherId(?int $voucherId = null): self
    {
        // validation for constraint: int
        if (!is_null($voucherId) && !(is_int($voucherId) || ctype_digit($voucherId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($voucherId, true), gettype($voucherId)), __LINE__);
        }
        $this->voucherId = $voucherId;
        
        return $this;
    }
    /**
     * Get voucherNo value
     * @return string|null
     */
    public function getVoucherNo(): ?string
    {
        return $this->voucherNo;
    }
    /**
     * Set voucherNo value
     * @param string $voucherNo
     * @return \Pggns\MidocoApi\Order\StructType\SaveEditVoucherRequest
     */
    public function setVoucherNo(?string $voucherNo = null): self
    {
        // validation for constraint: string
        if (!is_null($voucherNo) && !is_string($voucherNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucherNo, true), gettype($voucherNo)), __LINE__);
        }
        $this->voucherNo = $voucherNo;
        
        return $this;
    }
    /**
     * Get securityCode value
     * @return string|null
     */
    public function getSecurityCode(): ?string
    {
        return $this->securityCode;
    }
    /**
     * Set securityCode value
     * @param string $securityCode
     * @return \Pggns\MidocoApi\Order\StructType\SaveEditVoucherRequest
     */
    public function setSecurityCode(?string $securityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($securityCode) && !is_string($securityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($securityCode, true), gettype($securityCode)), __LINE__);
        }
        $this->securityCode = $securityCode;
        
        return $this;
    }
    /**
     * Get voucherTypeId value
     * @return string|null
     */
    public function getVoucherTypeId(): ?string
    {
        return $this->voucherTypeId;
    }
    /**
     * Set voucherTypeId value
     * @param string $voucherTypeId
     * @return \Pggns\MidocoApi\Order\StructType\SaveEditVoucherRequest
     */
    public function setVoucherTypeId(?string $voucherTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($voucherTypeId) && !is_string($voucherTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucherTypeId, true), gettype($voucherTypeId)), __LINE__);
        }
        $this->voucherTypeId = $voucherTypeId;
        
        return $this;
    }
    /**
     * Get sellItemId value
     * @return int|null
     */
    public function getSellItemId(): ?int
    {
        return $this->sellItemId;
    }
    /**
     * Set sellItemId value
     * @param int $sellItemId
     * @return \Pggns\MidocoApi\Order\StructType\SaveEditVoucherRequest
     */
    public function setSellItemId(?int $sellItemId = null): self
    {
        // validation for constraint: int
        if (!is_null($sellItemId) && !(is_int($sellItemId) || ctype_digit($sellItemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellItemId, true), gettype($sellItemId)), __LINE__);
        }
        $this->sellItemId = $sellItemId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveEditVoucherRequest
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
     * Get isStorno value
     * @return bool|null
     */
    public function getIsStorno(): ?bool
    {
        return $this->isStorno;
    }
    /**
     * Set isStorno value
     * @param bool $isStorno
     * @return \Pggns\MidocoApi\Order\StructType\SaveEditVoucherRequest
     */
    public function setIsStorno(?bool $isStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isStorno) && !is_bool($isStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isStorno, true), gettype($isStorno)), __LINE__);
        }
        $this->isStorno = $isStorno;
        
        return $this;
    }
    /**
     * Get created value
     * @return string|null
     */
    public function getCreated(): ?string
    {
        return $this->created;
    }
    /**
     * Set created value
     * @param string $created
     * @return \Pggns\MidocoApi\Order\StructType\SaveEditVoucherRequest
     */
    public function setCreated(?string $created = null): self
    {
        // validation for constraint: string
        if (!is_null($created) && !is_string($created)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($created, true), gettype($created)), __LINE__);
        }
        $this->created = $created;
        
        return $this;
    }
    /**
     * Get creator value
     * @return int|null
     */
    public function getCreator(): ?int
    {
        return $this->creator;
    }
    /**
     * Set creator value
     * @param int $creator
     * @return \Pggns\MidocoApi\Order\StructType\SaveEditVoucherRequest
     */
    public function setCreator(?int $creator = null): self
    {
        // validation for constraint: int
        if (!is_null($creator) && !(is_int($creator) || ctype_digit($creator))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creator, true), gettype($creator)), __LINE__);
        }
        $this->creator = $creator;
        
        return $this;
    }
    /**
     * Get voucherValue value
     * @return float|null
     */
    public function getVoucherValue(): ?float
    {
        return $this->voucherValue;
    }
    /**
     * Set voucherValue value
     * @param float $voucherValue
     * @return \Pggns\MidocoApi\Order\StructType\SaveEditVoucherRequest
     */
    public function setVoucherValue(?float $voucherValue = null): self
    {
        // validation for constraint: float
        if (!is_null($voucherValue) && !(is_float($voucherValue) || is_numeric($voucherValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($voucherValue, true), gettype($voucherValue)), __LINE__);
        }
        $this->voucherValue = $voucherValue;
        
        return $this;
    }
    /**
     * Get isUpdate value
     * @return bool|null
     */
    public function getIsUpdate(): ?bool
    {
        return $this->isUpdate;
    }
    /**
     * Set isUpdate value
     * @param bool $isUpdate
     * @return \Pggns\MidocoApi\Order\StructType\SaveEditVoucherRequest
     */
    public function setIsUpdate(?bool $isUpdate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isUpdate) && !is_bool($isUpdate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUpdate, true), gettype($isUpdate)), __LINE__);
        }
        $this->isUpdate = $isUpdate;
        
        return $this;
    }
    /**
     * Get originalValue value
     * @return float|null
     */
    public function getOriginalValue(): ?float
    {
        return $this->originalValue;
    }
    /**
     * Set originalValue value
     * @param float $originalValue
     * @return \Pggns\MidocoApi\Order\StructType\SaveEditVoucherRequest
     */
    public function setOriginalValue(?float $originalValue = null): self
    {
        // validation for constraint: float
        if (!is_null($originalValue) && !(is_float($originalValue) || is_numeric($originalValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalValue, true), gettype($originalValue)), __LINE__);
        }
        $this->originalValue = $originalValue;
        
        return $this;
    }
    /**
     * Get fromCustomer value
     * @return string|null
     */
    public function getFromCustomer(): ?string
    {
        return $this->fromCustomer;
    }
    /**
     * Set fromCustomer value
     * @param string $fromCustomer
     * @return \Pggns\MidocoApi\Order\StructType\SaveEditVoucherRequest
     */
    public function setFromCustomer(?string $fromCustomer = null): self
    {
        // validation for constraint: string
        if (!is_null($fromCustomer) && !is_string($fromCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromCustomer, true), gettype($fromCustomer)), __LINE__);
        }
        $this->fromCustomer = $fromCustomer;
        
        return $this;
    }
    /**
     * Get forCustomer value
     * @return string|null
     */
    public function getForCustomer(): ?string
    {
        return $this->forCustomer;
    }
    /**
     * Set forCustomer value
     * @param string $forCustomer
     * @return \Pggns\MidocoApi\Order\StructType\SaveEditVoucherRequest
     */
    public function setForCustomer(?string $forCustomer = null): self
    {
        // validation for constraint: string
        if (!is_null($forCustomer) && !is_string($forCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forCustomer, true), gettype($forCustomer)), __LINE__);
        }
        $this->forCustomer = $forCustomer;
        
        return $this;
    }
}
