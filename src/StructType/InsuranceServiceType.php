<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for insuranceServiceType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class InsuranceServiceType extends AbstractStructBase
{
    /**
     * The position
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $position;
    /**
     * The tariffCode
     * @var string|null
     */
    protected ?string $tariffCode = null;
    /**
     * The tariffDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $tariffDescription = null;
    /**
     * The personsPerService
     * @var string|null
     */
    protected ?string $personsPerService = null;
    /**
     * The noOfServices
     * @var int|null
     */
    protected ?int $noOfServices = null;
    /**
     * The validStart
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $validStart = null;
    /**
     * The validEnd
     * @var string|null
     */
    protected ?string $validEnd = null;
    /**
     * The personAssignment
     * @var string|null
     */
    protected ?string $personAssignment = null;
    /**
     * The serviceStatus
     * @var string|null
     */
    protected ?string $serviceStatus = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The isAnnual
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isAnnual = null;
    /**
     * The annualValidTo
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $annualValidTo = null;
    /**
     * Constructor method for insuranceServiceType
     * @uses InsuranceServiceType::setPosition()
     * @uses InsuranceServiceType::setTariffCode()
     * @uses InsuranceServiceType::setTariffDescription()
     * @uses InsuranceServiceType::setPersonsPerService()
     * @uses InsuranceServiceType::setNoOfServices()
     * @uses InsuranceServiceType::setValidStart()
     * @uses InsuranceServiceType::setValidEnd()
     * @uses InsuranceServiceType::setPersonAssignment()
     * @uses InsuranceServiceType::setServiceStatus()
     * @uses InsuranceServiceType::setTotalPrice()
     * @uses InsuranceServiceType::setCurrency()
     * @uses InsuranceServiceType::setIsAnnual()
     * @uses InsuranceServiceType::setAnnualValidTo()
     * @param int $position
     * @param string $tariffCode
     * @param string $tariffDescription
     * @param string $personsPerService
     * @param int $noOfServices
     * @param string $validStart
     * @param string $validEnd
     * @param string $personAssignment
     * @param string $serviceStatus
     * @param float $totalPrice
     * @param string $currency
     * @param bool $isAnnual
     * @param string $annualValidTo
     */
    public function __construct(int $position, ?string $tariffCode = null, ?string $tariffDescription = null, ?string $personsPerService = null, ?int $noOfServices = null, ?string $validStart = null, ?string $validEnd = null, ?string $personAssignment = null, ?string $serviceStatus = null, ?float $totalPrice = null, ?string $currency = null, ?bool $isAnnual = null, ?string $annualValidTo = null)
    {
        $this
            ->setPosition($position)
            ->setTariffCode($tariffCode)
            ->setTariffDescription($tariffDescription)
            ->setPersonsPerService($personsPerService)
            ->setNoOfServices($noOfServices)
            ->setValidStart($validStart)
            ->setValidEnd($validEnd)
            ->setPersonAssignment($personAssignment)
            ->setServiceStatus($serviceStatus)
            ->setTotalPrice($totalPrice)
            ->setCurrency($currency)
            ->setIsAnnual($isAnnual)
            ->setAnnualValidTo($annualValidTo);
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
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceServiceType
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
     * Get tariffCode value
     * @return string|null
     */
    public function getTariffCode(): ?string
    {
        return $this->tariffCode;
    }
    /**
     * Set tariffCode value
     * @param string $tariffCode
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceServiceType
     */
    public function setTariffCode(?string $tariffCode = null): self
    {
        // validation for constraint: string
        if (!is_null($tariffCode) && !is_string($tariffCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tariffCode, true), gettype($tariffCode)), __LINE__);
        }
        $this->tariffCode = $tariffCode;
        
        return $this;
    }
    /**
     * Get tariffDescription value
     * @return string|null
     */
    public function getTariffDescription(): ?string
    {
        return $this->tariffDescription;
    }
    /**
     * Set tariffDescription value
     * @param string $tariffDescription
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceServiceType
     */
    public function setTariffDescription(?string $tariffDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($tariffDescription) && !is_string($tariffDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tariffDescription, true), gettype($tariffDescription)), __LINE__);
        }
        $this->tariffDescription = $tariffDescription;
        
        return $this;
    }
    /**
     * Get personsPerService value
     * @return string|null
     */
    public function getPersonsPerService(): ?string
    {
        return $this->personsPerService;
    }
    /**
     * Set personsPerService value
     * @param string $personsPerService
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceServiceType
     */
    public function setPersonsPerService(?string $personsPerService = null): self
    {
        // validation for constraint: string
        if (!is_null($personsPerService) && !is_string($personsPerService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personsPerService, true), gettype($personsPerService)), __LINE__);
        }
        $this->personsPerService = $personsPerService;
        
        return $this;
    }
    /**
     * Get noOfServices value
     * @return int|null
     */
    public function getNoOfServices(): ?int
    {
        return $this->noOfServices;
    }
    /**
     * Set noOfServices value
     * @param int $noOfServices
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceServiceType
     */
    public function setNoOfServices(?int $noOfServices = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfServices) && !(is_int($noOfServices) || ctype_digit($noOfServices))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfServices, true), gettype($noOfServices)), __LINE__);
        }
        $this->noOfServices = $noOfServices;
        
        return $this;
    }
    /**
     * Get validStart value
     * @return string|null
     */
    public function getValidStart(): ?string
    {
        return $this->validStart;
    }
    /**
     * Set validStart value
     * @param string $validStart
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceServiceType
     */
    public function setValidStart(?string $validStart = null): self
    {
        // validation for constraint: string
        if (!is_null($validStart) && !is_string($validStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validStart, true), gettype($validStart)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($validStart) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $validStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($validStart, true)), __LINE__);
        }
        $this->validStart = $validStart;
        
        return $this;
    }
    /**
     * Get validEnd value
     * @return string|null
     */
    public function getValidEnd(): ?string
    {
        return $this->validEnd;
    }
    /**
     * Set validEnd value
     * @param string $validEnd
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceServiceType
     */
    public function setValidEnd(?string $validEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($validEnd) && !is_string($validEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validEnd, true), gettype($validEnd)), __LINE__);
        }
        $this->validEnd = $validEnd;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceServiceType
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
     * Get totalPrice value
     * @return float|null
     */
    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param float $totalPrice
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceServiceType
     */
    public function setTotalPrice(?float $totalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPrice) && !(is_float($totalPrice) || is_numeric($totalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceServiceType
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get isAnnual value
     * @return bool|null
     */
    public function getIsAnnual(): ?bool
    {
        return $this->isAnnual;
    }
    /**
     * Set isAnnual value
     * @param bool $isAnnual
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceServiceType
     */
    public function setIsAnnual(?bool $isAnnual = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAnnual) && !is_bool($isAnnual)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAnnual, true), gettype($isAnnual)), __LINE__);
        }
        $this->isAnnual = $isAnnual;
        
        return $this;
    }
    /**
     * Get annualValidTo value
     * @return string|null
     */
    public function getAnnualValidTo(): ?string
    {
        return $this->annualValidTo;
    }
    /**
     * Set annualValidTo value
     * @param string $annualValidTo
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceServiceType
     */
    public function setAnnualValidTo(?string $annualValidTo = null): self
    {
        // validation for constraint: string
        if (!is_null($annualValidTo) && !is_string($annualValidTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($annualValidTo, true), gettype($annualValidTo)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($annualValidTo) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $annualValidTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($annualValidTo, true)), __LINE__);
        }
        $this->annualValidTo = $annualValidTo;
        
        return $this;
    }
}
