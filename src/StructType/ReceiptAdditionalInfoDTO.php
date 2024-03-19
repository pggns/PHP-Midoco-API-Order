<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReceiptAdditionalInfoDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReceiptAdditionalInfoDTO extends AbstractStructBase
{
    /**
     * The infoLine
     * @var string|null
     */
    protected ?string $infoLine = null;
    /**
     * The linePosition
     * @var int|null
     */
    protected ?int $linePosition = null;
    /**
     * The receiptId
     * @var int|null
     */
    protected ?int $receiptId = null;
    /**
     * Constructor method for ReceiptAdditionalInfoDTO
     * @uses ReceiptAdditionalInfoDTO::setInfoLine()
     * @uses ReceiptAdditionalInfoDTO::setLinePosition()
     * @uses ReceiptAdditionalInfoDTO::setReceiptId()
     * @param string $infoLine
     * @param int $linePosition
     * @param int $receiptId
     */
    public function __construct(?string $infoLine = null, ?int $linePosition = null, ?int $receiptId = null)
    {
        $this
            ->setInfoLine($infoLine)
            ->setLinePosition($linePosition)
            ->setReceiptId($receiptId);
    }
    /**
     * Get infoLine value
     * @return string|null
     */
    public function getInfoLine(): ?string
    {
        return $this->infoLine;
    }
    /**
     * Set infoLine value
     * @param string $infoLine
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptAdditionalInfoDTO
     */
    public function setInfoLine(?string $infoLine = null): self
    {
        // validation for constraint: string
        if (!is_null($infoLine) && !is_string($infoLine)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoLine, true), gettype($infoLine)), __LINE__);
        }
        $this->infoLine = $infoLine;
        
        return $this;
    }
    /**
     * Get linePosition value
     * @return int|null
     */
    public function getLinePosition(): ?int
    {
        return $this->linePosition;
    }
    /**
     * Set linePosition value
     * @param int $linePosition
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptAdditionalInfoDTO
     */
    public function setLinePosition(?int $linePosition = null): self
    {
        // validation for constraint: int
        if (!is_null($linePosition) && !(is_int($linePosition) || ctype_digit($linePosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($linePosition, true), gettype($linePosition)), __LINE__);
        }
        $this->linePosition = $linePosition;
        
        return $this;
    }
    /**
     * Get receiptId value
     * @return int|null
     */
    public function getReceiptId(): ?int
    {
        return $this->receiptId;
    }
    /**
     * Set receiptId value
     * @param int $receiptId
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptAdditionalInfoDTO
     */
    public function setReceiptId(?int $receiptId = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptId) && !(is_int($receiptId) || ctype_digit($receiptId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptId, true), gettype($receiptId)), __LINE__);
        }
        $this->receiptId = $receiptId;
        
        return $this;
    }
}
