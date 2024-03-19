<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateSupplierAgencySettlementDetailRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateSupplierAgencySettlementDetailRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgencySettlementDetail
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAgencySettlementDetail
     * @var \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO $MidocoSupplierAgencySettlementDetail = null;
    /**
     * The MidocoSupplierAgencySettlementDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierAgencySettlementDetails
     * @var \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO[]
     */
    protected ?array $MidocoSupplierAgencySettlementDetails = null;
    /**
     * Constructor method for UpdateSupplierAgencySettlementDetailRequest
     * @uses UpdateSupplierAgencySettlementDetailRequest::setMidocoSupplierAgencySettlementDetail()
     * @uses UpdateSupplierAgencySettlementDetailRequest::setMidocoSupplierAgencySettlementDetails()
     * @param \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO $midocoSupplierAgencySettlementDetail
     * @param \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO[] $midocoSupplierAgencySettlementDetails
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO $midocoSupplierAgencySettlementDetail = null, ?array $midocoSupplierAgencySettlementDetails = null)
    {
        $this
            ->setMidocoSupplierAgencySettlementDetail($midocoSupplierAgencySettlementDetail)
            ->setMidocoSupplierAgencySettlementDetails($midocoSupplierAgencySettlementDetails);
    }
    /**
     * Get MidocoSupplierAgencySettlementDetail value
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO|null
     */
    public function getMidocoSupplierAgencySettlementDetail(): ?\Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
    {
        return $this->MidocoSupplierAgencySettlementDetail;
    }
    /**
     * Set MidocoSupplierAgencySettlementDetail value
     * @param \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO $midocoSupplierAgencySettlementDetail
     * @return \Pggns\MidocoApi\Order\StructType\UpdateSupplierAgencySettlementDetailRequest
     */
    public function setMidocoSupplierAgencySettlementDetail(?\Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO $midocoSupplierAgencySettlementDetail = null): self
    {
        $this->MidocoSupplierAgencySettlementDetail = $midocoSupplierAgencySettlementDetail;
        
        return $this;
    }
    /**
     * Get MidocoSupplierAgencySettlementDetails value
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO[]
     */
    public function getMidocoSupplierAgencySettlementDetails(): ?array
    {
        return $this->MidocoSupplierAgencySettlementDetails;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSupplierAgencySettlementDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierAgencySettlementDetails method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierAgencySettlementDetailsForArrayConstraintFromSetMidocoSupplierAgencySettlementDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $updateSupplierAgencySettlementDetailRequestMidocoSupplierAgencySettlementDetailsItem) {
            // validation for constraint: itemType
            if (!$updateSupplierAgencySettlementDetailRequestMidocoSupplierAgencySettlementDetailsItem instanceof \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO) {
                $invalidValues[] = is_object($updateSupplierAgencySettlementDetailRequestMidocoSupplierAgencySettlementDetailsItem) ? get_class($updateSupplierAgencySettlementDetailRequestMidocoSupplierAgencySettlementDetailsItem) : sprintf('%s(%s)', gettype($updateSupplierAgencySettlementDetailRequestMidocoSupplierAgencySettlementDetailsItem), var_export($updateSupplierAgencySettlementDetailRequestMidocoSupplierAgencySettlementDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierAgencySettlementDetails property can only contain items of type \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierAgencySettlementDetails value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO[] $midocoSupplierAgencySettlementDetails
     * @return \Pggns\MidocoApi\Order\StructType\UpdateSupplierAgencySettlementDetailRequest
     */
    public function setMidocoSupplierAgencySettlementDetails(?array $midocoSupplierAgencySettlementDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierAgencySettlementDetailsArrayErrorMessage = self::validateMidocoSupplierAgencySettlementDetailsForArrayConstraintFromSetMidocoSupplierAgencySettlementDetails($midocoSupplierAgencySettlementDetails))) {
            throw new InvalidArgumentException($midocoSupplierAgencySettlementDetailsArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierAgencySettlementDetails = $midocoSupplierAgencySettlementDetails;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierAgencySettlementDetails value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\UpdateSupplierAgencySettlementDetailRequest
     */
    public function addToMidocoSupplierAgencySettlementDetails(\Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierAgencySettlementDetails property can only contain items of type \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierAgencySettlementDetails[] = $item;
        
        return $this;
    }
}
