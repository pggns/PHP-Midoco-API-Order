<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ccAuthorisation StructType
 * Meta information extracted from the WSDL
 * - documentation: reference to external ccAuthorisation information, not executed inside of midoco, can be used in later capture using cc payment
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CcAuthorisation extends AbstractStructBase
{
    /**
     * The authCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $authCode = null;
    /**
     * The authAmount
     * @var float|null
     */
    protected ?float $authAmount = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The captureExecuted
     * @var bool|null
     */
    protected ?bool $captureExecuted = null;
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * The ccNumber
     * Meta information extracted from the WSDL
     * - documentation: mandatory for cc payment, not mandatory for paypal via cc Provider
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ccNumber = null;
    /**
     * The authorisationExecuted
     * Meta information extracted from the WSDL
     * - documentation: authorisationExecuted = true, paypal transaction is authenticated and autorised , otherwise only authenticated | not mandatory for cc payment, mandatory for paypal via cc Provider
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $authorisationExecuted = null;
    /**
     * The ccToken
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ccToken
     * @var \Pggns\MidocoApi\Order\StructType\CcToken|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CcToken $ccToken = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The transactionRefId
     * @var string|null
     */
    protected ?string $transactionRefId = null;
    /**
     * Constructor method for ccAuthorisation
     * @uses CcAuthorisation::setAuthCode()
     * @uses CcAuthorisation::setAuthAmount()
     * @uses CcAuthorisation::setCurrency()
     * @uses CcAuthorisation::setCaptureExecuted()
     * @uses CcAuthorisation::setCcType()
     * @uses CcAuthorisation::setCcNumber()
     * @uses CcAuthorisation::setAuthorisationExecuted()
     * @uses CcAuthorisation::setCcToken()
     * @uses CcAuthorisation::setPosition()
     * @uses CcAuthorisation::setTransactionRefId()
     * @param string $authCode
     * @param float $authAmount
     * @param string $currency
     * @param bool $captureExecuted
     * @param string $ccType
     * @param string $ccNumber
     * @param bool $authorisationExecuted
     * @param \Pggns\MidocoApi\Order\StructType\CcToken $ccToken
     * @param int $position
     * @param string $transactionRefId
     */
    public function __construct(?string $authCode = null, ?float $authAmount = null, ?string $currency = null, ?bool $captureExecuted = null, ?string $ccType = null, ?string $ccNumber = null, ?bool $authorisationExecuted = null, ?\Pggns\MidocoApi\Order\StructType\CcToken $ccToken = null, ?int $position = null, ?string $transactionRefId = null)
    {
        $this
            ->setAuthCode($authCode)
            ->setAuthAmount($authAmount)
            ->setCurrency($currency)
            ->setCaptureExecuted($captureExecuted)
            ->setCcType($ccType)
            ->setCcNumber($ccNumber)
            ->setAuthorisationExecuted($authorisationExecuted)
            ->setCcToken($ccToken)
            ->setPosition($position)
            ->setTransactionRefId($transactionRefId);
    }
    /**
     * Get authCode value
     * @return string|null
     */
    public function getAuthCode(): ?string
    {
        return $this->authCode;
    }
    /**
     * Set authCode value
     * @param string $authCode
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setAuthCode(?string $authCode = null): self
    {
        // validation for constraint: string
        if (!is_null($authCode) && !is_string($authCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authCode, true), gettype($authCode)), __LINE__);
        }
        $this->authCode = $authCode;
        
        return $this;
    }
    /**
     * Get authAmount value
     * @return float|null
     */
    public function getAuthAmount(): ?float
    {
        return $this->authAmount;
    }
    /**
     * Set authAmount value
     * @param float $authAmount
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setAuthAmount(?float $authAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($authAmount) && !(is_float($authAmount) || is_numeric($authAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($authAmount, true), gettype($authAmount)), __LINE__);
        }
        $this->authAmount = $authAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
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
     * Get captureExecuted value
     * @return bool|null
     */
    public function getCaptureExecuted(): ?bool
    {
        return $this->captureExecuted;
    }
    /**
     * Set captureExecuted value
     * @param bool $captureExecuted
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setCaptureExecuted(?bool $captureExecuted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($captureExecuted) && !is_bool($captureExecuted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($captureExecuted, true), gettype($captureExecuted)), __LINE__);
        }
        $this->captureExecuted = $captureExecuted;
        
        return $this;
    }
    /**
     * Get ccType value
     * @return string|null
     */
    public function getCcType(): ?string
    {
        return $this->ccType;
    }
    /**
     * Set ccType value
     * @param string $ccType
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setCcType(?string $ccType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccType) && !is_string($ccType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccType, true), gettype($ccType)), __LINE__);
        }
        $this->ccType = $ccType;
        
        return $this;
    }
    /**
     * Get ccNumber value
     * @return string|null
     */
    public function getCcNumber(): ?string
    {
        return $this->ccNumber;
    }
    /**
     * Set ccNumber value
     * @param string $ccNumber
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setCcNumber(?string $ccNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($ccNumber) && !is_string($ccNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNumber, true), gettype($ccNumber)), __LINE__);
        }
        $this->ccNumber = $ccNumber;
        
        return $this;
    }
    /**
     * Get authorisationExecuted value
     * @return bool|null
     */
    public function getAuthorisationExecuted(): ?bool
    {
        return $this->authorisationExecuted;
    }
    /**
     * Set authorisationExecuted value
     * @param bool $authorisationExecuted
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setAuthorisationExecuted(?bool $authorisationExecuted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($authorisationExecuted) && !is_bool($authorisationExecuted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($authorisationExecuted, true), gettype($authorisationExecuted)), __LINE__);
        }
        $this->authorisationExecuted = $authorisationExecuted;
        
        return $this;
    }
    /**
     * Get ccToken value
     * @return \Pggns\MidocoApi\Order\StructType\CcToken|null
     */
    public function getCcToken(): ?\Pggns\MidocoApi\Order\StructType\CcToken
    {
        return $this->ccToken;
    }
    /**
     * Set ccToken value
     * @param \Pggns\MidocoApi\Order\StructType\CcToken $ccToken
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setCcToken(?\Pggns\MidocoApi\Order\StructType\CcToken $ccToken = null): self
    {
        $this->ccToken = $ccToken;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get transactionRefId value
     * @return string|null
     */
    public function getTransactionRefId(): ?string
    {
        return $this->transactionRefId;
    }
    /**
     * Set transactionRefId value
     * @param string $transactionRefId
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setTransactionRefId(?string $transactionRefId = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionRefId) && !is_string($transactionRefId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionRefId, true), gettype($transactionRefId)), __LINE__);
        }
        $this->transactionRefId = $transactionRefId;
        
        return $this;
    }
}
