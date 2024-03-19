<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierDocumentShippingDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplierDocumentShippingDTO extends AbstractStructBase
{
    /**
     * The daysBeforeTravel
     * @var int|null
     */
    protected ?int $daysBeforeTravel = null;
    /**
     * The shipsDocuments
     * @var bool|null
     */
    protected ?bool $shipsDocuments = null;
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
     * Constructor method for SupplierDocumentShippingDTO
     * @uses SupplierDocumentShippingDTO::setDaysBeforeTravel()
     * @uses SupplierDocumentShippingDTO::setShipsDocuments()
     * @uses SupplierDocumentShippingDTO::setSupplierId()
     * @uses SupplierDocumentShippingDTO::setTraveltype()
     * @uses SupplierDocumentShippingDTO::setValidFrom()
     * @param int $daysBeforeTravel
     * @param bool $shipsDocuments
     * @param string $supplierId
     * @param string $traveltype
     * @param string $validFrom
     */
    public function __construct(?int $daysBeforeTravel = null, ?bool $shipsDocuments = null, ?string $supplierId = null, ?string $traveltype = null, ?string $validFrom = null)
    {
        $this
            ->setDaysBeforeTravel($daysBeforeTravel)
            ->setShipsDocuments($shipsDocuments)
            ->setSupplierId($supplierId)
            ->setTraveltype($traveltype)
            ->setValidFrom($validFrom);
    }
    /**
     * Get daysBeforeTravel value
     * @return int|null
     */
    public function getDaysBeforeTravel(): ?int
    {
        return $this->daysBeforeTravel;
    }
    /**
     * Set daysBeforeTravel value
     * @param int $daysBeforeTravel
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDocumentShippingDTO
     */
    public function setDaysBeforeTravel(?int $daysBeforeTravel = null): self
    {
        // validation for constraint: int
        if (!is_null($daysBeforeTravel) && !(is_int($daysBeforeTravel) || ctype_digit($daysBeforeTravel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($daysBeforeTravel, true), gettype($daysBeforeTravel)), __LINE__);
        }
        $this->daysBeforeTravel = $daysBeforeTravel;
        
        return $this;
    }
    /**
     * Get shipsDocuments value
     * @return bool|null
     */
    public function getShipsDocuments(): ?bool
    {
        return $this->shipsDocuments;
    }
    /**
     * Set shipsDocuments value
     * @param bool $shipsDocuments
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDocumentShippingDTO
     */
    public function setShipsDocuments(?bool $shipsDocuments = null): self
    {
        // validation for constraint: boolean
        if (!is_null($shipsDocuments) && !is_bool($shipsDocuments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($shipsDocuments, true), gettype($shipsDocuments)), __LINE__);
        }
        $this->shipsDocuments = $shipsDocuments;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDocumentShippingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDocumentShippingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDocumentShippingDTO
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
}
