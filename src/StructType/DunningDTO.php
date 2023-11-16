<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DunningDTO StructType
 * @subpackage Structs
 */
class DunningDTO extends AbstractStructBase
{
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The documentExportDate
     * @var string|null
     */
    protected ?string $documentExportDate = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
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
     * The dunningTemplateId
     * @var int|null
     */
    protected ?int $dunningTemplateId = null;
    /**
     * The excUserId
     * @var int|null
     */
    protected ?int $excUserId = null;
    /**
     * The forStorno
     * @var bool|null
     */
    protected ?bool $forStorno = null;
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
     * The inkassoPrice
     * @var float|null
     */
    protected ?float $inkassoPrice = null;
    /**
     * The isDepositPayment
     * @var bool|null
     */
    protected ?bool $isDepositPayment = null;
    /**
     * The isDocumentExported
     * @var bool|null
     */
    protected ?bool $isDocumentExported = null;
    /**
     * The media
     * @var string|null
     */
    protected ?string $media = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * Constructor method for DunningDTO
     * @uses DunningDTO::setCreationDate()
     * @uses DunningDTO::setDocumentExportDate()
     * @uses DunningDTO::setDocumentId()
     * @uses DunningDTO::setDueDate()
     * @uses DunningDTO::setDunningAmount()
     * @uses DunningDTO::setDunningCharge()
     * @uses DunningDTO::setDunningLevel()
     * @uses DunningDTO::setDunningTemplateId()
     * @uses DunningDTO::setExcUserId()
     * @uses DunningDTO::setForStorno()
     * @uses DunningDTO::setForename()
     * @uses DunningDTO::setId()
     * @uses DunningDTO::setInkassoPrice()
     * @uses DunningDTO::setIsDepositPayment()
     * @uses DunningDTO::setIsDocumentExported()
     * @uses DunningDTO::setMedia()
     * @uses DunningDTO::setName()
     * @uses DunningDTO::setOrderId()
     * @uses DunningDTO::setOrderNo()
     * @uses DunningDTO::setRepositoryId()
     * @param string $creationDate
     * @param string $documentExportDate
     * @param int $documentId
     * @param string $dueDate
     * @param float $dunningAmount
     * @param float $dunningCharge
     * @param int $dunningLevel
     * @param int $dunningTemplateId
     * @param int $excUserId
     * @param bool $forStorno
     * @param string $forename
     * @param int $id
     * @param float $inkassoPrice
     * @param bool $isDepositPayment
     * @param bool $isDocumentExported
     * @param string $media
     * @param string $name
     * @param int $orderId
     * @param int $orderNo
     * @param int $repositoryId
     */
    public function __construct(?string $creationDate = null, ?string $documentExportDate = null, ?int $documentId = null, ?string $dueDate = null, ?float $dunningAmount = null, ?float $dunningCharge = null, ?int $dunningLevel = null, ?int $dunningTemplateId = null, ?int $excUserId = null, ?bool $forStorno = null, ?string $forename = null, ?int $id = null, ?float $inkassoPrice = null, ?bool $isDepositPayment = null, ?bool $isDocumentExported = null, ?string $media = null, ?string $name = null, ?int $orderId = null, ?int $orderNo = null, ?int $repositoryId = null)
    {
        $this
            ->setCreationDate($creationDate)
            ->setDocumentExportDate($documentExportDate)
            ->setDocumentId($documentId)
            ->setDueDate($dueDate)
            ->setDunningAmount($dunningAmount)
            ->setDunningCharge($dunningCharge)
            ->setDunningLevel($dunningLevel)
            ->setDunningTemplateId($dunningTemplateId)
            ->setExcUserId($excUserId)
            ->setForStorno($forStorno)
            ->setForename($forename)
            ->setId($id)
            ->setInkassoPrice($inkassoPrice)
            ->setIsDepositPayment($isDepositPayment)
            ->setIsDocumentExported($isDocumentExported)
            ->setMedia($media)
            ->setName($name)
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setRepositoryId($repositoryId);
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
     * @return \Pggns\MidocoApi\Order\StructType\DunningDTO
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
     * Get documentExportDate value
     * @return string|null
     */
    public function getDocumentExportDate(): ?string
    {
        return $this->documentExportDate;
    }
    /**
     * Set documentExportDate value
     * @param string $documentExportDate
     * @return \Pggns\MidocoApi\Order\StructType\DunningDTO
     */
    public function setDocumentExportDate(?string $documentExportDate = null): self
    {
        // validation for constraint: string
        if (!is_null($documentExportDate) && !is_string($documentExportDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentExportDate, true), gettype($documentExportDate)), __LINE__);
        }
        $this->documentExportDate = $documentExportDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DunningDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DunningDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DunningDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DunningDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DunningDTO
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
     * Get dunningTemplateId value
     * @return int|null
     */
    public function getDunningTemplateId(): ?int
    {
        return $this->dunningTemplateId;
    }
    /**
     * Set dunningTemplateId value
     * @param int $dunningTemplateId
     * @return \Pggns\MidocoApi\Order\StructType\DunningDTO
     */
    public function setDunningTemplateId(?int $dunningTemplateId = null): self
    {
        // validation for constraint: int
        if (!is_null($dunningTemplateId) && !(is_int($dunningTemplateId) || ctype_digit($dunningTemplateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dunningTemplateId, true), gettype($dunningTemplateId)), __LINE__);
        }
        $this->dunningTemplateId = $dunningTemplateId;
        
        return $this;
    }
    /**
     * Get excUserId value
     * @return int|null
     */
    public function getExcUserId(): ?int
    {
        return $this->excUserId;
    }
    /**
     * Set excUserId value
     * @param int $excUserId
     * @return \Pggns\MidocoApi\Order\StructType\DunningDTO
     */
    public function setExcUserId(?int $excUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($excUserId) && !(is_int($excUserId) || ctype_digit($excUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($excUserId, true), gettype($excUserId)), __LINE__);
        }
        $this->excUserId = $excUserId;
        
        return $this;
    }
    /**
     * Get forStorno value
     * @return bool|null
     */
    public function getForStorno(): ?bool
    {
        return $this->forStorno;
    }
    /**
     * Set forStorno value
     * @param bool $forStorno
     * @return \Pggns\MidocoApi\Order\StructType\DunningDTO
     */
    public function setForStorno(?bool $forStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forStorno) && !is_bool($forStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forStorno, true), gettype($forStorno)), __LINE__);
        }
        $this->forStorno = $forStorno;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DunningDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DunningDTO
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
     * Get inkassoPrice value
     * @return float|null
     */
    public function getInkassoPrice(): ?float
    {
        return $this->inkassoPrice;
    }
    /**
     * Set inkassoPrice value
     * @param float $inkassoPrice
     * @return \Pggns\MidocoApi\Order\StructType\DunningDTO
     */
    public function setInkassoPrice(?float $inkassoPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($inkassoPrice) && !(is_float($inkassoPrice) || is_numeric($inkassoPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($inkassoPrice, true), gettype($inkassoPrice)), __LINE__);
        }
        $this->inkassoPrice = $inkassoPrice;
        
        return $this;
    }
    /**
     * Get isDepositPayment value
     * @return bool|null
     */
    public function getIsDepositPayment(): ?bool
    {
        return $this->isDepositPayment;
    }
    /**
     * Set isDepositPayment value
     * @param bool $isDepositPayment
     * @return \Pggns\MidocoApi\Order\StructType\DunningDTO
     */
    public function setIsDepositPayment(?bool $isDepositPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDepositPayment) && !is_bool($isDepositPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDepositPayment, true), gettype($isDepositPayment)), __LINE__);
        }
        $this->isDepositPayment = $isDepositPayment;
        
        return $this;
    }
    /**
     * Get isDocumentExported value
     * @return bool|null
     */
    public function getIsDocumentExported(): ?bool
    {
        return $this->isDocumentExported;
    }
    /**
     * Set isDocumentExported value
     * @param bool $isDocumentExported
     * @return \Pggns\MidocoApi\Order\StructType\DunningDTO
     */
    public function setIsDocumentExported(?bool $isDocumentExported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDocumentExported) && !is_bool($isDocumentExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDocumentExported, true), gettype($isDocumentExported)), __LINE__);
        }
        $this->isDocumentExported = $isDocumentExported;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DunningDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DunningDTO
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
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\DunningDTO
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\DunningDTO
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DunningDTO
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
