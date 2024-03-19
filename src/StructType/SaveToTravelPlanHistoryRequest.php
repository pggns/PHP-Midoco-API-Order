<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveToTravelPlanHistoryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveToTravelPlanHistoryRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The printingUser
     * @var int|null
     */
    protected ?int $printingUser = null;
    /**
     * The printingDate
     * @var string|null
     */
    protected ?string $printingDate = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * The media
     * @var string|null
     */
    protected ?string $media = null;
    /**
     * The printType
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * The callDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $callDate = null;
    /**
     * Constructor method for SaveToTravelPlanHistoryRequest
     * @uses SaveToTravelPlanHistoryRequest::setOrderId()
     * @uses SaveToTravelPlanHistoryRequest::setPrintingUser()
     * @uses SaveToTravelPlanHistoryRequest::setPrintingDate()
     * @uses SaveToTravelPlanHistoryRequest::setRepositoryId()
     * @uses SaveToTravelPlanHistoryRequest::setMedia()
     * @uses SaveToTravelPlanHistoryRequest::setPrintType()
     * @uses SaveToTravelPlanHistoryRequest::setCallDate()
     * @param int $orderId
     * @param int $printingUser
     * @param string $printingDate
     * @param int $repositoryId
     * @param string $media
     * @param string $printType
     * @param string $callDate
     */
    public function __construct(?int $orderId = null, ?int $printingUser = null, ?string $printingDate = null, ?int $repositoryId = null, ?string $media = null, ?string $printType = null, ?string $callDate = null)
    {
        $this
            ->setOrderId($orderId)
            ->setPrintingUser($printingUser)
            ->setPrintingDate($printingDate)
            ->setRepositoryId($repositoryId)
            ->setMedia($media)
            ->setPrintType($printType)
            ->setCallDate($callDate);
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveToTravelPlanHistoryRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveToTravelPlanHistoryRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveToTravelPlanHistoryRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveToTravelPlanHistoryRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveToTravelPlanHistoryRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveToTravelPlanHistoryRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveToTravelPlanHistoryRequest
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
}
