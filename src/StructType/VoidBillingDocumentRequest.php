<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoidBillingDocumentRequest StructType
 * @subpackage Structs
 */
class VoidBillingDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoBillingDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $MidocoBillingDocument = null;
    /**
     * The usedDocumentNo
     * @var int|null
     */
    protected ?int $usedDocumentNo = null;
    /**
     * The finishDocument
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $finishDocument = null;
    /**
     * The creditOnlinePayments
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $creditOnlinePayments = null;
    /**
     * The voidWithVoidPositions
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $voidWithVoidPositions = null;
    /**
     * Constructor method for VoidBillingDocumentRequest
     * @uses VoidBillingDocumentRequest::setMidocoBillingDocument()
     * @uses VoidBillingDocumentRequest::setUsedDocumentNo()
     * @uses VoidBillingDocumentRequest::setFinishDocument()
     * @uses VoidBillingDocumentRequest::setCreditOnlinePayments()
     * @uses VoidBillingDocumentRequest::setVoidWithVoidPositions()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @param int $usedDocumentNo
     * @param bool $finishDocument
     * @param bool $creditOnlinePayments
     * @param bool $voidWithVoidPositions
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null, ?int $usedDocumentNo = null, ?bool $finishDocument = true, ?bool $creditOnlinePayments = true, ?bool $voidWithVoidPositions = true)
    {
        $this
            ->setMidocoBillingDocument($midocoBillingDocument)
            ->setUsedDocumentNo($usedDocumentNo)
            ->setFinishDocument($finishDocument)
            ->setCreditOnlinePayments($creditOnlinePayments)
            ->setVoidWithVoidPositions($voidWithVoidPositions);
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
     * @return \Pggns\MidocoApi\Order\StructType\VoidBillingDocumentRequest
     */
    public function setMidocoBillingDocument(?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null): self
    {
        $this->MidocoBillingDocument = $midocoBillingDocument;
        
        return $this;
    }
    /**
     * Get usedDocumentNo value
     * @return int|null
     */
    public function getUsedDocumentNo(): ?int
    {
        return $this->usedDocumentNo;
    }
    /**
     * Set usedDocumentNo value
     * @param int $usedDocumentNo
     * @return \Pggns\MidocoApi\Order\StructType\VoidBillingDocumentRequest
     */
    public function setUsedDocumentNo(?int $usedDocumentNo = null): self
    {
        // validation for constraint: int
        if (!is_null($usedDocumentNo) && !(is_int($usedDocumentNo) || ctype_digit($usedDocumentNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($usedDocumentNo, true), gettype($usedDocumentNo)), __LINE__);
        }
        $this->usedDocumentNo = $usedDocumentNo;
        
        return $this;
    }
    /**
     * Get finishDocument value
     * @return bool|null
     */
    public function getFinishDocument(): ?bool
    {
        return $this->finishDocument;
    }
    /**
     * Set finishDocument value
     * @param bool $finishDocument
     * @return \Pggns\MidocoApi\Order\StructType\VoidBillingDocumentRequest
     */
    public function setFinishDocument(?bool $finishDocument = true): self
    {
        // validation for constraint: boolean
        if (!is_null($finishDocument) && !is_bool($finishDocument)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($finishDocument, true), gettype($finishDocument)), __LINE__);
        }
        $this->finishDocument = $finishDocument;
        
        return $this;
    }
    /**
     * Get creditOnlinePayments value
     * @return bool|null
     */
    public function getCreditOnlinePayments(): ?bool
    {
        return $this->creditOnlinePayments;
    }
    /**
     * Set creditOnlinePayments value
     * @param bool $creditOnlinePayments
     * @return \Pggns\MidocoApi\Order\StructType\VoidBillingDocumentRequest
     */
    public function setCreditOnlinePayments(?bool $creditOnlinePayments = true): self
    {
        // validation for constraint: boolean
        if (!is_null($creditOnlinePayments) && !is_bool($creditOnlinePayments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($creditOnlinePayments, true), gettype($creditOnlinePayments)), __LINE__);
        }
        $this->creditOnlinePayments = $creditOnlinePayments;
        
        return $this;
    }
    /**
     * Get voidWithVoidPositions value
     * @return bool|null
     */
    public function getVoidWithVoidPositions(): ?bool
    {
        return $this->voidWithVoidPositions;
    }
    /**
     * Set voidWithVoidPositions value
     * @param bool $voidWithVoidPositions
     * @return \Pggns\MidocoApi\Order\StructType\VoidBillingDocumentRequest
     */
    public function setVoidWithVoidPositions(?bool $voidWithVoidPositions = true): self
    {
        // validation for constraint: boolean
        if (!is_null($voidWithVoidPositions) && !is_bool($voidWithVoidPositions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($voidWithVoidPositions, true), gettype($voidWithVoidPositions)), __LINE__);
        }
        $this->voidWithVoidPositions = $voidWithVoidPositions;
        
        return $this;
    }
}
