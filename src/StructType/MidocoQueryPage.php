<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoQueryPage StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoQueryPage extends AbstractStructBase
{
    /**
     * The MidocoQueryPageLine
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoQueryPageLine
     * @var \Pggns\MidocoApi\Order\StructType\MidocoQueryPageLine[]
     */
    protected ?array $MidocoQueryPageLine = null;
    /**
     * The pageNo
     * @var int|null
     */
    protected ?int $pageNo = null;
    /**
     * Constructor method for MidocoQueryPage
     * @uses MidocoQueryPage::setMidocoQueryPageLine()
     * @uses MidocoQueryPage::setPageNo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryPageLine[] $midocoQueryPageLine
     * @param int $pageNo
     */
    public function __construct(?array $midocoQueryPageLine = null, ?int $pageNo = null)
    {
        $this
            ->setMidocoQueryPageLine($midocoQueryPageLine)
            ->setPageNo($pageNo);
    }
    /**
     * Get MidocoQueryPageLine value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryPageLine[]
     */
    public function getMidocoQueryPageLine(): ?array
    {
        return $this->MidocoQueryPageLine;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoQueryPageLine method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoQueryPageLine method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoQueryPageLineForArrayConstraintFromSetMidocoQueryPageLine(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoQueryPageMidocoQueryPageLineItem) {
            // validation for constraint: itemType
            if (!$midocoQueryPageMidocoQueryPageLineItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoQueryPageLine) {
                $invalidValues[] = is_object($midocoQueryPageMidocoQueryPageLineItem) ? get_class($midocoQueryPageMidocoQueryPageLineItem) : sprintf('%s(%s)', gettype($midocoQueryPageMidocoQueryPageLineItem), var_export($midocoQueryPageMidocoQueryPageLineItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoQueryPageLine property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoQueryPageLine, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoQueryPageLine value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryPageLine[] $midocoQueryPageLine
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryPage
     */
    public function setMidocoQueryPageLine(?array $midocoQueryPageLine = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoQueryPageLineArrayErrorMessage = self::validateMidocoQueryPageLineForArrayConstraintFromSetMidocoQueryPageLine($midocoQueryPageLine))) {
            throw new InvalidArgumentException($midocoQueryPageLineArrayErrorMessage, __LINE__);
        }
        $this->MidocoQueryPageLine = $midocoQueryPageLine;
        
        return $this;
    }
    /**
     * Add item to MidocoQueryPageLine value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryPageLine $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryPage
     */
    public function addToMidocoQueryPageLine(\Pggns\MidocoApi\Order\StructType\MidocoQueryPageLine $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoQueryPageLine) {
            throw new InvalidArgumentException(sprintf('The MidocoQueryPageLine property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoQueryPageLine, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoQueryPageLine[] = $item;
        
        return $this;
    }
    /**
     * Get pageNo value
     * @return int|null
     */
    public function getPageNo(): ?int
    {
        return $this->pageNo;
    }
    /**
     * Set pageNo value
     * @param int $pageNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryPage
     */
    public function setPageNo(?int $pageNo = null): self
    {
        // validation for constraint: int
        if (!is_null($pageNo) && !(is_int($pageNo) || ctype_digit($pageNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageNo, true), gettype($pageNo)), __LINE__);
        }
        $this->pageNo = $pageNo;
        
        return $this;
    }
}
