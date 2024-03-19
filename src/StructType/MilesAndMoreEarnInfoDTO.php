<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MilesAndMoreEarnInfoDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MilesAndMoreEarnInfoDTO extends AbstractStructBase
{
    /**
     * The amountEligibleForPromotion
     * @var float|null
     */
    protected ?float $amountEligibleForPromotion = null;
    /**
     * The cardNo
     * @var string|null
     */
    protected ?string $cardNo = null;
    /**
     * The creationTime
     * @var string|null
     */
    protected ?string $creationTime = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The crmCustomerId
     * @var int|null
     */
    protected ?int $crmCustomerId = null;
    /**
     * The isAuto
     * @var bool|null
     */
    protected ?bool $isAuto = null;
    /**
     * The isEligible
     * @var bool|null
     */
    protected ?bool $isEligible = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The milesWanted
     * @var bool|null
     */
    protected ?bool $milesWanted = null;
    /**
     * The modifyTime
     * @var string|null
     */
    protected ?string $modifyTime = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The popupShown
     * @var string|null
     */
    protected ?string $popupShown = null;
    /**
     * The promotionId
     * @var int|null
     */
    protected ?int $promotionId = null;
    /**
     * The promotionUnit
     * @var string|null
     */
    protected ?string $promotionUnit = null;
    /**
     * Constructor method for MilesAndMoreEarnInfoDTO
     * @uses MilesAndMoreEarnInfoDTO::setAmountEligibleForPromotion()
     * @uses MilesAndMoreEarnInfoDTO::setCardNo()
     * @uses MilesAndMoreEarnInfoDTO::setCreationTime()
     * @uses MilesAndMoreEarnInfoDTO::setCreationUser()
     * @uses MilesAndMoreEarnInfoDTO::setCrmCustomerId()
     * @uses MilesAndMoreEarnInfoDTO::setIsAuto()
     * @uses MilesAndMoreEarnInfoDTO::setIsEligible()
     * @uses MilesAndMoreEarnInfoDTO::setItemId()
     * @uses MilesAndMoreEarnInfoDTO::setMilesWanted()
     * @uses MilesAndMoreEarnInfoDTO::setModifyTime()
     * @uses MilesAndMoreEarnInfoDTO::setModifyUser()
     * @uses MilesAndMoreEarnInfoDTO::setPopupShown()
     * @uses MilesAndMoreEarnInfoDTO::setPromotionId()
     * @uses MilesAndMoreEarnInfoDTO::setPromotionUnit()
     * @param float $amountEligibleForPromotion
     * @param string $cardNo
     * @param string $creationTime
     * @param int $creationUser
     * @param int $crmCustomerId
     * @param bool $isAuto
     * @param bool $isEligible
     * @param int $itemId
     * @param bool $milesWanted
     * @param string $modifyTime
     * @param int $modifyUser
     * @param string $popupShown
     * @param int $promotionId
     * @param string $promotionUnit
     */
    public function __construct(?float $amountEligibleForPromotion = null, ?string $cardNo = null, ?string $creationTime = null, ?int $creationUser = null, ?int $crmCustomerId = null, ?bool $isAuto = null, ?bool $isEligible = null, ?int $itemId = null, ?bool $milesWanted = null, ?string $modifyTime = null, ?int $modifyUser = null, ?string $popupShown = null, ?int $promotionId = null, ?string $promotionUnit = null)
    {
        $this
            ->setAmountEligibleForPromotion($amountEligibleForPromotion)
            ->setCardNo($cardNo)
            ->setCreationTime($creationTime)
            ->setCreationUser($creationUser)
            ->setCrmCustomerId($crmCustomerId)
            ->setIsAuto($isAuto)
            ->setIsEligible($isEligible)
            ->setItemId($itemId)
            ->setMilesWanted($milesWanted)
            ->setModifyTime($modifyTime)
            ->setModifyUser($modifyUser)
            ->setPopupShown($popupShown)
            ->setPromotionId($promotionId)
            ->setPromotionUnit($promotionUnit);
    }
    /**
     * Get amountEligibleForPromotion value
     * @return float|null
     */
    public function getAmountEligibleForPromotion(): ?float
    {
        return $this->amountEligibleForPromotion;
    }
    /**
     * Set amountEligibleForPromotion value
     * @param float $amountEligibleForPromotion
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnInfoDTO
     */
    public function setAmountEligibleForPromotion(?float $amountEligibleForPromotion = null): self
    {
        // validation for constraint: float
        if (!is_null($amountEligibleForPromotion) && !(is_float($amountEligibleForPromotion) || is_numeric($amountEligibleForPromotion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountEligibleForPromotion, true), gettype($amountEligibleForPromotion)), __LINE__);
        }
        $this->amountEligibleForPromotion = $amountEligibleForPromotion;
        
        return $this;
    }
    /**
     * Get cardNo value
     * @return string|null
     */
    public function getCardNo(): ?string
    {
        return $this->cardNo;
    }
    /**
     * Set cardNo value
     * @param string $cardNo
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnInfoDTO
     */
    public function setCardNo(?string $cardNo = null): self
    {
        // validation for constraint: string
        if (!is_null($cardNo) && !is_string($cardNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardNo, true), gettype($cardNo)), __LINE__);
        }
        $this->cardNo = $cardNo;
        
        return $this;
    }
    /**
     * Get creationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * Set creationTime value
     * @param string $creationTime
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnInfoDTO
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->creationTime = $creationTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnInfoDTO
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
     * Get crmCustomerId value
     * @return int|null
     */
    public function getCrmCustomerId(): ?int
    {
        return $this->crmCustomerId;
    }
    /**
     * Set crmCustomerId value
     * @param int $crmCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnInfoDTO
     */
    public function setCrmCustomerId(?int $crmCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($crmCustomerId) && !(is_int($crmCustomerId) || ctype_digit($crmCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($crmCustomerId, true), gettype($crmCustomerId)), __LINE__);
        }
        $this->crmCustomerId = $crmCustomerId;
        
        return $this;
    }
    /**
     * Get isAuto value
     * @return bool|null
     */
    public function getIsAuto(): ?bool
    {
        return $this->isAuto;
    }
    /**
     * Set isAuto value
     * @param bool $isAuto
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnInfoDTO
     */
    public function setIsAuto(?bool $isAuto = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAuto) && !is_bool($isAuto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAuto, true), gettype($isAuto)), __LINE__);
        }
        $this->isAuto = $isAuto;
        
        return $this;
    }
    /**
     * Get isEligible value
     * @return bool|null
     */
    public function getIsEligible(): ?bool
    {
        return $this->isEligible;
    }
    /**
     * Set isEligible value
     * @param bool $isEligible
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnInfoDTO
     */
    public function setIsEligible(?bool $isEligible = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isEligible) && !is_bool($isEligible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEligible, true), gettype($isEligible)), __LINE__);
        }
        $this->isEligible = $isEligible;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnInfoDTO
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
     * Get milesWanted value
     * @return bool|null
     */
    public function getMilesWanted(): ?bool
    {
        return $this->milesWanted;
    }
    /**
     * Set milesWanted value
     * @param bool $milesWanted
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnInfoDTO
     */
    public function setMilesWanted(?bool $milesWanted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($milesWanted) && !is_bool($milesWanted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($milesWanted, true), gettype($milesWanted)), __LINE__);
        }
        $this->milesWanted = $milesWanted;
        
        return $this;
    }
    /**
     * Get modifyTime value
     * @return string|null
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }
    /**
     * Set modifyTime value
     * @param string $modifyTime
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnInfoDTO
     */
    public function setModifyTime(?string $modifyTime = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyTime) && !is_string($modifyTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyTime, true), gettype($modifyTime)), __LINE__);
        }
        $this->modifyTime = $modifyTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnInfoDTO
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
     * Get popupShown value
     * @return string|null
     */
    public function getPopupShown(): ?string
    {
        return $this->popupShown;
    }
    /**
     * Set popupShown value
     * @param string $popupShown
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnInfoDTO
     */
    public function setPopupShown(?string $popupShown = null): self
    {
        // validation for constraint: string
        if (!is_null($popupShown) && !is_string($popupShown)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($popupShown, true), gettype($popupShown)), __LINE__);
        }
        $this->popupShown = $popupShown;
        
        return $this;
    }
    /**
     * Get promotionId value
     * @return int|null
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }
    /**
     * Set promotionId value
     * @param int $promotionId
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnInfoDTO
     */
    public function setPromotionId(?int $promotionId = null): self
    {
        // validation for constraint: int
        if (!is_null($promotionId) && !(is_int($promotionId) || ctype_digit($promotionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($promotionId, true), gettype($promotionId)), __LINE__);
        }
        $this->promotionId = $promotionId;
        
        return $this;
    }
    /**
     * Get promotionUnit value
     * @return string|null
     */
    public function getPromotionUnit(): ?string
    {
        return $this->promotionUnit;
    }
    /**
     * Set promotionUnit value
     * @param string $promotionUnit
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnInfoDTO
     */
    public function setPromotionUnit(?string $promotionUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionUnit) && !is_string($promotionUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionUnit, true), gettype($promotionUnit)), __LINE__);
        }
        $this->promotionUnit = $promotionUnit;
        
        return $this;
    }
}
