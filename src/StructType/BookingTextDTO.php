<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingTextDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BookingTextDTO extends AbstractStructBase
{
    /**
     * The longText
     * @var string|null
     */
    protected ?string $longText = null;
    /**
     * The shortId
     * @var string|null
     */
    protected ?string $shortId = null;
    /**
     * Constructor method for BookingTextDTO
     * @uses BookingTextDTO::setLongText()
     * @uses BookingTextDTO::setShortId()
     * @param string $longText
     * @param string $shortId
     */
    public function __construct(?string $longText = null, ?string $shortId = null)
    {
        $this
            ->setLongText($longText)
            ->setShortId($shortId);
    }
    /**
     * Get longText value
     * @return string|null
     */
    public function getLongText(): ?string
    {
        return $this->longText;
    }
    /**
     * Set longText value
     * @param string $longText
     * @return \Pggns\MidocoApi\Order\StructType\BookingTextDTO
     */
    public function setLongText(?string $longText = null): self
    {
        // validation for constraint: string
        if (!is_null($longText) && !is_string($longText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longText, true), gettype($longText)), __LINE__);
        }
        $this->longText = $longText;
        
        return $this;
    }
    /**
     * Get shortId value
     * @return string|null
     */
    public function getShortId(): ?string
    {
        return $this->shortId;
    }
    /**
     * Set shortId value
     * @param string $shortId
     * @return \Pggns\MidocoApi\Order\StructType\BookingTextDTO
     */
    public function setShortId(?string $shortId = null): self
    {
        // validation for constraint: string
        if (!is_null($shortId) && !is_string($shortId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortId, true), gettype($shortId)), __LINE__);
        }
        $this->shortId = $shortId;
        
        return $this;
    }
}
