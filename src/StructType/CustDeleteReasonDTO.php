<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustDeleteReasonDTO StructType
 * @subpackage Structs
 */
class CustDeleteReasonDTO extends AbstractStructBase
{
    /**
     * The reasonId
     * @var int|null
     */
    protected ?int $reasonId = null;
    /**
     * The shortDescription
     * @var string|null
     */
    protected ?string $shortDescription = null;
    /**
     * Constructor method for CustDeleteReasonDTO
     * @uses CustDeleteReasonDTO::setReasonId()
     * @uses CustDeleteReasonDTO::setShortDescription()
     * @param int $reasonId
     * @param string $shortDescription
     */
    public function __construct(?int $reasonId = null, ?string $shortDescription = null)
    {
        $this
            ->setReasonId($reasonId)
            ->setShortDescription($shortDescription);
    }
    /**
     * Get reasonId value
     * @return int|null
     */
    public function getReasonId(): ?int
    {
        return $this->reasonId;
    }
    /**
     * Set reasonId value
     * @param int $reasonId
     * @return \Pggns\MidocoApi\Order\StructType\CustDeleteReasonDTO
     */
    public function setReasonId(?int $reasonId = null): self
    {
        // validation for constraint: int
        if (!is_null($reasonId) && !(is_int($reasonId) || ctype_digit($reasonId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($reasonId, true), gettype($reasonId)), __LINE__);
        }
        $this->reasonId = $reasonId;
        
        return $this;
    }
    /**
     * Get shortDescription value
     * @return string|null
     */
    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }
    /**
     * Set shortDescription value
     * @param string $shortDescription
     * @return \Pggns\MidocoApi\Order\StructType\CustDeleteReasonDTO
     */
    public function setShortDescription(?string $shortDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($shortDescription) && !is_string($shortDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortDescription, true), gettype($shortDescription)), __LINE__);
        }
        $this->shortDescription = $shortDescription;
        
        return $this;
    }
}
