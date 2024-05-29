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
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for ListUserQueriesRequest
     * @uses ListUserQueriesRequest::setQueryType()
     * @uses ListUserQueriesRequest::setDescription()
     * @param string $queryType
     * @param string $description
     */
    public function __construct(?string $queryType = 'B', ?string $description = null)
    {
        $this
            ->setQueryType($queryType)
            ->setDescription($description);
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
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\ListUserQueriesRequest
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
}
