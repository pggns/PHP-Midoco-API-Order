<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAdvice4Printing StructType
 * @subpackage Structs
 */
class MidocoAdvice4Printing extends AdviceSettlementDTO
{
    /**
     * The sumSupplierInvoice
     * @var float|null
     */
    protected ?float $sumSupplierInvoice = null;
    /**
     * The sumVatIncl
     * @var float|null
     */
    protected ?float $sumVatIncl = null;
    /**
     * The sumVatFree
     * @var float|null
     */
    protected ?float $sumVatFree = null;
    /**
     * The sumVat
     * @var float|null
     */
    protected ?float $sumVat = null;
    /**
     * The sumTotal
     * @var float|null
     */
    protected ?float $sumTotal = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * Constructor method for MidocoAdvice4Printing
     * @uses MidocoAdvice4Printing::setSumSupplierInvoice()
     * @uses MidocoAdvice4Printing::setSumVatIncl()
     * @uses MidocoAdvice4Printing::setSumVatFree()
     * @uses MidocoAdvice4Printing::setSumVat()
     * @uses MidocoAdvice4Printing::setSumTotal()
     * @uses MidocoAdvice4Printing::setCurrency()
     * @param float $sumSupplierInvoice
     * @param float $sumVatIncl
     * @param float $sumVatFree
     * @param float $sumVat
     * @param float $sumTotal
     * @param string $currency
     */
    public function __construct(?float $sumSupplierInvoice = null, ?float $sumVatIncl = null, ?float $sumVatFree = null, ?float $sumVat = null, ?float $sumTotal = null, ?string $currency = null)
    {
        $this
            ->setSumSupplierInvoice($sumSupplierInvoice)
            ->setSumVatIncl($sumVatIncl)
            ->setSumVatFree($sumVatFree)
            ->setSumVat($sumVat)
            ->setSumTotal($sumTotal)
            ->setCurrency($currency);
    }
    /**
     * Get sumSupplierInvoice value
     * @return float|null
     */
    public function getSumSupplierInvoice(): ?float
    {
        return $this->sumSupplierInvoice;
    }
    /**
     * Set sumSupplierInvoice value
     * @param float $sumSupplierInvoice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdvice4Printing
     */
    public function setSumSupplierInvoice(?float $sumSupplierInvoice = null): self
    {
        // validation for constraint: float
        if (!is_null($sumSupplierInvoice) && !(is_float($sumSupplierInvoice) || is_numeric($sumSupplierInvoice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumSupplierInvoice, true), gettype($sumSupplierInvoice)), __LINE__);
        }
        $this->sumSupplierInvoice = $sumSupplierInvoice;
        
        return $this;
    }
    /**
     * Get sumVatIncl value
     * @return float|null
     */
    public function getSumVatIncl(): ?float
    {
        return $this->sumVatIncl;
    }
    /**
     * Set sumVatIncl value
     * @param float $sumVatIncl
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdvice4Printing
     */
    public function setSumVatIncl(?float $sumVatIncl = null): self
    {
        // validation for constraint: float
        if (!is_null($sumVatIncl) && !(is_float($sumVatIncl) || is_numeric($sumVatIncl))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumVatIncl, true), gettype($sumVatIncl)), __LINE__);
        }
        $this->sumVatIncl = $sumVatIncl;
        
        return $this;
    }
    /**
     * Get sumVatFree value
     * @return float|null
     */
    public function getSumVatFree(): ?float
    {
        return $this->sumVatFree;
    }
    /**
     * Set sumVatFree value
     * @param float $sumVatFree
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdvice4Printing
     */
    public function setSumVatFree(?float $sumVatFree = null): self
    {
        // validation for constraint: float
        if (!is_null($sumVatFree) && !(is_float($sumVatFree) || is_numeric($sumVatFree))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumVatFree, true), gettype($sumVatFree)), __LINE__);
        }
        $this->sumVatFree = $sumVatFree;
        
        return $this;
    }
    /**
     * Get sumVat value
     * @return float|null
     */
    public function getSumVat(): ?float
    {
        return $this->sumVat;
    }
    /**
     * Set sumVat value
     * @param float $sumVat
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdvice4Printing
     */
    public function setSumVat(?float $sumVat = null): self
    {
        // validation for constraint: float
        if (!is_null($sumVat) && !(is_float($sumVat) || is_numeric($sumVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumVat, true), gettype($sumVat)), __LINE__);
        }
        $this->sumVat = $sumVat;
        
        return $this;
    }
    /**
     * Get sumTotal value
     * @return float|null
     */
    public function getSumTotal(): ?float
    {
        return $this->sumTotal;
    }
    /**
     * Set sumTotal value
     * @param float $sumTotal
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdvice4Printing
     */
    public function setSumTotal(?float $sumTotal = null): self
    {
        // validation for constraint: float
        if (!is_null($sumTotal) && !(is_float($sumTotal) || is_numeric($sumTotal))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumTotal, true), gettype($sumTotal)), __LINE__);
        }
        $this->sumTotal = $sumTotal;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdvice4Printing
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
