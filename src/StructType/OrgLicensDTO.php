<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrgLicensDTO StructType
 * @subpackage Structs
 */
class OrgLicensDTO extends AbstractStructBase
{
    /**
     * The licenseKey
     * @var string|null
     */
    protected ?string $licenseKey = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for OrgLicensDTO
     * @uses OrgLicensDTO::setLicenseKey()
     * @uses OrgLicensDTO::setUnitName()
     * @param string $licenseKey
     * @param string $unitName
     */
    public function __construct(?string $licenseKey = null, ?string $unitName = null)
    {
        $this
            ->setLicenseKey($licenseKey)
            ->setUnitName($unitName);
    }
    /**
     * Get licenseKey value
     * @return string|null
     */
    public function getLicenseKey(): ?string
    {
        return $this->licenseKey;
    }
    /**
     * Set licenseKey value
     * @param string $licenseKey
     * @return \Pggns\MidocoApi\Order\StructType\OrgLicensDTO
     */
    public function setLicenseKey(?string $licenseKey = null): self
    {
        // validation for constraint: string
        if (!is_null($licenseKey) && !is_string($licenseKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($licenseKey, true), gettype($licenseKey)), __LINE__);
        }
        $this->licenseKey = $licenseKey;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgLicensDTO
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
