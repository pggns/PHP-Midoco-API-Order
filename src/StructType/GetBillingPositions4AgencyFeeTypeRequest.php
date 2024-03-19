<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingPositions4AgencyFeeTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBillingPositions4AgencyFeeTypeRequest extends AbstractStructBase
{
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The feeType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected ?array $feeType = null;
    /**
     * Constructor method for GetBillingPositions4AgencyFeeTypeRequest
     * @uses GetBillingPositions4AgencyFeeTypeRequest::setAgencyId()
     * @uses GetBillingPositions4AgencyFeeTypeRequest::setStartDate()
     * @uses GetBillingPositions4AgencyFeeTypeRequest::setEndDate()
     * @uses GetBillingPositions4AgencyFeeTypeRequest::setFeeType()
     * @param string $agencyId
     * @param string $startDate
     * @param string $endDate
     * @param string[] $feeType
     */
    public function __construct(?string $agencyId = null, ?string $startDate = null, ?string $endDate = null, ?array $feeType = null)
    {
        $this
            ->setAgencyId($agencyId)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setFeeType($feeType);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPositions4AgencyFeeTypeRequest
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
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPositions4AgencyFeeTypeRequest
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPositions4AgencyFeeTypeRequest
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
    /**
     * Get feeType value
     * @return string[]
     */
    public function getFeeType(): ?array
    {
        return $this->feeType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFeeType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeeType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeeTypeForArrayConstraintFromSetFeeType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBillingPositions4AgencyFeeTypeRequestFeeTypeItem) {
            // validation for constraint: itemType
            if (!is_string($getBillingPositions4AgencyFeeTypeRequestFeeTypeItem)) {
                $invalidValues[] = is_object($getBillingPositions4AgencyFeeTypeRequestFeeTypeItem) ? get_class($getBillingPositions4AgencyFeeTypeRequestFeeTypeItem) : sprintf('%s(%s)', gettype($getBillingPositions4AgencyFeeTypeRequestFeeTypeItem), var_export($getBillingPositions4AgencyFeeTypeRequestFeeTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The feeType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set feeType value
     * @throws InvalidArgumentException
     * @param string[] $feeType
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPositions4AgencyFeeTypeRequest
     */
    public function setFeeType(?array $feeType = null): self
    {
        // validation for constraint: array
        if ('' !== ($feeTypeArrayErrorMessage = self::validateFeeTypeForArrayConstraintFromSetFeeType($feeType))) {
            throw new InvalidArgumentException($feeTypeArrayErrorMessage, __LINE__);
        }
        $this->feeType = $feeType;
        
        return $this;
    }
    /**
     * Add item to feeType value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPositions4AgencyFeeTypeRequest
     */
    public function addToFeeType(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The feeType property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->feeType[] = $item;
        
        return $this;
    }
}
