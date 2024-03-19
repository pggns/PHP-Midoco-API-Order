<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VatAccountAssignDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VatAccountAssignDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The bookvat
     * @var bool|null
     */
    protected ?bool $bookvat = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * The vatCode
     * @var string|null
     */
    protected ?string $vatCode = null;
    /**
     * The vatSchemaId
     * @var int|null
     */
    protected ?int $vatSchemaId = null;
    /**
     * Constructor method for VatAccountAssignDTO
     * @uses VatAccountAssignDTO::setAccountId()
     * @uses VatAccountAssignDTO::setBookvat()
     * @uses VatAccountAssignDTO::setPlanId()
     * @uses VatAccountAssignDTO::setVatCode()
     * @uses VatAccountAssignDTO::setVatSchemaId()
     * @param string $accountId
     * @param bool $bookvat
     * @param string $planId
     * @param string $vatCode
     * @param int $vatSchemaId
     */
    public function __construct(?string $accountId = null, ?bool $bookvat = null, ?string $planId = null, ?string $vatCode = null, ?int $vatSchemaId = null)
    {
        $this
            ->setAccountId($accountId)
            ->setBookvat($bookvat)
            ->setPlanId($planId)
            ->setVatCode($vatCode)
            ->setVatSchemaId($vatSchemaId);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\VatAccountAssignDTO
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get bookvat value
     * @return bool|null
     */
    public function getBookvat(): ?bool
    {
        return $this->bookvat;
    }
    /**
     * Set bookvat value
     * @param bool $bookvat
     * @return \Pggns\MidocoApi\Order\StructType\VatAccountAssignDTO
     */
    public function setBookvat(?bool $bookvat = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bookvat) && !is_bool($bookvat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bookvat, true), gettype($bookvat)), __LINE__);
        }
        $this->bookvat = $bookvat;
        
        return $this;
    }
    /**
     * Get planId value
     * @return string|null
     */
    public function getPlanId(): ?string
    {
        return $this->planId;
    }
    /**
     * Set planId value
     * @param string $planId
     * @return \Pggns\MidocoApi\Order\StructType\VatAccountAssignDTO
     */
    public function setPlanId(?string $planId = null): self
    {
        // validation for constraint: string
        if (!is_null($planId) && !is_string($planId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($planId, true), gettype($planId)), __LINE__);
        }
        $this->planId = $planId;
        
        return $this;
    }
    /**
     * Get vatCode value
     * @return string|null
     */
    public function getVatCode(): ?string
    {
        return $this->vatCode;
    }
    /**
     * Set vatCode value
     * @param string $vatCode
     * @return \Pggns\MidocoApi\Order\StructType\VatAccountAssignDTO
     */
    public function setVatCode(?string $vatCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vatCode) && !is_string($vatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCode, true), gettype($vatCode)), __LINE__);
        }
        $this->vatCode = $vatCode;
        
        return $this;
    }
    /**
     * Get vatSchemaId value
     * @return int|null
     */
    public function getVatSchemaId(): ?int
    {
        return $this->vatSchemaId;
    }
    /**
     * Set vatSchemaId value
     * @param int $vatSchemaId
     * @return \Pggns\MidocoApi\Order\StructType\VatAccountAssignDTO
     */
    public function setVatSchemaId(?int $vatSchemaId = null): self
    {
        // validation for constraint: int
        if (!is_null($vatSchemaId) && !(is_int($vatSchemaId) || ctype_digit($vatSchemaId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($vatSchemaId, true), gettype($vatSchemaId)), __LINE__);
        }
        $this->vatSchemaId = $vatSchemaId;
        
        return $this;
    }
}
