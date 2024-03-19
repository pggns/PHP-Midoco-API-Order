<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalcitemDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CalcitemDTO extends AbstractStructBase
{
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The code
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The discountOfPtrItemId
     * @var int|null
     */
    protected ?int $discountOfPtrItemId = null;
    /**
     * The feeAssignId
     * @var int|null
     */
    protected ?int $feeAssignId = null;
    /**
     * The feeCategory
     * @var string|null
     */
    protected ?string $feeCategory = null;
    /**
     * The feePercent
     * @var float|null
     */
    protected ?float $feePercent = null;
    /**
     * The isAgencyFee
     * @var bool|null
     */
    protected ?bool $isAgencyFee = null;
    /**
     * The isFeeGroup
     * @var bool|null
     */
    protected ?bool $isFeeGroup = null;
    /**
     * The isPercentValueRounded
     * @var bool|null
     */
    protected ?bool $isPercentValueRounded = null;
    /**
     * The isReverseCharge
     * @var bool|null
     */
    protected ?bool $isReverseCharge = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The passengerAssignment
     * @var int|null
     */
    protected ?int $passengerAssignment = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * Constructor method for CalcitemDTO
     * @uses CalcitemDTO::setBookingId()
     * @uses CalcitemDTO::setCode()
     * @uses CalcitemDTO::setDescription()
     * @uses CalcitemDTO::setDiscountOfPtrItemId()
     * @uses CalcitemDTO::setFeeAssignId()
     * @uses CalcitemDTO::setFeeCategory()
     * @uses CalcitemDTO::setFeePercent()
     * @uses CalcitemDTO::setIsAgencyFee()
     * @uses CalcitemDTO::setIsFeeGroup()
     * @uses CalcitemDTO::setIsPercentValueRounded()
     * @uses CalcitemDTO::setIsReverseCharge()
     * @uses CalcitemDTO::setItemId()
     * @uses CalcitemDTO::setPassengerAssignment()
     * @uses CalcitemDTO::setStatus()
     * @uses CalcitemDTO::setSupplierId()
     * @param string $bookingId
     * @param string $code
     * @param string $description
     * @param int $discountOfPtrItemId
     * @param int $feeAssignId
     * @param string $feeCategory
     * @param float $feePercent
     * @param bool $isAgencyFee
     * @param bool $isFeeGroup
     * @param bool $isPercentValueRounded
     * @param bool $isReverseCharge
     * @param int $itemId
     * @param int $passengerAssignment
     * @param string $status
     * @param string $supplierId
     */
    public function __construct(?string $bookingId = null, ?string $code = null, ?string $description = null, ?int $discountOfPtrItemId = null, ?int $feeAssignId = null, ?string $feeCategory = null, ?float $feePercent = null, ?bool $isAgencyFee = null, ?bool $isFeeGroup = null, ?bool $isPercentValueRounded = null, ?bool $isReverseCharge = null, ?int $itemId = null, ?int $passengerAssignment = null, ?string $status = null, ?string $supplierId = null)
    {
        $this
            ->setBookingId($bookingId)
            ->setCode($code)
            ->setDescription($description)
            ->setDiscountOfPtrItemId($discountOfPtrItemId)
            ->setFeeAssignId($feeAssignId)
            ->setFeeCategory($feeCategory)
            ->setFeePercent($feePercent)
            ->setIsAgencyFee($isAgencyFee)
            ->setIsFeeGroup($isFeeGroup)
            ->setIsPercentValueRounded($isPercentValueRounded)
            ->setIsReverseCharge($isReverseCharge)
            ->setItemId($itemId)
            ->setPassengerAssignment($passengerAssignment)
            ->setStatus($status)
            ->setSupplierId($supplierId);
    }
    /**
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Order\StructType\CalcitemDTO
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Pggns\MidocoApi\Order\StructType\CalcitemDTO
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\CalcitemDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get discountOfPtrItemId value
     * @return int|null
     */
    public function getDiscountOfPtrItemId(): ?int
    {
        return $this->discountOfPtrItemId;
    }
    /**
     * Set discountOfPtrItemId value
     * @param int $discountOfPtrItemId
     * @return \Pggns\MidocoApi\Order\StructType\CalcitemDTO
     */
    public function setDiscountOfPtrItemId(?int $discountOfPtrItemId = null): self
    {
        // validation for constraint: int
        if (!is_null($discountOfPtrItemId) && !(is_int($discountOfPtrItemId) || ctype_digit($discountOfPtrItemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($discountOfPtrItemId, true), gettype($discountOfPtrItemId)), __LINE__);
        }
        $this->discountOfPtrItemId = $discountOfPtrItemId;
        
        return $this;
    }
    /**
     * Get feeAssignId value
     * @return int|null
     */
    public function getFeeAssignId(): ?int
    {
        return $this->feeAssignId;
    }
    /**
     * Set feeAssignId value
     * @param int $feeAssignId
     * @return \Pggns\MidocoApi\Order\StructType\CalcitemDTO
     */
    public function setFeeAssignId(?int $feeAssignId = null): self
    {
        // validation for constraint: int
        if (!is_null($feeAssignId) && !(is_int($feeAssignId) || ctype_digit($feeAssignId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feeAssignId, true), gettype($feeAssignId)), __LINE__);
        }
        $this->feeAssignId = $feeAssignId;
        
        return $this;
    }
    /**
     * Get feeCategory value
     * @return string|null
     */
    public function getFeeCategory(): ?string
    {
        return $this->feeCategory;
    }
    /**
     * Set feeCategory value
     * @param string $feeCategory
     * @return \Pggns\MidocoApi\Order\StructType\CalcitemDTO
     */
    public function setFeeCategory(?string $feeCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($feeCategory) && !is_string($feeCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeCategory, true), gettype($feeCategory)), __LINE__);
        }
        $this->feeCategory = $feeCategory;
        
        return $this;
    }
    /**
     * Get feePercent value
     * @return float|null
     */
    public function getFeePercent(): ?float
    {
        return $this->feePercent;
    }
    /**
     * Set feePercent value
     * @param float $feePercent
     * @return \Pggns\MidocoApi\Order\StructType\CalcitemDTO
     */
    public function setFeePercent(?float $feePercent = null): self
    {
        // validation for constraint: float
        if (!is_null($feePercent) && !(is_float($feePercent) || is_numeric($feePercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feePercent, true), gettype($feePercent)), __LINE__);
        }
        $this->feePercent = $feePercent;
        
        return $this;
    }
    /**
     * Get isAgencyFee value
     * @return bool|null
     */
    public function getIsAgencyFee(): ?bool
    {
        return $this->isAgencyFee;
    }
    /**
     * Set isAgencyFee value
     * @param bool $isAgencyFee
     * @return \Pggns\MidocoApi\Order\StructType\CalcitemDTO
     */
    public function setIsAgencyFee(?bool $isAgencyFee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAgencyFee) && !is_bool($isAgencyFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAgencyFee, true), gettype($isAgencyFee)), __LINE__);
        }
        $this->isAgencyFee = $isAgencyFee;
        
        return $this;
    }
    /**
     * Get isFeeGroup value
     * @return bool|null
     */
    public function getIsFeeGroup(): ?bool
    {
        return $this->isFeeGroup;
    }
    /**
     * Set isFeeGroup value
     * @param bool $isFeeGroup
     * @return \Pggns\MidocoApi\Order\StructType\CalcitemDTO
     */
    public function setIsFeeGroup(?bool $isFeeGroup = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFeeGroup) && !is_bool($isFeeGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFeeGroup, true), gettype($isFeeGroup)), __LINE__);
        }
        $this->isFeeGroup = $isFeeGroup;
        
        return $this;
    }
    /**
     * Get isPercentValueRounded value
     * @return bool|null
     */
    public function getIsPercentValueRounded(): ?bool
    {
        return $this->isPercentValueRounded;
    }
    /**
     * Set isPercentValueRounded value
     * @param bool $isPercentValueRounded
     * @return \Pggns\MidocoApi\Order\StructType\CalcitemDTO
     */
    public function setIsPercentValueRounded(?bool $isPercentValueRounded = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPercentValueRounded) && !is_bool($isPercentValueRounded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPercentValueRounded, true), gettype($isPercentValueRounded)), __LINE__);
        }
        $this->isPercentValueRounded = $isPercentValueRounded;
        
        return $this;
    }
    /**
     * Get isReverseCharge value
     * @return bool|null
     */
    public function getIsReverseCharge(): ?bool
    {
        return $this->isReverseCharge;
    }
    /**
     * Set isReverseCharge value
     * @param bool $isReverseCharge
     * @return \Pggns\MidocoApi\Order\StructType\CalcitemDTO
     */
    public function setIsReverseCharge(?bool $isReverseCharge = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isReverseCharge) && !is_bool($isReverseCharge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReverseCharge, true), gettype($isReverseCharge)), __LINE__);
        }
        $this->isReverseCharge = $isReverseCharge;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\CalcitemDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get passengerAssignment value
     * @return int|null
     */
    public function getPassengerAssignment(): ?int
    {
        return $this->passengerAssignment;
    }
    /**
     * Set passengerAssignment value
     * @param int $passengerAssignment
     * @return \Pggns\MidocoApi\Order\StructType\CalcitemDTO
     */
    public function setPassengerAssignment(?int $passengerAssignment = null): self
    {
        // validation for constraint: int
        if (!is_null($passengerAssignment) && !(is_int($passengerAssignment) || ctype_digit($passengerAssignment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($passengerAssignment, true), gettype($passengerAssignment)), __LINE__);
        }
        $this->passengerAssignment = $passengerAssignment;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\CalcitemDTO
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CalcitemDTO
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
}
