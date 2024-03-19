<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchDSFinVKExportRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchDSFinVKExportRequest extends AbstractStructBase
{
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $unitName = null;
    /**
     * The cashBookId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $cashBookId = null;
    /**
     * The cashBalanceDateFrom
     * @var string|null
     */
    protected ?string $cashBalanceDateFrom = null;
    /**
     * The cashBalanceDateTo
     * @var string|null
     */
    protected ?string $cashBalanceDateTo = null;
    /**
     * The cashBalanceNoFrom
     * @var int|null
     */
    protected ?int $cashBalanceNoFrom = null;
    /**
     * The cashBalanceNoTo
     * @var int|null
     */
    protected ?int $cashBalanceNoTo = null;
    /**
     * The tssId
     * @var string|null
     */
    protected ?string $tssId = null;
    /**
     * Constructor method for SearchDSFinVKExportRequest
     * @uses SearchDSFinVKExportRequest::setUnitName()
     * @uses SearchDSFinVKExportRequest::setCashBookId()
     * @uses SearchDSFinVKExportRequest::setCashBalanceDateFrom()
     * @uses SearchDSFinVKExportRequest::setCashBalanceDateTo()
     * @uses SearchDSFinVKExportRequest::setCashBalanceNoFrom()
     * @uses SearchDSFinVKExportRequest::setCashBalanceNoTo()
     * @uses SearchDSFinVKExportRequest::setTssId()
     * @param string[] $unitName
     * @param int[] $cashBookId
     * @param string $cashBalanceDateFrom
     * @param string $cashBalanceDateTo
     * @param int $cashBalanceNoFrom
     * @param int $cashBalanceNoTo
     * @param string $tssId
     */
    public function __construct(?array $unitName = null, ?array $cashBookId = null, ?string $cashBalanceDateFrom = null, ?string $cashBalanceDateTo = null, ?int $cashBalanceNoFrom = null, ?int $cashBalanceNoTo = null, ?string $tssId = null)
    {
        $this
            ->setUnitName($unitName)
            ->setCashBookId($cashBookId)
            ->setCashBalanceDateFrom($cashBalanceDateFrom)
            ->setCashBalanceDateTo($cashBalanceDateTo)
            ->setCashBalanceNoFrom($cashBalanceNoFrom)
            ->setCashBalanceNoTo($cashBalanceNoTo)
            ->setTssId($tssId);
    }
    /**
     * Get unitName value
     * @return string[]
     */
    public function getUnitName(): ?array
    {
        return $this->unitName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUnitName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitNameForArrayConstraintFromSetUnitName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchDSFinVKExportRequestUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($searchDSFinVKExportRequestUnitNameItem)) {
                $invalidValues[] = is_object($searchDSFinVKExportRequestUnitNameItem) ? get_class($searchDSFinVKExportRequestUnitNameItem) : sprintf('%s(%s)', gettype($searchDSFinVKExportRequestUnitNameItem), var_export($searchDSFinVKExportRequestUnitNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The unitName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set unitName value
     * @throws InvalidArgumentException
     * @param string[] $unitName
     * @return \Pggns\MidocoApi\Order\StructType\SearchDSFinVKExportRequest
     */
    public function setUnitName(?array $unitName = null): self
    {
        // validation for constraint: array
        if ('' !== ($unitNameArrayErrorMessage = self::validateUnitNameForArrayConstraintFromSetUnitName($unitName))) {
            throw new InvalidArgumentException($unitNameArrayErrorMessage, __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Add item to unitName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchDSFinVKExportRequest
     */
    public function addToUnitName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The unitName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->unitName[] = $item;
        
        return $this;
    }
    /**
     * Get cashBookId value
     * @return int[]
     */
    public function getCashBookId(): ?array
    {
        return $this->cashBookId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCashBookId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCashBookId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCashBookIdForArrayConstraintFromSetCashBookId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchDSFinVKExportRequestCashBookIdItem) {
            // validation for constraint: itemType
            if (!(is_int($searchDSFinVKExportRequestCashBookIdItem) || ctype_digit($searchDSFinVKExportRequestCashBookIdItem))) {
                $invalidValues[] = is_object($searchDSFinVKExportRequestCashBookIdItem) ? get_class($searchDSFinVKExportRequestCashBookIdItem) : sprintf('%s(%s)', gettype($searchDSFinVKExportRequestCashBookIdItem), var_export($searchDSFinVKExportRequestCashBookIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The cashBookId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set cashBookId value
     * @throws InvalidArgumentException
     * @param int[] $cashBookId
     * @return \Pggns\MidocoApi\Order\StructType\SearchDSFinVKExportRequest
     */
    public function setCashBookId(?array $cashBookId = null): self
    {
        // validation for constraint: array
        if ('' !== ($cashBookIdArrayErrorMessage = self::validateCashBookIdForArrayConstraintFromSetCashBookId($cashBookId))) {
            throw new InvalidArgumentException($cashBookIdArrayErrorMessage, __LINE__);
        }
        $this->cashBookId = $cashBookId;
        
        return $this;
    }
    /**
     * Add item to cashBookId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchDSFinVKExportRequest
     */
    public function addToCashBookId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The cashBookId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->cashBookId[] = $item;
        
        return $this;
    }
    /**
     * Get cashBalanceDateFrom value
     * @return string|null
     */
    public function getCashBalanceDateFrom(): ?string
    {
        return $this->cashBalanceDateFrom;
    }
    /**
     * Set cashBalanceDateFrom value
     * @param string $cashBalanceDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\SearchDSFinVKExportRequest
     */
    public function setCashBalanceDateFrom(?string $cashBalanceDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($cashBalanceDateFrom) && !is_string($cashBalanceDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cashBalanceDateFrom, true), gettype($cashBalanceDateFrom)), __LINE__);
        }
        $this->cashBalanceDateFrom = $cashBalanceDateFrom;
        
        return $this;
    }
    /**
     * Get cashBalanceDateTo value
     * @return string|null
     */
    public function getCashBalanceDateTo(): ?string
    {
        return $this->cashBalanceDateTo;
    }
    /**
     * Set cashBalanceDateTo value
     * @param string $cashBalanceDateTo
     * @return \Pggns\MidocoApi\Order\StructType\SearchDSFinVKExportRequest
     */
    public function setCashBalanceDateTo(?string $cashBalanceDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($cashBalanceDateTo) && !is_string($cashBalanceDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cashBalanceDateTo, true), gettype($cashBalanceDateTo)), __LINE__);
        }
        $this->cashBalanceDateTo = $cashBalanceDateTo;
        
        return $this;
    }
    /**
     * Get cashBalanceNoFrom value
     * @return int|null
     */
    public function getCashBalanceNoFrom(): ?int
    {
        return $this->cashBalanceNoFrom;
    }
    /**
     * Set cashBalanceNoFrom value
     * @param int $cashBalanceNoFrom
     * @return \Pggns\MidocoApi\Order\StructType\SearchDSFinVKExportRequest
     */
    public function setCashBalanceNoFrom(?int $cashBalanceNoFrom = null): self
    {
        // validation for constraint: int
        if (!is_null($cashBalanceNoFrom) && !(is_int($cashBalanceNoFrom) || ctype_digit($cashBalanceNoFrom))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cashBalanceNoFrom, true), gettype($cashBalanceNoFrom)), __LINE__);
        }
        $this->cashBalanceNoFrom = $cashBalanceNoFrom;
        
        return $this;
    }
    /**
     * Get cashBalanceNoTo value
     * @return int|null
     */
    public function getCashBalanceNoTo(): ?int
    {
        return $this->cashBalanceNoTo;
    }
    /**
     * Set cashBalanceNoTo value
     * @param int $cashBalanceNoTo
     * @return \Pggns\MidocoApi\Order\StructType\SearchDSFinVKExportRequest
     */
    public function setCashBalanceNoTo(?int $cashBalanceNoTo = null): self
    {
        // validation for constraint: int
        if (!is_null($cashBalanceNoTo) && !(is_int($cashBalanceNoTo) || ctype_digit($cashBalanceNoTo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cashBalanceNoTo, true), gettype($cashBalanceNoTo)), __LINE__);
        }
        $this->cashBalanceNoTo = $cashBalanceNoTo;
        
        return $this;
    }
    /**
     * Get tssId value
     * @return string|null
     */
    public function getTssId(): ?string
    {
        return $this->tssId;
    }
    /**
     * Set tssId value
     * @param string $tssId
     * @return \Pggns\MidocoApi\Order\StructType\SearchDSFinVKExportRequest
     */
    public function setTssId(?string $tssId = null): self
    {
        // validation for constraint: string
        if (!is_null($tssId) && !is_string($tssId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tssId, true), gettype($tssId)), __LINE__);
        }
        $this->tssId = $tssId;
        
        return $this;
    }
}
