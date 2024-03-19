<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMediatorProductSettlementDetailsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMediatorProductSettlementDetailsRequest extends AbstractStructBase
{
    /**
     * The medStlmntProdId
     * @var int|null
     */
    protected ?int $medStlmntProdId = null;
    /**
     * Constructor method for GetMediatorProductSettlementDetailsRequest
     * @uses GetMediatorProductSettlementDetailsRequest::setMedStlmntProdId()
     * @param int $medStlmntProdId
     */
    public function __construct(?int $medStlmntProdId = null)
    {
        $this
            ->setMedStlmntProdId($medStlmntProdId);
    }
    /**
     * Get medStlmntProdId value
     * @return int|null
     */
    public function getMedStlmntProdId(): ?int
    {
        return $this->medStlmntProdId;
    }
    /**
     * Set medStlmntProdId value
     * @param int $medStlmntProdId
     * @return \Pggns\MidocoApi\Order\StructType\GetMediatorProductSettlementDetailsRequest
     */
    public function setMedStlmntProdId(?int $medStlmntProdId = null): self
    {
        // validation for constraint: int
        if (!is_null($medStlmntProdId) && !(is_int($medStlmntProdId) || ctype_digit($medStlmntProdId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($medStlmntProdId, true), gettype($medStlmntProdId)), __LINE__);
        }
        $this->medStlmntProdId = $medStlmntProdId;
        
        return $this;
    }
}
