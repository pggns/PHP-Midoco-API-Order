<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DebitorDTO StructType
 * @subpackage Structs
 */
class DebitorDTO extends AbstractStructBase
{
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The endCharacter
     * @var string|null
     */
    protected ?string $endCharacter = null;
    /**
     * The forCompany
     * @var bool|null
     */
    protected ?bool $forCompany = null;
    /**
     * The isChanged
     * @var bool|null
     */
    protected ?bool $isChanged = null;
    /**
     * The isDeleted
     * @var bool|null
     */
    protected ?bool $isDeleted = null;
    /**
     * The isDivers
     * @var bool|null
     */
    protected ?bool $isDivers = null;
    /**
     * The modifiedByUnitName
     * @var string|null
     */
    protected ?string $modifiedByUnitName = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The paymentConditionId
     * @var string|null
     */
    protected ?string $paymentConditionId = null;
    /**
     * The startCharacter
     * @var string|null
     */
    protected ?string $startCharacter = null;
    /**
     * The useNameCharacter
     * @var bool|null
     */
    protected ?bool $useNameCharacter = null;
    /**
     * Constructor method for DebitorDTO
     * @uses DebitorDTO::setCurrency()
     * @uses DebitorDTO::setCustomerId()
     * @uses DebitorDTO::setDebitorNo()
     * @uses DebitorDTO::setDescription()
     * @uses DebitorDTO::setEndCharacter()
     * @uses DebitorDTO::setForCompany()
     * @uses DebitorDTO::setIsChanged()
     * @uses DebitorDTO::setIsDeleted()
     * @uses DebitorDTO::setIsDivers()
     * @uses DebitorDTO::setModifiedByUnitName()
     * @uses DebitorDTO::setModifyUser()
     * @uses DebitorDTO::setPaymentConditionId()
     * @uses DebitorDTO::setStartCharacter()
     * @uses DebitorDTO::setUseNameCharacter()
     * @param string $currency
     * @param int $customerId
     * @param string $debitorNo
     * @param string $description
     * @param string $endCharacter
     * @param bool $forCompany
     * @param bool $isChanged
     * @param bool $isDeleted
     * @param bool $isDivers
     * @param string $modifiedByUnitName
     * @param int $modifyUser
     * @param string $paymentConditionId
     * @param string $startCharacter
     * @param bool $useNameCharacter
     */
    public function __construct(?string $currency = null, ?int $customerId = null, ?string $debitorNo = null, ?string $description = null, ?string $endCharacter = null, ?bool $forCompany = null, ?bool $isChanged = null, ?bool $isDeleted = null, ?bool $isDivers = null, ?string $modifiedByUnitName = null, ?int $modifyUser = null, ?string $paymentConditionId = null, ?string $startCharacter = null, ?bool $useNameCharacter = null)
    {
        $this
            ->setCurrency($currency)
            ->setCustomerId($customerId)
            ->setDebitorNo($debitorNo)
            ->setDescription($description)
            ->setEndCharacter($endCharacter)
            ->setForCompany($forCompany)
            ->setIsChanged($isChanged)
            ->setIsDeleted($isDeleted)
            ->setIsDivers($isDivers)
            ->setModifiedByUnitName($modifiedByUnitName)
            ->setModifyUser($modifyUser)
            ->setPaymentConditionId($paymentConditionId)
            ->setStartCharacter($startCharacter)
            ->setUseNameCharacter($useNameCharacter);
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitorDTO
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
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\DebitorDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Order\StructType\DebitorDTO
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\DebitorDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get endCharacter value
     * @return string|null
     */
    public function getEndCharacter(): ?string
    {
        return $this->endCharacter;
    }
    /**
     * Set endCharacter value
     * @param string $endCharacter
     * @return \Pggns\MidocoApi\Order\StructType\DebitorDTO
     */
    public function setEndCharacter(?string $endCharacter = null): self
    {
        // validation for constraint: string
        if (!is_null($endCharacter) && !is_string($endCharacter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endCharacter, true), gettype($endCharacter)), __LINE__);
        }
        $this->endCharacter = $endCharacter;
        
        return $this;
    }
    /**
     * Get forCompany value
     * @return bool|null
     */
    public function getForCompany(): ?bool
    {
        return $this->forCompany;
    }
    /**
     * Set forCompany value
     * @param bool $forCompany
     * @return \Pggns\MidocoApi\Order\StructType\DebitorDTO
     */
    public function setForCompany(?bool $forCompany = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forCompany) && !is_bool($forCompany)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forCompany, true), gettype($forCompany)), __LINE__);
        }
        $this->forCompany = $forCompany;
        
        return $this;
    }
    /**
     * Get isChanged value
     * @return bool|null
     */
    public function getIsChanged(): ?bool
    {
        return $this->isChanged;
    }
    /**
     * Set isChanged value
     * @param bool $isChanged
     * @return \Pggns\MidocoApi\Order\StructType\DebitorDTO
     */
    public function setIsChanged(?bool $isChanged = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isChanged) && !is_bool($isChanged)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isChanged, true), gettype($isChanged)), __LINE__);
        }
        $this->isChanged = $isChanged;
        
        return $this;
    }
    /**
     * Get isDeleted value
     * @return bool|null
     */
    public function getIsDeleted(): ?bool
    {
        return $this->isDeleted;
    }
    /**
     * Set isDeleted value
     * @param bool $isDeleted
     * @return \Pggns\MidocoApi\Order\StructType\DebitorDTO
     */
    public function setIsDeleted(?bool $isDeleted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeleted) && !is_bool($isDeleted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeleted, true), gettype($isDeleted)), __LINE__);
        }
        $this->isDeleted = $isDeleted;
        
        return $this;
    }
    /**
     * Get isDivers value
     * @return bool|null
     */
    public function getIsDivers(): ?bool
    {
        return $this->isDivers;
    }
    /**
     * Set isDivers value
     * @param bool $isDivers
     * @return \Pggns\MidocoApi\Order\StructType\DebitorDTO
     */
    public function setIsDivers(?bool $isDivers = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDivers) && !is_bool($isDivers)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDivers, true), gettype($isDivers)), __LINE__);
        }
        $this->isDivers = $isDivers;
        
        return $this;
    }
    /**
     * Get modifiedByUnitName value
     * @return string|null
     */
    public function getModifiedByUnitName(): ?string
    {
        return $this->modifiedByUnitName;
    }
    /**
     * Set modifiedByUnitName value
     * @param string $modifiedByUnitName
     * @return \Pggns\MidocoApi\Order\StructType\DebitorDTO
     */
    public function setModifiedByUnitName(?string $modifiedByUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($modifiedByUnitName) && !is_string($modifiedByUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifiedByUnitName, true), gettype($modifiedByUnitName)), __LINE__);
        }
        $this->modifiedByUnitName = $modifiedByUnitName;
        
        return $this;
    }
    /**
     * Get modifyUser value
     * @return int|null
     */
    public function getModifyUser(): ?int
    {
        return $this->modifyUser;
    }
    /**
     * Set modifyUser value
     * @param int $modifyUser
     * @return \Pggns\MidocoApi\Order\StructType\DebitorDTO
     */
    public function setModifyUser(?int $modifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modifyUser) && !(is_int($modifyUser) || ctype_digit($modifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifyUser, true), gettype($modifyUser)), __LINE__);
        }
        $this->modifyUser = $modifyUser;
        
        return $this;
    }
    /**
     * Get paymentConditionId value
     * @return string|null
     */
    public function getPaymentConditionId(): ?string
    {
        return $this->paymentConditionId;
    }
    /**
     * Set paymentConditionId value
     * @param string $paymentConditionId
     * @return \Pggns\MidocoApi\Order\StructType\DebitorDTO
     */
    public function setPaymentConditionId(?string $paymentConditionId = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentConditionId) && !is_string($paymentConditionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentConditionId, true), gettype($paymentConditionId)), __LINE__);
        }
        $this->paymentConditionId = $paymentConditionId;
        
        return $this;
    }
    /**
     * Get startCharacter value
     * @return string|null
     */
    public function getStartCharacter(): ?string
    {
        return $this->startCharacter;
    }
    /**
     * Set startCharacter value
     * @param string $startCharacter
     * @return \Pggns\MidocoApi\Order\StructType\DebitorDTO
     */
    public function setStartCharacter(?string $startCharacter = null): self
    {
        // validation for constraint: string
        if (!is_null($startCharacter) && !is_string($startCharacter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startCharacter, true), gettype($startCharacter)), __LINE__);
        }
        $this->startCharacter = $startCharacter;
        
        return $this;
    }
    /**
     * Get useNameCharacter value
     * @return bool|null
     */
    public function getUseNameCharacter(): ?bool
    {
        return $this->useNameCharacter;
    }
    /**
     * Set useNameCharacter value
     * @param bool $useNameCharacter
     * @return \Pggns\MidocoApi\Order\StructType\DebitorDTO
     */
    public function setUseNameCharacter(?bool $useNameCharacter = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useNameCharacter) && !is_bool($useNameCharacter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useNameCharacter, true), gettype($useNameCharacter)), __LINE__);
        }
        $this->useNameCharacter = $useNameCharacter;
        
        return $this;
    }
}
