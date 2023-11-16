<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMediatorRevenue StructType
 * @subpackage Structs
 */
class MidocoMediatorRevenue extends MediatorRevenueDTO
{
    /**
     * The rowInExcelSheet
     * @var int|null
     */
    protected ?int $rowInExcelSheet = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The location
     * @var string|null
     */
    protected ?string $location = null;
    /**
     * The supplierName
     * @var string|null
     */
    protected ?string $supplierName = null;
    /**
     * The remark
     * @var string|null
     */
    protected ?string $remark = null;
    /**
     * Constructor method for MidocoMediatorRevenue
     * @uses MidocoMediatorRevenue::setRowInExcelSheet()
     * @uses MidocoMediatorRevenue::setMediatorId()
     * @uses MidocoMediatorRevenue::setName()
     * @uses MidocoMediatorRevenue::setLocation()
     * @uses MidocoMediatorRevenue::setSupplierName()
     * @uses MidocoMediatorRevenue::setRemark()
     * @param int $rowInExcelSheet
     * @param string $mediatorId
     * @param string $name
     * @param string $location
     * @param string $supplierName
     * @param string $remark
     */
    public function __construct(?int $rowInExcelSheet = null, ?string $mediatorId = null, ?string $name = null, ?string $location = null, ?string $supplierName = null, ?string $remark = null)
    {
        $this
            ->setRowInExcelSheet($rowInExcelSheet)
            ->setMediatorId($mediatorId)
            ->setName($name)
            ->setLocation($location)
            ->setSupplierName($supplierName)
            ->setRemark($remark);
    }
    /**
     * Get rowInExcelSheet value
     * @return int|null
     */
    public function getRowInExcelSheet(): ?int
    {
        return $this->rowInExcelSheet;
    }
    /**
     * Set rowInExcelSheet value
     * @param int $rowInExcelSheet
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorRevenue
     */
    public function setRowInExcelSheet(?int $rowInExcelSheet = null): self
    {
        // validation for constraint: int
        if (!is_null($rowInExcelSheet) && !(is_int($rowInExcelSheet) || ctype_digit($rowInExcelSheet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rowInExcelSheet, true), gettype($rowInExcelSheet)), __LINE__);
        }
        $this->rowInExcelSheet = $rowInExcelSheet;
        
        return $this;
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorRevenue
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorRevenue
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get location value
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }
    /**
     * Set location value
     * @param string $location
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorRevenue
     */
    public function setLocation(?string $location = null): self
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        $this->location = $location;
        
        return $this;
    }
    /**
     * Get supplierName value
     * @return string|null
     */
    public function getSupplierName(): ?string
    {
        return $this->supplierName;
    }
    /**
     * Set supplierName value
     * @param string $supplierName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorRevenue
     */
    public function setSupplierName(?string $supplierName = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierName) && !is_string($supplierName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierName, true), gettype($supplierName)), __LINE__);
        }
        $this->supplierName = $supplierName;
        
        return $this;
    }
    /**
     * Get remark value
     * @return string|null
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }
    /**
     * Set remark value
     * @param string $remark
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorRevenue
     */
    public function setRemark(?string $remark = null): self
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), gettype($remark)), __LINE__);
        }
        $this->remark = $remark;
        
        return $this;
    }
}
