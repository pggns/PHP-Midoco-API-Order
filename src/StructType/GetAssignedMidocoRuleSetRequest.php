<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedMidocoRuleSetRequest StructType
 * @subpackage Structs
 */
class GetAssignedMidocoRuleSetRequest extends AbstractStructBase
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $type;
    /**
     * Constructor method for GetAssignedMidocoRuleSetRequest
     * @uses GetAssignedMidocoRuleSetRequest::setType()
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this
            ->setType($type);
    }
    /**
     * Get type value
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\GetAssignedMidocoRuleSetRequest
     */
    public function setType(string $type): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
