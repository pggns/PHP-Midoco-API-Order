<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for busServiceType StructType
 * @subpackage Structs
 */
class BusServiceType extends AbstractStructBase
{
    /**
     * The position
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $position;
    /**
     * The serviceCode
     * @var string|null
     */
    protected ?string $serviceCode = null;
    /**
     * The serviceName
     * @var string|null
     */
    protected ?string $serviceName = null;
    /**
     * The serviceDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceDescription = null;
    /**
     * The accomodationCode
     * @var string|null
     */
    protected ?string $accomodationCode = null;
    /**
     * The accomodationDesc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accomodationDesc = null;
    /**
     * The outwardFromDate
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $outwardFromDate = null;
    /**
     * The outwardFromTime
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $outwardFromTime = null;
    /**
     * The outwardFromCityCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $outwardFromCityCode = null;
    /**
     * The outwardFromCityDesc
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 64
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $outwardFromCityDesc = null;
    /**
     * The outwardToDate
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $outwardToDate = null;
    /**
     * The outwardToTime
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $outwardToTime = null;
    /**
     * The outwardToCityCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $outwardToCityCode = null;
    /**
     * The outwardToCityDesc
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 64
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $outwardToCityDesc = null;
    /**
     * The outwardSeat
     * @var string|null
     */
    protected ?string $outwardSeat = null;
    /**
     * The outwardPlatform
     * @var string|null
     */
    protected ?string $outwardPlatform = null;
    /**
     * The returnFromDate
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $returnFromDate = null;
    /**
     * The returnFromTime
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $returnFromTime = null;
    /**
     * The returnFromCityCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $returnFromCityCode = null;
    /**
     * The returnFromCityDesc
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 64
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $returnFromCityDesc = null;
    /**
     * The returnToDate
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $returnToDate = null;
    /**
     * The returnToTime
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $returnToTime = null;
    /**
     * The returnToCityCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $returnToCityCode = null;
    /**
     * The returnToCityDesc
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 64
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $returnToCityDesc = null;
    /**
     * The returnSeat
     * @var string|null
     */
    protected ?string $returnSeat = null;
    /**
     * The returnPlatform
     * @var string|null
     */
    protected ?string $returnPlatform = null;
    /**
     * The transfer
     * @var string|null
     */
    protected ?string $transfer = null;
    /**
     * The serviceStatus
     * @var string|null
     */
    protected ?string $serviceStatus = null;
    /**
     * The personAssignment
     * @var string|null
     */
    protected ?string $personAssignment = null;
    /**
     * The servicePrice
     * @var float|null
     */
    protected ?float $servicePrice = null;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - default: EUR
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The vatIncluded
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $vatIncluded = null;
    /**
     * The paxPerService
     * @var int|null
     */
    protected ?int $paxPerService = null;
    /**
     * The noOfNights
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfNights = null;
    /**
     * Constructor method for busServiceType
     * @uses BusServiceType::setPosition()
     * @uses BusServiceType::setServiceCode()
     * @uses BusServiceType::setServiceName()
     * @uses BusServiceType::setServiceDescription()
     * @uses BusServiceType::setAccomodationCode()
     * @uses BusServiceType::setAccomodationDesc()
     * @uses BusServiceType::setOutwardFromDate()
     * @uses BusServiceType::setOutwardFromTime()
     * @uses BusServiceType::setOutwardFromCityCode()
     * @uses BusServiceType::setOutwardFromCityDesc()
     * @uses BusServiceType::setOutwardToDate()
     * @uses BusServiceType::setOutwardToTime()
     * @uses BusServiceType::setOutwardToCityCode()
     * @uses BusServiceType::setOutwardToCityDesc()
     * @uses BusServiceType::setOutwardSeat()
     * @uses BusServiceType::setOutwardPlatform()
     * @uses BusServiceType::setReturnFromDate()
     * @uses BusServiceType::setReturnFromTime()
     * @uses BusServiceType::setReturnFromCityCode()
     * @uses BusServiceType::setReturnFromCityDesc()
     * @uses BusServiceType::setReturnToDate()
     * @uses BusServiceType::setReturnToTime()
     * @uses BusServiceType::setReturnToCityCode()
     * @uses BusServiceType::setReturnToCityDesc()
     * @uses BusServiceType::setReturnSeat()
     * @uses BusServiceType::setReturnPlatform()
     * @uses BusServiceType::setTransfer()
     * @uses BusServiceType::setServiceStatus()
     * @uses BusServiceType::setPersonAssignment()
     * @uses BusServiceType::setServicePrice()
     * @uses BusServiceType::setCurrency()
     * @uses BusServiceType::setVatIncluded()
     * @uses BusServiceType::setPaxPerService()
     * @uses BusServiceType::setNoOfNights()
     * @param int $position
     * @param string $serviceCode
     * @param string $serviceName
     * @param string $serviceDescription
     * @param string $accomodationCode
     * @param string $accomodationDesc
     * @param string $outwardFromDate
     * @param string $outwardFromTime
     * @param string $outwardFromCityCode
     * @param string $outwardFromCityDesc
     * @param string $outwardToDate
     * @param string $outwardToTime
     * @param string $outwardToCityCode
     * @param string $outwardToCityDesc
     * @param string $outwardSeat
     * @param string $outwardPlatform
     * @param string $returnFromDate
     * @param string $returnFromTime
     * @param string $returnFromCityCode
     * @param string $returnFromCityDesc
     * @param string $returnToDate
     * @param string $returnToTime
     * @param string $returnToCityCode
     * @param string $returnToCityDesc
     * @param string $returnSeat
     * @param string $returnPlatform
     * @param string $transfer
     * @param string $serviceStatus
     * @param string $personAssignment
     * @param float $servicePrice
     * @param string $currency
     * @param bool $vatIncluded
     * @param int $paxPerService
     * @param int $noOfNights
     */
    public function __construct(int $position, ?string $serviceCode = null, ?string $serviceName = null, ?string $serviceDescription = null, ?string $accomodationCode = null, ?string $accomodationDesc = null, ?string $outwardFromDate = null, ?string $outwardFromTime = null, ?string $outwardFromCityCode = null, ?string $outwardFromCityDesc = null, ?string $outwardToDate = null, ?string $outwardToTime = null, ?string $outwardToCityCode = null, ?string $outwardToCityDesc = null, ?string $outwardSeat = null, ?string $outwardPlatform = null, ?string $returnFromDate = null, ?string $returnFromTime = null, ?string $returnFromCityCode = null, ?string $returnFromCityDesc = null, ?string $returnToDate = null, ?string $returnToTime = null, ?string $returnToCityCode = null, ?string $returnToCityDesc = null, ?string $returnSeat = null, ?string $returnPlatform = null, ?string $transfer = null, ?string $serviceStatus = null, ?string $personAssignment = null, ?float $servicePrice = null, ?string $currency = 'EUR', ?bool $vatIncluded = false, ?int $paxPerService = null, ?int $noOfNights = null)
    {
        $this
            ->setPosition($position)
            ->setServiceCode($serviceCode)
            ->setServiceName($serviceName)
            ->setServiceDescription($serviceDescription)
            ->setAccomodationCode($accomodationCode)
            ->setAccomodationDesc($accomodationDesc)
            ->setOutwardFromDate($outwardFromDate)
            ->setOutwardFromTime($outwardFromTime)
            ->setOutwardFromCityCode($outwardFromCityCode)
            ->setOutwardFromCityDesc($outwardFromCityDesc)
            ->setOutwardToDate($outwardToDate)
            ->setOutwardToTime($outwardToTime)
            ->setOutwardToCityCode($outwardToCityCode)
            ->setOutwardToCityDesc($outwardToCityDesc)
            ->setOutwardSeat($outwardSeat)
            ->setOutwardPlatform($outwardPlatform)
            ->setReturnFromDate($returnFromDate)
            ->setReturnFromTime($returnFromTime)
            ->setReturnFromCityCode($returnFromCityCode)
            ->setReturnFromCityDesc($returnFromCityDesc)
            ->setReturnToDate($returnToDate)
            ->setReturnToTime($returnToTime)
            ->setReturnToCityCode($returnToCityCode)
            ->setReturnToCityDesc($returnToCityDesc)
            ->setReturnSeat($returnSeat)
            ->setReturnPlatform($returnPlatform)
            ->setTransfer($transfer)
            ->setServiceStatus($serviceStatus)
            ->setPersonAssignment($personAssignment)
            ->setServicePrice($servicePrice)
            ->setCurrency($currency)
            ->setVatIncluded($vatIncluded)
            ->setPaxPerService($paxPerService)
            ->setNoOfNights($noOfNights);
    }
    /**
     * Get position value
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setPosition(int $position): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get serviceCode value
     * @return string|null
     */
    public function getServiceCode(): ?string
    {
        return $this->serviceCode;
    }
    /**
     * Set serviceCode value
     * @param string $serviceCode
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setServiceCode(?string $serviceCode = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceCode) && !is_string($serviceCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceCode, true), gettype($serviceCode)), __LINE__);
        }
        $this->serviceCode = $serviceCode;
        
        return $this;
    }
    /**
     * Get serviceName value
     * @return string|null
     */
    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }
    /**
     * Set serviceName value
     * @param string $serviceName
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setServiceName(?string $serviceName = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceName) && !is_string($serviceName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceName, true), gettype($serviceName)), __LINE__);
        }
        $this->serviceName = $serviceName;
        
        return $this;
    }
    /**
     * Get serviceDescription value
     * @return string|null
     */
    public function getServiceDescription(): ?string
    {
        return $this->serviceDescription;
    }
    /**
     * Set serviceDescription value
     * @param string $serviceDescription
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setServiceDescription(?string $serviceDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceDescription) && !is_string($serviceDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceDescription, true), gettype($serviceDescription)), __LINE__);
        }
        $this->serviceDescription = $serviceDescription;
        
        return $this;
    }
    /**
     * Get accomodationCode value
     * @return string|null
     */
    public function getAccomodationCode(): ?string
    {
        return $this->accomodationCode;
    }
    /**
     * Set accomodationCode value
     * @param string $accomodationCode
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setAccomodationCode(?string $accomodationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodationCode) && !is_string($accomodationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodationCode, true), gettype($accomodationCode)), __LINE__);
        }
        $this->accomodationCode = $accomodationCode;
        
        return $this;
    }
    /**
     * Get accomodationDesc value
     * @return string|null
     */
    public function getAccomodationDesc(): ?string
    {
        return $this->accomodationDesc;
    }
    /**
     * Set accomodationDesc value
     * @param string $accomodationDesc
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setAccomodationDesc(?string $accomodationDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodationDesc) && !is_string($accomodationDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodationDesc, true), gettype($accomodationDesc)), __LINE__);
        }
        $this->accomodationDesc = $accomodationDesc;
        
        return $this;
    }
    /**
     * Get outwardFromDate value
     * @return string|null
     */
    public function getOutwardFromDate(): ?string
    {
        return $this->outwardFromDate;
    }
    /**
     * Set outwardFromDate value
     * @param string $outwardFromDate
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setOutwardFromDate(?string $outwardFromDate = null): self
    {
        // validation for constraint: string
        if (!is_null($outwardFromDate) && !is_string($outwardFromDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outwardFromDate, true), gettype($outwardFromDate)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($outwardFromDate) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $outwardFromDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($outwardFromDate, true)), __LINE__);
        }
        $this->outwardFromDate = $outwardFromDate;
        
        return $this;
    }
    /**
     * Get outwardFromTime value
     * @return string|null
     */
    public function getOutwardFromTime(): ?string
    {
        return $this->outwardFromTime;
    }
    /**
     * Set outwardFromTime value
     * @param string $outwardFromTime
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setOutwardFromTime(?string $outwardFromTime = null): self
    {
        // validation for constraint: string
        if (!is_null($outwardFromTime) && !is_string($outwardFromTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outwardFromTime, true), gettype($outwardFromTime)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($outwardFromTime) && !preg_match('/[0-9]{2}:[0-9]{2}/', $outwardFromTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($outwardFromTime, true)), __LINE__);
        }
        $this->outwardFromTime = $outwardFromTime;
        
        return $this;
    }
    /**
     * Get outwardFromCityCode value
     * @return string|null
     */
    public function getOutwardFromCityCode(): ?string
    {
        return $this->outwardFromCityCode;
    }
    /**
     * Set outwardFromCityCode value
     * @param string $outwardFromCityCode
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setOutwardFromCityCode(?string $outwardFromCityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($outwardFromCityCode) && !is_string($outwardFromCityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outwardFromCityCode, true), gettype($outwardFromCityCode)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($outwardFromCityCode) && mb_strlen((string) $outwardFromCityCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $outwardFromCityCode)), __LINE__);
        }
        $this->outwardFromCityCode = $outwardFromCityCode;
        
        return $this;
    }
    /**
     * Get outwardFromCityDesc value
     * @return string|null
     */
    public function getOutwardFromCityDesc(): ?string
    {
        return $this->outwardFromCityDesc;
    }
    /**
     * Set outwardFromCityDesc value
     * @param string $outwardFromCityDesc
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setOutwardFromCityDesc(?string $outwardFromCityDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($outwardFromCityDesc) && !is_string($outwardFromCityDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outwardFromCityDesc, true), gettype($outwardFromCityDesc)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($outwardFromCityDesc) && mb_strlen((string) $outwardFromCityDesc) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $outwardFromCityDesc)), __LINE__);
        }
        $this->outwardFromCityDesc = $outwardFromCityDesc;
        
        return $this;
    }
    /**
     * Get outwardToDate value
     * @return string|null
     */
    public function getOutwardToDate(): ?string
    {
        return $this->outwardToDate;
    }
    /**
     * Set outwardToDate value
     * @param string $outwardToDate
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setOutwardToDate(?string $outwardToDate = null): self
    {
        // validation for constraint: string
        if (!is_null($outwardToDate) && !is_string($outwardToDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outwardToDate, true), gettype($outwardToDate)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($outwardToDate) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $outwardToDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($outwardToDate, true)), __LINE__);
        }
        $this->outwardToDate = $outwardToDate;
        
        return $this;
    }
    /**
     * Get outwardToTime value
     * @return string|null
     */
    public function getOutwardToTime(): ?string
    {
        return $this->outwardToTime;
    }
    /**
     * Set outwardToTime value
     * @param string $outwardToTime
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setOutwardToTime(?string $outwardToTime = null): self
    {
        // validation for constraint: string
        if (!is_null($outwardToTime) && !is_string($outwardToTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outwardToTime, true), gettype($outwardToTime)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($outwardToTime) && !preg_match('/[0-9]{2}:[0-9]{2}/', $outwardToTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($outwardToTime, true)), __LINE__);
        }
        $this->outwardToTime = $outwardToTime;
        
        return $this;
    }
    /**
     * Get outwardToCityCode value
     * @return string|null
     */
    public function getOutwardToCityCode(): ?string
    {
        return $this->outwardToCityCode;
    }
    /**
     * Set outwardToCityCode value
     * @param string $outwardToCityCode
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setOutwardToCityCode(?string $outwardToCityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($outwardToCityCode) && !is_string($outwardToCityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outwardToCityCode, true), gettype($outwardToCityCode)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($outwardToCityCode) && mb_strlen((string) $outwardToCityCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $outwardToCityCode)), __LINE__);
        }
        $this->outwardToCityCode = $outwardToCityCode;
        
        return $this;
    }
    /**
     * Get outwardToCityDesc value
     * @return string|null
     */
    public function getOutwardToCityDesc(): ?string
    {
        return $this->outwardToCityDesc;
    }
    /**
     * Set outwardToCityDesc value
     * @param string $outwardToCityDesc
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setOutwardToCityDesc(?string $outwardToCityDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($outwardToCityDesc) && !is_string($outwardToCityDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outwardToCityDesc, true), gettype($outwardToCityDesc)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($outwardToCityDesc) && mb_strlen((string) $outwardToCityDesc) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $outwardToCityDesc)), __LINE__);
        }
        $this->outwardToCityDesc = $outwardToCityDesc;
        
        return $this;
    }
    /**
     * Get outwardSeat value
     * @return string|null
     */
    public function getOutwardSeat(): ?string
    {
        return $this->outwardSeat;
    }
    /**
     * Set outwardSeat value
     * @param string $outwardSeat
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setOutwardSeat(?string $outwardSeat = null): self
    {
        // validation for constraint: string
        if (!is_null($outwardSeat) && !is_string($outwardSeat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outwardSeat, true), gettype($outwardSeat)), __LINE__);
        }
        $this->outwardSeat = $outwardSeat;
        
        return $this;
    }
    /**
     * Get outwardPlatform value
     * @return string|null
     */
    public function getOutwardPlatform(): ?string
    {
        return $this->outwardPlatform;
    }
    /**
     * Set outwardPlatform value
     * @param string $outwardPlatform
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setOutwardPlatform(?string $outwardPlatform = null): self
    {
        // validation for constraint: string
        if (!is_null($outwardPlatform) && !is_string($outwardPlatform)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outwardPlatform, true), gettype($outwardPlatform)), __LINE__);
        }
        $this->outwardPlatform = $outwardPlatform;
        
        return $this;
    }
    /**
     * Get returnFromDate value
     * @return string|null
     */
    public function getReturnFromDate(): ?string
    {
        return $this->returnFromDate;
    }
    /**
     * Set returnFromDate value
     * @param string $returnFromDate
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setReturnFromDate(?string $returnFromDate = null): self
    {
        // validation for constraint: string
        if (!is_null($returnFromDate) && !is_string($returnFromDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnFromDate, true), gettype($returnFromDate)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($returnFromDate) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $returnFromDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($returnFromDate, true)), __LINE__);
        }
        $this->returnFromDate = $returnFromDate;
        
        return $this;
    }
    /**
     * Get returnFromTime value
     * @return string|null
     */
    public function getReturnFromTime(): ?string
    {
        return $this->returnFromTime;
    }
    /**
     * Set returnFromTime value
     * @param string $returnFromTime
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setReturnFromTime(?string $returnFromTime = null): self
    {
        // validation for constraint: string
        if (!is_null($returnFromTime) && !is_string($returnFromTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnFromTime, true), gettype($returnFromTime)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($returnFromTime) && !preg_match('/[0-9]{2}:[0-9]{2}/', $returnFromTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($returnFromTime, true)), __LINE__);
        }
        $this->returnFromTime = $returnFromTime;
        
        return $this;
    }
    /**
     * Get returnFromCityCode value
     * @return string|null
     */
    public function getReturnFromCityCode(): ?string
    {
        return $this->returnFromCityCode;
    }
    /**
     * Set returnFromCityCode value
     * @param string $returnFromCityCode
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setReturnFromCityCode(?string $returnFromCityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($returnFromCityCode) && !is_string($returnFromCityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnFromCityCode, true), gettype($returnFromCityCode)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($returnFromCityCode) && mb_strlen((string) $returnFromCityCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $returnFromCityCode)), __LINE__);
        }
        $this->returnFromCityCode = $returnFromCityCode;
        
        return $this;
    }
    /**
     * Get returnFromCityDesc value
     * @return string|null
     */
    public function getReturnFromCityDesc(): ?string
    {
        return $this->returnFromCityDesc;
    }
    /**
     * Set returnFromCityDesc value
     * @param string $returnFromCityDesc
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setReturnFromCityDesc(?string $returnFromCityDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($returnFromCityDesc) && !is_string($returnFromCityDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnFromCityDesc, true), gettype($returnFromCityDesc)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($returnFromCityDesc) && mb_strlen((string) $returnFromCityDesc) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $returnFromCityDesc)), __LINE__);
        }
        $this->returnFromCityDesc = $returnFromCityDesc;
        
        return $this;
    }
    /**
     * Get returnToDate value
     * @return string|null
     */
    public function getReturnToDate(): ?string
    {
        return $this->returnToDate;
    }
    /**
     * Set returnToDate value
     * @param string $returnToDate
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setReturnToDate(?string $returnToDate = null): self
    {
        // validation for constraint: string
        if (!is_null($returnToDate) && !is_string($returnToDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnToDate, true), gettype($returnToDate)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($returnToDate) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $returnToDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($returnToDate, true)), __LINE__);
        }
        $this->returnToDate = $returnToDate;
        
        return $this;
    }
    /**
     * Get returnToTime value
     * @return string|null
     */
    public function getReturnToTime(): ?string
    {
        return $this->returnToTime;
    }
    /**
     * Set returnToTime value
     * @param string $returnToTime
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setReturnToTime(?string $returnToTime = null): self
    {
        // validation for constraint: string
        if (!is_null($returnToTime) && !is_string($returnToTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnToTime, true), gettype($returnToTime)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($returnToTime) && !preg_match('/[0-9]{2}:[0-9]{2}/', $returnToTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($returnToTime, true)), __LINE__);
        }
        $this->returnToTime = $returnToTime;
        
        return $this;
    }
    /**
     * Get returnToCityCode value
     * @return string|null
     */
    public function getReturnToCityCode(): ?string
    {
        return $this->returnToCityCode;
    }
    /**
     * Set returnToCityCode value
     * @param string $returnToCityCode
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setReturnToCityCode(?string $returnToCityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($returnToCityCode) && !is_string($returnToCityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnToCityCode, true), gettype($returnToCityCode)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($returnToCityCode) && mb_strlen((string) $returnToCityCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $returnToCityCode)), __LINE__);
        }
        $this->returnToCityCode = $returnToCityCode;
        
        return $this;
    }
    /**
     * Get returnToCityDesc value
     * @return string|null
     */
    public function getReturnToCityDesc(): ?string
    {
        return $this->returnToCityDesc;
    }
    /**
     * Set returnToCityDesc value
     * @param string $returnToCityDesc
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setReturnToCityDesc(?string $returnToCityDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($returnToCityDesc) && !is_string($returnToCityDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnToCityDesc, true), gettype($returnToCityDesc)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($returnToCityDesc) && mb_strlen((string) $returnToCityDesc) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $returnToCityDesc)), __LINE__);
        }
        $this->returnToCityDesc = $returnToCityDesc;
        
        return $this;
    }
    /**
     * Get returnSeat value
     * @return string|null
     */
    public function getReturnSeat(): ?string
    {
        return $this->returnSeat;
    }
    /**
     * Set returnSeat value
     * @param string $returnSeat
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setReturnSeat(?string $returnSeat = null): self
    {
        // validation for constraint: string
        if (!is_null($returnSeat) && !is_string($returnSeat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnSeat, true), gettype($returnSeat)), __LINE__);
        }
        $this->returnSeat = $returnSeat;
        
        return $this;
    }
    /**
     * Get returnPlatform value
     * @return string|null
     */
    public function getReturnPlatform(): ?string
    {
        return $this->returnPlatform;
    }
    /**
     * Set returnPlatform value
     * @param string $returnPlatform
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setReturnPlatform(?string $returnPlatform = null): self
    {
        // validation for constraint: string
        if (!is_null($returnPlatform) && !is_string($returnPlatform)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnPlatform, true), gettype($returnPlatform)), __LINE__);
        }
        $this->returnPlatform = $returnPlatform;
        
        return $this;
    }
    /**
     * Get transfer value
     * @return string|null
     */
    public function getTransfer(): ?string
    {
        return $this->transfer;
    }
    /**
     * Set transfer value
     * @param string $transfer
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setTransfer(?string $transfer = null): self
    {
        // validation for constraint: string
        if (!is_null($transfer) && !is_string($transfer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transfer, true), gettype($transfer)), __LINE__);
        }
        $this->transfer = $transfer;
        
        return $this;
    }
    /**
     * Get serviceStatus value
     * @return string|null
     */
    public function getServiceStatus(): ?string
    {
        return $this->serviceStatus;
    }
    /**
     * Set serviceStatus value
     * @param string $serviceStatus
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setServiceStatus(?string $serviceStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceStatus) && !is_string($serviceStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceStatus, true), gettype($serviceStatus)), __LINE__);
        }
        $this->serviceStatus = $serviceStatus;
        
        return $this;
    }
    /**
     * Get personAssignment value
     * @return string|null
     */
    public function getPersonAssignment(): ?string
    {
        return $this->personAssignment;
    }
    /**
     * Set personAssignment value
     * @param string $personAssignment
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setPersonAssignment(?string $personAssignment = null): self
    {
        // validation for constraint: string
        if (!is_null($personAssignment) && !is_string($personAssignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personAssignment, true), gettype($personAssignment)), __LINE__);
        }
        $this->personAssignment = $personAssignment;
        
        return $this;
    }
    /**
     * Get servicePrice value
     * @return float|null
     */
    public function getServicePrice(): ?float
    {
        return $this->servicePrice;
    }
    /**
     * Set servicePrice value
     * @param float $servicePrice
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setServicePrice(?float $servicePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($servicePrice) && !(is_float($servicePrice) || is_numeric($servicePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($servicePrice, true), gettype($servicePrice)), __LINE__);
        }
        $this->servicePrice = $servicePrice;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setCurrency(?string $currency = 'EUR'): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get vatIncluded value
     * @return bool|null
     */
    public function getVatIncluded(): ?bool
    {
        return $this->vatIncluded;
    }
    /**
     * Set vatIncluded value
     * @param bool $vatIncluded
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setVatIncluded(?bool $vatIncluded = false): self
    {
        // validation for constraint: boolean
        if (!is_null($vatIncluded) && !is_bool($vatIncluded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vatIncluded, true), gettype($vatIncluded)), __LINE__);
        }
        $this->vatIncluded = $vatIncluded;
        
        return $this;
    }
    /**
     * Get paxPerService value
     * @return int|null
     */
    public function getPaxPerService(): ?int
    {
        return $this->paxPerService;
    }
    /**
     * Set paxPerService value
     * @param int $paxPerService
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setPaxPerService(?int $paxPerService = null): self
    {
        // validation for constraint: int
        if (!is_null($paxPerService) && !(is_int($paxPerService) || ctype_digit($paxPerService))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paxPerService, true), gettype($paxPerService)), __LINE__);
        }
        $this->paxPerService = $paxPerService;
        
        return $this;
    }
    /**
     * Get noOfNights value
     * @return int|null
     */
    public function getNoOfNights(): ?int
    {
        return $this->noOfNights;
    }
    /**
     * Set noOfNights value
     * @param int $noOfNights
     * @return \Pggns\MidocoApi\Order\StructType\BusServiceType
     */
    public function setNoOfNights(?int $noOfNights = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfNights) && !(is_int($noOfNights) || ctype_digit($noOfNights))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfNights, true), gettype($noOfNights)), __LINE__);
        }
        $this->noOfNights = $noOfNights;
        
        return $this;
    }
}
