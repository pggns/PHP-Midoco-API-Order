<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingDocumentForCustomerResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getBillingDocumentForCustomer --- used to test if a previously unprinted document already exists.
 * @subpackage Structs
 */
class GetBillingDocumentForCustomerResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingPositionsDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingPositionsDetails
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionsDetails[]
     */
    protected array $MidocoBillingPositionsDetails = [];
    /**
     * The hasMorePositions
     * @var bool|null
     */
    protected ?bool $hasMorePositions = null;
    /**
     * Constructor method for GetBillingDocumentForCustomerResponse
     * @uses GetBillingDocumentForCustomerResponse::setMidocoBillingPositionsDetails()
     * @uses GetBillingDocumentForCustomerResponse::setHasMorePositions()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionsDetails[] $midocoBillingPositionsDetails
     * @param bool $hasMorePositions
     */
    public function __construct(array $midocoBillingPositionsDetails = [], ?bool $hasMorePositions = null)
    {
        $this
            ->setMidocoBillingPositionsDetails($midocoBillingPositionsDetails)
            ->setHasMorePositions($hasMorePositions);
    }
    /**
     * Get MidocoBillingPositionsDetails value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionsDetails[]
     */
    public function getMidocoBillingPositionsDetails(): array
    {
        return $this->MidocoBillingPositionsDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingPositionsDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingPositionsDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingPositionsDetailsForArrayConstraintsFromSetMidocoBillingPositionsDetails(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBillingDocumentForCustomerResponseMidocoBillingPositionsDetailsItem) {
            // validation for constraint: itemType
            if (!$getBillingDocumentForCustomerResponseMidocoBillingPositionsDetailsItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionsDetails) {
                $invalidValues[] = is_object($getBillingDocumentForCustomerResponseMidocoBillingPositionsDetailsItem) ? get_class($getBillingDocumentForCustomerResponseMidocoBillingPositionsDetailsItem) : sprintf('%s(%s)', gettype($getBillingDocumentForCustomerResponseMidocoBillingPositionsDetailsItem), var_export($getBillingDocumentForCustomerResponseMidocoBillingPositionsDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingPositionsDetails property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionsDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingPositionsDetails value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionsDetails[] $midocoBillingPositionsDetails
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocumentForCustomerResponse
     */
    public function setMidocoBillingPositionsDetails(array $midocoBillingPositionsDetails = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingPositionsDetailsArrayErrorMessage = self::validateMidocoBillingPositionsDetailsForArrayConstraintsFromSetMidocoBillingPositionsDetails($midocoBillingPositionsDetails))) {
            throw new InvalidArgumentException($midocoBillingPositionsDetailsArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingPositionsDetails = $midocoBillingPositionsDetails;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingPositionsDetails value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionsDetails $item
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocumentForCustomerResponse
     */
    public function addToMidocoBillingPositionsDetails(\Pggns\MidocoApi\Order\StructType\MidocoBillingPositionsDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionsDetails) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingPositionsDetails property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionsDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingPositionsDetails[] = $item;
        
        return $this;
    }
    /**
     * Get hasMorePositions value
     * @return bool|null
     */
    public function getHasMorePositions(): ?bool
    {
        return $this->hasMorePositions;
    }
    /**
     * Set hasMorePositions value
     * @param bool $hasMorePositions
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocumentForCustomerResponse
     */
    public function setHasMorePositions(?bool $hasMorePositions = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasMorePositions) && !is_bool($hasMorePositions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasMorePositions, true), gettype($hasMorePositions)), __LINE__);
        }
        $this->hasMorePositions = $hasMorePositions;
        
        return $this;
    }
}
