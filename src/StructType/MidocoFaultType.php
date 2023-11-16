<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoFaultType StructType
 * @subpackage Structs
 */
class MidocoFaultType extends AbstractStructBase
{
    /**
     * The code
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $code;
    /**
     * The text
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $text;
    /**
     * The locale
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $locale;
    /**
     * The StackTrace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StackTrace = null;
    /**
     * Constructor method for MidocoFaultType
     * @uses MidocoFaultType::setCode()
     * @uses MidocoFaultType::setText()
     * @uses MidocoFaultType::setLocale()
     * @uses MidocoFaultType::setStackTrace()
     * @param string $code
     * @param string $text
     * @param string $locale
     * @param string $stackTrace
     */
    public function __construct(string $code, string $text, string $locale, ?string $stackTrace = null)
    {
        $this
            ->setCode($code)
            ->setText($text)
            ->setLocale($locale)
            ->setStackTrace($stackTrace);
    }
    /**
     * Get code value
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFaultType
     */
    public function setCode(string $code): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get text value
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFaultType
     */
    public function setText(string $text): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->text = $text;
        
        return $this;
    }
    /**
     * Get locale value
     * @return string
     */
    public function getLocale(): string
    {
        return $this->locale;
    }
    /**
     * Set locale value
     * @param string $locale
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFaultType
     */
    public function setLocale(string $locale): self
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->locale = $locale;
        
        return $this;
    }
    /**
     * Get StackTrace value
     * @return string|null
     */
    public function getStackTrace(): ?string
    {
        return $this->StackTrace;
    }
    /**
     * Set StackTrace value
     * @param string $stackTrace
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFaultType
     */
    public function setStackTrace(?string $stackTrace = null): self
    {
        // validation for constraint: string
        if (!is_null($stackTrace) && !is_string($stackTrace)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stackTrace, true), gettype($stackTrace)), __LINE__);
        }
        $this->StackTrace = $stackTrace;
        
        return $this;
    }
}
