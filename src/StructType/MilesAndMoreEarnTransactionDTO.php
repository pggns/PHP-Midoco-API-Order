<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MilesAndMoreEarnTransactionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MilesAndMoreEarnTransactionDTO extends AbstractStructBase
{
    /**
     * The amountEligibleForPromotion
     * @var float|null
     */
    protected ?float $amountEligibleForPromotion = null;
    /**
     * The cancellationTime
     * @var string|null
     */
    protected ?string $cancellationTime = null;
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
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The dueDate
     * @var string|null
     */
    protected ?string $dueDate = null;
    /**
     * The error
     * @var string|null
     */
    protected ?string $error = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The json
     * @var string|null
     */
    protected ?string $json = null;
    /**
     * The preparationTime
     * @var string|null
     */
    protected ?string $preparationTime = null;
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
     * The refreshTime
     * @var string|null
     */
    protected ?string $refreshTime = null;
    /**
     * The totalAmount
     * @var float|null
     */
    protected ?float $totalAmount = null;
    /**
     * The totalMiles
     * @var float|null
     */
    protected ?float $totalMiles = null;
    /**
     * The transactionId
     * @var string|null
     */
    protected ?string $transactionId = null;
    /**
     * The transactionStatus
     * @var string|null
     */
    protected ?string $transactionStatus = null;
    /**
     * Constructor method for MilesAndMoreEarnTransactionDTO
     * @uses MilesAndMoreEarnTransactionDTO::setAmountEligibleForPromotion()
     * @uses MilesAndMoreEarnTransactionDTO::setCancellationTime()
     * @uses MilesAndMoreEarnTransactionDTO::setCardNo()
     * @uses MilesAndMoreEarnTransactionDTO::setCreationTime()
     * @uses MilesAndMoreEarnTransactionDTO::setCreationUser()
     * @uses MilesAndMoreEarnTransactionDTO::setCrmCustomerId()
     * @uses MilesAndMoreEarnTransactionDTO::setCurrency()
     * @uses MilesAndMoreEarnTransactionDTO::setDueDate()
     * @uses MilesAndMoreEarnTransactionDTO::setError()
     * @uses MilesAndMoreEarnTransactionDTO::setId()
     * @uses MilesAndMoreEarnTransactionDTO::setItemId()
     * @uses MilesAndMoreEarnTransactionDTO::setJson()
     * @uses MilesAndMoreEarnTransactionDTO::setPreparationTime()
     * @uses MilesAndMoreEarnTransactionDTO::setPromotionId()
     * @uses MilesAndMoreEarnTransactionDTO::setPromotionUnit()
     * @uses MilesAndMoreEarnTransactionDTO::setRefreshTime()
     * @uses MilesAndMoreEarnTransactionDTO::setTotalAmount()
     * @uses MilesAndMoreEarnTransactionDTO::setTotalMiles()
     * @uses MilesAndMoreEarnTransactionDTO::setTransactionId()
     * @uses MilesAndMoreEarnTransactionDTO::setTransactionStatus()
     * @param float $amountEligibleForPromotion
     * @param string $cancellationTime
     * @param string $cardNo
     * @param string $creationTime
     * @param int $creationUser
     * @param int $crmCustomerId
     * @param string $currency
     * @param string $dueDate
     * @param string $error
     * @param int $id
     * @param int $itemId
     * @param string $json
     * @param string $preparationTime
     * @param int $promotionId
     * @param string $promotionUnit
     * @param string $refreshTime
     * @param float $totalAmount
     * @param float $totalMiles
     * @param string $transactionId
     * @param string $transactionStatus
     */
    public function __construct(?float $amountEligibleForPromotion = null, ?string $cancellationTime = null, ?string $cardNo = null, ?string $creationTime = null, ?int $creationUser = null, ?int $crmCustomerId = null, ?string $currency = null, ?string $dueDate = null, ?string $error = null, ?int $id = null, ?int $itemId = null, ?string $json = null, ?string $preparationTime = null, ?int $promotionId = null, ?string $promotionUnit = null, ?string $refreshTime = null, ?float $totalAmount = null, ?float $totalMiles = null, ?string $transactionId = null, ?string $transactionStatus = null)
    {
        $this
            ->setAmountEligibleForPromotion($amountEligibleForPromotion)
            ->setCancellationTime($cancellationTime)
            ->setCardNo($cardNo)
            ->setCreationTime($creationTime)
            ->setCreationUser($creationUser)
            ->setCrmCustomerId($crmCustomerId)
            ->setCurrency($currency)
            ->setDueDate($dueDate)
            ->setError($error)
            ->setId($id)
            ->setItemId($itemId)
            ->setJson($json)
            ->setPreparationTime($preparationTime)
            ->setPromotionId($promotionId)
            ->setPromotionUnit($promotionUnit)
            ->setRefreshTime($refreshTime)
            ->setTotalAmount($totalAmount)
            ->setTotalMiles($totalMiles)
            ->setTransactionId($transactionId)
            ->setTransactionStatus($transactionStatus);
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnTransactionDTO
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
     * Get cancellationTime value
     * @return string|null
     */
    public function getCancellationTime(): ?string
    {
        return $this->cancellationTime;
    }
    /**
     * Set cancellationTime value
     * @param string $cancellationTime
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnTransactionDTO
     */
    public function setCancellationTime(?string $cancellationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($cancellationTime) && !is_string($cancellationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancellationTime, true), gettype($cancellationTime)), __LINE__);
        }
        $this->cancellationTime = $cancellationTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnTransactionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnTransactionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnTransactionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnTransactionDTO
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
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnTransactionDTO
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get dueDate value
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }
    /**
     * Set dueDate value
     * @param string $dueDate
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnTransactionDTO
     */
    public function setDueDate(?string $dueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDate, true), gettype($dueDate)), __LINE__);
        }
        $this->dueDate = $dueDate;
        
        return $this;
    }
    /**
     * Get error value
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param string $error
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnTransactionDTO
     */
    public function setError(?string $error = null): self
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnTransactionDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnTransactionDTO
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
     * Get json value
     * @return string|null
     */
    public function getJson(): ?string
    {
        return $this->json;
    }
    /**
     * Set json value
     * @param string $json
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnTransactionDTO
     */
    public function setJson(?string $json = null): self
    {
        // validation for constraint: string
        if (!is_null($json) && !is_string($json)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($json, true), gettype($json)), __LINE__);
        }
        $this->json = $json;
        
        return $this;
    }
    /**
     * Get preparationTime value
     * @return string|null
     */
    public function getPreparationTime(): ?string
    {
        return $this->preparationTime;
    }
    /**
     * Set preparationTime value
     * @param string $preparationTime
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnTransactionDTO
     */
    public function setPreparationTime(?string $preparationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($preparationTime) && !is_string($preparationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($preparationTime, true), gettype($preparationTime)), __LINE__);
        }
        $this->preparationTime = $preparationTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnTransactionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnTransactionDTO
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
    /**
     * Get refreshTime value
     * @return string|null
     */
    public function getRefreshTime(): ?string
    {
        return $this->refreshTime;
    }
    /**
     * Set refreshTime value
     * @param string $refreshTime
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnTransactionDTO
     */
    public function setRefreshTime(?string $refreshTime = null): self
    {
        // validation for constraint: string
        if (!is_null($refreshTime) && !is_string($refreshTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refreshTime, true), gettype($refreshTime)), __LINE__);
        }
        $this->refreshTime = $refreshTime;
        
        return $this;
    }
    /**
     * Get totalAmount value
     * @return float|null
     */
    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }
    /**
     * Set totalAmount value
     * @param float $totalAmount
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnTransactionDTO
     */
    public function setTotalAmount(?float $totalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalAmount) && !(is_float($totalAmount) || is_numeric($totalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalAmount, true), gettype($totalAmount)), __LINE__);
        }
        $this->totalAmount = $totalAmount;
        
        return $this;
    }
    /**
     * Get totalMiles value
     * @return float|null
     */
    public function getTotalMiles(): ?float
    {
        return $this->totalMiles;
    }
    /**
     * Set totalMiles value
     * @param float $totalMiles
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnTransactionDTO
     */
    public function setTotalMiles(?float $totalMiles = null): self
    {
        // validation for constraint: float
        if (!is_null($totalMiles) && !(is_float($totalMiles) || is_numeric($totalMiles))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalMiles, true), gettype($totalMiles)), __LINE__);
        }
        $this->totalMiles = $totalMiles;
        
        return $this;
    }
    /**
     * Get transactionId value
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param string $transactionId
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnTransactionDTO
     */
    public function setTransactionId(?string $transactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;
        
        return $this;
    }
    /**
     * Get transactionStatus value
     * @return string|null
     */
    public function getTransactionStatus(): ?string
    {
        return $this->transactionStatus;
    }
    /**
     * Set transactionStatus value
     * @param string $transactionStatus
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnTransactionDTO
     */
    public function setTransactionStatus(?string $transactionStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionStatus) && !is_string($transactionStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionStatus, true), gettype($transactionStatus)), __LINE__);
        }
        $this->transactionStatus = $transactionStatus;
        
        return $this;
    }
}
