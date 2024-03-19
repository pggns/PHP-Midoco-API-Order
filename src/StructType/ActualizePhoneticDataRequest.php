<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ActualizePhoneticDataRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ActualizePhoneticDataRequest extends AbstractStructBase
{
    /**
     * The generateOnlyAddresses
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $generateOnlyAddresses = null;
    /**
     * Constructor method for ActualizePhoneticDataRequest
     * @uses ActualizePhoneticDataRequest::setGenerateOnlyAddresses()
     * @param bool $generateOnlyAddresses
     */
    public function __construct(?bool $generateOnlyAddresses = false)
    {
        $this
            ->setGenerateOnlyAddresses($generateOnlyAddresses);
    }
    /**
     * Get generateOnlyAddresses value
     * @return bool|null
     */
    public function getGenerateOnlyAddresses(): ?bool
    {
        return $this->generateOnlyAddresses;
    }
    /**
     * Set generateOnlyAddresses value
     * @param bool $generateOnlyAddresses
     * @return \Pggns\MidocoApi\Order\StructType\ActualizePhoneticDataRequest
     */
    public function setGenerateOnlyAddresses(?bool $generateOnlyAddresses = false): self
    {
        // validation for constraint: boolean
        if (!is_null($generateOnlyAddresses) && !is_bool($generateOnlyAddresses)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($generateOnlyAddresses, true), gettype($generateOnlyAddresses)), __LINE__);
        }
        $this->generateOnlyAddresses = $generateOnlyAddresses;
        
        return $this;
    }
}
