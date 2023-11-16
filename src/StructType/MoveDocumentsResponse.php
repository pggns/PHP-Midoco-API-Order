<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MoveDocumentsResponse StructType
 * @subpackage Structs
 */
class MoveDocumentsResponse extends AbstractStructBase
{
    /**
     * The newOrderId
     * @var int|null
     */
    protected ?int $newOrderId = null;
    /**
     * The newOrderNo
     * @var int|null
     */
    protected ?int $newOrderNo = null;
    /**
     * Constructor method for MoveDocumentsResponse
     * @uses MoveDocumentsResponse::setNewOrderId()
     * @uses MoveDocumentsResponse::setNewOrderNo()
     * @param int $newOrderId
     * @param int $newOrderNo
     */
    public function __construct(?int $newOrderId = null, ?int $newOrderNo = null)
    {
        $this
            ->setNewOrderId($newOrderId)
            ->setNewOrderNo($newOrderNo);
    }
    /**
     * Get newOrderId value
     * @return int|null
     */
    public function getNewOrderId(): ?int
    {
        return $this->newOrderId;
    }
    /**
     * Set newOrderId value
     * @param int $newOrderId
     * @return \Pggns\MidocoApi\Order\StructType\MoveDocumentsResponse
     */
    public function setNewOrderId(?int $newOrderId = null): self
    {
        // validation for constraint: int
        if (!is_null($newOrderId) && !(is_int($newOrderId) || ctype_digit($newOrderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($newOrderId, true), gettype($newOrderId)), __LINE__);
        }
        $this->newOrderId = $newOrderId;
        
        return $this;
    }
    /**
     * Get newOrderNo value
     * @return int|null
     */
    public function getNewOrderNo(): ?int
    {
        return $this->newOrderNo;
    }
    /**
     * Set newOrderNo value
     * @param int $newOrderNo
     * @return \Pggns\MidocoApi\Order\StructType\MoveDocumentsResponse
     */
    public function setNewOrderNo(?int $newOrderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($newOrderNo) && !(is_int($newOrderNo) || ctype_digit($newOrderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($newOrderNo, true), gettype($newOrderNo)), __LINE__);
        }
        $this->newOrderNo = $newOrderNo;
        
        return $this;
    }
}
