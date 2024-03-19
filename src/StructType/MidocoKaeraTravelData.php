<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoKaeraTravelData StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoKaeraTravelData extends AbstractStructBase
{
    /**
     * The bookingdate
     * @var string|null
     */
    protected ?string $bookingdate = null;
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The customerfirstname
     * @var string|null
     */
    protected ?string $customerfirstname = null;
    /**
     * The customername
     * @var string|null
     */
    protected ?string $customername = null;
    /**
     * The numberpersons
     * @var int|null
     */
    protected ?int $numberpersons = null;
    /**
     * The travelcost
     * @var float|null
     */
    protected ?float $travelcost = null;
    /**
     * The travelend
     * @var string|null
     */
    protected ?string $travelend = null;
    /**
     * The travelstart
     * @var string|null
     */
    protected ?string $travelstart = null;
    /**
     * The traveltype
     * @var int|null
     */
    protected ?int $traveltype = null;
    /**
     * The travelCategory
     * @var int|null
     */
    protected ?int $travelCategory = null;
    /**
     * Constructor method for MidocoKaeraTravelData
     * @uses MidocoKaeraTravelData::setBookingdate()
     * @uses MidocoKaeraTravelData::setCountry()
     * @uses MidocoKaeraTravelData::setCustomerfirstname()
     * @uses MidocoKaeraTravelData::setCustomername()
     * @uses MidocoKaeraTravelData::setNumberpersons()
     * @uses MidocoKaeraTravelData::setTravelcost()
     * @uses MidocoKaeraTravelData::setTravelend()
     * @uses MidocoKaeraTravelData::setTravelstart()
     * @uses MidocoKaeraTravelData::setTraveltype()
     * @uses MidocoKaeraTravelData::setTravelCategory()
     * @param string $bookingdate
     * @param string $country
     * @param string $customerfirstname
     * @param string $customername
     * @param int $numberpersons
     * @param float $travelcost
     * @param string $travelend
     * @param string $travelstart
     * @param int $traveltype
     * @param int $travelCategory
     */
    public function __construct(?string $bookingdate = null, ?string $country = null, ?string $customerfirstname = null, ?string $customername = null, ?int $numberpersons = null, ?float $travelcost = null, ?string $travelend = null, ?string $travelstart = null, ?int $traveltype = null, ?int $travelCategory = null)
    {
        $this
            ->setBookingdate($bookingdate)
            ->setCountry($country)
            ->setCustomerfirstname($customerfirstname)
            ->setCustomername($customername)
            ->setNumberpersons($numberpersons)
            ->setTravelcost($travelcost)
            ->setTravelend($travelend)
            ->setTravelstart($travelstart)
            ->setTraveltype($traveltype)
            ->setTravelCategory($travelCategory);
    }
    /**
     * Get bookingdate value
     * @return string|null
     */
    public function getBookingdate(): ?string
    {
        return $this->bookingdate;
    }
    /**
     * Set bookingdate value
     * @param string $bookingdate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraTravelData
     */
    public function setBookingdate(?string $bookingdate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingdate) && !is_string($bookingdate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingdate, true), gettype($bookingdate)), __LINE__);
        }
        $this->bookingdate = $bookingdate;
        
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraTravelData
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        
        return $this;
    }
    /**
     * Get customerfirstname value
     * @return string|null
     */
    public function getCustomerfirstname(): ?string
    {
        return $this->customerfirstname;
    }
    /**
     * Set customerfirstname value
     * @param string $customerfirstname
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraTravelData
     */
    public function setCustomerfirstname(?string $customerfirstname = null): self
    {
        // validation for constraint: string
        if (!is_null($customerfirstname) && !is_string($customerfirstname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerfirstname, true), gettype($customerfirstname)), __LINE__);
        }
        $this->customerfirstname = $customerfirstname;
        
        return $this;
    }
    /**
     * Get customername value
     * @return string|null
     */
    public function getCustomername(): ?string
    {
        return $this->customername;
    }
    /**
     * Set customername value
     * @param string $customername
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraTravelData
     */
    public function setCustomername(?string $customername = null): self
    {
        // validation for constraint: string
        if (!is_null($customername) && !is_string($customername)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customername, true), gettype($customername)), __LINE__);
        }
        $this->customername = $customername;
        
        return $this;
    }
    /**
     * Get numberpersons value
     * @return int|null
     */
    public function getNumberpersons(): ?int
    {
        return $this->numberpersons;
    }
    /**
     * Set numberpersons value
     * @param int $numberpersons
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraTravelData
     */
    public function setNumberpersons(?int $numberpersons = null): self
    {
        // validation for constraint: int
        if (!is_null($numberpersons) && !(is_int($numberpersons) || ctype_digit($numberpersons))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberpersons, true), gettype($numberpersons)), __LINE__);
        }
        $this->numberpersons = $numberpersons;
        
        return $this;
    }
    /**
     * Get travelcost value
     * @return float|null
     */
    public function getTravelcost(): ?float
    {
        return $this->travelcost;
    }
    /**
     * Set travelcost value
     * @param float $travelcost
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraTravelData
     */
    public function setTravelcost(?float $travelcost = null): self
    {
        // validation for constraint: float
        if (!is_null($travelcost) && !(is_float($travelcost) || is_numeric($travelcost))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($travelcost, true), gettype($travelcost)), __LINE__);
        }
        $this->travelcost = $travelcost;
        
        return $this;
    }
    /**
     * Get travelend value
     * @return string|null
     */
    public function getTravelend(): ?string
    {
        return $this->travelend;
    }
    /**
     * Set travelend value
     * @param string $travelend
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraTravelData
     */
    public function setTravelend(?string $travelend = null): self
    {
        // validation for constraint: string
        if (!is_null($travelend) && !is_string($travelend)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelend, true), gettype($travelend)), __LINE__);
        }
        $this->travelend = $travelend;
        
        return $this;
    }
    /**
     * Get travelstart value
     * @return string|null
     */
    public function getTravelstart(): ?string
    {
        return $this->travelstart;
    }
    /**
     * Set travelstart value
     * @param string $travelstart
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraTravelData
     */
    public function setTravelstart(?string $travelstart = null): self
    {
        // validation for constraint: string
        if (!is_null($travelstart) && !is_string($travelstart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelstart, true), gettype($travelstart)), __LINE__);
        }
        $this->travelstart = $travelstart;
        
        return $this;
    }
    /**
     * Get traveltype value
     * @return int|null
     */
    public function getTraveltype(): ?int
    {
        return $this->traveltype;
    }
    /**
     * Set traveltype value
     * @param int $traveltype
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraTravelData
     */
    public function setTraveltype(?int $traveltype = null): self
    {
        // validation for constraint: int
        if (!is_null($traveltype) && !(is_int($traveltype) || ctype_digit($traveltype))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($traveltype, true), gettype($traveltype)), __LINE__);
        }
        $this->traveltype = $traveltype;
        
        return $this;
    }
    /**
     * Get travelCategory value
     * @return int|null
     */
    public function getTravelCategory(): ?int
    {
        return $this->travelCategory;
    }
    /**
     * Set travelCategory value
     * @param int $travelCategory
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraTravelData
     */
    public function setTravelCategory(?int $travelCategory = null): self
    {
        // validation for constraint: int
        if (!is_null($travelCategory) && !(is_int($travelCategory) || ctype_digit($travelCategory))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelCategory, true), gettype($travelCategory)), __LINE__);
        }
        $this->travelCategory = $travelCategory;
        
        return $this;
    }
}
