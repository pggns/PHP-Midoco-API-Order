<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrepareMediatorSettlementRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: prepare the mediator settlement - generates mediators list
 * @subpackage Structs
 */
class PrepareMediatorSettlementRequest extends AbstractStructBase
{
    /**
     * The month
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $month;
    /**
     * The mediatorId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The settlementType
     * @var string|null
     */
    protected ?string $settlementType = null;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - base: xs:dateTime
     * - pattern: dd.MM.yyyy
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * The ignoreProvision
     * @var bool|null
     */
    protected ?bool $ignoreProvision = null;
    /**
     * Constructor method for PrepareMediatorSettlementRequest
     * @uses PrepareMediatorSettlementRequest::setMonth()
     * @uses PrepareMediatorSettlementRequest::setMediatorId()
     * @uses PrepareMediatorSettlementRequest::setSettlementType()
     * @uses PrepareMediatorSettlementRequest::setDate()
     * @uses PrepareMediatorSettlementRequest::setIgnoreProvision()
     * @param string $month
     * @param string $mediatorId
     * @param string $settlementType
     * @param string $date
     * @param bool $ignoreProvision
     */
    public function __construct(string $month, ?string $mediatorId = null, ?string $settlementType = null, ?string $date = null, ?bool $ignoreProvision = null)
    {
        $this
            ->setMonth($month)
            ->setMediatorId($mediatorId)
            ->setSettlementType($settlementType)
            ->setDate($date)
            ->setIgnoreProvision($ignoreProvision);
    }
    /**
     * Get month value
     * @return string
     */
    public function getMonth(): string
    {
        return $this->month;
    }
    /**
     * Set month value
     * @uses \Pggns\MidocoApi\Order\EnumType\Month::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\Month::getValidValues()
     * @throws InvalidArgumentException
     * @param string $month
     * @return \Pggns\MidocoApi\Order\StructType\PrepareMediatorSettlementRequest
     */
    public function setMonth(string $month): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\Month::valueIsValid($month)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\Month', is_array($month) ? implode(', ', $month) : var_export($month, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\Month::getValidValues())), __LINE__);
        }
        $this->month = $month;
        
        return $this;
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\PrepareMediatorSettlementRequest
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get settlementType value
     * @return string|null
     */
    public function getSettlementType(): ?string
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param string $settlementType
     * @return \Pggns\MidocoApi\Order\StructType\PrepareMediatorSettlementRequest
     */
    public function setSettlementType(?string $settlementType = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementType) && !is_string($settlementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Pggns\MidocoApi\Order\StructType\PrepareMediatorSettlementRequest
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        // validation for constraint: pattern(dd.MM.yyyy)
        if (!is_null($date) && !preg_match('/dd.MM.yyyy/', $date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /dd.MM.yyyy/', var_export($date, true)), __LINE__);
        }
        $this->date = $date;
        
        return $this;
    }
    /**
     * Get ignoreProvision value
     * @return bool|null
     */
    public function getIgnoreProvision(): ?bool
    {
        return $this->ignoreProvision;
    }
    /**
     * Set ignoreProvision value
     * @param bool $ignoreProvision
     * @return \Pggns\MidocoApi\Order\StructType\PrepareMediatorSettlementRequest
     */
    public function setIgnoreProvision(?bool $ignoreProvision = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ignoreProvision) && !is_bool($ignoreProvision)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignoreProvision, true), gettype($ignoreProvision)), __LINE__);
        }
        $this->ignoreProvision = $ignoreProvision;
        
        return $this;
    }
}
