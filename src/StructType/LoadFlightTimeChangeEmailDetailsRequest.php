<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoadFlightTimeChangeEmailDetailsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class LoadFlightTimeChangeEmailDetailsRequest extends AbstractStructBase
{
    /**
     * The MidocoFlightTimeChangeEmail
     * Meta information extracted from the WSDL
     * - ref: MidocoFlightTimeChangeEmail
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChangeEmailType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChangeEmailType $MidocoFlightTimeChangeEmail = null;
    /**
     * Constructor method for LoadFlightTimeChangeEmailDetailsRequest
     * @uses LoadFlightTimeChangeEmailDetailsRequest::setMidocoFlightTimeChangeEmail()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChangeEmailType $midocoFlightTimeChangeEmail
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChangeEmailType $midocoFlightTimeChangeEmail = null)
    {
        $this
            ->setMidocoFlightTimeChangeEmail($midocoFlightTimeChangeEmail);
    }
    /**
     * Get MidocoFlightTimeChangeEmail value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChangeEmailType|null
     */
    public function getMidocoFlightTimeChangeEmail(): ?\Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChangeEmailType
    {
        return $this->MidocoFlightTimeChangeEmail;
    }
    /**
     * Set MidocoFlightTimeChangeEmail value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChangeEmailType $midocoFlightTimeChangeEmail
     * @return \Pggns\MidocoApi\Order\StructType\LoadFlightTimeChangeEmailDetailsRequest
     */
    public function setMidocoFlightTimeChangeEmail(?\Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChangeEmailType $midocoFlightTimeChangeEmail = null): self
    {
        $this->MidocoFlightTimeChangeEmail = $midocoFlightTimeChangeEmail;
        
        return $this;
    }
}
