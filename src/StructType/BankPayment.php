<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankPayment StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BankPayment extends AbstractStructBase
{
    /**
     * The BankAccountRefId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: BankAccountRefId
     * @var int|null
     */
    protected ?int $BankAccountRefId = null;
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
     * Constructor method for BankPayment
     * @uses BankPayment::setBankAccountRefId()
     * @uses BankPayment::setPaidAmount()
     * @uses BankPayment::setCurrency()
     * @param int $bankAccountRefId
     * @param float $paidAmount
     * @param string $currency
     */
    public function __construct(?int $bankAccountRefId = null, ?float $paidAmount = null, ?string $currency = null)
    {
        $this
            ->setBankAccountRefId($bankAccountRefId)
            ->setPaidAmount($paidAmount)
            ->setCurrency($currency);
    }
    /**
     * Get BankAccountRefId value
     * @return int|null
     */
    public function getBankAccountRefId(): ?int
    {
        return $this->BankAccountRefId;
    }
    /**
     * Set BankAccountRefId value
     * @param int $bankAccountRefId
     * @return \Pggns\MidocoApi\Order\StructType\BankPayment
     */
    public function setBankAccountRefId(?int $bankAccountRefId = null): self
    {
        // validation for constraint: int
        if (!is_null($bankAccountRefId) && !(is_int($bankAccountRefId) || ctype_digit($bankAccountRefId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bankAccountRefId, true), gettype($bankAccountRefId)), __LINE__);
        }
        $this->BankAccountRefId = $bankAccountRefId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankPayment
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
     * @return \Pggns\MidocoApi\Order\StructType\BankPayment
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
