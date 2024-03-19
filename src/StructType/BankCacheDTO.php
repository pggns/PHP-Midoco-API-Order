<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankCacheDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BankCacheDTO extends AbstractStructBase
{
    /**
     * The automaticBooking
     * @var bool|null
     */
    protected ?bool $automaticBooking = null;
    /**
     * The cacheId
     * @var int|null
     */
    protected ?int $cacheId = null;
    /**
     * The feeType
     * @var string|null
     */
    protected ?string $feeType = null;
    /**
     * The infoAccountNo
     * @var string|null
     */
    protected ?string $infoAccountNo = null;
    /**
     * The infoBankNo
     * @var string|null
     */
    protected ?string $infoBankNo = null;
    /**
     * The matchAccountNo
     * @var string|null
     */
    protected ?string $matchAccountNo = null;
    /**
     * The matchAmount
     * @var float|null
     */
    protected ?float $matchAmount = null;
    /**
     * The matchDebitCredit
     * @var string|null
     */
    protected ?string $matchDebitCredit = null;
    /**
     * The matchText
     * @var string|null
     */
    protected ?string $matchText = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for BankCacheDTO
     * @uses BankCacheDTO::setAutomaticBooking()
     * @uses BankCacheDTO::setCacheId()
     * @uses BankCacheDTO::setFeeType()
     * @uses BankCacheDTO::setInfoAccountNo()
     * @uses BankCacheDTO::setInfoBankNo()
     * @uses BankCacheDTO::setMatchAccountNo()
     * @uses BankCacheDTO::setMatchAmount()
     * @uses BankCacheDTO::setMatchDebitCredit()
     * @uses BankCacheDTO::setMatchText()
     * @uses BankCacheDTO::setType()
     * @param bool $automaticBooking
     * @param int $cacheId
     * @param string $feeType
     * @param string $infoAccountNo
     * @param string $infoBankNo
     * @param string $matchAccountNo
     * @param float $matchAmount
     * @param string $matchDebitCredit
     * @param string $matchText
     * @param string $type
     */
    public function __construct(?bool $automaticBooking = null, ?int $cacheId = null, ?string $feeType = null, ?string $infoAccountNo = null, ?string $infoBankNo = null, ?string $matchAccountNo = null, ?float $matchAmount = null, ?string $matchDebitCredit = null, ?string $matchText = null, ?string $type = null)
    {
        $this
            ->setAutomaticBooking($automaticBooking)
            ->setCacheId($cacheId)
            ->setFeeType($feeType)
            ->setInfoAccountNo($infoAccountNo)
            ->setInfoBankNo($infoBankNo)
            ->setMatchAccountNo($matchAccountNo)
            ->setMatchAmount($matchAmount)
            ->setMatchDebitCredit($matchDebitCredit)
            ->setMatchText($matchText)
            ->setType($type);
    }
    /**
     * Get automaticBooking value
     * @return bool|null
     */
    public function getAutomaticBooking(): ?bool
    {
        return $this->automaticBooking;
    }
    /**
     * Set automaticBooking value
     * @param bool $automaticBooking
     * @return \Pggns\MidocoApi\Order\StructType\BankCacheDTO
     */
    public function setAutomaticBooking(?bool $automaticBooking = null): self
    {
        // validation for constraint: boolean
        if (!is_null($automaticBooking) && !is_bool($automaticBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($automaticBooking, true), gettype($automaticBooking)), __LINE__);
        }
        $this->automaticBooking = $automaticBooking;
        
        return $this;
    }
    /**
     * Get cacheId value
     * @return int|null
     */
    public function getCacheId(): ?int
    {
        return $this->cacheId;
    }
    /**
     * Set cacheId value
     * @param int $cacheId
     * @return \Pggns\MidocoApi\Order\StructType\BankCacheDTO
     */
    public function setCacheId(?int $cacheId = null): self
    {
        // validation for constraint: int
        if (!is_null($cacheId) && !(is_int($cacheId) || ctype_digit($cacheId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cacheId, true), gettype($cacheId)), __LINE__);
        }
        $this->cacheId = $cacheId;
        
        return $this;
    }
    /**
     * Get feeType value
     * @return string|null
     */
    public function getFeeType(): ?string
    {
        return $this->feeType;
    }
    /**
     * Set feeType value
     * @param string $feeType
     * @return \Pggns\MidocoApi\Order\StructType\BankCacheDTO
     */
    public function setFeeType(?string $feeType = null): self
    {
        // validation for constraint: string
        if (!is_null($feeType) && !is_string($feeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeType, true), gettype($feeType)), __LINE__);
        }
        $this->feeType = $feeType;
        
        return $this;
    }
    /**
     * Get infoAccountNo value
     * @return string|null
     */
    public function getInfoAccountNo(): ?string
    {
        return $this->infoAccountNo;
    }
    /**
     * Set infoAccountNo value
     * @param string $infoAccountNo
     * @return \Pggns\MidocoApi\Order\StructType\BankCacheDTO
     */
    public function setInfoAccountNo(?string $infoAccountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($infoAccountNo) && !is_string($infoAccountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoAccountNo, true), gettype($infoAccountNo)), __LINE__);
        }
        $this->infoAccountNo = $infoAccountNo;
        
        return $this;
    }
    /**
     * Get infoBankNo value
     * @return string|null
     */
    public function getInfoBankNo(): ?string
    {
        return $this->infoBankNo;
    }
    /**
     * Set infoBankNo value
     * @param string $infoBankNo
     * @return \Pggns\MidocoApi\Order\StructType\BankCacheDTO
     */
    public function setInfoBankNo(?string $infoBankNo = null): self
    {
        // validation for constraint: string
        if (!is_null($infoBankNo) && !is_string($infoBankNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoBankNo, true), gettype($infoBankNo)), __LINE__);
        }
        $this->infoBankNo = $infoBankNo;
        
        return $this;
    }
    /**
     * Get matchAccountNo value
     * @return string|null
     */
    public function getMatchAccountNo(): ?string
    {
        return $this->matchAccountNo;
    }
    /**
     * Set matchAccountNo value
     * @param string $matchAccountNo
     * @return \Pggns\MidocoApi\Order\StructType\BankCacheDTO
     */
    public function setMatchAccountNo(?string $matchAccountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($matchAccountNo) && !is_string($matchAccountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($matchAccountNo, true), gettype($matchAccountNo)), __LINE__);
        }
        $this->matchAccountNo = $matchAccountNo;
        
        return $this;
    }
    /**
     * Get matchAmount value
     * @return float|null
     */
    public function getMatchAmount(): ?float
    {
        return $this->matchAmount;
    }
    /**
     * Set matchAmount value
     * @param float $matchAmount
     * @return \Pggns\MidocoApi\Order\StructType\BankCacheDTO
     */
    public function setMatchAmount(?float $matchAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($matchAmount) && !(is_float($matchAmount) || is_numeric($matchAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($matchAmount, true), gettype($matchAmount)), __LINE__);
        }
        $this->matchAmount = $matchAmount;
        
        return $this;
    }
    /**
     * Get matchDebitCredit value
     * @return string|null
     */
    public function getMatchDebitCredit(): ?string
    {
        return $this->matchDebitCredit;
    }
    /**
     * Set matchDebitCredit value
     * @param string $matchDebitCredit
     * @return \Pggns\MidocoApi\Order\StructType\BankCacheDTO
     */
    public function setMatchDebitCredit(?string $matchDebitCredit = null): self
    {
        // validation for constraint: string
        if (!is_null($matchDebitCredit) && !is_string($matchDebitCredit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($matchDebitCredit, true), gettype($matchDebitCredit)), __LINE__);
        }
        $this->matchDebitCredit = $matchDebitCredit;
        
        return $this;
    }
    /**
     * Get matchText value
     * @return string|null
     */
    public function getMatchText(): ?string
    {
        return $this->matchText;
    }
    /**
     * Set matchText value
     * @param string $matchText
     * @return \Pggns\MidocoApi\Order\StructType\BankCacheDTO
     */
    public function setMatchText(?string $matchText = null): self
    {
        // validation for constraint: string
        if (!is_null($matchText) && !is_string($matchText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($matchText, true), gettype($matchText)), __LINE__);
        }
        $this->matchText = $matchText;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\BankCacheDTO
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
