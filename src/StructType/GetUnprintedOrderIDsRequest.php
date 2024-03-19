<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnprintedOrderIDsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUnprintedOrderIDsRequest extends AbstractStructBase
{
    /**
     * The from
     * @var string|null
     */
    protected ?string $from = null;
    /**
     * The until
     * @var string|null
     */
    protected ?string $until = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The group1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $group1 = null;
    /**
     * The group2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $group2 = null;
    /**
     * The group3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $group3 = null;
    /**
     * The customers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customers = null;
    /**
     * The supplier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $supplier = null;
    /**
     * The travelNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * The travelFrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelFrom = null;
    /**
     * The travelUntil
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelUntil = null;
    /**
     * The paymentDueDateFrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $paymentDueDateFrom = null;
    /**
     * The paymentDueDateUntil
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $paymentDueDateUntil = null;
    /**
     * Constructor method for GetUnprintedOrderIDsRequest
     * @uses GetUnprintedOrderIDsRequest::setFrom()
     * @uses GetUnprintedOrderIDsRequest::setUntil()
     * @uses GetUnprintedOrderIDsRequest::setUnitName()
     * @uses GetUnprintedOrderIDsRequest::setGroup1()
     * @uses GetUnprintedOrderIDsRequest::setGroup2()
     * @uses GetUnprintedOrderIDsRequest::setGroup3()
     * @uses GetUnprintedOrderIDsRequest::setCustomers()
     * @uses GetUnprintedOrderIDsRequest::setSupplier()
     * @uses GetUnprintedOrderIDsRequest::setTravelNo()
     * @uses GetUnprintedOrderIDsRequest::setTravelFrom()
     * @uses GetUnprintedOrderIDsRequest::setTravelUntil()
     * @uses GetUnprintedOrderIDsRequest::setPaymentDueDateFrom()
     * @uses GetUnprintedOrderIDsRequest::setPaymentDueDateUntil()
     * @param string $from
     * @param string $until
     * @param string $unitName
     * @param string $group1
     * @param string $group2
     * @param string $group3
     * @param string $customers
     * @param string $supplier
     * @param string $travelNo
     * @param string $travelFrom
     * @param string $travelUntil
     * @param string $paymentDueDateFrom
     * @param string $paymentDueDateUntil
     */
    public function __construct(?string $from = null, ?string $until = null, ?string $unitName = null, ?string $group1 = null, ?string $group2 = null, ?string $group3 = null, ?string $customers = null, ?string $supplier = null, ?string $travelNo = null, ?string $travelFrom = null, ?string $travelUntil = null, ?string $paymentDueDateFrom = null, ?string $paymentDueDateUntil = null)
    {
        $this
            ->setFrom($from)
            ->setUntil($until)
            ->setUnitName($unitName)
            ->setGroup1($group1)
            ->setGroup2($group2)
            ->setGroup3($group3)
            ->setCustomers($customers)
            ->setSupplier($supplier)
            ->setTravelNo($travelNo)
            ->setTravelFrom($travelFrom)
            ->setTravelUntil($travelUntil)
            ->setPaymentDueDateFrom($paymentDueDateFrom)
            ->setPaymentDueDateUntil($paymentDueDateUntil);
    }
    /**
     * Get from value
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }
    /**
     * Set from value
     * @param string $from
     * @return \Pggns\MidocoApi\Order\StructType\GetUnprintedOrderIDsRequest
     */
    public function setFrom(?string $from = null): self
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($from, true), gettype($from)), __LINE__);
        }
        $this->from = $from;
        
        return $this;
    }
    /**
     * Get until value
     * @return string|null
     */
    public function getUntil(): ?string
    {
        return $this->until;
    }
    /**
     * Set until value
     * @param string $until
     * @return \Pggns\MidocoApi\Order\StructType\GetUnprintedOrderIDsRequest
     */
    public function setUntil(?string $until = null): self
    {
        // validation for constraint: string
        if (!is_null($until) && !is_string($until)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($until, true), gettype($until)), __LINE__);
        }
        $this->until = $until;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\GetUnprintedOrderIDsRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetUnprintedOrderIDsRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetUnprintedOrderIDsRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetUnprintedOrderIDsRequest
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
     * Get customers value
     * @return string|null
     */
    public function getCustomers(): ?string
    {
        return $this->customers;
    }
    /**
     * Set customers value
     * @param string $customers
     * @return \Pggns\MidocoApi\Order\StructType\GetUnprintedOrderIDsRequest
     */
    public function setCustomers(?string $customers = null): self
    {
        // validation for constraint: string
        if (!is_null($customers) && !is_string($customers)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customers, true), gettype($customers)), __LINE__);
        }
        $this->customers = $customers;
        
        return $this;
    }
    /**
     * Get supplier value
     * @return string|null
     */
    public function getSupplier(): ?string
    {
        return $this->supplier;
    }
    /**
     * Set supplier value
     * @param string $supplier
     * @return \Pggns\MidocoApi\Order\StructType\GetUnprintedOrderIDsRequest
     */
    public function setSupplier(?string $supplier = null): self
    {
        // validation for constraint: string
        if (!is_null($supplier) && !is_string($supplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier, true), gettype($supplier)), __LINE__);
        }
        $this->supplier = $supplier;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetUnprintedOrderIDsRequest
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
    /**
     * Get travelFrom value
     * @return string|null
     */
    public function getTravelFrom(): ?string
    {
        return $this->travelFrom;
    }
    /**
     * Set travelFrom value
     * @param string $travelFrom
     * @return \Pggns\MidocoApi\Order\StructType\GetUnprintedOrderIDsRequest
     */
    public function setTravelFrom(?string $travelFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($travelFrom) && !is_string($travelFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelFrom, true), gettype($travelFrom)), __LINE__);
        }
        $this->travelFrom = $travelFrom;
        
        return $this;
    }
    /**
     * Get travelUntil value
     * @return string|null
     */
    public function getTravelUntil(): ?string
    {
        return $this->travelUntil;
    }
    /**
     * Set travelUntil value
     * @param string $travelUntil
     * @return \Pggns\MidocoApi\Order\StructType\GetUnprintedOrderIDsRequest
     */
    public function setTravelUntil(?string $travelUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($travelUntil) && !is_string($travelUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelUntil, true), gettype($travelUntil)), __LINE__);
        }
        $this->travelUntil = $travelUntil;
        
        return $this;
    }
    /**
     * Get paymentDueDateFrom value
     * @return string|null
     */
    public function getPaymentDueDateFrom(): ?string
    {
        return $this->paymentDueDateFrom;
    }
    /**
     * Set paymentDueDateFrom value
     * @param string $paymentDueDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\GetUnprintedOrderIDsRequest
     */
    public function setPaymentDueDateFrom(?string $paymentDueDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentDueDateFrom) && !is_string($paymentDueDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentDueDateFrom, true), gettype($paymentDueDateFrom)), __LINE__);
        }
        $this->paymentDueDateFrom = $paymentDueDateFrom;
        
        return $this;
    }
    /**
     * Get paymentDueDateUntil value
     * @return string|null
     */
    public function getPaymentDueDateUntil(): ?string
    {
        return $this->paymentDueDateUntil;
    }
    /**
     * Set paymentDueDateUntil value
     * @param string $paymentDueDateUntil
     * @return \Pggns\MidocoApi\Order\StructType\GetUnprintedOrderIDsRequest
     */
    public function setPaymentDueDateUntil(?string $paymentDueDateUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentDueDateUntil) && !is_string($paymentDueDateUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentDueDateUntil, true), gettype($paymentDueDateUntil)), __LINE__);
        }
        $this->paymentDueDateUntil = $paymentDueDateUntil;
        
        return $this;
    }
}
