<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellItemItemDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SellItemItemDTO extends AbstractStructBase
{
    /**
     * The mainItemId
     * @var int|null
     */
    protected ?int $mainItemId = null;
    /**
     * The subItemId
     * @var int|null
     */
    protected ?int $subItemId = null;
    /**
     * Constructor method for SellItemItemDTO
     * @uses SellItemItemDTO::setMainItemId()
     * @uses SellItemItemDTO::setSubItemId()
     * @param int $mainItemId
     * @param int $subItemId
     */
    public function __construct(?int $mainItemId = null, ?int $subItemId = null)
    {
        $this
            ->setMainItemId($mainItemId)
            ->setSubItemId($subItemId);
    }
    /**
     * Get mainItemId value
     * @return int|null
     */
    public function getMainItemId(): ?int
    {
        return $this->mainItemId;
    }
    /**
     * Set mainItemId value
     * @param int $mainItemId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemItemDTO
     */
    public function setMainItemId(?int $mainItemId = null): self
    {
        // validation for constraint: int
        if (!is_null($mainItemId) && !(is_int($mainItemId) || ctype_digit($mainItemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mainItemId, true), gettype($mainItemId)), __LINE__);
        }
        $this->mainItemId = $mainItemId;
        
        return $this;
    }
    /**
     * Get subItemId value
     * @return int|null
     */
    public function getSubItemId(): ?int
    {
        return $this->subItemId;
    }
    /**
     * Set subItemId value
     * @param int $subItemId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemItemDTO
     */
    public function setSubItemId(?int $subItemId = null): self
    {
        // validation for constraint: int
        if (!is_null($subItemId) && !(is_int($subItemId) || ctype_digit($subItemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($subItemId, true), gettype($subItemId)), __LINE__);
        }
        $this->subItemId = $subItemId;
        
        return $this;
    }
}
