<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoSettlementTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoSettlementTypeRequest extends AbstractStructBase
{
    /**
     * The settlementType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $settlementType;
    /**
     * Constructor method for DeleteMidocoSettlementTypeRequest
     * @uses DeleteMidocoSettlementTypeRequest::setSettlementType()
     * @param string $settlementType
     */
    public function __construct(string $settlementType)
    {
        $this
            ->setSettlementType($settlementType);
    }
    /**
     * Get settlementType value
     * @return string
     */
    public function getSettlementType(): string
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param string $settlementType
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMidocoSettlementTypeRequest
     */
    public function setSettlementType(string $settlementType): self
    {
        // validation for constraint: string
        if (!is_null($settlementType) && !is_string($settlementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
        return $this;
    }
}
