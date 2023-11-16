<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrsAgencyDTO StructType
 * @subpackage Structs
 */
class CrsAgencyDTO extends AbstractStructBase
{
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The crsName
     * @var string|null
     */
    protected ?string $crsName = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for CrsAgencyDTO
     * @uses CrsAgencyDTO::setAgencyId()
     * @uses CrsAgencyDTO::setCrsName()
     * @uses CrsAgencyDTO::setUnitName()
     * @param string $agencyId
     * @param string $crsName
     * @param string $unitName
     */
    public function __construct(?string $agencyId = null, ?string $crsName = null, ?string $unitName = null)
    {
        $this
            ->setAgencyId($agencyId)
            ->setCrsName($crsName)
            ->setUnitName($unitName);
    }
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Order\StructType\CrsAgencyDTO
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get crsName value
     * @return string|null
     */
    public function getCrsName(): ?string
    {
        return $this->crsName;
    }
    /**
     * Set crsName value
     * @param string $crsName
     * @return \Pggns\MidocoApi\Order\StructType\CrsAgencyDTO
     */
    public function setCrsName(?string $crsName = null): self
    {
        // validation for constraint: string
        if (!is_null($crsName) && !is_string($crsName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crsName, true), gettype($crsName)), __LINE__);
        }
        $this->crsName = $crsName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrsAgencyDTO
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
