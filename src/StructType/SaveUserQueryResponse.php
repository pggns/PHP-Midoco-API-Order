<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveUserQueryResponse StructType
 * @subpackage Structs
 */
class SaveUserQueryResponse extends AbstractStructBase
{
    /**
     * The userQueryId
     * @var int|null
     */
    protected ?int $userQueryId = null;
    /**
     * Constructor method for SaveUserQueryResponse
     * @uses SaveUserQueryResponse::setUserQueryId()
     * @param int $userQueryId
     */
    public function __construct(?int $userQueryId = null)
    {
        $this
            ->setUserQueryId($userQueryId);
    }
    /**
     * Get userQueryId value
     * @return int|null
     */
    public function getUserQueryId(): ?int
    {
        return $this->userQueryId;
    }
    /**
     * Set userQueryId value
     * @param int $userQueryId
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryResponse
     */
    public function setUserQueryId(?int $userQueryId = null): self
    {
        // validation for constraint: int
        if (!is_null($userQueryId) && !(is_int($userQueryId) || ctype_digit($userQueryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userQueryId, true), gettype($userQueryId)), __LINE__);
        }
        $this->userQueryId = $userQueryId;
        
        return $this;
    }
}
