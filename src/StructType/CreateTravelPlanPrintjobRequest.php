<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateTravelPlanPrintjobRequest StructType
 * @subpackage Structs
 */
class CreateTravelPlanPrintjobRequest extends AbstractStructBase
{
    /**
     * The OrderId
     * @var int|null
     */
    protected ?int $OrderId = null;
    /**
     * The TemplateType
     * @var string|null
     */
    protected ?string $TemplateType = null;
    /**
     * The media
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $media = null;
    /**
     * Constructor method for CreateTravelPlanPrintjobRequest
     * @uses CreateTravelPlanPrintjobRequest::setOrderId()
     * @uses CreateTravelPlanPrintjobRequest::setTemplateType()
     * @uses CreateTravelPlanPrintjobRequest::setMedia()
     * @param int $orderId
     * @param string $templateType
     * @param string $media
     */
    public function __construct(?int $orderId = null, ?string $templateType = null, ?string $media = null)
    {
        $this
            ->setOrderId($orderId)
            ->setTemplateType($templateType)
            ->setMedia($media);
    }
    /**
     * Get OrderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->OrderId;
    }
    /**
     * Set OrderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\CreateTravelPlanPrintjobRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->OrderId = $orderId;
        
        return $this;
    }
    /**
     * Get TemplateType value
     * @return string|null
     */
    public function getTemplateType(): ?string
    {
        return $this->TemplateType;
    }
    /**
     * Set TemplateType value
     * @param string $templateType
     * @return \Pggns\MidocoApi\Order\StructType\CreateTravelPlanPrintjobRequest
     */
    public function setTemplateType(?string $templateType = null): self
    {
        // validation for constraint: string
        if (!is_null($templateType) && !is_string($templateType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateType, true), gettype($templateType)), __LINE__);
        }
        $this->TemplateType = $templateType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CreateTravelPlanPrintjobRequest
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
}
