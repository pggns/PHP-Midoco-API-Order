<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAdviceSettlementRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveAdviceSettlementRequest extends AbstractStructBase
{
    /**
     * The MidocoAdviceSettlement
     * Meta information extracted from the WSDL
     * - ref: MidocoAdviceSettlement
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement $MidocoAdviceSettlement = null;
    /**
     * The assignReceiptNo
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $assignReceiptNo = null;
    /**
     * Constructor method for SaveAdviceSettlementRequest
     * @uses SaveAdviceSettlementRequest::setMidocoAdviceSettlement()
     * @uses SaveAdviceSettlementRequest::setAssignReceiptNo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement $midocoAdviceSettlement
     * @param bool $assignReceiptNo
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement $midocoAdviceSettlement = null, ?bool $assignReceiptNo = false)
    {
        $this
            ->setMidocoAdviceSettlement($midocoAdviceSettlement)
            ->setAssignReceiptNo($assignReceiptNo);
    }
    /**
     * Get MidocoAdviceSettlement value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement|null
     */
    public function getMidocoAdviceSettlement(): ?\Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement
    {
        return $this->MidocoAdviceSettlement;
    }
    /**
     * Set MidocoAdviceSettlement value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement $midocoAdviceSettlement
     * @return \Pggns\MidocoApi\Order\StructType\SaveAdviceSettlementRequest
     */
    public function setMidocoAdviceSettlement(?\Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement $midocoAdviceSettlement = null): self
    {
        $this->MidocoAdviceSettlement = $midocoAdviceSettlement;
        
        return $this;
    }
    /**
     * Get assignReceiptNo value
     * @return bool|null
     */
    public function getAssignReceiptNo(): ?bool
    {
        return $this->assignReceiptNo;
    }
    /**
     * Set assignReceiptNo value
     * @param bool $assignReceiptNo
     * @return \Pggns\MidocoApi\Order\StructType\SaveAdviceSettlementRequest
     */
    public function setAssignReceiptNo(?bool $assignReceiptNo = false): self
    {
        // validation for constraint: boolean
        if (!is_null($assignReceiptNo) && !is_bool($assignReceiptNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($assignReceiptNo, true), gettype($assignReceiptNo)), __LINE__);
        }
        $this->assignReceiptNo = $assignReceiptNo;
        
        return $this;
    }
}
