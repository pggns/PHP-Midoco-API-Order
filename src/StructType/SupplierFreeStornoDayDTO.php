<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierFreeStornoDayDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplierFreeStornoDayDTO extends AbstractStructBase
{
    /**
     * The daysBeforeTravel
     * @var int|null
     */
    protected ?int $daysBeforeTravel = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * Constructor method for SupplierFreeStornoDayDTO
     * @uses SupplierFreeStornoDayDTO::setDaysBeforeTravel()
     * @uses SupplierFreeStornoDayDTO::setSupplierId()
     * @uses SupplierFreeStornoDayDTO::setValidFrom()
     * @param int $daysBeforeTravel
     * @param string $supplierId
     * @param string $validFrom
     */
    public function __construct(?int $daysBeforeTravel = null, ?string $supplierId = null, ?string $validFrom = null)
    {
        $this
            ->setDaysBeforeTravel($daysBeforeTravel)
            ->setSupplierId($supplierId)
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierFreeStornoDayDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierFreeStornoDayDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierFreeStornoDayDTO
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
