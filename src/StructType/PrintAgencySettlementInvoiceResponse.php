<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintAgencySettlementInvoiceResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintAgencySettlementInvoiceResponse extends AbstractStructBase
{
    /**
     * The printJobIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $printJobIds = null;
    /**
     * The tempRepositoryIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $tempRepositoryIds = null;
    /**
     * Constructor method for PrintAgencySettlementInvoiceResponse
     * @uses PrintAgencySettlementInvoiceResponse::setPrintJobIds()
     * @uses PrintAgencySettlementInvoiceResponse::setTempRepositoryIds()
     * @param int[] $printJobIds
     * @param int[] $tempRepositoryIds
     */
    public function __construct(?array $printJobIds = null, ?array $tempRepositoryIds = null)
    {
        $this
            ->setPrintJobIds($printJobIds)
            ->setTempRepositoryIds($tempRepositoryIds);
    }
    /**
     * Get printJobIds value
     * @return int[]
     */
    public function getPrintJobIds(): ?array
    {
        return $this->printJobIds;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPrintJobIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrintJobIds method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrintJobIdsForArrayConstraintFromSetPrintJobIds(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $printAgencySettlementInvoiceResponsePrintJobIdsItem) {
            // validation for constraint: itemType
            if (!(is_int($printAgencySettlementInvoiceResponsePrintJobIdsItem) || ctype_digit($printAgencySettlementInvoiceResponsePrintJobIdsItem))) {
                $invalidValues[] = is_object($printAgencySettlementInvoiceResponsePrintJobIdsItem) ? get_class($printAgencySettlementInvoiceResponsePrintJobIdsItem) : sprintf('%s(%s)', gettype($printAgencySettlementInvoiceResponsePrintJobIdsItem), var_export($printAgencySettlementInvoiceResponsePrintJobIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The printJobIds property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set printJobIds value
     * @throws InvalidArgumentException
     * @param int[] $printJobIds
     * @return \Pggns\MidocoApi\Order\StructType\PrintAgencySettlementInvoiceResponse
     */
    public function setPrintJobIds(?array $printJobIds = null): self
    {
        // validation for constraint: array
        if ('' !== ($printJobIdsArrayErrorMessage = self::validatePrintJobIdsForArrayConstraintFromSetPrintJobIds($printJobIds))) {
            throw new InvalidArgumentException($printJobIdsArrayErrorMessage, __LINE__);
        }
        $this->printJobIds = $printJobIds;
        
        return $this;
    }
    /**
     * Add item to printJobIds value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\PrintAgencySettlementInvoiceResponse
     */
    public function addToPrintJobIds(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The printJobIds property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->printJobIds[] = $item;
        
        return $this;
    }
    /**
     * Get tempRepositoryIds value
     * @return int[]
     */
    public function getTempRepositoryIds(): ?array
    {
        return $this->tempRepositoryIds;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTempRepositoryIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTempRepositoryIds method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTempRepositoryIdsForArrayConstraintFromSetTempRepositoryIds(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $printAgencySettlementInvoiceResponseTempRepositoryIdsItem) {
            // validation for constraint: itemType
            if (!(is_int($printAgencySettlementInvoiceResponseTempRepositoryIdsItem) || ctype_digit($printAgencySettlementInvoiceResponseTempRepositoryIdsItem))) {
                $invalidValues[] = is_object($printAgencySettlementInvoiceResponseTempRepositoryIdsItem) ? get_class($printAgencySettlementInvoiceResponseTempRepositoryIdsItem) : sprintf('%s(%s)', gettype($printAgencySettlementInvoiceResponseTempRepositoryIdsItem), var_export($printAgencySettlementInvoiceResponseTempRepositoryIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The tempRepositoryIds property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set tempRepositoryIds value
     * @throws InvalidArgumentException
     * @param int[] $tempRepositoryIds
     * @return \Pggns\MidocoApi\Order\StructType\PrintAgencySettlementInvoiceResponse
     */
    public function setTempRepositoryIds(?array $tempRepositoryIds = null): self
    {
        // validation for constraint: array
        if ('' !== ($tempRepositoryIdsArrayErrorMessage = self::validateTempRepositoryIdsForArrayConstraintFromSetTempRepositoryIds($tempRepositoryIds))) {
            throw new InvalidArgumentException($tempRepositoryIdsArrayErrorMessage, __LINE__);
        }
        $this->tempRepositoryIds = $tempRepositoryIds;
        
        return $this;
    }
    /**
     * Add item to tempRepositoryIds value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\PrintAgencySettlementInvoiceResponse
     */
    public function addToTempRepositoryIds(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The tempRepositoryIds property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->tempRepositoryIds[] = $item;
        
        return $this;
    }
}
