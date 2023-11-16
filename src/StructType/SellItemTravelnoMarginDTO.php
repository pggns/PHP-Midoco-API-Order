<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellItemTravelnoMarginDTO StructType
 * @subpackage Structs
 */
class SellItemTravelnoMarginDTO extends AbstractStructBase
{
    /**
     * The isNegativeMargin
     * @var bool|null
     */
    protected ?bool $isNegativeMargin = null;
    /**
     * The isStorno
     * @var bool|null
     */
    protected ?bool $isStorno = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The settlementDate
     * @var string|null
     */
    protected ?string $settlementDate = null;
    /**
     * The travelNo
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * Constructor method for SellItemTravelnoMarginDTO
     * @uses SellItemTravelnoMarginDTO::setIsNegativeMargin()
     * @uses SellItemTravelnoMarginDTO::setIsStorno()
     * @uses SellItemTravelnoMarginDTO::setItemId()
     * @uses SellItemTravelnoMarginDTO::setSettlementDate()
     * @uses SellItemTravelnoMarginDTO::setTravelNo()
     * @param bool $isNegativeMargin
     * @param bool $isStorno
     * @param int $itemId
     * @param string $settlementDate
     * @param string $travelNo
     */
    public function __construct(?bool $isNegativeMargin = null, ?bool $isStorno = null, ?int $itemId = null, ?string $settlementDate = null, ?string $travelNo = null)
    {
        $this
            ->setIsNegativeMargin($isNegativeMargin)
            ->setIsStorno($isStorno)
            ->setItemId($itemId)
            ->setSettlementDate($settlementDate)
            ->setTravelNo($travelNo);
    }
    /**
     * Get isNegativeMargin value
     * @return bool|null
     */
    public function getIsNegativeMargin(): ?bool
    {
        return $this->isNegativeMargin;
    }
    /**
     * Set isNegativeMargin value
     * @param bool $isNegativeMargin
     * @return \Pggns\MidocoApi\Order\StructType\SellItemTravelnoMarginDTO
     */
    public function setIsNegativeMargin(?bool $isNegativeMargin = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isNegativeMargin) && !is_bool($isNegativeMargin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNegativeMargin, true), gettype($isNegativeMargin)), __LINE__);
        }
        $this->isNegativeMargin = $isNegativeMargin;
        
        return $this;
    }
    /**
     * Get isStorno value
     * @return bool|null
     */
    public function getIsStorno(): ?bool
    {
        return $this->isStorno;
    }
    /**
     * Set isStorno value
     * @param bool $isStorno
     * @return \Pggns\MidocoApi\Order\StructType\SellItemTravelnoMarginDTO
     */
    public function setIsStorno(?bool $isStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isStorno) && !is_bool($isStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isStorno, true), gettype($isStorno)), __LINE__);
        }
        $this->isStorno = $isStorno;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemTravelnoMarginDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get settlementDate value
     * @return string|null
     */
    public function getSettlementDate(): ?string
    {
        return $this->settlementDate;
    }
    /**
     * Set settlementDate value
     * @param string $settlementDate
     * @return \Pggns\MidocoApi\Order\StructType\SellItemTravelnoMarginDTO
     */
    public function setSettlementDate(?string $settlementDate = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementDate) && !is_string($settlementDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementDate, true), gettype($settlementDate)), __LINE__);
        }
        $this->settlementDate = $settlementDate;
        
        return $this;
    }
    /**
     * Get travelNo value
     * @return string|null
     */
    public function getTravelNo(): ?string
    {
        return $this->travelNo;
    }
    /**
     * Set travelNo value
     * @param string $travelNo
     * @return \Pggns\MidocoApi\Order\StructType\SellItemTravelnoMarginDTO
     */
    public function setTravelNo(?string $travelNo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelNo) && !is_string($travelNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelNo, true), gettype($travelNo)), __LINE__);
        }
        $this->travelNo = $travelNo;
        
        return $this;
    }
}
