<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchAdviceSettlementsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchAdviceSettlementsRequest extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The creationDateFrom
     * @var string|null
     */
    protected ?string $creationDateFrom = null;
    /**
     * The creationDateTo
     * @var string|null
     */
    protected ?string $creationDateTo = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The booked
     * @var bool|null
     */
    protected ?bool $booked = null;
    /**
     * The invoiceDateFrom
     * @var string|null
     */
    protected ?string $invoiceDateFrom = null;
    /**
     * The invoiceDateTo
     * @var string|null
     */
    protected ?string $invoiceDateTo = null;
    /**
     * The invoiceNo
     * @var string|null
     */
    protected ?string $invoiceNo = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The customerSurName
     * @var string|null
     */
    protected ?string $customerSurName = null;
    /**
     * The customerForeName
     * @var string|null
     */
    protected ?string $customerForeName = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The isCommissionOnly
     * @var bool|null
     */
    protected ?bool $isCommissionOnly = null;
    /**
     * The showOnlyInvoicedItems
     * @var bool|null
     */
    protected ?bool $showOnlyInvoicedItems = null;
    /**
     * The invoiceCustomerId
     * @var int|null
     */
    protected ?int $invoiceCustomerId = null;
    /**
     * Constructor method for SearchAdviceSettlementsRequest
     * @uses SearchAdviceSettlementsRequest::setDescription()
     * @uses SearchAdviceSettlementsRequest::setCreationDateFrom()
     * @uses SearchAdviceSettlementsRequest::setCreationDateTo()
     * @uses SearchAdviceSettlementsRequest::setCreationUser()
     * @uses SearchAdviceSettlementsRequest::setBooked()
     * @uses SearchAdviceSettlementsRequest::setInvoiceDateFrom()
     * @uses SearchAdviceSettlementsRequest::setInvoiceDateTo()
     * @uses SearchAdviceSettlementsRequest::setInvoiceNo()
     * @uses SearchAdviceSettlementsRequest::setUnitName()
     * @uses SearchAdviceSettlementsRequest::setCustomerSurName()
     * @uses SearchAdviceSettlementsRequest::setCustomerForeName()
     * @uses SearchAdviceSettlementsRequest::setSettlementId()
     * @uses SearchAdviceSettlementsRequest::setIsCommissionOnly()
     * @uses SearchAdviceSettlementsRequest::setShowOnlyInvoicedItems()
     * @uses SearchAdviceSettlementsRequest::setInvoiceCustomerId()
     * @param string $description
     * @param string $creationDateFrom
     * @param string $creationDateTo
     * @param int $creationUser
     * @param bool $booked
     * @param string $invoiceDateFrom
     * @param string $invoiceDateTo
     * @param string $invoiceNo
     * @param string $unitName
     * @param string $customerSurName
     * @param string $customerForeName
     * @param int $settlementId
     * @param bool $isCommissionOnly
     * @param bool $showOnlyInvoicedItems
     * @param int $invoiceCustomerId
     */
    public function __construct(?string $description = null, ?string $creationDateFrom = null, ?string $creationDateTo = null, ?int $creationUser = null, ?bool $booked = null, ?string $invoiceDateFrom = null, ?string $invoiceDateTo = null, ?string $invoiceNo = null, ?string $unitName = null, ?string $customerSurName = null, ?string $customerForeName = null, ?int $settlementId = null, ?bool $isCommissionOnly = null, ?bool $showOnlyInvoicedItems = null, ?int $invoiceCustomerId = null)
    {
        $this
            ->setDescription($description)
            ->setCreationDateFrom($creationDateFrom)
            ->setCreationDateTo($creationDateTo)
            ->setCreationUser($creationUser)
            ->setBooked($booked)
            ->setInvoiceDateFrom($invoiceDateFrom)
            ->setInvoiceDateTo($invoiceDateTo)
            ->setInvoiceNo($invoiceNo)
            ->setUnitName($unitName)
            ->setCustomerSurName($customerSurName)
            ->setCustomerForeName($customerForeName)
            ->setSettlementId($settlementId)
            ->setIsCommissionOnly($isCommissionOnly)
            ->setShowOnlyInvoicedItems($showOnlyInvoicedItems)
            ->setInvoiceCustomerId($invoiceCustomerId);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\SearchAdviceSettlementsRequest
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get creationDateFrom value
     * @return string|null
     */
    public function getCreationDateFrom(): ?string
    {
        return $this->creationDateFrom;
    }
    /**
     * Set creationDateFrom value
     * @param string $creationDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\SearchAdviceSettlementsRequest
     */
    public function setCreationDateFrom(?string $creationDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateFrom) && !is_string($creationDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateFrom, true), gettype($creationDateFrom)), __LINE__);
        }
        $this->creationDateFrom = $creationDateFrom;
        
        return $this;
    }
    /**
     * Get creationDateTo value
     * @return string|null
     */
    public function getCreationDateTo(): ?string
    {
        return $this->creationDateTo;
    }
    /**
     * Set creationDateTo value
     * @param string $creationDateTo
     * @return \Pggns\MidocoApi\Order\StructType\SearchAdviceSettlementsRequest
     */
    public function setCreationDateTo(?string $creationDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateTo) && !is_string($creationDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateTo, true), gettype($creationDateTo)), __LINE__);
        }
        $this->creationDateTo = $creationDateTo;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\SearchAdviceSettlementsRequest
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get booked value
     * @return bool|null
     */
    public function getBooked(): ?bool
    {
        return $this->booked;
    }
    /**
     * Set booked value
     * @param bool $booked
     * @return \Pggns\MidocoApi\Order\StructType\SearchAdviceSettlementsRequest
     */
    public function setBooked(?bool $booked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($booked) && !is_bool($booked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($booked, true), gettype($booked)), __LINE__);
        }
        $this->booked = $booked;
        
        return $this;
    }
    /**
     * Get invoiceDateFrom value
     * @return string|null
     */
    public function getInvoiceDateFrom(): ?string
    {
        return $this->invoiceDateFrom;
    }
    /**
     * Set invoiceDateFrom value
     * @param string $invoiceDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\SearchAdviceSettlementsRequest
     */
    public function setInvoiceDateFrom(?string $invoiceDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceDateFrom) && !is_string($invoiceDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceDateFrom, true), gettype($invoiceDateFrom)), __LINE__);
        }
        $this->invoiceDateFrom = $invoiceDateFrom;
        
        return $this;
    }
    /**
     * Get invoiceDateTo value
     * @return string|null
     */
    public function getInvoiceDateTo(): ?string
    {
        return $this->invoiceDateTo;
    }
    /**
     * Set invoiceDateTo value
     * @param string $invoiceDateTo
     * @return \Pggns\MidocoApi\Order\StructType\SearchAdviceSettlementsRequest
     */
    public function setInvoiceDateTo(?string $invoiceDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceDateTo) && !is_string($invoiceDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceDateTo, true), gettype($invoiceDateTo)), __LINE__);
        }
        $this->invoiceDateTo = $invoiceDateTo;
        
        return $this;
    }
    /**
     * Get invoiceNo value
     * @return string|null
     */
    public function getInvoiceNo(): ?string
    {
        return $this->invoiceNo;
    }
    /**
     * Set invoiceNo value
     * @param string $invoiceNo
     * @return \Pggns\MidocoApi\Order\StructType\SearchAdviceSettlementsRequest
     */
    public function setInvoiceNo(?string $invoiceNo = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceNo) && !is_string($invoiceNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceNo, true), gettype($invoiceNo)), __LINE__);
        }
        $this->invoiceNo = $invoiceNo;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\SearchAdviceSettlementsRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get customerSurName value
     * @return string|null
     */
    public function getCustomerSurName(): ?string
    {
        return $this->customerSurName;
    }
    /**
     * Set customerSurName value
     * @param string $customerSurName
     * @return \Pggns\MidocoApi\Order\StructType\SearchAdviceSettlementsRequest
     */
    public function setCustomerSurName(?string $customerSurName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerSurName) && !is_string($customerSurName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerSurName, true), gettype($customerSurName)), __LINE__);
        }
        $this->customerSurName = $customerSurName;
        
        return $this;
    }
    /**
     * Get customerForeName value
     * @return string|null
     */
    public function getCustomerForeName(): ?string
    {
        return $this->customerForeName;
    }
    /**
     * Set customerForeName value
     * @param string $customerForeName
     * @return \Pggns\MidocoApi\Order\StructType\SearchAdviceSettlementsRequest
     */
    public function setCustomerForeName(?string $customerForeName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerForeName) && !is_string($customerForeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerForeName, true), gettype($customerForeName)), __LINE__);
        }
        $this->customerForeName = $customerForeName;
        
        return $this;
    }
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\SearchAdviceSettlementsRequest
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
    /**
     * Get isCommissionOnly value
     * @return bool|null
     */
    public function getIsCommissionOnly(): ?bool
    {
        return $this->isCommissionOnly;
    }
    /**
     * Set isCommissionOnly value
     * @param bool $isCommissionOnly
     * @return \Pggns\MidocoApi\Order\StructType\SearchAdviceSettlementsRequest
     */
    public function setIsCommissionOnly(?bool $isCommissionOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCommissionOnly) && !is_bool($isCommissionOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCommissionOnly, true), gettype($isCommissionOnly)), __LINE__);
        }
        $this->isCommissionOnly = $isCommissionOnly;
        
        return $this;
    }
    /**
     * Get showOnlyInvoicedItems value
     * @return bool|null
     */
    public function getShowOnlyInvoicedItems(): ?bool
    {
        return $this->showOnlyInvoicedItems;
    }
    /**
     * Set showOnlyInvoicedItems value
     * @param bool $showOnlyInvoicedItems
     * @return \Pggns\MidocoApi\Order\StructType\SearchAdviceSettlementsRequest
     */
    public function setShowOnlyInvoicedItems(?bool $showOnlyInvoicedItems = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showOnlyInvoicedItems) && !is_bool($showOnlyInvoicedItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showOnlyInvoicedItems, true), gettype($showOnlyInvoicedItems)), __LINE__);
        }
        $this->showOnlyInvoicedItems = $showOnlyInvoicedItems;
        
        return $this;
    }
    /**
     * Get invoiceCustomerId value
     * @return int|null
     */
    public function getInvoiceCustomerId(): ?int
    {
        return $this->invoiceCustomerId;
    }
    /**
     * Set invoiceCustomerId value
     * @param int $invoiceCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\SearchAdviceSettlementsRequest
     */
    public function setInvoiceCustomerId(?int $invoiceCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceCustomerId) && !(is_int($invoiceCustomerId) || ctype_digit($invoiceCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceCustomerId, true), gettype($invoiceCustomerId)), __LINE__);
        }
        $this->invoiceCustomerId = $invoiceCustomerId;
        
        return $this;
    }
}
