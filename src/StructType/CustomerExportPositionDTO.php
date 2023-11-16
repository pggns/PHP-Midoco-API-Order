<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerExportPositionDTO StructType
 * @subpackage Structs
 */
class CustomerExportPositionDTO extends AbstractStructBase
{
    /**
     * The customer
     * @var string|null
     */
    protected ?string $customer = null;
    /**
     * The exportId
     * @var int|null
     */
    protected ?int $exportId = null;
    /**
     * The exportedData
     * @var string|null
     */
    protected ?string $exportedData = null;
    /**
     * The posType
     * @var string|null
     */
    protected ?string $posType = null;
    /**
     * Constructor method for CustomerExportPositionDTO
     * @uses CustomerExportPositionDTO::setCustomer()
     * @uses CustomerExportPositionDTO::setExportId()
     * @uses CustomerExportPositionDTO::setExportedData()
     * @uses CustomerExportPositionDTO::setPosType()
     * @param string $customer
     * @param int $exportId
     * @param string $exportedData
     * @param string $posType
     */
    public function __construct(?string $customer = null, ?int $exportId = null, ?string $exportedData = null, ?string $posType = null)
    {
        $this
            ->setCustomer($customer)
            ->setExportId($exportId)
            ->setExportedData($exportedData)
            ->setPosType($posType);
    }
    /**
     * Get customer value
     * @return string|null
     */
    public function getCustomer(): ?string
    {
        return $this->customer;
    }
    /**
     * Set customer value
     * @param string $customer
     * @return \Pggns\MidocoApi\Order\StructType\CustomerExportPositionDTO
     */
    public function setCustomer(?string $customer = null): self
    {
        // validation for constraint: string
        if (!is_null($customer) && !is_string($customer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer, true), gettype($customer)), __LINE__);
        }
        $this->customer = $customer;
        
        return $this;
    }
    /**
     * Get exportId value
     * @return int|null
     */
    public function getExportId(): ?int
    {
        return $this->exportId;
    }
    /**
     * Set exportId value
     * @param int $exportId
     * @return \Pggns\MidocoApi\Order\StructType\CustomerExportPositionDTO
     */
    public function setExportId(?int $exportId = null): self
    {
        // validation for constraint: int
        if (!is_null($exportId) && !(is_int($exportId) || ctype_digit($exportId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($exportId, true), gettype($exportId)), __LINE__);
        }
        $this->exportId = $exportId;
        
        return $this;
    }
    /**
     * Get exportedData value
     * @return string|null
     */
    public function getExportedData(): ?string
    {
        return $this->exportedData;
    }
    /**
     * Set exportedData value
     * @param string $exportedData
     * @return \Pggns\MidocoApi\Order\StructType\CustomerExportPositionDTO
     */
    public function setExportedData(?string $exportedData = null): self
    {
        // validation for constraint: string
        if (!is_null($exportedData) && !is_string($exportedData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportedData, true), gettype($exportedData)), __LINE__);
        }
        $this->exportedData = $exportedData;
        
        return $this;
    }
    /**
     * Get posType value
     * @return string|null
     */
    public function getPosType(): ?string
    {
        return $this->posType;
    }
    /**
     * Set posType value
     * @param string $posType
     * @return \Pggns\MidocoApi\Order\StructType\CustomerExportPositionDTO
     */
    public function setPosType(?string $posType = null): self
    {
        // validation for constraint: string
        if (!is_null($posType) && !is_string($posType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($posType, true), gettype($posType)), __LINE__);
        }
        $this->posType = $posType;
        
        return $this;
    }
}
