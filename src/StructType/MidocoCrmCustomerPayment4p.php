<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmCustomerPayment4p StructType
 * @subpackage Structs
 */
class MidocoCrmCustomerPayment4p extends CrmCustomerPaymentDTO
{
    /**
     * The conditionDescription
     * @var string|null
     */
    protected ?string $conditionDescription = null;
    /**
     * Constructor method for MidocoCrmCustomerPayment4p
     * @uses MidocoCrmCustomerPayment4p::setConditionDescription()
     * @param string $conditionDescription
     */
    public function __construct(?string $conditionDescription = null)
    {
        $this
            ->setConditionDescription($conditionDescription);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmCustomerPayment4p
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
}
