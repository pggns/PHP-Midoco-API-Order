<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelNumberAutoRemarkDTO StructType
 * @subpackage Structs
 */
class TravelNumberAutoRemarkDTO extends AbstractStructBase
{
    /**
     * The printType
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * The remarkText
     * @var string|null
     */
    protected ?string $remarkText = null;
    /**
     * The travelNo
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * Constructor method for TravelNumberAutoRemarkDTO
     * @uses TravelNumberAutoRemarkDTO::setPrintType()
     * @uses TravelNumberAutoRemarkDTO::setRemarkText()
     * @uses TravelNumberAutoRemarkDTO::setTravelNo()
     * @param string $printType
     * @param string $remarkText
     * @param string $travelNo
     */
    public function __construct(?string $printType = null, ?string $remarkText = null, ?string $travelNo = null)
    {
        $this
            ->setPrintType($printType)
            ->setRemarkText($remarkText)
            ->setTravelNo($travelNo);
    }
    /**
     * Get printType value
     * @return string|null
     */
    public function getPrintType(): ?string
    {
        return $this->printType;
    }
    /**
     * Set printType value
     * @param string $printType
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberAutoRemarkDTO
     */
    public function setPrintType(?string $printType = null): self
    {
        // validation for constraint: string
        if (!is_null($printType) && !is_string($printType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printType, true), gettype($printType)), __LINE__);
        }
        $this->printType = $printType;
        
        return $this;
    }
    /**
     * Get remarkText value
     * @return string|null
     */
    public function getRemarkText(): ?string
    {
        return $this->remarkText;
    }
    /**
     * Set remarkText value
     * @param string $remarkText
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberAutoRemarkDTO
     */
    public function setRemarkText(?string $remarkText = null): self
    {
        // validation for constraint: string
        if (!is_null($remarkText) && !is_string($remarkText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remarkText, true), gettype($remarkText)), __LINE__);
        }
        $this->remarkText = $remarkText;
        
        return $this;
    }
    /**
     * Get travelNo value
     * @return string|null
     */
    public function getTravelNo(): ?string
    {
        return $this->travelNo;
    }
    /**
     * Set travelNo value
     * @param string $travelNo
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberAutoRemarkDTO
     */
    public function setTravelNo(?string $travelNo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelNo) && !is_string($travelNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelNo, true), gettype($travelNo)), __LINE__);
        }
        $this->travelNo = $travelNo;
        
        return $this;
    }
}
