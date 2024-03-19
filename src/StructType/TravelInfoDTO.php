<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelInfoDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TravelInfoDTO extends AbstractStructBase
{
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The traveltype
     * @var string|null
     */
    protected ?string $traveltype = null;
    /**
     * The settlementType
     * @var string|null
     */
    protected ?string $settlementType = null;
    /**
     * The destinationKey
     * @var string|null
     */
    protected ?string $destinationKey = null;
    /**
     * The fallbackDestinationKey
     * @var string|null
     */
    protected ?string $fallbackDestinationKey = null;
    /**
     * The strictDestination
     * @var bool|null
     */
    protected ?bool $strictDestination = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The forStorno
     * @var bool|null
     */
    protected ?bool $forStorno = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The ticketType
     * @var string|null
     */
    protected ?string $ticketType = null;
    /**
     * The forDi
     * @var bool|null
     */
    protected ?bool $forDi = null;
    /**
     * Constructor method for TravelInfoDTO
     * @uses TravelInfoDTO::setSupplierId()
     * @uses TravelInfoDTO::setTraveltype()
     * @uses TravelInfoDTO::setSettlementType()
     * @uses TravelInfoDTO::setDestinationKey()
     * @uses TravelInfoDTO::setFallbackDestinationKey()
     * @uses TravelInfoDTO::setStrictDestination()
     * @uses TravelInfoDTO::setValidFrom()
     * @uses TravelInfoDTO::setTravelDate()
     * @uses TravelInfoDTO::setForStorno()
     * @uses TravelInfoDTO::setCreationDate()
     * @uses TravelInfoDTO::setTicketType()
     * @uses TravelInfoDTO::setForDi()
     * @param string $supplierId
     * @param string $traveltype
     * @param string $settlementType
     * @param string $destinationKey
     * @param string $fallbackDestinationKey
     * @param bool $strictDestination
     * @param string $validFrom
     * @param string $travelDate
     * @param bool $forStorno
     * @param string $creationDate
     * @param string $ticketType
     * @param bool $forDi
     */
    public function __construct(?string $supplierId = null, ?string $traveltype = null, ?string $settlementType = null, ?string $destinationKey = null, ?string $fallbackDestinationKey = null, ?bool $strictDestination = null, ?string $validFrom = null, ?string $travelDate = null, ?bool $forStorno = null, ?string $creationDate = null, ?string $ticketType = null, ?bool $forDi = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setTraveltype($traveltype)
            ->setSettlementType($settlementType)
            ->setDestinationKey($destinationKey)
            ->setFallbackDestinationKey($fallbackDestinationKey)
            ->setStrictDestination($strictDestination)
            ->setValidFrom($validFrom)
            ->setTravelDate($travelDate)
            ->setForStorno($forStorno)
            ->setCreationDate($creationDate)
            ->setTicketType($ticketType)
            ->setForDi($forDi);
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\TravelInfoDTO
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get traveltype value
     * @return string|null
     */
    public function getTraveltype(): ?string
    {
        return $this->traveltype;
    }
    /**
     * Set traveltype value
     * @param string $traveltype
     * @return \Pggns\MidocoApi\Order\StructType\TravelInfoDTO
     */
    public function setTraveltype(?string $traveltype = null): self
    {
        // validation for constraint: string
        if (!is_null($traveltype) && !is_string($traveltype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveltype, true), gettype($traveltype)), __LINE__);
        }
        $this->traveltype = $traveltype;
        
        return $this;
    }
    /**
     * Get settlementType value
     * @return string|null
     */
    public function getSettlementType(): ?string
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param string $settlementType
     * @return \Pggns\MidocoApi\Order\StructType\TravelInfoDTO
     */
    public function setSettlementType(?string $settlementType = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementType) && !is_string($settlementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
        return $this;
    }
    /**
     * Get destinationKey value
     * @return string|null
     */
    public function getDestinationKey(): ?string
    {
        return $this->destinationKey;
    }
    /**
     * Set destinationKey value
     * @param string $destinationKey
     * @return \Pggns\MidocoApi\Order\StructType\TravelInfoDTO
     */
    public function setDestinationKey(?string $destinationKey = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationKey) && !is_string($destinationKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationKey, true), gettype($destinationKey)), __LINE__);
        }
        $this->destinationKey = $destinationKey;
        
        return $this;
    }
    /**
     * Get fallbackDestinationKey value
     * @return string|null
     */
    public function getFallbackDestinationKey(): ?string
    {
        return $this->fallbackDestinationKey;
    }
    /**
     * Set fallbackDestinationKey value
     * @param string $fallbackDestinationKey
     * @return \Pggns\MidocoApi\Order\StructType\TravelInfoDTO
     */
    public function setFallbackDestinationKey(?string $fallbackDestinationKey = null): self
    {
        // validation for constraint: string
        if (!is_null($fallbackDestinationKey) && !is_string($fallbackDestinationKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fallbackDestinationKey, true), gettype($fallbackDestinationKey)), __LINE__);
        }
        $this->fallbackDestinationKey = $fallbackDestinationKey;
        
        return $this;
    }
    /**
     * Get strictDestination value
     * @return bool|null
     */
    public function getStrictDestination(): ?bool
    {
        return $this->strictDestination;
    }
    /**
     * Set strictDestination value
     * @param bool $strictDestination
     * @return \Pggns\MidocoApi\Order\StructType\TravelInfoDTO
     */
    public function setStrictDestination(?bool $strictDestination = null): self
    {
        // validation for constraint: boolean
        if (!is_null($strictDestination) && !is_bool($strictDestination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($strictDestination, true), gettype($strictDestination)), __LINE__);
        }
        $this->strictDestination = $strictDestination;
        
        return $this;
    }
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \Pggns\MidocoApi\Order\StructType\TravelInfoDTO
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Order\StructType\TravelInfoDTO
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
        return $this;
    }
    /**
     * Get forStorno value
     * @return bool|null
     */
    public function getForStorno(): ?bool
    {
        return $this->forStorno;
    }
    /**
     * Set forStorno value
     * @param bool $forStorno
     * @return \Pggns\MidocoApi\Order\StructType\TravelInfoDTO
     */
    public function setForStorno(?bool $forStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forStorno) && !is_bool($forStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forStorno, true), gettype($forStorno)), __LINE__);
        }
        $this->forStorno = $forStorno;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\TravelInfoDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get ticketType value
     * @return string|null
     */
    public function getTicketType(): ?string
    {
        return $this->ticketType;
    }
    /**
     * Set ticketType value
     * @param string $ticketType
     * @return \Pggns\MidocoApi\Order\StructType\TravelInfoDTO
     */
    public function setTicketType(?string $ticketType = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketType) && !is_string($ticketType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketType, true), gettype($ticketType)), __LINE__);
        }
        $this->ticketType = $ticketType;
        
        return $this;
    }
    /**
     * Get forDi value
     * @return bool|null
     */
    public function getForDi(): ?bool
    {
        return $this->forDi;
    }
    /**
     * Set forDi value
     * @param bool $forDi
     * @return \Pggns\MidocoApi\Order\StructType\TravelInfoDTO
     */
    public function setForDi(?bool $forDi = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forDi) && !is_bool($forDi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forDi, true), gettype($forDi)), __LINE__);
        }
        $this->forDi = $forDi;
        
        return $this;
    }
}
