<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingDunning StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBillingDunning extends AbstractStructBase
{
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The dueDate
     * @var string|null
     */
    protected ?string $dueDate = null;
    /**
     * The dunningAmount
     * @var float|null
     */
    protected ?float $dunningAmount = null;
    /**
     * The dunningCharge
     * @var float|null
     */
    protected ?float $dunningCharge = null;
    /**
     * The dunningLevel
     * @var int|null
     */
    protected ?int $dunningLevel = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The documentNo
     * @var int|null
     */
    protected ?int $documentNo = null;
    /**
     * The accountNo
     * @var string|null
     */
    protected ?string $accountNo = null;
    /**
     * Constructor method for MidocoBillingDunning
     * @uses MidocoBillingDunning::setCreationDate()
     * @uses MidocoBillingDunning::setDueDate()
     * @uses MidocoBillingDunning::setDunningAmount()
     * @uses MidocoBillingDunning::setDunningCharge()
     * @uses MidocoBillingDunning::setDunningLevel()
     * @uses MidocoBillingDunning::setForename()
     * @uses MidocoBillingDunning::setId()
     * @uses MidocoBillingDunning::setName()
     * @uses MidocoBillingDunning::setDocumentId()
     * @uses MidocoBillingDunning::setDocumentNo()
     * @uses MidocoBillingDunning::setAccountNo()
     * @param string $creationDate
     * @param string $dueDate
     * @param float $dunningAmount
     * @param float $dunningCharge
     * @param int $dunningLevel
     * @param string $forename
     * @param int $id
     * @param string $name
     * @param int $documentId
     * @param int $documentNo
     * @param string $accountNo
     */
    public function __construct(?string $creationDate = null, ?string $dueDate = null, ?float $dunningAmount = null, ?float $dunningCharge = null, ?int $dunningLevel = null, ?string $forename = null, ?int $id = null, ?string $name = null, ?int $documentId = null, ?int $documentNo = null, ?string $accountNo = null)
    {
        $this
            ->setCreationDate($creationDate)
            ->setDueDate($dueDate)
            ->setDunningAmount($dunningAmount)
            ->setDunningCharge($dunningCharge)
            ->setDunningLevel($dunningLevel)
            ->setForename($forename)
            ->setId($id)
            ->setName($name)
            ->setDocumentId($documentId)
            ->setDocumentNo($documentNo)
            ->setAccountNo($accountNo);
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDunning
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get dueDate value
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }
    /**
     * Set dueDate value
     * @param string $dueDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDunning
     */
    public function setDueDate(?string $dueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDate, true), gettype($dueDate)), __LINE__);
        }
        $this->dueDate = $dueDate;
        
        return $this;
    }
    /**
     * Get dunningAmount value
     * @return float|null
     */
    public function getDunningAmount(): ?float
    {
        return $this->dunningAmount;
    }
    /**
     * Set dunningAmount value
     * @param float $dunningAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDunning
     */
    public function setDunningAmount(?float $dunningAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($dunningAmount) && !(is_float($dunningAmount) || is_numeric($dunningAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($dunningAmount, true), gettype($dunningAmount)), __LINE__);
        }
        $this->dunningAmount = $dunningAmount;
        
        return $this;
    }
    /**
     * Get dunningCharge value
     * @return float|null
     */
    public function getDunningCharge(): ?float
    {
        return $this->dunningCharge;
    }
    /**
     * Set dunningCharge value
     * @param float $dunningCharge
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDunning
     */
    public function setDunningCharge(?float $dunningCharge = null): self
    {
        // validation for constraint: float
        if (!is_null($dunningCharge) && !(is_float($dunningCharge) || is_numeric($dunningCharge))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($dunningCharge, true), gettype($dunningCharge)), __LINE__);
        }
        $this->dunningCharge = $dunningCharge;
        
        return $this;
    }
    /**
     * Get dunningLevel value
     * @return int|null
     */
    public function getDunningLevel(): ?int
    {
        return $this->dunningLevel;
    }
    /**
     * Set dunningLevel value
     * @param int $dunningLevel
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDunning
     */
    public function setDunningLevel(?int $dunningLevel = null): self
    {
        // validation for constraint: int
        if (!is_null($dunningLevel) && !(is_int($dunningLevel) || ctype_digit($dunningLevel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dunningLevel, true), gettype($dunningLevel)), __LINE__);
        }
        $this->dunningLevel = $dunningLevel;
        
        return $this;
    }
    /**
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDunning
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDunning
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDunning
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDunning
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Get documentNo value
     * @return int|null
     */
    public function getDocumentNo(): ?int
    {
        return $this->documentNo;
    }
    /**
     * Set documentNo value
     * @param int $documentNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDunning
     */
    public function setDocumentNo(?int $documentNo = null): self
    {
        // validation for constraint: int
        if (!is_null($documentNo) && !(is_int($documentNo) || ctype_digit($documentNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentNo, true), gettype($documentNo)), __LINE__);
        }
        $this->documentNo = $documentNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDunning
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
}
