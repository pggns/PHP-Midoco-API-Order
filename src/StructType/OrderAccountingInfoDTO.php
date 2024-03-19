<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderAccountingInfoDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrderAccountingInfoDTO extends AbstractStructBase
{
    /**
     * The agencyCommCalc
     * @var float|null
     */
    protected ?float $agencyCommCalc = null;
    /**
     * The agencyCommCalcNet
     * @var float|null
     */
    protected ?float $agencyCommCalcNet = null;
    /**
     * The agencyCommCalcVat
     * @var float|null
     */
    protected ?float $agencyCommCalcVat = null;
    /**
     * The agencyCommPaid
     * @var float|null
     */
    protected ?float $agencyCommPaid = null;
    /**
     * The agencyCommPaidNet
     * @var float|null
     */
    protected ?float $agencyCommPaidNet = null;
    /**
     * The agencyCommPaidVat
     * @var float|null
     */
    protected ?float $agencyCommPaidVat = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The buyPrice
     * @var float|null
     */
    protected ?float $buyPrice = null;
    /**
     * The buyPriceNet
     * @var float|null
     */
    protected ?float $buyPriceNet = null;
    /**
     * The buyPriceVat
     * @var float|null
     */
    protected ?float $buyPriceVat = null;
    /**
     * The calcRevenue
     * @var float|null
     */
    protected ?float $calcRevenue = null;
    /**
     * The calcRevenueNet
     * @var float|null
     */
    protected ?float $calcRevenueNet = null;
    /**
     * The calcRevenueVat
     * @var float|null
     */
    protected ?float $calcRevenueVat = null;
    /**
     * The depositAmount
     * @var float|null
     */
    protected ?float $depositAmount = null;
    /**
     * The destination
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The displayedCurrency
     * @var string|null
     */
    protected ?string $displayedCurrency = null;
    /**
     * The displayedItemPrice
     * @var float|null
     */
    protected ?float $displayedItemPrice = null;
    /**
     * The docTaxes
     * @var float|null
     */
    protected ?float $docTaxes = null;
    /**
     * The endTravel
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * The grantedRevenue
     * @var float|null
     */
    protected ?float $grantedRevenue = null;
    /**
     * The grantedRevenueNet
     * @var float|null
     */
    protected ?float $grantedRevenueNet = null;
    /**
     * The grantedRevenueVat
     * @var float|null
     */
    protected ?float $grantedRevenueVat = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The inkassoPrice
     * @var float|null
     */
    protected ?float $inkassoPrice = null;
    /**
     * The invoicedAmount
     * @var float|null
     */
    protected ?float $invoicedAmount = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The margin
     * @var float|null
     */
    protected ?float $margin = null;
    /**
     * The marginNet
     * @var float|null
     */
    protected ?float $marginNet = null;
    /**
     * The marginVat
     * @var float|null
     */
    protected ?float $marginVat = null;
    /**
     * The mediatorCommCalc
     * @var float|null
     */
    protected ?float $mediatorCommCalc = null;
    /**
     * The mediatorCommCalcNet
     * @var float|null
     */
    protected ?float $mediatorCommCalcNet = null;
    /**
     * The mediatorCommCalcVat
     * @var float|null
     */
    protected ?float $mediatorCommCalcVat = null;
    /**
     * The mediatorCommPaid
     * @var float|null
     */
    protected ?float $mediatorCommPaid = null;
    /**
     * The mediatorCommPaidNet
     * @var float|null
     */
    protected ?float $mediatorCommPaidNet = null;
    /**
     * The mediatorCommPaidVat
     * @var float|null
     */
    protected ?float $mediatorCommPaidVat = null;
    /**
     * The noOfPassengers
     * @var int|null
     */
    protected ?int $noOfPassengers = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The revenueBookingOpen
     * @var float|null
     */
    protected ?float $revenueBookingOpen = null;
    /**
     * The revenueBookingSum
     * @var float|null
     */
    protected ?float $revenueBookingSum = null;
    /**
     * The revenueBookingSumNet
     * @var float|null
     */
    protected ?float $revenueBookingSumNet = null;
    /**
     * The revenueBookingSumVat
     * @var float|null
     */
    protected ?float $revenueBookingSumVat = null;
    /**
     * The salePrice
     * @var float|null
     */
    protected ?float $salePrice = null;
    /**
     * The salePriceNet
     * @var float|null
     */
    protected ?float $salePriceNet = null;
    /**
     * The salePriceVat
     * @var float|null
     */
    protected ?float $salePriceVat = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The tourOperator
     * @var string|null
     */
    protected ?string $tourOperator = null;
    /**
     * Constructor method for OrderAccountingInfoDTO
     * @uses OrderAccountingInfoDTO::setAgencyCommCalc()
     * @uses OrderAccountingInfoDTO::setAgencyCommCalcNet()
     * @uses OrderAccountingInfoDTO::setAgencyCommCalcVat()
     * @uses OrderAccountingInfoDTO::setAgencyCommPaid()
     * @uses OrderAccountingInfoDTO::setAgencyCommPaidNet()
     * @uses OrderAccountingInfoDTO::setAgencyCommPaidVat()
     * @uses OrderAccountingInfoDTO::setBookingId()
     * @uses OrderAccountingInfoDTO::setBuyPrice()
     * @uses OrderAccountingInfoDTO::setBuyPriceNet()
     * @uses OrderAccountingInfoDTO::setBuyPriceVat()
     * @uses OrderAccountingInfoDTO::setCalcRevenue()
     * @uses OrderAccountingInfoDTO::setCalcRevenueNet()
     * @uses OrderAccountingInfoDTO::setCalcRevenueVat()
     * @uses OrderAccountingInfoDTO::setDepositAmount()
     * @uses OrderAccountingInfoDTO::setDestination()
     * @uses OrderAccountingInfoDTO::setDisplayedCurrency()
     * @uses OrderAccountingInfoDTO::setDisplayedItemPrice()
     * @uses OrderAccountingInfoDTO::setDocTaxes()
     * @uses OrderAccountingInfoDTO::setEndTravel()
     * @uses OrderAccountingInfoDTO::setGrantedRevenue()
     * @uses OrderAccountingInfoDTO::setGrantedRevenueNet()
     * @uses OrderAccountingInfoDTO::setGrantedRevenueVat()
     * @uses OrderAccountingInfoDTO::setId()
     * @uses OrderAccountingInfoDTO::setInkassoPrice()
     * @uses OrderAccountingInfoDTO::setInvoicedAmount()
     * @uses OrderAccountingInfoDTO::setItemId()
     * @uses OrderAccountingInfoDTO::setItemType()
     * @uses OrderAccountingInfoDTO::setMargin()
     * @uses OrderAccountingInfoDTO::setMarginNet()
     * @uses OrderAccountingInfoDTO::setMarginVat()
     * @uses OrderAccountingInfoDTO::setMediatorCommCalc()
     * @uses OrderAccountingInfoDTO::setMediatorCommCalcNet()
     * @uses OrderAccountingInfoDTO::setMediatorCommCalcVat()
     * @uses OrderAccountingInfoDTO::setMediatorCommPaid()
     * @uses OrderAccountingInfoDTO::setMediatorCommPaidNet()
     * @uses OrderAccountingInfoDTO::setMediatorCommPaidVat()
     * @uses OrderAccountingInfoDTO::setNoOfPassengers()
     * @uses OrderAccountingInfoDTO::setOrderId()
     * @uses OrderAccountingInfoDTO::setRevenueBookingOpen()
     * @uses OrderAccountingInfoDTO::setRevenueBookingSum()
     * @uses OrderAccountingInfoDTO::setRevenueBookingSumNet()
     * @uses OrderAccountingInfoDTO::setRevenueBookingSumVat()
     * @uses OrderAccountingInfoDTO::setSalePrice()
     * @uses OrderAccountingInfoDTO::setSalePriceNet()
     * @uses OrderAccountingInfoDTO::setSalePriceVat()
     * @uses OrderAccountingInfoDTO::setStartTravel()
     * @uses OrderAccountingInfoDTO::setTourOperator()
     * @param float $agencyCommCalc
     * @param float $agencyCommCalcNet
     * @param float $agencyCommCalcVat
     * @param float $agencyCommPaid
     * @param float $agencyCommPaidNet
     * @param float $agencyCommPaidVat
     * @param string $bookingId
     * @param float $buyPrice
     * @param float $buyPriceNet
     * @param float $buyPriceVat
     * @param float $calcRevenue
     * @param float $calcRevenueNet
     * @param float $calcRevenueVat
     * @param float $depositAmount
     * @param string $destination
     * @param string $displayedCurrency
     * @param float $displayedItemPrice
     * @param float $docTaxes
     * @param string $endTravel
     * @param float $grantedRevenue
     * @param float $grantedRevenueNet
     * @param float $grantedRevenueVat
     * @param int $id
     * @param float $inkassoPrice
     * @param float $invoicedAmount
     * @param int $itemId
     * @param string $itemType
     * @param float $margin
     * @param float $marginNet
     * @param float $marginVat
     * @param float $mediatorCommCalc
     * @param float $mediatorCommCalcNet
     * @param float $mediatorCommCalcVat
     * @param float $mediatorCommPaid
     * @param float $mediatorCommPaidNet
     * @param float $mediatorCommPaidVat
     * @param int $noOfPassengers
     * @param int $orderId
     * @param float $revenueBookingOpen
     * @param float $revenueBookingSum
     * @param float $revenueBookingSumNet
     * @param float $revenueBookingSumVat
     * @param float $salePrice
     * @param float $salePriceNet
     * @param float $salePriceVat
     * @param string $startTravel
     * @param string $tourOperator
     */
    public function __construct(?float $agencyCommCalc = null, ?float $agencyCommCalcNet = null, ?float $agencyCommCalcVat = null, ?float $agencyCommPaid = null, ?float $agencyCommPaidNet = null, ?float $agencyCommPaidVat = null, ?string $bookingId = null, ?float $buyPrice = null, ?float $buyPriceNet = null, ?float $buyPriceVat = null, ?float $calcRevenue = null, ?float $calcRevenueNet = null, ?float $calcRevenueVat = null, ?float $depositAmount = null, ?string $destination = null, ?string $displayedCurrency = null, ?float $displayedItemPrice = null, ?float $docTaxes = null, ?string $endTravel = null, ?float $grantedRevenue = null, ?float $grantedRevenueNet = null, ?float $grantedRevenueVat = null, ?int $id = null, ?float $inkassoPrice = null, ?float $invoicedAmount = null, ?int $itemId = null, ?string $itemType = null, ?float $margin = null, ?float $marginNet = null, ?float $marginVat = null, ?float $mediatorCommCalc = null, ?float $mediatorCommCalcNet = null, ?float $mediatorCommCalcVat = null, ?float $mediatorCommPaid = null, ?float $mediatorCommPaidNet = null, ?float $mediatorCommPaidVat = null, ?int $noOfPassengers = null, ?int $orderId = null, ?float $revenueBookingOpen = null, ?float $revenueBookingSum = null, ?float $revenueBookingSumNet = null, ?float $revenueBookingSumVat = null, ?float $salePrice = null, ?float $salePriceNet = null, ?float $salePriceVat = null, ?string $startTravel = null, ?string $tourOperator = null)
    {
        $this
            ->setAgencyCommCalc($agencyCommCalc)
            ->setAgencyCommCalcNet($agencyCommCalcNet)
            ->setAgencyCommCalcVat($agencyCommCalcVat)
            ->setAgencyCommPaid($agencyCommPaid)
            ->setAgencyCommPaidNet($agencyCommPaidNet)
            ->setAgencyCommPaidVat($agencyCommPaidVat)
            ->setBookingId($bookingId)
            ->setBuyPrice($buyPrice)
            ->setBuyPriceNet($buyPriceNet)
            ->setBuyPriceVat($buyPriceVat)
            ->setCalcRevenue($calcRevenue)
            ->setCalcRevenueNet($calcRevenueNet)
            ->setCalcRevenueVat($calcRevenueVat)
            ->setDepositAmount($depositAmount)
            ->setDestination($destination)
            ->setDisplayedCurrency($displayedCurrency)
            ->setDisplayedItemPrice($displayedItemPrice)
            ->setDocTaxes($docTaxes)
            ->setEndTravel($endTravel)
            ->setGrantedRevenue($grantedRevenue)
            ->setGrantedRevenueNet($grantedRevenueNet)
            ->setGrantedRevenueVat($grantedRevenueVat)
            ->setId($id)
            ->setInkassoPrice($inkassoPrice)
            ->setInvoicedAmount($invoicedAmount)
            ->setItemId($itemId)
            ->setItemType($itemType)
            ->setMargin($margin)
            ->setMarginNet($marginNet)
            ->setMarginVat($marginVat)
            ->setMediatorCommCalc($mediatorCommCalc)
            ->setMediatorCommCalcNet($mediatorCommCalcNet)
            ->setMediatorCommCalcVat($mediatorCommCalcVat)
            ->setMediatorCommPaid($mediatorCommPaid)
            ->setMediatorCommPaidNet($mediatorCommPaidNet)
            ->setMediatorCommPaidVat($mediatorCommPaidVat)
            ->setNoOfPassengers($noOfPassengers)
            ->setOrderId($orderId)
            ->setRevenueBookingOpen($revenueBookingOpen)
            ->setRevenueBookingSum($revenueBookingSum)
            ->setRevenueBookingSumNet($revenueBookingSumNet)
            ->setRevenueBookingSumVat($revenueBookingSumVat)
            ->setSalePrice($salePrice)
            ->setSalePriceNet($salePriceNet)
            ->setSalePriceVat($salePriceVat)
            ->setStartTravel($startTravel)
            ->setTourOperator($tourOperator);
    }
    /**
     * Get agencyCommCalc value
     * @return float|null
     */
    public function getAgencyCommCalc(): ?float
    {
        return $this->agencyCommCalc;
    }
    /**
     * Set agencyCommCalc value
     * @param float $agencyCommCalc
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setAgencyCommCalc(?float $agencyCommCalc = null): self
    {
        // validation for constraint: float
        if (!is_null($agencyCommCalc) && !(is_float($agencyCommCalc) || is_numeric($agencyCommCalc))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($agencyCommCalc, true), gettype($agencyCommCalc)), __LINE__);
        }
        $this->agencyCommCalc = $agencyCommCalc;
        
        return $this;
    }
    /**
     * Get agencyCommCalcNet value
     * @return float|null
     */
    public function getAgencyCommCalcNet(): ?float
    {
        return $this->agencyCommCalcNet;
    }
    /**
     * Set agencyCommCalcNet value
     * @param float $agencyCommCalcNet
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setAgencyCommCalcNet(?float $agencyCommCalcNet = null): self
    {
        // validation for constraint: float
        if (!is_null($agencyCommCalcNet) && !(is_float($agencyCommCalcNet) || is_numeric($agencyCommCalcNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($agencyCommCalcNet, true), gettype($agencyCommCalcNet)), __LINE__);
        }
        $this->agencyCommCalcNet = $agencyCommCalcNet;
        
        return $this;
    }
    /**
     * Get agencyCommCalcVat value
     * @return float|null
     */
    public function getAgencyCommCalcVat(): ?float
    {
        return $this->agencyCommCalcVat;
    }
    /**
     * Set agencyCommCalcVat value
     * @param float $agencyCommCalcVat
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setAgencyCommCalcVat(?float $agencyCommCalcVat = null): self
    {
        // validation for constraint: float
        if (!is_null($agencyCommCalcVat) && !(is_float($agencyCommCalcVat) || is_numeric($agencyCommCalcVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($agencyCommCalcVat, true), gettype($agencyCommCalcVat)), __LINE__);
        }
        $this->agencyCommCalcVat = $agencyCommCalcVat;
        
        return $this;
    }
    /**
     * Get agencyCommPaid value
     * @return float|null
     */
    public function getAgencyCommPaid(): ?float
    {
        return $this->agencyCommPaid;
    }
    /**
     * Set agencyCommPaid value
     * @param float $agencyCommPaid
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setAgencyCommPaid(?float $agencyCommPaid = null): self
    {
        // validation for constraint: float
        if (!is_null($agencyCommPaid) && !(is_float($agencyCommPaid) || is_numeric($agencyCommPaid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($agencyCommPaid, true), gettype($agencyCommPaid)), __LINE__);
        }
        $this->agencyCommPaid = $agencyCommPaid;
        
        return $this;
    }
    /**
     * Get agencyCommPaidNet value
     * @return float|null
     */
    public function getAgencyCommPaidNet(): ?float
    {
        return $this->agencyCommPaidNet;
    }
    /**
     * Set agencyCommPaidNet value
     * @param float $agencyCommPaidNet
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setAgencyCommPaidNet(?float $agencyCommPaidNet = null): self
    {
        // validation for constraint: float
        if (!is_null($agencyCommPaidNet) && !(is_float($agencyCommPaidNet) || is_numeric($agencyCommPaidNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($agencyCommPaidNet, true), gettype($agencyCommPaidNet)), __LINE__);
        }
        $this->agencyCommPaidNet = $agencyCommPaidNet;
        
        return $this;
    }
    /**
     * Get agencyCommPaidVat value
     * @return float|null
     */
    public function getAgencyCommPaidVat(): ?float
    {
        return $this->agencyCommPaidVat;
    }
    /**
     * Set agencyCommPaidVat value
     * @param float $agencyCommPaidVat
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setAgencyCommPaidVat(?float $agencyCommPaidVat = null): self
    {
        // validation for constraint: float
        if (!is_null($agencyCommPaidVat) && !(is_float($agencyCommPaidVat) || is_numeric($agencyCommPaidVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($agencyCommPaidVat, true), gettype($agencyCommPaidVat)), __LINE__);
        }
        $this->agencyCommPaidVat = $agencyCommPaidVat;
        
        return $this;
    }
    /**
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get buyPrice value
     * @return float|null
     */
    public function getBuyPrice(): ?float
    {
        return $this->buyPrice;
    }
    /**
     * Set buyPrice value
     * @param float $buyPrice
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setBuyPrice(?float $buyPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($buyPrice) && !(is_float($buyPrice) || is_numeric($buyPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($buyPrice, true), gettype($buyPrice)), __LINE__);
        }
        $this->buyPrice = $buyPrice;
        
        return $this;
    }
    /**
     * Get buyPriceNet value
     * @return float|null
     */
    public function getBuyPriceNet(): ?float
    {
        return $this->buyPriceNet;
    }
    /**
     * Set buyPriceNet value
     * @param float $buyPriceNet
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setBuyPriceNet(?float $buyPriceNet = null): self
    {
        // validation for constraint: float
        if (!is_null($buyPriceNet) && !(is_float($buyPriceNet) || is_numeric($buyPriceNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($buyPriceNet, true), gettype($buyPriceNet)), __LINE__);
        }
        $this->buyPriceNet = $buyPriceNet;
        
        return $this;
    }
    /**
     * Get buyPriceVat value
     * @return float|null
     */
    public function getBuyPriceVat(): ?float
    {
        return $this->buyPriceVat;
    }
    /**
     * Set buyPriceVat value
     * @param float $buyPriceVat
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setBuyPriceVat(?float $buyPriceVat = null): self
    {
        // validation for constraint: float
        if (!is_null($buyPriceVat) && !(is_float($buyPriceVat) || is_numeric($buyPriceVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($buyPriceVat, true), gettype($buyPriceVat)), __LINE__);
        }
        $this->buyPriceVat = $buyPriceVat;
        
        return $this;
    }
    /**
     * Get calcRevenue value
     * @return float|null
     */
    public function getCalcRevenue(): ?float
    {
        return $this->calcRevenue;
    }
    /**
     * Set calcRevenue value
     * @param float $calcRevenue
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setCalcRevenue(?float $calcRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($calcRevenue) && !(is_float($calcRevenue) || is_numeric($calcRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calcRevenue, true), gettype($calcRevenue)), __LINE__);
        }
        $this->calcRevenue = $calcRevenue;
        
        return $this;
    }
    /**
     * Get calcRevenueNet value
     * @return float|null
     */
    public function getCalcRevenueNet(): ?float
    {
        return $this->calcRevenueNet;
    }
    /**
     * Set calcRevenueNet value
     * @param float $calcRevenueNet
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setCalcRevenueNet(?float $calcRevenueNet = null): self
    {
        // validation for constraint: float
        if (!is_null($calcRevenueNet) && !(is_float($calcRevenueNet) || is_numeric($calcRevenueNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calcRevenueNet, true), gettype($calcRevenueNet)), __LINE__);
        }
        $this->calcRevenueNet = $calcRevenueNet;
        
        return $this;
    }
    /**
     * Get calcRevenueVat value
     * @return float|null
     */
    public function getCalcRevenueVat(): ?float
    {
        return $this->calcRevenueVat;
    }
    /**
     * Set calcRevenueVat value
     * @param float $calcRevenueVat
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setCalcRevenueVat(?float $calcRevenueVat = null): self
    {
        // validation for constraint: float
        if (!is_null($calcRevenueVat) && !(is_float($calcRevenueVat) || is_numeric($calcRevenueVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calcRevenueVat, true), gettype($calcRevenueVat)), __LINE__);
        }
        $this->calcRevenueVat = $calcRevenueVat;
        
        return $this;
    }
    /**
     * Get depositAmount value
     * @return float|null
     */
    public function getDepositAmount(): ?float
    {
        return $this->depositAmount;
    }
    /**
     * Set depositAmount value
     * @param float $depositAmount
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setDepositAmount(?float $depositAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($depositAmount) && !(is_float($depositAmount) || is_numeric($depositAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($depositAmount, true), gettype($depositAmount)), __LINE__);
        }
        $this->depositAmount = $depositAmount;
        
        return $this;
    }
    /**
     * Get destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        
        return $this;
    }
    /**
     * Get displayedCurrency value
     * @return string|null
     */
    public function getDisplayedCurrency(): ?string
    {
        return $this->displayedCurrency;
    }
    /**
     * Set displayedCurrency value
     * @param string $displayedCurrency
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setDisplayedCurrency(?string $displayedCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($displayedCurrency) && !is_string($displayedCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayedCurrency, true), gettype($displayedCurrency)), __LINE__);
        }
        $this->displayedCurrency = $displayedCurrency;
        
        return $this;
    }
    /**
     * Get displayedItemPrice value
     * @return float|null
     */
    public function getDisplayedItemPrice(): ?float
    {
        return $this->displayedItemPrice;
    }
    /**
     * Set displayedItemPrice value
     * @param float $displayedItemPrice
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setDisplayedItemPrice(?float $displayedItemPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($displayedItemPrice) && !(is_float($displayedItemPrice) || is_numeric($displayedItemPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($displayedItemPrice, true), gettype($displayedItemPrice)), __LINE__);
        }
        $this->displayedItemPrice = $displayedItemPrice;
        
        return $this;
    }
    /**
     * Get docTaxes value
     * @return float|null
     */
    public function getDocTaxes(): ?float
    {
        return $this->docTaxes;
    }
    /**
     * Set docTaxes value
     * @param float $docTaxes
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setDocTaxes(?float $docTaxes = null): self
    {
        // validation for constraint: float
        if (!is_null($docTaxes) && !(is_float($docTaxes) || is_numeric($docTaxes))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($docTaxes, true), gettype($docTaxes)), __LINE__);
        }
        $this->docTaxes = $docTaxes;
        
        return $this;
    }
    /**
     * Get endTravel value
     * @return string|null
     */
    public function getEndTravel(): ?string
    {
        return $this->endTravel;
    }
    /**
     * Set endTravel value
     * @param string $endTravel
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setEndTravel(?string $endTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravel) && !is_string($endTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravel, true), gettype($endTravel)), __LINE__);
        }
        $this->endTravel = $endTravel;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
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
     * Get grantedRevenueNet value
     * @return float|null
     */
    public function getGrantedRevenueNet(): ?float
    {
        return $this->grantedRevenueNet;
    }
    /**
     * Set grantedRevenueNet value
     * @param float $grantedRevenueNet
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setGrantedRevenueNet(?float $grantedRevenueNet = null): self
    {
        // validation for constraint: float
        if (!is_null($grantedRevenueNet) && !(is_float($grantedRevenueNet) || is_numeric($grantedRevenueNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grantedRevenueNet, true), gettype($grantedRevenueNet)), __LINE__);
        }
        $this->grantedRevenueNet = $grantedRevenueNet;
        
        return $this;
    }
    /**
     * Get grantedRevenueVat value
     * @return float|null
     */
    public function getGrantedRevenueVat(): ?float
    {
        return $this->grantedRevenueVat;
    }
    /**
     * Set grantedRevenueVat value
     * @param float $grantedRevenueVat
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setGrantedRevenueVat(?float $grantedRevenueVat = null): self
    {
        // validation for constraint: float
        if (!is_null($grantedRevenueVat) && !(is_float($grantedRevenueVat) || is_numeric($grantedRevenueVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grantedRevenueVat, true), gettype($grantedRevenueVat)), __LINE__);
        }
        $this->grantedRevenueVat = $grantedRevenueVat;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get inkassoPrice value
     * @return float|null
     */
    public function getInkassoPrice(): ?float
    {
        return $this->inkassoPrice;
    }
    /**
     * Set inkassoPrice value
     * @param float $inkassoPrice
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setInkassoPrice(?float $inkassoPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($inkassoPrice) && !(is_float($inkassoPrice) || is_numeric($inkassoPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($inkassoPrice, true), gettype($inkassoPrice)), __LINE__);
        }
        $this->inkassoPrice = $inkassoPrice;
        
        return $this;
    }
    /**
     * Get invoicedAmount value
     * @return float|null
     */
    public function getInvoicedAmount(): ?float
    {
        return $this->invoicedAmount;
    }
    /**
     * Set invoicedAmount value
     * @param float $invoicedAmount
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setInvoicedAmount(?float $invoicedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($invoicedAmount) && !(is_float($invoicedAmount) || is_numeric($invoicedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($invoicedAmount, true), gettype($invoicedAmount)), __LINE__);
        }
        $this->invoicedAmount = $invoicedAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
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
     * Get itemType value
     * @return string|null
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }
    /**
     * Set itemType value
     * @param string $itemType
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setItemType(?string $itemType = null): self
    {
        // validation for constraint: string
        if (!is_null($itemType) && !is_string($itemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemType, true), gettype($itemType)), __LINE__);
        }
        $this->itemType = $itemType;
        
        return $this;
    }
    /**
     * Get margin value
     * @return float|null
     */
    public function getMargin(): ?float
    {
        return $this->margin;
    }
    /**
     * Set margin value
     * @param float $margin
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setMargin(?float $margin = null): self
    {
        // validation for constraint: float
        if (!is_null($margin) && !(is_float($margin) || is_numeric($margin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($margin, true), gettype($margin)), __LINE__);
        }
        $this->margin = $margin;
        
        return $this;
    }
    /**
     * Get marginNet value
     * @return float|null
     */
    public function getMarginNet(): ?float
    {
        return $this->marginNet;
    }
    /**
     * Set marginNet value
     * @param float $marginNet
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setMarginNet(?float $marginNet = null): self
    {
        // validation for constraint: float
        if (!is_null($marginNet) && !(is_float($marginNet) || is_numeric($marginNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($marginNet, true), gettype($marginNet)), __LINE__);
        }
        $this->marginNet = $marginNet;
        
        return $this;
    }
    /**
     * Get marginVat value
     * @return float|null
     */
    public function getMarginVat(): ?float
    {
        return $this->marginVat;
    }
    /**
     * Set marginVat value
     * @param float $marginVat
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setMarginVat(?float $marginVat = null): self
    {
        // validation for constraint: float
        if (!is_null($marginVat) && !(is_float($marginVat) || is_numeric($marginVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($marginVat, true), gettype($marginVat)), __LINE__);
        }
        $this->marginVat = $marginVat;
        
        return $this;
    }
    /**
     * Get mediatorCommCalc value
     * @return float|null
     */
    public function getMediatorCommCalc(): ?float
    {
        return $this->mediatorCommCalc;
    }
    /**
     * Set mediatorCommCalc value
     * @param float $mediatorCommCalc
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setMediatorCommCalc(?float $mediatorCommCalc = null): self
    {
        // validation for constraint: float
        if (!is_null($mediatorCommCalc) && !(is_float($mediatorCommCalc) || is_numeric($mediatorCommCalc))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($mediatorCommCalc, true), gettype($mediatorCommCalc)), __LINE__);
        }
        $this->mediatorCommCalc = $mediatorCommCalc;
        
        return $this;
    }
    /**
     * Get mediatorCommCalcNet value
     * @return float|null
     */
    public function getMediatorCommCalcNet(): ?float
    {
        return $this->mediatorCommCalcNet;
    }
    /**
     * Set mediatorCommCalcNet value
     * @param float $mediatorCommCalcNet
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setMediatorCommCalcNet(?float $mediatorCommCalcNet = null): self
    {
        // validation for constraint: float
        if (!is_null($mediatorCommCalcNet) && !(is_float($mediatorCommCalcNet) || is_numeric($mediatorCommCalcNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($mediatorCommCalcNet, true), gettype($mediatorCommCalcNet)), __LINE__);
        }
        $this->mediatorCommCalcNet = $mediatorCommCalcNet;
        
        return $this;
    }
    /**
     * Get mediatorCommCalcVat value
     * @return float|null
     */
    public function getMediatorCommCalcVat(): ?float
    {
        return $this->mediatorCommCalcVat;
    }
    /**
     * Set mediatorCommCalcVat value
     * @param float $mediatorCommCalcVat
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setMediatorCommCalcVat(?float $mediatorCommCalcVat = null): self
    {
        // validation for constraint: float
        if (!is_null($mediatorCommCalcVat) && !(is_float($mediatorCommCalcVat) || is_numeric($mediatorCommCalcVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($mediatorCommCalcVat, true), gettype($mediatorCommCalcVat)), __LINE__);
        }
        $this->mediatorCommCalcVat = $mediatorCommCalcVat;
        
        return $this;
    }
    /**
     * Get mediatorCommPaid value
     * @return float|null
     */
    public function getMediatorCommPaid(): ?float
    {
        return $this->mediatorCommPaid;
    }
    /**
     * Set mediatorCommPaid value
     * @param float $mediatorCommPaid
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setMediatorCommPaid(?float $mediatorCommPaid = null): self
    {
        // validation for constraint: float
        if (!is_null($mediatorCommPaid) && !(is_float($mediatorCommPaid) || is_numeric($mediatorCommPaid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($mediatorCommPaid, true), gettype($mediatorCommPaid)), __LINE__);
        }
        $this->mediatorCommPaid = $mediatorCommPaid;
        
        return $this;
    }
    /**
     * Get mediatorCommPaidNet value
     * @return float|null
     */
    public function getMediatorCommPaidNet(): ?float
    {
        return $this->mediatorCommPaidNet;
    }
    /**
     * Set mediatorCommPaidNet value
     * @param float $mediatorCommPaidNet
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setMediatorCommPaidNet(?float $mediatorCommPaidNet = null): self
    {
        // validation for constraint: float
        if (!is_null($mediatorCommPaidNet) && !(is_float($mediatorCommPaidNet) || is_numeric($mediatorCommPaidNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($mediatorCommPaidNet, true), gettype($mediatorCommPaidNet)), __LINE__);
        }
        $this->mediatorCommPaidNet = $mediatorCommPaidNet;
        
        return $this;
    }
    /**
     * Get mediatorCommPaidVat value
     * @return float|null
     */
    public function getMediatorCommPaidVat(): ?float
    {
        return $this->mediatorCommPaidVat;
    }
    /**
     * Set mediatorCommPaidVat value
     * @param float $mediatorCommPaidVat
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setMediatorCommPaidVat(?float $mediatorCommPaidVat = null): self
    {
        // validation for constraint: float
        if (!is_null($mediatorCommPaidVat) && !(is_float($mediatorCommPaidVat) || is_numeric($mediatorCommPaidVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($mediatorCommPaidVat, true), gettype($mediatorCommPaidVat)), __LINE__);
        }
        $this->mediatorCommPaidVat = $mediatorCommPaidVat;
        
        return $this;
    }
    /**
     * Get noOfPassengers value
     * @return int|null
     */
    public function getNoOfPassengers(): ?int
    {
        return $this->noOfPassengers;
    }
    /**
     * Set noOfPassengers value
     * @param int $noOfPassengers
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setNoOfPassengers(?int $noOfPassengers = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfPassengers) && !(is_int($noOfPassengers) || ctype_digit($noOfPassengers))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfPassengers, true), gettype($noOfPassengers)), __LINE__);
        }
        $this->noOfPassengers = $noOfPassengers;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get revenueBookingOpen value
     * @return float|null
     */
    public function getRevenueBookingOpen(): ?float
    {
        return $this->revenueBookingOpen;
    }
    /**
     * Set revenueBookingOpen value
     * @param float $revenueBookingOpen
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setRevenueBookingOpen(?float $revenueBookingOpen = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueBookingOpen) && !(is_float($revenueBookingOpen) || is_numeric($revenueBookingOpen))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueBookingOpen, true), gettype($revenueBookingOpen)), __LINE__);
        }
        $this->revenueBookingOpen = $revenueBookingOpen;
        
        return $this;
    }
    /**
     * Get revenueBookingSum value
     * @return float|null
     */
    public function getRevenueBookingSum(): ?float
    {
        return $this->revenueBookingSum;
    }
    /**
     * Set revenueBookingSum value
     * @param float $revenueBookingSum
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setRevenueBookingSum(?float $revenueBookingSum = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueBookingSum) && !(is_float($revenueBookingSum) || is_numeric($revenueBookingSum))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueBookingSum, true), gettype($revenueBookingSum)), __LINE__);
        }
        $this->revenueBookingSum = $revenueBookingSum;
        
        return $this;
    }
    /**
     * Get revenueBookingSumNet value
     * @return float|null
     */
    public function getRevenueBookingSumNet(): ?float
    {
        return $this->revenueBookingSumNet;
    }
    /**
     * Set revenueBookingSumNet value
     * @param float $revenueBookingSumNet
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setRevenueBookingSumNet(?float $revenueBookingSumNet = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueBookingSumNet) && !(is_float($revenueBookingSumNet) || is_numeric($revenueBookingSumNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueBookingSumNet, true), gettype($revenueBookingSumNet)), __LINE__);
        }
        $this->revenueBookingSumNet = $revenueBookingSumNet;
        
        return $this;
    }
    /**
     * Get revenueBookingSumVat value
     * @return float|null
     */
    public function getRevenueBookingSumVat(): ?float
    {
        return $this->revenueBookingSumVat;
    }
    /**
     * Set revenueBookingSumVat value
     * @param float $revenueBookingSumVat
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setRevenueBookingSumVat(?float $revenueBookingSumVat = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueBookingSumVat) && !(is_float($revenueBookingSumVat) || is_numeric($revenueBookingSumVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueBookingSumVat, true), gettype($revenueBookingSumVat)), __LINE__);
        }
        $this->revenueBookingSumVat = $revenueBookingSumVat;
        
        return $this;
    }
    /**
     * Get salePrice value
     * @return float|null
     */
    public function getSalePrice(): ?float
    {
        return $this->salePrice;
    }
    /**
     * Set salePrice value
     * @param float $salePrice
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setSalePrice(?float $salePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($salePrice) && !(is_float($salePrice) || is_numeric($salePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($salePrice, true), gettype($salePrice)), __LINE__);
        }
        $this->salePrice = $salePrice;
        
        return $this;
    }
    /**
     * Get salePriceNet value
     * @return float|null
     */
    public function getSalePriceNet(): ?float
    {
        return $this->salePriceNet;
    }
    /**
     * Set salePriceNet value
     * @param float $salePriceNet
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setSalePriceNet(?float $salePriceNet = null): self
    {
        // validation for constraint: float
        if (!is_null($salePriceNet) && !(is_float($salePriceNet) || is_numeric($salePriceNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($salePriceNet, true), gettype($salePriceNet)), __LINE__);
        }
        $this->salePriceNet = $salePriceNet;
        
        return $this;
    }
    /**
     * Get salePriceVat value
     * @return float|null
     */
    public function getSalePriceVat(): ?float
    {
        return $this->salePriceVat;
    }
    /**
     * Set salePriceVat value
     * @param float $salePriceVat
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setSalePriceVat(?float $salePriceVat = null): self
    {
        // validation for constraint: float
        if (!is_null($salePriceVat) && !(is_float($salePriceVat) || is_numeric($salePriceVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($salePriceVat, true), gettype($salePriceVat)), __LINE__);
        }
        $this->salePriceVat = $salePriceVat;
        
        return $this;
    }
    /**
     * Get startTravel value
     * @return string|null
     */
    public function getStartTravel(): ?string
    {
        return $this->startTravel;
    }
    /**
     * Set startTravel value
     * @param string $startTravel
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setStartTravel(?string $startTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravel) && !is_string($startTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravel, true), gettype($startTravel)), __LINE__);
        }
        $this->startTravel = $startTravel;
        
        return $this;
    }
    /**
     * Get tourOperator value
     * @return string|null
     */
    public function getTourOperator(): ?string
    {
        return $this->tourOperator;
    }
    /**
     * Set tourOperator value
     * @param string $tourOperator
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO
     */
    public function setTourOperator(?string $tourOperator = null): self
    {
        // validation for constraint: string
        if (!is_null($tourOperator) && !is_string($tourOperator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tourOperator, true), gettype($tourOperator)), __LINE__);
        }
        $this->tourOperator = $tourOperator;
        
        return $this;
    }
}
