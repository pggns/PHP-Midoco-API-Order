<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateChangeableReceiptPositionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateChangeableReceiptPositionRequest extends AbstractStructBase
{
    /**
     * The MidocoReceiptPosition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoReceiptPosition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoReceiptPosition|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoReceiptPosition $MidocoReceiptPosition = null;
    /**
     * The vatCode
     * @var string|null
     */
    protected ?string $vatCode = null;
    /**
     * Constructor method for UpdateChangeableReceiptPositionRequest
     * @uses UpdateChangeableReceiptPositionRequest::setMidocoReceiptPosition()
     * @uses UpdateChangeableReceiptPositionRequest::setVatCode()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoReceiptPosition $midocoReceiptPosition
     * @param string $vatCode
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoReceiptPosition $midocoReceiptPosition = null, ?string $vatCode = null)
    {
        $this
            ->setMidocoReceiptPosition($midocoReceiptPosition)
            ->setVatCode($vatCode);
    }
    /**
     * Get MidocoReceiptPosition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptPosition|null
     */
    public function getMidocoReceiptPosition(): ?\Pggns\MidocoApi\Order\StructType\MidocoReceiptPosition
    {
        return $this->MidocoReceiptPosition;
    }
    /**
     * Set MidocoReceiptPosition value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoReceiptPosition $midocoReceiptPosition
     * @return \Pggns\MidocoApi\Order\StructType\UpdateChangeableReceiptPositionRequest
     */
    public function setMidocoReceiptPosition(?\Pggns\MidocoApi\Order\StructType\MidocoReceiptPosition $midocoReceiptPosition = null): self
    {
        $this->MidocoReceiptPosition = $midocoReceiptPosition;
        
        return $this;
    }
    /**
     * Get vatCode value
     * @return string|null
     */
    public function getVatCode(): ?string
    {
        return $this->vatCode;
    }
    /**
     * Set vatCode value
     * @param string $vatCode
     * @return \Pggns\MidocoApi\Order\StructType\UpdateChangeableReceiptPositionRequest
     */
    public function setVatCode(?string $vatCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vatCode) && !is_string($vatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCode, true), gettype($vatCode)), __LINE__);
        }
        $this->vatCode = $vatCode;
        
        return $this;
    }
}
