<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCashTurnoverJournal StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCashTurnoverJournal extends CashTurnoverJournalDTO
{
    /**
     * The MidocoCashbookQrCodeData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoCashbookQrCodeData
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCashbookQrCodeData|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoCashbookQrCodeData $MidocoCashbookQrCodeData = null;
    /**
     * The printVatHint
     * @var bool|null
     */
    protected ?bool $printVatHint = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The receiptNo
     * @var int|null
     */
    protected ?int $receiptNo = null;
    /**
     * Constructor method for MidocoCashTurnoverJournal
     * @uses MidocoCashTurnoverJournal::setMidocoCashbookQrCodeData()
     * @uses MidocoCashTurnoverJournal::setPrintVatHint()
     * @uses MidocoCashTurnoverJournal::setUnitName()
     * @uses MidocoCashTurnoverJournal::setReceiptNo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCashbookQrCodeData $midocoCashbookQrCodeData
     * @param bool $printVatHint
     * @param string $unitName
     * @param int $receiptNo
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoCashbookQrCodeData $midocoCashbookQrCodeData = null, ?bool $printVatHint = null, ?string $unitName = null, ?int $receiptNo = null)
    {
        $this
            ->setMidocoCashbookQrCodeData($midocoCashbookQrCodeData)
            ->setPrintVatHint($printVatHint)
            ->setUnitName($unitName)
            ->setReceiptNo($receiptNo);
    }
    /**
     * Get MidocoCashbookQrCodeData value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCashbookQrCodeData|null
     */
    public function getMidocoCashbookQrCodeData(): ?\Pggns\MidocoApi\Order\StructType\MidocoCashbookQrCodeData
    {
        return $this->MidocoCashbookQrCodeData;
    }
    /**
     * Set MidocoCashbookQrCodeData value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCashbookQrCodeData $midocoCashbookQrCodeData
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCashTurnoverJournal
     */
    public function setMidocoCashbookQrCodeData(?\Pggns\MidocoApi\Order\StructType\MidocoCashbookQrCodeData $midocoCashbookQrCodeData = null): self
    {
        $this->MidocoCashbookQrCodeData = $midocoCashbookQrCodeData;
        
        return $this;
    }
    /**
     * Get printVatHint value
     * @return bool|null
     */
    public function getPrintVatHint(): ?bool
    {
        return $this->printVatHint;
    }
    /**
     * Set printVatHint value
     * @param bool $printVatHint
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCashTurnoverJournal
     */
    public function setPrintVatHint(?bool $printVatHint = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printVatHint) && !is_bool($printVatHint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printVatHint, true), gettype($printVatHint)), __LINE__);
        }
        $this->printVatHint = $printVatHint;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCashTurnoverJournal
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get receiptNo value
     * @return int|null
     */
    public function getReceiptNo(): ?int
    {
        return $this->receiptNo;
    }
    /**
     * Set receiptNo value
     * @param int $receiptNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCashTurnoverJournal
     */
    public function setReceiptNo(?int $receiptNo = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptNo) && !(is_int($receiptNo) || ctype_digit($receiptNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptNo, true), gettype($receiptNo)), __LINE__);
        }
        $this->receiptNo = $receiptNo;
        
        return $this;
    }
}
