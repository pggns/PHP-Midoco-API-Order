<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DestinationAutoRemarkDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DestinationAutoRemarkDTO extends AbstractStructBase
{
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The destinationCode
     * @var string|null
     */
    protected ?string $destinationCode = null;
    /**
     * The destinationType
     * @var string|null
     */
    protected ?string $destinationType = null;
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
     * Constructor method for DestinationAutoRemarkDTO
     * @uses DestinationAutoRemarkDTO::setCultureId()
     * @uses DestinationAutoRemarkDTO::setDestinationCode()
     * @uses DestinationAutoRemarkDTO::setDestinationType()
     * @uses DestinationAutoRemarkDTO::setPrintType()
     * @uses DestinationAutoRemarkDTO::setRemarkText()
     * @param string $cultureId
     * @param string $destinationCode
     * @param string $destinationType
     * @param string $printType
     * @param string $remarkText
     */
    public function __construct(?string $cultureId = null, ?string $destinationCode = null, ?string $destinationType = null, ?string $printType = null, ?string $remarkText = null)
    {
        $this
            ->setCultureId($cultureId)
            ->setDestinationCode($destinationCode)
            ->setDestinationType($destinationType)
            ->setPrintType($printType)
            ->setRemarkText($remarkText);
    }
    /**
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Order\StructType\DestinationAutoRemarkDTO
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
    }
    /**
     * Get destinationCode value
     * @return string|null
     */
    public function getDestinationCode(): ?string
    {
        return $this->destinationCode;
    }
    /**
     * Set destinationCode value
     * @param string $destinationCode
     * @return \Pggns\MidocoApi\Order\StructType\DestinationAutoRemarkDTO
     */
    public function setDestinationCode(?string $destinationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationCode) && !is_string($destinationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationCode, true), gettype($destinationCode)), __LINE__);
        }
        $this->destinationCode = $destinationCode;
        
        return $this;
    }
    /**
     * Get destinationType value
     * @return string|null
     */
    public function getDestinationType(): ?string
    {
        return $this->destinationType;
    }
    /**
     * Set destinationType value
     * @param string $destinationType
     * @return \Pggns\MidocoApi\Order\StructType\DestinationAutoRemarkDTO
     */
    public function setDestinationType(?string $destinationType = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationType) && !is_string($destinationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationType, true), gettype($destinationType)), __LINE__);
        }
        $this->destinationType = $destinationType;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\DestinationAutoRemarkDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DestinationAutoRemarkDTO
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
}
