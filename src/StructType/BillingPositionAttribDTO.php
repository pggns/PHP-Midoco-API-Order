<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingPositionAttribDTO StructType
 * @subpackage Structs
 */
class BillingPositionAttribDTO extends AbstractStructBase
{
    /**
     * The approvalCode
     * @var string|null
     */
    protected ?string $approvalCode = null;
    /**
     * The changingUser
     * @var int|null
     */
    protected ?int $changingUser = null;
    /**
     * The costCentre
     * @var string|null
     */
    protected ?string $costCentre = null;
    /**
     * The customData
     * @var string|null
     */
    protected ?string $customData = null;
    /**
     * The customDbHeader
     * @var string|null
     */
    protected ?string $customDbHeader = null;
    /**
     * The customType
     * @var string|null
     */
    protected ?string $customType = null;
    /**
     * The orderNo
     * @var string|null
     */
    protected ?string $orderNo = null;
    /**
     * The personalNo
     * @var string|null
     */
    protected ?string $personalNo = null;
    /**
     * The positionId
     * @var int|null
     */
    protected ?int $positionId = null;
    /**
     * The projectNo
     * @var string|null
     */
    protected ?string $projectNo = null;
    /**
     * The secPrice
     * @var float|null
     */
    protected ?float $secPrice = null;
    /**
     * The sellingUser
     * @var int|null
     */
    protected ?int $sellingUser = null;
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
     * The voucherNo
     * @var string|null
     */
    protected ?string $voucherNo = null;
    /**
     * Constructor method for BillingPositionAttribDTO
     * @uses BillingPositionAttribDTO::setApprovalCode()
     * @uses BillingPositionAttribDTO::setChangingUser()
     * @uses BillingPositionAttribDTO::setCostCentre()
     * @uses BillingPositionAttribDTO::setCustomData()
     * @uses BillingPositionAttribDTO::setCustomDbHeader()
     * @uses BillingPositionAttribDTO::setCustomType()
     * @uses BillingPositionAttribDTO::setOrderNo()
     * @uses BillingPositionAttribDTO::setPersonalNo()
     * @uses BillingPositionAttribDTO::setPositionId()
     * @uses BillingPositionAttribDTO::setProjectNo()
     * @uses BillingPositionAttribDTO::setSecPrice()
     * @uses BillingPositionAttribDTO::setSellingUser()
     * @uses BillingPositionAttribDTO::setTravellerId()
     * @uses BillingPositionAttribDTO::setTravellerName()
     * @uses BillingPositionAttribDTO::setVoucherNo()
     * @param string $approvalCode
     * @param int $changingUser
     * @param string $costCentre
     * @param string $customData
     * @param string $customDbHeader
     * @param string $customType
     * @param string $orderNo
     * @param string $personalNo
     * @param int $positionId
     * @param string $projectNo
     * @param float $secPrice
     * @param int $sellingUser
     * @param int $travellerId
     * @param string $travellerName
     * @param string $voucherNo
     */
    public function __construct(?string $approvalCode = null, ?int $changingUser = null, ?string $costCentre = null, ?string $customData = null, ?string $customDbHeader = null, ?string $customType = null, ?string $orderNo = null, ?string $personalNo = null, ?int $positionId = null, ?string $projectNo = null, ?float $secPrice = null, ?int $sellingUser = null, ?int $travellerId = null, ?string $travellerName = null, ?string $voucherNo = null)
    {
        $this
            ->setApprovalCode($approvalCode)
            ->setChangingUser($changingUser)
            ->setCostCentre($costCentre)
            ->setCustomData($customData)
            ->setCustomDbHeader($customDbHeader)
            ->setCustomType($customType)
            ->setOrderNo($orderNo)
            ->setPersonalNo($personalNo)
            ->setPositionId($positionId)
            ->setProjectNo($projectNo)
            ->setSecPrice($secPrice)
            ->setSellingUser($sellingUser)
            ->setTravellerId($travellerId)
            ->setTravellerName($travellerName)
            ->setVoucherNo($voucherNo);
    }
    /**
     * Get approvalCode value
     * @return string|null
     */
    public function getApprovalCode(): ?string
    {
        return $this->approvalCode;
    }
    /**
     * Set approvalCode value
     * @param string $approvalCode
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionAttribDTO
     */
    public function setApprovalCode(?string $approvalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($approvalCode) && !is_string($approvalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approvalCode, true), gettype($approvalCode)), __LINE__);
        }
        $this->approvalCode = $approvalCode;
        
        return $this;
    }
    /**
     * Get changingUser value
     * @return int|null
     */
    public function getChangingUser(): ?int
    {
        return $this->changingUser;
    }
    /**
     * Set changingUser value
     * @param int $changingUser
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionAttribDTO
     */
    public function setChangingUser(?int $changingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($changingUser) && !(is_int($changingUser) || ctype_digit($changingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($changingUser, true), gettype($changingUser)), __LINE__);
        }
        $this->changingUser = $changingUser;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionAttribDTO
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
     * Get customData value
     * @return string|null
     */
    public function getCustomData(): ?string
    {
        return $this->customData;
    }
    /**
     * Set customData value
     * @param string $customData
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionAttribDTO
     */
    public function setCustomData(?string $customData = null): self
    {
        // validation for constraint: string
        if (!is_null($customData) && !is_string($customData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customData, true), gettype($customData)), __LINE__);
        }
        $this->customData = $customData;
        
        return $this;
    }
    /**
     * Get customDbHeader value
     * @return string|null
     */
    public function getCustomDbHeader(): ?string
    {
        return $this->customDbHeader;
    }
    /**
     * Set customDbHeader value
     * @param string $customDbHeader
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionAttribDTO
     */
    public function setCustomDbHeader(?string $customDbHeader = null): self
    {
        // validation for constraint: string
        if (!is_null($customDbHeader) && !is_string($customDbHeader)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customDbHeader, true), gettype($customDbHeader)), __LINE__);
        }
        $this->customDbHeader = $customDbHeader;
        
        return $this;
    }
    /**
     * Get customType value
     * @return string|null
     */
    public function getCustomType(): ?string
    {
        return $this->customType;
    }
    /**
     * Set customType value
     * @param string $customType
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionAttribDTO
     */
    public function setCustomType(?string $customType = null): self
    {
        // validation for constraint: string
        if (!is_null($customType) && !is_string($customType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customType, true), gettype($customType)), __LINE__);
        }
        $this->customType = $customType;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return string|null
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param string $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionAttribDTO
     */
    public function setOrderNo(?string $orderNo = null): self
    {
        // validation for constraint: string
        if (!is_null($orderNo) && !is_string($orderNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionAttribDTO
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
     * Get positionId value
     * @return int|null
     */
    public function getPositionId(): ?int
    {
        return $this->positionId;
    }
    /**
     * Set positionId value
     * @param int $positionId
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionAttribDTO
     */
    public function setPositionId(?int $positionId = null): self
    {
        // validation for constraint: int
        if (!is_null($positionId) && !(is_int($positionId) || ctype_digit($positionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionId, true), gettype($positionId)), __LINE__);
        }
        $this->positionId = $positionId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionAttribDTO
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
     * Get secPrice value
     * @return float|null
     */
    public function getSecPrice(): ?float
    {
        return $this->secPrice;
    }
    /**
     * Set secPrice value
     * @param float $secPrice
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionAttribDTO
     */
    public function setSecPrice(?float $secPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($secPrice) && !(is_float($secPrice) || is_numeric($secPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($secPrice, true), gettype($secPrice)), __LINE__);
        }
        $this->secPrice = $secPrice;
        
        return $this;
    }
    /**
     * Get sellingUser value
     * @return int|null
     */
    public function getSellingUser(): ?int
    {
        return $this->sellingUser;
    }
    /**
     * Set sellingUser value
     * @param int $sellingUser
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionAttribDTO
     */
    public function setSellingUser(?int $sellingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($sellingUser) && !(is_int($sellingUser) || ctype_digit($sellingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellingUser, true), gettype($sellingUser)), __LINE__);
        }
        $this->sellingUser = $sellingUser;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionAttribDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionAttribDTO
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
    /**
     * Get voucherNo value
     * @return string|null
     */
    public function getVoucherNo(): ?string
    {
        return $this->voucherNo;
    }
    /**
     * Set voucherNo value
     * @param string $voucherNo
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionAttribDTO
     */
    public function setVoucherNo(?string $voucherNo = null): self
    {
        // validation for constraint: string
        if (!is_null($voucherNo) && !is_string($voucherNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucherNo, true), gettype($voucherNo)), __LINE__);
        }
        $this->voucherNo = $voucherNo;
        
        return $this;
    }
}
