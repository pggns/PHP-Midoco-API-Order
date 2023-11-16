<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalFlightPassengerInfos StructType
 * @subpackage Structs
 */
class AdditionalFlightPassengerInfos extends AbstractStructBase
{
    /**
     * The frequent_flyer_type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $frequent_flyer_type = null;
    /**
     * The frequent_flyer_no
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $frequent_flyer_no = null;
    /**
     * The frequent_flyer_airline
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $frequent_flyer_airline = null;
    /**
     * The identity_card_type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $identity_card_type = null;
    /**
     * The identity_card_no
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $identity_card_no = null;
    /**
     * The identity_card_required
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $identity_card_required = null;
    /**
     * The ticket_mail
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ticket_mail = null;
    /**
     * The frequentFlyerType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $frequentFlyerType = null;
    /**
     * The frequentFlyerNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $frequentFlyerNo = null;
    /**
     * The frequentFlyerAirline
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $frequentFlyerAirline = null;
    /**
     * The identityCardType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $identityCardType = null;
    /**
     * The identityCardNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $identityCardNo = null;
    /**
     * The identityCardRequired
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $identityCardRequired = null;
    /**
     * The ticketMail
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ticketMail = null;
    /**
     * Constructor method for AdditionalFlightPassengerInfos
     * @uses AdditionalFlightPassengerInfos::setFrequent_flyer_type()
     * @uses AdditionalFlightPassengerInfos::setFrequent_flyer_no()
     * @uses AdditionalFlightPassengerInfos::setFrequent_flyer_airline()
     * @uses AdditionalFlightPassengerInfos::setIdentity_card_type()
     * @uses AdditionalFlightPassengerInfos::setIdentity_card_no()
     * @uses AdditionalFlightPassengerInfos::setIdentity_card_required()
     * @uses AdditionalFlightPassengerInfos::setTicket_mail()
     * @uses AdditionalFlightPassengerInfos::setFrequentFlyerType()
     * @uses AdditionalFlightPassengerInfos::setFrequentFlyerNo()
     * @uses AdditionalFlightPassengerInfos::setFrequentFlyerAirline()
     * @uses AdditionalFlightPassengerInfos::setIdentityCardType()
     * @uses AdditionalFlightPassengerInfos::setIdentityCardNo()
     * @uses AdditionalFlightPassengerInfos::setIdentityCardRequired()
     * @uses AdditionalFlightPassengerInfos::setTicketMail()
     * @param string $frequent_flyer_type
     * @param string $frequent_flyer_no
     * @param string $frequent_flyer_airline
     * @param string $identity_card_type
     * @param string $identity_card_no
     * @param bool $identity_card_required
     * @param bool $ticket_mail
     * @param string $frequentFlyerType
     * @param string $frequentFlyerNo
     * @param string $frequentFlyerAirline
     * @param string $identityCardType
     * @param string $identityCardNo
     * @param bool $identityCardRequired
     * @param bool $ticketMail
     */
    public function __construct(?string $frequent_flyer_type = null, ?string $frequent_flyer_no = null, ?string $frequent_flyer_airline = null, ?string $identity_card_type = null, ?string $identity_card_no = null, ?bool $identity_card_required = false, ?bool $ticket_mail = false, ?string $frequentFlyerType = null, ?string $frequentFlyerNo = null, ?string $frequentFlyerAirline = null, ?string $identityCardType = null, ?string $identityCardNo = null, ?bool $identityCardRequired = false, ?bool $ticketMail = false)
    {
        $this
            ->setFrequent_flyer_type($frequent_flyer_type)
            ->setFrequent_flyer_no($frequent_flyer_no)
            ->setFrequent_flyer_airline($frequent_flyer_airline)
            ->setIdentity_card_type($identity_card_type)
            ->setIdentity_card_no($identity_card_no)
            ->setIdentity_card_required($identity_card_required)
            ->setTicket_mail($ticket_mail)
            ->setFrequentFlyerType($frequentFlyerType)
            ->setFrequentFlyerNo($frequentFlyerNo)
            ->setFrequentFlyerAirline($frequentFlyerAirline)
            ->setIdentityCardType($identityCardType)
            ->setIdentityCardNo($identityCardNo)
            ->setIdentityCardRequired($identityCardRequired)
            ->setTicketMail($ticketMail);
    }
    /**
     * Get frequent_flyer_type value
     * @return string|null
     */
    public function getFrequent_flyer_type(): ?string
    {
        return $this->{'frequent-flyer-type'};
    }
    /**
     * Set frequent_flyer_type value
     * @param string $frequent_flyer_type
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalFlightPassengerInfos
     */
    public function setFrequent_flyer_type(?string $frequent_flyer_type = null): self
    {
        // validation for constraint: string
        if (!is_null($frequent_flyer_type) && !is_string($frequent_flyer_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($frequent_flyer_type, true), gettype($frequent_flyer_type)), __LINE__);
        }
        $this->frequent_flyer_type = $this->{'frequent-flyer-type'} = $frequent_flyer_type;
        
        return $this;
    }
    /**
     * Get frequent_flyer_no value
     * @return string|null
     */
    public function getFrequent_flyer_no(): ?string
    {
        return $this->{'frequent-flyer-no'};
    }
    /**
     * Set frequent_flyer_no value
     * @param string $frequent_flyer_no
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalFlightPassengerInfos
     */
    public function setFrequent_flyer_no(?string $frequent_flyer_no = null): self
    {
        // validation for constraint: string
        if (!is_null($frequent_flyer_no) && !is_string($frequent_flyer_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($frequent_flyer_no, true), gettype($frequent_flyer_no)), __LINE__);
        }
        $this->frequent_flyer_no = $this->{'frequent-flyer-no'} = $frequent_flyer_no;
        
        return $this;
    }
    /**
     * Get frequent_flyer_airline value
     * @return string|null
     */
    public function getFrequent_flyer_airline(): ?string
    {
        return $this->{'frequent-flyer-airline'};
    }
    /**
     * Set frequent_flyer_airline value
     * @param string $frequent_flyer_airline
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalFlightPassengerInfos
     */
    public function setFrequent_flyer_airline(?string $frequent_flyer_airline = null): self
    {
        // validation for constraint: string
        if (!is_null($frequent_flyer_airline) && !is_string($frequent_flyer_airline)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($frequent_flyer_airline, true), gettype($frequent_flyer_airline)), __LINE__);
        }
        $this->frequent_flyer_airline = $this->{'frequent-flyer-airline'} = $frequent_flyer_airline;
        
        return $this;
    }
    /**
     * Get identity_card_type value
     * @return string|null
     */
    public function getIdentity_card_type(): ?string
    {
        return $this->{'identity-card-type'};
    }
    /**
     * Set identity_card_type value
     * @param string $identity_card_type
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalFlightPassengerInfos
     */
    public function setIdentity_card_type(?string $identity_card_type = null): self
    {
        // validation for constraint: string
        if (!is_null($identity_card_type) && !is_string($identity_card_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identity_card_type, true), gettype($identity_card_type)), __LINE__);
        }
        $this->identity_card_type = $this->{'identity-card-type'} = $identity_card_type;
        
        return $this;
    }
    /**
     * Get identity_card_no value
     * @return string|null
     */
    public function getIdentity_card_no(): ?string
    {
        return $this->{'identity-card-no'};
    }
    /**
     * Set identity_card_no value
     * @param string $identity_card_no
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalFlightPassengerInfos
     */
    public function setIdentity_card_no(?string $identity_card_no = null): self
    {
        // validation for constraint: string
        if (!is_null($identity_card_no) && !is_string($identity_card_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identity_card_no, true), gettype($identity_card_no)), __LINE__);
        }
        $this->identity_card_no = $this->{'identity-card-no'} = $identity_card_no;
        
        return $this;
    }
    /**
     * Get identity_card_required value
     * @return bool|null
     */
    public function getIdentity_card_required(): ?bool
    {
        return $this->{'identity-card-required'};
    }
    /**
     * Set identity_card_required value
     * @param bool $identity_card_required
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalFlightPassengerInfos
     */
    public function setIdentity_card_required(?bool $identity_card_required = false): self
    {
        // validation for constraint: boolean
        if (!is_null($identity_card_required) && !is_bool($identity_card_required)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($identity_card_required, true), gettype($identity_card_required)), __LINE__);
        }
        $this->identity_card_required = $this->{'identity-card-required'} = $identity_card_required;
        
        return $this;
    }
    /**
     * Get ticket_mail value
     * @return bool|null
     */
    public function getTicket_mail(): ?bool
    {
        return $this->{'ticket-mail'};
    }
    /**
     * Set ticket_mail value
     * @param bool $ticket_mail
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalFlightPassengerInfos
     */
    public function setTicket_mail(?bool $ticket_mail = false): self
    {
        // validation for constraint: boolean
        if (!is_null($ticket_mail) && !is_bool($ticket_mail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ticket_mail, true), gettype($ticket_mail)), __LINE__);
        }
        $this->ticket_mail = $this->{'ticket-mail'} = $ticket_mail;
        
        return $this;
    }
    /**
     * Get frequentFlyerType value
     * @return string|null
     */
    public function getFrequentFlyerType(): ?string
    {
        return $this->frequentFlyerType;
    }
    /**
     * Set frequentFlyerType value
     * @param string $frequentFlyerType
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalFlightPassengerInfos
     */
    public function setFrequentFlyerType(?string $frequentFlyerType = null): self
    {
        // validation for constraint: string
        if (!is_null($frequentFlyerType) && !is_string($frequentFlyerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($frequentFlyerType, true), gettype($frequentFlyerType)), __LINE__);
        }
        $this->frequentFlyerType = $frequentFlyerType;
        
        return $this;
    }
    /**
     * Get frequentFlyerNo value
     * @return string|null
     */
    public function getFrequentFlyerNo(): ?string
    {
        return $this->frequentFlyerNo;
    }
    /**
     * Set frequentFlyerNo value
     * @param string $frequentFlyerNo
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalFlightPassengerInfos
     */
    public function setFrequentFlyerNo(?string $frequentFlyerNo = null): self
    {
        // validation for constraint: string
        if (!is_null($frequentFlyerNo) && !is_string($frequentFlyerNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($frequentFlyerNo, true), gettype($frequentFlyerNo)), __LINE__);
        }
        $this->frequentFlyerNo = $frequentFlyerNo;
        
        return $this;
    }
    /**
     * Get frequentFlyerAirline value
     * @return string|null
     */
    public function getFrequentFlyerAirline(): ?string
    {
        return $this->frequentFlyerAirline;
    }
    /**
     * Set frequentFlyerAirline value
     * @param string $frequentFlyerAirline
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalFlightPassengerInfos
     */
    public function setFrequentFlyerAirline(?string $frequentFlyerAirline = null): self
    {
        // validation for constraint: string
        if (!is_null($frequentFlyerAirline) && !is_string($frequentFlyerAirline)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($frequentFlyerAirline, true), gettype($frequentFlyerAirline)), __LINE__);
        }
        $this->frequentFlyerAirline = $frequentFlyerAirline;
        
        return $this;
    }
    /**
     * Get identityCardType value
     * @return string|null
     */
    public function getIdentityCardType(): ?string
    {
        return $this->identityCardType;
    }
    /**
     * Set identityCardType value
     * @param string $identityCardType
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalFlightPassengerInfos
     */
    public function setIdentityCardType(?string $identityCardType = null): self
    {
        // validation for constraint: string
        if (!is_null($identityCardType) && !is_string($identityCardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identityCardType, true), gettype($identityCardType)), __LINE__);
        }
        $this->identityCardType = $identityCardType;
        
        return $this;
    }
    /**
     * Get identityCardNo value
     * @return string|null
     */
    public function getIdentityCardNo(): ?string
    {
        return $this->identityCardNo;
    }
    /**
     * Set identityCardNo value
     * @param string $identityCardNo
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalFlightPassengerInfos
     */
    public function setIdentityCardNo(?string $identityCardNo = null): self
    {
        // validation for constraint: string
        if (!is_null($identityCardNo) && !is_string($identityCardNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identityCardNo, true), gettype($identityCardNo)), __LINE__);
        }
        $this->identityCardNo = $identityCardNo;
        
        return $this;
    }
    /**
     * Get identityCardRequired value
     * @return bool|null
     */
    public function getIdentityCardRequired(): ?bool
    {
        return $this->identityCardRequired;
    }
    /**
     * Set identityCardRequired value
     * @param bool $identityCardRequired
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalFlightPassengerInfos
     */
    public function setIdentityCardRequired(?bool $identityCardRequired = false): self
    {
        // validation for constraint: boolean
        if (!is_null($identityCardRequired) && !is_bool($identityCardRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($identityCardRequired, true), gettype($identityCardRequired)), __LINE__);
        }
        $this->identityCardRequired = $identityCardRequired;
        
        return $this;
    }
    /**
     * Get ticketMail value
     * @return bool|null
     */
    public function getTicketMail(): ?bool
    {
        return $this->ticketMail;
    }
    /**
     * Set ticketMail value
     * @param bool $ticketMail
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalFlightPassengerInfos
     */
    public function setTicketMail(?bool $ticketMail = false): self
    {
        // validation for constraint: boolean
        if (!is_null($ticketMail) && !is_bool($ticketMail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ticketMail, true), gettype($ticketMail)), __LINE__);
        }
        $this->ticketMail = $ticketMail;
        
        return $this;
    }
}
