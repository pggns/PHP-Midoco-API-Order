<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportMediatorChargesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ImportMediatorChargesRequest extends AbstractStructBase
{
    /**
     * The accountId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $accountId;
    /**
     * The accountIdNoVat
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $accountIdNoVat;
    /**
     * The settlementMonth
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}
     * - use: required
     * @var string
     */
    protected string $settlementMonth;
    /**
     * The CSVCData
     * Meta information extracted from the WSDL
     * - documentation: CDATA values - contains MediatorId|Description|NettoAmount|
     * @var string|null
     */
    protected ?string $CSVCData = null;
    /**
     * The accountIdRC
     * @var string|null
     */
    protected ?string $accountIdRC = null;
    /**
     * The delimiter
     * Meta information extracted from the WSDL
     * - default: |
     * @var string|null
     */
    protected ?string $delimiter = null;
    /**
     * The decimalDelimiter
     * Meta information extracted from the WSDL
     * - default: .
     * @var string|null
     */
    protected ?string $decimalDelimiter = null;
    /**
     * The isCharge
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $isCharge = null;
    /**
     * Constructor method for ImportMediatorChargesRequest
     * @uses ImportMediatorChargesRequest::setAccountId()
     * @uses ImportMediatorChargesRequest::setAccountIdNoVat()
     * @uses ImportMediatorChargesRequest::setSettlementMonth()
     * @uses ImportMediatorChargesRequest::setCSVCData()
     * @uses ImportMediatorChargesRequest::setAccountIdRC()
     * @uses ImportMediatorChargesRequest::setDelimiter()
     * @uses ImportMediatorChargesRequest::setDecimalDelimiter()
     * @uses ImportMediatorChargesRequest::setIsCharge()
     * @param string $accountId
     * @param string $accountIdNoVat
     * @param string $settlementMonth
     * @param string $cSVCData
     * @param string $accountIdRC
     * @param string $delimiter
     * @param string $decimalDelimiter
     * @param bool $isCharge
     */
    public function __construct(string $accountId, string $accountIdNoVat, string $settlementMonth, ?string $cSVCData = null, ?string $accountIdRC = null, ?string $delimiter = '|', ?string $decimalDelimiter = '.', ?bool $isCharge = true)
    {
        $this
            ->setAccountId($accountId)
            ->setAccountIdNoVat($accountIdNoVat)
            ->setSettlementMonth($settlementMonth)
            ->setCSVCData($cSVCData)
            ->setAccountIdRC($accountIdRC)
            ->setDelimiter($delimiter)
            ->setDecimalDelimiter($decimalDelimiter)
            ->setIsCharge($isCharge);
    }
    /**
     * Get accountId value
     * @return string
     */
    public function getAccountId(): string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\ImportMediatorChargesRequest
     */
    public function setAccountId(string $accountId): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get accountIdNoVat value
     * @return string
     */
    public function getAccountIdNoVat(): string
    {
        return $this->accountIdNoVat;
    }
    /**
     * Set accountIdNoVat value
     * @param string $accountIdNoVat
     * @return \Pggns\MidocoApi\Order\StructType\ImportMediatorChargesRequest
     */
    public function setAccountIdNoVat(string $accountIdNoVat): self
    {
        // validation for constraint: string
        if (!is_null($accountIdNoVat) && !is_string($accountIdNoVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountIdNoVat, true), gettype($accountIdNoVat)), __LINE__);
        }
        $this->accountIdNoVat = $accountIdNoVat;
        
        return $this;
    }
    /**
     * Get settlementMonth value
     * @return string
     */
    public function getSettlementMonth(): string
    {
        return $this->settlementMonth;
    }
    /**
     * Set settlementMonth value
     * @param string $settlementMonth
     * @return \Pggns\MidocoApi\Order\StructType\ImportMediatorChargesRequest
     */
    public function setSettlementMonth(string $settlementMonth): self
    {
        // validation for constraint: string
        if (!is_null($settlementMonth) && !is_string($settlementMonth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementMonth, true), gettype($settlementMonth)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2})
        if (!is_null($settlementMonth) && !preg_match('/[0-9]{4}-[0-9]{2}/', (string) $settlementMonth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}/', var_export($settlementMonth, true)), __LINE__);
        }
        $this->settlementMonth = $settlementMonth;
        
        return $this;
    }
    /**
     * Get CSVCData value
     * @return string|null
     */
    public function getCSVCData(): ?string
    {
        return $this->CSVCData;
    }
    /**
     * Set CSVCData value
     * @param string $cSVCData
     * @return \Pggns\MidocoApi\Order\StructType\ImportMediatorChargesRequest
     */
    public function setCSVCData(?string $cSVCData = null): self
    {
        // validation for constraint: string
        if (!is_null($cSVCData) && !is_string($cSVCData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cSVCData, true), gettype($cSVCData)), __LINE__);
        }
        $this->CSVCData = $cSVCData;
        
        return $this;
    }
    /**
     * Get accountIdRC value
     * @return string|null
     */
    public function getAccountIdRC(): ?string
    {
        return $this->accountIdRC;
    }
    /**
     * Set accountIdRC value
     * @param string $accountIdRC
     * @return \Pggns\MidocoApi\Order\StructType\ImportMediatorChargesRequest
     */
    public function setAccountIdRC(?string $accountIdRC = null): self
    {
        // validation for constraint: string
        if (!is_null($accountIdRC) && !is_string($accountIdRC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountIdRC, true), gettype($accountIdRC)), __LINE__);
        }
        $this->accountIdRC = $accountIdRC;
        
        return $this;
    }
    /**
     * Get delimiter value
     * @return string|null
     */
    public function getDelimiter(): ?string
    {
        return $this->delimiter;
    }
    /**
     * Set delimiter value
     * @param string $delimiter
     * @return \Pggns\MidocoApi\Order\StructType\ImportMediatorChargesRequest
     */
    public function setDelimiter(?string $delimiter = '|'): self
    {
        // validation for constraint: string
        if (!is_null($delimiter) && !is_string($delimiter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delimiter, true), gettype($delimiter)), __LINE__);
        }
        $this->delimiter = $delimiter;
        
        return $this;
    }
    /**
     * Get decimalDelimiter value
     * @return string|null
     */
    public function getDecimalDelimiter(): ?string
    {
        return $this->decimalDelimiter;
    }
    /**
     * Set decimalDelimiter value
     * @param string $decimalDelimiter
     * @return \Pggns\MidocoApi\Order\StructType\ImportMediatorChargesRequest
     */
    public function setDecimalDelimiter(?string $decimalDelimiter = '.'): self
    {
        // validation for constraint: string
        if (!is_null($decimalDelimiter) && !is_string($decimalDelimiter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($decimalDelimiter, true), gettype($decimalDelimiter)), __LINE__);
        }
        $this->decimalDelimiter = $decimalDelimiter;
        
        return $this;
    }
    /**
     * Get isCharge value
     * @return bool|null
     */
    public function getIsCharge(): ?bool
    {
        return $this->isCharge;
    }
    /**
     * Set isCharge value
     * @param bool $isCharge
     * @return \Pggns\MidocoApi\Order\StructType\ImportMediatorChargesRequest
     */
    public function setIsCharge(?bool $isCharge = true): self
    {
        // validation for constraint: boolean
        if (!is_null($isCharge) && !is_bool($isCharge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCharge, true), gettype($isCharge)), __LINE__);
        }
        $this->isCharge = $isCharge;
        
        return $this;
    }
}
