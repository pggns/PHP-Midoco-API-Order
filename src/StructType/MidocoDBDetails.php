<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDBDetails StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoDBDetails extends AbstractStructBase
{
    /**
     * The auftrag
     * @var string|null
     */
    protected ?string $auftrag = null;
    /**
     * The lstg
     * @var string|null
     */
    protected ?string $lstg = null;
    /**
     * The lstgId
     * @var string|null
     */
    protected ?string $lstgId = null;
    /**
     * The text
     * @var string|null
     */
    protected ?string $text = null;
    /**
     * The adapter
     * @var string|null
     */
    protected ?string $adapter = null;
    /**
     * The personen
     * @var string|null
     */
    protected ?string $personen = null;
    /**
     * The erm
     * @var string|null
     */
    protected ?string $erm = null;
    /**
     * The tarifText
     * @var string|null
     */
    protected ?string $tarifText = null;
    /**
     * The departure
     * @var string|null
     */
    protected ?string $departure = null;
    /**
     * The destination
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The returnDeparture
     * @var string|null
     */
    protected ?string $returnDeparture = null;
    /**
     * The returnDestination
     * @var string|null
     */
    protected ?string $returnDestination = null;
    /**
     * The companyCustomer
     * @var string|null
     */
    protected ?string $companyCustomer = null;
    /**
     * The trafficType
     * @var string|null
     */
    protected ?string $trafficType = null;
    /**
     * The category
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * The priceType
     * @var string|null
     */
    protected ?string $priceType = null;
    /**
     * The globalPrice
     * @var string|null
     */
    protected ?string $globalPrice = null;
    /**
     * The direction
     * @var string|null
     */
    protected ?string $direction = null;
    /**
     * The bookingClass
     * @var string|null
     */
    protected ?string $bookingClass = null;
    /**
     * The payment
     * @var string|null
     */
    protected ?string $payment = null;
    /**
     * The date
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * The approvalCode
     * @var string|null
     */
    protected ?string $approvalCode = null;
    /**
     * Constructor method for MidocoDBDetails
     * @uses MidocoDBDetails::setAuftrag()
     * @uses MidocoDBDetails::setLstg()
     * @uses MidocoDBDetails::setLstgId()
     * @uses MidocoDBDetails::setText()
     * @uses MidocoDBDetails::setAdapter()
     * @uses MidocoDBDetails::setPersonen()
     * @uses MidocoDBDetails::setErm()
     * @uses MidocoDBDetails::setTarifText()
     * @uses MidocoDBDetails::setDeparture()
     * @uses MidocoDBDetails::setDestination()
     * @uses MidocoDBDetails::setReturnDeparture()
     * @uses MidocoDBDetails::setReturnDestination()
     * @uses MidocoDBDetails::setCompanyCustomer()
     * @uses MidocoDBDetails::setTrafficType()
     * @uses MidocoDBDetails::setCategory()
     * @uses MidocoDBDetails::setPriceType()
     * @uses MidocoDBDetails::setGlobalPrice()
     * @uses MidocoDBDetails::setDirection()
     * @uses MidocoDBDetails::setBookingClass()
     * @uses MidocoDBDetails::setPayment()
     * @uses MidocoDBDetails::setDate()
     * @uses MidocoDBDetails::setApprovalCode()
     * @param string $auftrag
     * @param string $lstg
     * @param string $lstgId
     * @param string $text
     * @param string $adapter
     * @param string $personen
     * @param string $erm
     * @param string $tarifText
     * @param string $departure
     * @param string $destination
     * @param string $returnDeparture
     * @param string $returnDestination
     * @param string $companyCustomer
     * @param string $trafficType
     * @param string $category
     * @param string $priceType
     * @param string $globalPrice
     * @param string $direction
     * @param string $bookingClass
     * @param string $payment
     * @param string $date
     * @param string $approvalCode
     */
    public function __construct(?string $auftrag = null, ?string $lstg = null, ?string $lstgId = null, ?string $text = null, ?string $adapter = null, ?string $personen = null, ?string $erm = null, ?string $tarifText = null, ?string $departure = null, ?string $destination = null, ?string $returnDeparture = null, ?string $returnDestination = null, ?string $companyCustomer = null, ?string $trafficType = null, ?string $category = null, ?string $priceType = null, ?string $globalPrice = null, ?string $direction = null, ?string $bookingClass = null, ?string $payment = null, ?string $date = null, ?string $approvalCode = null)
    {
        $this
            ->setAuftrag($auftrag)
            ->setLstg($lstg)
            ->setLstgId($lstgId)
            ->setText($text)
            ->setAdapter($adapter)
            ->setPersonen($personen)
            ->setErm($erm)
            ->setTarifText($tarifText)
            ->setDeparture($departure)
            ->setDestination($destination)
            ->setReturnDeparture($returnDeparture)
            ->setReturnDestination($returnDestination)
            ->setCompanyCustomer($companyCustomer)
            ->setTrafficType($trafficType)
            ->setCategory($category)
            ->setPriceType($priceType)
            ->setGlobalPrice($globalPrice)
            ->setDirection($direction)
            ->setBookingClass($bookingClass)
            ->setPayment($payment)
            ->setDate($date)
            ->setApprovalCode($approvalCode);
    }
    /**
     * Get auftrag value
     * @return string|null
     */
    public function getAuftrag(): ?string
    {
        return $this->auftrag;
    }
    /**
     * Set auftrag value
     * @param string $auftrag
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDBDetails
     */
    public function setAuftrag(?string $auftrag = null): self
    {
        // validation for constraint: string
        if (!is_null($auftrag) && !is_string($auftrag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($auftrag, true), gettype($auftrag)), __LINE__);
        }
        $this->auftrag = $auftrag;
        
        return $this;
    }
    /**
     * Get lstg value
     * @return string|null
     */
    public function getLstg(): ?string
    {
        return $this->lstg;
    }
    /**
     * Set lstg value
     * @param string $lstg
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDBDetails
     */
    public function setLstg(?string $lstg = null): self
    {
        // validation for constraint: string
        if (!is_null($lstg) && !is_string($lstg)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lstg, true), gettype($lstg)), __LINE__);
        }
        $this->lstg = $lstg;
        
        return $this;
    }
    /**
     * Get lstgId value
     * @return string|null
     */
    public function getLstgId(): ?string
    {
        return $this->lstgId;
    }
    /**
     * Set lstgId value
     * @param string $lstgId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDBDetails
     */
    public function setLstgId(?string $lstgId = null): self
    {
        // validation for constraint: string
        if (!is_null($lstgId) && !is_string($lstgId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lstgId, true), gettype($lstgId)), __LINE__);
        }
        $this->lstgId = $lstgId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDBDetails
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
     * Get adapter value
     * @return string|null
     */
    public function getAdapter(): ?string
    {
        return $this->adapter;
    }
    /**
     * Set adapter value
     * @param string $adapter
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDBDetails
     */
    public function setAdapter(?string $adapter = null): self
    {
        // validation for constraint: string
        if (!is_null($adapter) && !is_string($adapter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adapter, true), gettype($adapter)), __LINE__);
        }
        $this->adapter = $adapter;
        
        return $this;
    }
    /**
     * Get personen value
     * @return string|null
     */
    public function getPersonen(): ?string
    {
        return $this->personen;
    }
    /**
     * Set personen value
     * @param string $personen
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDBDetails
     */
    public function setPersonen(?string $personen = null): self
    {
        // validation for constraint: string
        if (!is_null($personen) && !is_string($personen)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personen, true), gettype($personen)), __LINE__);
        }
        $this->personen = $personen;
        
        return $this;
    }
    /**
     * Get erm value
     * @return string|null
     */
    public function getErm(): ?string
    {
        return $this->erm;
    }
    /**
     * Set erm value
     * @param string $erm
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDBDetails
     */
    public function setErm(?string $erm = null): self
    {
        // validation for constraint: string
        if (!is_null($erm) && !is_string($erm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($erm, true), gettype($erm)), __LINE__);
        }
        $this->erm = $erm;
        
        return $this;
    }
    /**
     * Get tarifText value
     * @return string|null
     */
    public function getTarifText(): ?string
    {
        return $this->tarifText;
    }
    /**
     * Set tarifText value
     * @param string $tarifText
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDBDetails
     */
    public function setTarifText(?string $tarifText = null): self
    {
        // validation for constraint: string
        if (!is_null($tarifText) && !is_string($tarifText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tarifText, true), gettype($tarifText)), __LINE__);
        }
        $this->tarifText = $tarifText;
        
        return $this;
    }
    /**
     * Get departure value
     * @return string|null
     */
    public function getDeparture(): ?string
    {
        return $this->departure;
    }
    /**
     * Set departure value
     * @param string $departure
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDBDetails
     */
    public function setDeparture(?string $departure = null): self
    {
        // validation for constraint: string
        if (!is_null($departure) && !is_string($departure)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure, true), gettype($departure)), __LINE__);
        }
        $this->departure = $departure;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDBDetails
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
     * Get returnDeparture value
     * @return string|null
     */
    public function getReturnDeparture(): ?string
    {
        return $this->returnDeparture;
    }
    /**
     * Set returnDeparture value
     * @param string $returnDeparture
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDBDetails
     */
    public function setReturnDeparture(?string $returnDeparture = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDeparture) && !is_string($returnDeparture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDeparture, true), gettype($returnDeparture)), __LINE__);
        }
        $this->returnDeparture = $returnDeparture;
        
        return $this;
    }
    /**
     * Get returnDestination value
     * @return string|null
     */
    public function getReturnDestination(): ?string
    {
        return $this->returnDestination;
    }
    /**
     * Set returnDestination value
     * @param string $returnDestination
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDBDetails
     */
    public function setReturnDestination(?string $returnDestination = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDestination) && !is_string($returnDestination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDestination, true), gettype($returnDestination)), __LINE__);
        }
        $this->returnDestination = $returnDestination;
        
        return $this;
    }
    /**
     * Get companyCustomer value
     * @return string|null
     */
    public function getCompanyCustomer(): ?string
    {
        return $this->companyCustomer;
    }
    /**
     * Set companyCustomer value
     * @param string $companyCustomer
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDBDetails
     */
    public function setCompanyCustomer(?string $companyCustomer = null): self
    {
        // validation for constraint: string
        if (!is_null($companyCustomer) && !is_string($companyCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyCustomer, true), gettype($companyCustomer)), __LINE__);
        }
        $this->companyCustomer = $companyCustomer;
        
        return $this;
    }
    /**
     * Get trafficType value
     * @return string|null
     */
    public function getTrafficType(): ?string
    {
        return $this->trafficType;
    }
    /**
     * Set trafficType value
     * @param string $trafficType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDBDetails
     */
    public function setTrafficType(?string $trafficType = null): self
    {
        // validation for constraint: string
        if (!is_null($trafficType) && !is_string($trafficType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trafficType, true), gettype($trafficType)), __LINE__);
        }
        $this->trafficType = $trafficType;
        
        return $this;
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDBDetails
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        
        return $this;
    }
    /**
     * Get priceType value
     * @return string|null
     */
    public function getPriceType(): ?string
    {
        return $this->priceType;
    }
    /**
     * Set priceType value
     * @param string $priceType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDBDetails
     */
    public function setPriceType(?string $priceType = null): self
    {
        // validation for constraint: string
        if (!is_null($priceType) && !is_string($priceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($priceType, true), gettype($priceType)), __LINE__);
        }
        $this->priceType = $priceType;
        
        return $this;
    }
    /**
     * Get globalPrice value
     * @return string|null
     */
    public function getGlobalPrice(): ?string
    {
        return $this->globalPrice;
    }
    /**
     * Set globalPrice value
     * @param string $globalPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDBDetails
     */
    public function setGlobalPrice(?string $globalPrice = null): self
    {
        // validation for constraint: string
        if (!is_null($globalPrice) && !is_string($globalPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($globalPrice, true), gettype($globalPrice)), __LINE__);
        }
        $this->globalPrice = $globalPrice;
        
        return $this;
    }
    /**
     * Get direction value
     * @return string|null
     */
    public function getDirection(): ?string
    {
        return $this->direction;
    }
    /**
     * Set direction value
     * @param string $direction
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDBDetails
     */
    public function setDirection(?string $direction = null): self
    {
        // validation for constraint: string
        if (!is_null($direction) && !is_string($direction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($direction, true), gettype($direction)), __LINE__);
        }
        $this->direction = $direction;
        
        return $this;
    }
    /**
     * Get bookingClass value
     * @return string|null
     */
    public function getBookingClass(): ?string
    {
        return $this->bookingClass;
    }
    /**
     * Set bookingClass value
     * @param string $bookingClass
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDBDetails
     */
    public function setBookingClass(?string $bookingClass = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingClass) && !is_string($bookingClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingClass, true), gettype($bookingClass)), __LINE__);
        }
        $this->bookingClass = $bookingClass;
        
        return $this;
    }
    /**
     * Get payment value
     * @return string|null
     */
    public function getPayment(): ?string
    {
        return $this->payment;
    }
    /**
     * Set payment value
     * @param string $payment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDBDetails
     */
    public function setPayment(?string $payment = null): self
    {
        // validation for constraint: string
        if (!is_null($payment) && !is_string($payment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payment, true), gettype($payment)), __LINE__);
        }
        $this->payment = $payment;
        
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDBDetails
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        
        return $this;
    }
    /**
     * Get approvalCode value
     * @return string|null
     */
    public function getApprovalCode(): ?string
    {
        return $this->approvalCode;
    }
    /**
     * Set approvalCode value
     * @param string $approvalCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDBDetails
     */
    public function setApprovalCode(?string $approvalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($approvalCode) && !is_string($approvalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approvalCode, true), gettype($approvalCode)), __LINE__);
        }
        $this->approvalCode = $approvalCode;
        
        return $this;
    }
}
