<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveToTravelPlanHistoryResponse StructType
 * @subpackage Structs
 */
class SaveToTravelPlanHistoryResponse extends AbstractStructBase
{
    /**
     * The historyId
     * @var int|null
     */
    protected ?int $historyId = null;
    /**
     * Constructor method for SaveToTravelPlanHistoryResponse
     * @uses SaveToTravelPlanHistoryResponse::setHistoryId()
     * @param int $historyId
     */
    public function __construct(?int $historyId = null)
    {
        $this
            ->setHistoryId($historyId);
    }
    /**
     * Get historyId value
     * @return int|null
     */
    public function getHistoryId(): ?int
    {
        return $this->historyId;
    }
    /**
     * Set historyId value
     * @param int $historyId
     * @return \Pggns\MidocoApi\Order\StructType\SaveToTravelPlanHistoryResponse
     */
    public function setHistoryId(?int $historyId = null): self
    {
        // validation for constraint: int
        if (!is_null($historyId) && !(is_int($historyId) || ctype_digit($historyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($historyId, true), gettype($historyId)), __LINE__);
        }
        $this->historyId = $historyId;
        
        return $this;
    }
}
