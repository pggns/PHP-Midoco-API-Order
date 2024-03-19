<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMilesAndMoreRefundPositionResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This re-calculated billing position including the miles and more transaction data.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMilesAndMoreRefundPositionResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingPosition
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingPosition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $MidocoBillingPosition = null;
    /**
     * The documentChanged
     * Meta information extracted from the WSDL
     * - documentation: true, if the billing position was saved. For the GUI that means that the billing document should be reloaded.
     * - default: false
     * @var bool|null
     */
    protected ?bool $documentChanged = null;
    /**
     * Constructor method for SaveMilesAndMoreRefundPositionResponse
     * @uses SaveMilesAndMoreRefundPositionResponse::setMidocoBillingPosition()
     * @uses SaveMilesAndMoreRefundPositionResponse::setDocumentChanged()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $midocoBillingPosition
     * @param bool $documentChanged
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $midocoBillingPosition = null, ?bool $documentChanged = false)
    {
        $this
            ->setMidocoBillingPosition($midocoBillingPosition)
            ->setDocumentChanged($documentChanged);
    }
    /**
     * Get MidocoBillingPosition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType|null
     */
    public function getMidocoBillingPosition(): ?\Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType
    {
        return $this->MidocoBillingPosition;
    }
    /**
     * Set MidocoBillingPosition value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $midocoBillingPosition
     * @return \Pggns\MidocoApi\Order\StructType\SaveMilesAndMoreRefundPositionResponse
     */
    public function setMidocoBillingPosition(?\Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $midocoBillingPosition = null): self
    {
        $this->MidocoBillingPosition = $midocoBillingPosition;
        
        return $this;
    }
    /**
     * Get documentChanged value
     * @return bool|null
     */
    public function getDocumentChanged(): ?bool
    {
        return $this->documentChanged;
    }
    /**
     * Set documentChanged value
     * @param bool $documentChanged
     * @return \Pggns\MidocoApi\Order\StructType\SaveMilesAndMoreRefundPositionResponse
     */
    public function setDocumentChanged(?bool $documentChanged = false): self
    {
        // validation for constraint: boolean
        if (!is_null($documentChanged) && !is_bool($documentChanged)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($documentChanged, true), gettype($documentChanged)), __LINE__);
        }
        $this->documentChanged = $documentChanged;
        
        return $this;
    }
}
