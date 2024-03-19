<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMultiNoticeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMultiNoticeRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoOrderNotice
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice[]
     */
    protected ?array $MidocoOrderNotice = null;
    /**
     * Constructor method for SaveMultiNoticeRequest
     * @uses SaveMultiNoticeRequest::setMidocoOrderNotice()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice[] $midocoOrderNotice
     */
    public function __construct(?array $midocoOrderNotice = null)
    {
        $this
            ->setMidocoOrderNotice($midocoOrderNotice);
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
        foreach ($values as $saveMultiNoticeRequestMidocoOrderNoticeItem) {
            // validation for constraint: itemType
            if (!$saveMultiNoticeRequestMidocoOrderNoticeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice) {
                $invalidValues[] = is_object($saveMultiNoticeRequestMidocoOrderNoticeItem) ? get_class($saveMultiNoticeRequestMidocoOrderNoticeItem) : sprintf('%s(%s)', gettype($saveMultiNoticeRequestMidocoOrderNoticeItem), var_export($saveMultiNoticeRequestMidocoOrderNoticeItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveMultiNoticeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveMultiNoticeRequest
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
