<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteSettlementChargeForCompanyRequest StructType
 * @subpackage Structs
 */
class ExecuteSettlementChargeForCompanyRequest extends AbstractStructBase
{
    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $customerId;
    /**
     * The month
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $month;
    /**
     * The MidocoSettlementCharge
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: ordersd:MidocoSettlementCharge
     * @var \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO[]
     */
    protected array $MidocoSettlementCharge = [];
    /**
     * The chargeId
     * @var int|null
     */
    protected ?int $chargeId = null;
    /**
     * Constructor method for ExecuteSettlementChargeForCompanyRequest
     * @uses ExecuteSettlementChargeForCompanyRequest::setCustomerId()
     * @uses ExecuteSettlementChargeForCompanyRequest::setMonth()
     * @uses ExecuteSettlementChargeForCompanyRequest::setMidocoSettlementCharge()
     * @uses ExecuteSettlementChargeForCompanyRequest::setChargeId()
     * @param int $customerId
     * @param string $month
     * @param \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO[] $midocoSettlementCharge
     * @param int $chargeId
     */
    public function __construct(int $customerId, string $month, array $midocoSettlementCharge = [], ?int $chargeId = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setMonth($month)
            ->setMidocoSettlementCharge($midocoSettlementCharge)
            ->setChargeId($chargeId);
    }
    /**
     * Get customerId value
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteSettlementChargeForCompanyRequest
     */
    public function setCustomerId(int $customerId): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteSettlementChargeForCompanyRequest
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
     * Get MidocoSettlementCharge value
     * @return \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO[]
     */
    public function getMidocoSettlementCharge(): array
    {
        return $this->MidocoSettlementCharge;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSettlementCharge method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSettlementCharge method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSettlementChargeForArrayConstraintsFromSetMidocoSettlementCharge(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeSettlementChargeForCompanyRequestMidocoSettlementChargeItem) {
            // validation for constraint: itemType
            if (!$executeSettlementChargeForCompanyRequestMidocoSettlementChargeItem instanceof \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO) {
                $invalidValues[] = is_object($executeSettlementChargeForCompanyRequestMidocoSettlementChargeItem) ? get_class($executeSettlementChargeForCompanyRequestMidocoSettlementChargeItem) : sprintf('%s(%s)', gettype($executeSettlementChargeForCompanyRequestMidocoSettlementChargeItem), var_export($executeSettlementChargeForCompanyRequestMidocoSettlementChargeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSettlementCharge property can only contain items of type \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSettlementCharge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO[] $midocoSettlementCharge
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteSettlementChargeForCompanyRequest
     */
    public function setMidocoSettlementCharge(array $midocoSettlementCharge = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSettlementChargeArrayErrorMessage = self::validateMidocoSettlementChargeForArrayConstraintsFromSetMidocoSettlementCharge($midocoSettlementCharge))) {
            throw new InvalidArgumentException($midocoSettlementChargeArrayErrorMessage, __LINE__);
        }
        $this->MidocoSettlementCharge = $midocoSettlementCharge;
        
        return $this;
    }
    /**
     * Add item to MidocoSettlementCharge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteSettlementChargeForCompanyRequest
     */
    public function addToMidocoSettlementCharge(\Pggns\MidocoApi\Order\StructType\SettlementChargeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSettlementCharge property can only contain items of type \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSettlementCharge[] = $item;
        
        return $this;
    }
    /**
     * Get chargeId value
     * @return int|null
     */
    public function getChargeId(): ?int
    {
        return $this->chargeId;
    }
    /**
     * Set chargeId value
     * @param int $chargeId
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteSettlementChargeForCompanyRequest
     */
    public function setChargeId(?int $chargeId = null): self
    {
        // validation for constraint: int
        if (!is_null($chargeId) && !(is_int($chargeId) || ctype_digit($chargeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($chargeId, true), gettype($chargeId)), __LINE__);
        }
        $this->chargeId = $chargeId;
        
        return $this;
    }
}
