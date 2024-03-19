<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEntryHistoryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEntryHistoryRequest extends AbstractStructBase
{
    /**
     * The EntryCriteria
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: EntryCriteria
     * @var \Pggns\MidocoApi\Order\StructType\EntryCriteria[]
     */
    protected ?array $EntryCriteria = null;
    /**
     * The entryId
     * @var string|null
     */
    protected ?string $entryId = null;
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * Constructor method for GetEntryHistoryRequest
     * @uses GetEntryHistoryRequest::setEntryCriteria()
     * @uses GetEntryHistoryRequest::setEntryId()
     * @uses GetEntryHistoryRequest::setAccountId()
     * @uses GetEntryHistoryRequest::setPlanId()
     * @param \Pggns\MidocoApi\Order\StructType\EntryCriteria[] $entryCriteria
     * @param string $entryId
     * @param string $accountId
     * @param string $planId
     */
    public function __construct(?array $entryCriteria = null, ?string $entryId = null, ?string $accountId = null, ?string $planId = null)
    {
        $this
            ->setEntryCriteria($entryCriteria)
            ->setEntryId($entryId)
            ->setAccountId($accountId)
            ->setPlanId($planId);
    }
    /**
     * Get EntryCriteria value
     * @return \Pggns\MidocoApi\Order\StructType\EntryCriteria[]
     */
    public function getEntryCriteria(): ?array
    {
        return $this->EntryCriteria;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEntryCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEntryCriteria method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEntryCriteriaForArrayConstraintFromSetEntryCriteria(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEntryHistoryRequestEntryCriteriaItem) {
            // validation for constraint: itemType
            if (!$getEntryHistoryRequestEntryCriteriaItem instanceof \Pggns\MidocoApi\Order\StructType\EntryCriteria) {
                $invalidValues[] = is_object($getEntryHistoryRequestEntryCriteriaItem) ? get_class($getEntryHistoryRequestEntryCriteriaItem) : sprintf('%s(%s)', gettype($getEntryHistoryRequestEntryCriteriaItem), var_export($getEntryHistoryRequestEntryCriteriaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EntryCriteria property can only contain items of type \Pggns\MidocoApi\Order\StructType\EntryCriteria, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EntryCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\EntryCriteria[] $entryCriteria
     * @return \Pggns\MidocoApi\Order\StructType\GetEntryHistoryRequest
     */
    public function setEntryCriteria(?array $entryCriteria = null): self
    {
        // validation for constraint: array
        if ('' !== ($entryCriteriaArrayErrorMessage = self::validateEntryCriteriaForArrayConstraintFromSetEntryCriteria($entryCriteria))) {
            throw new InvalidArgumentException($entryCriteriaArrayErrorMessage, __LINE__);
        }
        $this->EntryCriteria = $entryCriteria;
        
        return $this;
    }
    /**
     * Add item to EntryCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\EntryCriteria $item
     * @return \Pggns\MidocoApi\Order\StructType\GetEntryHistoryRequest
     */
    public function addToEntryCriteria(\Pggns\MidocoApi\Order\StructType\EntryCriteria $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\EntryCriteria) {
            throw new InvalidArgumentException(sprintf('The EntryCriteria property can only contain items of type \Pggns\MidocoApi\Order\StructType\EntryCriteria, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EntryCriteria[] = $item;
        
        return $this;
    }
    /**
     * Get entryId value
     * @return string|null
     */
    public function getEntryId(): ?string
    {
        return $this->entryId;
    }
    /**
     * Set entryId value
     * @param string $entryId
     * @return \Pggns\MidocoApi\Order\StructType\GetEntryHistoryRequest
     */
    public function setEntryId(?string $entryId = null): self
    {
        // validation for constraint: string
        if (!is_null($entryId) && !is_string($entryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entryId, true), gettype($entryId)), __LINE__);
        }
        $this->entryId = $entryId;
        
        return $this;
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\GetEntryHistoryRequest
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get planId value
     * @return string|null
     */
    public function getPlanId(): ?string
    {
        return $this->planId;
    }
    /**
     * Set planId value
     * @param string $planId
     * @return \Pggns\MidocoApi\Order\StructType\GetEntryHistoryRequest
     */
    public function setPlanId(?string $planId = null): self
    {
        // validation for constraint: string
        if (!is_null($planId) && !is_string($planId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($planId, true), gettype($planId)), __LINE__);
        }
        $this->planId = $planId;
        
        return $this;
    }
}
