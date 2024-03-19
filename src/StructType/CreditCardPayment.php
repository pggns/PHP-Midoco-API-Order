<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditCardPayment StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreditCardPayment extends AbstractStructBase
{
    /**
     * The CreditCardRefId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: CreditCardRefId
     * @var int|null
     */
    protected ?int $CreditCardRefId = null;
    /**
     * The paidAmount
     * @var float|null
     */
    protected ?float $paidAmount = null;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 3
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * Constructor method for CreditCardPayment
     * @uses CreditCardPayment::setCreditCardRefId()
     * @uses CreditCardPayment::setPaidAmount()
     * @uses CreditCardPayment::setCurrency()
     * @param int $creditCardRefId
     * @param float $paidAmount
     * @param string $currency
     */
    public function __construct(?int $creditCardRefId = null, ?float $paidAmount = null, ?string $currency = null)
    {
        $this
            ->setCreditCardRefId($creditCardRefId)
            ->setPaidAmount($paidAmount)
            ->setCurrency($currency);
    }
    /**
     * Get CreditCardRefId value
     * @return int|null
     */
    public function getCreditCardRefId(): ?int
    {
        return $this->CreditCardRefId;
    }
    /**
     * Set CreditCardRefId value
     * @param int $creditCardRefId
     * @return \Pggns\MidocoApi\Order\StructType\CreditCardPayment
     */
    public function setCreditCardRefId(?int $creditCardRefId = null): self
    {
        // validation for constraint: int
        if (!is_null($creditCardRefId) && !(is_int($creditCardRefId) || ctype_digit($creditCardRefId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creditCardRefId, true), gettype($creditCardRefId)), __LINE__);
        }
        $this->CreditCardRefId = $creditCardRefId;
        
        return $this;
    }
    /**
     * Get paidAmount value
     * @return float|null
     */
    public function getPaidAmount(): ?float
    {
        return $this->paidAmount;
    }
    /**
     * Set paidAmount value
     * @param float $paidAmount
     * @return \Pggns\MidocoApi\Order\StructType\CreditCardPayment
     */
    public function setPaidAmount(?float $paidAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($paidAmount) && !(is_float($paidAmount) || is_numeric($paidAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($paidAmount, true), gettype($paidAmount)), __LINE__);
        }
        $this->paidAmount = $paidAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CreditCardPayment
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($currency) && mb_strlen((string) $currency) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
}
