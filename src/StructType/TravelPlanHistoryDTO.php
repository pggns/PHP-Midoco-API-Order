<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelPlanHistoryDTO StructType
 * @subpackage Structs
 */
class TravelPlanHistoryDTO extends AbstractStructBase
{
    /**
     * The automatic
     * @var bool|null
     */
    protected ?bool $automatic = null;
    /**
     * The callDate
     * @var string|null
     */
    protected ?string $callDate = null;
    /**
     * The documentExportDate
     * @var string|null
     */
    protected ?string $documentExportDate = null;
    /**
     * The fileName
     * @var string|null
     */
    protected ?string $fileName = null;
    /**
     * The historyId
     * @var int|null
     */
    protected ?int $historyId = null;
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
     * The orderDocumentId
     * @var int|null
     */
    protected ?int $orderDocumentId = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The printType
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * The printingDate
     * @var string|null
     */
    protected ?string $printingDate = null;
    /**
     * The printingUser
     * @var int|null
     */
    protected ?int $printingUser = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * Constructor method for TravelPlanHistoryDTO
     * @uses TravelPlanHistoryDTO::setAutomatic()
     * @uses TravelPlanHistoryDTO::setCallDate()
     * @uses TravelPlanHistoryDTO::setDocumentExportDate()
     * @uses TravelPlanHistoryDTO::setFileName()
     * @uses TravelPlanHistoryDTO::setHistoryId()
     * @uses TravelPlanHistoryDTO::setIsDocumentExported()
     * @uses TravelPlanHistoryDTO::setMedia()
     * @uses TravelPlanHistoryDTO::setOrderDocumentId()
     * @uses TravelPlanHistoryDTO::setOrderId()
     * @uses TravelPlanHistoryDTO::setPrintType()
     * @uses TravelPlanHistoryDTO::setPrintingDate()
     * @uses TravelPlanHistoryDTO::setPrintingUser()
     * @uses TravelPlanHistoryDTO::setRepositoryId()
     * @param bool $automatic
     * @param string $callDate
     * @param string $documentExportDate
     * @param string $fileName
     * @param int $historyId
     * @param bool $isDocumentExported
     * @param string $media
     * @param int $orderDocumentId
     * @param int $orderId
     * @param string $printType
     * @param string $printingDate
     * @param int $printingUser
     * @param int $repositoryId
     */
    public function __construct(?bool $automatic = null, ?string $callDate = null, ?string $documentExportDate = null, ?string $fileName = null, ?int $historyId = null, ?bool $isDocumentExported = null, ?string $media = null, ?int $orderDocumentId = null, ?int $orderId = null, ?string $printType = null, ?string $printingDate = null, ?int $printingUser = null, ?int $repositoryId = null)
    {
        $this
            ->setAutomatic($automatic)
            ->setCallDate($callDate)
            ->setDocumentExportDate($documentExportDate)
            ->setFileName($fileName)
            ->setHistoryId($historyId)
            ->setIsDocumentExported($isDocumentExported)
            ->setMedia($media)
            ->setOrderDocumentId($orderDocumentId)
            ->setOrderId($orderId)
            ->setPrintType($printType)
            ->setPrintingDate($printingDate)
            ->setPrintingUser($printingUser)
            ->setRepositoryId($repositoryId);
    }
    /**
     * Get automatic value
     * @return bool|null
     */
    public function getAutomatic(): ?bool
    {
        return $this->automatic;
    }
    /**
     * Set automatic value
     * @param bool $automatic
     * @return \Pggns\MidocoApi\Order\StructType\TravelPlanHistoryDTO
     */
    public function setAutomatic(?bool $automatic = null): self
    {
        // validation for constraint: boolean
        if (!is_null($automatic) && !is_bool($automatic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($automatic, true), gettype($automatic)), __LINE__);
        }
        $this->automatic = $automatic;
        
        return $this;
    }
    /**
     * Get callDate value
     * @return string|null
     */
    public function getCallDate(): ?string
    {
        return $this->callDate;
    }
    /**
     * Set callDate value
     * @param string $callDate
     * @return \Pggns\MidocoApi\Order\StructType\TravelPlanHistoryDTO
     */
    public function setCallDate(?string $callDate = null): self
    {
        // validation for constraint: string
        if (!is_null($callDate) && !is_string($callDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callDate, true), gettype($callDate)), __LINE__);
        }
        $this->callDate = $callDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelPlanHistoryDTO
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
     * Get fileName value
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }
    /**
     * Set fileName value
     * @param string $fileName
     * @return \Pggns\MidocoApi\Order\StructType\TravelPlanHistoryDTO
     */
    public function setFileName(?string $fileName = null): self
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        $this->fileName = $fileName;
        
        return $this;
    }
    /**
     * Get historyId value
     * @return int|null
     */
    public function getHistoryId(): ?int
    {
        return $this->historyId;
    }
    /**
     * Set historyId value
     * @param int $historyId
     * @return \Pggns\MidocoApi\Order\StructType\TravelPlanHistoryDTO
     */
    public function setHistoryId(?int $historyId = null): self
    {
        // validation for constraint: int
        if (!is_null($historyId) && !(is_int($historyId) || ctype_digit($historyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($historyId, true), gettype($historyId)), __LINE__);
        }
        $this->historyId = $historyId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelPlanHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelPlanHistoryDTO
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
     * Get orderDocumentId value
     * @return int|null
     */
    public function getOrderDocumentId(): ?int
    {
        return $this->orderDocumentId;
    }
    /**
     * Set orderDocumentId value
     * @param int $orderDocumentId
     * @return \Pggns\MidocoApi\Order\StructType\TravelPlanHistoryDTO
     */
    public function setOrderDocumentId(?int $orderDocumentId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderDocumentId) && !(is_int($orderDocumentId) || ctype_digit($orderDocumentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderDocumentId, true), gettype($orderDocumentId)), __LINE__);
        }
        $this->orderDocumentId = $orderDocumentId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelPlanHistoryDTO
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
     * Get printType value
     * @return string|null
     */
    public function getPrintType(): ?string
    {
        return $this->printType;
    }
    /**
     * Set printType value
     * @param string $printType
     * @return \Pggns\MidocoApi\Order\StructType\TravelPlanHistoryDTO
     */
    public function setPrintType(?string $printType = null): self
    {
        // validation for constraint: string
        if (!is_null($printType) && !is_string($printType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printType, true), gettype($printType)), __LINE__);
        }
        $this->printType = $printType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelPlanHistoryDTO
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
     * Get printingUser value
     * @return int|null
     */
    public function getPrintingUser(): ?int
    {
        return $this->printingUser;
    }
    /**
     * Set printingUser value
     * @param int $printingUser
     * @return \Pggns\MidocoApi\Order\StructType\TravelPlanHistoryDTO
     */
    public function setPrintingUser(?int $printingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($printingUser) && !(is_int($printingUser) || ctype_digit($printingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printingUser, true), gettype($printingUser)), __LINE__);
        }
        $this->printingUser = $printingUser;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelPlanHistoryDTO
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
