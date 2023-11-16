<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportTravelPlanRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: exportTravelPlan --- exports a travel plan document as PDF. If isPreview is false the travel plan document will be saved in the repository.
 * @subpackage Structs
 */
class ExportTravelPlanRequest extends AbstractStructBase
{
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
     * The isPreview
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isPreview = null;
    /**
     * The printMedia
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - default: P
     * @var string|null
     */
    protected ?string $printMedia = null;
    /**
     * The printType
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * Constructor method for ExportTravelPlanRequest
     * @uses ExportTravelPlanRequest::setOrderId()
     * @uses ExportTravelPlanRequest::setOrderNo()
     * @uses ExportTravelPlanRequest::setIsPreview()
     * @uses ExportTravelPlanRequest::setPrintMedia()
     * @uses ExportTravelPlanRequest::setPrintType()
     * @param int $orderId
     * @param int $orderNo
     * @param bool $isPreview
     * @param string $printMedia
     * @param string $printType
     */
    public function __construct(?int $orderId = null, ?int $orderNo = null, ?bool $isPreview = false, ?string $printMedia = 'P', ?string $printType = null)
    {
        $this
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setIsPreview($isPreview)
            ->setPrintMedia($printMedia)
            ->setPrintType($printType);
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportTravelPlanRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportTravelPlanRequest
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
     * Get isPreview value
     * @return bool|null
     */
    public function getIsPreview(): ?bool
    {
        return $this->isPreview;
    }
    /**
     * Set isPreview value
     * @param bool $isPreview
     * @return \Pggns\MidocoApi\Order\StructType\ExportTravelPlanRequest
     */
    public function setIsPreview(?bool $isPreview = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isPreview) && !is_bool($isPreview)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPreview, true), gettype($isPreview)), __LINE__);
        }
        $this->isPreview = $isPreview;
        
        return $this;
    }
    /**
     * Get printMedia value
     * @return string|null
     */
    public function getPrintMedia(): ?string
    {
        return $this->printMedia;
    }
    /**
     * Set printMedia value
     * @param string $printMedia
     * @return \Pggns\MidocoApi\Order\StructType\ExportTravelPlanRequest
     */
    public function setPrintMedia(?string $printMedia = 'P'): self
    {
        // validation for constraint: string
        if (!is_null($printMedia) && !is_string($printMedia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printMedia, true), gettype($printMedia)), __LINE__);
        }
        $this->printMedia = $printMedia;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportTravelPlanRequest
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
}
