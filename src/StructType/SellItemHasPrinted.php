<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellItemHasPrinted StructType
 * @subpackage Structs
 */
class SellItemHasPrinted extends AbstractStructBase
{
    /**
     * The sellItemId
     * @var int|null
     */
    protected ?int $sellItemId = null;
    /**
     * The hasPrintedDocument
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $hasPrintedDocument = null;
    /**
     * Constructor method for SellItemHasPrinted
     * @uses SellItemHasPrinted::setSellItemId()
     * @uses SellItemHasPrinted::setHasPrintedDocument()
     * @param int $sellItemId
     * @param bool $hasPrintedDocument
     */
    public function __construct(?int $sellItemId = null, ?bool $hasPrintedDocument = false)
    {
        $this
            ->setSellItemId($sellItemId)
            ->setHasPrintedDocument($hasPrintedDocument);
    }
    /**
     * Get sellItemId value
     * @return int|null
     */
    public function getSellItemId(): ?int
    {
        return $this->sellItemId;
    }
    /**
     * Set sellItemId value
     * @param int $sellItemId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemHasPrinted
     */
    public function setSellItemId(?int $sellItemId = null): self
    {
        // validation for constraint: int
        if (!is_null($sellItemId) && !(is_int($sellItemId) || ctype_digit($sellItemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellItemId, true), gettype($sellItemId)), __LINE__);
        }
        $this->sellItemId = $sellItemId;
        
        return $this;
    }
    /**
     * Get hasPrintedDocument value
     * @return bool|null
     */
    public function getHasPrintedDocument(): ?bool
    {
        return $this->hasPrintedDocument;
    }
    /**
     * Set hasPrintedDocument value
     * @param bool $hasPrintedDocument
     * @return \Pggns\MidocoApi\Order\StructType\SellItemHasPrinted
     */
    public function setHasPrintedDocument(?bool $hasPrintedDocument = false): self
    {
        // validation for constraint: boolean
        if (!is_null($hasPrintedDocument) && !is_bool($hasPrintedDocument)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasPrintedDocument, true), gettype($hasPrintedDocument)), __LINE__);
        }
        $this->hasPrintedDocument = $hasPrintedDocument;
        
        return $this;
    }
}
