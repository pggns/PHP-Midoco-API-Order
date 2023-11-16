<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCurrencyRate StructType
 * @subpackage Structs
 */
class MidocoCurrencyRate extends CurrencyHistoryDTO
{
    /**
     * The MidocoCurrencyRateHedge
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoCurrencyRateHedge
     * @var \Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO $MidocoCurrencyRateHedge = null;
    /**
     * The isGlobal
     * @var bool|null
     */
    protected ?bool $isGlobal = null;
    /**
     * The buyHedge
     * @var float|null
     */
    protected ?float $buyHedge = null;
    /**
     * The sellHedge
     * @var float|null
     */
    protected ?float $sellHedge = null;
    /**
     * The avgHedge
     * @var float|null
     */
    protected ?float $avgHedge = null;
    /**
     * Constructor method for MidocoCurrencyRate
     * @uses MidocoCurrencyRate::setMidocoCurrencyRateHedge()
     * @uses MidocoCurrencyRate::setIsGlobal()
     * @uses MidocoCurrencyRate::setBuyHedge()
     * @uses MidocoCurrencyRate::setSellHedge()
     * @uses MidocoCurrencyRate::setAvgHedge()
     * @param \Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO $midocoCurrencyRateHedge
     * @param bool $isGlobal
     * @param float $buyHedge
     * @param float $sellHedge
     * @param float $avgHedge
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO $midocoCurrencyRateHedge = null, ?bool $isGlobal = null, ?float $buyHedge = null, ?float $sellHedge = null, ?float $avgHedge = null)
    {
        $this
            ->setMidocoCurrencyRateHedge($midocoCurrencyRateHedge)
            ->setIsGlobal($isGlobal)
            ->setBuyHedge($buyHedge)
            ->setSellHedge($sellHedge)
            ->setAvgHedge($avgHedge);
    }
    /**
     * Get MidocoCurrencyRateHedge value
     * @return \Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO|null
     */
    public function getMidocoCurrencyRateHedge(): ?\Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO
    {
        return $this->MidocoCurrencyRateHedge;
    }
    /**
     * Set MidocoCurrencyRateHedge value
     * @param \Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO $midocoCurrencyRateHedge
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCurrencyRate
     */
    public function setMidocoCurrencyRateHedge(?\Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO $midocoCurrencyRateHedge = null): self
    {
        $this->MidocoCurrencyRateHedge = $midocoCurrencyRateHedge;
        
        return $this;
    }
    /**
     * Get isGlobal value
     * @return bool|null
     */
    public function getIsGlobal(): ?bool
    {
        return $this->isGlobal;
    }
    /**
     * Set isGlobal value
     * @param bool $isGlobal
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCurrencyRate
     */
    public function setIsGlobal(?bool $isGlobal = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isGlobal) && !is_bool($isGlobal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isGlobal, true), gettype($isGlobal)), __LINE__);
        }
        $this->isGlobal = $isGlobal;
        
        return $this;
    }
    /**
     * Get buyHedge value
     * @return float|null
     */
    public function getBuyHedge(): ?float
    {
        return $this->buyHedge;
    }
    /**
     * Set buyHedge value
     * @param float $buyHedge
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCurrencyRate
     */
    public function setBuyHedge(?float $buyHedge = null): self
    {
        // validation for constraint: float
        if (!is_null($buyHedge) && !(is_float($buyHedge) || is_numeric($buyHedge))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($buyHedge, true), gettype($buyHedge)), __LINE__);
        }
        $this->buyHedge = $buyHedge;
        
        return $this;
    }
    /**
     * Get sellHedge value
     * @return float|null
     */
    public function getSellHedge(): ?float
    {
        return $this->sellHedge;
    }
    /**
     * Set sellHedge value
     * @param float $sellHedge
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCurrencyRate
     */
    public function setSellHedge(?float $sellHedge = null): self
    {
        // validation for constraint: float
        if (!is_null($sellHedge) && !(is_float($sellHedge) || is_numeric($sellHedge))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sellHedge, true), gettype($sellHedge)), __LINE__);
        }
        $this->sellHedge = $sellHedge;
        
        return $this;
    }
    /**
     * Get avgHedge value
     * @return float|null
     */
    public function getAvgHedge(): ?float
    {
        return $this->avgHedge;
    }
    /**
     * Set avgHedge value
     * @param float $avgHedge
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCurrencyRate
     */
    public function setAvgHedge(?float $avgHedge = null): self
    {
        // validation for constraint: float
        if (!is_null($avgHedge) && !(is_float($avgHedge) || is_numeric($avgHedge))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($avgHedge, true), gettype($avgHedge)), __LINE__);
        }
        $this->avgHedge = $avgHedge;
        
        return $this;
    }
}
