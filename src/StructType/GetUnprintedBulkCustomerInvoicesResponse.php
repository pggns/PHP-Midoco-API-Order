<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnprintedBulkCustomerInvoicesResponse StructType
 * @subpackage Structs
 */
class GetUnprintedBulkCustomerInvoicesResponse extends AbstractStructBase
{
    /**
     * The MidocoUnprintedBulkBillingDoc
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUnprintedBulkBillingDoc
     * @var \Pggns\MidocoApi\Order\StructType\MidocoUnprintedBulkBillingDoc[]
     */
    protected array $MidocoUnprintedBulkBillingDoc = [];
    /**
     * Constructor method for GetUnprintedBulkCustomerInvoicesResponse
     * @uses GetUnprintedBulkCustomerInvoicesResponse::setMidocoUnprintedBulkBillingDoc()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoUnprintedBulkBillingDoc[] $midocoUnprintedBulkBillingDoc
     */
    public function __construct(array $midocoUnprintedBulkBillingDoc = [])
    {
        $this
            ->setMidocoUnprintedBulkBillingDoc($midocoUnprintedBulkBillingDoc);
    }
    /**
     * Get MidocoUnprintedBulkBillingDoc value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUnprintedBulkBillingDoc[]
     */
    public function getMidocoUnprintedBulkBillingDoc(): array
    {
        return $this->MidocoUnprintedBulkBillingDoc;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoUnprintedBulkBillingDoc method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUnprintedBulkBillingDoc method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUnprintedBulkBillingDocForArrayConstraintsFromSetMidocoUnprintedBulkBillingDoc(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUnprintedBulkCustomerInvoicesResponseMidocoUnprintedBulkBillingDocItem) {
            // validation for constraint: itemType
            if (!$getUnprintedBulkCustomerInvoicesResponseMidocoUnprintedBulkBillingDocItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoUnprintedBulkBillingDoc) {
                $invalidValues[] = is_object($getUnprintedBulkCustomerInvoicesResponseMidocoUnprintedBulkBillingDocItem) ? get_class($getUnprintedBulkCustomerInvoicesResponseMidocoUnprintedBulkBillingDocItem) : sprintf('%s(%s)', gettype($getUnprintedBulkCustomerInvoicesResponseMidocoUnprintedBulkBillingDocItem), var_export($getUnprintedBulkCustomerInvoicesResponseMidocoUnprintedBulkBillingDocItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUnprintedBulkBillingDoc property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoUnprintedBulkBillingDoc, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUnprintedBulkBillingDoc value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoUnprintedBulkBillingDoc[] $midocoUnprintedBulkBillingDoc
     * @return \Pggns\MidocoApi\Order\StructType\GetUnprintedBulkCustomerInvoicesResponse
     */
    public function setMidocoUnprintedBulkBillingDoc(array $midocoUnprintedBulkBillingDoc = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUnprintedBulkBillingDocArrayErrorMessage = self::validateMidocoUnprintedBulkBillingDocForArrayConstraintsFromSetMidocoUnprintedBulkBillingDoc($midocoUnprintedBulkBillingDoc))) {
            throw new InvalidArgumentException($midocoUnprintedBulkBillingDocArrayErrorMessage, __LINE__);
        }
        $this->MidocoUnprintedBulkBillingDoc = $midocoUnprintedBulkBillingDoc;
        
        return $this;
    }
    /**
     * Add item to MidocoUnprintedBulkBillingDoc value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoUnprintedBulkBillingDoc $item
     * @return \Pggns\MidocoApi\Order\StructType\GetUnprintedBulkCustomerInvoicesResponse
     */
    public function addToMidocoUnprintedBulkBillingDoc(\Pggns\MidocoApi\Order\StructType\MidocoUnprintedBulkBillingDoc $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoUnprintedBulkBillingDoc) {
            throw new InvalidArgumentException(sprintf('The MidocoUnprintedBulkBillingDoc property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoUnprintedBulkBillingDoc, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUnprintedBulkBillingDoc[] = $item;
        
        return $this;
    }
}
