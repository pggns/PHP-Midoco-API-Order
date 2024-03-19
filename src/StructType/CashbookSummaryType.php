<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CashbookSummaryType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CashbookSummaryType extends AbstractStructBase
{
    /**
     * The MidocoCashbookSummaryDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoCashbookSummaryDetail
     * @var \Pggns\MidocoApi\Order\StructType\CashbookSummaryDetailType[]
     */
    protected ?array $MidocoCashbookSummaryDetail = null;
    /**
     * The cashBookId
     * @var string|null
     */
    protected ?string $cashBookId = null;
    /**
     * The userName
     * @var string|null
     */
    protected ?string $userName = null;
    /**
     * The totalAmount
     * @var float|null
     */
    protected ?float $totalAmount = null;
    /**
     * The noOfReceipts
     * @var int|null
     */
    protected ?int $noOfReceipts = null;
    /**
     * Constructor method for CashbookSummaryType
     * @uses CashbookSummaryType::setMidocoCashbookSummaryDetail()
     * @uses CashbookSummaryType::setCashBookId()
     * @uses CashbookSummaryType::setUserName()
     * @uses CashbookSummaryType::setTotalAmount()
     * @uses CashbookSummaryType::setNoOfReceipts()
     * @param \Pggns\MidocoApi\Order\StructType\CashbookSummaryDetailType[] $midocoCashbookSummaryDetail
     * @param string $cashBookId
     * @param string $userName
     * @param float $totalAmount
     * @param int $noOfReceipts
     */
    public function __construct(?array $midocoCashbookSummaryDetail = null, ?string $cashBookId = null, ?string $userName = null, ?float $totalAmount = null, ?int $noOfReceipts = null)
    {
        $this
            ->setMidocoCashbookSummaryDetail($midocoCashbookSummaryDetail)
            ->setCashBookId($cashBookId)
            ->setUserName($userName)
            ->setTotalAmount($totalAmount)
            ->setNoOfReceipts($noOfReceipts);
    }
    /**
     * Get MidocoCashbookSummaryDetail value
     * @return \Pggns\MidocoApi\Order\StructType\CashbookSummaryDetailType[]
     */
    public function getMidocoCashbookSummaryDetail(): ?array
    {
        return $this->MidocoCashbookSummaryDetail;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCashbookSummaryDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCashbookSummaryDetail method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCashbookSummaryDetailForArrayConstraintFromSetMidocoCashbookSummaryDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $cashbookSummaryTypeMidocoCashbookSummaryDetailItem) {
            // validation for constraint: itemType
            if (!$cashbookSummaryTypeMidocoCashbookSummaryDetailItem instanceof \Pggns\MidocoApi\Order\StructType\CashbookSummaryDetailType) {
                $invalidValues[] = is_object($cashbookSummaryTypeMidocoCashbookSummaryDetailItem) ? get_class($cashbookSummaryTypeMidocoCashbookSummaryDetailItem) : sprintf('%s(%s)', gettype($cashbookSummaryTypeMidocoCashbookSummaryDetailItem), var_export($cashbookSummaryTypeMidocoCashbookSummaryDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCashbookSummaryDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\CashbookSummaryDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCashbookSummaryDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CashbookSummaryDetailType[] $midocoCashbookSummaryDetail
     * @return \Pggns\MidocoApi\Order\StructType\CashbookSummaryType
     */
    public function setMidocoCashbookSummaryDetail(?array $midocoCashbookSummaryDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCashbookSummaryDetailArrayErrorMessage = self::validateMidocoCashbookSummaryDetailForArrayConstraintFromSetMidocoCashbookSummaryDetail($midocoCashbookSummaryDetail))) {
            throw new InvalidArgumentException($midocoCashbookSummaryDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoCashbookSummaryDetail = $midocoCashbookSummaryDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoCashbookSummaryDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CashbookSummaryDetailType $item
     * @return \Pggns\MidocoApi\Order\StructType\CashbookSummaryType
     */
    public function addToMidocoCashbookSummaryDetail(\Pggns\MidocoApi\Order\StructType\CashbookSummaryDetailType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CashbookSummaryDetailType) {
            throw new InvalidArgumentException(sprintf('The MidocoCashbookSummaryDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\CashbookSummaryDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCashbookSummaryDetail[] = $item;
        
        return $this;
    }
    /**
     * Get cashBookId value
     * @return string|null
     */
    public function getCashBookId(): ?string
    {
        return $this->cashBookId;
    }
    /**
     * Set cashBookId value
     * @param string $cashBookId
     * @return \Pggns\MidocoApi\Order\StructType\CashbookSummaryType
     */
    public function setCashBookId(?string $cashBookId = null): self
    {
        // validation for constraint: string
        if (!is_null($cashBookId) && !is_string($cashBookId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cashBookId, true), gettype($cashBookId)), __LINE__);
        }
        $this->cashBookId = $cashBookId;
        
        return $this;
    }
    /**
     * Get userName value
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }
    /**
     * Set userName value
     * @param string $userName
     * @return \Pggns\MidocoApi\Order\StructType\CashbookSummaryType
     */
    public function setUserName(?string $userName = null): self
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->userName = $userName;
        
        return $this;
    }
    /**
     * Get totalAmount value
     * @return float|null
     */
    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }
    /**
     * Set totalAmount value
     * @param float $totalAmount
     * @return \Pggns\MidocoApi\Order\StructType\CashbookSummaryType
     */
    public function setTotalAmount(?float $totalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalAmount) && !(is_float($totalAmount) || is_numeric($totalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalAmount, true), gettype($totalAmount)), __LINE__);
        }
        $this->totalAmount = $totalAmount;
        
        return $this;
    }
    /**
     * Get noOfReceipts value
     * @return int|null
     */
    public function getNoOfReceipts(): ?int
    {
        return $this->noOfReceipts;
    }
    /**
     * Set noOfReceipts value
     * @param int $noOfReceipts
     * @return \Pggns\MidocoApi\Order\StructType\CashbookSummaryType
     */
    public function setNoOfReceipts(?int $noOfReceipts = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfReceipts) && !(is_int($noOfReceipts) || ctype_digit($noOfReceipts))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfReceipts, true), gettype($noOfReceipts)), __LINE__);
        }
        $this->noOfReceipts = $noOfReceipts;
        
        return $this;
    }
}
