<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightTimeChangeEmailDetDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FlightTimeChangeEmailDetDTO extends AbstractStructBase
{
    /**
     * The emailData
     * @var string|null
     */
    protected ?string $emailData = null;
    /**
     * The emailId
     * @var int|null
     */
    protected ?int $emailId = null;
    /**
     * Constructor method for FlightTimeChangeEmailDetDTO
     * @uses FlightTimeChangeEmailDetDTO::setEmailData()
     * @uses FlightTimeChangeEmailDetDTO::setEmailId()
     * @param string $emailData
     * @param int $emailId
     */
    public function __construct(?string $emailData = null, ?int $emailId = null)
    {
        $this
            ->setEmailData($emailData)
            ->setEmailId($emailId);
    }
    /**
     * Get emailData value
     * @return string|null
     */
    public function getEmailData(): ?string
    {
        return $this->emailData;
    }
    /**
     * Set emailData value
     * @param string $emailData
     * @return \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailDetDTO
     */
    public function setEmailData(?string $emailData = null): self
    {
        // validation for constraint: string
        if (!is_null($emailData) && !is_string($emailData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailData, true), gettype($emailData)), __LINE__);
        }
        $this->emailData = $emailData;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailDetDTO
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
