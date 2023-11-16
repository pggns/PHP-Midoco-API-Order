<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReceiptExportOrgunitDTO StructType
 * @subpackage Structs
 */
class ReceiptExportOrgunitDTO extends AbstractStructBase
{
    /**
     * The printId
     * @var int|null
     */
    protected ?int $printId = null;
    /**
     * The unitCity
     * @var string|null
     */
    protected ?string $unitCity = null;
    /**
     * The unitCountry
     * @var string|null
     */
    protected ?string $unitCountry = null;
    /**
     * The unitId
     * @var int|null
     */
    protected ?int $unitId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The unitPostalcode
     * @var string|null
     */
    protected ?string $unitPostalcode = null;
    /**
     * The unitPrintname
     * @var string|null
     */
    protected ?string $unitPrintname = null;
    /**
     * The unitStreet
     * @var string|null
     */
    protected ?string $unitStreet = null;
    /**
     * The unitVatid
     * @var string|null
     */
    protected ?string $unitVatid = null;
    /**
     * Constructor method for ReceiptExportOrgunitDTO
     * @uses ReceiptExportOrgunitDTO::setPrintId()
     * @uses ReceiptExportOrgunitDTO::setUnitCity()
     * @uses ReceiptExportOrgunitDTO::setUnitCountry()
     * @uses ReceiptExportOrgunitDTO::setUnitId()
     * @uses ReceiptExportOrgunitDTO::setUnitName()
     * @uses ReceiptExportOrgunitDTO::setUnitPostalcode()
     * @uses ReceiptExportOrgunitDTO::setUnitPrintname()
     * @uses ReceiptExportOrgunitDTO::setUnitStreet()
     * @uses ReceiptExportOrgunitDTO::setUnitVatid()
     * @param int $printId
     * @param string $unitCity
     * @param string $unitCountry
     * @param int $unitId
     * @param string $unitName
     * @param string $unitPostalcode
     * @param string $unitPrintname
     * @param string $unitStreet
     * @param string $unitVatid
     */
    public function __construct(?int $printId = null, ?string $unitCity = null, ?string $unitCountry = null, ?int $unitId = null, ?string $unitName = null, ?string $unitPostalcode = null, ?string $unitPrintname = null, ?string $unitStreet = null, ?string $unitVatid = null)
    {
        $this
            ->setPrintId($printId)
            ->setUnitCity($unitCity)
            ->setUnitCountry($unitCountry)
            ->setUnitId($unitId)
            ->setUnitName($unitName)
            ->setUnitPostalcode($unitPostalcode)
            ->setUnitPrintname($unitPrintname)
            ->setUnitStreet($unitStreet)
            ->setUnitVatid($unitVatid);
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportOrgunitDTO
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
     * Get unitCity value
     * @return string|null
     */
    public function getUnitCity(): ?string
    {
        return $this->unitCity;
    }
    /**
     * Set unitCity value
     * @param string $unitCity
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportOrgunitDTO
     */
    public function setUnitCity(?string $unitCity = null): self
    {
        // validation for constraint: string
        if (!is_null($unitCity) && !is_string($unitCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitCity, true), gettype($unitCity)), __LINE__);
        }
        $this->unitCity = $unitCity;
        
        return $this;
    }
    /**
     * Get unitCountry value
     * @return string|null
     */
    public function getUnitCountry(): ?string
    {
        return $this->unitCountry;
    }
    /**
     * Set unitCountry value
     * @param string $unitCountry
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportOrgunitDTO
     */
    public function setUnitCountry(?string $unitCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($unitCountry) && !is_string($unitCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitCountry, true), gettype($unitCountry)), __LINE__);
        }
        $this->unitCountry = $unitCountry;
        
        return $this;
    }
    /**
     * Get unitId value
     * @return int|null
     */
    public function getUnitId(): ?int
    {
        return $this->unitId;
    }
    /**
     * Set unitId value
     * @param int $unitId
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportOrgunitDTO
     */
    public function setUnitId(?int $unitId = null): self
    {
        // validation for constraint: int
        if (!is_null($unitId) && !(is_int($unitId) || ctype_digit($unitId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($unitId, true), gettype($unitId)), __LINE__);
        }
        $this->unitId = $unitId;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportOrgunitDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get unitPostalcode value
     * @return string|null
     */
    public function getUnitPostalcode(): ?string
    {
        return $this->unitPostalcode;
    }
    /**
     * Set unitPostalcode value
     * @param string $unitPostalcode
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportOrgunitDTO
     */
    public function setUnitPostalcode(?string $unitPostalcode = null): self
    {
        // validation for constraint: string
        if (!is_null($unitPostalcode) && !is_string($unitPostalcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitPostalcode, true), gettype($unitPostalcode)), __LINE__);
        }
        $this->unitPostalcode = $unitPostalcode;
        
        return $this;
    }
    /**
     * Get unitPrintname value
     * @return string|null
     */
    public function getUnitPrintname(): ?string
    {
        return $this->unitPrintname;
    }
    /**
     * Set unitPrintname value
     * @param string $unitPrintname
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportOrgunitDTO
     */
    public function setUnitPrintname(?string $unitPrintname = null): self
    {
        // validation for constraint: string
        if (!is_null($unitPrintname) && !is_string($unitPrintname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitPrintname, true), gettype($unitPrintname)), __LINE__);
        }
        $this->unitPrintname = $unitPrintname;
        
        return $this;
    }
    /**
     * Get unitStreet value
     * @return string|null
     */
    public function getUnitStreet(): ?string
    {
        return $this->unitStreet;
    }
    /**
     * Set unitStreet value
     * @param string $unitStreet
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportOrgunitDTO
     */
    public function setUnitStreet(?string $unitStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($unitStreet) && !is_string($unitStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitStreet, true), gettype($unitStreet)), __LINE__);
        }
        $this->unitStreet = $unitStreet;
        
        return $this;
    }
    /**
     * Get unitVatid value
     * @return string|null
     */
    public function getUnitVatid(): ?string
    {
        return $this->unitVatid;
    }
    /**
     * Set unitVatid value
     * @param string $unitVatid
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportOrgunitDTO
     */
    public function setUnitVatid(?string $unitVatid = null): self
    {
        // validation for constraint: string
        if (!is_null($unitVatid) && !is_string($unitVatid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitVatid, true), gettype($unitVatid)), __LINE__);
        }
        $this->unitVatid = $unitVatid;
        
        return $this;
    }
}
