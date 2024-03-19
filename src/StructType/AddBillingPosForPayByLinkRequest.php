<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddBillingPosForPayByLinkRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddBillingPosForPayByLinkRequest extends AbstractStructBase
{
    /**
     * The MidocoBillingDocument
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBillingDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $MidocoBillingDocument = null;
    /**
     * The ccReceiptNo
     * @var int|null
     */
    protected ?int $ccReceiptNo = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * Constructor method for AddBillingPosForPayByLinkRequest
     * @uses AddBillingPosForPayByLinkRequest::setMidocoBillingDocument()
     * @uses AddBillingPosForPayByLinkRequest::setCcReceiptNo()
     * @uses AddBillingPosForPayByLinkRequest::setAmount()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @param int $ccReceiptNo
     * @param float $amount
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null, ?int $ccReceiptNo = null, ?float $amount = null)
    {
        $this
            ->setMidocoBillingDocument($midocoBillingDocument)
            ->setCcReceiptNo($ccReceiptNo)
            ->setAmount($amount);
    }
    /**
     * Get MidocoBillingDocument value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument|null
     */
    public function getMidocoBillingDocument(): ?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument
    {
        return $this->MidocoBillingDocument;
    }
    /**
     * Set MidocoBillingDocument value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @return \Pggns\MidocoApi\Order\StructType\AddBillingPosForPayByLinkRequest
     */
    public function setMidocoBillingDocument(?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null): self
    {
        $this->MidocoBillingDocument = $midocoBillingDocument;
        
        return $this;
    }
    /**
     * Get ccReceiptNo value
     * @return int|null
     */
    public function getCcReceiptNo(): ?int
    {
        return $this->ccReceiptNo;
    }
    /**
     * Set ccReceiptNo value
     * @param int $ccReceiptNo
     * @return \Pggns\MidocoApi\Order\StructType\AddBillingPosForPayByLinkRequest
     */
    public function setCcReceiptNo(?int $ccReceiptNo = null): self
    {
        // validation for constraint: int
        if (!is_null($ccReceiptNo) && !(is_int($ccReceiptNo) || ctype_digit($ccReceiptNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccReceiptNo, true), gettype($ccReceiptNo)), __LINE__);
        }
        $this->ccReceiptNo = $ccReceiptNo;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\AddBillingPosForPayByLinkRequest
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
}
