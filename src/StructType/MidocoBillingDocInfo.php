<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingDocInfo StructType
 * @subpackage Structs
 */
class MidocoBillingDocInfo extends AbstractStructBase
{
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The documentNo
     * @var string|null
     */
    protected ?string $documentNo = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The printingDate
     * @var string|null
     */
    protected ?string $printingDate = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The paid
     * @var bool|null
     */
    protected ?bool $paid = null;
    /**
     * The paidDate
     * @var string|null
     */
    protected ?string $paidDate = null;
    /**
     * The media
     * @var string|null
     */
    protected ?string $media = null;
    /**
     * The isManuallyCreated
     * @var bool|null
     */
    protected ?bool $isManuallyCreated = null;
    /**
     * The collectInvReferenceNo
     * @var int|null
     */
    protected ?int $collectInvReferenceNo = null;
    /**
     * The travellerId
     * @var int|null
     */
    protected ?int $travellerId = null;
    /**
     * The travellerName
     * @var string|null
     */
    protected ?string $travellerName = null;
    /**
     * The confirmationGroup
     * @var string|null
     */
    protected ?string $confirmationGroup = null;
    /**
     * The storeUntil
     * @var string|null
     */
    protected ?string $storeUntil = null;
    /**
     * The isDraft
     * @var bool|null
     */
    protected ?bool $isDraft = null;
    /**
     * Constructor method for MidocoBillingDocInfo
     * @uses MidocoBillingDocInfo::setDocumentId()
     * @uses MidocoBillingDocInfo::setName()
     * @uses MidocoBillingDocInfo::setForename()
     * @uses MidocoBillingDocInfo::setDocumentNo()
     * @uses MidocoBillingDocInfo::setType()
     * @uses MidocoBillingDocInfo::setCreationDate()
     * @uses MidocoBillingDocInfo::setPrintingDate()
     * @uses MidocoBillingDocInfo::setTotalPrice()
     * @uses MidocoBillingDocInfo::setPaid()
     * @uses MidocoBillingDocInfo::setPaidDate()
     * @uses MidocoBillingDocInfo::setMedia()
     * @uses MidocoBillingDocInfo::setIsManuallyCreated()
     * @uses MidocoBillingDocInfo::setCollectInvReferenceNo()
     * @uses MidocoBillingDocInfo::setTravellerId()
     * @uses MidocoBillingDocInfo::setTravellerName()
     * @uses MidocoBillingDocInfo::setConfirmationGroup()
     * @uses MidocoBillingDocInfo::setStoreUntil()
     * @uses MidocoBillingDocInfo::setIsDraft()
     * @param int $documentId
     * @param string $name
     * @param string $forename
     * @param string $documentNo
     * @param string $type
     * @param string $creationDate
     * @param string $printingDate
     * @param float $totalPrice
     * @param bool $paid
     * @param string $paidDate
     * @param string $media
     * @param bool $isManuallyCreated
     * @param int $collectInvReferenceNo
     * @param int $travellerId
     * @param string $travellerName
     * @param string $confirmationGroup
     * @param string $storeUntil
     * @param bool $isDraft
     */
    public function __construct(?int $documentId = null, ?string $name = null, ?string $forename = null, ?string $documentNo = null, ?string $type = null, ?string $creationDate = null, ?string $printingDate = null, ?float $totalPrice = null, ?bool $paid = null, ?string $paidDate = null, ?string $media = null, ?bool $isManuallyCreated = null, ?int $collectInvReferenceNo = null, ?int $travellerId = null, ?string $travellerName = null, ?string $confirmationGroup = null, ?string $storeUntil = null, ?bool $isDraft = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setName($name)
            ->setForename($forename)
            ->setDocumentNo($documentNo)
            ->setType($type)
            ->setCreationDate($creationDate)
            ->setPrintingDate($printingDate)
            ->setTotalPrice($totalPrice)
            ->setPaid($paid)
            ->setPaidDate($paidDate)
            ->setMedia($media)
            ->setIsManuallyCreated($isManuallyCreated)
            ->setCollectInvReferenceNo($collectInvReferenceNo)
            ->setTravellerId($travellerId)
            ->setTravellerName($travellerName)
            ->setConfirmationGroup($confirmationGroup)
            ->setStoreUntil($storeUntil)
            ->setIsDraft($isDraft);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfo
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
     * Get documentNo value
     * @return string|null
     */
    public function getDocumentNo(): ?string
    {
        return $this->documentNo;
    }
    /**
     * Set documentNo value
     * @param string $documentNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfo
     */
    public function setDocumentNo(?string $documentNo = null): self
    {
        // validation for constraint: string
        if (!is_null($documentNo) && !is_string($documentNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNo, true), gettype($documentNo)), __LINE__);
        }
        $this->documentNo = $documentNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfo
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
     * Get printingDate value
     * @return string|null
     */
    public function getPrintingDate(): ?string
    {
        return $this->printingDate;
    }
    /**
     * Set printingDate value
     * @param string $printingDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfo
     */
    public function setPrintingDate(?string $printingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($printingDate) && !is_string($printingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printingDate, true), gettype($printingDate)), __LINE__);
        }
        $this->printingDate = $printingDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfo
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
     * Get paid value
     * @return bool|null
     */
    public function getPaid(): ?bool
    {
        return $this->paid;
    }
    /**
     * Set paid value
     * @param bool $paid
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfo
     */
    public function setPaid(?bool $paid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($paid) && !is_bool($paid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($paid, true), gettype($paid)), __LINE__);
        }
        $this->paid = $paid;
        
        return $this;
    }
    /**
     * Get paidDate value
     * @return string|null
     */
    public function getPaidDate(): ?string
    {
        return $this->paidDate;
    }
    /**
     * Set paidDate value
     * @param string $paidDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfo
     */
    public function setPaidDate(?string $paidDate = null): self
    {
        // validation for constraint: string
        if (!is_null($paidDate) && !is_string($paidDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paidDate, true), gettype($paidDate)), __LINE__);
        }
        $this->paidDate = $paidDate;
        
        return $this;
    }
    /**
     * Get media value
     * @return string|null
     */
    public function getMedia(): ?string
    {
        return $this->media;
    }
    /**
     * Set media value
     * @param string $media
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfo
     */
    public function setMedia(?string $media = null): self
    {
        // validation for constraint: string
        if (!is_null($media) && !is_string($media)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($media, true), gettype($media)), __LINE__);
        }
        $this->media = $media;
        
        return $this;
    }
    /**
     * Get isManuallyCreated value
     * @return bool|null
     */
    public function getIsManuallyCreated(): ?bool
    {
        return $this->isManuallyCreated;
    }
    /**
     * Set isManuallyCreated value
     * @param bool $isManuallyCreated
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfo
     */
    public function setIsManuallyCreated(?bool $isManuallyCreated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isManuallyCreated) && !is_bool($isManuallyCreated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isManuallyCreated, true), gettype($isManuallyCreated)), __LINE__);
        }
        $this->isManuallyCreated = $isManuallyCreated;
        
        return $this;
    }
    /**
     * Get collectInvReferenceNo value
     * @return int|null
     */
    public function getCollectInvReferenceNo(): ?int
    {
        return $this->collectInvReferenceNo;
    }
    /**
     * Set collectInvReferenceNo value
     * @param int $collectInvReferenceNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfo
     */
    public function setCollectInvReferenceNo(?int $collectInvReferenceNo = null): self
    {
        // validation for constraint: int
        if (!is_null($collectInvReferenceNo) && !(is_int($collectInvReferenceNo) || ctype_digit($collectInvReferenceNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($collectInvReferenceNo, true), gettype($collectInvReferenceNo)), __LINE__);
        }
        $this->collectInvReferenceNo = $collectInvReferenceNo;
        
        return $this;
    }
    /**
     * Get travellerId value
     * @return int|null
     */
    public function getTravellerId(): ?int
    {
        return $this->travellerId;
    }
    /**
     * Set travellerId value
     * @param int $travellerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfo
     */
    public function setTravellerId(?int $travellerId = null): self
    {
        // validation for constraint: int
        if (!is_null($travellerId) && !(is_int($travellerId) || ctype_digit($travellerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travellerId, true), gettype($travellerId)), __LINE__);
        }
        $this->travellerId = $travellerId;
        
        return $this;
    }
    /**
     * Get travellerName value
     * @return string|null
     */
    public function getTravellerName(): ?string
    {
        return $this->travellerName;
    }
    /**
     * Set travellerName value
     * @param string $travellerName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfo
     */
    public function setTravellerName(?string $travellerName = null): self
    {
        // validation for constraint: string
        if (!is_null($travellerName) && !is_string($travellerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travellerName, true), gettype($travellerName)), __LINE__);
        }
        $this->travellerName = $travellerName;
        
        return $this;
    }
    /**
     * Get confirmationGroup value
     * @return string|null
     */
    public function getConfirmationGroup(): ?string
    {
        return $this->confirmationGroup;
    }
    /**
     * Set confirmationGroup value
     * @param string $confirmationGroup
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfo
     */
    public function setConfirmationGroup(?string $confirmationGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmationGroup) && !is_string($confirmationGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmationGroup, true), gettype($confirmationGroup)), __LINE__);
        }
        $this->confirmationGroup = $confirmationGroup;
        
        return $this;
    }
    /**
     * Get storeUntil value
     * @return string|null
     */
    public function getStoreUntil(): ?string
    {
        return $this->storeUntil;
    }
    /**
     * Set storeUntil value
     * @param string $storeUntil
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfo
     */
    public function setStoreUntil(?string $storeUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($storeUntil) && !is_string($storeUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeUntil, true), gettype($storeUntil)), __LINE__);
        }
        $this->storeUntil = $storeUntil;
        
        return $this;
    }
    /**
     * Get isDraft value
     * @return bool|null
     */
    public function getIsDraft(): ?bool
    {
        return $this->isDraft;
    }
    /**
     * Set isDraft value
     * @param bool $isDraft
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfo
     */
    public function setIsDraft(?bool $isDraft = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDraft) && !is_bool($isDraft)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDraft, true), gettype($isDraft)), __LINE__);
        }
        $this->isDraft = $isDraft;
        
        return $this;
    }
}
