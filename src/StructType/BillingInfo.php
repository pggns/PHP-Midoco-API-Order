<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingInfo StructType
 * @subpackage Structs
 */
class BillingInfo extends AbstractStructBase
{
    /**
     * The CreditCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: CreditCard
     * @var \Pggns\MidocoApi\Order\StructType\CreditCard[]
     */
    protected array $CreditCard = [];
    /**
     * The BankAccount
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: BankAccount
     * @var \Pggns\MidocoApi\Order\StructType\BankAccount[]
     */
    protected array $BankAccount = [];
    /**
     * The AdditionalBillingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: AdditionalBillingInfo
     * @var \Pggns\MidocoApi\Order\StructType\AdditionalBillingInfo[]
     */
    protected array $AdditionalBillingInfo = [];
    /**
     * The AdditionalCreditCardInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: AdditionalCreditCardInfo
     * @var \Pggns\MidocoApi\Order\StructType\AdditionalCreditCardInfo[]
     */
    protected array $AdditionalCreditCardInfo = [];
    /**
     * Constructor method for BillingInfo
     * @uses BillingInfo::setCreditCard()
     * @uses BillingInfo::setBankAccount()
     * @uses BillingInfo::setAdditionalBillingInfo()
     * @uses BillingInfo::setAdditionalCreditCardInfo()
     * @param \Pggns\MidocoApi\Order\StructType\CreditCard[] $creditCard
     * @param \Pggns\MidocoApi\Order\StructType\BankAccount[] $bankAccount
     * @param \Pggns\MidocoApi\Order\StructType\AdditionalBillingInfo[] $additionalBillingInfo
     * @param \Pggns\MidocoApi\Order\StructType\AdditionalCreditCardInfo[] $additionalCreditCardInfo
     */
    public function __construct(array $creditCard = [], array $bankAccount = [], array $additionalBillingInfo = [], array $additionalCreditCardInfo = [])
    {
        $this
            ->setCreditCard($creditCard)
            ->setBankAccount($bankAccount)
            ->setAdditionalBillingInfo($additionalBillingInfo)
            ->setAdditionalCreditCardInfo($additionalCreditCardInfo);
    }
    /**
     * Get CreditCard value
     * @return \Pggns\MidocoApi\Order\StructType\CreditCard[]
     */
    public function getCreditCard(): array
    {
        return $this->CreditCard;
    }
    /**
     * This method is responsible for validating the values passed to the setCreditCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreditCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCreditCardForArrayConstraintsFromSetCreditCard(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $billingInfoCreditCardItem) {
            // validation for constraint: itemType
            if (!$billingInfoCreditCardItem instanceof \Pggns\MidocoApi\Order\StructType\CreditCard) {
                $invalidValues[] = is_object($billingInfoCreditCardItem) ? get_class($billingInfoCreditCardItem) : sprintf('%s(%s)', gettype($billingInfoCreditCardItem), var_export($billingInfoCreditCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CreditCard property can only contain items of type \Pggns\MidocoApi\Order\StructType\CreditCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CreditCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CreditCard[] $creditCard
     * @return \Pggns\MidocoApi\Order\StructType\BillingInfo
     */
    public function setCreditCard(array $creditCard = []): self
    {
        // validation for constraint: array
        if ('' !== ($creditCardArrayErrorMessage = self::validateCreditCardForArrayConstraintsFromSetCreditCard($creditCard))) {
            throw new InvalidArgumentException($creditCardArrayErrorMessage, __LINE__);
        }
        $this->CreditCard = $creditCard;
        
        return $this;
    }
    /**
     * Add item to CreditCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CreditCard $item
     * @return \Pggns\MidocoApi\Order\StructType\BillingInfo
     */
    public function addToCreditCard(\Pggns\MidocoApi\Order\StructType\CreditCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CreditCard) {
            throw new InvalidArgumentException(sprintf('The CreditCard property can only contain items of type \Pggns\MidocoApi\Order\StructType\CreditCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CreditCard[] = $item;
        
        return $this;
    }
    /**
     * Get BankAccount value
     * @return \Pggns\MidocoApi\Order\StructType\BankAccount[]
     */
    public function getBankAccount(): array
    {
        return $this->BankAccount;
    }
    /**
     * This method is responsible for validating the values passed to the setBankAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBankAccount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBankAccountForArrayConstraintsFromSetBankAccount(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $billingInfoBankAccountItem) {
            // validation for constraint: itemType
            if (!$billingInfoBankAccountItem instanceof \Pggns\MidocoApi\Order\StructType\BankAccount) {
                $invalidValues[] = is_object($billingInfoBankAccountItem) ? get_class($billingInfoBankAccountItem) : sprintf('%s(%s)', gettype($billingInfoBankAccountItem), var_export($billingInfoBankAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BankAccount property can only contain items of type \Pggns\MidocoApi\Order\StructType\BankAccount, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BankAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BankAccount[] $bankAccount
     * @return \Pggns\MidocoApi\Order\StructType\BillingInfo
     */
    public function setBankAccount(array $bankAccount = []): self
    {
        // validation for constraint: array
        if ('' !== ($bankAccountArrayErrorMessage = self::validateBankAccountForArrayConstraintsFromSetBankAccount($bankAccount))) {
            throw new InvalidArgumentException($bankAccountArrayErrorMessage, __LINE__);
        }
        $this->BankAccount = $bankAccount;
        
        return $this;
    }
    /**
     * Add item to BankAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BankAccount $item
     * @return \Pggns\MidocoApi\Order\StructType\BillingInfo
     */
    public function addToBankAccount(\Pggns\MidocoApi\Order\StructType\BankAccount $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\BankAccount) {
            throw new InvalidArgumentException(sprintf('The BankAccount property can only contain items of type \Pggns\MidocoApi\Order\StructType\BankAccount, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BankAccount[] = $item;
        
        return $this;
    }
    /**
     * Get AdditionalBillingInfo value
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalBillingInfo[]
     */
    public function getAdditionalBillingInfo(): array
    {
        return $this->AdditionalBillingInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setAdditionalBillingInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalBillingInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditionalBillingInfoForArrayConstraintsFromSetAdditionalBillingInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $billingInfoAdditionalBillingInfoItem) {
            // validation for constraint: itemType
            if (!$billingInfoAdditionalBillingInfoItem instanceof \Pggns\MidocoApi\Order\StructType\AdditionalBillingInfo) {
                $invalidValues[] = is_object($billingInfoAdditionalBillingInfoItem) ? get_class($billingInfoAdditionalBillingInfoItem) : sprintf('%s(%s)', gettype($billingInfoAdditionalBillingInfoItem), var_export($billingInfoAdditionalBillingInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AdditionalBillingInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\AdditionalBillingInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AdditionalBillingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AdditionalBillingInfo[] $additionalBillingInfo
     * @return \Pggns\MidocoApi\Order\StructType\BillingInfo
     */
    public function setAdditionalBillingInfo(array $additionalBillingInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($additionalBillingInfoArrayErrorMessage = self::validateAdditionalBillingInfoForArrayConstraintsFromSetAdditionalBillingInfo($additionalBillingInfo))) {
            throw new InvalidArgumentException($additionalBillingInfoArrayErrorMessage, __LINE__);
        }
        $this->AdditionalBillingInfo = $additionalBillingInfo;
        
        return $this;
    }
    /**
     * Add item to AdditionalBillingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AdditionalBillingInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\BillingInfo
     */
    public function addToAdditionalBillingInfo(\Pggns\MidocoApi\Order\StructType\AdditionalBillingInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AdditionalBillingInfo) {
            throw new InvalidArgumentException(sprintf('The AdditionalBillingInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\AdditionalBillingInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AdditionalBillingInfo[] = $item;
        
        return $this;
    }
    /**
     * Get AdditionalCreditCardInfo value
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalCreditCardInfo[]
     */
    public function getAdditionalCreditCardInfo(): array
    {
        return $this->AdditionalCreditCardInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setAdditionalCreditCardInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalCreditCardInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditionalCreditCardInfoForArrayConstraintsFromSetAdditionalCreditCardInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $billingInfoAdditionalCreditCardInfoItem) {
            // validation for constraint: itemType
            if (!$billingInfoAdditionalCreditCardInfoItem instanceof \Pggns\MidocoApi\Order\StructType\AdditionalCreditCardInfo) {
                $invalidValues[] = is_object($billingInfoAdditionalCreditCardInfoItem) ? get_class($billingInfoAdditionalCreditCardInfoItem) : sprintf('%s(%s)', gettype($billingInfoAdditionalCreditCardInfoItem), var_export($billingInfoAdditionalCreditCardInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AdditionalCreditCardInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\AdditionalCreditCardInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AdditionalCreditCardInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AdditionalCreditCardInfo[] $additionalCreditCardInfo
     * @return \Pggns\MidocoApi\Order\StructType\BillingInfo
     */
    public function setAdditionalCreditCardInfo(array $additionalCreditCardInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($additionalCreditCardInfoArrayErrorMessage = self::validateAdditionalCreditCardInfoForArrayConstraintsFromSetAdditionalCreditCardInfo($additionalCreditCardInfo))) {
            throw new InvalidArgumentException($additionalCreditCardInfoArrayErrorMessage, __LINE__);
        }
        $this->AdditionalCreditCardInfo = $additionalCreditCardInfo;
        
        return $this;
    }
    /**
     * Add item to AdditionalCreditCardInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AdditionalCreditCardInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\BillingInfo
     */
    public function addToAdditionalCreditCardInfo(\Pggns\MidocoApi\Order\StructType\AdditionalCreditCardInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AdditionalCreditCardInfo) {
            throw new InvalidArgumentException(sprintf('The AdditionalCreditCardInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\AdditionalCreditCardInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AdditionalCreditCardInfo[] = $item;
        
        return $this;
    }
}
