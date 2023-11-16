<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTextForSellItemErrorResponse StructType
 * @subpackage Structs
 */
class GetTextForSellItemErrorResponse extends AbstractStructBase
{
    /**
     * The errorText
     * @var string|null
     */
    protected ?string $errorText = null;
    /**
     * Constructor method for GetTextForSellItemErrorResponse
     * @uses GetTextForSellItemErrorResponse::setErrorText()
     * @param string $errorText
     */
    public function __construct(?string $errorText = null)
    {
        $this
            ->setErrorText($errorText);
    }
    /**
     * Get errorText value
     * @return string|null
     */
    public function getErrorText(): ?string
    {
        return $this->errorText;
    }
    /**
     * Set errorText value
     * @param string $errorText
     * @return \Pggns\MidocoApi\Order\StructType\GetTextForSellItemErrorResponse
     */
    public function setErrorText(?string $errorText = null): self
    {
        // validation for constraint: string
        if (!is_null($errorText) && !is_string($errorText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorText, true), gettype($errorText)), __LINE__);
        }
        $this->errorText = $errorText;
        
        return $this;
    }
}
