<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountEntriesForDebitorBalanceRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAccountEntriesForDebitorBalanceRequest extends AbstractStructBase
{
    /**
     * The AccountEntriesSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: AccountEntriesSearchCriteria
     * @var \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria $AccountEntriesSearchCriteria = null;
    /**
     * The MidocoOrderByInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:MidocoOrderByInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo[]
     */
    protected ?array $MidocoOrderByInfo = null;
    /**
     * The beginIndex
     * @var int|null
     */
    protected ?int $beginIndex = null;
    /**
     * The endIndex
     * @var int|null
     */
    protected ?int $endIndex = null;
    /**
     * The isUseForeignCurrency
     * @var bool|null
     */
    protected ?bool $isUseForeignCurrency = null;
    /**
     * Constructor method for GetAccountEntriesForDebitorBalanceRequest
     * @uses GetAccountEntriesForDebitorBalanceRequest::setAccountEntriesSearchCriteria()
     * @uses GetAccountEntriesForDebitorBalanceRequest::setMidocoOrderByInfo()
     * @uses GetAccountEntriesForDebitorBalanceRequest::setBeginIndex()
     * @uses GetAccountEntriesForDebitorBalanceRequest::setEndIndex()
     * @uses GetAccountEntriesForDebitorBalanceRequest::setIsUseForeignCurrency()
     * @param \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria $accountEntriesSearchCriteria
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo[] $midocoOrderByInfo
     * @param int $beginIndex
     * @param int $endIndex
     * @param bool $isUseForeignCurrency
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria $accountEntriesSearchCriteria = null, ?array $midocoOrderByInfo = null, ?int $beginIndex = null, ?int $endIndex = null, ?bool $isUseForeignCurrency = null)
    {
        $this
            ->setAccountEntriesSearchCriteria($accountEntriesSearchCriteria)
            ->setMidocoOrderByInfo($midocoOrderByInfo)
            ->setBeginIndex($beginIndex)
            ->setEndIndex($endIndex)
            ->setIsUseForeignCurrency($isUseForeignCurrency);
    }
    /**
     * Get AccountEntriesSearchCriteria value
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria|null
     */
    public function getAccountEntriesSearchCriteria(): ?\Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
    {
        return $this->AccountEntriesSearchCriteria;
    }
    /**
     * Set AccountEntriesSearchCriteria value
     * @param \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria $accountEntriesSearchCriteria
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorBalanceRequest
     */
    public function setAccountEntriesSearchCriteria(?\Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria $accountEntriesSearchCriteria = null): self
    {
        $this->AccountEntriesSearchCriteria = $accountEntriesSearchCriteria;
        
        return $this;
    }
    /**
     * Get MidocoOrderByInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo[]
     */
    public function getMidocoOrderByInfo(): ?array
    {
        return $this->MidocoOrderByInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrderByInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderByInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderByInfoForArrayConstraintFromSetMidocoOrderByInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAccountEntriesForDebitorBalanceRequestMidocoOrderByInfoItem) {
            // validation for constraint: itemType
            if (!$getAccountEntriesForDebitorBalanceRequestMidocoOrderByInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo) {
                $invalidValues[] = is_object($getAccountEntriesForDebitorBalanceRequestMidocoOrderByInfoItem) ? get_class($getAccountEntriesForDebitorBalanceRequestMidocoOrderByInfoItem) : sprintf('%s(%s)', gettype($getAccountEntriesForDebitorBalanceRequestMidocoOrderByInfoItem), var_export($getAccountEntriesForDebitorBalanceRequestMidocoOrderByInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderByInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderByInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo[] $midocoOrderByInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorBalanceRequest
     */
    public function setMidocoOrderByInfo(?array $midocoOrderByInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderByInfoArrayErrorMessage = self::validateMidocoOrderByInfoForArrayConstraintFromSetMidocoOrderByInfo($midocoOrderByInfo))) {
            throw new InvalidArgumentException($midocoOrderByInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderByInfo = $midocoOrderByInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderByInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorBalanceRequest
     */
    public function addToMidocoOrderByInfo(\Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderByInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderByInfo[] = $item;
        
        return $this;
    }
    /**
     * Get beginIndex value
     * @return int|null
     */
    public function getBeginIndex(): ?int
    {
        return $this->beginIndex;
    }
    /**
     * Set beginIndex value
     * @param int $beginIndex
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorBalanceRequest
     */
    public function setBeginIndex(?int $beginIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($beginIndex) && !(is_int($beginIndex) || ctype_digit($beginIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($beginIndex, true), gettype($beginIndex)), __LINE__);
        }
        $this->beginIndex = $beginIndex;
        
        return $this;
    }
    /**
     * Get endIndex value
     * @return int|null
     */
    public function getEndIndex(): ?int
    {
        return $this->endIndex;
    }
    /**
     * Set endIndex value
     * @param int $endIndex
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorBalanceRequest
     */
    public function setEndIndex(?int $endIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($endIndex) && !(is_int($endIndex) || ctype_digit($endIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($endIndex, true), gettype($endIndex)), __LINE__);
        }
        $this->endIndex = $endIndex;
        
        return $this;
    }
    /**
     * Get isUseForeignCurrency value
     * @return bool|null
     */
    public function getIsUseForeignCurrency(): ?bool
    {
        return $this->isUseForeignCurrency;
    }
    /**
     * Set isUseForeignCurrency value
     * @param bool $isUseForeignCurrency
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorBalanceRequest
     */
    public function setIsUseForeignCurrency(?bool $isUseForeignCurrency = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isUseForeignCurrency) && !is_bool($isUseForeignCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUseForeignCurrency, true), gettype($isUseForeignCurrency)), __LINE__);
        }
        $this->isUseForeignCurrency = $isUseForeignCurrency;
        
        return $this;
    }
}
