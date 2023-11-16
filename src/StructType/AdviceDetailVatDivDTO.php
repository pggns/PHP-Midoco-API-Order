<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdviceDetailVatDivDTO StructType
 * @subpackage Structs
 */
class AdviceDetailVatDivDTO extends AbstractStructBase
{
    /**
     * The commenttext
     * @var string|null
     */
    protected ?string $commenttext = null;
    /**
     * The detailId
     * @var int|null
     */
    protected ?int $detailId = null;
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
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * Constructor method for AdviceDetailVatDivDTO
     * @uses AdviceDetailVatDivDTO::setCommenttext()
     * @uses AdviceDetailVatDivDTO::setDetailId()
     * @uses AdviceDetailVatDivDTO::setPosition()
     * @uses AdviceDetailVatDivDTO::setRatio()
     * @uses AdviceDetailVatDivDTO::setVatCode()
     * @uses AdviceDetailVatDivDTO::setVatPercent()
     * @param string $commenttext
     * @param int $detailId
     * @param int $position
     * @param float $ratio
     * @param string $vatCode
     * @param float $vatPercent
     */
    public function __construct(?string $commenttext = null, ?int $detailId = null, ?int $position = null, ?float $ratio = null, ?string $vatCode = null, ?float $vatPercent = null)
    {
        $this
            ->setCommenttext($commenttext)
            ->setDetailId($detailId)
            ->setPosition($position)
            ->setRatio($ratio)
            ->setVatCode($vatCode)
            ->setVatPercent($vatPercent);
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceDetailVatDivDTO
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
     * Get detailId value
     * @return int|null
     */
    public function getDetailId(): ?int
    {
        return $this->detailId;
    }
    /**
     * Set detailId value
     * @param int $detailId
     * @return \Pggns\MidocoApi\Order\StructType\AdviceDetailVatDivDTO
     */
    public function setDetailId(?int $detailId = null): self
    {
        // validation for constraint: int
        if (!is_null($detailId) && !(is_int($detailId) || ctype_digit($detailId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($detailId, true), gettype($detailId)), __LINE__);
        }
        $this->detailId = $detailId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceDetailVatDivDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceDetailVatDivDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceDetailVatDivDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceDetailVatDivDTO
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
