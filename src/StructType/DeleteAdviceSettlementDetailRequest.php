<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAdviceSettlementDetailRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteAdviceSettlementDetailRequest extends AbstractStructBase
{
    /**
     * The detailId
     * @var int|null
     */
    protected ?int $detailId = null;
    /**
     * Constructor method for DeleteAdviceSettlementDetailRequest
     * @uses DeleteAdviceSettlementDetailRequest::setDetailId()
     * @param int $detailId
     */
    public function __construct(?int $detailId = null)
    {
        $this
            ->setDetailId($detailId);
    }
    /**
     * Get detailId value
     * @return int|null
     */
    public function getDetailId(): ?int
    {
        return $this->detailId;
    }
    /**
     * Set detailId value
     * @param int $detailId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteAdviceSettlementDetailRequest
     */
    public function setDetailId(?int $detailId = null): self
    {
        // validation for constraint: int
        if (!is_null($detailId) && !(is_int($detailId) || ctype_digit($detailId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($detailId, true), gettype($detailId)), __LINE__);
        }
        $this->detailId = $detailId;
        
        return $this;
    }
}
