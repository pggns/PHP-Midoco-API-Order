<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CollectInvSettingDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CollectInvSettingDTO extends AbstractStructBase
{
    /**
     * The billingPerCustomerCostCentre
     * @var bool|null
     */
    protected ?bool $billingPerCustomerCostCentre = null;
    /**
     * The billingPerItemCreationUser
     * @var bool|null
     */
    protected ?bool $billingPerItemCreationUser = null;
    /**
     * The creditCardType
     * @var string|null
     */
    protected ?string $creditCardType = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The dedicatedCreditCardNo
     * @var string|null
     */
    protected ?string $dedicatedCreditCardNo = null;
    /**
     * The dedicatedCreditCardType
     * @var string|null
     */
    protected ?string $dedicatedCreditCardType = null;
    /**
     * The immediatePayment
     * @var bool|null
     */
    protected ?bool $immediatePayment = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The scheduled
     * @var int|null
     */
    protected ?int $scheduled = null;
    /**
     * The settingId
     * @var int|null
     */
    protected ?int $settingId = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The useDepartureDateReference
     * @var bool|null
     */
    protected ?bool $useDepartureDateReference = null;
    /**
     * Constructor method for CollectInvSettingDTO
     * @uses CollectInvSettingDTO::setBillingPerCustomerCostCentre()
     * @uses CollectInvSettingDTO::setBillingPerItemCreationUser()
     * @uses CollectInvSettingDTO::setCreditCardType()
     * @uses CollectInvSettingDTO::setCustomerId()
     * @uses CollectInvSettingDTO::setDedicatedCreditCardNo()
     * @uses CollectInvSettingDTO::setDedicatedCreditCardType()
     * @uses CollectInvSettingDTO::setImmediatePayment()
     * @uses CollectInvSettingDTO::setItemType()
     * @uses CollectInvSettingDTO::setScheduled()
     * @uses CollectInvSettingDTO::setSettingId()
     * @uses CollectInvSettingDTO::setSupplierId()
     * @uses CollectInvSettingDTO::setUseDepartureDateReference()
     * @param bool $billingPerCustomerCostCentre
     * @param bool $billingPerItemCreationUser
     * @param string $creditCardType
     * @param int $customerId
     * @param string $dedicatedCreditCardNo
     * @param string $dedicatedCreditCardType
     * @param bool $immediatePayment
     * @param string $itemType
     * @param int $scheduled
     * @param int $settingId
     * @param string $supplierId
     * @param bool $useDepartureDateReference
     */
    public function __construct(?bool $billingPerCustomerCostCentre = null, ?bool $billingPerItemCreationUser = null, ?string $creditCardType = null, ?int $customerId = null, ?string $dedicatedCreditCardNo = null, ?string $dedicatedCreditCardType = null, ?bool $immediatePayment = null, ?string $itemType = null, ?int $scheduled = null, ?int $settingId = null, ?string $supplierId = null, ?bool $useDepartureDateReference = null)
    {
        $this
            ->setBillingPerCustomerCostCentre($billingPerCustomerCostCentre)
            ->setBillingPerItemCreationUser($billingPerItemCreationUser)
            ->setCreditCardType($creditCardType)
            ->setCustomerId($customerId)
            ->setDedicatedCreditCardNo($dedicatedCreditCardNo)
            ->setDedicatedCreditCardType($dedicatedCreditCardType)
            ->setImmediatePayment($immediatePayment)
            ->setItemType($itemType)
            ->setScheduled($scheduled)
            ->setSettingId($settingId)
            ->setSupplierId($supplierId)
            ->setUseDepartureDateReference($useDepartureDateReference);
    }
    /**
     * Get billingPerCustomerCostCentre value
     * @return bool|null
     */
    public function getBillingPerCustomerCostCentre(): ?bool
    {
        return $this->billingPerCustomerCostCentre;
    }
    /**
     * Set billingPerCustomerCostCentre value
     * @param bool $billingPerCustomerCostCentre
     * @return \Pggns\MidocoApi\Order\StructType\CollectInvSettingDTO
     */
    public function setBillingPerCustomerCostCentre(?bool $billingPerCustomerCostCentre = null): self
    {
        // validation for constraint: boolean
        if (!is_null($billingPerCustomerCostCentre) && !is_bool($billingPerCustomerCostCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($billingPerCustomerCostCentre, true), gettype($billingPerCustomerCostCentre)), __LINE__);
        }
        $this->billingPerCustomerCostCentre = $billingPerCustomerCostCentre;
        
        return $this;
    }
    /**
     * Get billingPerItemCreationUser value
     * @return bool|null
     */
    public function getBillingPerItemCreationUser(): ?bool
    {
        return $this->billingPerItemCreationUser;
    }
    /**
     * Set billingPerItemCreationUser value
     * @param bool $billingPerItemCreationUser
     * @return \Pggns\MidocoApi\Order\StructType\CollectInvSettingDTO
     */
    public function setBillingPerItemCreationUser(?bool $billingPerItemCreationUser = null): self
    {
        // validation for constraint: boolean
        if (!is_null($billingPerItemCreationUser) && !is_bool($billingPerItemCreationUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($billingPerItemCreationUser, true), gettype($billingPerItemCreationUser)), __LINE__);
        }
        $this->billingPerItemCreationUser = $billingPerItemCreationUser;
        
        return $this;
    }
    /**
     * Get creditCardType value
     * @return string|null
     */
    public function getCreditCardType(): ?string
    {
        return $this->creditCardType;
    }
    /**
     * Set creditCardType value
     * @param string $creditCardType
     * @return \Pggns\MidocoApi\Order\StructType\CollectInvSettingDTO
     */
    public function setCreditCardType(?string $creditCardType = null): self
    {
        // validation for constraint: string
        if (!is_null($creditCardType) && !is_string($creditCardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditCardType, true), gettype($creditCardType)), __LINE__);
        }
        $this->creditCardType = $creditCardType;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\CollectInvSettingDTO
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
     * Get dedicatedCreditCardNo value
     * @return string|null
     */
    public function getDedicatedCreditCardNo(): ?string
    {
        return $this->dedicatedCreditCardNo;
    }
    /**
     * Set dedicatedCreditCardNo value
     * @param string $dedicatedCreditCardNo
     * @return \Pggns\MidocoApi\Order\StructType\CollectInvSettingDTO
     */
    public function setDedicatedCreditCardNo(?string $dedicatedCreditCardNo = null): self
    {
        // validation for constraint: string
        if (!is_null($dedicatedCreditCardNo) && !is_string($dedicatedCreditCardNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dedicatedCreditCardNo, true), gettype($dedicatedCreditCardNo)), __LINE__);
        }
        $this->dedicatedCreditCardNo = $dedicatedCreditCardNo;
        
        return $this;
    }
    /**
     * Get dedicatedCreditCardType value
     * @return string|null
     */
    public function getDedicatedCreditCardType(): ?string
    {
        return $this->dedicatedCreditCardType;
    }
    /**
     * Set dedicatedCreditCardType value
     * @param string $dedicatedCreditCardType
     * @return \Pggns\MidocoApi\Order\StructType\CollectInvSettingDTO
     */
    public function setDedicatedCreditCardType(?string $dedicatedCreditCardType = null): self
    {
        // validation for constraint: string
        if (!is_null($dedicatedCreditCardType) && !is_string($dedicatedCreditCardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dedicatedCreditCardType, true), gettype($dedicatedCreditCardType)), __LINE__);
        }
        $this->dedicatedCreditCardType = $dedicatedCreditCardType;
        
        return $this;
    }
    /**
     * Get immediatePayment value
     * @return bool|null
     */
    public function getImmediatePayment(): ?bool
    {
        return $this->immediatePayment;
    }
    /**
     * Set immediatePayment value
     * @param bool $immediatePayment
     * @return \Pggns\MidocoApi\Order\StructType\CollectInvSettingDTO
     */
    public function setImmediatePayment(?bool $immediatePayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($immediatePayment) && !is_bool($immediatePayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($immediatePayment, true), gettype($immediatePayment)), __LINE__);
        }
        $this->immediatePayment = $immediatePayment;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CollectInvSettingDTO
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
     * Get scheduled value
     * @return int|null
     */
    public function getScheduled(): ?int
    {
        return $this->scheduled;
    }
    /**
     * Set scheduled value
     * @param int $scheduled
     * @return \Pggns\MidocoApi\Order\StructType\CollectInvSettingDTO
     */
    public function setScheduled(?int $scheduled = null): self
    {
        // validation for constraint: int
        if (!is_null($scheduled) && !(is_int($scheduled) || ctype_digit($scheduled))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($scheduled, true), gettype($scheduled)), __LINE__);
        }
        $this->scheduled = $scheduled;
        
        return $this;
    }
    /**
     * Get settingId value
     * @return int|null
     */
    public function getSettingId(): ?int
    {
        return $this->settingId;
    }
    /**
     * Set settingId value
     * @param int $settingId
     * @return \Pggns\MidocoApi\Order\StructType\CollectInvSettingDTO
     */
    public function setSettingId(?int $settingId = null): self
    {
        // validation for constraint: int
        if (!is_null($settingId) && !(is_int($settingId) || ctype_digit($settingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settingId, true), gettype($settingId)), __LINE__);
        }
        $this->settingId = $settingId;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\CollectInvSettingDTO
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get useDepartureDateReference value
     * @return bool|null
     */
    public function getUseDepartureDateReference(): ?bool
    {
        return $this->useDepartureDateReference;
    }
    /**
     * Set useDepartureDateReference value
     * @param bool $useDepartureDateReference
     * @return \Pggns\MidocoApi\Order\StructType\CollectInvSettingDTO
     */
    public function setUseDepartureDateReference(?bool $useDepartureDateReference = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useDepartureDateReference) && !is_bool($useDepartureDateReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useDepartureDateReference, true), gettype($useDepartureDateReference)), __LINE__);
        }
        $this->useDepartureDateReference = $useDepartureDateReference;
        
        return $this;
    }
}
