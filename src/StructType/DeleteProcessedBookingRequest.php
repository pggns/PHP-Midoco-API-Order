<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteProcessedBookingRequest StructType
 * @subpackage Structs
 */
class DeleteProcessedBookingRequest extends AbstractStructBase
{
    /**
     * The externalId
     * @var string|null
     */
    protected ?string $externalId = null;
    /**
     * Constructor method for DeleteProcessedBookingRequest
     * @uses DeleteProcessedBookingRequest::setExternalId()
     * @param string $externalId
     */
    public function __construct(?string $externalId = null)
    {
        $this
            ->setExternalId($externalId);
    }
    /**
     * Get externalId value
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }
    /**
     * Set externalId value
     * @param string $externalId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteProcessedBookingRequest
     */
    public function setExternalId(?string $externalId = null): self
    {
        // validation for constraint: string
        if (!is_null($externalId) && !is_string($externalId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalId, true), gettype($externalId)), __LINE__);
        }
        $this->externalId = $externalId;
        
        return $this;
    }
}
