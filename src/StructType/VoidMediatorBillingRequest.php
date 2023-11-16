<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoidMediatorBillingRequest StructType
 * @subpackage Structs
 */
class VoidMediatorBillingRequest extends AbstractStructBase
{
    /**
     * The mediatorBillingId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $mediatorBillingId;
    /**
     * Constructor method for VoidMediatorBillingRequest
     * @uses VoidMediatorBillingRequest::setMediatorBillingId()
     * @param int $mediatorBillingId
     */
    public function __construct(int $mediatorBillingId)
    {
        $this
            ->setMediatorBillingId($mediatorBillingId);
    }
    /**
     * Get mediatorBillingId value
     * @return int
     */
    public function getMediatorBillingId(): int
    {
        return $this->mediatorBillingId;
    }
    /**
     * Set mediatorBillingId value
     * @param int $mediatorBillingId
     * @return \Pggns\MidocoApi\Order\StructType\VoidMediatorBillingRequest
     */
    public function setMediatorBillingId(int $mediatorBillingId): self
    {
        // validation for constraint: int
        if (!is_null($mediatorBillingId) && !(is_int($mediatorBillingId) || ctype_digit($mediatorBillingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mediatorBillingId, true), gettype($mediatorBillingId)), __LINE__);
        }
        $this->mediatorBillingId = $mediatorBillingId;
        
        return $this;
    }
}
