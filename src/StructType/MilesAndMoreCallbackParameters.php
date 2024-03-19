<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MilesAndMoreCallbackParameters StructType
 * Meta information extracted from the WSDL
 * - documentation: Parameters from the callback servlet.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MilesAndMoreCallbackParameters extends AbstractStructBase
{
    /**
     * The ref
     * Meta information extracted from the WSDL
     * - documentation: The ref query parameter $unitId.$requestId.$signature
     * @var string|null
     */
    protected ?string $ref = null;
    /**
     * Constructor method for MilesAndMoreCallbackParameters
     * @uses MilesAndMoreCallbackParameters::setRef()
     * @param string $ref
     */
    public function __construct(?string $ref = null)
    {
        $this
            ->setRef($ref);
    }
    /**
     * Get ref value
     * @return string|null
     */
    public function getRef(): ?string
    {
        return $this->ref;
    }
    /**
     * Set ref value
     * @param string $ref
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreCallbackParameters
     */
    public function setRef(?string $ref = null): self
    {
        // validation for constraint: string
        if (!is_null($ref) && !is_string($ref)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ref, true), gettype($ref)), __LINE__);
        }
        $this->ref = $ref;
        
        return $this;
    }
}
