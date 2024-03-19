<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MoveBillingPosition2NewDocumentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MoveBillingPosition2NewDocumentRequest extends AbstractStructBase
{
    /**
     * The positionId
     * @var int|null
     */
    protected ?int $positionId = null;
    /**
     * Constructor method for MoveBillingPosition2NewDocumentRequest
     * @uses MoveBillingPosition2NewDocumentRequest::setPositionId()
     * @param int $positionId
     */
    public function __construct(?int $positionId = null)
    {
        $this
            ->setPositionId($positionId);
    }
    /**
     * Get positionId value
     * @return int|null
     */
    public function getPositionId(): ?int
    {
        return $this->positionId;
    }
    /**
     * Set positionId value
     * @param int $positionId
     * @return \Pggns\MidocoApi\Order\StructType\MoveBillingPosition2NewDocumentRequest
     */
    public function setPositionId(?int $positionId = null): self
    {
        // validation for constraint: int
        if (!is_null($positionId) && !(is_int($positionId) || ctype_digit($positionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionId, true), gettype($positionId)), __LINE__);
        }
        $this->positionId = $positionId;
        
        return $this;
    }
}
