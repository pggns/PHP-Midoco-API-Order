<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReceiptExportAgencyDTO StructType
 * @subpackage Structs
 */
class ReceiptExportAgencyDTO extends AbstractStructBase
{
    /**
     * The agencyId
     * @var int|null
     */
    protected ?int $agencyId = null;
    /**
     * The printId
     * @var int|null
     */
    protected ?int $printId = null;
    /**
     * The supplierCity
     * @var string|null
     */
    protected ?string $supplierCity = null;
    /**
     * The supplierCountry
     * @var string|null
     */
    protected ?string $supplierCountry = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The supplierName
     * @var string|null
     */
    protected ?string $supplierName = null;
    /**
     * The supplierPostalCode
     * @var string|null
     */
    protected ?string $supplierPostalCode = null;
    /**
     * The supplierStreet
     * @var string|null
     */
    protected ?string $supplierStreet = null;
    /**
     * The supplierVatid
     * @var string|null
     */
    protected ?string $supplierVatid = null;
    /**
     * Constructor method for ReceiptExportAgencyDTO
     * @uses ReceiptExportAgencyDTO::setAgencyId()
     * @uses ReceiptExportAgencyDTO::setPrintId()
     * @uses ReceiptExportAgencyDTO::setSupplierCity()
     * @uses ReceiptExportAgencyDTO::setSupplierCountry()
     * @uses ReceiptExportAgencyDTO::setSupplierId()
     * @uses ReceiptExportAgencyDTO::setSupplierName()
     * @uses ReceiptExportAgencyDTO::setSupplierPostalCode()
     * @uses ReceiptExportAgencyDTO::setSupplierStreet()
     * @uses ReceiptExportAgencyDTO::setSupplierVatid()
     * @param int $agencyId
     * @param int $printId
     * @param string $supplierCity
     * @param string $supplierCountry
     * @param string $supplierId
     * @param string $supplierName
     * @param string $supplierPostalCode
     * @param string $supplierStreet
     * @param string $supplierVatid
     */
    public function __construct(?int $agencyId = null, ?int $printId = null, ?string $supplierCity = null, ?string $supplierCountry = null, ?string $supplierId = null, ?string $supplierName = null, ?string $supplierPostalCode = null, ?string $supplierStreet = null, ?string $supplierVatid = null)
    {
        $this
            ->setAgencyId($agencyId)
            ->setPrintId($printId)
            ->setSupplierCity($supplierCity)
            ->setSupplierCountry($supplierCountry)
            ->setSupplierId($supplierId)
            ->setSupplierName($supplierName)
            ->setSupplierPostalCode($supplierPostalCode)
            ->setSupplierStreet($supplierStreet)
            ->setSupplierVatid($supplierVatid);
    }
    /**
     * Get agencyId value
     * @return int|null
     */
    public function getAgencyId(): ?int
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param int $agencyId
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportAgencyDTO
     */
    public function setAgencyId(?int $agencyId = null): self
    {
        // validation for constraint: int
        if (!is_null($agencyId) && !(is_int($agencyId) || ctype_digit($agencyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get printId value
     * @return int|null
     */
    public function getPrintId(): ?int
    {
        return $this->printId;
    }
    /**
     * Set printId value
     * @param int $printId
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportAgencyDTO
     */
    public function setPrintId(?int $printId = null): self
    {
        // validation for constraint: int
        if (!is_null($printId) && !(is_int($printId) || ctype_digit($printId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printId, true), gettype($printId)), __LINE__);
        }
        $this->printId = $printId;
        
        return $this;
    }
    /**
     * Get supplierCity value
     * @return string|null
     */
    public function getSupplierCity(): ?string
    {
        return $this->supplierCity;
    }
    /**
     * Set supplierCity value
     * @param string $supplierCity
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportAgencyDTO
     */
    public function setSupplierCity(?string $supplierCity = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierCity) && !is_string($supplierCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCity, true), gettype($supplierCity)), __LINE__);
        }
        $this->supplierCity = $supplierCity;
        
        return $this;
    }
    /**
     * Get supplierCountry value
     * @return string|null
     */
    public function getSupplierCountry(): ?string
    {
        return $this->supplierCountry;
    }
    /**
     * Set supplierCountry value
     * @param string $supplierCountry
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportAgencyDTO
     */
    public function setSupplierCountry(?string $supplierCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierCountry) && !is_string($supplierCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCountry, true), gettype($supplierCountry)), __LINE__);
        }
        $this->supplierCountry = $supplierCountry;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportAgencyDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportAgencyDTO
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
     * Get supplierPostalCode value
     * @return string|null
     */
    public function getSupplierPostalCode(): ?string
    {
        return $this->supplierPostalCode;
    }
    /**
     * Set supplierPostalCode value
     * @param string $supplierPostalCode
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportAgencyDTO
     */
    public function setSupplierPostalCode(?string $supplierPostalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierPostalCode) && !is_string($supplierPostalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierPostalCode, true), gettype($supplierPostalCode)), __LINE__);
        }
        $this->supplierPostalCode = $supplierPostalCode;
        
        return $this;
    }
    /**
     * Get supplierStreet value
     * @return string|null
     */
    public function getSupplierStreet(): ?string
    {
        return $this->supplierStreet;
    }
    /**
     * Set supplierStreet value
     * @param string $supplierStreet
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportAgencyDTO
     */
    public function setSupplierStreet(?string $supplierStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierStreet) && !is_string($supplierStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierStreet, true), gettype($supplierStreet)), __LINE__);
        }
        $this->supplierStreet = $supplierStreet;
        
        return $this;
    }
    /**
     * Get supplierVatid value
     * @return string|null
     */
    public function getSupplierVatid(): ?string
    {
        return $this->supplierVatid;
    }
    /**
     * Set supplierVatid value
     * @param string $supplierVatid
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportAgencyDTO
     */
    public function setSupplierVatid(?string $supplierVatid = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierVatid) && !is_string($supplierVatid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierVatid, true), gettype($supplierVatid)), __LINE__);
        }
        $this->supplierVatid = $supplierVatid;
        
        return $this;
    }
}
