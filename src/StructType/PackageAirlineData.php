<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageAirlineData StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PackageAirlineData extends AbstractStructBase
{
    /**
     * The packageCode
     * @var string|null
     */
    protected ?string $packageCode = null;
    /**
     * The bspCode
     * @var string|null
     */
    protected ?string $bspCode = null;
    /**
     * The carrierCode
     * @var string|null
     */
    protected ?string $carrierCode = null;
    /**
     * The allNoVatTickets
     * @var bool|null
     */
    protected ?bool $allNoVatTickets = null;
    /**
     * The allITPositions
     * @var bool|null
     */
    protected ?bool $allITPositions = null;
    /**
     * Constructor method for PackageAirlineData
     * @uses PackageAirlineData::setPackageCode()
     * @uses PackageAirlineData::setBspCode()
     * @uses PackageAirlineData::setCarrierCode()
     * @uses PackageAirlineData::setAllNoVatTickets()
     * @uses PackageAirlineData::setAllITPositions()
     * @param string $packageCode
     * @param string $bspCode
     * @param string $carrierCode
     * @param bool $allNoVatTickets
     * @param bool $allITPositions
     */
    public function __construct(?string $packageCode = null, ?string $bspCode = null, ?string $carrierCode = null, ?bool $allNoVatTickets = null, ?bool $allITPositions = null)
    {
        $this
            ->setPackageCode($packageCode)
            ->setBspCode($bspCode)
            ->setCarrierCode($carrierCode)
            ->setAllNoVatTickets($allNoVatTickets)
            ->setAllITPositions($allITPositions);
    }
    /**
     * Get packageCode value
     * @return string|null
     */
    public function getPackageCode(): ?string
    {
        return $this->packageCode;
    }
    /**
     * Set packageCode value
     * @param string $packageCode
     * @return \Pggns\MidocoApi\Order\StructType\PackageAirlineData
     */
    public function setPackageCode(?string $packageCode = null): self
    {
        // validation for constraint: string
        if (!is_null($packageCode) && !is_string($packageCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageCode, true), gettype($packageCode)), __LINE__);
        }
        $this->packageCode = $packageCode;
        
        return $this;
    }
    /**
     * Get bspCode value
     * @return string|null
     */
    public function getBspCode(): ?string
    {
        return $this->bspCode;
    }
    /**
     * Set bspCode value
     * @param string $bspCode
     * @return \Pggns\MidocoApi\Order\StructType\PackageAirlineData
     */
    public function setBspCode(?string $bspCode = null): self
    {
        // validation for constraint: string
        if (!is_null($bspCode) && !is_string($bspCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bspCode, true), gettype($bspCode)), __LINE__);
        }
        $this->bspCode = $bspCode;
        
        return $this;
    }
    /**
     * Get carrierCode value
     * @return string|null
     */
    public function getCarrierCode(): ?string
    {
        return $this->carrierCode;
    }
    /**
     * Set carrierCode value
     * @param string $carrierCode
     * @return \Pggns\MidocoApi\Order\StructType\PackageAirlineData
     */
    public function setCarrierCode(?string $carrierCode = null): self
    {
        // validation for constraint: string
        if (!is_null($carrierCode) && !is_string($carrierCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrierCode, true), gettype($carrierCode)), __LINE__);
        }
        $this->carrierCode = $carrierCode;
        
        return $this;
    }
    /**
     * Get allNoVatTickets value
     * @return bool|null
     */
    public function getAllNoVatTickets(): ?bool
    {
        return $this->allNoVatTickets;
    }
    /**
     * Set allNoVatTickets value
     * @param bool $allNoVatTickets
     * @return \Pggns\MidocoApi\Order\StructType\PackageAirlineData
     */
    public function setAllNoVatTickets(?bool $allNoVatTickets = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allNoVatTickets) && !is_bool($allNoVatTickets)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allNoVatTickets, true), gettype($allNoVatTickets)), __LINE__);
        }
        $this->allNoVatTickets = $allNoVatTickets;
        
        return $this;
    }
    /**
     * Get allITPositions value
     * @return bool|null
     */
    public function getAllITPositions(): ?bool
    {
        return $this->allITPositions;
    }
    /**
     * Set allITPositions value
     * @param bool $allITPositions
     * @return \Pggns\MidocoApi\Order\StructType\PackageAirlineData
     */
    public function setAllITPositions(?bool $allITPositions = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allITPositions) && !is_bool($allITPositions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allITPositions, true), gettype($allITPositions)), __LINE__);
        }
        $this->allITPositions = $allITPositions;
        
        return $this;
    }
}
