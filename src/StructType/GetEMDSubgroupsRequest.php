<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEMDSubgroupsRequest StructType
 * @subpackage Structs
 */
class GetEMDSubgroupsRequest extends AbstractStructBase
{
    /**
     * The emdType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $emdType;
    /**
     * Constructor method for GetEMDSubgroupsRequest
     * @uses GetEMDSubgroupsRequest::setEmdType()
     * @param string $emdType
     */
    public function __construct(string $emdType)
    {
        $this
            ->setEmdType($emdType);
    }
    /**
     * Get emdType value
     * @return string
     */
    public function getEmdType(): string
    {
        return $this->emdType;
    }
    /**
     * Set emdType value
     * @param string $emdType
     * @return \Pggns\MidocoApi\Order\StructType\GetEMDSubgroupsRequest
     */
    public function setEmdType(string $emdType): self
    {
        // validation for constraint: string
        if (!is_null($emdType) && !is_string($emdType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emdType, true), gettype($emdType)), __LINE__);
        }
        $this->emdType = $emdType;
        
        return $this;
    }
}
