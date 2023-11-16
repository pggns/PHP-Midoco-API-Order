<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoContactEntryMailingProhibited StructType
 * @subpackage Structs
 */
class MidocoContactEntryMailingProhibited extends MidocoContactEntryType
{
    /**
     * The categoryId
     * @var int|null
     */
    protected ?int $categoryId = null;
    /**
     * Constructor method for MidocoContactEntryMailingProhibited
     * @uses MidocoContactEntryMailingProhibited::setCategoryId()
     * @param int $categoryId
     */
    public function __construct(?int $categoryId = null)
    {
        $this
            ->setCategoryId($categoryId);
    }
    /**
     * Get categoryId value
     * @return int|null
     */
    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }
    /**
     * Set categoryId value
     * @param int $categoryId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoContactEntryMailingProhibited
     */
    public function setCategoryId(?int $categoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($categoryId) && !(is_int($categoryId) || ctype_digit($categoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryId, true), gettype($categoryId)), __LINE__);
        }
        $this->categoryId = $categoryId;
        
        return $this;
    }
}
