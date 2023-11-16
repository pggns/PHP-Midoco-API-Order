<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingDocInfoForCustomer StructType
 * @subpackage Structs
 */
class MidocoBillingDocInfoForCustomer extends AbstractStructBase
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
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The storeUntil
     * @var string|null
     */
    protected ?string $storeUntil = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * Constructor method for MidocoBillingDocInfoForCustomer
     * @uses MidocoBillingDocInfoForCustomer::setDocumentId()
     * @uses MidocoBillingDocInfoForCustomer::setName()
     * @uses MidocoBillingDocInfoForCustomer::setForename()
     * @uses MidocoBillingDocInfoForCustomer::setDocumentNo()
     * @uses MidocoBillingDocInfoForCustomer::setType()
     * @uses MidocoBillingDocInfoForCustomer::setCreationDate()
     * @uses MidocoBillingDocInfoForCustomer::setPrintingDate()
     * @uses MidocoBillingDocInfoForCustomer::setTotalPrice()
     * @uses MidocoBillingDocInfoForCustomer::setPaid()
     * @uses MidocoBillingDocInfoForCustomer::setPaidDate()
     * @uses MidocoBillingDocInfoForCustomer::setMedia()
     * @uses MidocoBillingDocInfoForCustomer::setIsManuallyCreated()
     * @uses MidocoBillingDocInfoForCustomer::setCollectInvReferenceNo()
     * @uses MidocoBillingDocInfoForCustomer::setTravelDate()
     * @uses MidocoBillingDocInfoForCustomer::setStoreUntil()
     * @uses MidocoBillingDocInfoForCustomer::setRepositoryId()
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
     * @param string $travelDate
     * @param string $storeUntil
     * @param int $repositoryId
     */
    public function __construct(?int $documentId = null, ?string $name = null, ?string $forename = null, ?string $documentNo = null, ?string $type = null, ?string $creationDate = null, ?string $printingDate = null, ?float $totalPrice = null, ?bool $paid = null, ?string $paidDate = null, ?string $media = null, ?bool $isManuallyCreated = null, ?int $collectInvReferenceNo = null, ?string $travelDate = null, ?string $storeUntil = null, ?int $repositoryId = null)
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
            ->setTravelDate($travelDate)
            ->setStoreUntil($storeUntil)
            ->setRepositoryId($repositoryId);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer
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
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer
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
     * Get repositoryId value
     * @return int|null
     */
    public function getRepositoryId(): ?int
    {
        return $this->repositoryId;
    }
    /**
     * Set repositoryId value
     * @param int $repositoryId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer
     */
    public function setRepositoryId(?int $repositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($repositoryId) && !(is_int($repositoryId) || ctype_digit($repositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repositoryId, true), gettype($repositoryId)), __LINE__);
        }
        $this->repositoryId = $repositoryId;
        
        return $this;
    }
}
