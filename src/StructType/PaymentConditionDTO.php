<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentConditionDTO StructType
 * @subpackage Structs
 */
class PaymentConditionDTO extends AbstractStructBase
{
    /**
     * The conditionDescription
     * @var string|null
     */
    protected ?string $conditionDescription = null;
    /**
     * The conditionId
     * @var string|null
     */
    protected ?string $conditionId = null;
    /**
     * The dueDateBasisType
     * @var string|null
     */
    protected ?string $dueDateBasisType = null;
    /**
     * The paymentDays
     * @var int|null
     */
    protected ?int $paymentDays = null;
    /**
     * Constructor method for PaymentConditionDTO
     * @uses PaymentConditionDTO::setConditionDescription()
     * @uses PaymentConditionDTO::setConditionId()
     * @uses PaymentConditionDTO::setDueDateBasisType()
     * @uses PaymentConditionDTO::setPaymentDays()
     * @param string $conditionDescription
     * @param string $conditionId
     * @param string $dueDateBasisType
     * @param int $paymentDays
     */
    public function __construct(?string $conditionDescription = null, ?string $conditionId = null, ?string $dueDateBasisType = null, ?int $paymentDays = null)
    {
        $this
            ->setConditionDescription($conditionDescription)
            ->setConditionId($conditionId)
            ->setDueDateBasisType($dueDateBasisType)
            ->setPaymentDays($paymentDays);
    }
    /**
     * Get conditionDescription value
     * @return string|null
     */
    public function getConditionDescription(): ?string
    {
        return $this->conditionDescription;
    }
    /**
     * Set conditionDescription value
     * @param string $conditionDescription
     * @return \Pggns\MidocoApi\Order\StructType\PaymentConditionDTO
     */
    public function setConditionDescription(?string $conditionDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($conditionDescription) && !is_string($conditionDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($conditionDescription, true), gettype($conditionDescription)), __LINE__);
        }
        $this->conditionDescription = $conditionDescription;
        
        return $this;
    }
    /**
     * Get conditionId value
     * @return string|null
     */
    public function getConditionId(): ?string
    {
        return $this->conditionId;
    }
    /**
     * Set conditionId value
     * @param string $conditionId
     * @return \Pggns\MidocoApi\Order\StructType\PaymentConditionDTO
     */
    public function setConditionId(?string $conditionId = null): self
    {
        // validation for constraint: string
        if (!is_null($conditionId) && !is_string($conditionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($conditionId, true), gettype($conditionId)), __LINE__);
        }
        $this->conditionId = $conditionId;
        
        return $this;
    }
    /**
     * Get dueDateBasisType value
     * @return string|null
     */
    public function getDueDateBasisType(): ?string
    {
        return $this->dueDateBasisType;
    }
    /**
     * Set dueDateBasisType value
     * @param string $dueDateBasisType
     * @return \Pggns\MidocoApi\Order\StructType\PaymentConditionDTO
     */
    public function setDueDateBasisType(?string $dueDateBasisType = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDateBasisType) && !is_string($dueDateBasisType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDateBasisType, true), gettype($dueDateBasisType)), __LINE__);
        }
        $this->dueDateBasisType = $dueDateBasisType;
        
        return $this;
    }
    /**
     * Get paymentDays value
     * @return int|null
     */
    public function getPaymentDays(): ?int
    {
        return $this->paymentDays;
    }
    /**
     * Set paymentDays value
     * @param int $paymentDays
     * @return \Pggns\MidocoApi\Order\StructType\PaymentConditionDTO
     */
    public function setPaymentDays(?int $paymentDays = null): self
    {
        // validation for constraint: int
        if (!is_null($paymentDays) && !(is_int($paymentDays) || ctype_digit($paymentDays))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paymentDays, true), gettype($paymentDays)), __LINE__);
        }
        $this->paymentDays = $paymentDays;
        
        return $this;
    }
}
