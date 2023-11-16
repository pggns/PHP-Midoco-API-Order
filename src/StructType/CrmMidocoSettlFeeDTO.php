<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmMidocoSettlFeeDTO StructType
 * @subpackage Structs
 */
class CrmMidocoSettlFeeDTO extends AbstractStructBase
{
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The amountPerBatch
     * @var float|null
     */
    protected ?float $amountPerBatch = null;
    /**
     * The batchQuantity
     * @var int|null
     */
    protected ?int $batchQuantity = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The factor
     * @var int|null
     */
    protected ?int $factor = null;
    /**
     * The feeId
     * @var int|null
     */
    protected ?int $feeId = null;
    /**
     * The includedQuantity
     * @var int|null
     */
    protected ?int $includedQuantity = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * Constructor method for CrmMidocoSettlFeeDTO
     * @uses CrmMidocoSettlFeeDTO::setAmount()
     * @uses CrmMidocoSettlFeeDTO::setAmountPerBatch()
     * @uses CrmMidocoSettlFeeDTO::setBatchQuantity()
     * @uses CrmMidocoSettlFeeDTO::setCustomerId()
     * @uses CrmMidocoSettlFeeDTO::setDescription()
     * @uses CrmMidocoSettlFeeDTO::setFactor()
     * @uses CrmMidocoSettlFeeDTO::setFeeId()
     * @uses CrmMidocoSettlFeeDTO::setIncludedQuantity()
     * @uses CrmMidocoSettlFeeDTO::setSettlementId()
     * @param float $amount
     * @param float $amountPerBatch
     * @param int $batchQuantity
     * @param int $customerId
     * @param string $description
     * @param int $factor
     * @param int $feeId
     * @param int $includedQuantity
     * @param int $settlementId
     */
    public function __construct(?float $amount = null, ?float $amountPerBatch = null, ?int $batchQuantity = null, ?int $customerId = null, ?string $description = null, ?int $factor = null, ?int $feeId = null, ?int $includedQuantity = null, ?int $settlementId = null)
    {
        $this
            ->setAmount($amount)
            ->setAmountPerBatch($amountPerBatch)
            ->setBatchQuantity($batchQuantity)
            ->setCustomerId($customerId)
            ->setDescription($description)
            ->setFactor($factor)
            ->setFeeId($feeId)
            ->setIncludedQuantity($includedQuantity)
            ->setSettlementId($settlementId);
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlFeeDTO
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get amountPerBatch value
     * @return float|null
     */
    public function getAmountPerBatch(): ?float
    {
        return $this->amountPerBatch;
    }
    /**
     * Set amountPerBatch value
     * @param float $amountPerBatch
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlFeeDTO
     */
    public function setAmountPerBatch(?float $amountPerBatch = null): self
    {
        // validation for constraint: float
        if (!is_null($amountPerBatch) && !(is_float($amountPerBatch) || is_numeric($amountPerBatch))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountPerBatch, true), gettype($amountPerBatch)), __LINE__);
        }
        $this->amountPerBatch = $amountPerBatch;
        
        return $this;
    }
    /**
     * Get batchQuantity value
     * @return int|null
     */
    public function getBatchQuantity(): ?int
    {
        return $this->batchQuantity;
    }
    /**
     * Set batchQuantity value
     * @param int $batchQuantity
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlFeeDTO
     */
    public function setBatchQuantity(?int $batchQuantity = null): self
    {
        // validation for constraint: int
        if (!is_null($batchQuantity) && !(is_int($batchQuantity) || ctype_digit($batchQuantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchQuantity, true), gettype($batchQuantity)), __LINE__);
        }
        $this->batchQuantity = $batchQuantity;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlFeeDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlFeeDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get factor value
     * @return int|null
     */
    public function getFactor(): ?int
    {
        return $this->factor;
    }
    /**
     * Set factor value
     * @param int $factor
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlFeeDTO
     */
    public function setFactor(?int $factor = null): self
    {
        // validation for constraint: int
        if (!is_null($factor) && !(is_int($factor) || ctype_digit($factor))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($factor, true), gettype($factor)), __LINE__);
        }
        $this->factor = $factor;
        
        return $this;
    }
    /**
     * Get feeId value
     * @return int|null
     */
    public function getFeeId(): ?int
    {
        return $this->feeId;
    }
    /**
     * Set feeId value
     * @param int $feeId
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlFeeDTO
     */
    public function setFeeId(?int $feeId = null): self
    {
        // validation for constraint: int
        if (!is_null($feeId) && !(is_int($feeId) || ctype_digit($feeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feeId, true), gettype($feeId)), __LINE__);
        }
        $this->feeId = $feeId;
        
        return $this;
    }
    /**
     * Get includedQuantity value
     * @return int|null
     */
    public function getIncludedQuantity(): ?int
    {
        return $this->includedQuantity;
    }
    /**
     * Set includedQuantity value
     * @param int $includedQuantity
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlFeeDTO
     */
    public function setIncludedQuantity(?int $includedQuantity = null): self
    {
        // validation for constraint: int
        if (!is_null($includedQuantity) && !(is_int($includedQuantity) || ctype_digit($includedQuantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($includedQuantity, true), gettype($includedQuantity)), __LINE__);
        }
        $this->includedQuantity = $includedQuantity;
        
        return $this;
    }
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlFeeDTO
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
}
