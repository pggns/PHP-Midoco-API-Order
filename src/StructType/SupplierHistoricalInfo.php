<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierHistoricalInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplierHistoricalInfo extends AbstractStructBase
{
    /**
     * The validDate
     * @var string|null
     */
    protected ?string $validDate = null;
    /**
     * The validCreationTravel
     * @var string|null
     */
    protected ?string $validCreationTravel = null;
    /**
     * Constructor method for SupplierHistoricalInfo
     * @uses SupplierHistoricalInfo::setValidDate()
     * @uses SupplierHistoricalInfo::setValidCreationTravel()
     * @param string $validDate
     * @param string $validCreationTravel
     */
    public function __construct(?string $validDate = null, ?string $validCreationTravel = null)
    {
        $this
            ->setValidDate($validDate)
            ->setValidCreationTravel($validCreationTravel);
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierHistoricalInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierHistoricalInfo
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
}
