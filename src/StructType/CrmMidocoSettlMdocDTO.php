<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmMidocoSettlMdocDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrmMidocoSettlMdocDTO extends AbstractStructBase
{
    /**
     * The bussinesYearStart
     * @var int|null
     */
    protected ?int $bussinesYearStart = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The settlMdocId
     * @var int|null
     */
    protected ?int $settlMdocId = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * Constructor method for CrmMidocoSettlMdocDTO
     * @uses CrmMidocoSettlMdocDTO::setBussinesYearStart()
     * @uses CrmMidocoSettlMdocDTO::setCustomerId()
     * @uses CrmMidocoSettlMdocDTO::setSettlMdocId()
     * @uses CrmMidocoSettlMdocDTO::setValidFrom()
     * @uses CrmMidocoSettlMdocDTO::setValidTo()
     * @param int $bussinesYearStart
     * @param int $customerId
     * @param int $settlMdocId
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct(?int $bussinesYearStart = null, ?int $customerId = null, ?int $settlMdocId = null, ?string $validFrom = null, ?string $validTo = null)
    {
        $this
            ->setBussinesYearStart($bussinesYearStart)
            ->setCustomerId($customerId)
            ->setSettlMdocId($settlMdocId)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
    }
    /**
     * Get bussinesYearStart value
     * @return int|null
     */
    public function getBussinesYearStart(): ?int
    {
        return $this->bussinesYearStart;
    }
    /**
     * Set bussinesYearStart value
     * @param int $bussinesYearStart
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlMdocDTO
     */
    public function setBussinesYearStart(?int $bussinesYearStart = null): self
    {
        // validation for constraint: int
        if (!is_null($bussinesYearStart) && !(is_int($bussinesYearStart) || ctype_digit($bussinesYearStart))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bussinesYearStart, true), gettype($bussinesYearStart)), __LINE__);
        }
        $this->bussinesYearStart = $bussinesYearStart;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlMdocDTO
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
     * Get settlMdocId value
     * @return int|null
     */
    public function getSettlMdocId(): ?int
    {
        return $this->settlMdocId;
    }
    /**
     * Set settlMdocId value
     * @param int $settlMdocId
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlMdocDTO
     */
    public function setSettlMdocId(?int $settlMdocId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlMdocId) && !(is_int($settlMdocId) || ctype_digit($settlMdocId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlMdocId, true), gettype($settlMdocId)), __LINE__);
        }
        $this->settlMdocId = $settlMdocId;
        
        return $this;
    }
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlMdocDTO
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get validTo value
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo;
    }
    /**
     * Set validTo value
     * @param string $validTo
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlMdocDTO
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        $this->validTo = $validTo;
        
        return $this;
    }
}
