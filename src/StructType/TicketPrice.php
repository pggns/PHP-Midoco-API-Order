<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketPrice StructType
 * Meta information extracted from the WSDL
 * - documentation: prices for flights, split in tax and fare amount
 * @subpackage Structs
 */
class TicketPrice extends AbstractStructBase
{
    /**
     * The TaxDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: TaxDetail
     * @var \Pggns\MidocoApi\Order\StructType\TaxDetail[]
     */
    protected array $TaxDetail = [];
    /**
     * The ticketPriceId
     * Meta information extracted from the WSDL
     * - documentation: Unique ID for the price in this GDS Booking
     * @var int|null
     */
    protected ?int $ticketPriceId = null;
    /**
     * The baseFare
     * @var float|null
     */
    protected ?float $baseFare = null;
    /**
     * The fareType
     * @var string|null
     */
    protected ?string $fareType = null;
    /**
     * The totalTax
     * @var float|null
     */
    protected ?float $totalTax = null;
    /**
     * The ticketingPrice
     * @var float|null
     */
    protected ?float $ticketingPrice = null;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 3
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The agencyFee
     * @var float|null
     */
    protected ?float $agencyFee = null;
    /**
     * The airlineFee
     * @var float|null
     */
    protected ?float $airlineFee = null;
    /**
     * The tourCode
     * @var string|null
     */
    protected ?string $tourCode = null;
    /**
     * The endorsement
     * @var string|null
     */
    protected ?string $endorsement = null;
    /**
     * The ticketDesignator
     * @var string|null
     */
    protected ?string $ticketDesignator = null;
    /**
     * The cancellationFee
     * @var float|null
     */
    protected ?float $cancellationFee = null;
    /**
     * The commission
     * @var float|null
     */
    protected ?float $commission = null;
    /**
     * The commissionPercent
     * @var float|null
     */
    protected ?float $commissionPercent = null;
    /**
     * The commissionVatAmount
     * @var float|null
     */
    protected ?float $commissionVatAmount = null;
    /**
     * Constructor method for TicketPrice
     * @uses TicketPrice::setTaxDetail()
     * @uses TicketPrice::setTicketPriceId()
     * @uses TicketPrice::setBaseFare()
     * @uses TicketPrice::setFareType()
     * @uses TicketPrice::setTotalTax()
     * @uses TicketPrice::setTicketingPrice()
     * @uses TicketPrice::setCurrency()
     * @uses TicketPrice::setAgencyFee()
     * @uses TicketPrice::setAirlineFee()
     * @uses TicketPrice::setTourCode()
     * @uses TicketPrice::setEndorsement()
     * @uses TicketPrice::setTicketDesignator()
     * @uses TicketPrice::setCancellationFee()
     * @uses TicketPrice::setCommission()
     * @uses TicketPrice::setCommissionPercent()
     * @uses TicketPrice::setCommissionVatAmount()
     * @param \Pggns\MidocoApi\Order\StructType\TaxDetail[] $taxDetail
     * @param int $ticketPriceId
     * @param float $baseFare
     * @param string $fareType
     * @param float $totalTax
     * @param float $ticketingPrice
     * @param string $currency
     * @param float $agencyFee
     * @param float $airlineFee
     * @param string $tourCode
     * @param string $endorsement
     * @param string $ticketDesignator
     * @param float $cancellationFee
     * @param float $commission
     * @param float $commissionPercent
     * @param float $commissionVatAmount
     */
    public function __construct(array $taxDetail = [], ?int $ticketPriceId = null, ?float $baseFare = null, ?string $fareType = null, ?float $totalTax = null, ?float $ticketingPrice = null, ?string $currency = null, ?float $agencyFee = null, ?float $airlineFee = null, ?string $tourCode = null, ?string $endorsement = null, ?string $ticketDesignator = null, ?float $cancellationFee = null, ?float $commission = null, ?float $commissionPercent = null, ?float $commissionVatAmount = null)
    {
        $this
            ->setTaxDetail($taxDetail)
            ->setTicketPriceId($ticketPriceId)
            ->setBaseFare($baseFare)
            ->setFareType($fareType)
            ->setTotalTax($totalTax)
            ->setTicketingPrice($ticketingPrice)
            ->setCurrency($currency)
            ->setAgencyFee($agencyFee)
            ->setAirlineFee($airlineFee)
            ->setTourCode($tourCode)
            ->setEndorsement($endorsement)
            ->setTicketDesignator($ticketDesignator)
            ->setCancellationFee($cancellationFee)
            ->setCommission($commission)
            ->setCommissionPercent($commissionPercent)
            ->setCommissionVatAmount($commissionVatAmount);
    }
    /**
     * Get TaxDetail value
     * @return \Pggns\MidocoApi\Order\StructType\TaxDetail[]
     */
    public function getTaxDetail(): array
    {
        return $this->TaxDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setTaxDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxDetailForArrayConstraintsFromSetTaxDetail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $ticketPriceTaxDetailItem) {
            // validation for constraint: itemType
            if (!$ticketPriceTaxDetailItem instanceof \Pggns\MidocoApi\Order\StructType\TaxDetail) {
                $invalidValues[] = is_object($ticketPriceTaxDetailItem) ? get_class($ticketPriceTaxDetailItem) : sprintf('%s(%s)', gettype($ticketPriceTaxDetailItem), var_export($ticketPriceTaxDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\TaxDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaxDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TaxDetail[] $taxDetail
     * @return \Pggns\MidocoApi\Order\StructType\TicketPrice
     */
    public function setTaxDetail(array $taxDetail = []): self
    {
        // validation for constraint: array
        if ('' !== ($taxDetailArrayErrorMessage = self::validateTaxDetailForArrayConstraintsFromSetTaxDetail($taxDetail))) {
            throw new InvalidArgumentException($taxDetailArrayErrorMessage, __LINE__);
        }
        $this->TaxDetail = $taxDetail;
        
        return $this;
    }
    /**
     * Add item to TaxDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TaxDetail $item
     * @return \Pggns\MidocoApi\Order\StructType\TicketPrice
     */
    public function addToTaxDetail(\Pggns\MidocoApi\Order\StructType\TaxDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\TaxDetail) {
            throw new InvalidArgumentException(sprintf('The TaxDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\TaxDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TaxDetail[] = $item;
        
        return $this;
    }
    /**
     * Get ticketPriceId value
     * @return int|null
     */
    public function getTicketPriceId(): ?int
    {
        return $this->ticketPriceId;
    }
    /**
     * Set ticketPriceId value
     * @param int $ticketPriceId
     * @return \Pggns\MidocoApi\Order\StructType\TicketPrice
     */
    public function setTicketPriceId(?int $ticketPriceId = null): self
    {
        // validation for constraint: int
        if (!is_null($ticketPriceId) && !(is_int($ticketPriceId) || ctype_digit($ticketPriceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ticketPriceId, true), gettype($ticketPriceId)), __LINE__);
        }
        $this->ticketPriceId = $ticketPriceId;
        
        return $this;
    }
    /**
     * Get baseFare value
     * @return float|null
     */
    public function getBaseFare(): ?float
    {
        return $this->baseFare;
    }
    /**
     * Set baseFare value
     * @param float $baseFare
     * @return \Pggns\MidocoApi\Order\StructType\TicketPrice
     */
    public function setBaseFare(?float $baseFare = null): self
    {
        // validation for constraint: float
        if (!is_null($baseFare) && !(is_float($baseFare) || is_numeric($baseFare))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($baseFare, true), gettype($baseFare)), __LINE__);
        }
        $this->baseFare = $baseFare;
        
        return $this;
    }
    /**
     * Get fareType value
     * @return string|null
     */
    public function getFareType(): ?string
    {
        return $this->fareType;
    }
    /**
     * Set fareType value
     * @uses \Pggns\MidocoApi\Order\EnumType\FareType_1::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\FareType_1::getValidValues()
     * @throws InvalidArgumentException
     * @param string $fareType
     * @return \Pggns\MidocoApi\Order\StructType\TicketPrice
     */
    public function setFareType(?string $fareType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\FareType_1::valueIsValid($fareType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\FareType_1', is_array($fareType) ? implode(', ', $fareType) : var_export($fareType, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\FareType_1::getValidValues())), __LINE__);
        }
        $this->fareType = $fareType;
        
        return $this;
    }
    /**
     * Get totalTax value
     * @return float|null
     */
    public function getTotalTax(): ?float
    {
        return $this->totalTax;
    }
    /**
     * Set totalTax value
     * @param float $totalTax
     * @return \Pggns\MidocoApi\Order\StructType\TicketPrice
     */
    public function setTotalTax(?float $totalTax = null): self
    {
        // validation for constraint: float
        if (!is_null($totalTax) && !(is_float($totalTax) || is_numeric($totalTax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalTax, true), gettype($totalTax)), __LINE__);
        }
        $this->totalTax = $totalTax;
        
        return $this;
    }
    /**
     * Get ticketingPrice value
     * @return float|null
     */
    public function getTicketingPrice(): ?float
    {
        return $this->ticketingPrice;
    }
    /**
     * Set ticketingPrice value
     * @param float $ticketingPrice
     * @return \Pggns\MidocoApi\Order\StructType\TicketPrice
     */
    public function setTicketingPrice(?float $ticketingPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($ticketingPrice) && !(is_float($ticketingPrice) || is_numeric($ticketingPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ticketingPrice, true), gettype($ticketingPrice)), __LINE__);
        }
        $this->ticketingPrice = $ticketingPrice;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TicketPrice
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($currency) && mb_strlen((string) $currency) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get agencyFee value
     * @return float|null
     */
    public function getAgencyFee(): ?float
    {
        return $this->agencyFee;
    }
    /**
     * Set agencyFee value
     * @param float $agencyFee
     * @return \Pggns\MidocoApi\Order\StructType\TicketPrice
     */
    public function setAgencyFee(?float $agencyFee = null): self
    {
        // validation for constraint: float
        if (!is_null($agencyFee) && !(is_float($agencyFee) || is_numeric($agencyFee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($agencyFee, true), gettype($agencyFee)), __LINE__);
        }
        $this->agencyFee = $agencyFee;
        
        return $this;
    }
    /**
     * Get airlineFee value
     * @return float|null
     */
    public function getAirlineFee(): ?float
    {
        return $this->airlineFee;
    }
    /**
     * Set airlineFee value
     * @param float $airlineFee
     * @return \Pggns\MidocoApi\Order\StructType\TicketPrice
     */
    public function setAirlineFee(?float $airlineFee = null): self
    {
        // validation for constraint: float
        if (!is_null($airlineFee) && !(is_float($airlineFee) || is_numeric($airlineFee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($airlineFee, true), gettype($airlineFee)), __LINE__);
        }
        $this->airlineFee = $airlineFee;
        
        return $this;
    }
    /**
     * Get tourCode value
     * @return string|null
     */
    public function getTourCode(): ?string
    {
        return $this->tourCode;
    }
    /**
     * Set tourCode value
     * @param string $tourCode
     * @return \Pggns\MidocoApi\Order\StructType\TicketPrice
     */
    public function setTourCode(?string $tourCode = null): self
    {
        // validation for constraint: string
        if (!is_null($tourCode) && !is_string($tourCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tourCode, true), gettype($tourCode)), __LINE__);
        }
        $this->tourCode = $tourCode;
        
        return $this;
    }
    /**
     * Get endorsement value
     * @return string|null
     */
    public function getEndorsement(): ?string
    {
        return $this->endorsement;
    }
    /**
     * Set endorsement value
     * @param string $endorsement
     * @return \Pggns\MidocoApi\Order\StructType\TicketPrice
     */
    public function setEndorsement(?string $endorsement = null): self
    {
        // validation for constraint: string
        if (!is_null($endorsement) && !is_string($endorsement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endorsement, true), gettype($endorsement)), __LINE__);
        }
        $this->endorsement = $endorsement;
        
        return $this;
    }
    /**
     * Get ticketDesignator value
     * @return string|null
     */
    public function getTicketDesignator(): ?string
    {
        return $this->ticketDesignator;
    }
    /**
     * Set ticketDesignator value
     * @param string $ticketDesignator
     * @return \Pggns\MidocoApi\Order\StructType\TicketPrice
     */
    public function setTicketDesignator(?string $ticketDesignator = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketDesignator) && !is_string($ticketDesignator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketDesignator, true), gettype($ticketDesignator)), __LINE__);
        }
        $this->ticketDesignator = $ticketDesignator;
        
        return $this;
    }
    /**
     * Get cancellationFee value
     * @return float|null
     */
    public function getCancellationFee(): ?float
    {
        return $this->cancellationFee;
    }
    /**
     * Set cancellationFee value
     * @param float $cancellationFee
     * @return \Pggns\MidocoApi\Order\StructType\TicketPrice
     */
    public function setCancellationFee(?float $cancellationFee = null): self
    {
        // validation for constraint: float
        if (!is_null($cancellationFee) && !(is_float($cancellationFee) || is_numeric($cancellationFee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($cancellationFee, true), gettype($cancellationFee)), __LINE__);
        }
        $this->cancellationFee = $cancellationFee;
        
        return $this;
    }
    /**
     * Get commission value
     * @return float|null
     */
    public function getCommission(): ?float
    {
        return $this->commission;
    }
    /**
     * Set commission value
     * @param float $commission
     * @return \Pggns\MidocoApi\Order\StructType\TicketPrice
     */
    public function setCommission(?float $commission = null): self
    {
        // validation for constraint: float
        if (!is_null($commission) && !(is_float($commission) || is_numeric($commission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commission, true), gettype($commission)), __LINE__);
        }
        $this->commission = $commission;
        
        return $this;
    }
    /**
     * Get commissionPercent value
     * @return float|null
     */
    public function getCommissionPercent(): ?float
    {
        return $this->commissionPercent;
    }
    /**
     * Set commissionPercent value
     * @param float $commissionPercent
     * @return \Pggns\MidocoApi\Order\StructType\TicketPrice
     */
    public function setCommissionPercent(?float $commissionPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionPercent) && !(is_float($commissionPercent) || is_numeric($commissionPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionPercent, true), gettype($commissionPercent)), __LINE__);
        }
        $this->commissionPercent = $commissionPercent;
        
        return $this;
    }
    /**
     * Get commissionVatAmount value
     * @return float|null
     */
    public function getCommissionVatAmount(): ?float
    {
        return $this->commissionVatAmount;
    }
    /**
     * Set commissionVatAmount value
     * @param float $commissionVatAmount
     * @return \Pggns\MidocoApi\Order\StructType\TicketPrice
     */
    public function setCommissionVatAmount(?float $commissionVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionVatAmount) && !(is_float($commissionVatAmount) || is_numeric($commissionVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionVatAmount, true), gettype($commissionVatAmount)), __LINE__);
        }
        $this->commissionVatAmount = $commissionVatAmount;
        
        return $this;
    }
}
