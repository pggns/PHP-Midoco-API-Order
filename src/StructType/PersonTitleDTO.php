<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonTitleDTO StructType
 * @subpackage Structs
 */
class PersonTitleDTO extends AbstractStructBase
{
    /**
     * The title
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * The titleId
     * @var int|null
     */
    protected ?int $titleId = null;
    /**
     * Constructor method for PersonTitleDTO
     * @uses PersonTitleDTO::setTitle()
     * @uses PersonTitleDTO::setTitleId()
     * @param string $title
     * @param int $titleId
     */
    public function __construct(?string $title = null, ?int $titleId = null)
    {
        $this
            ->setTitle($title)
            ->setTitleId($titleId);
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \Pggns\MidocoApi\Order\StructType\PersonTitleDTO
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->title = $title;
        
        return $this;
    }
    /**
     * Get titleId value
     * @return int|null
     */
    public function getTitleId(): ?int
    {
        return $this->titleId;
    }
    /**
     * Set titleId value
     * @param int $titleId
     * @return \Pggns\MidocoApi\Order\StructType\PersonTitleDTO
     */
    public function setTitleId(?int $titleId = null): self
    {
        // validation for constraint: int
        if (!is_null($titleId) && !(is_int($titleId) || ctype_digit($titleId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($titleId, true), gettype($titleId)), __LINE__);
        }
        $this->titleId = $titleId;
        
        return $this;
    }
}
