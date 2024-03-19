<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMilesAndMoreEarnInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: The promotion that can be applied. The transaction provides the information about the actually applied promotion. | The most recent Miles & More transaction.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoMilesAndMoreEarnInfoType extends MilesAndMoreEarnInfoDTO
{
    /**
     * The MidocoMilesAndMoreEarnTransaction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoMilesAndMoreEarnTransaction
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction $MidocoMilesAndMoreEarnTransaction = null;
    /**
     * The MidocoMilesAndMoreEarnTransactionReference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMilesAndMoreEarnTransactionReference
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransactionReference[]
     */
    protected ?array $MidocoMilesAndMoreEarnTransactionReference = null;
    /**
     * The MidocoMilesAndMorePromotion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ordersd:MidocoMilesAndMorePromotion
     * @var \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO $MidocoMilesAndMorePromotion = null;
    /**
     * The calculatedMiles
     * Meta information extracted from the WSDL
     * - documentation: The amount of miles that can be earned. The transaction provides the information how many miles are actually earned.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $calculatedMiles = null;
    /**
     * The calculatedDueDate
     * Meta information extracted from the WSDL
     * - documentation: The date on which the miles are due. The transaction provides the information when the miles are actually due.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $calculatedDueDate = null;
    /**
     * The IsChanged
     * Meta information extracted from the WSDL
     * - documentation: Filled in a SaveMilesAndMoreEarnSelectionResponse to convey whether the MilesAndMoreEarnInfo was changed.
     * @var bool|null
     */
    protected ?bool $IsChanged = null;
    /**
     * Constructor method for MidocoMilesAndMoreEarnInfoType
     * @uses MidocoMilesAndMoreEarnInfoType::setMidocoMilesAndMoreEarnTransaction()
     * @uses MidocoMilesAndMoreEarnInfoType::setMidocoMilesAndMoreEarnTransactionReference()
     * @uses MidocoMilesAndMoreEarnInfoType::setMidocoMilesAndMorePromotion()
     * @uses MidocoMilesAndMoreEarnInfoType::setCalculatedMiles()
     * @uses MidocoMilesAndMoreEarnInfoType::setCalculatedDueDate()
     * @uses MidocoMilesAndMoreEarnInfoType::setIsChanged()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction $midocoMilesAndMoreEarnTransaction
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransactionReference[] $midocoMilesAndMoreEarnTransactionReference
     * @param \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO $midocoMilesAndMorePromotion
     * @param int $calculatedMiles
     * @param string $calculatedDueDate
     * @param bool $isChanged
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction $midocoMilesAndMoreEarnTransaction = null, ?array $midocoMilesAndMoreEarnTransactionReference = null, ?\Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO $midocoMilesAndMorePromotion = null, ?int $calculatedMiles = null, ?string $calculatedDueDate = null, ?bool $isChanged = null)
    {
        $this
            ->setMidocoMilesAndMoreEarnTransaction($midocoMilesAndMoreEarnTransaction)
            ->setMidocoMilesAndMoreEarnTransactionReference($midocoMilesAndMoreEarnTransactionReference)
            ->setMidocoMilesAndMorePromotion($midocoMilesAndMorePromotion)
            ->setCalculatedMiles($calculatedMiles)
            ->setCalculatedDueDate($calculatedDueDate)
            ->setIsChanged($isChanged);
    }
    /**
     * Get MidocoMilesAndMoreEarnTransaction value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction|null
     */
    public function getMidocoMilesAndMoreEarnTransaction(): ?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction
    {
        return $this->MidocoMilesAndMoreEarnTransaction;
    }
    /**
     * Set MidocoMilesAndMoreEarnTransaction value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction $midocoMilesAndMoreEarnTransaction
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType
     */
    public function setMidocoMilesAndMoreEarnTransaction(?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction $midocoMilesAndMoreEarnTransaction = null): self
    {
        $this->MidocoMilesAndMoreEarnTransaction = $midocoMilesAndMoreEarnTransaction;
        
        return $this;
    }
    /**
     * Get MidocoMilesAndMoreEarnTransactionReference value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransactionReference[]
     */
    public function getMidocoMilesAndMoreEarnTransactionReference(): ?array
    {
        return $this->MidocoMilesAndMoreEarnTransactionReference;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMilesAndMoreEarnTransactionReference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMilesAndMoreEarnTransactionReference method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMilesAndMoreEarnTransactionReferenceForArrayConstraintFromSetMidocoMilesAndMoreEarnTransactionReference(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoMilesAndMoreEarnInfoTypeMidocoMilesAndMoreEarnTransactionReferenceItem) {
            // validation for constraint: itemType
            if (!$midocoMilesAndMoreEarnInfoTypeMidocoMilesAndMoreEarnTransactionReferenceItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransactionReference) {
                $invalidValues[] = is_object($midocoMilesAndMoreEarnInfoTypeMidocoMilesAndMoreEarnTransactionReferenceItem) ? get_class($midocoMilesAndMoreEarnInfoTypeMidocoMilesAndMoreEarnTransactionReferenceItem) : sprintf('%s(%s)', gettype($midocoMilesAndMoreEarnInfoTypeMidocoMilesAndMoreEarnTransactionReferenceItem), var_export($midocoMilesAndMoreEarnInfoTypeMidocoMilesAndMoreEarnTransactionReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMilesAndMoreEarnTransactionReference property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransactionReference, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMilesAndMoreEarnTransactionReference value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransactionReference[] $midocoMilesAndMoreEarnTransactionReference
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType
     */
    public function setMidocoMilesAndMoreEarnTransactionReference(?array $midocoMilesAndMoreEarnTransactionReference = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMilesAndMoreEarnTransactionReferenceArrayErrorMessage = self::validateMidocoMilesAndMoreEarnTransactionReferenceForArrayConstraintFromSetMidocoMilesAndMoreEarnTransactionReference($midocoMilesAndMoreEarnTransactionReference))) {
            throw new InvalidArgumentException($midocoMilesAndMoreEarnTransactionReferenceArrayErrorMessage, __LINE__);
        }
        $this->MidocoMilesAndMoreEarnTransactionReference = $midocoMilesAndMoreEarnTransactionReference;
        
        return $this;
    }
    /**
     * Add item to MidocoMilesAndMoreEarnTransactionReference value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransactionReference $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType
     */
    public function addToMidocoMilesAndMoreEarnTransactionReference(\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransactionReference $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransactionReference) {
            throw new InvalidArgumentException(sprintf('The MidocoMilesAndMoreEarnTransactionReference property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransactionReference, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMilesAndMoreEarnTransactionReference[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMilesAndMorePromotion value
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO|null
     */
    public function getMidocoMilesAndMorePromotion(): ?\Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO
    {
        return $this->MidocoMilesAndMorePromotion;
    }
    /**
     * Set MidocoMilesAndMorePromotion value
     * @param \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO $midocoMilesAndMorePromotion
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType
     */
    public function setMidocoMilesAndMorePromotion(?\Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO $midocoMilesAndMorePromotion = null): self
    {
        $this->MidocoMilesAndMorePromotion = $midocoMilesAndMorePromotion;
        
        return $this;
    }
    /**
     * Get calculatedMiles value
     * @return int|null
     */
    public function getCalculatedMiles(): ?int
    {
        return $this->calculatedMiles;
    }
    /**
     * Set calculatedMiles value
     * @param int $calculatedMiles
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType
     */
    public function setCalculatedMiles(?int $calculatedMiles = null): self
    {
        // validation for constraint: int
        if (!is_null($calculatedMiles) && !(is_int($calculatedMiles) || ctype_digit($calculatedMiles))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($calculatedMiles, true), gettype($calculatedMiles)), __LINE__);
        }
        $this->calculatedMiles = $calculatedMiles;
        
        return $this;
    }
    /**
     * Get calculatedDueDate value
     * @return string|null
     */
    public function getCalculatedDueDate(): ?string
    {
        return $this->calculatedDueDate;
    }
    /**
     * Set calculatedDueDate value
     * @param string $calculatedDueDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType
     */
    public function setCalculatedDueDate(?string $calculatedDueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($calculatedDueDate) && !is_string($calculatedDueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calculatedDueDate, true), gettype($calculatedDueDate)), __LINE__);
        }
        $this->calculatedDueDate = $calculatedDueDate;
        
        return $this;
    }
    /**
     * Get IsChanged value
     * @return bool|null
     */
    public function getIsChanged(): ?bool
    {
        return $this->IsChanged;
    }
    /**
     * Set IsChanged value
     * @param bool $isChanged
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType
     */
    public function setIsChanged(?bool $isChanged = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isChanged) && !is_bool($isChanged)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isChanged, true), gettype($isChanged)), __LINE__);
        }
        $this->IsChanged = $isChanged;
        
        return $this;
    }
}
