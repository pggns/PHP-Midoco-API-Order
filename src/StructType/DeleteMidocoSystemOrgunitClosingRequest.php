<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoSystemOrgunitClosingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoSystemOrgunitClosingRequest extends AbstractStructBase
{
    /**
     * The closureId
     * @var int|null
     */
    protected ?int $closureId = null;
    /**
     * Constructor method for DeleteMidocoSystemOrgunitClosingRequest
     * @uses DeleteMidocoSystemOrgunitClosingRequest::setClosureId()
     * @param int $closureId
     */
    public function __construct(?int $closureId = null)
    {
        $this
            ->setClosureId($closureId);
    }
    /**
     * Get closureId value
     * @return int|null
     */
    public function getClosureId(): ?int
    {
        return $this->closureId;
    }
    /**
     * Set closureId value
     * @param int $closureId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMidocoSystemOrgunitClosingRequest
     */
    public function setClosureId(?int $closureId = null): self
    {
        // validation for constraint: int
        if (!is_null($closureId) && !(is_int($closureId) || ctype_digit($closureId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($closureId, true), gettype($closureId)), __LINE__);
        }
        $this->closureId = $closureId;
        
        return $this;
    }
}
