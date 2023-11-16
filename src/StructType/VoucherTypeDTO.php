<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoucherTypeDTO StructType
 * @subpackage Structs
 */
class VoucherTypeDTO extends AbstractStructBase
{
    /**
     * The adapterId
     * @var string|null
     */
    protected ?string $adapterId = null;
    /**
     * The allowPartialUse
     * @var bool|null
     */
    protected ?bool $allowPartialUse = null;
    /**
     * The allowedUnitsForRedeem
     * @var string|null
     */
    protected ?string $allowedUnitsForRedeem = null;
    /**
     * The allowedUnitsForSell
     * @var string|null
     */
    protected ?string $allowedUnitsForSell = null;
    /**
     * The assignNoFromSequence
     * @var bool|null
     */
    protected ?bool $assignNoFromSequence = null;
    /**
     * The assignedAccountNoVat
     * @var string|null
     */
    protected ?string $assignedAccountNoVat = null;
    /**
     * The assignedAccountNoVatPart
     * @var float|null
     */
    protected ?float $assignedAccountNoVatPart = null;
    /**
     * The assignedAccountVat
     * @var string|null
     */
    protected ?string $assignedAccountVat = null;
    /**
     * The assignedAccountVatPart
     * @var float|null
     */
    protected ?float $assignedAccountVatPart = null;
    /**
     * The assignedSupplierIds
     * @var string|null
     */
    protected ?string $assignedSupplierIds = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The forbidRedeemUnknownVoucher
     * @var bool|null
     */
    protected ?bool $forbidRedeemUnknownVoucher = null;
    /**
     * The forceNumber
     * @var bool|null
     */
    protected ?bool $forceNumber = null;
    /**
     * The isEnabled
     * @var bool|null
     */
    protected ?bool $isEnabled = null;
    /**
     * The modifyDate
     * @var string|null
     */
    protected ?string $modifyDate = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The prefixCode
     * @var string|null
     */
    protected ?string $prefixCode = null;
    /**
     * The securityCode
     * @var bool|null
     */
    protected ?bool $securityCode = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * The validDays
     * @var int|null
     */
    protected ?int $validDays = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * Constructor method for VoucherTypeDTO
     * @uses VoucherTypeDTO::setAdapterId()
     * @uses VoucherTypeDTO::setAllowPartialUse()
     * @uses VoucherTypeDTO::setAllowedUnitsForRedeem()
     * @uses VoucherTypeDTO::setAllowedUnitsForSell()
     * @uses VoucherTypeDTO::setAssignNoFromSequence()
     * @uses VoucherTypeDTO::setAssignedAccountNoVat()
     * @uses VoucherTypeDTO::setAssignedAccountNoVatPart()
     * @uses VoucherTypeDTO::setAssignedAccountVat()
     * @uses VoucherTypeDTO::setAssignedAccountVatPart()
     * @uses VoucherTypeDTO::setAssignedSupplierIds()
     * @uses VoucherTypeDTO::setCreationDate()
     * @uses VoucherTypeDTO::setCreationUser()
     * @uses VoucherTypeDTO::setDescription()
     * @uses VoucherTypeDTO::setForbidRedeemUnknownVoucher()
     * @uses VoucherTypeDTO::setForceNumber()
     * @uses VoucherTypeDTO::setIsEnabled()
     * @uses VoucherTypeDTO::setModifyDate()
     * @uses VoucherTypeDTO::setModifyUser()
     * @uses VoucherTypeDTO::setPrefixCode()
     * @uses VoucherTypeDTO::setSecurityCode()
     * @uses VoucherTypeDTO::setTypeId()
     * @uses VoucherTypeDTO::setValidDays()
     * @uses VoucherTypeDTO::setValidFrom()
     * @uses VoucherTypeDTO::setValidTo()
     * @param string $adapterId
     * @param bool $allowPartialUse
     * @param string $allowedUnitsForRedeem
     * @param string $allowedUnitsForSell
     * @param bool $assignNoFromSequence
     * @param string $assignedAccountNoVat
     * @param float $assignedAccountNoVatPart
     * @param string $assignedAccountVat
     * @param float $assignedAccountVatPart
     * @param string $assignedSupplierIds
     * @param string $creationDate
     * @param int $creationUser
     * @param string $description
     * @param bool $forbidRedeemUnknownVoucher
     * @param bool $forceNumber
     * @param bool $isEnabled
     * @param string $modifyDate
     * @param int $modifyUser
     * @param string $prefixCode
     * @param bool $securityCode
     * @param string $typeId
     * @param int $validDays
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct(?string $adapterId = null, ?bool $allowPartialUse = null, ?string $allowedUnitsForRedeem = null, ?string $allowedUnitsForSell = null, ?bool $assignNoFromSequence = null, ?string $assignedAccountNoVat = null, ?float $assignedAccountNoVatPart = null, ?string $assignedAccountVat = null, ?float $assignedAccountVatPart = null, ?string $assignedSupplierIds = null, ?string $creationDate = null, ?int $creationUser = null, ?string $description = null, ?bool $forbidRedeemUnknownVoucher = null, ?bool $forceNumber = null, ?bool $isEnabled = null, ?string $modifyDate = null, ?int $modifyUser = null, ?string $prefixCode = null, ?bool $securityCode = null, ?string $typeId = null, ?int $validDays = null, ?string $validFrom = null, ?string $validTo = null)
    {
        $this
            ->setAdapterId($adapterId)
            ->setAllowPartialUse($allowPartialUse)
            ->setAllowedUnitsForRedeem($allowedUnitsForRedeem)
            ->setAllowedUnitsForSell($allowedUnitsForSell)
            ->setAssignNoFromSequence($assignNoFromSequence)
            ->setAssignedAccountNoVat($assignedAccountNoVat)
            ->setAssignedAccountNoVatPart($assignedAccountNoVatPart)
            ->setAssignedAccountVat($assignedAccountVat)
            ->setAssignedAccountVatPart($assignedAccountVatPart)
            ->setAssignedSupplierIds($assignedSupplierIds)
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setDescription($description)
            ->setForbidRedeemUnknownVoucher($forbidRedeemUnknownVoucher)
            ->setForceNumber($forceNumber)
            ->setIsEnabled($isEnabled)
            ->setModifyDate($modifyDate)
            ->setModifyUser($modifyUser)
            ->setPrefixCode($prefixCode)
            ->setSecurityCode($securityCode)
            ->setTypeId($typeId)
            ->setValidDays($validDays)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
    }
    /**
     * Get adapterId value
     * @return string|null
     */
    public function getAdapterId(): ?string
    {
        return $this->adapterId;
    }
    /**
     * Set adapterId value
     * @param string $adapterId
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
     */
    public function setAdapterId(?string $adapterId = null): self
    {
        // validation for constraint: string
        if (!is_null($adapterId) && !is_string($adapterId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adapterId, true), gettype($adapterId)), __LINE__);
        }
        $this->adapterId = $adapterId;
        
        return $this;
    }
    /**
     * Get allowPartialUse value
     * @return bool|null
     */
    public function getAllowPartialUse(): ?bool
    {
        return $this->allowPartialUse;
    }
    /**
     * Set allowPartialUse value
     * @param bool $allowPartialUse
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
     */
    public function setAllowPartialUse(?bool $allowPartialUse = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allowPartialUse) && !is_bool($allowPartialUse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowPartialUse, true), gettype($allowPartialUse)), __LINE__);
        }
        $this->allowPartialUse = $allowPartialUse;
        
        return $this;
    }
    /**
     * Get allowedUnitsForRedeem value
     * @return string|null
     */
    public function getAllowedUnitsForRedeem(): ?string
    {
        return $this->allowedUnitsForRedeem;
    }
    /**
     * Set allowedUnitsForRedeem value
     * @param string $allowedUnitsForRedeem
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
     */
    public function setAllowedUnitsForRedeem(?string $allowedUnitsForRedeem = null): self
    {
        // validation for constraint: string
        if (!is_null($allowedUnitsForRedeem) && !is_string($allowedUnitsForRedeem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($allowedUnitsForRedeem, true), gettype($allowedUnitsForRedeem)), __LINE__);
        }
        $this->allowedUnitsForRedeem = $allowedUnitsForRedeem;
        
        return $this;
    }
    /**
     * Get allowedUnitsForSell value
     * @return string|null
     */
    public function getAllowedUnitsForSell(): ?string
    {
        return $this->allowedUnitsForSell;
    }
    /**
     * Set allowedUnitsForSell value
     * @param string $allowedUnitsForSell
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
     */
    public function setAllowedUnitsForSell(?string $allowedUnitsForSell = null): self
    {
        // validation for constraint: string
        if (!is_null($allowedUnitsForSell) && !is_string($allowedUnitsForSell)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($allowedUnitsForSell, true), gettype($allowedUnitsForSell)), __LINE__);
        }
        $this->allowedUnitsForSell = $allowedUnitsForSell;
        
        return $this;
    }
    /**
     * Get assignNoFromSequence value
     * @return bool|null
     */
    public function getAssignNoFromSequence(): ?bool
    {
        return $this->assignNoFromSequence;
    }
    /**
     * Set assignNoFromSequence value
     * @param bool $assignNoFromSequence
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
     */
    public function setAssignNoFromSequence(?bool $assignNoFromSequence = null): self
    {
        // validation for constraint: boolean
        if (!is_null($assignNoFromSequence) && !is_bool($assignNoFromSequence)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($assignNoFromSequence, true), gettype($assignNoFromSequence)), __LINE__);
        }
        $this->assignNoFromSequence = $assignNoFromSequence;
        
        return $this;
    }
    /**
     * Get assignedAccountNoVat value
     * @return string|null
     */
    public function getAssignedAccountNoVat(): ?string
    {
        return $this->assignedAccountNoVat;
    }
    /**
     * Set assignedAccountNoVat value
     * @param string $assignedAccountNoVat
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
     */
    public function setAssignedAccountNoVat(?string $assignedAccountNoVat = null): self
    {
        // validation for constraint: string
        if (!is_null($assignedAccountNoVat) && !is_string($assignedAccountNoVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignedAccountNoVat, true), gettype($assignedAccountNoVat)), __LINE__);
        }
        $this->assignedAccountNoVat = $assignedAccountNoVat;
        
        return $this;
    }
    /**
     * Get assignedAccountNoVatPart value
     * @return float|null
     */
    public function getAssignedAccountNoVatPart(): ?float
    {
        return $this->assignedAccountNoVatPart;
    }
    /**
     * Set assignedAccountNoVatPart value
     * @param float $assignedAccountNoVatPart
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
     */
    public function setAssignedAccountNoVatPart(?float $assignedAccountNoVatPart = null): self
    {
        // validation for constraint: float
        if (!is_null($assignedAccountNoVatPart) && !(is_float($assignedAccountNoVatPart) || is_numeric($assignedAccountNoVatPart))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($assignedAccountNoVatPart, true), gettype($assignedAccountNoVatPart)), __LINE__);
        }
        $this->assignedAccountNoVatPart = $assignedAccountNoVatPart;
        
        return $this;
    }
    /**
     * Get assignedAccountVat value
     * @return string|null
     */
    public function getAssignedAccountVat(): ?string
    {
        return $this->assignedAccountVat;
    }
    /**
     * Set assignedAccountVat value
     * @param string $assignedAccountVat
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
     */
    public function setAssignedAccountVat(?string $assignedAccountVat = null): self
    {
        // validation for constraint: string
        if (!is_null($assignedAccountVat) && !is_string($assignedAccountVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignedAccountVat, true), gettype($assignedAccountVat)), __LINE__);
        }
        $this->assignedAccountVat = $assignedAccountVat;
        
        return $this;
    }
    /**
     * Get assignedAccountVatPart value
     * @return float|null
     */
    public function getAssignedAccountVatPart(): ?float
    {
        return $this->assignedAccountVatPart;
    }
    /**
     * Set assignedAccountVatPart value
     * @param float $assignedAccountVatPart
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
     */
    public function setAssignedAccountVatPart(?float $assignedAccountVatPart = null): self
    {
        // validation for constraint: float
        if (!is_null($assignedAccountVatPart) && !(is_float($assignedAccountVatPart) || is_numeric($assignedAccountVatPart))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($assignedAccountVatPart, true), gettype($assignedAccountVatPart)), __LINE__);
        }
        $this->assignedAccountVatPart = $assignedAccountVatPart;
        
        return $this;
    }
    /**
     * Get assignedSupplierIds value
     * @return string|null
     */
    public function getAssignedSupplierIds(): ?string
    {
        return $this->assignedSupplierIds;
    }
    /**
     * Set assignedSupplierIds value
     * @param string $assignedSupplierIds
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
     */
    public function setAssignedSupplierIds(?string $assignedSupplierIds = null): self
    {
        // validation for constraint: string
        if (!is_null($assignedSupplierIds) && !is_string($assignedSupplierIds)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignedSupplierIds, true), gettype($assignedSupplierIds)), __LINE__);
        }
        $this->assignedSupplierIds = $assignedSupplierIds;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
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
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
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
     * Get forbidRedeemUnknownVoucher value
     * @return bool|null
     */
    public function getForbidRedeemUnknownVoucher(): ?bool
    {
        return $this->forbidRedeemUnknownVoucher;
    }
    /**
     * Set forbidRedeemUnknownVoucher value
     * @param bool $forbidRedeemUnknownVoucher
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
     */
    public function setForbidRedeemUnknownVoucher(?bool $forbidRedeemUnknownVoucher = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forbidRedeemUnknownVoucher) && !is_bool($forbidRedeemUnknownVoucher)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forbidRedeemUnknownVoucher, true), gettype($forbidRedeemUnknownVoucher)), __LINE__);
        }
        $this->forbidRedeemUnknownVoucher = $forbidRedeemUnknownVoucher;
        
        return $this;
    }
    /**
     * Get forceNumber value
     * @return bool|null
     */
    public function getForceNumber(): ?bool
    {
        return $this->forceNumber;
    }
    /**
     * Set forceNumber value
     * @param bool $forceNumber
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
     */
    public function setForceNumber(?bool $forceNumber = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forceNumber) && !is_bool($forceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forceNumber, true), gettype($forceNumber)), __LINE__);
        }
        $this->forceNumber = $forceNumber;
        
        return $this;
    }
    /**
     * Get isEnabled value
     * @return bool|null
     */
    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }
    /**
     * Set isEnabled value
     * @param bool $isEnabled
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
     */
    public function setIsEnabled(?bool $isEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isEnabled) && !is_bool($isEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEnabled, true), gettype($isEnabled)), __LINE__);
        }
        $this->isEnabled = $isEnabled;
        
        return $this;
    }
    /**
     * Get modifyDate value
     * @return string|null
     */
    public function getModifyDate(): ?string
    {
        return $this->modifyDate;
    }
    /**
     * Set modifyDate value
     * @param string $modifyDate
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
     */
    public function setModifyDate(?string $modifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyDate, true), gettype($modifyDate)), __LINE__);
        }
        $this->modifyDate = $modifyDate;
        
        return $this;
    }
    /**
     * Get modifyUser value
     * @return int|null
     */
    public function getModifyUser(): ?int
    {
        return $this->modifyUser;
    }
    /**
     * Set modifyUser value
     * @param int $modifyUser
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
     */
    public function setModifyUser(?int $modifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modifyUser) && !(is_int($modifyUser) || ctype_digit($modifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifyUser, true), gettype($modifyUser)), __LINE__);
        }
        $this->modifyUser = $modifyUser;
        
        return $this;
    }
    /**
     * Get prefixCode value
     * @return string|null
     */
    public function getPrefixCode(): ?string
    {
        return $this->prefixCode;
    }
    /**
     * Set prefixCode value
     * @param string $prefixCode
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
     */
    public function setPrefixCode(?string $prefixCode = null): self
    {
        // validation for constraint: string
        if (!is_null($prefixCode) && !is_string($prefixCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prefixCode, true), gettype($prefixCode)), __LINE__);
        }
        $this->prefixCode = $prefixCode;
        
        return $this;
    }
    /**
     * Get securityCode value
     * @return bool|null
     */
    public function getSecurityCode(): ?bool
    {
        return $this->securityCode;
    }
    /**
     * Set securityCode value
     * @param bool $securityCode
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
     */
    public function setSecurityCode(?bool $securityCode = null): self
    {
        // validation for constraint: boolean
        if (!is_null($securityCode) && !is_bool($securityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($securityCode, true), gettype($securityCode)), __LINE__);
        }
        $this->securityCode = $securityCode;
        
        return $this;
    }
    /**
     * Get typeId value
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
     */
    public function setTypeId(?string $typeId = null): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
    /**
     * Get validDays value
     * @return int|null
     */
    public function getValidDays(): ?int
    {
        return $this->validDays;
    }
    /**
     * Set validDays value
     * @param int $validDays
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
     */
    public function setValidDays(?int $validDays = null): self
    {
        // validation for constraint: int
        if (!is_null($validDays) && !(is_int($validDays) || ctype_digit($validDays))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($validDays, true), gettype($validDays)), __LINE__);
        }
        $this->validDays = $validDays;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
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
     * Get validTo value
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo;
    }
    /**
     * Set validTo value
     * @param string $validTo
     * @return \Pggns\MidocoApi\Order\StructType\VoucherTypeDTO
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        $this->validTo = $validTo;
        
        return $this;
    }
}
