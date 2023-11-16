<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoFeeTypeAssign StructType
 * @subpackage Structs
 */
class MidocoFeeTypeAssign extends FeeTypeDTO
{
    /**
     * The isUseCustomerCurrency
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isUseCustomerCurrency = null;
    /**
     * The isExplicit
     * @var bool|null
     */
    protected ?bool $isExplicit = null;
    /**
     * The segmentMultiply
     * @var bool|null
     */
    protected ?bool $segmentMultiply = null;
    /**
     * The travellerMultiply
     * @var bool|null
     */
    protected ?bool $travellerMultiply = null;
    /**
     * The feeCategory
     * @var string|null
     */
    protected ?string $feeCategory = null;
    /**
     * The assumeTicketTaxPercent
     * @var bool|null
     */
    protected ?bool $assumeTicketTaxPercent = null;
    /**
     * The dbUsePerMatch
     * @var bool|null
     */
    protected ?bool $dbUsePerMatch = null;
    /**
     * The reverseTrip
     * @var bool|null
     */
    protected ?bool $reverseTrip = null;
    /**
     * The ticketDesignator
     * @var string|null
     */
    protected ?string $ticketDesignator = null;
    /**
     * The isNettoFeeValue
     * @var bool|null
     */
    protected ?bool $isNettoFeeValue = null;
    /**
     * The segmentValueSet
     * @var int|null
     */
    protected ?int $segmentValueSet = null;
    /**
     * The noFeeSameDay
     * @var bool|null
     */
    protected ?bool $noFeeSameDay = null;
    /**
     * The noFeeSameDayCategory
     * @var string|null
     */
    protected ?string $noFeeSameDayCategory = null;
    /**
     * The noFeePrevDay
     * @var bool|null
     */
    protected ?bool $noFeePrevDay = null;
    /**
     * The noFeePrevDayCategory
     * @var string|null
     */
    protected ?string $noFeePrevDayCategory = null;
    /**
     * The feeAssignId
     * @var int|null
     */
    protected ?int $feeAssignId = null;
    /**
     * The oneFeeRelatedTicketsImport
     * @var bool|null
     */
    protected ?bool $oneFeeRelatedTicketsImport = null;
    /**
     * The feePriority
     * @var int|null
     */
    protected ?int $feePriority = null;
    /**
     * The statusMatched
     * @var bool|null
     */
    protected ?bool $statusMatched = null;
    /**
     * The attribMatched
     * @var bool|null
     */
    protected ?bool $attribMatched = null;
    /**
     * Constructor method for MidocoFeeTypeAssign
     * @uses MidocoFeeTypeAssign::setIsUseCustomerCurrency()
     * @uses MidocoFeeTypeAssign::setIsExplicit()
     * @uses MidocoFeeTypeAssign::setSegmentMultiply()
     * @uses MidocoFeeTypeAssign::setTravellerMultiply()
     * @uses MidocoFeeTypeAssign::setFeeCategory()
     * @uses MidocoFeeTypeAssign::setAssumeTicketTaxPercent()
     * @uses MidocoFeeTypeAssign::setDbUsePerMatch()
     * @uses MidocoFeeTypeAssign::setReverseTrip()
     * @uses MidocoFeeTypeAssign::setTicketDesignator()
     * @uses MidocoFeeTypeAssign::setIsNettoFeeValue()
     * @uses MidocoFeeTypeAssign::setSegmentValueSet()
     * @uses MidocoFeeTypeAssign::setNoFeeSameDay()
     * @uses MidocoFeeTypeAssign::setNoFeeSameDayCategory()
     * @uses MidocoFeeTypeAssign::setNoFeePrevDay()
     * @uses MidocoFeeTypeAssign::setNoFeePrevDayCategory()
     * @uses MidocoFeeTypeAssign::setFeeAssignId()
     * @uses MidocoFeeTypeAssign::setOneFeeRelatedTicketsImport()
     * @uses MidocoFeeTypeAssign::setFeePriority()
     * @uses MidocoFeeTypeAssign::setStatusMatched()
     * @uses MidocoFeeTypeAssign::setAttribMatched()
     * @param bool $isUseCustomerCurrency
     * @param bool $isExplicit
     * @param bool $segmentMultiply
     * @param bool $travellerMultiply
     * @param string $feeCategory
     * @param bool $assumeTicketTaxPercent
     * @param bool $dbUsePerMatch
     * @param bool $reverseTrip
     * @param string $ticketDesignator
     * @param bool $isNettoFeeValue
     * @param int $segmentValueSet
     * @param bool $noFeeSameDay
     * @param string $noFeeSameDayCategory
     * @param bool $noFeePrevDay
     * @param string $noFeePrevDayCategory
     * @param int $feeAssignId
     * @param bool $oneFeeRelatedTicketsImport
     * @param int $feePriority
     * @param bool $statusMatched
     * @param bool $attribMatched
     */
    public function __construct(?bool $isUseCustomerCurrency = false, ?bool $isExplicit = null, ?bool $segmentMultiply = null, ?bool $travellerMultiply = null, ?string $feeCategory = null, ?bool $assumeTicketTaxPercent = null, ?bool $dbUsePerMatch = null, ?bool $reverseTrip = null, ?string $ticketDesignator = null, ?bool $isNettoFeeValue = null, ?int $segmentValueSet = null, ?bool $noFeeSameDay = null, ?string $noFeeSameDayCategory = null, ?bool $noFeePrevDay = null, ?string $noFeePrevDayCategory = null, ?int $feeAssignId = null, ?bool $oneFeeRelatedTicketsImport = null, ?int $feePriority = null, ?bool $statusMatched = null, ?bool $attribMatched = null)
    {
        $this
            ->setIsUseCustomerCurrency($isUseCustomerCurrency)
            ->setIsExplicit($isExplicit)
            ->setSegmentMultiply($segmentMultiply)
            ->setTravellerMultiply($travellerMultiply)
            ->setFeeCategory($feeCategory)
            ->setAssumeTicketTaxPercent($assumeTicketTaxPercent)
            ->setDbUsePerMatch($dbUsePerMatch)
            ->setReverseTrip($reverseTrip)
            ->setTicketDesignator($ticketDesignator)
            ->setIsNettoFeeValue($isNettoFeeValue)
            ->setSegmentValueSet($segmentValueSet)
            ->setNoFeeSameDay($noFeeSameDay)
            ->setNoFeeSameDayCategory($noFeeSameDayCategory)
            ->setNoFeePrevDay($noFeePrevDay)
            ->setNoFeePrevDayCategory($noFeePrevDayCategory)
            ->setFeeAssignId($feeAssignId)
            ->setOneFeeRelatedTicketsImport($oneFeeRelatedTicketsImport)
            ->setFeePriority($feePriority)
            ->setStatusMatched($statusMatched)
            ->setAttribMatched($attribMatched);
    }
    /**
     * Get isUseCustomerCurrency value
     * @return bool|null
     */
    public function getIsUseCustomerCurrency(): ?bool
    {
        return $this->isUseCustomerCurrency;
    }
    /**
     * Set isUseCustomerCurrency value
     * @param bool $isUseCustomerCurrency
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign
     */
    public function setIsUseCustomerCurrency(?bool $isUseCustomerCurrency = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isUseCustomerCurrency) && !is_bool($isUseCustomerCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUseCustomerCurrency, true), gettype($isUseCustomerCurrency)), __LINE__);
        }
        $this->isUseCustomerCurrency = $isUseCustomerCurrency;
        
        return $this;
    }
    /**
     * Get isExplicit value
     * @return bool|null
     */
    public function getIsExplicit(): ?bool
    {
        return $this->isExplicit;
    }
    /**
     * Set isExplicit value
     * @param bool $isExplicit
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign
     */
    public function setIsExplicit(?bool $isExplicit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExplicit) && !is_bool($isExplicit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExplicit, true), gettype($isExplicit)), __LINE__);
        }
        $this->isExplicit = $isExplicit;
        
        return $this;
    }
    /**
     * Get segmentMultiply value
     * @return bool|null
     */
    public function getSegmentMultiply(): ?bool
    {
        return $this->segmentMultiply;
    }
    /**
     * Set segmentMultiply value
     * @param bool $segmentMultiply
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign
     */
    public function setSegmentMultiply(?bool $segmentMultiply = null): self
    {
        // validation for constraint: boolean
        if (!is_null($segmentMultiply) && !is_bool($segmentMultiply)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($segmentMultiply, true), gettype($segmentMultiply)), __LINE__);
        }
        $this->segmentMultiply = $segmentMultiply;
        
        return $this;
    }
    /**
     * Get travellerMultiply value
     * @return bool|null
     */
    public function getTravellerMultiply(): ?bool
    {
        return $this->travellerMultiply;
    }
    /**
     * Set travellerMultiply value
     * @param bool $travellerMultiply
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign
     */
    public function setTravellerMultiply(?bool $travellerMultiply = null): self
    {
        // validation for constraint: boolean
        if (!is_null($travellerMultiply) && !is_bool($travellerMultiply)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($travellerMultiply, true), gettype($travellerMultiply)), __LINE__);
        }
        $this->travellerMultiply = $travellerMultiply;
        
        return $this;
    }
    /**
     * Get feeCategory value
     * @return string|null
     */
    public function getFeeCategory(): ?string
    {
        return $this->feeCategory;
    }
    /**
     * Set feeCategory value
     * @param string $feeCategory
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign
     */
    public function setFeeCategory(?string $feeCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($feeCategory) && !is_string($feeCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeCategory, true), gettype($feeCategory)), __LINE__);
        }
        $this->feeCategory = $feeCategory;
        
        return $this;
    }
    /**
     * Get assumeTicketTaxPercent value
     * @return bool|null
     */
    public function getAssumeTicketTaxPercent(): ?bool
    {
        return $this->assumeTicketTaxPercent;
    }
    /**
     * Set assumeTicketTaxPercent value
     * @param bool $assumeTicketTaxPercent
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign
     */
    public function setAssumeTicketTaxPercent(?bool $assumeTicketTaxPercent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($assumeTicketTaxPercent) && !is_bool($assumeTicketTaxPercent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($assumeTicketTaxPercent, true), gettype($assumeTicketTaxPercent)), __LINE__);
        }
        $this->assumeTicketTaxPercent = $assumeTicketTaxPercent;
        
        return $this;
    }
    /**
     * Get dbUsePerMatch value
     * @return bool|null
     */
    public function getDbUsePerMatch(): ?bool
    {
        return $this->dbUsePerMatch;
    }
    /**
     * Set dbUsePerMatch value
     * @param bool $dbUsePerMatch
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign
     */
    public function setDbUsePerMatch(?bool $dbUsePerMatch = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dbUsePerMatch) && !is_bool($dbUsePerMatch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dbUsePerMatch, true), gettype($dbUsePerMatch)), __LINE__);
        }
        $this->dbUsePerMatch = $dbUsePerMatch;
        
        return $this;
    }
    /**
     * Get reverseTrip value
     * @return bool|null
     */
    public function getReverseTrip(): ?bool
    {
        return $this->reverseTrip;
    }
    /**
     * Set reverseTrip value
     * @param bool $reverseTrip
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign
     */
    public function setReverseTrip(?bool $reverseTrip = null): self
    {
        // validation for constraint: boolean
        if (!is_null($reverseTrip) && !is_bool($reverseTrip)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reverseTrip, true), gettype($reverseTrip)), __LINE__);
        }
        $this->reverseTrip = $reverseTrip;
        
        return $this;
    }
    /**
     * Get ticketDesignator value
     * @return string|null
     */
    public function getTicketDesignator(): ?string
    {
        return $this->ticketDesignator;
    }
    /**
     * Set ticketDesignator value
     * @param string $ticketDesignator
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign
     */
    public function setTicketDesignator(?string $ticketDesignator = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketDesignator) && !is_string($ticketDesignator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketDesignator, true), gettype($ticketDesignator)), __LINE__);
        }
        $this->ticketDesignator = $ticketDesignator;
        
        return $this;
    }
    /**
     * Get isNettoFeeValue value
     * @return bool|null
     */
    public function getIsNettoFeeValue(): ?bool
    {
        return $this->isNettoFeeValue;
    }
    /**
     * Set isNettoFeeValue value
     * @param bool $isNettoFeeValue
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign
     */
    public function setIsNettoFeeValue(?bool $isNettoFeeValue = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isNettoFeeValue) && !is_bool($isNettoFeeValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNettoFeeValue, true), gettype($isNettoFeeValue)), __LINE__);
        }
        $this->isNettoFeeValue = $isNettoFeeValue;
        
        return $this;
    }
    /**
     * Get segmentValueSet value
     * @return int|null
     */
    public function getSegmentValueSet(): ?int
    {
        return $this->segmentValueSet;
    }
    /**
     * Set segmentValueSet value
     * @param int $segmentValueSet
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign
     */
    public function setSegmentValueSet(?int $segmentValueSet = null): self
    {
        // validation for constraint: int
        if (!is_null($segmentValueSet) && !(is_int($segmentValueSet) || ctype_digit($segmentValueSet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($segmentValueSet, true), gettype($segmentValueSet)), __LINE__);
        }
        $this->segmentValueSet = $segmentValueSet;
        
        return $this;
    }
    /**
     * Get noFeeSameDay value
     * @return bool|null
     */
    public function getNoFeeSameDay(): ?bool
    {
        return $this->noFeeSameDay;
    }
    /**
     * Set noFeeSameDay value
     * @param bool $noFeeSameDay
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign
     */
    public function setNoFeeSameDay(?bool $noFeeSameDay = null): self
    {
        // validation for constraint: boolean
        if (!is_null($noFeeSameDay) && !is_bool($noFeeSameDay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($noFeeSameDay, true), gettype($noFeeSameDay)), __LINE__);
        }
        $this->noFeeSameDay = $noFeeSameDay;
        
        return $this;
    }
    /**
     * Get noFeeSameDayCategory value
     * @return string|null
     */
    public function getNoFeeSameDayCategory(): ?string
    {
        return $this->noFeeSameDayCategory;
    }
    /**
     * Set noFeeSameDayCategory value
     * @param string $noFeeSameDayCategory
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign
     */
    public function setNoFeeSameDayCategory(?string $noFeeSameDayCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($noFeeSameDayCategory) && !is_string($noFeeSameDayCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noFeeSameDayCategory, true), gettype($noFeeSameDayCategory)), __LINE__);
        }
        $this->noFeeSameDayCategory = $noFeeSameDayCategory;
        
        return $this;
    }
    /**
     * Get noFeePrevDay value
     * @return bool|null
     */
    public function getNoFeePrevDay(): ?bool
    {
        return $this->noFeePrevDay;
    }
    /**
     * Set noFeePrevDay value
     * @param bool $noFeePrevDay
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign
     */
    public function setNoFeePrevDay(?bool $noFeePrevDay = null): self
    {
        // validation for constraint: boolean
        if (!is_null($noFeePrevDay) && !is_bool($noFeePrevDay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($noFeePrevDay, true), gettype($noFeePrevDay)), __LINE__);
        }
        $this->noFeePrevDay = $noFeePrevDay;
        
        return $this;
    }
    /**
     * Get noFeePrevDayCategory value
     * @return string|null
     */
    public function getNoFeePrevDayCategory(): ?string
    {
        return $this->noFeePrevDayCategory;
    }
    /**
     * Set noFeePrevDayCategory value
     * @param string $noFeePrevDayCategory
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign
     */
    public function setNoFeePrevDayCategory(?string $noFeePrevDayCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($noFeePrevDayCategory) && !is_string($noFeePrevDayCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noFeePrevDayCategory, true), gettype($noFeePrevDayCategory)), __LINE__);
        }
        $this->noFeePrevDayCategory = $noFeePrevDayCategory;
        
        return $this;
    }
    /**
     * Get feeAssignId value
     * @return int|null
     */
    public function getFeeAssignId(): ?int
    {
        return $this->feeAssignId;
    }
    /**
     * Set feeAssignId value
     * @param int $feeAssignId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign
     */
    public function setFeeAssignId(?int $feeAssignId = null): self
    {
        // validation for constraint: int
        if (!is_null($feeAssignId) && !(is_int($feeAssignId) || ctype_digit($feeAssignId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feeAssignId, true), gettype($feeAssignId)), __LINE__);
        }
        $this->feeAssignId = $feeAssignId;
        
        return $this;
    }
    /**
     * Get oneFeeRelatedTicketsImport value
     * @return bool|null
     */
    public function getOneFeeRelatedTicketsImport(): ?bool
    {
        return $this->oneFeeRelatedTicketsImport;
    }
    /**
     * Set oneFeeRelatedTicketsImport value
     * @param bool $oneFeeRelatedTicketsImport
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign
     */
    public function setOneFeeRelatedTicketsImport(?bool $oneFeeRelatedTicketsImport = null): self
    {
        // validation for constraint: boolean
        if (!is_null($oneFeeRelatedTicketsImport) && !is_bool($oneFeeRelatedTicketsImport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($oneFeeRelatedTicketsImport, true), gettype($oneFeeRelatedTicketsImport)), __LINE__);
        }
        $this->oneFeeRelatedTicketsImport = $oneFeeRelatedTicketsImport;
        
        return $this;
    }
    /**
     * Get feePriority value
     * @return int|null
     */
    public function getFeePriority(): ?int
    {
        return $this->feePriority;
    }
    /**
     * Set feePriority value
     * @param int $feePriority
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign
     */
    public function setFeePriority(?int $feePriority = null): self
    {
        // validation for constraint: int
        if (!is_null($feePriority) && !(is_int($feePriority) || ctype_digit($feePriority))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feePriority, true), gettype($feePriority)), __LINE__);
        }
        $this->feePriority = $feePriority;
        
        return $this;
    }
    /**
     * Get statusMatched value
     * @return bool|null
     */
    public function getStatusMatched(): ?bool
    {
        return $this->statusMatched;
    }
    /**
     * Set statusMatched value
     * @param bool $statusMatched
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign
     */
    public function setStatusMatched(?bool $statusMatched = null): self
    {
        // validation for constraint: boolean
        if (!is_null($statusMatched) && !is_bool($statusMatched)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($statusMatched, true), gettype($statusMatched)), __LINE__);
        }
        $this->statusMatched = $statusMatched;
        
        return $this;
    }
    /**
     * Get attribMatched value
     * @return bool|null
     */
    public function getAttribMatched(): ?bool
    {
        return $this->attribMatched;
    }
    /**
     * Set attribMatched value
     * @param bool $attribMatched
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeAssign
     */
    public function setAttribMatched(?bool $attribMatched = null): self
    {
        // validation for constraint: boolean
        if (!is_null($attribMatched) && !is_bool($attribMatched)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($attribMatched, true), gettype($attribMatched)), __LINE__);
        }
        $this->attribMatched = $attribMatched;
        
        return $this;
    }
}
