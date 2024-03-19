<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakeBillingDocument4BonusClearingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MakeBillingDocument4BonusClearingRequest extends AbstractStructBase
{
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The positionId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected ?array $positionId = null;
    /**
     * Constructor method for MakeBillingDocument4BonusClearingRequest
     * @uses MakeBillingDocument4BonusClearingRequest::setAgencyId()
     * @uses MakeBillingDocument4BonusClearingRequest::setPositionId()
     * @param string $agencyId
     * @param int[] $positionId
     */
    public function __construct(?string $agencyId = null, ?array $positionId = null)
    {
        $this
            ->setAgencyId($agencyId)
            ->setPositionId($positionId);
    }
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocument4BonusClearingRequest
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get positionId value
     * @return int[]
     */
    public function getPositionId(): ?array
    {
        return $this->positionId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPositionId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPositionId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePositionIdForArrayConstraintFromSetPositionId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $makeBillingDocument4BonusClearingRequestPositionIdItem) {
            // validation for constraint: itemType
            if (!(is_int($makeBillingDocument4BonusClearingRequestPositionIdItem) || ctype_digit($makeBillingDocument4BonusClearingRequestPositionIdItem))) {
                $invalidValues[] = is_object($makeBillingDocument4BonusClearingRequestPositionIdItem) ? get_class($makeBillingDocument4BonusClearingRequestPositionIdItem) : sprintf('%s(%s)', gettype($makeBillingDocument4BonusClearingRequestPositionIdItem), var_export($makeBillingDocument4BonusClearingRequestPositionIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The positionId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set positionId value
     * @throws InvalidArgumentException
     * @param int[] $positionId
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocument4BonusClearingRequest
     */
    public function setPositionId(?array $positionId = null): self
    {
        // validation for constraint: array
        if ('' !== ($positionIdArrayErrorMessage = self::validatePositionIdForArrayConstraintFromSetPositionId($positionId))) {
            throw new InvalidArgumentException($positionIdArrayErrorMessage, __LINE__);
        }
        $this->positionId = $positionId;
        
        return $this;
    }
    /**
     * Add item to positionId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocument4BonusClearingRequest
     */
    public function addToPositionId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The positionId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->positionId[] = $item;
        
        return $this;
    }
}
