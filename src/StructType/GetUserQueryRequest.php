<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserQueryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUserQueryRequest extends AbstractStructBase
{
    /**
     * The queryId
     * @var int|null
     */
    protected ?int $queryId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for GetUserQueryRequest
     * @uses GetUserQueryRequest::setQueryId()
     * @uses GetUserQueryRequest::setUnitName()
     * @param int $queryId
     * @param string $unitName
     */
    public function __construct(?int $queryId = null, ?string $unitName = null)
    {
        $this
            ->setQueryId($queryId)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetUserQueryRequest
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
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\GetUserQueryRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
