<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCcInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCcInfo extends AbstractStructBase
{
    /**
     * The cardNo
     * @var string|null
     */
    protected ?string $cardNo = null;
    /**
     * The cardValidMonth
     * @var int|null
     */
    protected ?int $cardValidMonth = null;
    /**
     * The cardValidYear
     * @var int|null
     */
    protected ?int $cardValidYear = null;
    /**
     * The cardHolder
     * @var string|null
     */
    protected ?string $cardHolder = null;
    /**
     * The cardType
     * @var string|null
     */
    protected ?string $cardType = null;
    /**
     * The cardCvc
     * @var string|null
     */
    protected ?string $cardCvc = null;
    /**
     * Constructor method for MidocoCcInfo
     * @uses MidocoCcInfo::setCardNo()
     * @uses MidocoCcInfo::setCardValidMonth()
     * @uses MidocoCcInfo::setCardValidYear()
     * @uses MidocoCcInfo::setCardHolder()
     * @uses MidocoCcInfo::setCardType()
     * @uses MidocoCcInfo::setCardCvc()
     * @param string $cardNo
     * @param int $cardValidMonth
     * @param int $cardValidYear
     * @param string $cardHolder
     * @param string $cardType
     * @param string $cardCvc
     */
    public function __construct(?string $cardNo = null, ?int $cardValidMonth = null, ?int $cardValidYear = null, ?string $cardHolder = null, ?string $cardType = null, ?string $cardCvc = null)
    {
        $this
            ->setCardNo($cardNo)
            ->setCardValidMonth($cardValidMonth)
            ->setCardValidYear($cardValidYear)
            ->setCardHolder($cardHolder)
            ->setCardType($cardType)
            ->setCardCvc($cardCvc);
    }
    /**
     * Get cardNo value
     * @return string|null
     */
    public function getCardNo(): ?string
    {
        return $this->cardNo;
    }
    /**
     * Set cardNo value
     * @param string $cardNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcInfo
     */
    public function setCardNo(?string $cardNo = null): self
    {
        // validation for constraint: string
        if (!is_null($cardNo) && !is_string($cardNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardNo, true), gettype($cardNo)), __LINE__);
        }
        $this->cardNo = $cardNo;
        
        return $this;
    }
    /**
     * Get cardValidMonth value
     * @return int|null
     */
    public function getCardValidMonth(): ?int
    {
        return $this->cardValidMonth;
    }
    /**
     * Set cardValidMonth value
     * @param int $cardValidMonth
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcInfo
     */
    public function setCardValidMonth(?int $cardValidMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($cardValidMonth) && !(is_int($cardValidMonth) || ctype_digit($cardValidMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cardValidMonth, true), gettype($cardValidMonth)), __LINE__);
        }
        $this->cardValidMonth = $cardValidMonth;
        
        return $this;
    }
    /**
     * Get cardValidYear value
     * @return int|null
     */
    public function getCardValidYear(): ?int
    {
        return $this->cardValidYear;
    }
    /**
     * Set cardValidYear value
     * @param int $cardValidYear
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcInfo
     */
    public function setCardValidYear(?int $cardValidYear = null): self
    {
        // validation for constraint: int
        if (!is_null($cardValidYear) && !(is_int($cardValidYear) || ctype_digit($cardValidYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cardValidYear, true), gettype($cardValidYear)), __LINE__);
        }
        $this->cardValidYear = $cardValidYear;
        
        return $this;
    }
    /**
     * Get cardHolder value
     * @return string|null
     */
    public function getCardHolder(): ?string
    {
        return $this->cardHolder;
    }
    /**
     * Set cardHolder value
     * @param string $cardHolder
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcInfo
     */
    public function setCardHolder(?string $cardHolder = null): self
    {
        // validation for constraint: string
        if (!is_null($cardHolder) && !is_string($cardHolder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardHolder, true), gettype($cardHolder)), __LINE__);
        }
        $this->cardHolder = $cardHolder;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcInfo
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
    /**
     * Get cardCvc value
     * @return string|null
     */
    public function getCardCvc(): ?string
    {
        return $this->cardCvc;
    }
    /**
     * Set cardCvc value
     * @param string $cardCvc
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcInfo
     */
    public function setCardCvc(?string $cardCvc = null): self
    {
        // validation for constraint: string
        if (!is_null($cardCvc) && !is_string($cardCvc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardCvc, true), gettype($cardCvc)), __LINE__);
        }
        $this->cardCvc = $cardCvc;
        
        return $this;
    }
}
