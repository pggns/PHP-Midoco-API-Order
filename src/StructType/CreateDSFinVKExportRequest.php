<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateDSFinVKExportRequest StructType
 * @subpackage Structs
 */
class CreateDSFinVKExportRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The cashBookId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $cashBookId = [];
    /**
     * The tssId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $tssId = null;
    /**
     * The complete
     * @var bool|null
     */
    protected ?bool $complete = null;
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
     * Constructor method for CreateDSFinVKExportRequest
     * @uses CreateDSFinVKExportRequest::setUnitName()
     * @uses CreateDSFinVKExportRequest::setCashBookId()
     * @uses CreateDSFinVKExportRequest::setTssId()
     * @uses CreateDSFinVKExportRequest::setComplete()
     * @uses CreateDSFinVKExportRequest::setCashBalanceDateFrom()
     * @uses CreateDSFinVKExportRequest::setCashBalanceDateTo()
     * @uses CreateDSFinVKExportRequest::setCashBalanceNoFrom()
     * @uses CreateDSFinVKExportRequest::setCashBalanceNoTo()
     * @param string $unitName
     * @param int[] $cashBookId
     * @param string $tssId
     * @param bool $complete
     * @param string $cashBalanceDateFrom
     * @param string $cashBalanceDateTo
     * @param int $cashBalanceNoFrom
     * @param int $cashBalanceNoTo
     */
    public function __construct(?string $unitName = null, array $cashBookId = [], ?string $tssId = null, ?bool $complete = null, ?string $cashBalanceDateFrom = null, ?string $cashBalanceDateTo = null, ?int $cashBalanceNoFrom = null, ?int $cashBalanceNoTo = null)
    {
        $this
            ->setUnitName($unitName)
            ->setCashBookId($cashBookId)
            ->setTssId($tssId)
            ->setComplete($complete)
            ->setCashBalanceDateFrom($cashBalanceDateFrom)
            ->setCashBalanceDateTo($cashBalanceDateTo)
            ->setCashBalanceNoFrom($cashBalanceNoFrom)
            ->setCashBalanceNoTo($cashBalanceNoTo);
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
     * @return \Pggns\MidocoApi\Order\StructType\CreateDSFinVKExportRequest
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
    /**
     * Get cashBookId value
     * @return int[]
     */
    public function getCashBookId(): array
    {
        return $this->cashBookId;
    }
    /**
     * This method is responsible for validating the values passed to the setCashBookId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCashBookId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCashBookIdForArrayConstraintsFromSetCashBookId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $createDSFinVKExportRequestCashBookIdItem) {
            // validation for constraint: itemType
            if (!(is_int($createDSFinVKExportRequestCashBookIdItem) || ctype_digit($createDSFinVKExportRequestCashBookIdItem))) {
                $invalidValues[] = is_object($createDSFinVKExportRequestCashBookIdItem) ? get_class($createDSFinVKExportRequestCashBookIdItem) : sprintf('%s(%s)', gettype($createDSFinVKExportRequestCashBookIdItem), var_export($createDSFinVKExportRequestCashBookIdItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\CreateDSFinVKExportRequest
     */
    public function setCashBookId(array $cashBookId = []): self
    {
        // validation for constraint: array
        if ('' !== ($cashBookIdArrayErrorMessage = self::validateCashBookIdForArrayConstraintsFromSetCashBookId($cashBookId))) {
            throw new InvalidArgumentException($cashBookIdArrayErrorMessage, __LINE__);
        }
        $this->cashBookId = $cashBookId;
        
        return $this;
    }
    /**
     * Add item to cashBookId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\CreateDSFinVKExportRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\CreateDSFinVKExportRequest
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
    /**
     * Get complete value
     * @return bool|null
     */
    public function getComplete(): ?bool
    {
        return $this->complete;
    }
    /**
     * Set complete value
     * @param bool $complete
     * @return \Pggns\MidocoApi\Order\StructType\CreateDSFinVKExportRequest
     */
    public function setComplete(?bool $complete = null): self
    {
        // validation for constraint: boolean
        if (!is_null($complete) && !is_bool($complete)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($complete, true), gettype($complete)), __LINE__);
        }
        $this->complete = $complete;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CreateDSFinVKExportRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\CreateDSFinVKExportRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\CreateDSFinVKExportRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\CreateDSFinVKExportRequest
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
}
