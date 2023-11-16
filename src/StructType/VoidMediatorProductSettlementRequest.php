<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoidMediatorProductSettlementRequest StructType
 * @subpackage Structs
 */
class VoidMediatorProductSettlementRequest extends AbstractStructBase
{
    /**
     * The medStlmntProdId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $medStlmntProdId;
    /**
     * Constructor method for VoidMediatorProductSettlementRequest
     * @uses VoidMediatorProductSettlementRequest::setMedStlmntProdId()
     * @param int $medStlmntProdId
     */
    public function __construct(int $medStlmntProdId)
    {
        $this
            ->setMedStlmntProdId($medStlmntProdId);
    }
    /**
     * Get medStlmntProdId value
     * @return int
     */
    public function getMedStlmntProdId(): int
    {
        return $this->medStlmntProdId;
    }
    /**
     * Set medStlmntProdId value
     * @param int $medStlmntProdId
     * @return \Pggns\MidocoApi\Order\StructType\VoidMediatorProductSettlementRequest
     */
    public function setMedStlmntProdId(int $medStlmntProdId): self
    {
        // validation for constraint: int
        if (!is_null($medStlmntProdId) && !(is_int($medStlmntProdId) || ctype_digit($medStlmntProdId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($medStlmntProdId, true), gettype($medStlmntProdId)), __LINE__);
        }
        $this->medStlmntProdId = $medStlmntProdId;
        
        return $this;
    }
}
