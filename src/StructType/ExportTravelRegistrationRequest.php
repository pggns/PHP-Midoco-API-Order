<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportTravelRegistrationRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: exportTravelRegistration --- exports a travel registration document as PDF. If isPreview is false the travel registration document will be saved in the repository.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExportTravelRegistrationRequest extends AbstractStructBase
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
     * Constructor method for ExportTravelRegistrationRequest
     * @uses ExportTravelRegistrationRequest::setOrderId()
     * @uses ExportTravelRegistrationRequest::setOrderNo()
     * @uses ExportTravelRegistrationRequest::setIsPreview()
     * @uses ExportTravelRegistrationRequest::setPrintMedia()
     * @param int $orderId
     * @param int $orderNo
     * @param bool $isPreview
     * @param string $printMedia
     */
    public function __construct(?int $orderId = null, ?int $orderNo = null, ?bool $isPreview = false, ?string $printMedia = 'P')
    {
        $this
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setIsPreview($isPreview)
            ->setPrintMedia($printMedia);
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportTravelRegistrationRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportTravelRegistrationRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportTravelRegistrationRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportTravelRegistrationRequest
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
}
