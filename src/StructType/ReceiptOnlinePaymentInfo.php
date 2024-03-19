<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReceiptOnlinePaymentInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReceiptOnlinePaymentInfo extends OnlinePaymentInfoType
{
    /**
     * The MidocoCcToken
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: crm:MidocoCcToken
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCcToken[]
     */
    protected ?array $MidocoCcToken = null;
    /**
     * The ccValidMonth
     * @var int|null
     */
    protected ?int $ccValidMonth = null;
    /**
     * The ccValidYear
     * @var int|null
     */
    protected ?int $ccValidYear = null;
    /**
     * The ccAutorisationCode
     * @var string|null
     */
    protected ?string $ccAutorisationCode = null;
    /**
     * Constructor method for ReceiptOnlinePaymentInfo
     * @uses ReceiptOnlinePaymentInfo::setMidocoCcToken()
     * @uses ReceiptOnlinePaymentInfo::setCcValidMonth()
     * @uses ReceiptOnlinePaymentInfo::setCcValidYear()
     * @uses ReceiptOnlinePaymentInfo::setCcAutorisationCode()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCcToken[] $midocoCcToken
     * @param int $ccValidMonth
     * @param int $ccValidYear
     * @param string $ccAutorisationCode
     */
    public function __construct(?array $midocoCcToken = null, ?int $ccValidMonth = null, ?int $ccValidYear = null, ?string $ccAutorisationCode = null)
    {
        $this
            ->setMidocoCcToken($midocoCcToken)
            ->setCcValidMonth($ccValidMonth)
            ->setCcValidYear($ccValidYear)
            ->setCcAutorisationCode($ccAutorisationCode);
    }
    /**
     * Get MidocoCcToken value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcToken[]
     */
    public function getMidocoCcToken(): ?array
    {
        return $this->MidocoCcToken;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCcToken method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCcToken method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCcTokenForArrayConstraintFromSetMidocoCcToken(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $receiptOnlinePaymentInfoMidocoCcTokenItem) {
            // validation for constraint: itemType
            if (!$receiptOnlinePaymentInfoMidocoCcTokenItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCcToken) {
                $invalidValues[] = is_object($receiptOnlinePaymentInfoMidocoCcTokenItem) ? get_class($receiptOnlinePaymentInfoMidocoCcTokenItem) : sprintf('%s(%s)', gettype($receiptOnlinePaymentInfoMidocoCcTokenItem), var_export($receiptOnlinePaymentInfoMidocoCcTokenItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptOnlinePaymentInfo
     */
    public function setMidocoCcToken(?array $midocoCcToken = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCcTokenArrayErrorMessage = self::validateMidocoCcTokenForArrayConstraintFromSetMidocoCcToken($midocoCcToken))) {
            throw new InvalidArgumentException($midocoCcTokenArrayErrorMessage, __LINE__);
        }
        $this->MidocoCcToken = $midocoCcToken;
        
        return $this;
    }
    /**
     * Add item to MidocoCcToken value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCcToken $item
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptOnlinePaymentInfo
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
     * Get ccValidMonth value
     * @return int|null
     */
    public function getCcValidMonth(): ?int
    {
        return $this->ccValidMonth;
    }
    /**
     * Set ccValidMonth value
     * @param int $ccValidMonth
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptOnlinePaymentInfo
     */
    public function setCcValidMonth(?int $ccValidMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($ccValidMonth) && !(is_int($ccValidMonth) || ctype_digit($ccValidMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccValidMonth, true), gettype($ccValidMonth)), __LINE__);
        }
        $this->ccValidMonth = $ccValidMonth;
        
        return $this;
    }
    /**
     * Get ccValidYear value
     * @return int|null
     */
    public function getCcValidYear(): ?int
    {
        return $this->ccValidYear;
    }
    /**
     * Set ccValidYear value
     * @param int $ccValidYear
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptOnlinePaymentInfo
     */
    public function setCcValidYear(?int $ccValidYear = null): self
    {
        // validation for constraint: int
        if (!is_null($ccValidYear) && !(is_int($ccValidYear) || ctype_digit($ccValidYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccValidYear, true), gettype($ccValidYear)), __LINE__);
        }
        $this->ccValidYear = $ccValidYear;
        
        return $this;
    }
    /**
     * Get ccAutorisationCode value
     * @return string|null
     */
    public function getCcAutorisationCode(): ?string
    {
        return $this->ccAutorisationCode;
    }
    /**
     * Set ccAutorisationCode value
     * @param string $ccAutorisationCode
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptOnlinePaymentInfo
     */
    public function setCcAutorisationCode(?string $ccAutorisationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($ccAutorisationCode) && !is_string($ccAutorisationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccAutorisationCode, true), gettype($ccAutorisationCode)), __LINE__);
        }
        $this->ccAutorisationCode = $ccAutorisationCode;
        
        return $this;
    }
}
