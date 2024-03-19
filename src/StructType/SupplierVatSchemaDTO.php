<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierVatSchemaDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplierVatSchemaDTO extends AbstractStructBase
{
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The traveltype
     * @var string|null
     */
    protected ?string $traveltype = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The vatSchemaId
     * @var int|null
     */
    protected ?int $vatSchemaId = null;
    /**
     * Constructor method for SupplierVatSchemaDTO
     * @uses SupplierVatSchemaDTO::setSupplierId()
     * @uses SupplierVatSchemaDTO::setTraveltype()
     * @uses SupplierVatSchemaDTO::setValidFrom()
     * @uses SupplierVatSchemaDTO::setVatSchemaId()
     * @param string $supplierId
     * @param string $traveltype
     * @param string $validFrom
     * @param int $vatSchemaId
     */
    public function __construct(?string $supplierId = null, ?string $traveltype = null, ?string $validFrom = null, ?int $vatSchemaId = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setTraveltype($traveltype)
            ->setValidFrom($validFrom)
            ->setVatSchemaId($vatSchemaId);
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierVatSchemaDTO
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
     * Get traveltype value
     * @return string|null
     */
    public function getTraveltype(): ?string
    {
        return $this->traveltype;
    }
    /**
     * Set traveltype value
     * @param string $traveltype
     * @return \Pggns\MidocoApi\Order\StructType\SupplierVatSchemaDTO
     */
    public function setTraveltype(?string $traveltype = null): self
    {
        // validation for constraint: string
        if (!is_null($traveltype) && !is_string($traveltype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveltype, true), gettype($traveltype)), __LINE__);
        }
        $this->traveltype = $traveltype;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierVatSchemaDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierVatSchemaDTO
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
