<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMilesAndMoreBurnTransactionType StructType
 * @subpackage Structs
 */
class MidocoMilesAndMoreBurnTransactionType extends MilesAndMoreBurnTransactionDTO
{
    /**
     * The isRefund
     * @var bool|null
     */
    protected ?bool $isRefund = null;
    /**
     * The isFinished
     * @var bool|null
     */
    protected ?bool $isFinished = null;
    /**
     * The billedAmount
     * Meta information extracted from the WSDL
     * - documentation: Used to transmit the billing position price where necessary.
     * @var float|null
     */
    protected ?float $billedAmount = null;
    /**
     * The billedAmountInMiles
     * @var float|null
     */
    protected ?float $billedAmountInMiles = null;
    /**
     * The MidocoMilesAndMoreBurnTransactionDelta
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDeltaDTO[]
     */
    protected array $MidocoMilesAndMoreBurnTransactionDelta = [];
    /**
     * Constructor method for MidocoMilesAndMoreBurnTransactionType
     * @uses MidocoMilesAndMoreBurnTransactionType::setIsRefund()
     * @uses MidocoMilesAndMoreBurnTransactionType::setIsFinished()
     * @uses MidocoMilesAndMoreBurnTransactionType::setBilledAmount()
     * @uses MidocoMilesAndMoreBurnTransactionType::setBilledAmountInMiles()
     * @uses MidocoMilesAndMoreBurnTransactionType::setMidocoMilesAndMoreBurnTransactionDelta()
     * @param bool $isRefund
     * @param bool $isFinished
     * @param float $billedAmount
     * @param float $billedAmountInMiles
     * @param \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDeltaDTO[] $midocoMilesAndMoreBurnTransactionDelta
     */
    public function __construct(?bool $isRefund = null, ?bool $isFinished = null, ?float $billedAmount = null, ?float $billedAmountInMiles = null, array $midocoMilesAndMoreBurnTransactionDelta = [])
    {
        $this
            ->setIsRefund($isRefund)
            ->setIsFinished($isFinished)
            ->setBilledAmount($billedAmount)
            ->setBilledAmountInMiles($billedAmountInMiles)
            ->setMidocoMilesAndMoreBurnTransactionDelta($midocoMilesAndMoreBurnTransactionDelta);
    }
    /**
     * Get isRefund value
     * @return bool|null
     */
    public function getIsRefund(): ?bool
    {
        return $this->isRefund;
    }
    /**
     * Set isRefund value
     * @param bool $isRefund
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType
     */
    public function setIsRefund(?bool $isRefund = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRefund) && !is_bool($isRefund)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRefund, true), gettype($isRefund)), __LINE__);
        }
        $this->isRefund = $isRefund;
        
        return $this;
    }
    /**
     * Get isFinished value
     * @return bool|null
     */
    public function getIsFinished(): ?bool
    {
        return $this->isFinished;
    }
    /**
     * Set isFinished value
     * @param bool $isFinished
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType
     */
    public function setIsFinished(?bool $isFinished = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFinished) && !is_bool($isFinished)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFinished, true), gettype($isFinished)), __LINE__);
        }
        $this->isFinished = $isFinished;
        
        return $this;
    }
    /**
     * Get billedAmount value
     * @return float|null
     */
    public function getBilledAmount(): ?float
    {
        return $this->billedAmount;
    }
    /**
     * Set billedAmount value
     * @param float $billedAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType
     */
    public function setBilledAmount(?float $billedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($billedAmount) && !(is_float($billedAmount) || is_numeric($billedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($billedAmount, true), gettype($billedAmount)), __LINE__);
        }
        $this->billedAmount = $billedAmount;
        
        return $this;
    }
    /**
     * Get billedAmountInMiles value
     * @return float|null
     */
    public function getBilledAmountInMiles(): ?float
    {
        return $this->billedAmountInMiles;
    }
    /**
     * Set billedAmountInMiles value
     * @param float $billedAmountInMiles
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType
     */
    public function setBilledAmountInMiles(?float $billedAmountInMiles = null): self
    {
        // validation for constraint: float
        if (!is_null($billedAmountInMiles) && !(is_float($billedAmountInMiles) || is_numeric($billedAmountInMiles))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($billedAmountInMiles, true), gettype($billedAmountInMiles)), __LINE__);
        }
        $this->billedAmountInMiles = $billedAmountInMiles;
        
        return $this;
    }
    /**
     * Get MidocoMilesAndMoreBurnTransactionDelta value
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDeltaDTO[]
     */
    public function getMidocoMilesAndMoreBurnTransactionDelta(): array
    {
        return $this->MidocoMilesAndMoreBurnTransactionDelta;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMilesAndMoreBurnTransactionDelta method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMilesAndMoreBurnTransactionDelta method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMilesAndMoreBurnTransactionDeltaForArrayConstraintsFromSetMidocoMilesAndMoreBurnTransactionDelta(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoMilesAndMoreBurnTransactionTypeMidocoMilesAndMoreBurnTransactionDeltaItem) {
            // validation for constraint: itemType
            if (!$midocoMilesAndMoreBurnTransactionTypeMidocoMilesAndMoreBurnTransactionDeltaItem instanceof \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDeltaDTO) {
                $invalidValues[] = is_object($midocoMilesAndMoreBurnTransactionTypeMidocoMilesAndMoreBurnTransactionDeltaItem) ? get_class($midocoMilesAndMoreBurnTransactionTypeMidocoMilesAndMoreBurnTransactionDeltaItem) : sprintf('%s(%s)', gettype($midocoMilesAndMoreBurnTransactionTypeMidocoMilesAndMoreBurnTransactionDeltaItem), var_export($midocoMilesAndMoreBurnTransactionTypeMidocoMilesAndMoreBurnTransactionDeltaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMilesAndMoreBurnTransactionDelta property can only contain items of type \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDeltaDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMilesAndMoreBurnTransactionDelta value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDeltaDTO[] $midocoMilesAndMoreBurnTransactionDelta
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType
     */
    public function setMidocoMilesAndMoreBurnTransactionDelta(array $midocoMilesAndMoreBurnTransactionDelta = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMilesAndMoreBurnTransactionDeltaArrayErrorMessage = self::validateMidocoMilesAndMoreBurnTransactionDeltaForArrayConstraintsFromSetMidocoMilesAndMoreBurnTransactionDelta($midocoMilesAndMoreBurnTransactionDelta))) {
            throw new InvalidArgumentException($midocoMilesAndMoreBurnTransactionDeltaArrayErrorMessage, __LINE__);
        }
        $this->MidocoMilesAndMoreBurnTransactionDelta = $midocoMilesAndMoreBurnTransactionDelta;
        
        return $this;
    }
    /**
     * Add item to MidocoMilesAndMoreBurnTransactionDelta value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDeltaDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType
     */
    public function addToMidocoMilesAndMoreBurnTransactionDelta(\Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDeltaDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDeltaDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMilesAndMoreBurnTransactionDelta property can only contain items of type \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDeltaDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMilesAndMoreBurnTransactionDelta[] = $item;
        
        return $this;
    }
}
