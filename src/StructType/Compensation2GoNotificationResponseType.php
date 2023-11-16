<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Compensation2GoNotificationResponseType StructType
 * @subpackage Structs
 */
class Compensation2GoNotificationResponseType extends AbstractStructBase
{
    /**
     * The code
     * @var int|null
     */
    protected ?int $code = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * Constructor method for Compensation2GoNotificationResponseType
     * @uses Compensation2GoNotificationResponseType::setCode()
     * @uses Compensation2GoNotificationResponseType::setStatus()
     * @param int $code
     * @param string $status
     */
    public function __construct(?int $code = null, ?string $status = null)
    {
        $this
            ->setCode($code)
            ->setStatus($status);
    }
    /**
     * Get code value
     * @return int|null
     */
    public function getCode(): ?int
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param int $code
     * @return \Pggns\MidocoApi\Order\StructType\Compensation2GoNotificationResponseType
     */
    public function setCode(?int $code = null): self
    {
        // validation for constraint: int
        if (!is_null($code) && !(is_int($code) || ctype_digit($code))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\Compensation2GoNotificationResponseType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
}
