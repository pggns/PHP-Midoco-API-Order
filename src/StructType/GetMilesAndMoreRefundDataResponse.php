<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMilesAndMoreRefundDataResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMilesAndMoreRefundDataResponse extends AbstractStructBase
{
    /**
     * The MidocoMilesAndMoreBurnTransactionWithRefundBounds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionWithRefundBounds[]
     */
    protected ?array $MidocoMilesAndMoreBurnTransactionWithRefundBounds = null;
    /**
     * The minimalRefundAmount
     * Meta information extracted from the WSDL
     * - documentation: The minimal refund amount for the billing
     * @var float|null
     */
    protected ?float $minimalRefundAmount = null;
    /**
     * The maximalRefundAmount
     * Meta information extracted from the WSDL
     * - documentation: The maximal refund amount for the billing
     * @var float|null
     */
    protected ?float $maximalRefundAmount = null;
    /**
     * The currentRefundAmount
     * Meta information extracted from the WSDL
     * - documentation: The current refund amount on the billing
     * @var float|null
     */
    protected ?float $currentRefundAmount = null;
    /**
     * Constructor method for GetMilesAndMoreRefundDataResponse
     * @uses GetMilesAndMoreRefundDataResponse::setMidocoMilesAndMoreBurnTransactionWithRefundBounds()
     * @uses GetMilesAndMoreRefundDataResponse::setMinimalRefundAmount()
     * @uses GetMilesAndMoreRefundDataResponse::setMaximalRefundAmount()
     * @uses GetMilesAndMoreRefundDataResponse::setCurrentRefundAmount()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionWithRefundBounds[] $midocoMilesAndMoreBurnTransactionWithRefundBounds
     * @param float $minimalRefundAmount
     * @param float $maximalRefundAmount
     * @param float $currentRefundAmount
     */
    public function __construct(?array $midocoMilesAndMoreBurnTransactionWithRefundBounds = null, ?float $minimalRefundAmount = null, ?float $maximalRefundAmount = null, ?float $currentRefundAmount = null)
    {
        $this
            ->setMidocoMilesAndMoreBurnTransactionWithRefundBounds($midocoMilesAndMoreBurnTransactionWithRefundBounds)
            ->setMinimalRefundAmount($minimalRefundAmount)
            ->setMaximalRefundAmount($maximalRefundAmount)
            ->setCurrentRefundAmount($currentRefundAmount);
    }
    /**
     * Get MidocoMilesAndMoreBurnTransactionWithRefundBounds value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionWithRefundBounds[]
     */
    public function getMidocoMilesAndMoreBurnTransactionWithRefundBounds(): ?array
    {
        return $this->MidocoMilesAndMoreBurnTransactionWithRefundBounds;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMilesAndMoreBurnTransactionWithRefundBounds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMilesAndMoreBurnTransactionWithRefundBounds method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMilesAndMoreBurnTransactionWithRefundBoundsForArrayConstraintFromSetMidocoMilesAndMoreBurnTransactionWithRefundBounds(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMilesAndMoreRefundDataResponseMidocoMilesAndMoreBurnTransactionWithRefundBoundsItem) {
            // validation for constraint: itemType
            if (!$getMilesAndMoreRefundDataResponseMidocoMilesAndMoreBurnTransactionWithRefundBoundsItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionWithRefundBounds) {
                $invalidValues[] = is_object($getMilesAndMoreRefundDataResponseMidocoMilesAndMoreBurnTransactionWithRefundBoundsItem) ? get_class($getMilesAndMoreRefundDataResponseMidocoMilesAndMoreBurnTransactionWithRefundBoundsItem) : sprintf('%s(%s)', gettype($getMilesAndMoreRefundDataResponseMidocoMilesAndMoreBurnTransactionWithRefundBoundsItem), var_export($getMilesAndMoreRefundDataResponseMidocoMilesAndMoreBurnTransactionWithRefundBoundsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMilesAndMoreBurnTransactionWithRefundBounds property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionWithRefundBounds, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMilesAndMoreBurnTransactionWithRefundBounds value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionWithRefundBounds[] $midocoMilesAndMoreBurnTransactionWithRefundBounds
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMoreRefundDataResponse
     */
    public function setMidocoMilesAndMoreBurnTransactionWithRefundBounds(?array $midocoMilesAndMoreBurnTransactionWithRefundBounds = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMilesAndMoreBurnTransactionWithRefundBoundsArrayErrorMessage = self::validateMidocoMilesAndMoreBurnTransactionWithRefundBoundsForArrayConstraintFromSetMidocoMilesAndMoreBurnTransactionWithRefundBounds($midocoMilesAndMoreBurnTransactionWithRefundBounds))) {
            throw new InvalidArgumentException($midocoMilesAndMoreBurnTransactionWithRefundBoundsArrayErrorMessage, __LINE__);
        }
        $this->MidocoMilesAndMoreBurnTransactionWithRefundBounds = $midocoMilesAndMoreBurnTransactionWithRefundBounds;
        
        return $this;
    }
    /**
     * Add item to MidocoMilesAndMoreBurnTransactionWithRefundBounds value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionWithRefundBounds $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMoreRefundDataResponse
     */
    public function addToMidocoMilesAndMoreBurnTransactionWithRefundBounds(\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionWithRefundBounds $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionWithRefundBounds) {
            throw new InvalidArgumentException(sprintf('The MidocoMilesAndMoreBurnTransactionWithRefundBounds property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionWithRefundBounds, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMilesAndMoreBurnTransactionWithRefundBounds[] = $item;
        
        return $this;
    }
    /**
     * Get minimalRefundAmount value
     * @return float|null
     */
    public function getMinimalRefundAmount(): ?float
    {
        return $this->minimalRefundAmount;
    }
    /**
     * Set minimalRefundAmount value
     * @param float $minimalRefundAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMoreRefundDataResponse
     */
    public function setMinimalRefundAmount(?float $minimalRefundAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($minimalRefundAmount) && !(is_float($minimalRefundAmount) || is_numeric($minimalRefundAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minimalRefundAmount, true), gettype($minimalRefundAmount)), __LINE__);
        }
        $this->minimalRefundAmount = $minimalRefundAmount;
        
        return $this;
    }
    /**
     * Get maximalRefundAmount value
     * @return float|null
     */
    public function getMaximalRefundAmount(): ?float
    {
        return $this->maximalRefundAmount;
    }
    /**
     * Set maximalRefundAmount value
     * @param float $maximalRefundAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMoreRefundDataResponse
     */
    public function setMaximalRefundAmount(?float $maximalRefundAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($maximalRefundAmount) && !(is_float($maximalRefundAmount) || is_numeric($maximalRefundAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($maximalRefundAmount, true), gettype($maximalRefundAmount)), __LINE__);
        }
        $this->maximalRefundAmount = $maximalRefundAmount;
        
        return $this;
    }
    /**
     * Get currentRefundAmount value
     * @return float|null
     */
    public function getCurrentRefundAmount(): ?float
    {
        return $this->currentRefundAmount;
    }
    /**
     * Set currentRefundAmount value
     * @param float $currentRefundAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMoreRefundDataResponse
     */
    public function setCurrentRefundAmount(?float $currentRefundAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($currentRefundAmount) && !(is_float($currentRefundAmount) || is_numeric($currentRefundAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($currentRefundAmount, true), gettype($currentRefundAmount)), __LINE__);
        }
        $this->currentRefundAmount = $currentRefundAmount;
        
        return $this;
    }
}
