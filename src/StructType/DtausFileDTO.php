<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DtausFileDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DtausFileDTO extends AbstractStructBase
{
    /**
     * The accountBlz
     * @var string|null
     */
    protected ?string $accountBlz = null;
    /**
     * The accountNo
     * @var string|null
     */
    protected ?string $accountNo = null;
    /**
     * The accountOwner
     * @var string|null
     */
    protected ?string $accountOwner = null;
    /**
     * The bankName
     * @var string|null
     */
    protected ?string $bankName = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The countryCode
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The fileFormat
     * @var int|null
     */
    protected ?int $fileFormat = null;
    /**
     * The fileid
     * @var int|null
     */
    protected ?int $fileid = null;
    /**
     * The genDate
     * @var string|null
     */
    protected ?string $genDate = null;
    /**
     * The genUserId
     * @var int|null
     */
    protected ?int $genUserId = null;
    /**
     * The isExported
     * @var bool|null
     */
    protected ?bool $isExported = null;
    /**
     * The isVoided
     * @var bool|null
     */
    protected ?bool $isVoided = null;
    /**
     * The stream
     * @var string|null
     */
    protected ?string $stream = null;
    /**
     * The street
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The totalValue
     * @var float|null
     */
    protected ?float $totalValue = null;
    /**
     * The type
     * @var int|null
     */
    protected ?int $type = null;
    /**
     * Constructor method for DtausFileDTO
     * @uses DtausFileDTO::setAccountBlz()
     * @uses DtausFileDTO::setAccountNo()
     * @uses DtausFileDTO::setAccountOwner()
     * @uses DtausFileDTO::setBankName()
     * @uses DtausFileDTO::setCity()
     * @uses DtausFileDTO::setCountryCode()
     * @uses DtausFileDTO::setFileFormat()
     * @uses DtausFileDTO::setFileid()
     * @uses DtausFileDTO::setGenDate()
     * @uses DtausFileDTO::setGenUserId()
     * @uses DtausFileDTO::setIsExported()
     * @uses DtausFileDTO::setIsVoided()
     * @uses DtausFileDTO::setStream()
     * @uses DtausFileDTO::setStreet()
     * @uses DtausFileDTO::setTotalValue()
     * @uses DtausFileDTO::setType()
     * @param string $accountBlz
     * @param string $accountNo
     * @param string $accountOwner
     * @param string $bankName
     * @param string $city
     * @param string $countryCode
     * @param int $fileFormat
     * @param int $fileid
     * @param string $genDate
     * @param int $genUserId
     * @param bool $isExported
     * @param bool $isVoided
     * @param string $stream
     * @param string $street
     * @param float $totalValue
     * @param int $type
     */
    public function __construct(?string $accountBlz = null, ?string $accountNo = null, ?string $accountOwner = null, ?string $bankName = null, ?string $city = null, ?string $countryCode = null, ?int $fileFormat = null, ?int $fileid = null, ?string $genDate = null, ?int $genUserId = null, ?bool $isExported = null, ?bool $isVoided = null, ?string $stream = null, ?string $street = null, ?float $totalValue = null, ?int $type = null)
    {
        $this
            ->setAccountBlz($accountBlz)
            ->setAccountNo($accountNo)
            ->setAccountOwner($accountOwner)
            ->setBankName($bankName)
            ->setCity($city)
            ->setCountryCode($countryCode)
            ->setFileFormat($fileFormat)
            ->setFileid($fileid)
            ->setGenDate($genDate)
            ->setGenUserId($genUserId)
            ->setIsExported($isExported)
            ->setIsVoided($isVoided)
            ->setStream($stream)
            ->setStreet($street)
            ->setTotalValue($totalValue)
            ->setType($type);
    }
    /**
     * Get accountBlz value
     * @return string|null
     */
    public function getAccountBlz(): ?string
    {
        return $this->accountBlz;
    }
    /**
     * Set accountBlz value
     * @param string $accountBlz
     * @return \Pggns\MidocoApi\Order\StructType\DtausFileDTO
     */
    public function setAccountBlz(?string $accountBlz = null): self
    {
        // validation for constraint: string
        if (!is_null($accountBlz) && !is_string($accountBlz)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountBlz, true), gettype($accountBlz)), __LINE__);
        }
        $this->accountBlz = $accountBlz;
        
        return $this;
    }
    /**
     * Get accountNo value
     * @return string|null
     */
    public function getAccountNo(): ?string
    {
        return $this->accountNo;
    }
    /**
     * Set accountNo value
     * @param string $accountNo
     * @return \Pggns\MidocoApi\Order\StructType\DtausFileDTO
     */
    public function setAccountNo(?string $accountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNo) && !is_string($accountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNo, true), gettype($accountNo)), __LINE__);
        }
        $this->accountNo = $accountNo;
        
        return $this;
    }
    /**
     * Get accountOwner value
     * @return string|null
     */
    public function getAccountOwner(): ?string
    {
        return $this->accountOwner;
    }
    /**
     * Set accountOwner value
     * @param string $accountOwner
     * @return \Pggns\MidocoApi\Order\StructType\DtausFileDTO
     */
    public function setAccountOwner(?string $accountOwner = null): self
    {
        // validation for constraint: string
        if (!is_null($accountOwner) && !is_string($accountOwner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountOwner, true), gettype($accountOwner)), __LINE__);
        }
        $this->accountOwner = $accountOwner;
        
        return $this;
    }
    /**
     * Get bankName value
     * @return string|null
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }
    /**
     * Set bankName value
     * @param string $bankName
     * @return \Pggns\MidocoApi\Order\StructType\DtausFileDTO
     */
    public function setBankName(?string $bankName = null): self
    {
        // validation for constraint: string
        if (!is_null($bankName) && !is_string($bankName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankName, true), gettype($bankName)), __LINE__);
        }
        $this->bankName = $bankName;
        
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Pggns\MidocoApi\Order\StructType\DtausFileDTO
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \Pggns\MidocoApi\Order\StructType\DtausFileDTO
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get fileFormat value
     * @return int|null
     */
    public function getFileFormat(): ?int
    {
        return $this->fileFormat;
    }
    /**
     * Set fileFormat value
     * @param int $fileFormat
     * @return \Pggns\MidocoApi\Order\StructType\DtausFileDTO
     */
    public function setFileFormat(?int $fileFormat = null): self
    {
        // validation for constraint: int
        if (!is_null($fileFormat) && !(is_int($fileFormat) || ctype_digit($fileFormat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fileFormat, true), gettype($fileFormat)), __LINE__);
        }
        $this->fileFormat = $fileFormat;
        
        return $this;
    }
    /**
     * Get fileid value
     * @return int|null
     */
    public function getFileid(): ?int
    {
        return $this->fileid;
    }
    /**
     * Set fileid value
     * @param int $fileid
     * @return \Pggns\MidocoApi\Order\StructType\DtausFileDTO
     */
    public function setFileid(?int $fileid = null): self
    {
        // validation for constraint: int
        if (!is_null($fileid) && !(is_int($fileid) || ctype_digit($fileid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fileid, true), gettype($fileid)), __LINE__);
        }
        $this->fileid = $fileid;
        
        return $this;
    }
    /**
     * Get genDate value
     * @return string|null
     */
    public function getGenDate(): ?string
    {
        return $this->genDate;
    }
    /**
     * Set genDate value
     * @param string $genDate
     * @return \Pggns\MidocoApi\Order\StructType\DtausFileDTO
     */
    public function setGenDate(?string $genDate = null): self
    {
        // validation for constraint: string
        if (!is_null($genDate) && !is_string($genDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($genDate, true), gettype($genDate)), __LINE__);
        }
        $this->genDate = $genDate;
        
        return $this;
    }
    /**
     * Get genUserId value
     * @return int|null
     */
    public function getGenUserId(): ?int
    {
        return $this->genUserId;
    }
    /**
     * Set genUserId value
     * @param int $genUserId
     * @return \Pggns\MidocoApi\Order\StructType\DtausFileDTO
     */
    public function setGenUserId(?int $genUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($genUserId) && !(is_int($genUserId) || ctype_digit($genUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($genUserId, true), gettype($genUserId)), __LINE__);
        }
        $this->genUserId = $genUserId;
        
        return $this;
    }
    /**
     * Get isExported value
     * @return bool|null
     */
    public function getIsExported(): ?bool
    {
        return $this->isExported;
    }
    /**
     * Set isExported value
     * @param bool $isExported
     * @return \Pggns\MidocoApi\Order\StructType\DtausFileDTO
     */
    public function setIsExported(?bool $isExported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExported) && !is_bool($isExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExported, true), gettype($isExported)), __LINE__);
        }
        $this->isExported = $isExported;
        
        return $this;
    }
    /**
     * Get isVoided value
     * @return bool|null
     */
    public function getIsVoided(): ?bool
    {
        return $this->isVoided;
    }
    /**
     * Set isVoided value
     * @param bool $isVoided
     * @return \Pggns\MidocoApi\Order\StructType\DtausFileDTO
     */
    public function setIsVoided(?bool $isVoided = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVoided) && !is_bool($isVoided)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVoided, true), gettype($isVoided)), __LINE__);
        }
        $this->isVoided = $isVoided;
        
        return $this;
    }
    /**
     * Get stream value
     * @return string|null
     */
    public function getStream(): ?string
    {
        return $this->stream;
    }
    /**
     * Set stream value
     * @param string $stream
     * @return \Pggns\MidocoApi\Order\StructType\DtausFileDTO
     */
    public function setStream(?string $stream = null): self
    {
        // validation for constraint: string
        if (!is_null($stream) && !is_string($stream)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stream, true), gettype($stream)), __LINE__);
        }
        $this->stream = $stream;
        
        return $this;
    }
    /**
     * Get street value
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \Pggns\MidocoApi\Order\StructType\DtausFileDTO
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        $this->street = $street;
        
        return $this;
    }
    /**
     * Get totalValue value
     * @return float|null
     */
    public function getTotalValue(): ?float
    {
        return $this->totalValue;
    }
    /**
     * Set totalValue value
     * @param float $totalValue
     * @return \Pggns\MidocoApi\Order\StructType\DtausFileDTO
     */
    public function setTotalValue(?float $totalValue = null): self
    {
        // validation for constraint: float
        if (!is_null($totalValue) && !(is_float($totalValue) || is_numeric($totalValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalValue, true), gettype($totalValue)), __LINE__);
        }
        $this->totalValue = $totalValue;
        
        return $this;
    }
    /**
     * Get type value
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $type
     * @return \Pggns\MidocoApi\Order\StructType\DtausFileDTO
     */
    public function setType(?int $type = null): self
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
