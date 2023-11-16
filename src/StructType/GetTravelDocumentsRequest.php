<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelDocumentsRequest StructType
 * @subpackage Structs
 */
class GetTravelDocumentsRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The tdId
     * @var int|null
     */
    protected ?int $tdId = null;
    /**
     * Constructor method for GetTravelDocumentsRequest
     * @uses GetTravelDocumentsRequest::setOrderId()
     * @uses GetTravelDocumentsRequest::setTdId()
     * @param int $orderId
     * @param int $tdId
     */
    public function __construct(?int $orderId = null, ?int $tdId = null)
    {
        $this
            ->setOrderId($orderId)
            ->setTdId($tdId);
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelDocumentsRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get tdId value
     * @return int|null
     */
    public function getTdId(): ?int
    {
        return $this->tdId;
    }
    /**
     * Set tdId value
     * @param int $tdId
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelDocumentsRequest
     */
    public function setTdId(?int $tdId = null): self
    {
        // validation for constraint: int
        if (!is_null($tdId) && !(is_int($tdId) || ctype_digit($tdId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tdId, true), gettype($tdId)), __LINE__);
        }
        $this->tdId = $tdId;
        
        return $this;
    }
}
