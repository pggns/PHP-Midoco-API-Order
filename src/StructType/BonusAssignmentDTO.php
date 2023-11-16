<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BonusAssignmentDTO StructType
 * @subpackage Structs
 */
class BonusAssignmentDTO extends AbstractStructBase
{
    /**
     * The baseAmountRule
     * @var float|null
     */
    protected ?float $baseAmountRule = null;
    /**
     * The bonusId
     * @var int|null
     */
    protected ?int $bonusId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The grantedBonus
     * @var float|null
     */
    protected ?float $grantedBonus = null;
    /**
     * The grantedRevenue
     * @var float|null
     */
    protected ?float $grantedRevenue = null;
    /**
     * The isStorno
     * @var bool|null
     */
    protected ?bool $isStorno = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The itemPrice
     * @var float|null
     */
    protected ?float $itemPrice = null;
    /**
     * The noOfPersons
     * @var int|null
     */
    protected ?int $noOfPersons = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The sellBonusId
     * @var int|null
     */
    protected ?int $sellBonusId = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for BonusAssignmentDTO
     * @uses BonusAssignmentDTO::setBaseAmountRule()
     * @uses BonusAssignmentDTO::setBonusId()
     * @uses BonusAssignmentDTO::setBookingId()
     * @uses BonusAssignmentDTO::setCreationDate()
     * @uses BonusAssignmentDTO::setDescription()
     * @uses BonusAssignmentDTO::setGrantedBonus()
     * @uses BonusAssignmentDTO::setGrantedRevenue()
     * @uses BonusAssignmentDTO::setIsStorno()
     * @uses BonusAssignmentDTO::setItemId()
     * @uses BonusAssignmentDTO::setItemPrice()
     * @uses BonusAssignmentDTO::setNoOfPersons()
     * @uses BonusAssignmentDTO::setOrderNo()
     * @uses BonusAssignmentDTO::setSellBonusId()
     * @uses BonusAssignmentDTO::setStartTravel()
     * @uses BonusAssignmentDTO::setSupplierId()
     * @uses BonusAssignmentDTO::setUnitName()
     * @uses BonusAssignmentDTO::setUserId()
     * @param float $baseAmountRule
     * @param int $bonusId
     * @param string $bookingId
     * @param string $creationDate
     * @param string $description
     * @param float $grantedBonus
     * @param float $grantedRevenue
     * @param bool $isStorno
     * @param int $itemId
     * @param float $itemPrice
     * @param int $noOfPersons
     * @param int $orderNo
     * @param int $sellBonusId
     * @param string $startTravel
     * @param string $supplierId
     * @param string $unitName
     * @param int $userId
     */
    public function __construct(?float $baseAmountRule = null, ?int $bonusId = null, ?string $bookingId = null, ?string $creationDate = null, ?string $description = null, ?float $grantedBonus = null, ?float $grantedRevenue = null, ?bool $isStorno = null, ?int $itemId = null, ?float $itemPrice = null, ?int $noOfPersons = null, ?int $orderNo = null, ?int $sellBonusId = null, ?string $startTravel = null, ?string $supplierId = null, ?string $unitName = null, ?int $userId = null)
    {
        $this
            ->setBaseAmountRule($baseAmountRule)
            ->setBonusId($bonusId)
            ->setBookingId($bookingId)
            ->setCreationDate($creationDate)
            ->setDescription($description)
            ->setGrantedBonus($grantedBonus)
            ->setGrantedRevenue($grantedRevenue)
            ->setIsStorno($isStorno)
            ->setItemId($itemId)
            ->setItemPrice($itemPrice)
            ->setNoOfPersons($noOfPersons)
            ->setOrderNo($orderNo)
            ->setSellBonusId($sellBonusId)
            ->setStartTravel($startTravel)
            ->setSupplierId($supplierId)
            ->setUnitName($unitName)
            ->setUserId($userId);
    }
    /**
     * Get baseAmountRule value
     * @return float|null
     */
    public function getBaseAmountRule(): ?float
    {
        return $this->baseAmountRule;
    }
    /**
     * Set baseAmountRule value
     * @param float $baseAmountRule
     * @return \Pggns\MidocoApi\Order\StructType\BonusAssignmentDTO
     */
    public function setBaseAmountRule(?float $baseAmountRule = null): self
    {
        // validation for constraint: float
        if (!is_null($baseAmountRule) && !(is_float($baseAmountRule) || is_numeric($baseAmountRule))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($baseAmountRule, true), gettype($baseAmountRule)), __LINE__);
        }
        $this->baseAmountRule = $baseAmountRule;
        
        return $this;
    }
    /**
     * Get bonusId value
     * @return int|null
     */
    public function getBonusId(): ?int
    {
        return $this->bonusId;
    }
    /**
     * Set bonusId value
     * @param int $bonusId
     * @return \Pggns\MidocoApi\Order\StructType\BonusAssignmentDTO
     */
    public function setBonusId(?int $bonusId = null): self
    {
        // validation for constraint: int
        if (!is_null($bonusId) && !(is_int($bonusId) || ctype_digit($bonusId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bonusId, true), gettype($bonusId)), __LINE__);
        }
        $this->bonusId = $bonusId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\BonusAssignmentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BonusAssignmentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BonusAssignmentDTO
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
     * Get grantedBonus value
     * @return float|null
     */
    public function getGrantedBonus(): ?float
    {
        return $this->grantedBonus;
    }
    /**
     * Set grantedBonus value
     * @param float $grantedBonus
     * @return \Pggns\MidocoApi\Order\StructType\BonusAssignmentDTO
     */
    public function setGrantedBonus(?float $grantedBonus = null): self
    {
        // validation for constraint: float
        if (!is_null($grantedBonus) && !(is_float($grantedBonus) || is_numeric($grantedBonus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grantedBonus, true), gettype($grantedBonus)), __LINE__);
        }
        $this->grantedBonus = $grantedBonus;
        
        return $this;
    }
    /**
     * Get grantedRevenue value
     * @return float|null
     */
    public function getGrantedRevenue(): ?float
    {
        return $this->grantedRevenue;
    }
    /**
     * Set grantedRevenue value
     * @param float $grantedRevenue
     * @return \Pggns\MidocoApi\Order\StructType\BonusAssignmentDTO
     */
    public function setGrantedRevenue(?float $grantedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($grantedRevenue) && !(is_float($grantedRevenue) || is_numeric($grantedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grantedRevenue, true), gettype($grantedRevenue)), __LINE__);
        }
        $this->grantedRevenue = $grantedRevenue;
        
        return $this;
    }
    /**
     * Get isStorno value
     * @return bool|null
     */
    public function getIsStorno(): ?bool
    {
        return $this->isStorno;
    }
    /**
     * Set isStorno value
     * @param bool $isStorno
     * @return \Pggns\MidocoApi\Order\StructType\BonusAssignmentDTO
     */
    public function setIsStorno(?bool $isStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isStorno) && !is_bool($isStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isStorno, true), gettype($isStorno)), __LINE__);
        }
        $this->isStorno = $isStorno;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BonusAssignmentDTO
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
     * Get itemPrice value
     * @return float|null
     */
    public function getItemPrice(): ?float
    {
        return $this->itemPrice;
    }
    /**
     * Set itemPrice value
     * @param float $itemPrice
     * @return \Pggns\MidocoApi\Order\StructType\BonusAssignmentDTO
     */
    public function setItemPrice(?float $itemPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($itemPrice) && !(is_float($itemPrice) || is_numeric($itemPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($itemPrice, true), gettype($itemPrice)), __LINE__);
        }
        $this->itemPrice = $itemPrice;
        
        return $this;
    }
    /**
     * Get noOfPersons value
     * @return int|null
     */
    public function getNoOfPersons(): ?int
    {
        return $this->noOfPersons;
    }
    /**
     * Set noOfPersons value
     * @param int $noOfPersons
     * @return \Pggns\MidocoApi\Order\StructType\BonusAssignmentDTO
     */
    public function setNoOfPersons(?int $noOfPersons = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfPersons) && !(is_int($noOfPersons) || ctype_digit($noOfPersons))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfPersons, true), gettype($noOfPersons)), __LINE__);
        }
        $this->noOfPersons = $noOfPersons;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BonusAssignmentDTO
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
     * Get sellBonusId value
     * @return int|null
     */
    public function getSellBonusId(): ?int
    {
        return $this->sellBonusId;
    }
    /**
     * Set sellBonusId value
     * @param int $sellBonusId
     * @return \Pggns\MidocoApi\Order\StructType\BonusAssignmentDTO
     */
    public function setSellBonusId(?int $sellBonusId = null): self
    {
        // validation for constraint: int
        if (!is_null($sellBonusId) && !(is_int($sellBonusId) || ctype_digit($sellBonusId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellBonusId, true), gettype($sellBonusId)), __LINE__);
        }
        $this->sellBonusId = $sellBonusId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BonusAssignmentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BonusAssignmentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BonusAssignmentDTO
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
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Order\StructType\BonusAssignmentDTO
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
}
