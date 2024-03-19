<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelDocsPrintInfoRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTravelDocsPrintInfoRequest extends AbstractStructBase
{
    /**
     * The orgUnitName
     * @var string|null
     */
    protected ?string $orgUnitName = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The endTravel
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * The paymentReceived
     * @var bool|null
     */
    protected ?bool $paymentReceived = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The travelType
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * The group1
     * @var string|null
     */
    protected ?string $group1 = null;
    /**
     * The group2
     * @var string|null
     */
    protected ?string $group2 = null;
    /**
     * The group3
     * @var string|null
     */
    protected ?string $group3 = null;
    /**
     * The document
     * @var string|null
     */
    protected ?string $document = null;
    /**
     * Constructor method for GetTravelDocsPrintInfoRequest
     * @uses GetTravelDocsPrintInfoRequest::setOrgUnitName()
     * @uses GetTravelDocsPrintInfoRequest::setStartTravel()
     * @uses GetTravelDocsPrintInfoRequest::setEndTravel()
     * @uses GetTravelDocsPrintInfoRequest::setPaymentReceived()
     * @uses GetTravelDocsPrintInfoRequest::setSupplierId()
     * @uses GetTravelDocsPrintInfoRequest::setMediatorId()
     * @uses GetTravelDocsPrintInfoRequest::setTravelType()
     * @uses GetTravelDocsPrintInfoRequest::setGroup1()
     * @uses GetTravelDocsPrintInfoRequest::setGroup2()
     * @uses GetTravelDocsPrintInfoRequest::setGroup3()
     * @uses GetTravelDocsPrintInfoRequest::setDocument()
     * @param string $orgUnitName
     * @param string $startTravel
     * @param string $endTravel
     * @param bool $paymentReceived
     * @param string $supplierId
     * @param string $mediatorId
     * @param string $travelType
     * @param string $group1
     * @param string $group2
     * @param string $group3
     * @param string $document
     */
    public function __construct(?string $orgUnitName = null, ?string $startTravel = null, ?string $endTravel = null, ?bool $paymentReceived = null, ?string $supplierId = null, ?string $mediatorId = null, ?string $travelType = null, ?string $group1 = null, ?string $group2 = null, ?string $group3 = null, ?string $document = null)
    {
        $this
            ->setOrgUnitName($orgUnitName)
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setPaymentReceived($paymentReceived)
            ->setSupplierId($supplierId)
            ->setMediatorId($mediatorId)
            ->setTravelType($travelType)
            ->setGroup1($group1)
            ->setGroup2($group2)
            ->setGroup3($group3)
            ->setDocument($document);
    }
    /**
     * Get orgUnitName value
     * @return string|null
     */
    public function getOrgUnitName(): ?string
    {
        return $this->orgUnitName;
    }
    /**
     * Set orgUnitName value
     * @param string $orgUnitName
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelDocsPrintInfoRequest
     */
    public function setOrgUnitName(?string $orgUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnitName) && !is_string($orgUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnitName, true), gettype($orgUnitName)), __LINE__);
        }
        $this->orgUnitName = $orgUnitName;
        
        return $this;
    }
    /**
     * Get startTravel value
     * @return string|null
     */
    public function getStartTravel(): ?string
    {
        return $this->startTravel;
    }
    /**
     * Set startTravel value
     * @param string $startTravel
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelDocsPrintInfoRequest
     */
    public function setStartTravel(?string $startTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravel) && !is_string($startTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravel, true), gettype($startTravel)), __LINE__);
        }
        $this->startTravel = $startTravel;
        
        return $this;
    }
    /**
     * Get endTravel value
     * @return string|null
     */
    public function getEndTravel(): ?string
    {
        return $this->endTravel;
    }
    /**
     * Set endTravel value
     * @param string $endTravel
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelDocsPrintInfoRequest
     */
    public function setEndTravel(?string $endTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravel) && !is_string($endTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravel, true), gettype($endTravel)), __LINE__);
        }
        $this->endTravel = $endTravel;
        
        return $this;
    }
    /**
     * Get paymentReceived value
     * @return bool|null
     */
    public function getPaymentReceived(): ?bool
    {
        return $this->paymentReceived;
    }
    /**
     * Set paymentReceived value
     * @param bool $paymentReceived
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelDocsPrintInfoRequest
     */
    public function setPaymentReceived(?bool $paymentReceived = null): self
    {
        // validation for constraint: boolean
        if (!is_null($paymentReceived) && !is_bool($paymentReceived)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($paymentReceived, true), gettype($paymentReceived)), __LINE__);
        }
        $this->paymentReceived = $paymentReceived;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelDocsPrintInfoRequest
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
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelDocsPrintInfoRequest
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get travelType value
     * @return string|null
     */
    public function getTravelType(): ?string
    {
        return $this->travelType;
    }
    /**
     * Set travelType value
     * @param string $travelType
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelDocsPrintInfoRequest
     */
    public function setTravelType(?string $travelType = null): self
    {
        // validation for constraint: string
        if (!is_null($travelType) && !is_string($travelType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelType, true), gettype($travelType)), __LINE__);
        }
        $this->travelType = $travelType;
        
        return $this;
    }
    /**
     * Get group1 value
     * @return string|null
     */
    public function getGroup1(): ?string
    {
        return $this->group1;
    }
    /**
     * Set group1 value
     * @param string $group1
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelDocsPrintInfoRequest
     */
    public function setGroup1(?string $group1 = null): self
    {
        // validation for constraint: string
        if (!is_null($group1) && !is_string($group1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group1, true), gettype($group1)), __LINE__);
        }
        $this->group1 = $group1;
        
        return $this;
    }
    /**
     * Get group2 value
     * @return string|null
     */
    public function getGroup2(): ?string
    {
        return $this->group2;
    }
    /**
     * Set group2 value
     * @param string $group2
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelDocsPrintInfoRequest
     */
    public function setGroup2(?string $group2 = null): self
    {
        // validation for constraint: string
        if (!is_null($group2) && !is_string($group2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group2, true), gettype($group2)), __LINE__);
        }
        $this->group2 = $group2;
        
        return $this;
    }
    /**
     * Get group3 value
     * @return string|null
     */
    public function getGroup3(): ?string
    {
        return $this->group3;
    }
    /**
     * Set group3 value
     * @param string $group3
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelDocsPrintInfoRequest
     */
    public function setGroup3(?string $group3 = null): self
    {
        // validation for constraint: string
        if (!is_null($group3) && !is_string($group3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group3, true), gettype($group3)), __LINE__);
        }
        $this->group3 = $group3;
        
        return $this;
    }
    /**
     * Get document value
     * @return string|null
     */
    public function getDocument(): ?string
    {
        return $this->document;
    }
    /**
     * Set document value
     * @param string $document
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelDocsPrintInfoRequest
     */
    public function setDocument(?string $document = null): self
    {
        // validation for constraint: string
        if (!is_null($document) && !is_string($document)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($document, true), gettype($document)), __LINE__);
        }
        $this->document = $document;
        
        return $this;
    }
}
