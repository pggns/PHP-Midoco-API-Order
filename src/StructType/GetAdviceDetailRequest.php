<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAdviceDetailRequest StructType
 * @subpackage Structs
 */
class GetAdviceDetailRequest extends AbstractStructBase
{
    /**
     * The detailId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $detailId;
    /**
     * Constructor method for GetAdviceDetailRequest
     * @uses GetAdviceDetailRequest::setDetailId()
     * @param int $detailId
     */
    public function __construct(int $detailId)
    {
        $this
            ->setDetailId($detailId);
    }
    /**
     * Get detailId value
     * @return int
     */
    public function getDetailId(): int
    {
        return $this->detailId;
    }
    /**
     * Set detailId value
     * @param int $detailId
     * @return \Pggns\MidocoApi\Order\StructType\GetAdviceDetailRequest
     */
    public function setDetailId(int $detailId): self
    {
        // validation for constraint: int
        if (!is_null($detailId) && !(is_int($detailId) || ctype_digit($detailId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($detailId, true), gettype($detailId)), __LINE__);
        }
        $this->detailId = $detailId;
        
        return $this;
    }
}
