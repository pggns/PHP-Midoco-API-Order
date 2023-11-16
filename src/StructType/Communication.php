<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for communication StructType
 * Meta information extracted from the WSDL
 * - documentation: How to communicate with the customer (telephone, email, fax etc).
 * @subpackage Structs
 */
class Communication extends AbstractStructBase
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $type;
    /**
     * The communication_data
     * Meta information extracted from the WSDL
     * - documentation: The data for communication (a telephone no, an email address etc)
     * @var string|null
     */
    protected ?string $communication_data = null;
    /**
     * The Consent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Consent
     * @var \Pggns\MidocoApi\Order\StructType\ConsentType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\ConsentType $Consent = null;
    /**
     * The use_for_mailing
     * Meta information extracted from the WSDL
     * - documentation: Boolean field, which can be used to suppress usage of this information for mailings
     * - default: true
     * @var bool|null
     */
    protected ?bool $use_for_mailing = null;
    /**
     * The communicationData
     * Meta information extracted from the WSDL
     * - documentation: The data for communication (a telephone no, an email address etc)
     * @var string|null
     */
    protected ?string $communicationData = null;
    /**
     * The useForMailing
     * Meta information extracted from the WSDL
     * - documentation: Boolean field, which can be used to suppress usage of this information for mailings
     * - default: true
     * @var bool|null
     */
    protected ?bool $useForMailing = null;
    /**
     * Constructor method for communication
     * @uses Communication::setType()
     * @uses Communication::setCommunication_data()
     * @uses Communication::setConsent()
     * @uses Communication::setUse_for_mailing()
     * @uses Communication::setCommunicationData()
     * @uses Communication::setUseForMailing()
     * @param string $type
     * @param string $communication_data
     * @param \Pggns\MidocoApi\Order\StructType\ConsentType $consent
     * @param bool $use_for_mailing
     * @param string $communicationData
     * @param bool $useForMailing
     */
    public function __construct(string $type, ?string $communication_data = null, ?\Pggns\MidocoApi\Order\StructType\ConsentType $consent = null, ?bool $use_for_mailing = true, ?string $communicationData = null, ?bool $useForMailing = true)
    {
        $this
            ->setType($type)
            ->setCommunication_data($communication_data)
            ->setConsent($consent)
            ->setUse_for_mailing($use_for_mailing)
            ->setCommunicationData($communicationData)
            ->setUseForMailing($useForMailing);
    }
    /**
     * Get type value
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\Communication
     */
    public function setType(string $type): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get communication_data value
     * @return string|null
     */
    public function getCommunication_data(): ?string
    {
        return $this->{'communication-data'};
    }
    /**
     * Set communication_data value
     * @param string $communication_data
     * @return \Pggns\MidocoApi\Order\StructType\Communication
     */
    public function setCommunication_data(?string $communication_data = null): self
    {
        // validation for constraint: string
        if (!is_null($communication_data) && !is_string($communication_data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($communication_data, true), gettype($communication_data)), __LINE__);
        }
        $this->communication_data = $this->{'communication-data'} = $communication_data;
        
        return $this;
    }
    /**
     * Get Consent value
     * @return \Pggns\MidocoApi\Order\StructType\ConsentType|null
     */
    public function getConsent(): ?\Pggns\MidocoApi\Order\StructType\ConsentType
    {
        return $this->Consent;
    }
    /**
     * Set Consent value
     * @param \Pggns\MidocoApi\Order\StructType\ConsentType $consent
     * @return \Pggns\MidocoApi\Order\StructType\Communication
     */
    public function setConsent(?\Pggns\MidocoApi\Order\StructType\ConsentType $consent = null): self
    {
        $this->Consent = $consent;
        
        return $this;
    }
    /**
     * Get use_for_mailing value
     * @return bool|null
     */
    public function getUse_for_mailing(): ?bool
    {
        return $this->{'use-for-mailing'};
    }
    /**
     * Set use_for_mailing value
     * @param bool $use_for_mailing
     * @return \Pggns\MidocoApi\Order\StructType\Communication
     */
    public function setUse_for_mailing(?bool $use_for_mailing = true): self
    {
        // validation for constraint: boolean
        if (!is_null($use_for_mailing) && !is_bool($use_for_mailing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($use_for_mailing, true), gettype($use_for_mailing)), __LINE__);
        }
        $this->use_for_mailing = $this->{'use-for-mailing'} = $use_for_mailing;
        
        return $this;
    }
    /**
     * Get communicationData value
     * @return string|null
     */
    public function getCommunicationData(): ?string
    {
        return $this->communicationData;
    }
    /**
     * Set communicationData value
     * @param string $communicationData
     * @return \Pggns\MidocoApi\Order\StructType\Communication
     */
    public function setCommunicationData(?string $communicationData = null): self
    {
        // validation for constraint: string
        if (!is_null($communicationData) && !is_string($communicationData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($communicationData, true), gettype($communicationData)), __LINE__);
        }
        $this->communicationData = $communicationData;
        
        return $this;
    }
    /**
     * Get useForMailing value
     * @return bool|null
     */
    public function getUseForMailing(): ?bool
    {
        return $this->useForMailing;
    }
    /**
     * Set useForMailing value
     * @param bool $useForMailing
     * @return \Pggns\MidocoApi\Order\StructType\Communication
     */
    public function setUseForMailing(?bool $useForMailing = true): self
    {
        // validation for constraint: boolean
        if (!is_null($useForMailing) && !is_bool($useForMailing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useForMailing, true), gettype($useForMailing)), __LINE__);
        }
        $this->useForMailing = $useForMailing;
        
        return $this;
    }
}
