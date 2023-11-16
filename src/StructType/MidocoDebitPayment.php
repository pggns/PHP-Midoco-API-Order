<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDebitPayment StructType
 * @subpackage Structs
 */
class MidocoDebitPayment extends DebitPaymentDTO
{
    /**
     * The mandateReference
     * Meta information extracted from the WSDL
     * - documentation: transfers the mandate reference for further processing in OrderUtils.updateOrder
     * @var string|null
     */
    protected ?string $mandateReference = null;
    /**
     * Constructor method for MidocoDebitPayment
     * @uses MidocoDebitPayment::setMandateReference()
     * @param string $mandateReference
     */
    public function __construct(?string $mandateReference = null)
    {
        $this
            ->setMandateReference($mandateReference);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitPayment
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
}
