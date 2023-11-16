<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSearchOrderCriteriaType StructType
 * @subpackage Structs
 */
class MidocoSearchOrderCriteriaType extends AbstractStructBase
{
    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The surname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $surname = null;
    /**
     * The forename
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The orderNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $orderNo = null;
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The billingNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $billingNo = null;
    /**
     * The travelStartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelStartDate = null;
    /**
     * The travelEndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelEndDate = null;
    /**
     * The creationStartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $creationStartDate = null;
    /**
     * The creationEndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $creationEndDate = null;
    /**
     * The createdByUserId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $createdByUserId = null;
    /**
     * The orgunitName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $orgunitName = null;
    /**
     * The crsBookingId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $crsBookingId = null;
    /**
     * The sellItemId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $sellItemId = null;
    /**
     * The mediatorId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The mediatorAffiliate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mediatorAffiliate = null;
    /**
     * The tourOperatorId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $tourOperatorId = null;
    /**
     * The invoiceNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $invoiceNo = null;
    /**
     * The ticketNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ticketNo = null;
    /**
     * The agencyId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The newOrders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $newOrders = null;
    /**
     * The ccNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ccNumber = null;
    /**
     * The ccReceiptNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ccReceiptNo = null;
    /**
     * The ccApprovalCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ccApprovalCode = null;
    /**
     * The groupReservation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $groupReservation = null;
    /**
     * The groupName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $groupName = null;
    /**
     * The zeroprice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $zeroprice = null;
    /**
     * The railDocumentNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $railDocumentNo = null;
    /**
     * The debitorNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The includePassengers
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $includePassengers = null;
    /**
     * The customerType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerType = null;
    /**
     * The travelNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * The travelNoHandligType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelNoHandligType = null;
    /**
     * The mandateReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mandateReference = null;
    /**
     * The includeSuborders
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $includeSuborders = null;
    /**
     * The subordersAllowed
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $subordersAllowed = null;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The postalCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The street
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The sellItemAttributeValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sellItemAttributeValue = null;
    /**
     * The settlementType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $settlementType = null;
    /**
     * The serviceStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceStatus = null;
    /**
     * The baseBuyingPriceFrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $baseBuyingPriceFrom = null;
    /**
     * The baseBuyingPriceTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $baseBuyingPriceTo = null;
    /**
     * The includeAlreadySettledItems
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $includeAlreadySettledItems = null;
    /**
     * Constructor method for MidocoSearchOrderCriteriaType
     * @uses MidocoSearchOrderCriteriaType::setCustomerId()
     * @uses MidocoSearchOrderCriteriaType::setSurname()
     * @uses MidocoSearchOrderCriteriaType::setForename()
     * @uses MidocoSearchOrderCriteriaType::setOrderNo()
     * @uses MidocoSearchOrderCriteriaType::setOrderId()
     * @uses MidocoSearchOrderCriteriaType::setBillingNo()
     * @uses MidocoSearchOrderCriteriaType::setTravelStartDate()
     * @uses MidocoSearchOrderCriteriaType::setTravelEndDate()
     * @uses MidocoSearchOrderCriteriaType::setCreationStartDate()
     * @uses MidocoSearchOrderCriteriaType::setCreationEndDate()
     * @uses MidocoSearchOrderCriteriaType::setCreatedByUserId()
     * @uses MidocoSearchOrderCriteriaType::setOrgunitName()
     * @uses MidocoSearchOrderCriteriaType::setCrsBookingId()
     * @uses MidocoSearchOrderCriteriaType::setSellItemId()
     * @uses MidocoSearchOrderCriteriaType::setMediatorId()
     * @uses MidocoSearchOrderCriteriaType::setMediatorAffiliate()
     * @uses MidocoSearchOrderCriteriaType::setTourOperatorId()
     * @uses MidocoSearchOrderCriteriaType::setInvoiceNo()
     * @uses MidocoSearchOrderCriteriaType::setTicketNo()
     * @uses MidocoSearchOrderCriteriaType::setAgencyId()
     * @uses MidocoSearchOrderCriteriaType::setNewOrders()
     * @uses MidocoSearchOrderCriteriaType::setCcNumber()
     * @uses MidocoSearchOrderCriteriaType::setCcReceiptNo()
     * @uses MidocoSearchOrderCriteriaType::setCcApprovalCode()
     * @uses MidocoSearchOrderCriteriaType::setGroupReservation()
     * @uses MidocoSearchOrderCriteriaType::setGroupName()
     * @uses MidocoSearchOrderCriteriaType::setZeroprice()
     * @uses MidocoSearchOrderCriteriaType::setRailDocumentNo()
     * @uses MidocoSearchOrderCriteriaType::setDebitorNo()
     * @uses MidocoSearchOrderCriteriaType::setIncludePassengers()
     * @uses MidocoSearchOrderCriteriaType::setCustomerType()
     * @uses MidocoSearchOrderCriteriaType::setTravelNo()
     * @uses MidocoSearchOrderCriteriaType::setTravelNoHandligType()
     * @uses MidocoSearchOrderCriteriaType::setMandateReference()
     * @uses MidocoSearchOrderCriteriaType::setIncludeSuborders()
     * @uses MidocoSearchOrderCriteriaType::setSubordersAllowed()
     * @uses MidocoSearchOrderCriteriaType::setCity()
     * @uses MidocoSearchOrderCriteriaType::setPostalCode()
     * @uses MidocoSearchOrderCriteriaType::setStreet()
     * @uses MidocoSearchOrderCriteriaType::setSellItemAttributeValue()
     * @uses MidocoSearchOrderCriteriaType::setSettlementType()
     * @uses MidocoSearchOrderCriteriaType::setServiceStatus()
     * @uses MidocoSearchOrderCriteriaType::setBaseBuyingPriceFrom()
     * @uses MidocoSearchOrderCriteriaType::setBaseBuyingPriceTo()
     * @uses MidocoSearchOrderCriteriaType::setIncludeAlreadySettledItems()
     * @param int $customerId
     * @param string $surname
     * @param string $forename
     * @param string $orderNo
     * @param int $orderId
     * @param int $billingNo
     * @param string $travelStartDate
     * @param string $travelEndDate
     * @param string $creationStartDate
     * @param string $creationEndDate
     * @param int $createdByUserId
     * @param string $orgunitName
     * @param string $crsBookingId
     * @param int $sellItemId
     * @param string $mediatorId
     * @param string $mediatorAffiliate
     * @param string $tourOperatorId
     * @param int $invoiceNo
     * @param string $ticketNo
     * @param string $agencyId
     * @param bool $newOrders
     * @param string $ccNumber
     * @param int $ccReceiptNo
     * @param string $ccApprovalCode
     * @param bool $groupReservation
     * @param string $groupName
     * @param bool $zeroprice
     * @param string $railDocumentNo
     * @param string $debitorNo
     * @param bool $includePassengers
     * @param string $customerType
     * @param string $travelNo
     * @param string $travelNoHandligType
     * @param string $mandateReference
     * @param bool $includeSuborders
     * @param bool $subordersAllowed
     * @param string $city
     * @param string $postalCode
     * @param string $street
     * @param string $sellItemAttributeValue
     * @param string $settlementType
     * @param string $serviceStatus
     * @param float $baseBuyingPriceFrom
     * @param float $baseBuyingPriceTo
     * @param bool $includeAlreadySettledItems
     */
    public function __construct(?int $customerId = null, ?string $surname = null, ?string $forename = null, ?string $orderNo = null, ?int $orderId = null, ?int $billingNo = null, ?string $travelStartDate = null, ?string $travelEndDate = null, ?string $creationStartDate = null, ?string $creationEndDate = null, ?int $createdByUserId = null, ?string $orgunitName = null, ?string $crsBookingId = null, ?int $sellItemId = null, ?string $mediatorId = null, ?string $mediatorAffiliate = null, ?string $tourOperatorId = null, ?int $invoiceNo = null, ?string $ticketNo = null, ?string $agencyId = null, ?bool $newOrders = null, ?string $ccNumber = null, ?int $ccReceiptNo = null, ?string $ccApprovalCode = null, ?bool $groupReservation = null, ?string $groupName = null, ?bool $zeroprice = null, ?string $railDocumentNo = null, ?string $debitorNo = null, ?bool $includePassengers = false, ?string $customerType = null, ?string $travelNo = null, ?string $travelNoHandligType = null, ?string $mandateReference = null, ?bool $includeSuborders = false, ?bool $subordersAllowed = false, ?string $city = null, ?string $postalCode = null, ?string $street = null, ?string $sellItemAttributeValue = null, ?string $settlementType = null, ?string $serviceStatus = null, ?float $baseBuyingPriceFrom = null, ?float $baseBuyingPriceTo = null, ?bool $includeAlreadySettledItems = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setSurname($surname)
            ->setForename($forename)
            ->setOrderNo($orderNo)
            ->setOrderId($orderId)
            ->setBillingNo($billingNo)
            ->setTravelStartDate($travelStartDate)
            ->setTravelEndDate($travelEndDate)
            ->setCreationStartDate($creationStartDate)
            ->setCreationEndDate($creationEndDate)
            ->setCreatedByUserId($createdByUserId)
            ->setOrgunitName($orgunitName)
            ->setCrsBookingId($crsBookingId)
            ->setSellItemId($sellItemId)
            ->setMediatorId($mediatorId)
            ->setMediatorAffiliate($mediatorAffiliate)
            ->setTourOperatorId($tourOperatorId)
            ->setInvoiceNo($invoiceNo)
            ->setTicketNo($ticketNo)
            ->setAgencyId($agencyId)
            ->setNewOrders($newOrders)
            ->setCcNumber($ccNumber)
            ->setCcReceiptNo($ccReceiptNo)
            ->setCcApprovalCode($ccApprovalCode)
            ->setGroupReservation($groupReservation)
            ->setGroupName($groupName)
            ->setZeroprice($zeroprice)
            ->setRailDocumentNo($railDocumentNo)
            ->setDebitorNo($debitorNo)
            ->setIncludePassengers($includePassengers)
            ->setCustomerType($customerType)
            ->setTravelNo($travelNo)
            ->setTravelNoHandligType($travelNoHandligType)
            ->setMandateReference($mandateReference)
            ->setIncludeSuborders($includeSuborders)
            ->setSubordersAllowed($subordersAllowed)
            ->setCity($city)
            ->setPostalCode($postalCode)
            ->setStreet($street)
            ->setSellItemAttributeValue($sellItemAttributeValue)
            ->setSettlementType($settlementType)
            ->setServiceStatus($serviceStatus)
            ->setBaseBuyingPriceFrom($baseBuyingPriceFrom)
            ->setBaseBuyingPriceTo($baseBuyingPriceTo)
            ->setIncludeAlreadySettledItems($includeAlreadySettledItems);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get surname value
     * @return string|null
     */
    public function getSurname(): ?string
    {
        return $this->surname;
    }
    /**
     * Set surname value
     * @param string $surname
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setSurname(?string $surname = null): self
    {
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surname, true), gettype($surname)), __LINE__);
        }
        $this->surname = $surname;
        
        return $this;
    }
    /**
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return string|null
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param string $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setOrderNo(?string $orderNo = null): self
    {
        // validation for constraint: string
        if (!is_null($orderNo) && !is_string($orderNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
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
     * Get billingNo value
     * @return int|null
     */
    public function getBillingNo(): ?int
    {
        return $this->billingNo;
    }
    /**
     * Set billingNo value
     * @param int $billingNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setBillingNo(?int $billingNo = null): self
    {
        // validation for constraint: int
        if (!is_null($billingNo) && !(is_int($billingNo) || ctype_digit($billingNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($billingNo, true), gettype($billingNo)), __LINE__);
        }
        $this->billingNo = $billingNo;
        
        return $this;
    }
    /**
     * Get travelStartDate value
     * @return string|null
     */
    public function getTravelStartDate(): ?string
    {
        return $this->travelStartDate;
    }
    /**
     * Set travelStartDate value
     * @param string $travelStartDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setTravelStartDate(?string $travelStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelStartDate) && !is_string($travelStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelStartDate, true), gettype($travelStartDate)), __LINE__);
        }
        $this->travelStartDate = $travelStartDate;
        
        return $this;
    }
    /**
     * Get travelEndDate value
     * @return string|null
     */
    public function getTravelEndDate(): ?string
    {
        return $this->travelEndDate;
    }
    /**
     * Set travelEndDate value
     * @param string $travelEndDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setTravelEndDate(?string $travelEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelEndDate) && !is_string($travelEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelEndDate, true), gettype($travelEndDate)), __LINE__);
        }
        $this->travelEndDate = $travelEndDate;
        
        return $this;
    }
    /**
     * Get creationStartDate value
     * @return string|null
     */
    public function getCreationStartDate(): ?string
    {
        return $this->creationStartDate;
    }
    /**
     * Set creationStartDate value
     * @param string $creationStartDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setCreationStartDate(?string $creationStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationStartDate) && !is_string($creationStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationStartDate, true), gettype($creationStartDate)), __LINE__);
        }
        $this->creationStartDate = $creationStartDate;
        
        return $this;
    }
    /**
     * Get creationEndDate value
     * @return string|null
     */
    public function getCreationEndDate(): ?string
    {
        return $this->creationEndDate;
    }
    /**
     * Set creationEndDate value
     * @param string $creationEndDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setCreationEndDate(?string $creationEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationEndDate) && !is_string($creationEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationEndDate, true), gettype($creationEndDate)), __LINE__);
        }
        $this->creationEndDate = $creationEndDate;
        
        return $this;
    }
    /**
     * Get createdByUserId value
     * @return int|null
     */
    public function getCreatedByUserId(): ?int
    {
        return $this->createdByUserId;
    }
    /**
     * Set createdByUserId value
     * @param int $createdByUserId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setCreatedByUserId(?int $createdByUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($createdByUserId) && !(is_int($createdByUserId) || ctype_digit($createdByUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($createdByUserId, true), gettype($createdByUserId)), __LINE__);
        }
        $this->createdByUserId = $createdByUserId;
        
        return $this;
    }
    /**
     * Get orgunitName value
     * @return string|null
     */
    public function getOrgunitName(): ?string
    {
        return $this->orgunitName;
    }
    /**
     * Set orgunitName value
     * @param string $orgunitName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setOrgunitName(?string $orgunitName = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunitName) && !is_string($orgunitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunitName, true), gettype($orgunitName)), __LINE__);
        }
        $this->orgunitName = $orgunitName;
        
        return $this;
    }
    /**
     * Get crsBookingId value
     * @return string|null
     */
    public function getCrsBookingId(): ?string
    {
        return $this->crsBookingId;
    }
    /**
     * Set crsBookingId value
     * @param string $crsBookingId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setCrsBookingId(?string $crsBookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($crsBookingId) && !is_string($crsBookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crsBookingId, true), gettype($crsBookingId)), __LINE__);
        }
        $this->crsBookingId = $crsBookingId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
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
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get mediatorAffiliate value
     * @return string|null
     */
    public function getMediatorAffiliate(): ?string
    {
        return $this->mediatorAffiliate;
    }
    /**
     * Set mediatorAffiliate value
     * @param string $mediatorAffiliate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setMediatorAffiliate(?string $mediatorAffiliate = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorAffiliate) && !is_string($mediatorAffiliate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorAffiliate, true), gettype($mediatorAffiliate)), __LINE__);
        }
        $this->mediatorAffiliate = $mediatorAffiliate;
        
        return $this;
    }
    /**
     * Get tourOperatorId value
     * @return string|null
     */
    public function getTourOperatorId(): ?string
    {
        return $this->tourOperatorId;
    }
    /**
     * Set tourOperatorId value
     * @param string $tourOperatorId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setTourOperatorId(?string $tourOperatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($tourOperatorId) && !is_string($tourOperatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tourOperatorId, true), gettype($tourOperatorId)), __LINE__);
        }
        $this->tourOperatorId = $tourOperatorId;
        
        return $this;
    }
    /**
     * Get invoiceNo value
     * @return int|null
     */
    public function getInvoiceNo(): ?int
    {
        return $this->invoiceNo;
    }
    /**
     * Set invoiceNo value
     * @param int $invoiceNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setInvoiceNo(?int $invoiceNo = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceNo) && !(is_int($invoiceNo) || ctype_digit($invoiceNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceNo, true), gettype($invoiceNo)), __LINE__);
        }
        $this->invoiceNo = $invoiceNo;
        
        return $this;
    }
    /**
     * Get ticketNo value
     * @return string|null
     */
    public function getTicketNo(): ?string
    {
        return $this->ticketNo;
    }
    /**
     * Set ticketNo value
     * @param string $ticketNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setTicketNo(?string $ticketNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketNo) && !is_string($ticketNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNo, true), gettype($ticketNo)), __LINE__);
        }
        $this->ticketNo = $ticketNo;
        
        return $this;
    }
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get newOrders value
     * @return bool|null
     */
    public function getNewOrders(): ?bool
    {
        return $this->newOrders;
    }
    /**
     * Set newOrders value
     * @param bool $newOrders
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setNewOrders(?bool $newOrders = null): self
    {
        // validation for constraint: boolean
        if (!is_null($newOrders) && !is_bool($newOrders)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($newOrders, true), gettype($newOrders)), __LINE__);
        }
        $this->newOrders = $newOrders;
        
        return $this;
    }
    /**
     * Get ccNumber value
     * @return string|null
     */
    public function getCcNumber(): ?string
    {
        return $this->ccNumber;
    }
    /**
     * Set ccNumber value
     * @param string $ccNumber
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setCcNumber(?string $ccNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($ccNumber) && !is_string($ccNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNumber, true), gettype($ccNumber)), __LINE__);
        }
        $this->ccNumber = $ccNumber;
        
        return $this;
    }
    /**
     * Get ccReceiptNo value
     * @return int|null
     */
    public function getCcReceiptNo(): ?int
    {
        return $this->ccReceiptNo;
    }
    /**
     * Set ccReceiptNo value
     * @param int $ccReceiptNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setCcReceiptNo(?int $ccReceiptNo = null): self
    {
        // validation for constraint: int
        if (!is_null($ccReceiptNo) && !(is_int($ccReceiptNo) || ctype_digit($ccReceiptNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccReceiptNo, true), gettype($ccReceiptNo)), __LINE__);
        }
        $this->ccReceiptNo = $ccReceiptNo;
        
        return $this;
    }
    /**
     * Get ccApprovalCode value
     * @return string|null
     */
    public function getCcApprovalCode(): ?string
    {
        return $this->ccApprovalCode;
    }
    /**
     * Set ccApprovalCode value
     * @param string $ccApprovalCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setCcApprovalCode(?string $ccApprovalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($ccApprovalCode) && !is_string($ccApprovalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccApprovalCode, true), gettype($ccApprovalCode)), __LINE__);
        }
        $this->ccApprovalCode = $ccApprovalCode;
        
        return $this;
    }
    /**
     * Get groupReservation value
     * @return bool|null
     */
    public function getGroupReservation(): ?bool
    {
        return $this->groupReservation;
    }
    /**
     * Set groupReservation value
     * @param bool $groupReservation
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setGroupReservation(?bool $groupReservation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($groupReservation) && !is_bool($groupReservation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($groupReservation, true), gettype($groupReservation)), __LINE__);
        }
        $this->groupReservation = $groupReservation;
        
        return $this;
    }
    /**
     * Get groupName value
     * @return string|null
     */
    public function getGroupName(): ?string
    {
        return $this->groupName;
    }
    /**
     * Set groupName value
     * @param string $groupName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setGroupName(?string $groupName = null): self
    {
        // validation for constraint: string
        if (!is_null($groupName) && !is_string($groupName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupName, true), gettype($groupName)), __LINE__);
        }
        $this->groupName = $groupName;
        
        return $this;
    }
    /**
     * Get zeroprice value
     * @return bool|null
     */
    public function getZeroprice(): ?bool
    {
        return $this->zeroprice;
    }
    /**
     * Set zeroprice value
     * @param bool $zeroprice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setZeroprice(?bool $zeroprice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($zeroprice) && !is_bool($zeroprice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($zeroprice, true), gettype($zeroprice)), __LINE__);
        }
        $this->zeroprice = $zeroprice;
        
        return $this;
    }
    /**
     * Get railDocumentNo value
     * @return string|null
     */
    public function getRailDocumentNo(): ?string
    {
        return $this->railDocumentNo;
    }
    /**
     * Set railDocumentNo value
     * @param string $railDocumentNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setRailDocumentNo(?string $railDocumentNo = null): self
    {
        // validation for constraint: string
        if (!is_null($railDocumentNo) && !is_string($railDocumentNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($railDocumentNo, true), gettype($railDocumentNo)), __LINE__);
        }
        $this->railDocumentNo = $railDocumentNo;
        
        return $this;
    }
    /**
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
    /**
     * Get includePassengers value
     * @return bool|null
     */
    public function getIncludePassengers(): ?bool
    {
        return $this->includePassengers;
    }
    /**
     * Set includePassengers value
     * @param bool $includePassengers
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setIncludePassengers(?bool $includePassengers = false): self
    {
        // validation for constraint: boolean
        if (!is_null($includePassengers) && !is_bool($includePassengers)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includePassengers, true), gettype($includePassengers)), __LINE__);
        }
        $this->includePassengers = $includePassengers;
        
        return $this;
    }
    /**
     * Get customerType value
     * @return string|null
     */
    public function getCustomerType(): ?string
    {
        return $this->customerType;
    }
    /**
     * Set customerType value
     * @param string $customerType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setCustomerType(?string $customerType = null): self
    {
        // validation for constraint: string
        if (!is_null($customerType) && !is_string($customerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerType, true), gettype($customerType)), __LINE__);
        }
        $this->customerType = $customerType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
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
    /**
     * Get travelNoHandligType value
     * @return string|null
     */
    public function getTravelNoHandligType(): ?string
    {
        return $this->travelNoHandligType;
    }
    /**
     * Set travelNoHandligType value
     * @param string $travelNoHandligType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setTravelNoHandligType(?string $travelNoHandligType = null): self
    {
        // validation for constraint: string
        if (!is_null($travelNoHandligType) && !is_string($travelNoHandligType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelNoHandligType, true), gettype($travelNoHandligType)), __LINE__);
        }
        $this->travelNoHandligType = $travelNoHandligType;
        
        return $this;
    }
    /**
     * Get mandateReference value
     * @return string|null
     */
    public function getMandateReference(): ?string
    {
        return $this->mandateReference;
    }
    /**
     * Set mandateReference value
     * @param string $mandateReference
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setMandateReference(?string $mandateReference = null): self
    {
        // validation for constraint: string
        if (!is_null($mandateReference) && !is_string($mandateReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandateReference, true), gettype($mandateReference)), __LINE__);
        }
        $this->mandateReference = $mandateReference;
        
        return $this;
    }
    /**
     * Get includeSuborders value
     * @return bool|null
     */
    public function getIncludeSuborders(): ?bool
    {
        return $this->includeSuborders;
    }
    /**
     * Set includeSuborders value
     * @param bool $includeSuborders
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setIncludeSuborders(?bool $includeSuborders = false): self
    {
        // validation for constraint: boolean
        if (!is_null($includeSuborders) && !is_bool($includeSuborders)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeSuborders, true), gettype($includeSuborders)), __LINE__);
        }
        $this->includeSuborders = $includeSuborders;
        
        return $this;
    }
    /**
     * Get subordersAllowed value
     * @return bool|null
     */
    public function getSubordersAllowed(): ?bool
    {
        return $this->subordersAllowed;
    }
    /**
     * Set subordersAllowed value
     * @param bool $subordersAllowed
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setSubordersAllowed(?bool $subordersAllowed = false): self
    {
        // validation for constraint: boolean
        if (!is_null($subordersAllowed) && !is_bool($subordersAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($subordersAllowed, true), gettype($subordersAllowed)), __LINE__);
        }
        $this->subordersAllowed = $subordersAllowed;
        
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get postalCode value
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }
    /**
     * Set postalCode value
     * @param string $postalCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        $this->postalCode = $postalCode;
        
        return $this;
    }
    /**
     * Get street value
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        $this->street = $street;
        
        return $this;
    }
    /**
     * Get sellItemAttributeValue value
     * @return string|null
     */
    public function getSellItemAttributeValue(): ?string
    {
        return $this->sellItemAttributeValue;
    }
    /**
     * Set sellItemAttributeValue value
     * @param string $sellItemAttributeValue
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setSellItemAttributeValue(?string $sellItemAttributeValue = null): self
    {
        // validation for constraint: string
        if (!is_null($sellItemAttributeValue) && !is_string($sellItemAttributeValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellItemAttributeValue, true), gettype($sellItemAttributeValue)), __LINE__);
        }
        $this->sellItemAttributeValue = $sellItemAttributeValue;
        
        return $this;
    }
    /**
     * Get settlementType value
     * @return string|null
     */
    public function getSettlementType(): ?string
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param string $settlementType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setSettlementType(?string $settlementType = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementType) && !is_string($settlementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
        return $this;
    }
    /**
     * Get serviceStatus value
     * @return string|null
     */
    public function getServiceStatus(): ?string
    {
        return $this->serviceStatus;
    }
    /**
     * Set serviceStatus value
     * @param string $serviceStatus
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setServiceStatus(?string $serviceStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceStatus) && !is_string($serviceStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceStatus, true), gettype($serviceStatus)), __LINE__);
        }
        $this->serviceStatus = $serviceStatus;
        
        return $this;
    }
    /**
     * Get baseBuyingPriceFrom value
     * @return float|null
     */
    public function getBaseBuyingPriceFrom(): ?float
    {
        return $this->baseBuyingPriceFrom;
    }
    /**
     * Set baseBuyingPriceFrom value
     * @param float $baseBuyingPriceFrom
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setBaseBuyingPriceFrom(?float $baseBuyingPriceFrom = null): self
    {
        // validation for constraint: float
        if (!is_null($baseBuyingPriceFrom) && !(is_float($baseBuyingPriceFrom) || is_numeric($baseBuyingPriceFrom))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($baseBuyingPriceFrom, true), gettype($baseBuyingPriceFrom)), __LINE__);
        }
        $this->baseBuyingPriceFrom = $baseBuyingPriceFrom;
        
        return $this;
    }
    /**
     * Get baseBuyingPriceTo value
     * @return float|null
     */
    public function getBaseBuyingPriceTo(): ?float
    {
        return $this->baseBuyingPriceTo;
    }
    /**
     * Set baseBuyingPriceTo value
     * @param float $baseBuyingPriceTo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setBaseBuyingPriceTo(?float $baseBuyingPriceTo = null): self
    {
        // validation for constraint: float
        if (!is_null($baseBuyingPriceTo) && !(is_float($baseBuyingPriceTo) || is_numeric($baseBuyingPriceTo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($baseBuyingPriceTo, true), gettype($baseBuyingPriceTo)), __LINE__);
        }
        $this->baseBuyingPriceTo = $baseBuyingPriceTo;
        
        return $this;
    }
    /**
     * Get includeAlreadySettledItems value
     * @return bool|null
     */
    public function getIncludeAlreadySettledItems(): ?bool
    {
        return $this->includeAlreadySettledItems;
    }
    /**
     * Set includeAlreadySettledItems value
     * @param bool $includeAlreadySettledItems
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
     */
    public function setIncludeAlreadySettledItems(?bool $includeAlreadySettledItems = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeAlreadySettledItems) && !is_bool($includeAlreadySettledItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeAlreadySettledItems, true), gettype($includeAlreadySettledItems)), __LINE__);
        }
        $this->includeAlreadySettledItems = $includeAlreadySettledItems;
        
        return $this;
    }
}
