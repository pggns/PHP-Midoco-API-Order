<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreparedRevenueVatDivDTO StructType
 * @subpackage Structs
 */
class PreparedRevenueVatDivDTO extends AbstractStructBase
{
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
     * The preparedRevenueId
     * @var int|null
     */
    protected ?int $preparedRevenueId = null;
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
     * Constructor method for PreparedRevenueVatDivDTO
     * @uses PreparedRevenueVatDivDTO::setCommenttext()
     * @uses PreparedRevenueVatDivDTO::setPosition()
     * @uses PreparedRevenueVatDivDTO::setPreparedRevenueId()
     * @uses PreparedRevenueVatDivDTO::setRatio()
     * @uses PreparedRevenueVatDivDTO::setVatCode()
     * @uses PreparedRevenueVatDivDTO::setVatPercent()
     * @param string $commenttext
     * @param int $position
     * @param int $preparedRevenueId
     * @param float $ratio
     * @param string $vatCode
     * @param float $vatPercent
     */
    public function __construct(?string $commenttext = null, ?int $position = null, ?int $preparedRevenueId = null, ?float $ratio = null, ?string $vatCode = null, ?float $vatPercent = null)
    {
        $this
            ->setCommenttext($commenttext)
            ->setPosition($position)
            ->setPreparedRevenueId($preparedRevenueId)
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueVatDivDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueVatDivDTO
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
     * Get preparedRevenueId value
     * @return int|null
     */
    public function getPreparedRevenueId(): ?int
    {
        return $this->preparedRevenueId;
    }
    /**
     * Set preparedRevenueId value
     * @param int $preparedRevenueId
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueVatDivDTO
     */
    public function setPreparedRevenueId(?int $preparedRevenueId = null): self
    {
        // validation for constraint: int
        if (!is_null($preparedRevenueId) && !(is_int($preparedRevenueId) || ctype_digit($preparedRevenueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($preparedRevenueId, true), gettype($preparedRevenueId)), __LINE__);
        }
        $this->preparedRevenueId = $preparedRevenueId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueVatDivDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueVatDivDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueVatDivDTO
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
