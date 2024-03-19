<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReceiptExportVatDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReceiptExportVatDTO extends AbstractStructBase
{
    /**
     * The printId
     * @var int|null
     */
    protected ?int $printId = null;
    /**
     * The vatCode
     * @var string|null
     */
    protected ?string $vatCode = null;
    /**
     * The vatDescr
     * @var string|null
     */
    protected ?string $vatDescr = null;
    /**
     * The vatId
     * @var int|null
     */
    protected ?int $vatId = null;
    /**
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * Constructor method for ReceiptExportVatDTO
     * @uses ReceiptExportVatDTO::setPrintId()
     * @uses ReceiptExportVatDTO::setVatCode()
     * @uses ReceiptExportVatDTO::setVatDescr()
     * @uses ReceiptExportVatDTO::setVatId()
     * @uses ReceiptExportVatDTO::setVatPercent()
     * @param int $printId
     * @param string $vatCode
     * @param string $vatDescr
     * @param int $vatId
     * @param float $vatPercent
     */
    public function __construct(?int $printId = null, ?string $vatCode = null, ?string $vatDescr = null, ?int $vatId = null, ?float $vatPercent = null)
    {
        $this
            ->setPrintId($printId)
            ->setVatCode($vatCode)
            ->setVatDescr($vatDescr)
            ->setVatId($vatId)
            ->setVatPercent($vatPercent);
    }
    /**
     * Get printId value
     * @return int|null
     */
    public function getPrintId(): ?int
    {
        return $this->printId;
    }
    /**
     * Set printId value
     * @param int $printId
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportVatDTO
     */
    public function setPrintId(?int $printId = null): self
    {
        // validation for constraint: int
        if (!is_null($printId) && !(is_int($printId) || ctype_digit($printId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printId, true), gettype($printId)), __LINE__);
        }
        $this->printId = $printId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportVatDTO
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
    /**
     * Get vatDescr value
     * @return string|null
     */
    public function getVatDescr(): ?string
    {
        return $this->vatDescr;
    }
    /**
     * Set vatDescr value
     * @param string $vatDescr
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportVatDTO
     */
    public function setVatDescr(?string $vatDescr = null): self
    {
        // validation for constraint: string
        if (!is_null($vatDescr) && !is_string($vatDescr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatDescr, true), gettype($vatDescr)), __LINE__);
        }
        $this->vatDescr = $vatDescr;
        
        return $this;
    }
    /**
     * Get vatId value
     * @return int|null
     */
    public function getVatId(): ?int
    {
        return $this->vatId;
    }
    /**
     * Set vatId value
     * @param int $vatId
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportVatDTO
     */
    public function setVatId(?int $vatId = null): self
    {
        // validation for constraint: int
        if (!is_null($vatId) && !(is_int($vatId) || ctype_digit($vatId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($vatId, true), gettype($vatId)), __LINE__);
        }
        $this->vatId = $vatId;
        
        return $this;
    }
    /**
     * Get vatPercent value
     * @return float|null
     */
    public function getVatPercent(): ?float
    {
        return $this->vatPercent;
    }
    /**
     * Set vatPercent value
     * @param float $vatPercent
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptExportVatDTO
     */
    public function setVatPercent(?float $vatPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($vatPercent) && !(is_float($vatPercent) || is_numeric($vatPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatPercent, true), gettype($vatPercent)), __LINE__);
        }
        $this->vatPercent = $vatPercent;
        
        return $this;
    }
}
