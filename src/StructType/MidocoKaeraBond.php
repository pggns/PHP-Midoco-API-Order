<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoKaeraBond StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoKaeraBond extends AbstractStructBase
{
    /**
     * The amoundBondsLeft
     * @var int|null
     */
    protected ?int $amoundBondsLeft = null;
    /**
     * The bondTravelcostLeft
     * @var float|null
     */
    protected ?float $bondTravelcostLeft = null;
    /**
     * The returnCode
     * @var int|null
     */
    protected ?int $returnCode = null;
    /**
     * The bondPdf
     * @var string|null
     */
    protected ?string $bondPdf = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for MidocoKaeraBond
     * @uses MidocoKaeraBond::setAmoundBondsLeft()
     * @uses MidocoKaeraBond::setBondTravelcostLeft()
     * @uses MidocoKaeraBond::setReturnCode()
     * @uses MidocoKaeraBond::setBondPdf()
     * @uses MidocoKaeraBond::setDescription()
     * @param int $amoundBondsLeft
     * @param float $bondTravelcostLeft
     * @param int $returnCode
     * @param string $bondPdf
     * @param string $description
     */
    public function __construct(?int $amoundBondsLeft = null, ?float $bondTravelcostLeft = null, ?int $returnCode = null, ?string $bondPdf = null, ?string $description = null)
    {
        $this
            ->setAmoundBondsLeft($amoundBondsLeft)
            ->setBondTravelcostLeft($bondTravelcostLeft)
            ->setReturnCode($returnCode)
            ->setBondPdf($bondPdf)
            ->setDescription($description);
    }
    /**
     * Get amoundBondsLeft value
     * @return int|null
     */
    public function getAmoundBondsLeft(): ?int
    {
        return $this->amoundBondsLeft;
    }
    /**
     * Set amoundBondsLeft value
     * @param int $amoundBondsLeft
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraBond
     */
    public function setAmoundBondsLeft(?int $amoundBondsLeft = null): self
    {
        // validation for constraint: int
        if (!is_null($amoundBondsLeft) && !(is_int($amoundBondsLeft) || ctype_digit($amoundBondsLeft))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($amoundBondsLeft, true), gettype($amoundBondsLeft)), __LINE__);
        }
        $this->amoundBondsLeft = $amoundBondsLeft;
        
        return $this;
    }
    /**
     * Get bondTravelcostLeft value
     * @return float|null
     */
    public function getBondTravelcostLeft(): ?float
    {
        return $this->bondTravelcostLeft;
    }
    /**
     * Set bondTravelcostLeft value
     * @param float $bondTravelcostLeft
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraBond
     */
    public function setBondTravelcostLeft(?float $bondTravelcostLeft = null): self
    {
        // validation for constraint: float
        if (!is_null($bondTravelcostLeft) && !(is_float($bondTravelcostLeft) || is_numeric($bondTravelcostLeft))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bondTravelcostLeft, true), gettype($bondTravelcostLeft)), __LINE__);
        }
        $this->bondTravelcostLeft = $bondTravelcostLeft;
        
        return $this;
    }
    /**
     * Get returnCode value
     * @return int|null
     */
    public function getReturnCode(): ?int
    {
        return $this->returnCode;
    }
    /**
     * Set returnCode value
     * @param int $returnCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraBond
     */
    public function setReturnCode(?int $returnCode = null): self
    {
        // validation for constraint: int
        if (!is_null($returnCode) && !(is_int($returnCode) || ctype_digit($returnCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($returnCode, true), gettype($returnCode)), __LINE__);
        }
        $this->returnCode = $returnCode;
        
        return $this;
    }
    /**
     * Get bondPdf value
     * @return string|null
     */
    public function getBondPdf(): ?string
    {
        return $this->bondPdf;
    }
    /**
     * Set bondPdf value
     * @param string $bondPdf
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraBond
     */
    public function setBondPdf(?string $bondPdf = null): self
    {
        // validation for constraint: string
        if (!is_null($bondPdf) && !is_string($bondPdf)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bondPdf, true), gettype($bondPdf)), __LINE__);
        }
        $this->bondPdf = $bondPdf;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraBond
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
}
