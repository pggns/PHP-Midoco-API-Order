<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableQueryFieldsRequest StructType
 * @subpackage Structs
 */
class GetAvailableQueryFieldsRequest extends AbstractStructBase
{
    /**
     * The queryType
     * @var string|null
     */
    protected ?string $queryType = null;
    /**
     * Constructor method for GetAvailableQueryFieldsRequest
     * @uses GetAvailableQueryFieldsRequest::setQueryType()
     * @param string $queryType
     */
    public function __construct(?string $queryType = null)
    {
        $this
            ->setQueryType($queryType);
    }
    /**
     * Get queryType value
     * @return string|null
     */
    public function getQueryType(): ?string
    {
        return $this->queryType;
    }
    /**
     * Set queryType value
     * @param string $queryType
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailableQueryFieldsRequest
     */
    public function setQueryType(?string $queryType = null): self
    {
        // validation for constraint: string
        if (!is_null($queryType) && !is_string($queryType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryType, true), gettype($queryType)), __LINE__);
        }
        $this->queryType = $queryType;
        
        return $this;
    }
}
