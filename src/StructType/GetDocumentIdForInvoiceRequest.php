<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDocumentIdForInvoiceRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDocumentIdForInvoiceRequest extends AbstractStructBase
{
    /**
     * The invoiceId
     * @var int|null
     */
    protected ?int $invoiceId = null;
    /**
     * Constructor method for GetDocumentIdForInvoiceRequest
     * @uses GetDocumentIdForInvoiceRequest::setInvoiceId()
     * @param int $invoiceId
     */
    public function __construct(?int $invoiceId = null)
    {
        $this
            ->setInvoiceId($invoiceId);
    }
    /**
     * Get invoiceId value
     * @return int|null
     */
    public function getInvoiceId(): ?int
    {
        return $this->invoiceId;
    }
    /**
     * Set invoiceId value
     * @param int $invoiceId
     * @return \Pggns\MidocoApi\Order\StructType\GetDocumentIdForInvoiceRequest
     */
    public function setInvoiceId(?int $invoiceId = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceId) && !(is_int($invoiceId) || ctype_digit($invoiceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceId, true), gettype($invoiceId)), __LINE__);
        }
        $this->invoiceId = $invoiceId;
        
        return $this;
    }
}
