<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteDunningResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteDunningResponse extends AbstractStructBase
{
    /**
     * The dunningId
     * @var int|null
     */
    protected ?int $dunningId = null;
    /**
     * Constructor method for ExecuteDunningResponse
     * @uses ExecuteDunningResponse::setDunningId()
     * @param int $dunningId
     */
    public function __construct(?int $dunningId = null)
    {
        $this
            ->setDunningId($dunningId);
    }
    /**
     * Get dunningId value
     * @return int|null
     */
    public function getDunningId(): ?int
    {
        return $this->dunningId;
    }
    /**
     * Set dunningId value
     * @param int $dunningId
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteDunningResponse
     */
    public function setDunningId(?int $dunningId = null): self
    {
        // validation for constraint: int
        if (!is_null($dunningId) && !(is_int($dunningId) || ctype_digit($dunningId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dunningId, true), gettype($dunningId)), __LINE__);
        }
        $this->dunningId = $dunningId;
        
        return $this;
    }
}
