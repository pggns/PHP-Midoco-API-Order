<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookPseudoRevenueBookingsResponse StructType
 * @subpackage Structs
 */
class BookPseudoRevenueBookingsResponse extends AbstractStructBase
{
    /**
     * The revenueId
     * @var int|null
     */
    protected ?int $revenueId = null;
    /**
     * The grantedRevenue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $grantedRevenue = null;
    /**
     * The revenueInclVat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $revenueInclVat = null;
    /**
     * The revenueNoVat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $revenueNoVat = null;
    /**
     * The revenueInsurance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $revenueInsurance = null;
    /**
     * The newTotalAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $newTotalAmount = null;
    /**
     * The supplierInvoice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $supplierInvoice = null;
    /**
     * Constructor method for BookPseudoRevenueBookingsResponse
     * @uses BookPseudoRevenueBookingsResponse::setRevenueId()
     * @uses BookPseudoRevenueBookingsResponse::setGrantedRevenue()
     * @uses BookPseudoRevenueBookingsResponse::setRevenueInclVat()
     * @uses BookPseudoRevenueBookingsResponse::setRevenueNoVat()
     * @uses BookPseudoRevenueBookingsResponse::setRevenueInsurance()
     * @uses BookPseudoRevenueBookingsResponse::setNewTotalAmount()
     * @uses BookPseudoRevenueBookingsResponse::setSupplierInvoice()
     * @param int $revenueId
     * @param float $grantedRevenue
     * @param float $revenueInclVat
     * @param float $revenueNoVat
     * @param float $revenueInsurance
     * @param float $newTotalAmount
     * @param float $supplierInvoice
     */
    public function __construct(?int $revenueId = null, ?float $grantedRevenue = null, ?float $revenueInclVat = null, ?float $revenueNoVat = null, ?float $revenueInsurance = null, ?float $newTotalAmount = null, ?float $supplierInvoice = null)
    {
        $this
            ->setRevenueId($revenueId)
            ->setGrantedRevenue($grantedRevenue)
            ->setRevenueInclVat($revenueInclVat)
            ->setRevenueNoVat($revenueNoVat)
            ->setRevenueInsurance($revenueInsurance)
            ->setNewTotalAmount($newTotalAmount)
            ->setSupplierInvoice($supplierInvoice);
    }
    /**
     * Get revenueId value
     * @return int|null
     */
    public function getRevenueId(): ?int
    {
        return $this->revenueId;
    }
    /**
     * Set revenueId value
     * @param int $revenueId
     * @return \Pggns\MidocoApi\Order\StructType\BookPseudoRevenueBookingsResponse
     */
    public function setRevenueId(?int $revenueId = null): self
    {
        // validation for constraint: int
        if (!is_null($revenueId) && !(is_int($revenueId) || ctype_digit($revenueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($revenueId, true), gettype($revenueId)), __LINE__);
        }
        $this->revenueId = $revenueId;
        
        return $this;
    }
    /**
     * Get grantedRevenue value
     * @return float|null
     */
    public function getGrantedRevenue(): ?float
    {
        return $this->grantedRevenue;
    }
    /**
     * Set grantedRevenue value
     * @param float $grantedRevenue
     * @return \Pggns\MidocoApi\Order\StructType\BookPseudoRevenueBookingsResponse
     */
    public function setGrantedRevenue(?float $grantedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($grantedRevenue) && !(is_float($grantedRevenue) || is_numeric($grantedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grantedRevenue, true), gettype($grantedRevenue)), __LINE__);
        }
        $this->grantedRevenue = $grantedRevenue;
        
        return $this;
    }
    /**
     * Get revenueInclVat value
     * @return float|null
     */
    public function getRevenueInclVat(): ?float
    {
        return $this->revenueInclVat;
    }
    /**
     * Set revenueInclVat value
     * @param float $revenueInclVat
     * @return \Pggns\MidocoApi\Order\StructType\BookPseudoRevenueBookingsResponse
     */
    public function setRevenueInclVat(?float $revenueInclVat = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueInclVat) && !(is_float($revenueInclVat) || is_numeric($revenueInclVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueInclVat, true), gettype($revenueInclVat)), __LINE__);
        }
        $this->revenueInclVat = $revenueInclVat;
        
        return $this;
    }
    /**
     * Get revenueNoVat value
     * @return float|null
     */
    public function getRevenueNoVat(): ?float
    {
        return $this->revenueNoVat;
    }
    /**
     * Set revenueNoVat value
     * @param float $revenueNoVat
     * @return \Pggns\MidocoApi\Order\StructType\BookPseudoRevenueBookingsResponse
     */
    public function setRevenueNoVat(?float $revenueNoVat = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueNoVat) && !(is_float($revenueNoVat) || is_numeric($revenueNoVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueNoVat, true), gettype($revenueNoVat)), __LINE__);
        }
        $this->revenueNoVat = $revenueNoVat;
        
        return $this;
    }
    /**
     * Get revenueInsurance value
     * @return float|null
     */
    public function getRevenueInsurance(): ?float
    {
        return $this->revenueInsurance;
    }
    /**
     * Set revenueInsurance value
     * @param float $revenueInsurance
     * @return \Pggns\MidocoApi\Order\StructType\BookPseudoRevenueBookingsResponse
     */
    public function setRevenueInsurance(?float $revenueInsurance = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueInsurance) && !(is_float($revenueInsurance) || is_numeric($revenueInsurance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueInsurance, true), gettype($revenueInsurance)), __LINE__);
        }
        $this->revenueInsurance = $revenueInsurance;
        
        return $this;
    }
    /**
     * Get newTotalAmount value
     * @return float|null
     */
    public function getNewTotalAmount(): ?float
    {
        return $this->newTotalAmount;
    }
    /**
     * Set newTotalAmount value
     * @param float $newTotalAmount
     * @return \Pggns\MidocoApi\Order\StructType\BookPseudoRevenueBookingsResponse
     */
    public function setNewTotalAmount(?float $newTotalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($newTotalAmount) && !(is_float($newTotalAmount) || is_numeric($newTotalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($newTotalAmount, true), gettype($newTotalAmount)), __LINE__);
        }
        $this->newTotalAmount = $newTotalAmount;
        
        return $this;
    }
    /**
     * Get supplierInvoice value
     * @return float|null
     */
    public function getSupplierInvoice(): ?float
    {
        return $this->supplierInvoice;
    }
    /**
     * Set supplierInvoice value
     * @param float $supplierInvoice
     * @return \Pggns\MidocoApi\Order\StructType\BookPseudoRevenueBookingsResponse
     */
    public function setSupplierInvoice(?float $supplierInvoice = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierInvoice) && !(is_float($supplierInvoice) || is_numeric($supplierInvoice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierInvoice, true), gettype($supplierInvoice)), __LINE__);
        }
        $this->supplierInvoice = $supplierInvoice;
        
        return $this;
    }
}
