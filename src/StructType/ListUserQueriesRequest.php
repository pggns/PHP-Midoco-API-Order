<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListUserQueriesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListUserQueriesRequest extends AbstractStructBase
{
    /**
     * The queryType
     * Meta information extracted from the WSDL
     * - default: B
     * @var string|null
     */
    protected ?string $queryType = null;
    /**
     * Constructor method for ListUserQueriesRequest
     * @uses ListUserQueriesRequest::setQueryType()
     * @param string $queryType
     */
    public function __construct(?string $queryType = 'B')
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
     * @return \Pggns\MidocoApi\Order\StructType\ListUserQueriesRequest
     */
    public function setQueryType(?string $queryType = 'B'): self
    {
        // validation for constraint: string
        if (!is_null($queryType) && !is_string($queryType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryType, true), gettype($queryType)), __LINE__);
        }
        $this->queryType = $queryType;
        
        return $this;
    }
}
