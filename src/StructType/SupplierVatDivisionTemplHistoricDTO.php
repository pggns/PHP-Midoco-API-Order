<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierVatDivisionTemplHistoricDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplierVatDivisionTemplHistoricDTO extends AbstractStructBase
{
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The validCreationTravel
     * @var string|null
     */
    protected ?string $validCreationTravel = null;
    /**
     * The validDate
     * @var string|null
     */
    protected ?string $validDate = null;
    /**
     * The vatDivTemplId
     * @var int|null
     */
    protected ?int $vatDivTemplId = null;
    /**
     * Constructor method for SupplierVatDivisionTemplHistoricDTO
     * @uses SupplierVatDivisionTemplHistoricDTO::setSupplierId()
     * @uses SupplierVatDivisionTemplHistoricDTO::setValidCreationTravel()
     * @uses SupplierVatDivisionTemplHistoricDTO::setValidDate()
     * @uses SupplierVatDivisionTemplHistoricDTO::setVatDivTemplId()
     * @param string $supplierId
     * @param string $validCreationTravel
     * @param string $validDate
     * @param int $vatDivTemplId
     */
    public function __construct(?string $supplierId = null, ?string $validCreationTravel = null, ?string $validDate = null, ?int $vatDivTemplId = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setValidCreationTravel($validCreationTravel)
            ->setValidDate($validDate)
            ->setVatDivTemplId($vatDivTemplId);
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\SupplierVatDivisionTemplHistoricDTO
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get validCreationTravel value
     * @return string|null
     */
    public function getValidCreationTravel(): ?string
    {
        return $this->validCreationTravel;
    }
    /**
     * Set validCreationTravel value
     * @param string $validCreationTravel
     * @return \Pggns\MidocoApi\Order\StructType\SupplierVatDivisionTemplHistoricDTO
     */
    public function setValidCreationTravel(?string $validCreationTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($validCreationTravel) && !is_string($validCreationTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validCreationTravel, true), gettype($validCreationTravel)), __LINE__);
        }
        $this->validCreationTravel = $validCreationTravel;
        
        return $this;
    }
    /**
     * Get validDate value
     * @return string|null
     */
    public function getValidDate(): ?string
    {
        return $this->validDate;
    }
    /**
     * Set validDate value
     * @param string $validDate
     * @return \Pggns\MidocoApi\Order\StructType\SupplierVatDivisionTemplHistoricDTO
     */
    public function setValidDate(?string $validDate = null): self
    {
        // validation for constraint: string
        if (!is_null($validDate) && !is_string($validDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validDate, true), gettype($validDate)), __LINE__);
        }
        $this->validDate = $validDate;
        
        return $this;
    }
    /**
     * Get vatDivTemplId value
     * @return int|null
     */
    public function getVatDivTemplId(): ?int
    {
        return $this->vatDivTemplId;
    }
    /**
     * Set vatDivTemplId value
     * @param int $vatDivTemplId
     * @return \Pggns\MidocoApi\Order\StructType\SupplierVatDivisionTemplHistoricDTO
     */
    public function setVatDivTemplId(?int $vatDivTemplId = null): self
    {
        // validation for constraint: int
        if (!is_null($vatDivTemplId) && !(is_int($vatDivTemplId) || ctype_digit($vatDivTemplId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($vatDivTemplId, true), gettype($vatDivTemplId)), __LINE__);
        }
        $this->vatDivTemplId = $vatDivTemplId;
        
        return $this;
    }
}
