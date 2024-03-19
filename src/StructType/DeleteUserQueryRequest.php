<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteUserQueryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteUserQueryRequest extends AbstractStructBase
{
    /**
     * The queryId
     * @var int|null
     */
    protected ?int $queryId = null;
    /**
     * Constructor method for DeleteUserQueryRequest
     * @uses DeleteUserQueryRequest::setQueryId()
     * @param int $queryId
     */
    public function __construct(?int $queryId = null)
    {
        $this
            ->setQueryId($queryId);
    }
    /**
     * Get queryId value
     * @return int|null
     */
    public function getQueryId(): ?int
    {
        return $this->queryId;
    }
    /**
     * Set queryId value
     * @param int $queryId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteUserQueryRequest
     */
    public function setQueryId(?int $queryId = null): self
    {
        // validation for constraint: int
        if (!is_null($queryId) && !(is_int($queryId) || ctype_digit($queryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($queryId, true), gettype($queryId)), __LINE__);
        }
        $this->queryId = $queryId;
        
        return $this;
    }
}
