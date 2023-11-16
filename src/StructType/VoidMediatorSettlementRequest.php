<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoidMediatorSettlementRequest StructType
 * @subpackage Structs
 */
class VoidMediatorSettlementRequest extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $id;
    /**
     * Constructor method for VoidMediatorSettlementRequest
     * @uses VoidMediatorSettlementRequest::setId()
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this
            ->setId($id);
    }
    /**
     * Get id value
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\VoidMediatorSettlementRequest
     */
    public function setId(int $id): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
}
