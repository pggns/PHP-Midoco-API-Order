<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmailInfoRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEmailInfoRequest extends AbstractStructBase
{
    /**
     * The emailSender
     * @var string|null
     */
    protected ?string $emailSender = null;
    /**
     * Constructor method for GetEmailInfoRequest
     * @uses GetEmailInfoRequest::setEmailSender()
     * @param string $emailSender
     */
    public function __construct(?string $emailSender = null)
    {
        $this
            ->setEmailSender($emailSender);
    }
    /**
     * Get emailSender value
     * @return string|null
     */
    public function getEmailSender(): ?string
    {
        return $this->emailSender;
    }
    /**
     * Set emailSender value
     * @param string $emailSender
     * @return \Pggns\MidocoApi\Order\StructType\GetEmailInfoRequest
     */
    public function setEmailSender(?string $emailSender = null): self
    {
        // validation for constraint: string
        if (!is_null($emailSender) && !is_string($emailSender)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailSender, true), gettype($emailSender)), __LINE__);
        }
        $this->emailSender = $emailSender;
        
        return $this;
    }
}
