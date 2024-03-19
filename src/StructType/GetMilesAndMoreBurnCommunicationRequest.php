<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMilesAndMoreBurnCommunicationRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns the requested and found Miles & More burn transactions. If the requested transactions can not be found, an exception is thrown.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMilesAndMoreBurnCommunicationRequest extends AbstractStructBase
{
    /**
     * The PositionId
     * Meta information extracted from the WSDL
     * - documentation: The id of the billing position for which to return the HTTP communication of its burn-transaction.
     * @var int|null
     */
    protected ?int $PositionId = null;
    /**
     * Constructor method for GetMilesAndMoreBurnCommunicationRequest
     * @uses GetMilesAndMoreBurnCommunicationRequest::setPositionId()
     * @param int $positionId
     */
    public function __construct(?int $positionId = null)
    {
        $this
            ->setPositionId($positionId);
    }
    /**
     * Get PositionId value
     * @return int|null
     */
    public function getPositionId(): ?int
    {
        return $this->PositionId;
    }
    /**
     * Set PositionId value
     * @param int $positionId
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMoreBurnCommunicationRequest
     */
    public function setPositionId(?int $positionId = null): self
    {
        // validation for constraint: int
        if (!is_null($positionId) && !(is_int($positionId) || ctype_digit($positionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionId, true), gettype($positionId)), __LINE__);
        }
        $this->PositionId = $positionId;
        
        return $this;
    }
}
