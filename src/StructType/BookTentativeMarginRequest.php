<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookTentativeMarginRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BookTentativeMarginRequest extends AbstractStructBase
{
    /**
     * The MidocoMargin
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - ref: MidocoMargin
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMargin[]
     */
    protected array $MidocoMargin;
    /**
     * The lockTravelNo
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $lockTravelNo = null;
    /**
     * Constructor method for BookTentativeMarginRequest
     * @uses BookTentativeMarginRequest::setMidocoMargin()
     * @uses BookTentativeMarginRequest::setLockTravelNo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMargin[] $midocoMargin
     * @param bool $lockTravelNo
     */
    public function __construct(array $midocoMargin, ?bool $lockTravelNo = false)
    {
        $this
            ->setMidocoMargin($midocoMargin)
            ->setLockTravelNo($lockTravelNo);
    }
    /**
     * Get MidocoMargin value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin[]
     */
    public function getMidocoMargin(): array
    {
        return $this->MidocoMargin;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMargin method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMargin method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMarginForArrayConstraintFromSetMidocoMargin(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookTentativeMarginRequestMidocoMarginItem) {
            // validation for constraint: itemType
            if (!$bookTentativeMarginRequestMidocoMarginItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMargin) {
                $invalidValues[] = is_object($bookTentativeMarginRequestMidocoMarginItem) ? get_class($bookTentativeMarginRequestMidocoMarginItem) : sprintf('%s(%s)', gettype($bookTentativeMarginRequestMidocoMarginItem), var_export($bookTentativeMarginRequestMidocoMarginItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMargin property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMargin, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMargin value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMargin[] $midocoMargin
     * @return \Pggns\MidocoApi\Order\StructType\BookTentativeMarginRequest
     */
    public function setMidocoMargin(array $midocoMargin): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMarginArrayErrorMessage = self::validateMidocoMarginForArrayConstraintFromSetMidocoMargin($midocoMargin))) {
            throw new InvalidArgumentException($midocoMarginArrayErrorMessage, __LINE__);
        }
        $this->MidocoMargin = $midocoMargin;
        
        return $this;
    }
    /**
     * Add item to MidocoMargin value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMargin $item
     * @return \Pggns\MidocoApi\Order\StructType\BookTentativeMarginRequest
     */
    public function addToMidocoMargin(\Pggns\MidocoApi\Order\StructType\MidocoMargin $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoMargin) {
            throw new InvalidArgumentException(sprintf('The MidocoMargin property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMargin, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMargin[] = $item;
        
        return $this;
    }
    /**
     * Get lockTravelNo value
     * @return bool|null
     */
    public function getLockTravelNo(): ?bool
    {
        return $this->lockTravelNo;
    }
    /**
     * Set lockTravelNo value
     * @param bool $lockTravelNo
     * @return \Pggns\MidocoApi\Order\StructType\BookTentativeMarginRequest
     */
    public function setLockTravelNo(?bool $lockTravelNo = false): self
    {
        // validation for constraint: boolean
        if (!is_null($lockTravelNo) && !is_bool($lockTravelNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lockTravelNo, true), gettype($lockTravelNo)), __LINE__);
        }
        $this->lockTravelNo = $lockTravelNo;
        
        return $this;
    }
}
