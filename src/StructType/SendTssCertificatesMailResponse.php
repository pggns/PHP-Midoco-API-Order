<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendTssCertificatesMailResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SendTssCertificatesMailResponse extends AbstractStructBase
{
    /**
     * The successful
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $successful = null;
    /**
     * Constructor method for SendTssCertificatesMailResponse
     * @uses SendTssCertificatesMailResponse::setSuccessful()
     * @param bool $successful
     */
    public function __construct(?bool $successful = false)
    {
        $this
            ->setSuccessful($successful);
    }
    /**
     * Get successful value
     * @return bool|null
     */
    public function getSuccessful(): ?bool
    {
        return $this->successful;
    }
    /**
     * Set successful value
     * @param bool $successful
     * @return \Pggns\MidocoApi\Order\StructType\SendTssCertificatesMailResponse
     */
    public function setSuccessful(?bool $successful = false): self
    {
        // validation for constraint: boolean
        if (!is_null($successful) && !is_bool($successful)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($successful, true), gettype($successful)), __LINE__);
        }
        $this->successful = $successful;
        
        return $this;
    }
}
