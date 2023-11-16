<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCreditCardPosition StructType
 * @subpackage Structs
 */
class MidocoCreditCardPosition extends MidocoOnlinePaymentTransactionPosition
{
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * The ccNo
     * @var string|null
     */
    protected ?string $ccNo = null;
    /**
     * The ccCvc
     * @var string|null
     */
    protected ?string $ccCvc = null;
    /**
     * The ccValidYear
     * @var string|null
     */
    protected ?string $ccValidYear = null;
    /**
     * The ccValidMonth
     * @var string|null
     */
    protected ?string $ccValidMonth = null;
    /**
     * The ccOwner
     * @var string|null
     */
    protected ?string $ccOwner = null;
    /**
     * The ccAuthCode
     * @var string|null
     */
    protected ?string $ccAuthCode = null;
    /**
     * The MidocoPaymentOrdersInfos
     * Meta information extracted from the WSDL
     * - ref: MidocoPaymentOrdersInfos
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos $MidocoPaymentOrdersInfos = null;
    /**
     * The MidocoCcToken
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: crm:MidocoCcToken
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCcToken[]
     */
    protected array $MidocoCcToken = [];
    /**
     * The ccToken
     * @var string|null
     */
    protected ?string $ccToken = null;
    /**
     * The ccTokenType
     * @var string|null
     */
    protected ?string $ccTokenType = null;
    /**
     * The isRecurring
     * @var bool|null
     */
    protected ?bool $isRecurring = null;
    /**
     * The preferredReceiptId
     * @var int|null
     */
    protected ?int $preferredReceiptId = null;
    /**
     * Constructor method for MidocoCreditCardPosition
     * @uses MidocoCreditCardPosition::setCcType()
     * @uses MidocoCreditCardPosition::setCcNo()
     * @uses MidocoCreditCardPosition::setCcCvc()
     * @uses MidocoCreditCardPosition::setCcValidYear()
     * @uses MidocoCreditCardPosition::setCcValidMonth()
     * @uses MidocoCreditCardPosition::setCcOwner()
     * @uses MidocoCreditCardPosition::setCcAuthCode()
     * @uses MidocoCreditCardPosition::setMidocoPaymentOrdersInfos()
     * @uses MidocoCreditCardPosition::setMidocoCcToken()
     * @uses MidocoCreditCardPosition::setCcToken()
     * @uses MidocoCreditCardPosition::setCcTokenType()
     * @uses MidocoCreditCardPosition::setIsRecurring()
     * @uses MidocoCreditCardPosition::setPreferredReceiptId()
     * @param string $ccType
     * @param string $ccNo
     * @param string $ccCvc
     * @param string $ccValidYear
     * @param string $ccValidMonth
     * @param string $ccOwner
     * @param string $ccAuthCode
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos $midocoPaymentOrdersInfos
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCcToken[] $midocoCcToken
     * @param string $ccToken
     * @param string $ccTokenType
     * @param bool $isRecurring
     * @param int $preferredReceiptId
     */
    public function __construct(?string $ccType = null, ?string $ccNo = null, ?string $ccCvc = null, ?string $ccValidYear = null, ?string $ccValidMonth = null, ?string $ccOwner = null, ?string $ccAuthCode = null, ?\Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos $midocoPaymentOrdersInfos = null, array $midocoCcToken = [], ?string $ccToken = null, ?string $ccTokenType = null, ?bool $isRecurring = null, ?int $preferredReceiptId = null)
    {
        $this
            ->setCcType($ccType)
            ->setCcNo($ccNo)
            ->setCcCvc($ccCvc)
            ->setCcValidYear($ccValidYear)
            ->setCcValidMonth($ccValidMonth)
            ->setCcOwner($ccOwner)
            ->setCcAuthCode($ccAuthCode)
            ->setMidocoPaymentOrdersInfos($midocoPaymentOrdersInfos)
            ->setMidocoCcToken($midocoCcToken)
            ->setCcToken($ccToken)
            ->setCcTokenType($ccTokenType)
            ->setIsRecurring($isRecurring)
            ->setPreferredReceiptId($preferredReceiptId);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCreditCardPosition
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
     * Get ccNo value
     * @return string|null
     */
    public function getCcNo(): ?string
    {
        return $this->ccNo;
    }
    /**
     * Set ccNo value
     * @param string $ccNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCreditCardPosition
     */
    public function setCcNo(?string $ccNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ccNo) && !is_string($ccNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNo, true), gettype($ccNo)), __LINE__);
        }
        $this->ccNo = $ccNo;
        
        return $this;
    }
    /**
     * Get ccCvc value
     * @return string|null
     */
    public function getCcCvc(): ?string
    {
        return $this->ccCvc;
    }
    /**
     * Set ccCvc value
     * @param string $ccCvc
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCreditCardPosition
     */
    public function setCcCvc(?string $ccCvc = null): self
    {
        // validation for constraint: string
        if (!is_null($ccCvc) && !is_string($ccCvc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccCvc, true), gettype($ccCvc)), __LINE__);
        }
        $this->ccCvc = $ccCvc;
        
        return $this;
    }
    /**
     * Get ccValidYear value
     * @return string|null
     */
    public function getCcValidYear(): ?string
    {
        return $this->ccValidYear;
    }
    /**
     * Set ccValidYear value
     * @param string $ccValidYear
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCreditCardPosition
     */
    public function setCcValidYear(?string $ccValidYear = null): self
    {
        // validation for constraint: string
        if (!is_null($ccValidYear) && !is_string($ccValidYear)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccValidYear, true), gettype($ccValidYear)), __LINE__);
        }
        $this->ccValidYear = $ccValidYear;
        
        return $this;
    }
    /**
     * Get ccValidMonth value
     * @return string|null
     */
    public function getCcValidMonth(): ?string
    {
        return $this->ccValidMonth;
    }
    /**
     * Set ccValidMonth value
     * @param string $ccValidMonth
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCreditCardPosition
     */
    public function setCcValidMonth(?string $ccValidMonth = null): self
    {
        // validation for constraint: string
        if (!is_null($ccValidMonth) && !is_string($ccValidMonth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccValidMonth, true), gettype($ccValidMonth)), __LINE__);
        }
        $this->ccValidMonth = $ccValidMonth;
        
        return $this;
    }
    /**
     * Get ccOwner value
     * @return string|null
     */
    public function getCcOwner(): ?string
    {
        return $this->ccOwner;
    }
    /**
     * Set ccOwner value
     * @param string $ccOwner
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCreditCardPosition
     */
    public function setCcOwner(?string $ccOwner = null): self
    {
        // validation for constraint: string
        if (!is_null($ccOwner) && !is_string($ccOwner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccOwner, true), gettype($ccOwner)), __LINE__);
        }
        $this->ccOwner = $ccOwner;
        
        return $this;
    }
    /**
     * Get ccAuthCode value
     * @return string|null
     */
    public function getCcAuthCode(): ?string
    {
        return $this->ccAuthCode;
    }
    /**
     * Set ccAuthCode value
     * @param string $ccAuthCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCreditCardPosition
     */
    public function setCcAuthCode(?string $ccAuthCode = null): self
    {
        // validation for constraint: string
        if (!is_null($ccAuthCode) && !is_string($ccAuthCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccAuthCode, true), gettype($ccAuthCode)), __LINE__);
        }
        $this->ccAuthCode = $ccAuthCode;
        
        return $this;
    }
    /**
     * Get MidocoPaymentOrdersInfos value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos|null
     */
    public function getMidocoPaymentOrdersInfos(): ?\Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
    {
        return $this->MidocoPaymentOrdersInfos;
    }
    /**
     * Set MidocoPaymentOrdersInfos value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos $midocoPaymentOrdersInfos
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCreditCardPosition
     */
    public function setMidocoPaymentOrdersInfos(?\Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos $midocoPaymentOrdersInfos = null): self
    {
        $this->MidocoPaymentOrdersInfos = $midocoPaymentOrdersInfos;
        
        return $this;
    }
    /**
     * Get MidocoCcToken value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcToken[]
     */
    public function getMidocoCcToken(): array
    {
        return $this->MidocoCcToken;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCcToken method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCcToken method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCcTokenForArrayConstraintsFromSetMidocoCcToken(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCreditCardPositionMidocoCcTokenItem) {
            // validation for constraint: itemType
            if (!$midocoCreditCardPositionMidocoCcTokenItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCcToken) {
                $invalidValues[] = is_object($midocoCreditCardPositionMidocoCcTokenItem) ? get_class($midocoCreditCardPositionMidocoCcTokenItem) : sprintf('%s(%s)', gettype($midocoCreditCardPositionMidocoCcTokenItem), var_export($midocoCreditCardPositionMidocoCcTokenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCcToken property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCcToken, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCcToken value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCcToken[] $midocoCcToken
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCreditCardPosition
     */
    public function setMidocoCcToken(array $midocoCcToken = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCcTokenArrayErrorMessage = self::validateMidocoCcTokenForArrayConstraintsFromSetMidocoCcToken($midocoCcToken))) {
            throw new InvalidArgumentException($midocoCcTokenArrayErrorMessage, __LINE__);
        }
        $this->MidocoCcToken = $midocoCcToken;
        
        return $this;
    }
    /**
     * Add item to MidocoCcToken value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCcToken $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCreditCardPosition
     */
    public function addToMidocoCcToken(\Pggns\MidocoApi\Order\StructType\MidocoCcToken $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCcToken) {
            throw new InvalidArgumentException(sprintf('The MidocoCcToken property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCcToken, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCcToken[] = $item;
        
        return $this;
    }
    /**
     * Get ccToken value
     * @return string|null
     */
    public function getCcToken(): ?string
    {
        return $this->ccToken;
    }
    /**
     * Set ccToken value
     * @param string $ccToken
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCreditCardPosition
     */
    public function setCcToken(?string $ccToken = null): self
    {
        // validation for constraint: string
        if (!is_null($ccToken) && !is_string($ccToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccToken, true), gettype($ccToken)), __LINE__);
        }
        $this->ccToken = $ccToken;
        
        return $this;
    }
    /**
     * Get ccTokenType value
     * @return string|null
     */
    public function getCcTokenType(): ?string
    {
        return $this->ccTokenType;
    }
    /**
     * Set ccTokenType value
     * @param string $ccTokenType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCreditCardPosition
     */
    public function setCcTokenType(?string $ccTokenType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccTokenType) && !is_string($ccTokenType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccTokenType, true), gettype($ccTokenType)), __LINE__);
        }
        $this->ccTokenType = $ccTokenType;
        
        return $this;
    }
    /**
     * Get isRecurring value
     * @return bool|null
     */
    public function getIsRecurring(): ?bool
    {
        return $this->isRecurring;
    }
    /**
     * Set isRecurring value
     * @param bool $isRecurring
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCreditCardPosition
     */
    public function setIsRecurring(?bool $isRecurring = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRecurring) && !is_bool($isRecurring)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRecurring, true), gettype($isRecurring)), __LINE__);
        }
        $this->isRecurring = $isRecurring;
        
        return $this;
    }
    /**
     * Get preferredReceiptId value
     * @return int|null
     */
    public function getPreferredReceiptId(): ?int
    {
        return $this->preferredReceiptId;
    }
    /**
     * Set preferredReceiptId value
     * @param int $preferredReceiptId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCreditCardPosition
     */
    public function setPreferredReceiptId(?int $preferredReceiptId = null): self
    {
        // validation for constraint: int
        if (!is_null($preferredReceiptId) && !(is_int($preferredReceiptId) || ctype_digit($preferredReceiptId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($preferredReceiptId, true), gettype($preferredReceiptId)), __LINE__);
        }
        $this->preferredReceiptId = $preferredReceiptId;
        
        return $this;
    }
}
