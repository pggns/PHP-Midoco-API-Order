<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VatDivisionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VatDivisionDTO extends AbstractStructBase
{
    /**
     * The bookvat
     * @var bool|null
     */
    protected ?bool $bookvat = null;
    /**
     * The commenttext
     * @var string|null
     */
    protected ?string $commenttext = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The ratio
     * @var float|null
     */
    protected ?float $ratio = null;
    /**
     * The vatCode
     * @var string|null
     */
    protected ?string $vatCode = null;
    /**
     * The vatDivTemplId
     * @var int|null
     */
    protected ?int $vatDivTemplId = null;
    /**
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * Constructor method for VatDivisionDTO
     * @uses VatDivisionDTO::setBookvat()
     * @uses VatDivisionDTO::setCommenttext()
     * @uses VatDivisionDTO::setPosition()
     * @uses VatDivisionDTO::setRatio()
     * @uses VatDivisionDTO::setVatCode()
     * @uses VatDivisionDTO::setVatDivTemplId()
     * @uses VatDivisionDTO::setVatPercent()
     * @param bool $bookvat
     * @param string $commenttext
     * @param int $position
     * @param float $ratio
     * @param string $vatCode
     * @param int $vatDivTemplId
     * @param float $vatPercent
     */
    public function __construct(?bool $bookvat = null, ?string $commenttext = null, ?int $position = null, ?float $ratio = null, ?string $vatCode = null, ?int $vatDivTemplId = null, ?float $vatPercent = null)
    {
        $this
            ->setBookvat($bookvat)
            ->setCommenttext($commenttext)
            ->setPosition($position)
            ->setRatio($ratio)
            ->setVatCode($vatCode)
            ->setVatDivTemplId($vatDivTemplId)
            ->setVatPercent($vatPercent);
    }
    /**
     * Get bookvat value
     * @return bool|null
     */
    public function getBookvat(): ?bool
    {
        return $this->bookvat;
    }
    /**
     * Set bookvat value
     * @param bool $bookvat
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionDTO
     */
    public function setBookvat(?bool $bookvat = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bookvat) && !is_bool($bookvat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bookvat, true), gettype($bookvat)), __LINE__);
        }
        $this->bookvat = $bookvat;
        
        return $this;
    }
    /**
     * Get commenttext value
     * @return string|null
     */
    public function getCommenttext(): ?string
    {
        return $this->commenttext;
    }
    /**
     * Set commenttext value
     * @param string $commenttext
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionDTO
     */
    public function setCommenttext(?string $commenttext = null): self
    {
        // validation for constraint: string
        if (!is_null($commenttext) && !is_string($commenttext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commenttext, true), gettype($commenttext)), __LINE__);
        }
        $this->commenttext = $commenttext;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionDTO
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
     * Get ratio value
     * @return float|null
     */
    public function getRatio(): ?float
    {
        return $this->ratio;
    }
    /**
     * Set ratio value
     * @param float $ratio
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionDTO
     */
    public function setRatio(?float $ratio = null): self
    {
        // validation for constraint: float
        if (!is_null($ratio) && !(is_float($ratio) || is_numeric($ratio))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ratio, true), gettype($ratio)), __LINE__);
        }
        $this->ratio = $ratio;
        
        return $this;
    }
    /**
     * Get vatCode value
     * @return string|null
     */
    public function getVatCode(): ?string
    {
        return $this->vatCode;
    }
    /**
     * Set vatCode value
     * @param string $vatCode
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionDTO
     */
    public function setVatCode(?string $vatCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vatCode) && !is_string($vatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCode, true), gettype($vatCode)), __LINE__);
        }
        $this->vatCode = $vatCode;
        
        return $this;
    }
    /**
     * Get vatDivTemplId value
     * @return int|null
     */
    public function getVatDivTemplId(): ?int
    {
        return $this->vatDivTemplId;
    }
    /**
     * Set vatDivTemplId value
     * @param int $vatDivTemplId
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionDTO
     */
    public function setVatDivTemplId(?int $vatDivTemplId = null): self
    {
        // validation for constraint: int
        if (!is_null($vatDivTemplId) && !(is_int($vatDivTemplId) || ctype_digit($vatDivTemplId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($vatDivTemplId, true), gettype($vatDivTemplId)), __LINE__);
        }
        $this->vatDivTemplId = $vatDivTemplId;
        
        return $this;
    }
    /**
     * Get vatPercent value
     * @return float|null
     */
    public function getVatPercent(): ?float
    {
        return $this->vatPercent;
    }
    /**
     * Set vatPercent value
     * @param float $vatPercent
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionDTO
     */
    public function setVatPercent(?float $vatPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($vatPercent) && !(is_float($vatPercent) || is_numeric($vatPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatPercent, true), gettype($vatPercent)), __LINE__);
        }
        $this->vatPercent = $vatPercent;
        
        return $this;
    }
}
