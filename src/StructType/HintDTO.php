<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HintDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class HintDTO extends AbstractStructBase
{
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The printNotAllowed
     * @var bool|null
     */
    protected ?bool $printNotAllowed = null;
    /**
     * The text
     * @var string|null
     */
    protected ?string $text = null;
    /**
     * Constructor method for HintDTO
     * @uses HintDTO::setItemId()
     * @uses HintDTO::setPosition()
     * @uses HintDTO::setPrintNotAllowed()
     * @uses HintDTO::setText()
     * @param int $itemId
     * @param int $position
     * @param bool $printNotAllowed
     * @param string $text
     */
    public function __construct(?int $itemId = null, ?int $position = null, ?bool $printNotAllowed = null, ?string $text = null)
    {
        $this
            ->setItemId($itemId)
            ->setPosition($position)
            ->setPrintNotAllowed($printNotAllowed)
            ->setText($text);
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
     * @return \Pggns\MidocoApi\Order\StructType\HintDTO
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
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\HintDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get printNotAllowed value
     * @return bool|null
     */
    public function getPrintNotAllowed(): ?bool
    {
        return $this->printNotAllowed;
    }
    /**
     * Set printNotAllowed value
     * @param bool $printNotAllowed
     * @return \Pggns\MidocoApi\Order\StructType\HintDTO
     */
    public function setPrintNotAllowed(?bool $printNotAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printNotAllowed) && !is_bool($printNotAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printNotAllowed, true), gettype($printNotAllowed)), __LINE__);
        }
        $this->printNotAllowed = $printNotAllowed;
        
        return $this;
    }
    /**
     * Get text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \Pggns\MidocoApi\Order\StructType\HintDTO
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->text = $text;
        
        return $this;
    }
}
