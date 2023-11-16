<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelerTotalPrice StructType
 * @subpackage Structs
 */
class TravelerTotalPrice extends AbstractStructBase
{
    /**
     * The TravelerRefId
     * Meta information extracted from the WSDL
     * - ref: TravelerRefId
     * @var int|null
     */
    protected ?int $TravelerRefId = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * Constructor method for TravelerTotalPrice
     * @uses TravelerTotalPrice::setTravelerRefId()
     * @uses TravelerTotalPrice::setTotalPrice()
     * @uses TravelerTotalPrice::setCurrency()
     * @param int $travelerRefId
     * @param float $totalPrice
     * @param string $currency
     */
    public function __construct(?int $travelerRefId = null, ?float $totalPrice = null, ?string $currency = null)
    {
        $this
            ->setTravelerRefId($travelerRefId)
            ->setTotalPrice($totalPrice)
            ->setCurrency($currency);
    }
    /**
     * Get TravelerRefId value
     * @return int|null
     */
    public function getTravelerRefId(): ?int
    {
        return $this->TravelerRefId;
    }
    /**
     * Set TravelerRefId value
     * @param int $travelerRefId
     * @return \Pggns\MidocoApi\Order\StructType\TravelerTotalPrice
     */
    public function setTravelerRefId(?int $travelerRefId = null): self
    {
        // validation for constraint: int
        if (!is_null($travelerRefId) && !(is_int($travelerRefId) || ctype_digit($travelerRefId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelerRefId, true), gettype($travelerRefId)), __LINE__);
        }
        $this->TravelerRefId = $travelerRefId;
        
        return $this;
    }
    /**
     * Get totalPrice value
     * @return float|null
     */
    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param float $totalPrice
     * @return \Pggns\MidocoApi\Order\StructType\TravelerTotalPrice
     */
    public function setTotalPrice(?float $totalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPrice) && !(is_float($totalPrice) || is_numeric($totalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Order\StructType\TravelerTotalPrice
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
}
