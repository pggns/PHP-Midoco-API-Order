<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnrichmentCreditCardDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EnrichmentCreditCardDTO extends AbstractStructBase
{
    /**
     * The ccToken
     * @var string|null
     */
    protected ?string $ccToken = null;
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The tokenType
     * @var string|null
     */
    protected ?string $tokenType = null;
    /**
     * The validMonth
     * @var int|null
     */
    protected ?int $validMonth = null;
    /**
     * The validYear
     * @var int|null
     */
    protected ?int $validYear = null;
    /**
     * Constructor method for EnrichmentCreditCardDTO
     * @uses EnrichmentCreditCardDTO::setCcToken()
     * @uses EnrichmentCreditCardDTO::setCcType()
     * @uses EnrichmentCreditCardDTO::setItemId()
     * @uses EnrichmentCreditCardDTO::setTokenType()
     * @uses EnrichmentCreditCardDTO::setValidMonth()
     * @uses EnrichmentCreditCardDTO::setValidYear()
     * @param string $ccToken
     * @param string $ccType
     * @param int $itemId
     * @param string $tokenType
     * @param int $validMonth
     * @param int $validYear
     */
    public function __construct(?string $ccToken = null, ?string $ccType = null, ?int $itemId = null, ?string $tokenType = null, ?int $validMonth = null, ?int $validYear = null)
    {
        $this
            ->setCcToken($ccToken)
            ->setCcType($ccType)
            ->setItemId($itemId)
            ->setTokenType($tokenType)
            ->setValidMonth($validMonth)
            ->setValidYear($validYear);
    }
    /**
     * Get ccToken value
     * @return string|null
     */
    public function getCcToken(): ?string
    {
        return $this->ccToken;
    }
    /**
     * Set ccToken value
     * @param string $ccToken
     * @return \Pggns\MidocoApi\Order\StructType\EnrichmentCreditCardDTO
     */
    public function setCcToken(?string $ccToken = null): self
    {
        // validation for constraint: string
        if (!is_null($ccToken) && !is_string($ccToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccToken, true), gettype($ccToken)), __LINE__);
        }
        $this->ccToken = $ccToken;
        
        return $this;
    }
    /**
     * Get ccType value
     * @return string|null
     */
    public function getCcType(): ?string
    {
        return $this->ccType;
    }
    /**
     * Set ccType value
     * @param string $ccType
     * @return \Pggns\MidocoApi\Order\StructType\EnrichmentCreditCardDTO
     */
    public function setCcType(?string $ccType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccType) && !is_string($ccType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccType, true), gettype($ccType)), __LINE__);
        }
        $this->ccType = $ccType;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\EnrichmentCreditCardDTO
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
     * Get tokenType value
     * @return string|null
     */
    public function getTokenType(): ?string
    {
        return $this->tokenType;
    }
    /**
     * Set tokenType value
     * @param string $tokenType
     * @return \Pggns\MidocoApi\Order\StructType\EnrichmentCreditCardDTO
     */
    public function setTokenType(?string $tokenType = null): self
    {
        // validation for constraint: string
        if (!is_null($tokenType) && !is_string($tokenType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tokenType, true), gettype($tokenType)), __LINE__);
        }
        $this->tokenType = $tokenType;
        
        return $this;
    }
    /**
     * Get validMonth value
     * @return int|null
     */
    public function getValidMonth(): ?int
    {
        return $this->validMonth;
    }
    /**
     * Set validMonth value
     * @param int $validMonth
     * @return \Pggns\MidocoApi\Order\StructType\EnrichmentCreditCardDTO
     */
    public function setValidMonth(?int $validMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($validMonth) && !(is_int($validMonth) || ctype_digit($validMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($validMonth, true), gettype($validMonth)), __LINE__);
        }
        $this->validMonth = $validMonth;
        
        return $this;
    }
    /**
     * Get validYear value
     * @return int|null
     */
    public function getValidYear(): ?int
    {
        return $this->validYear;
    }
    /**
     * Set validYear value
     * @param int $validYear
     * @return \Pggns\MidocoApi\Order\StructType\EnrichmentCreditCardDTO
     */
    public function setValidYear(?int $validYear = null): self
    {
        // validation for constraint: int
        if (!is_null($validYear) && !(is_int($validYear) || ctype_digit($validYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($validYear, true), gettype($validYear)), __LINE__);
        }
        $this->validYear = $validYear;
        
        return $this;
    }
}
