<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplierCommissionConditionRequest StructType
 * @subpackage Structs
 */
class DeleteSupplierCommissionConditionRequest extends AbstractStructBase
{
    /**
     * The conditionId
     * @var int|null
     */
    protected ?int $conditionId = null;
    /**
     * Constructor method for DeleteSupplierCommissionConditionRequest
     * @uses DeleteSupplierCommissionConditionRequest::setConditionId()
     * @param int $conditionId
     */
    public function __construct(?int $conditionId = null)
    {
        $this
            ->setConditionId($conditionId);
    }
    /**
     * Get conditionId value
     * @return int|null
     */
    public function getConditionId(): ?int
    {
        return $this->conditionId;
    }
    /**
     * Set conditionId value
     * @param int $conditionId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSupplierCommissionConditionRequest
     */
    public function setConditionId(?int $conditionId = null): self
    {
        // validation for constraint: int
        if (!is_null($conditionId) && !(is_int($conditionId) || ctype_digit($conditionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($conditionId, true), gettype($conditionId)), __LINE__);
        }
        $this->conditionId = $conditionId;
        
        return $this;
    }
}
