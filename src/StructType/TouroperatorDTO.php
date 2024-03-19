<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TouroperatorDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TouroperatorDTO extends AbstractStructBase
{
    /**
     * The companyName
     * @var string|null
     */
    protected ?string $companyName = null;
    /**
     * The externalId
     * @var string|null
     */
    protected ?string $externalId = null;
    /**
     * The hashCode
     * @var string|null
     */
    protected ?string $hashCode = null;
    /**
     * The isOwn
     * @var bool|null
     */
    protected ?bool $isOwn = null;
    /**
     * The metaData
     * @var string|null
     */
    protected ?string $metaData = null;
    /**
     * The touroperatorId
     * @var int|null
     */
    protected ?int $touroperatorId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for TouroperatorDTO
     * @uses TouroperatorDTO::setCompanyName()
     * @uses TouroperatorDTO::setExternalId()
     * @uses TouroperatorDTO::setHashCode()
     * @uses TouroperatorDTO::setIsOwn()
     * @uses TouroperatorDTO::setMetaData()
     * @uses TouroperatorDTO::setTouroperatorId()
     * @uses TouroperatorDTO::setUnitName()
     * @param string $companyName
     * @param string $externalId
     * @param string $hashCode
     * @param bool $isOwn
     * @param string $metaData
     * @param int $touroperatorId
     * @param string $unitName
     */
    public function __construct(?string $companyName = null, ?string $externalId = null, ?string $hashCode = null, ?bool $isOwn = null, ?string $metaData = null, ?int $touroperatorId = null, ?string $unitName = null)
    {
        $this
            ->setCompanyName($companyName)
            ->setExternalId($externalId)
            ->setHashCode($hashCode)
            ->setIsOwn($isOwn)
            ->setMetaData($metaData)
            ->setTouroperatorId($touroperatorId)
            ->setUnitName($unitName);
    }
    /**
     * Get companyName value
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }
    /**
     * Set companyName value
     * @param string $companyName
     * @return \Pggns\MidocoApi\Order\StructType\TouroperatorDTO
     */
    public function setCompanyName(?string $companyName = null): self
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyName, true), gettype($companyName)), __LINE__);
        }
        $this->companyName = $companyName;
        
        return $this;
    }
    /**
     * Get externalId value
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }
    /**
     * Set externalId value
     * @param string $externalId
     * @return \Pggns\MidocoApi\Order\StructType\TouroperatorDTO
     */
    public function setExternalId(?string $externalId = null): self
    {
        // validation for constraint: string
        if (!is_null($externalId) && !is_string($externalId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalId, true), gettype($externalId)), __LINE__);
        }
        $this->externalId = $externalId;
        
        return $this;
    }
    /**
     * Get hashCode value
     * @return string|null
     */
    public function getHashCode(): ?string
    {
        return $this->hashCode;
    }
    /**
     * Set hashCode value
     * @param string $hashCode
     * @return \Pggns\MidocoApi\Order\StructType\TouroperatorDTO
     */
    public function setHashCode(?string $hashCode = null): self
    {
        // validation for constraint: string
        if (!is_null($hashCode) && !is_string($hashCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hashCode, true), gettype($hashCode)), __LINE__);
        }
        $this->hashCode = $hashCode;
        
        return $this;
    }
    /**
     * Get isOwn value
     * @return bool|null
     */
    public function getIsOwn(): ?bool
    {
        return $this->isOwn;
    }
    /**
     * Set isOwn value
     * @param bool $isOwn
     * @return \Pggns\MidocoApi\Order\StructType\TouroperatorDTO
     */
    public function setIsOwn(?bool $isOwn = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOwn) && !is_bool($isOwn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOwn, true), gettype($isOwn)), __LINE__);
        }
        $this->isOwn = $isOwn;
        
        return $this;
    }
    /**
     * Get metaData value
     * @return string|null
     */
    public function getMetaData(): ?string
    {
        return $this->metaData;
    }
    /**
     * Set metaData value
     * @param string $metaData
     * @return \Pggns\MidocoApi\Order\StructType\TouroperatorDTO
     */
    public function setMetaData(?string $metaData = null): self
    {
        // validation for constraint: string
        if (!is_null($metaData) && !is_string($metaData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($metaData, true), gettype($metaData)), __LINE__);
        }
        $this->metaData = $metaData;
        
        return $this;
    }
    /**
     * Get touroperatorId value
     * @return int|null
     */
    public function getTouroperatorId(): ?int
    {
        return $this->touroperatorId;
    }
    /**
     * Set touroperatorId value
     * @param int $touroperatorId
     * @return \Pggns\MidocoApi\Order\StructType\TouroperatorDTO
     */
    public function setTouroperatorId(?int $touroperatorId = null): self
    {
        // validation for constraint: int
        if (!is_null($touroperatorId) && !(is_int($touroperatorId) || ctype_digit($touroperatorId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($touroperatorId, true), gettype($touroperatorId)), __LINE__);
        }
        $this->touroperatorId = $touroperatorId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TouroperatorDTO
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
}
