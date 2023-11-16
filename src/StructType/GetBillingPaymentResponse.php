<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingPaymentResponse StructType
 * @subpackage Structs
 */
class GetBillingPaymentResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingPayment
     * @var \Pggns\MidocoApi\Order\StructType\BillingPaymentDTO[]
     */
    protected array $MidocoBillingPayment = [];
    /**
     * Constructor method for GetBillingPaymentResponse
     * @uses GetBillingPaymentResponse::setMidocoBillingPayment()
     * @param \Pggns\MidocoApi\Order\StructType\BillingPaymentDTO[] $midocoBillingPayment
     */
    public function __construct(array $midocoBillingPayment = [])
    {
        $this
            ->setMidocoBillingPayment($midocoBillingPayment);
    }
    /**
     * Get MidocoBillingPayment value
     * @return \Pggns\MidocoApi\Order\StructType\BillingPaymentDTO[]
     */
    public function getMidocoBillingPayment(): array
    {
        return $this->MidocoBillingPayment;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingPaymentForArrayConstraintsFromSetMidocoBillingPayment(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBillingPaymentResponseMidocoBillingPaymentItem) {
            // validation for constraint: itemType
            if (!$getBillingPaymentResponseMidocoBillingPaymentItem instanceof \Pggns\MidocoApi\Order\StructType\BillingPaymentDTO) {
                $invalidValues[] = is_object($getBillingPaymentResponseMidocoBillingPaymentItem) ? get_class($getBillingPaymentResponseMidocoBillingPaymentItem) : sprintf('%s(%s)', gettype($getBillingPaymentResponseMidocoBillingPaymentItem), var_export($getBillingPaymentResponseMidocoBillingPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingPayment property can only contain items of type \Pggns\MidocoApi\Order\StructType\BillingPaymentDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BillingPaymentDTO[] $midocoBillingPayment
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPaymentResponse
     */
    public function setMidocoBillingPayment(array $midocoBillingPayment = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingPaymentArrayErrorMessage = self::validateMidocoBillingPaymentForArrayConstraintsFromSetMidocoBillingPayment($midocoBillingPayment))) {
            throw new InvalidArgumentException($midocoBillingPaymentArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingPayment = $midocoBillingPayment;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BillingPaymentDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPaymentResponse
     */
    public function addToMidocoBillingPayment(\Pggns\MidocoApi\Order\StructType\BillingPaymentDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\BillingPaymentDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingPayment property can only contain items of type \Pggns\MidocoApi\Order\StructType\BillingPaymentDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingPayment[] = $item;
        
        return $this;
    }
}
