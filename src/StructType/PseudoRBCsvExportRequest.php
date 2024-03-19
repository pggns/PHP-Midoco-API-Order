<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PseudoRBCsvExportRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PseudoRBCsvExportRequest extends AbstractStructBase
{
    /**
     * The PreparePseudoRevenueBookingRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PreparePseudoRevenueBookingRequest
     * @var \Pggns\MidocoApi\Order\StructType\PreparePseudoRevenueBookingRequest|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\PreparePseudoRevenueBookingRequest $PreparePseudoRevenueBookingRequest = null;
    /**
     * The MidocoPseudoRevenueBookingDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPseudoRevenueBookingDetail
     * @var \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType[]
     */
    protected ?array $MidocoPseudoRevenueBookingDetail = null;
    /**
     * Constructor method for PseudoRBCsvExportRequest
     * @uses PseudoRBCsvExportRequest::setPreparePseudoRevenueBookingRequest()
     * @uses PseudoRBCsvExportRequest::setMidocoPseudoRevenueBookingDetail()
     * @param \Pggns\MidocoApi\Order\StructType\PreparePseudoRevenueBookingRequest $preparePseudoRevenueBookingRequest
     * @param \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType[] $midocoPseudoRevenueBookingDetail
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\PreparePseudoRevenueBookingRequest $preparePseudoRevenueBookingRequest = null, ?array $midocoPseudoRevenueBookingDetail = null)
    {
        $this
            ->setPreparePseudoRevenueBookingRequest($preparePseudoRevenueBookingRequest)
            ->setMidocoPseudoRevenueBookingDetail($midocoPseudoRevenueBookingDetail);
    }
    /**
     * Get PreparePseudoRevenueBookingRequest value
     * @return \Pggns\MidocoApi\Order\StructType\PreparePseudoRevenueBookingRequest|null
     */
    public function getPreparePseudoRevenueBookingRequest(): ?\Pggns\MidocoApi\Order\StructType\PreparePseudoRevenueBookingRequest
    {
        return $this->PreparePseudoRevenueBookingRequest;
    }
    /**
     * Set PreparePseudoRevenueBookingRequest value
     * @param \Pggns\MidocoApi\Order\StructType\PreparePseudoRevenueBookingRequest $preparePseudoRevenueBookingRequest
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRBCsvExportRequest
     */
    public function setPreparePseudoRevenueBookingRequest(?\Pggns\MidocoApi\Order\StructType\PreparePseudoRevenueBookingRequest $preparePseudoRevenueBookingRequest = null): self
    {
        $this->PreparePseudoRevenueBookingRequest = $preparePseudoRevenueBookingRequest;
        
        return $this;
    }
    /**
     * Get MidocoPseudoRevenueBookingDetail value
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType[]
     */
    public function getMidocoPseudoRevenueBookingDetail(): ?array
    {
        return $this->MidocoPseudoRevenueBookingDetail;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoPseudoRevenueBookingDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPseudoRevenueBookingDetail method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPseudoRevenueBookingDetailForArrayConstraintFromSetMidocoPseudoRevenueBookingDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pseudoRBCsvExportRequestMidocoPseudoRevenueBookingDetailItem) {
            // validation for constraint: itemType
            if (!$pseudoRBCsvExportRequestMidocoPseudoRevenueBookingDetailItem instanceof \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType) {
                $invalidValues[] = is_object($pseudoRBCsvExportRequestMidocoPseudoRevenueBookingDetailItem) ? get_class($pseudoRBCsvExportRequestMidocoPseudoRevenueBookingDetailItem) : sprintf('%s(%s)', gettype($pseudoRBCsvExportRequestMidocoPseudoRevenueBookingDetailItem), var_export($pseudoRBCsvExportRequestMidocoPseudoRevenueBookingDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPseudoRevenueBookingDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPseudoRevenueBookingDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType[] $midocoPseudoRevenueBookingDetail
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRBCsvExportRequest
     */
    public function setMidocoPseudoRevenueBookingDetail(?array $midocoPseudoRevenueBookingDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPseudoRevenueBookingDetailArrayErrorMessage = self::validateMidocoPseudoRevenueBookingDetailForArrayConstraintFromSetMidocoPseudoRevenueBookingDetail($midocoPseudoRevenueBookingDetail))) {
            throw new InvalidArgumentException($midocoPseudoRevenueBookingDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoPseudoRevenueBookingDetail = $midocoPseudoRevenueBookingDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoPseudoRevenueBookingDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType $item
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRBCsvExportRequest
     */
    public function addToMidocoPseudoRevenueBookingDetail(\Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType) {
            throw new InvalidArgumentException(sprintf('The MidocoPseudoRevenueBookingDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPseudoRevenueBookingDetail[] = $item;
        
        return $this;
    }
}
