<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Communication StructType
 * Meta information extracted from the WSDL
 * - documentation: How to communicate with the customer (telephone, email, fax etc).
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Communication_1 extends AbstractStructBase
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $type;
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
     * Constructor method for Communication
     * @uses Communication_1::setType()
     * @uses Communication_1::setCommunicationData()
     * @uses Communication_1::setUseForMailing()
     * @param string $type
     * @param string $communicationData
     * @param bool $useForMailing
     */
    public function __construct(string $type, ?string $communicationData = null, ?bool $useForMailing = true)
    {
        $this
            ->setType($type)
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
     * @uses \Pggns\MidocoApi\Order\EnumType\CommunicationType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\CommunicationType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\Communication_1
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\CommunicationType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\CommunicationType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\CommunicationType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Communication_1
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
     * @return \Pggns\MidocoApi\Order\StructType\Communication_1
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
