<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportOrderInvoiceResponse StructType
 * @subpackage Structs
 */
class ExportOrderInvoiceResponse extends AbstractStructBase
{
    /**
     * The InvoiceData
     * @var string|null
     */
    protected ?string $InvoiceData = null;
    /**
     * The externDocumentId
     * @var int|null
     */
    protected ?int $externDocumentId = null;
    /**
     * The dontMail
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $dontMail = null;
    /**
     * Constructor method for ExportOrderInvoiceResponse
     * @uses ExportOrderInvoiceResponse::setInvoiceData()
     * @uses ExportOrderInvoiceResponse::setExternDocumentId()
     * @uses ExportOrderInvoiceResponse::setDontMail()
     * @param string $invoiceData
     * @param int $externDocumentId
     * @param bool $dontMail
     */
    public function __construct(?string $invoiceData = null, ?int $externDocumentId = null, ?bool $dontMail = false)
    {
        $this
            ->setInvoiceData($invoiceData)
            ->setExternDocumentId($externDocumentId)
            ->setDontMail($dontMail);
    }
    /**
     * Get InvoiceData value
     * @return string|null
     */
    public function getInvoiceData(): ?string
    {
        return $this->InvoiceData;
    }
    /**
     * Set InvoiceData value
     * @param string $invoiceData
     * @return \Pggns\MidocoApi\Order\StructType\ExportOrderInvoiceResponse
     */
    public function setInvoiceData(?string $invoiceData = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceData) && !is_string($invoiceData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceData, true), gettype($invoiceData)), __LINE__);
        }
        $this->InvoiceData = $invoiceData;
        
        return $this;
    }
    /**
     * Get externDocumentId value
     * @return int|null
     */
    public function getExternDocumentId(): ?int
    {
        return $this->externDocumentId;
    }
    /**
     * Set externDocumentId value
     * @param int $externDocumentId
     * @return \Pggns\MidocoApi\Order\StructType\ExportOrderInvoiceResponse
     */
    public function setExternDocumentId(?int $externDocumentId = null): self
    {
        // validation for constraint: int
        if (!is_null($externDocumentId) && !(is_int($externDocumentId) || ctype_digit($externDocumentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($externDocumentId, true), gettype($externDocumentId)), __LINE__);
        }
        $this->externDocumentId = $externDocumentId;
        
        return $this;
    }
    /**
     * Get dontMail value
     * @return bool|null
     */
    public function getDontMail(): ?bool
    {
        return $this->dontMail;
    }
    /**
     * Set dontMail value
     * @param bool $dontMail
     * @return \Pggns\MidocoApi\Order\StructType\ExportOrderInvoiceResponse
     */
    public function setDontMail(?bool $dontMail = false): self
    {
        // validation for constraint: boolean
        if (!is_null($dontMail) && !is_bool($dontMail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dontMail, true), gettype($dontMail)), __LINE__);
        }
        $this->dontMail = $dontMail;
        
        return $this;
    }
}
