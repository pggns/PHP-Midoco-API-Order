<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MilesAndMoreBurnTransactionDTO StructType
 * @subpackage Structs
 */
class MilesAndMoreBurnTransactionDTO extends AbstractStructBase
{
    /**
     * The authorizationTime
     * @var string|null
     */
    protected ?string $authorizationTime = null;
    /**
     * The cancellationTime
     * @var string|null
     */
    protected ?string $cancellationTime = null;
    /**
     * The captureTime
     * @var string|null
     */
    protected ?string $captureTime = null;
    /**
     * The cardNo
     * @var string|null
     */
    protected ?string $cardNo = null;
    /**
     * The checkoutUrl
     * @var string|null
     */
    protected ?string $checkoutUrl = null;
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
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The eligibleAmount
     * @var float|null
     */
    protected ?float $eligibleAmount = null;
    /**
     * The expirationTime
     * @var string|null
     */
    protected ?string $expirationTime = null;
    /**
     * The externalResponses
     * @var string|null
     */
    protected ?string $externalResponses = null;
    /**
     * The grantedAmount
     * @var float|null
     */
    protected ?float $grantedAmount = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The mileCashRatio
     * @var float|null
     */
    protected ?float $mileCashRatio = null;
    /**
     * The positionId
     * @var int|null
     */
    protected ?int $positionId = null;
    /**
     * The refreshTime
     * @var string|null
     */
    protected ?string $refreshTime = null;
    /**
     * The refundTime
     * @var string|null
     */
    protected ?string $refundTime = null;
    /**
     * The refundedAmount
     * @var float|null
     */
    protected ?float $refundedAmount = null;
    /**
     * The refundedMiles
     * @var float|null
     */
    protected ?float $refundedMiles = null;
    /**
     * The requestId
     * @var string|null
     */
    protected ?string $requestId = null;
    /**
     * The requestedAmount
     * @var float|null
     */
    protected ?float $requestedAmount = null;
    /**
     * The secret
     * @var string|null
     */
    protected ?string $secret = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The transactionId
     * @var string|null
     */
    protected ?string $transactionId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for MilesAndMoreBurnTransactionDTO
     * @uses MilesAndMoreBurnTransactionDTO::setAuthorizationTime()
     * @uses MilesAndMoreBurnTransactionDTO::setCancellationTime()
     * @uses MilesAndMoreBurnTransactionDTO::setCaptureTime()
     * @uses MilesAndMoreBurnTransactionDTO::setCardNo()
     * @uses MilesAndMoreBurnTransactionDTO::setCheckoutUrl()
     * @uses MilesAndMoreBurnTransactionDTO::setCreationTime()
     * @uses MilesAndMoreBurnTransactionDTO::setCreationUser()
     * @uses MilesAndMoreBurnTransactionDTO::setCurrency()
     * @uses MilesAndMoreBurnTransactionDTO::setCustomerId()
     * @uses MilesAndMoreBurnTransactionDTO::setDocumentId()
     * @uses MilesAndMoreBurnTransactionDTO::setEligibleAmount()
     * @uses MilesAndMoreBurnTransactionDTO::setExpirationTime()
     * @uses MilesAndMoreBurnTransactionDTO::setExternalResponses()
     * @uses MilesAndMoreBurnTransactionDTO::setGrantedAmount()
     * @uses MilesAndMoreBurnTransactionDTO::setItemId()
     * @uses MilesAndMoreBurnTransactionDTO::setMileCashRatio()
     * @uses MilesAndMoreBurnTransactionDTO::setPositionId()
     * @uses MilesAndMoreBurnTransactionDTO::setRefreshTime()
     * @uses MilesAndMoreBurnTransactionDTO::setRefundTime()
     * @uses MilesAndMoreBurnTransactionDTO::setRefundedAmount()
     * @uses MilesAndMoreBurnTransactionDTO::setRefundedMiles()
     * @uses MilesAndMoreBurnTransactionDTO::setRequestId()
     * @uses MilesAndMoreBurnTransactionDTO::setRequestedAmount()
     * @uses MilesAndMoreBurnTransactionDTO::setSecret()
     * @uses MilesAndMoreBurnTransactionDTO::setStatus()
     * @uses MilesAndMoreBurnTransactionDTO::setTransactionId()
     * @uses MilesAndMoreBurnTransactionDTO::setUnitName()
     * @param string $authorizationTime
     * @param string $cancellationTime
     * @param string $captureTime
     * @param string $cardNo
     * @param string $checkoutUrl
     * @param string $creationTime
     * @param int $creationUser
     * @param string $currency
     * @param int $customerId
     * @param int $documentId
     * @param float $eligibleAmount
     * @param string $expirationTime
     * @param string $externalResponses
     * @param float $grantedAmount
     * @param int $itemId
     * @param float $mileCashRatio
     * @param int $positionId
     * @param string $refreshTime
     * @param string $refundTime
     * @param float $refundedAmount
     * @param float $refundedMiles
     * @param string $requestId
     * @param float $requestedAmount
     * @param string $secret
     * @param string $status
     * @param string $transactionId
     * @param string $unitName
     */
    public function __construct(?string $authorizationTime = null, ?string $cancellationTime = null, ?string $captureTime = null, ?string $cardNo = null, ?string $checkoutUrl = null, ?string $creationTime = null, ?int $creationUser = null, ?string $currency = null, ?int $customerId = null, ?int $documentId = null, ?float $eligibleAmount = null, ?string $expirationTime = null, ?string $externalResponses = null, ?float $grantedAmount = null, ?int $itemId = null, ?float $mileCashRatio = null, ?int $positionId = null, ?string $refreshTime = null, ?string $refundTime = null, ?float $refundedAmount = null, ?float $refundedMiles = null, ?string $requestId = null, ?float $requestedAmount = null, ?string $secret = null, ?string $status = null, ?string $transactionId = null, ?string $unitName = null)
    {
        $this
            ->setAuthorizationTime($authorizationTime)
            ->setCancellationTime($cancellationTime)
            ->setCaptureTime($captureTime)
            ->setCardNo($cardNo)
            ->setCheckoutUrl($checkoutUrl)
            ->setCreationTime($creationTime)
            ->setCreationUser($creationUser)
            ->setCurrency($currency)
            ->setCustomerId($customerId)
            ->setDocumentId($documentId)
            ->setEligibleAmount($eligibleAmount)
            ->setExpirationTime($expirationTime)
            ->setExternalResponses($externalResponses)
            ->setGrantedAmount($grantedAmount)
            ->setItemId($itemId)
            ->setMileCashRatio($mileCashRatio)
            ->setPositionId($positionId)
            ->setRefreshTime($refreshTime)
            ->setRefundTime($refundTime)
            ->setRefundedAmount($refundedAmount)
            ->setRefundedMiles($refundedMiles)
            ->setRequestId($requestId)
            ->setRequestedAmount($requestedAmount)
            ->setSecret($secret)
            ->setStatus($status)
            ->setTransactionId($transactionId)
            ->setUnitName($unitName);
    }
    /**
     * Get authorizationTime value
     * @return string|null
     */
    public function getAuthorizationTime(): ?string
    {
        return $this->authorizationTime;
    }
    /**
     * Set authorizationTime value
     * @param string $authorizationTime
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
     */
    public function setAuthorizationTime(?string $authorizationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($authorizationTime) && !is_string($authorizationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authorizationTime, true), gettype($authorizationTime)), __LINE__);
        }
        $this->authorizationTime = $authorizationTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
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
     * Get captureTime value
     * @return string|null
     */
    public function getCaptureTime(): ?string
    {
        return $this->captureTime;
    }
    /**
     * Set captureTime value
     * @param string $captureTime
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
     */
    public function setCaptureTime(?string $captureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($captureTime) && !is_string($captureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($captureTime, true), gettype($captureTime)), __LINE__);
        }
        $this->captureTime = $captureTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
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
     * Get checkoutUrl value
     * @return string|null
     */
    public function getCheckoutUrl(): ?string
    {
        return $this->checkoutUrl;
    }
    /**
     * Set checkoutUrl value
     * @param string $checkoutUrl
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
     */
    public function setCheckoutUrl(?string $checkoutUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($checkoutUrl) && !is_string($checkoutUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checkoutUrl, true), gettype($checkoutUrl)), __LINE__);
        }
        $this->checkoutUrl = $checkoutUrl;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
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
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
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
     * Get eligibleAmount value
     * @return float|null
     */
    public function getEligibleAmount(): ?float
    {
        return $this->eligibleAmount;
    }
    /**
     * Set eligibleAmount value
     * @param float $eligibleAmount
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
     */
    public function setEligibleAmount(?float $eligibleAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($eligibleAmount) && !(is_float($eligibleAmount) || is_numeric($eligibleAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($eligibleAmount, true), gettype($eligibleAmount)), __LINE__);
        }
        $this->eligibleAmount = $eligibleAmount;
        
        return $this;
    }
    /**
     * Get expirationTime value
     * @return string|null
     */
    public function getExpirationTime(): ?string
    {
        return $this->expirationTime;
    }
    /**
     * Set expirationTime value
     * @param string $expirationTime
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
     */
    public function setExpirationTime(?string $expirationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($expirationTime) && !is_string($expirationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationTime, true), gettype($expirationTime)), __LINE__);
        }
        $this->expirationTime = $expirationTime;
        
        return $this;
    }
    /**
     * Get externalResponses value
     * @return string|null
     */
    public function getExternalResponses(): ?string
    {
        return $this->externalResponses;
    }
    /**
     * Set externalResponses value
     * @param string $externalResponses
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
     */
    public function setExternalResponses(?string $externalResponses = null): self
    {
        // validation for constraint: string
        if (!is_null($externalResponses) && !is_string($externalResponses)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalResponses, true), gettype($externalResponses)), __LINE__);
        }
        $this->externalResponses = $externalResponses;
        
        return $this;
    }
    /**
     * Get grantedAmount value
     * @return float|null
     */
    public function getGrantedAmount(): ?float
    {
        return $this->grantedAmount;
    }
    /**
     * Set grantedAmount value
     * @param float $grantedAmount
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
     */
    public function setGrantedAmount(?float $grantedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($grantedAmount) && !(is_float($grantedAmount) || is_numeric($grantedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grantedAmount, true), gettype($grantedAmount)), __LINE__);
        }
        $this->grantedAmount = $grantedAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
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
     * Get mileCashRatio value
     * @return float|null
     */
    public function getMileCashRatio(): ?float
    {
        return $this->mileCashRatio;
    }
    /**
     * Set mileCashRatio value
     * @param float $mileCashRatio
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
     */
    public function setMileCashRatio(?float $mileCashRatio = null): self
    {
        // validation for constraint: float
        if (!is_null($mileCashRatio) && !(is_float($mileCashRatio) || is_numeric($mileCashRatio))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($mileCashRatio, true), gettype($mileCashRatio)), __LINE__);
        }
        $this->mileCashRatio = $mileCashRatio;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
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
     * Get refundTime value
     * @return string|null
     */
    public function getRefundTime(): ?string
    {
        return $this->refundTime;
    }
    /**
     * Set refundTime value
     * @param string $refundTime
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
     */
    public function setRefundTime(?string $refundTime = null): self
    {
        // validation for constraint: string
        if (!is_null($refundTime) && !is_string($refundTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundTime, true), gettype($refundTime)), __LINE__);
        }
        $this->refundTime = $refundTime;
        
        return $this;
    }
    /**
     * Get refundedAmount value
     * @return float|null
     */
    public function getRefundedAmount(): ?float
    {
        return $this->refundedAmount;
    }
    /**
     * Set refundedAmount value
     * @param float $refundedAmount
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
     */
    public function setRefundedAmount(?float $refundedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($refundedAmount) && !(is_float($refundedAmount) || is_numeric($refundedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($refundedAmount, true), gettype($refundedAmount)), __LINE__);
        }
        $this->refundedAmount = $refundedAmount;
        
        return $this;
    }
    /**
     * Get refundedMiles value
     * @return float|null
     */
    public function getRefundedMiles(): ?float
    {
        return $this->refundedMiles;
    }
    /**
     * Set refundedMiles value
     * @param float $refundedMiles
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
     */
    public function setRefundedMiles(?float $refundedMiles = null): self
    {
        // validation for constraint: float
        if (!is_null($refundedMiles) && !(is_float($refundedMiles) || is_numeric($refundedMiles))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($refundedMiles, true), gettype($refundedMiles)), __LINE__);
        }
        $this->refundedMiles = $refundedMiles;
        
        return $this;
    }
    /**
     * Get requestId value
     * @return string|null
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }
    /**
     * Set requestId value
     * @param string $requestId
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
     */
    public function setRequestId(?string $requestId = null): self
    {
        // validation for constraint: string
        if (!is_null($requestId) && !is_string($requestId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($requestId, true), gettype($requestId)), __LINE__);
        }
        $this->requestId = $requestId;
        
        return $this;
    }
    /**
     * Get requestedAmount value
     * @return float|null
     */
    public function getRequestedAmount(): ?float
    {
        return $this->requestedAmount;
    }
    /**
     * Set requestedAmount value
     * @param float $requestedAmount
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
     */
    public function setRequestedAmount(?float $requestedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($requestedAmount) && !(is_float($requestedAmount) || is_numeric($requestedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($requestedAmount, true), gettype($requestedAmount)), __LINE__);
        }
        $this->requestedAmount = $requestedAmount;
        
        return $this;
    }
    /**
     * Get secret value
     * @return string|null
     */
    public function getSecret(): ?string
    {
        return $this->secret;
    }
    /**
     * Set secret value
     * @param string $secret
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
     */
    public function setSecret(?string $secret = null): self
    {
        // validation for constraint: string
        if (!is_null($secret) && !is_string($secret)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secret, true), gettype($secret)), __LINE__);
        }
        $this->secret = $secret;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDTO
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
}
