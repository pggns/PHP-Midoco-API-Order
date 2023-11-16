<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCollectiveBillingProcess StructType
 * @subpackage Structs
 */
class MidocoCollectiveBillingProcess extends AbstractStructBase
{
    /**
     * The customerId
     * @var string|null
     */
    protected ?string $customerId = null;
    /**
     * The isPrinting
     * @var bool|null
     */
    protected ?bool $isPrinting = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The errorMessage
     * @var string|null
     */
    protected ?string $errorMessage = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * Constructor method for MidocoCollectiveBillingProcess
     * @uses MidocoCollectiveBillingProcess::setCustomerId()
     * @uses MidocoCollectiveBillingProcess::setIsPrinting()
     * @uses MidocoCollectiveBillingProcess::setOrderNo()
     * @uses MidocoCollectiveBillingProcess::setErrorMessage()
     * @uses MidocoCollectiveBillingProcess::setDebitorNo()
     * @param string $customerId
     * @param bool $isPrinting
     * @param int $orderNo
     * @param string $errorMessage
     * @param string $debitorNo
     */
    public function __construct(?string $customerId = null, ?bool $isPrinting = null, ?int $orderNo = null, ?string $errorMessage = null, ?string $debitorNo = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setIsPrinting($isPrinting)
            ->setOrderNo($orderNo)
            ->setErrorMessage($errorMessage)
            ->setDebitorNo($debitorNo);
    }
    /**
     * Get customerId value
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param string $customerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBillingProcess
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get isPrinting value
     * @return bool|null
     */
    public function getIsPrinting(): ?bool
    {
        return $this->isPrinting;
    }
    /**
     * Set isPrinting value
     * @param bool $isPrinting
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBillingProcess
     */
    public function setIsPrinting(?bool $isPrinting = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPrinting) && !is_bool($isPrinting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPrinting, true), gettype($isPrinting)), __LINE__);
        }
        $this->isPrinting = $isPrinting;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBillingProcess
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBillingProcess
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBillingProcess
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
}
