<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPagedInvoiceDocumentsForCustomerResponse StructType
 * @subpackage Structs
 */
class GetPagedInvoiceDocumentsForCustomerResponse extends AbstractStructBase
{
    /**
     * The MidocoInvoiceDocInfoForCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoInvoiceDocInfoForCustomer
     * @var \Pggns\MidocoApi\Order\StructType\MidocoInvoiceDocInfoForCustomer[]
     */
    protected array $MidocoInvoiceDocInfoForCustomer = [];
    /**
     * The totalNoOfRecords
     * @var int|null
     */
    protected ?int $totalNoOfRecords = null;
    /**
     * Constructor method for GetPagedInvoiceDocumentsForCustomerResponse
     * @uses GetPagedInvoiceDocumentsForCustomerResponse::setMidocoInvoiceDocInfoForCustomer()
     * @uses GetPagedInvoiceDocumentsForCustomerResponse::setTotalNoOfRecords()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceDocInfoForCustomer[] $midocoInvoiceDocInfoForCustomer
     * @param int $totalNoOfRecords
     */
    public function __construct(array $midocoInvoiceDocInfoForCustomer = [], ?int $totalNoOfRecords = null)
    {
        $this
            ->setMidocoInvoiceDocInfoForCustomer($midocoInvoiceDocInfoForCustomer)
            ->setTotalNoOfRecords($totalNoOfRecords);
    }
    /**
     * Get MidocoInvoiceDocInfoForCustomer value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceDocInfoForCustomer[]
     */
    public function getMidocoInvoiceDocInfoForCustomer(): array
    {
        return $this->MidocoInvoiceDocInfoForCustomer;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoInvoiceDocInfoForCustomer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInvoiceDocInfoForCustomer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInvoiceDocInfoForCustomerForArrayConstraintsFromSetMidocoInvoiceDocInfoForCustomer(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPagedInvoiceDocumentsForCustomerResponseMidocoInvoiceDocInfoForCustomerItem) {
            // validation for constraint: itemType
            if (!$getPagedInvoiceDocumentsForCustomerResponseMidocoInvoiceDocInfoForCustomerItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoiceDocInfoForCustomer) {
                $invalidValues[] = is_object($getPagedInvoiceDocumentsForCustomerResponseMidocoInvoiceDocInfoForCustomerItem) ? get_class($getPagedInvoiceDocumentsForCustomerResponseMidocoInvoiceDocInfoForCustomerItem) : sprintf('%s(%s)', gettype($getPagedInvoiceDocumentsForCustomerResponseMidocoInvoiceDocInfoForCustomerItem), var_export($getPagedInvoiceDocumentsForCustomerResponseMidocoInvoiceDocInfoForCustomerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInvoiceDocInfoForCustomer property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoiceDocInfoForCustomer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInvoiceDocInfoForCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceDocInfoForCustomer[] $midocoInvoiceDocInfoForCustomer
     * @return \Pggns\MidocoApi\Order\StructType\GetPagedInvoiceDocumentsForCustomerResponse
     */
    public function setMidocoInvoiceDocInfoForCustomer(array $midocoInvoiceDocInfoForCustomer = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInvoiceDocInfoForCustomerArrayErrorMessage = self::validateMidocoInvoiceDocInfoForCustomerForArrayConstraintsFromSetMidocoInvoiceDocInfoForCustomer($midocoInvoiceDocInfoForCustomer))) {
            throw new InvalidArgumentException($midocoInvoiceDocInfoForCustomerArrayErrorMessage, __LINE__);
        }
        $this->MidocoInvoiceDocInfoForCustomer = $midocoInvoiceDocInfoForCustomer;
        
        return $this;
    }
    /**
     * Add item to MidocoInvoiceDocInfoForCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceDocInfoForCustomer $item
     * @return \Pggns\MidocoApi\Order\StructType\GetPagedInvoiceDocumentsForCustomerResponse
     */
    public function addToMidocoInvoiceDocInfoForCustomer(\Pggns\MidocoApi\Order\StructType\MidocoInvoiceDocInfoForCustomer $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoiceDocInfoForCustomer) {
            throw new InvalidArgumentException(sprintf('The MidocoInvoiceDocInfoForCustomer property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoiceDocInfoForCustomer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInvoiceDocInfoForCustomer[] = $item;
        
        return $this;
    }
    /**
     * Get totalNoOfRecords value
     * @return int|null
     */
    public function getTotalNoOfRecords(): ?int
    {
        return $this->totalNoOfRecords;
    }
    /**
     * Set totalNoOfRecords value
     * @param int $totalNoOfRecords
     * @return \Pggns\MidocoApi\Order\StructType\GetPagedInvoiceDocumentsForCustomerResponse
     */
    public function setTotalNoOfRecords(?int $totalNoOfRecords = null): self
    {
        // validation for constraint: int
        if (!is_null($totalNoOfRecords) && !(is_int($totalNoOfRecords) || ctype_digit($totalNoOfRecords))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalNoOfRecords, true), gettype($totalNoOfRecords)), __LINE__);
        }
        $this->totalNoOfRecords = $totalNoOfRecords;
        
        return $this;
    }
}
