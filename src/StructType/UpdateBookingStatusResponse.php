<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateBookingStatusResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateBookingStatusResponse extends AbstractStructBase
{
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The result
     * @var string|null
     */
    protected ?string $result = null;
    /**
     * Constructor method for UpdateBookingStatusResponse
     * @uses UpdateBookingStatusResponse::setItemId()
     * @uses UpdateBookingStatusResponse::setResult()
     * @param int $itemId
     * @param string $result
     */
    public function __construct(?int $itemId = null, ?string $result = null)
    {
        $this
            ->setItemId($itemId)
            ->setResult($result);
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\UpdateBookingStatusResponse
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get result value
     * @return string|null
     */
    public function getResult(): ?string
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param string $result
     * @return \Pggns\MidocoApi\Order\StructType\UpdateBookingStatusResponse
     */
    public function setResult(?string $result = null): self
    {
        // validation for constraint: string
        if (!is_null($result) && !is_string($result)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($result, true), gettype($result)), __LINE__);
        }
        $this->result = $result;
        
        return $this;
    }
}
