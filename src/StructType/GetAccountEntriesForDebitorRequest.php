<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountEntriesForDebitorRequest StructType
 * @subpackage Structs
 */
class GetAccountEntriesForDebitorRequest extends AbstractStructBase
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
    protected array $MidocoOrderByInfo = [];
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
     * The useCacheForPages
     * @var bool|null
     */
    protected ?bool $useCacheForPages = null;
    /**
     * Constructor method for GetAccountEntriesForDebitorRequest
     * @uses GetAccountEntriesForDebitorRequest::setAccountEntriesSearchCriteria()
     * @uses GetAccountEntriesForDebitorRequest::setMidocoOrderByInfo()
     * @uses GetAccountEntriesForDebitorRequest::setBeginIndex()
     * @uses GetAccountEntriesForDebitorRequest::setEndIndex()
     * @uses GetAccountEntriesForDebitorRequest::setUseCacheForPages()
     * @param \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria $accountEntriesSearchCriteria
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo[] $midocoOrderByInfo
     * @param int $beginIndex
     * @param int $endIndex
     * @param bool $useCacheForPages
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria $accountEntriesSearchCriteria = null, array $midocoOrderByInfo = [], ?int $beginIndex = null, ?int $endIndex = null, ?bool $useCacheForPages = null)
    {
        $this
            ->setAccountEntriesSearchCriteria($accountEntriesSearchCriteria)
            ->setMidocoOrderByInfo($midocoOrderByInfo)
            ->setBeginIndex($beginIndex)
            ->setEndIndex($endIndex)
            ->setUseCacheForPages($useCacheForPages);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorRequest
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
    public function getMidocoOrderByInfo(): array
    {
        return $this->MidocoOrderByInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderByInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderByInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderByInfoForArrayConstraintsFromSetMidocoOrderByInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAccountEntriesForDebitorRequestMidocoOrderByInfoItem) {
            // validation for constraint: itemType
            if (!$getAccountEntriesForDebitorRequestMidocoOrderByInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo) {
                $invalidValues[] = is_object($getAccountEntriesForDebitorRequestMidocoOrderByInfoItem) ? get_class($getAccountEntriesForDebitorRequestMidocoOrderByInfoItem) : sprintf('%s(%s)', gettype($getAccountEntriesForDebitorRequestMidocoOrderByInfoItem), var_export($getAccountEntriesForDebitorRequestMidocoOrderByInfoItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorRequest
     */
    public function setMidocoOrderByInfo(array $midocoOrderByInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderByInfoArrayErrorMessage = self::validateMidocoOrderByInfoForArrayConstraintsFromSetMidocoOrderByInfo($midocoOrderByInfo))) {
            throw new InvalidArgumentException($midocoOrderByInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderByInfo = $midocoOrderByInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderByInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderByInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorRequest
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
     * Get useCacheForPages value
     * @return bool|null
     */
    public function getUseCacheForPages(): ?bool
    {
        return $this->useCacheForPages;
    }
    /**
     * Set useCacheForPages value
     * @param bool $useCacheForPages
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorRequest
     */
    public function setUseCacheForPages(?bool $useCacheForPages = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useCacheForPages) && !is_bool($useCacheForPages)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useCacheForPages, true), gettype($useCacheForPages)), __LINE__);
        }
        $this->useCacheForPages = $useCacheForPages;
        
        return $this;
    }
}
