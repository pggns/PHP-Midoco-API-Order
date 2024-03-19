<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateFlightTimeChangeEmailResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: updateFlightTimeChangeEmail --- updates a given FlightTimeChange Email
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateFlightTimeChangeEmailResponse extends AbstractStructBase
{
    /**
     * The emailId
     * @var int|null
     */
    protected ?int $emailId = null;
    /**
     * Constructor method for UpdateFlightTimeChangeEmailResponse
     * @uses UpdateFlightTimeChangeEmailResponse::setEmailId()
     * @param int $emailId
     */
    public function __construct(?int $emailId = null)
    {
        $this
            ->setEmailId($emailId);
    }
    /**
     * Get emailId value
     * @return int|null
     */
    public function getEmailId(): ?int
    {
        return $this->emailId;
    }
    /**
     * Set emailId value
     * @param int $emailId
     * @return \Pggns\MidocoApi\Order\StructType\UpdateFlightTimeChangeEmailResponse
     */
    public function setEmailId(?int $emailId = null): self
    {
        // validation for constraint: int
        if (!is_null($emailId) && !(is_int($emailId) || ctype_digit($emailId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($emailId, true), gettype($emailId)), __LINE__);
        }
        $this->emailId = $emailId;
        
        return $this;
    }
}
