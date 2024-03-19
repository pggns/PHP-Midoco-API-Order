<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderNoticesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getOrderNotices --- returns the list of order Notices for an order
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderNoticesResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderNoticeWithOrderNo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderNoticeWithOrderNo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderNoticeWithOrderNo[]
     */
    protected ?array $MidocoOrderNoticeWithOrderNo = null;
    /**
     * The MidocoOrderNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderNotice
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice[]
     */
    protected ?array $MidocoOrderNotice = null;
    /**
     * Constructor method for GetOrderNoticesResponse
     * @uses GetOrderNoticesResponse::setMidocoOrderNoticeWithOrderNo()
     * @uses GetOrderNoticesResponse::setMidocoOrderNotice()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderNoticeWithOrderNo[] $midocoOrderNoticeWithOrderNo
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice[] $midocoOrderNotice
     */
    public function __construct(?array $midocoOrderNoticeWithOrderNo = null, ?array $midocoOrderNotice = null)
    {
        $this
            ->setMidocoOrderNoticeWithOrderNo($midocoOrderNoticeWithOrderNo)
            ->setMidocoOrderNotice($midocoOrderNotice);
    }
    /**
     * Get MidocoOrderNoticeWithOrderNo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderNoticeWithOrderNo[]
     */
    public function getMidocoOrderNoticeWithOrderNo(): ?array
    {
        return $this->MidocoOrderNoticeWithOrderNo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrderNoticeWithOrderNo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderNoticeWithOrderNo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderNoticeWithOrderNoForArrayConstraintFromSetMidocoOrderNoticeWithOrderNo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderNoticesResponseMidocoOrderNoticeWithOrderNoItem) {
            // validation for constraint: itemType
            if (!$getOrderNoticesResponseMidocoOrderNoticeWithOrderNoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderNoticeWithOrderNo) {
                $invalidValues[] = is_object($getOrderNoticesResponseMidocoOrderNoticeWithOrderNoItem) ? get_class($getOrderNoticesResponseMidocoOrderNoticeWithOrderNoItem) : sprintf('%s(%s)', gettype($getOrderNoticesResponseMidocoOrderNoticeWithOrderNoItem), var_export($getOrderNoticesResponseMidocoOrderNoticeWithOrderNoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderNoticeWithOrderNo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderNoticeWithOrderNo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderNoticeWithOrderNo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderNoticeWithOrderNo[] $midocoOrderNoticeWithOrderNo
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderNoticesResponse
     */
    public function setMidocoOrderNoticeWithOrderNo(?array $midocoOrderNoticeWithOrderNo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderNoticeWithOrderNoArrayErrorMessage = self::validateMidocoOrderNoticeWithOrderNoForArrayConstraintFromSetMidocoOrderNoticeWithOrderNo($midocoOrderNoticeWithOrderNo))) {
            throw new InvalidArgumentException($midocoOrderNoticeWithOrderNoArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderNoticeWithOrderNo = $midocoOrderNoticeWithOrderNo;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderNoticeWithOrderNo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderNoticeWithOrderNo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderNoticesResponse
     */
    public function addToMidocoOrderNoticeWithOrderNo(\Pggns\MidocoApi\Order\StructType\MidocoOrderNoticeWithOrderNo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderNoticeWithOrderNo) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderNoticeWithOrderNo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderNoticeWithOrderNo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderNoticeWithOrderNo[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoOrderNotice value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice[]
     */
    public function getMidocoOrderNotice(): ?array
    {
        return $this->MidocoOrderNotice;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrderNotice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderNotice method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderNoticeForArrayConstraintFromSetMidocoOrderNotice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderNoticesResponseMidocoOrderNoticeItem) {
            // validation for constraint: itemType
            if (!$getOrderNoticesResponseMidocoOrderNoticeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice) {
                $invalidValues[] = is_object($getOrderNoticesResponseMidocoOrderNoticeItem) ? get_class($getOrderNoticesResponseMidocoOrderNoticeItem) : sprintf('%s(%s)', gettype($getOrderNoticesResponseMidocoOrderNoticeItem), var_export($getOrderNoticesResponseMidocoOrderNoticeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderNotice property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice[] $midocoOrderNotice
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderNoticesResponse
     */
    public function setMidocoOrderNotice(?array $midocoOrderNotice = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderNoticeArrayErrorMessage = self::validateMidocoOrderNoticeForArrayConstraintFromSetMidocoOrderNotice($midocoOrderNotice))) {
            throw new InvalidArgumentException($midocoOrderNoticeArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderNotice = $midocoOrderNotice;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderNoticesResponse
     */
    public function addToMidocoOrderNotice(\Pggns\MidocoApi\Order\StructType\MidocoOrderNotice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderNotice property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderNotice[] = $item;
        
        return $this;
    }
}
