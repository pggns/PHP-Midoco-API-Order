<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageMarginsSearchCriteriaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PackageMarginsSearchCriteriaType extends AbstractStructBase
{
    /**
     * The supplierId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The travelStartDateFrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelStartDateFrom = null;
    /**
     * The travelStartDateTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelStartDateTo = null;
    /**
     * The destination
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The orderNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The notBookedMargins
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $notBookedMargins = null;
    /**
     * The orgunitName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $orgunitName = null;
    /**
     * Constructor method for PackageMarginsSearchCriteriaType
     * @uses PackageMarginsSearchCriteriaType::setSupplierId()
     * @uses PackageMarginsSearchCriteriaType::setTravelStartDateFrom()
     * @uses PackageMarginsSearchCriteriaType::setTravelStartDateTo()
     * @uses PackageMarginsSearchCriteriaType::setDestination()
     * @uses PackageMarginsSearchCriteriaType::setOrderNo()
     * @uses PackageMarginsSearchCriteriaType::setNotBookedMargins()
     * @uses PackageMarginsSearchCriteriaType::setOrgunitName()
     * @param string $supplierId
     * @param string $travelStartDateFrom
     * @param string $travelStartDateTo
     * @param string $destination
     * @param int $orderNo
     * @param bool $notBookedMargins
     * @param string $orgunitName
     */
    public function __construct(?string $supplierId = null, ?string $travelStartDateFrom = null, ?string $travelStartDateTo = null, ?string $destination = null, ?int $orderNo = null, ?bool $notBookedMargins = null, ?string $orgunitName = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setTravelStartDateFrom($travelStartDateFrom)
            ->setTravelStartDateTo($travelStartDateTo)
            ->setDestination($destination)
            ->setOrderNo($orderNo)
            ->setNotBookedMargins($notBookedMargins)
            ->setOrgunitName($orgunitName);
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginsSearchCriteriaType
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
     * Get travelStartDateFrom value
     * @return string|null
     */
    public function getTravelStartDateFrom(): ?string
    {
        return $this->travelStartDateFrom;
    }
    /**
     * Set travelStartDateFrom value
     * @param string $travelStartDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginsSearchCriteriaType
     */
    public function setTravelStartDateFrom(?string $travelStartDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($travelStartDateFrom) && !is_string($travelStartDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelStartDateFrom, true), gettype($travelStartDateFrom)), __LINE__);
        }
        $this->travelStartDateFrom = $travelStartDateFrom;
        
        return $this;
    }
    /**
     * Get travelStartDateTo value
     * @return string|null
     */
    public function getTravelStartDateTo(): ?string
    {
        return $this->travelStartDateTo;
    }
    /**
     * Set travelStartDateTo value
     * @param string $travelStartDateTo
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginsSearchCriteriaType
     */
    public function setTravelStartDateTo(?string $travelStartDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelStartDateTo) && !is_string($travelStartDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelStartDateTo, true), gettype($travelStartDateTo)), __LINE__);
        }
        $this->travelStartDateTo = $travelStartDateTo;
        
        return $this;
    }
    /**
     * Get destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginsSearchCriteriaType
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginsSearchCriteriaType
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get notBookedMargins value
     * @return bool|null
     */
    public function getNotBookedMargins(): ?bool
    {
        return $this->notBookedMargins;
    }
    /**
     * Set notBookedMargins value
     * @param bool $notBookedMargins
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginsSearchCriteriaType
     */
    public function setNotBookedMargins(?bool $notBookedMargins = null): self
    {
        // validation for constraint: boolean
        if (!is_null($notBookedMargins) && !is_bool($notBookedMargins)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($notBookedMargins, true), gettype($notBookedMargins)), __LINE__);
        }
        $this->notBookedMargins = $notBookedMargins;
        
        return $this;
    }
    /**
     * Get orgunitName value
     * @return string|null
     */
    public function getOrgunitName(): ?string
    {
        return $this->orgunitName;
    }
    /**
     * Set orgunitName value
     * @param string $orgunitName
     * @return \Pggns\MidocoApi\Order\StructType\PackageMarginsSearchCriteriaType
     */
    public function setOrgunitName(?string $orgunitName = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunitName) && !is_string($orgunitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunitName, true), gettype($orgunitName)), __LINE__);
        }
        $this->orgunitName = $orgunitName;
        
        return $this;
    }
}
