<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DtausTransactionPurposeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DtausTransactionPurposeDTO extends AbstractStructBase
{
    /**
     * The fileid
     * @var int|null
     */
    protected ?int $fileid = null;
    /**
     * The purposePosition
     * @var int|null
     */
    protected ?int $purposePosition = null;
    /**
     * The text
     * @var string|null
     */
    protected ?string $text = null;
    /**
     * The transactionPosition
     * @var int|null
     */
    protected ?int $transactionPosition = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for DtausTransactionPurposeDTO
     * @uses DtausTransactionPurposeDTO::setFileid()
     * @uses DtausTransactionPurposeDTO::setPurposePosition()
     * @uses DtausTransactionPurposeDTO::setText()
     * @uses DtausTransactionPurposeDTO::setTransactionPosition()
     * @uses DtausTransactionPurposeDTO::setType()
     * @param int $fileid
     * @param int $purposePosition
     * @param string $text
     * @param int $transactionPosition
     * @param string $type
     */
    public function __construct(?int $fileid = null, ?int $purposePosition = null, ?string $text = null, ?int $transactionPosition = null, ?string $type = null)
    {
        $this
            ->setFileid($fileid)
            ->setPurposePosition($purposePosition)
            ->setText($text)
            ->setTransactionPosition($transactionPosition)
            ->setType($type);
    }
    /**
     * Get fileid value
     * @return int|null
     */
    public function getFileid(): ?int
    {
        return $this->fileid;
    }
    /**
     * Set fileid value
     * @param int $fileid
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionPurposeDTO
     */
    public function setFileid(?int $fileid = null): self
    {
        // validation for constraint: int
        if (!is_null($fileid) && !(is_int($fileid) || ctype_digit($fileid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fileid, true), gettype($fileid)), __LINE__);
        }
        $this->fileid = $fileid;
        
        return $this;
    }
    /**
     * Get purposePosition value
     * @return int|null
     */
    public function getPurposePosition(): ?int
    {
        return $this->purposePosition;
    }
    /**
     * Set purposePosition value
     * @param int $purposePosition
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionPurposeDTO
     */
    public function setPurposePosition(?int $purposePosition = null): self
    {
        // validation for constraint: int
        if (!is_null($purposePosition) && !(is_int($purposePosition) || ctype_digit($purposePosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($purposePosition, true), gettype($purposePosition)), __LINE__);
        }
        $this->purposePosition = $purposePosition;
        
        return $this;
    }
    /**
     * Get text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionPurposeDTO
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->text = $text;
        
        return $this;
    }
    /**
     * Get transactionPosition value
     * @return int|null
     */
    public function getTransactionPosition(): ?int
    {
        return $this->transactionPosition;
    }
    /**
     * Set transactionPosition value
     * @param int $transactionPosition
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionPurposeDTO
     */
    public function setTransactionPosition(?int $transactionPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionPosition) && !(is_int($transactionPosition) || ctype_digit($transactionPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionPosition, true), gettype($transactionPosition)), __LINE__);
        }
        $this->transactionPosition = $transactionPosition;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\DtausTransactionPurposeDTO
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
