<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountEntriesForOrderRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAccountEntriesForOrderRequest extends AbstractStructBase
{
    /**
     * The paymentDateFrom
     * @var string|null
     */
    protected ?string $paymentDateFrom = null;
    /**
     * The paymentDateTo
     * @var string|null
     */
    protected ?string $paymentDateTo = null;
    /**
     * The state
     * @var int|null
     */
    protected ?int $state = null;
    /**
     * The orgUnitName
     * @var string|null
     */
    protected ?string $orgUnitName = null;
    /**
     * The beginIndex
     * @var int|null
     */
    protected ?int $beginIndex = null;
    /**
     * The endIndex
     * @var int|null
     */
    protected ?int $endIndex = null;
    /**
     * The forCustomerId
     * Meta information extracted from the WSDL
     * - default: -1
     * @var int|null
     */
    protected ?int $forCustomerId = null;
    /**
     * The isDunningLockState
     * @var int|null
     */
    protected ?int $isDunningLockState = null;
    /**
     * Constructor method for GetAccountEntriesForOrderRequest
     * @uses GetAccountEntriesForOrderRequest::setPaymentDateFrom()
     * @uses GetAccountEntriesForOrderRequest::setPaymentDateTo()
     * @uses GetAccountEntriesForOrderRequest::setState()
     * @uses GetAccountEntriesForOrderRequest::setOrgUnitName()
     * @uses GetAccountEntriesForOrderRequest::setBeginIndex()
     * @uses GetAccountEntriesForOrderRequest::setEndIndex()
     * @uses GetAccountEntriesForOrderRequest::setForCustomerId()
     * @uses GetAccountEntriesForOrderRequest::setIsDunningLockState()
     * @param string $paymentDateFrom
     * @param string $paymentDateTo
     * @param int $state
     * @param string $orgUnitName
     * @param int $beginIndex
     * @param int $endIndex
     * @param int $forCustomerId
     * @param int $isDunningLockState
     */
    public function __construct(?string $paymentDateFrom = null, ?string $paymentDateTo = null, ?int $state = null, ?string $orgUnitName = null, ?int $beginIndex = null, ?int $endIndex = null, ?int $forCustomerId = -1, ?int $isDunningLockState = null)
    {
        $this
            ->setPaymentDateFrom($paymentDateFrom)
            ->setPaymentDateTo($paymentDateTo)
            ->setState($state)
            ->setOrgUnitName($orgUnitName)
            ->setBeginIndex($beginIndex)
            ->setEndIndex($endIndex)
            ->setForCustomerId($forCustomerId)
            ->setIsDunningLockState($isDunningLockState);
    }
    /**
     * Get paymentDateFrom value
     * @return string|null
     */
    public function getPaymentDateFrom(): ?string
    {
        return $this->paymentDateFrom;
    }
    /**
     * Set paymentDateFrom value
     * @param string $paymentDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForOrderRequest
     */
    public function setPaymentDateFrom(?string $paymentDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentDateFrom) && !is_string($paymentDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentDateFrom, true), gettype($paymentDateFrom)), __LINE__);
        }
        $this->paymentDateFrom = $paymentDateFrom;
        
        return $this;
    }
    /**
     * Get paymentDateTo value
     * @return string|null
     */
    public function getPaymentDateTo(): ?string
    {
        return $this->paymentDateTo;
    }
    /**
     * Set paymentDateTo value
     * @param string $paymentDateTo
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForOrderRequest
     */
    public function setPaymentDateTo(?string $paymentDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentDateTo) && !is_string($paymentDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentDateTo, true), gettype($paymentDateTo)), __LINE__);
        }
        $this->paymentDateTo = $paymentDateTo;
        
        return $this;
    }
    /**
     * Get state value
     * @return int|null
     */
    public function getState(): ?int
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param int $state
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForOrderRequest
     */
    public function setState(?int $state = null): self
    {
        // validation for constraint: int
        if (!is_null($state) && !(is_int($state) || ctype_digit($state))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        
        return $this;
    }
    /**
     * Get orgUnitName value
     * @return string|null
     */
    public function getOrgUnitName(): ?string
    {
        return $this->orgUnitName;
    }
    /**
     * Set orgUnitName value
     * @param string $orgUnitName
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForOrderRequest
     */
    public function setOrgUnitName(?string $orgUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnitName) && !is_string($orgUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnitName, true), gettype($orgUnitName)), __LINE__);
        }
        $this->orgUnitName = $orgUnitName;
        
        return $this;
    }
    /**
     * Get beginIndex value
     * @return int|null
     */
    public function getBeginIndex(): ?int
    {
        return $this->beginIndex;
    }
    /**
     * Set beginIndex value
     * @param int $beginIndex
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForOrderRequest
     */
    public function setBeginIndex(?int $beginIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($beginIndex) && !(is_int($beginIndex) || ctype_digit($beginIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($beginIndex, true), gettype($beginIndex)), __LINE__);
        }
        $this->beginIndex = $beginIndex;
        
        return $this;
    }
    /**
     * Get endIndex value
     * @return int|null
     */
    public function getEndIndex(): ?int
    {
        return $this->endIndex;
    }
    /**
     * Set endIndex value
     * @param int $endIndex
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForOrderRequest
     */
    public function setEndIndex(?int $endIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($endIndex) && !(is_int($endIndex) || ctype_digit($endIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($endIndex, true), gettype($endIndex)), __LINE__);
        }
        $this->endIndex = $endIndex;
        
        return $this;
    }
    /**
     * Get forCustomerId value
     * @return int|null
     */
    public function getForCustomerId(): ?int
    {
        return $this->forCustomerId;
    }
    /**
     * Set forCustomerId value
     * @param int $forCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForOrderRequest
     */
    public function setForCustomerId(?int $forCustomerId = -1): self
    {
        // validation for constraint: int
        if (!is_null($forCustomerId) && !(is_int($forCustomerId) || ctype_digit($forCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($forCustomerId, true), gettype($forCustomerId)), __LINE__);
        }
        $this->forCustomerId = $forCustomerId;
        
        return $this;
    }
    /**
     * Get isDunningLockState value
     * @return int|null
     */
    public function getIsDunningLockState(): ?int
    {
        return $this->isDunningLockState;
    }
    /**
     * Set isDunningLockState value
     * @param int $isDunningLockState
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForOrderRequest
     */
    public function setIsDunningLockState(?int $isDunningLockState = null): self
    {
        // validation for constraint: int
        if (!is_null($isDunningLockState) && !(is_int($isDunningLockState) || ctype_digit($isDunningLockState))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($isDunningLockState, true), gettype($isDunningLockState)), __LINE__);
        }
        $this->isDunningLockState = $isDunningLockState;
        
        return $this;
    }
}
