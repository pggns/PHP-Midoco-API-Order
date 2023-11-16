<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CardTypeDTO StructType
 * @subpackage Structs
 */
class CardTypeDTO extends AbstractStructBase
{
    /**
     * The cardType
     * @var string|null
     */
    protected ?string $cardType = null;
    /**
     * Constructor method for CardTypeDTO
     * @uses CardTypeDTO::setCardType()
     * @param string $cardType
     */
    public function __construct(?string $cardType = null)
    {
        $this
            ->setCardType($cardType);
    }
    /**
     * Get cardType value
     * @return string|null
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }
    /**
     * Set cardType value
     * @param string $cardType
     * @return \Pggns\MidocoApi\Order\StructType\CardTypeDTO
     */
    public function setCardType(?string $cardType = null): self
    {
        // validation for constraint: string
        if (!is_null($cardType) && !is_string($cardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardType, true), gettype($cardType)), __LINE__);
        }
        $this->cardType = $cardType;
        
        return $this;
    }
}
