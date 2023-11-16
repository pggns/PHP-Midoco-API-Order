<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingAttributeDTO StructType
 * @subpackage Structs
 */
class BillingAttributeDTO extends AbstractStructBase
{
    /**
     * The costCentre
     * @var string|null
     */
    protected ?string $costCentre = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The orderDate
     * @var string|null
     */
    protected ?string $orderDate = null;
    /**
     * The ordererId
     * @var int|null
     */
    protected ?int $ordererId = null;
    /**
     * The ordererName
     * @var string|null
     */
    protected ?string $ordererName = null;
    /**
     * The personalNo
     * @var string|null
     */
    protected ?string $personalNo = null;
    /**
     * The projectNo
     * @var string|null
     */
    protected ?string $projectNo = null;
    /**
     * The remark1
     * @var string|null
     */
    protected ?string $remark1 = null;
    /**
     * The remark2
     * @var string|null
     */
    protected ?string $remark2 = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The travellerId
     * @var int|null
     */
    protected ?int $travellerId = null;
    /**
     * The travellerName
     * @var string|null
     */
    protected ?string $travellerName = null;
    /**
     * Constructor method for BillingAttributeDTO
     * @uses BillingAttributeDTO::setCostCentre()
     * @uses BillingAttributeDTO::setDocumentId()
     * @uses BillingAttributeDTO::setOrderDate()
     * @uses BillingAttributeDTO::setOrdererId()
     * @uses BillingAttributeDTO::setOrdererName()
     * @uses BillingAttributeDTO::setPersonalNo()
     * @uses BillingAttributeDTO::setProjectNo()
     * @uses BillingAttributeDTO::setRemark1()
     * @uses BillingAttributeDTO::setRemark2()
     * @uses BillingAttributeDTO::setTravelDate()
     * @uses BillingAttributeDTO::setTravellerId()
     * @uses BillingAttributeDTO::setTravellerName()
     * @param string $costCentre
     * @param int $documentId
     * @param string $orderDate
     * @param int $ordererId
     * @param string $ordererName
     * @param string $personalNo
     * @param string $projectNo
     * @param string $remark1
     * @param string $remark2
     * @param string $travelDate
     * @param int $travellerId
     * @param string $travellerName
     */
    public function __construct(?string $costCentre = null, ?int $documentId = null, ?string $orderDate = null, ?int $ordererId = null, ?string $ordererName = null, ?string $personalNo = null, ?string $projectNo = null, ?string $remark1 = null, ?string $remark2 = null, ?string $travelDate = null, ?int $travellerId = null, ?string $travellerName = null)
    {
        $this
            ->setCostCentre($costCentre)
            ->setDocumentId($documentId)
            ->setOrderDate($orderDate)
            ->setOrdererId($ordererId)
            ->setOrdererName($ordererName)
            ->setPersonalNo($personalNo)
            ->setProjectNo($projectNo)
            ->setRemark1($remark1)
            ->setRemark2($remark2)
            ->setTravelDate($travelDate)
            ->setTravellerId($travellerId)
            ->setTravellerName($travellerName);
    }
    /**
     * Get costCentre value
     * @return string|null
     */
    public function getCostCentre(): ?string
    {
        return $this->costCentre;
    }
    /**
     * Set costCentre value
     * @param string $costCentre
     * @return \Pggns\MidocoApi\Order\StructType\BillingAttributeDTO
     */
    public function setCostCentre(?string $costCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentre) && !is_string($costCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentre, true), gettype($costCentre)), __LINE__);
        }
        $this->costCentre = $costCentre;
        
        return $this;
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\BillingAttributeDTO
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Get orderDate value
     * @return string|null
     */
    public function getOrderDate(): ?string
    {
        return $this->orderDate;
    }
    /**
     * Set orderDate value
     * @param string $orderDate
     * @return \Pggns\MidocoApi\Order\StructType\BillingAttributeDTO
     */
    public function setOrderDate(?string $orderDate = null): self
    {
        // validation for constraint: string
        if (!is_null($orderDate) && !is_string($orderDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderDate, true), gettype($orderDate)), __LINE__);
        }
        $this->orderDate = $orderDate;
        
        return $this;
    }
    /**
     * Get ordererId value
     * @return int|null
     */
    public function getOrdererId(): ?int
    {
        return $this->ordererId;
    }
    /**
     * Set ordererId value
     * @param int $ordererId
     * @return \Pggns\MidocoApi\Order\StructType\BillingAttributeDTO
     */
    public function setOrdererId(?int $ordererId = null): self
    {
        // validation for constraint: int
        if (!is_null($ordererId) && !(is_int($ordererId) || ctype_digit($ordererId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ordererId, true), gettype($ordererId)), __LINE__);
        }
        $this->ordererId = $ordererId;
        
        return $this;
    }
    /**
     * Get ordererName value
     * @return string|null
     */
    public function getOrdererName(): ?string
    {
        return $this->ordererName;
    }
    /**
     * Set ordererName value
     * @param string $ordererName
     * @return \Pggns\MidocoApi\Order\StructType\BillingAttributeDTO
     */
    public function setOrdererName(?string $ordererName = null): self
    {
        // validation for constraint: string
        if (!is_null($ordererName) && !is_string($ordererName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ordererName, true), gettype($ordererName)), __LINE__);
        }
        $this->ordererName = $ordererName;
        
        return $this;
    }
    /**
     * Get personalNo value
     * @return string|null
     */
    public function getPersonalNo(): ?string
    {
        return $this->personalNo;
    }
    /**
     * Set personalNo value
     * @param string $personalNo
     * @return \Pggns\MidocoApi\Order\StructType\BillingAttributeDTO
     */
    public function setPersonalNo(?string $personalNo = null): self
    {
        // validation for constraint: string
        if (!is_null($personalNo) && !is_string($personalNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personalNo, true), gettype($personalNo)), __LINE__);
        }
        $this->personalNo = $personalNo;
        
        return $this;
    }
    /**
     * Get projectNo value
     * @return string|null
     */
    public function getProjectNo(): ?string
    {
        return $this->projectNo;
    }
    /**
     * Set projectNo value
     * @param string $projectNo
     * @return \Pggns\MidocoApi\Order\StructType\BillingAttributeDTO
     */
    public function setProjectNo(?string $projectNo = null): self
    {
        // validation for constraint: string
        if (!is_null($projectNo) && !is_string($projectNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($projectNo, true), gettype($projectNo)), __LINE__);
        }
        $this->projectNo = $projectNo;
        
        return $this;
    }
    /**
     * Get remark1 value
     * @return string|null
     */
    public function getRemark1(): ?string
    {
        return $this->remark1;
    }
    /**
     * Set remark1 value
     * @param string $remark1
     * @return \Pggns\MidocoApi\Order\StructType\BillingAttributeDTO
     */
    public function setRemark1(?string $remark1 = null): self
    {
        // validation for constraint: string
        if (!is_null($remark1) && !is_string($remark1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark1, true), gettype($remark1)), __LINE__);
        }
        $this->remark1 = $remark1;
        
        return $this;
    }
    /**
     * Get remark2 value
     * @return string|null
     */
    public function getRemark2(): ?string
    {
        return $this->remark2;
    }
    /**
     * Set remark2 value
     * @param string $remark2
     * @return \Pggns\MidocoApi\Order\StructType\BillingAttributeDTO
     */
    public function setRemark2(?string $remark2 = null): self
    {
        // validation for constraint: string
        if (!is_null($remark2) && !is_string($remark2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark2, true), gettype($remark2)), __LINE__);
        }
        $this->remark2 = $remark2;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingAttributeDTO
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
     * Get travellerId value
     * @return int|null
     */
    public function getTravellerId(): ?int
    {
        return $this->travellerId;
    }
    /**
     * Set travellerId value
     * @param int $travellerId
     * @return \Pggns\MidocoApi\Order\StructType\BillingAttributeDTO
     */
    public function setTravellerId(?int $travellerId = null): self
    {
        // validation for constraint: int
        if (!is_null($travellerId) && !(is_int($travellerId) || ctype_digit($travellerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travellerId, true), gettype($travellerId)), __LINE__);
        }
        $this->travellerId = $travellerId;
        
        return $this;
    }
    /**
     * Get travellerName value
     * @return string|null
     */
    public function getTravellerName(): ?string
    {
        return $this->travellerName;
    }
    /**
     * Set travellerName value
     * @param string $travellerName
     * @return \Pggns\MidocoApi\Order\StructType\BillingAttributeDTO
     */
    public function setTravellerName(?string $travellerName = null): self
    {
        // validation for constraint: string
        if (!is_null($travellerName) && !is_string($travellerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travellerName, true), gettype($travellerName)), __LINE__);
        }
        $this->travellerName = $travellerName;
        
        return $this;
    }
}
