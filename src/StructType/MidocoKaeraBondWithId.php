<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoKaeraBondWithId StructType
 * @subpackage Structs
 */
class MidocoKaeraBondWithId extends AbstractStructBase
{
    /**
     * The bondid
     * @var string|null
     */
    protected ?string $bondid = null;
    /**
     * The policynumber
     * @var string|null
     */
    protected ?string $policynumber = null;
    /**
     * The vaiduntil
     * @var string|null
     */
    protected ?string $vaiduntil = null;
    /**
     * The validfrom
     * @var string|null
     */
    protected ?string $validfrom = null;
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
     * Constructor method for MidocoKaeraBondWithId
     * @uses MidocoKaeraBondWithId::setBondid()
     * @uses MidocoKaeraBondWithId::setPolicynumber()
     * @uses MidocoKaeraBondWithId::setVaiduntil()
     * @uses MidocoKaeraBondWithId::setValidfrom()
     * @uses MidocoKaeraBondWithId::setAmoundBondsLeft()
     * @uses MidocoKaeraBondWithId::setBondTravelcostLeft()
     * @uses MidocoKaeraBondWithId::setReturnCode()
     * @uses MidocoKaeraBondWithId::setBondPdf()
     * @uses MidocoKaeraBondWithId::setDescription()
     * @param string $bondid
     * @param string $policynumber
     * @param string $vaiduntil
     * @param string $validfrom
     * @param int $amoundBondsLeft
     * @param float $bondTravelcostLeft
     * @param int $returnCode
     * @param string $bondPdf
     * @param string $description
     */
    public function __construct(?string $bondid = null, ?string $policynumber = null, ?string $vaiduntil = null, ?string $validfrom = null, ?int $amoundBondsLeft = null, ?float $bondTravelcostLeft = null, ?int $returnCode = null, ?string $bondPdf = null, ?string $description = null)
    {
        $this
            ->setBondid($bondid)
            ->setPolicynumber($policynumber)
            ->setVaiduntil($vaiduntil)
            ->setValidfrom($validfrom)
            ->setAmoundBondsLeft($amoundBondsLeft)
            ->setBondTravelcostLeft($bondTravelcostLeft)
            ->setReturnCode($returnCode)
            ->setBondPdf($bondPdf)
            ->setDescription($description);
    }
    /**
     * Get bondid value
     * @return string|null
     */
    public function getBondid(): ?string
    {
        return $this->bondid;
    }
    /**
     * Set bondid value
     * @param string $bondid
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraBondWithId
     */
    public function setBondid(?string $bondid = null): self
    {
        // validation for constraint: string
        if (!is_null($bondid) && !is_string($bondid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bondid, true), gettype($bondid)), __LINE__);
        }
        $this->bondid = $bondid;
        
        return $this;
    }
    /**
     * Get policynumber value
     * @return string|null
     */
    public function getPolicynumber(): ?string
    {
        return $this->policynumber;
    }
    /**
     * Set policynumber value
     * @param string $policynumber
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraBondWithId
     */
    public function setPolicynumber(?string $policynumber = null): self
    {
        // validation for constraint: string
        if (!is_null($policynumber) && !is_string($policynumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($policynumber, true), gettype($policynumber)), __LINE__);
        }
        $this->policynumber = $policynumber;
        
        return $this;
    }
    /**
     * Get vaiduntil value
     * @return string|null
     */
    public function getVaiduntil(): ?string
    {
        return $this->vaiduntil;
    }
    /**
     * Set vaiduntil value
     * @param string $vaiduntil
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraBondWithId
     */
    public function setVaiduntil(?string $vaiduntil = null): self
    {
        // validation for constraint: string
        if (!is_null($vaiduntil) && !is_string($vaiduntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vaiduntil, true), gettype($vaiduntil)), __LINE__);
        }
        $this->vaiduntil = $vaiduntil;
        
        return $this;
    }
    /**
     * Get validfrom value
     * @return string|null
     */
    public function getValidfrom(): ?string
    {
        return $this->validfrom;
    }
    /**
     * Set validfrom value
     * @param string $validfrom
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraBondWithId
     */
    public function setValidfrom(?string $validfrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validfrom) && !is_string($validfrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validfrom, true), gettype($validfrom)), __LINE__);
        }
        $this->validfrom = $validfrom;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraBondWithId
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraBondWithId
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraBondWithId
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraBondWithId
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraBondWithId
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
