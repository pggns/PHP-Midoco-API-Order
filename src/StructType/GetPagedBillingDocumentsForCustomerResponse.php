<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPagedBillingDocumentsForCustomerResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPagedBillingDocumentsForCustomerResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingDocInfoForCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingDocInfoForCustomer
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer[]
     */
    protected ?array $MidocoBillingDocInfoForCustomer = null;
    /**
     * The totalPages
     * @var int|null
     */
    protected ?int $totalPages = null;
    /**
     * Constructor method for GetPagedBillingDocumentsForCustomerResponse
     * @uses GetPagedBillingDocumentsForCustomerResponse::setMidocoBillingDocInfoForCustomer()
     * @uses GetPagedBillingDocumentsForCustomerResponse::setTotalPages()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer[] $midocoBillingDocInfoForCustomer
     * @param int $totalPages
     */
    public function __construct(?array $midocoBillingDocInfoForCustomer = null, ?int $totalPages = null)
    {
        $this
            ->setMidocoBillingDocInfoForCustomer($midocoBillingDocInfoForCustomer)
            ->setTotalPages($totalPages);
    }
    /**
     * Get MidocoBillingDocInfoForCustomer value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer[]
     */
    public function getMidocoBillingDocInfoForCustomer(): ?array
    {
        return $this->MidocoBillingDocInfoForCustomer;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBillingDocInfoForCustomer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingDocInfoForCustomer method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingDocInfoForCustomerForArrayConstraintFromSetMidocoBillingDocInfoForCustomer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPagedBillingDocumentsForCustomerResponseMidocoBillingDocInfoForCustomerItem) {
            // validation for constraint: itemType
            if (!$getPagedBillingDocumentsForCustomerResponseMidocoBillingDocInfoForCustomerItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer) {
                $invalidValues[] = is_object($getPagedBillingDocumentsForCustomerResponseMidocoBillingDocInfoForCustomerItem) ? get_class($getPagedBillingDocumentsForCustomerResponseMidocoBillingDocInfoForCustomerItem) : sprintf('%s(%s)', gettype($getPagedBillingDocumentsForCustomerResponseMidocoBillingDocInfoForCustomerItem), var_export($getPagedBillingDocumentsForCustomerResponseMidocoBillingDocInfoForCustomerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingDocInfoForCustomer property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingDocInfoForCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer[] $midocoBillingDocInfoForCustomer
     * @return \Pggns\MidocoApi\Order\StructType\GetPagedBillingDocumentsForCustomerResponse
     */
    public function setMidocoBillingDocInfoForCustomer(?array $midocoBillingDocInfoForCustomer = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingDocInfoForCustomerArrayErrorMessage = self::validateMidocoBillingDocInfoForCustomerForArrayConstraintFromSetMidocoBillingDocInfoForCustomer($midocoBillingDocInfoForCustomer))) {
            throw new InvalidArgumentException($midocoBillingDocInfoForCustomerArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingDocInfoForCustomer = $midocoBillingDocInfoForCustomer;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingDocInfoForCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer $item
     * @return \Pggns\MidocoApi\Order\StructType\GetPagedBillingDocumentsForCustomerResponse
     */
    public function addToMidocoBillingDocInfoForCustomer(\Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingDocInfoForCustomer property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingDocInfoForCustomer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingDocInfoForCustomer[] = $item;
        
        return $this;
    }
    /**
     * Get totalPages value
     * @return int|null
     */
    public function getTotalPages(): ?int
    {
        return $this->totalPages;
    }
    /**
     * Set totalPages value
     * @param int $totalPages
     * @return \Pggns\MidocoApi\Order\StructType\GetPagedBillingDocumentsForCustomerResponse
     */
    public function setTotalPages(?int $totalPages = null): self
    {
        // validation for constraint: int
        if (!is_null($totalPages) && !(is_int($totalPages) || ctype_digit($totalPages))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalPages, true), gettype($totalPages)), __LINE__);
        }
        $this->totalPages = $totalPages;
        
        return $this;
    }
}
