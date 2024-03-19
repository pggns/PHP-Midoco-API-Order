<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckAgencySettlementLevelRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CheckAgencySettlementLevelRequest extends AbstractStructBase
{
    /**
     * The travelDateFrom
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $travelDateFrom;
    /**
     * The travelDateTo
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $travelDateTo;
    /**
     * The settlementType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $settlementType;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $ID = null;
    /**
     * The isPreview
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $isPreview = null;
    /**
     * Constructor method for CheckAgencySettlementLevelRequest
     * @uses CheckAgencySettlementLevelRequest::setTravelDateFrom()
     * @uses CheckAgencySettlementLevelRequest::setTravelDateTo()
     * @uses CheckAgencySettlementLevelRequest::setSettlementType()
     * @uses CheckAgencySettlementLevelRequest::setID()
     * @uses CheckAgencySettlementLevelRequest::setIsPreview()
     * @param string $travelDateFrom
     * @param string $travelDateTo
     * @param string $settlementType
     * @param string[] $iD
     * @param bool $isPreview
     */
    public function __construct(string $travelDateFrom, string $travelDateTo, string $settlementType, ?array $iD = null, ?bool $isPreview = true)
    {
        $this
            ->setTravelDateFrom($travelDateFrom)
            ->setTravelDateTo($travelDateTo)
            ->setSettlementType($settlementType)
            ->setID($iD)
            ->setIsPreview($isPreview);
    }
    /**
     * Get travelDateFrom value
     * @return string
     */
    public function getTravelDateFrom(): string
    {
        return $this->travelDateFrom;
    }
    /**
     * Set travelDateFrom value
     * @param string $travelDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\CheckAgencySettlementLevelRequest
     */
    public function setTravelDateFrom(string $travelDateFrom): self
    {
        // validation for constraint: string
        if (!is_null($travelDateFrom) && !is_string($travelDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDateFrom, true), gettype($travelDateFrom)), __LINE__);
        }
        $this->travelDateFrom = $travelDateFrom;
        
        return $this;
    }
    /**
     * Get travelDateTo value
     * @return string
     */
    public function getTravelDateTo(): string
    {
        return $this->travelDateTo;
    }
    /**
     * Set travelDateTo value
     * @param string $travelDateTo
     * @return \Pggns\MidocoApi\Order\StructType\CheckAgencySettlementLevelRequest
     */
    public function setTravelDateTo(string $travelDateTo): self
    {
        // validation for constraint: string
        if (!is_null($travelDateTo) && !is_string($travelDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDateTo, true), gettype($travelDateTo)), __LINE__);
        }
        $this->travelDateTo = $travelDateTo;
        
        return $this;
    }
    /**
     * Get settlementType value
     * @return string
     */
    public function getSettlementType(): string
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param string $settlementType
     * @return \Pggns\MidocoApi\Order\StructType\CheckAgencySettlementLevelRequest
     */
    public function setSettlementType(string $settlementType): self
    {
        // validation for constraint: string
        if (!is_null($settlementType) && !is_string($settlementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
        return $this;
    }
    /**
     * Get ID value
     * @return string[]
     */
    public function getID(): ?array
    {
        return $this->ID;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setID method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIDForArrayConstraintFromSetID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $checkAgencySettlementLevelRequestIDItem) {
            // validation for constraint: itemType
            if (!is_string($checkAgencySettlementLevelRequestIDItem)) {
                $invalidValues[] = is_object($checkAgencySettlementLevelRequestIDItem) ? get_class($checkAgencySettlementLevelRequestIDItem) : sprintf('%s(%s)', gettype($checkAgencySettlementLevelRequestIDItem), var_export($checkAgencySettlementLevelRequestIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ID value
     * @throws InvalidArgumentException
     * @param string[] $iD
     * @return \Pggns\MidocoApi\Order\StructType\CheckAgencySettlementLevelRequest
     */
    public function setID(?array $iD = null): self
    {
        // validation for constraint: array
        if ('' !== ($iDArrayErrorMessage = self::validateIDForArrayConstraintFromSetID($iD))) {
            throw new InvalidArgumentException($iDArrayErrorMessage, __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Add item to ID value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\CheckAgencySettlementLevelRequest
     */
    public function addToID(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ID[] = $item;
        
        return $this;
    }
    /**
     * Get isPreview value
     * @return bool|null
     */
    public function getIsPreview(): ?bool
    {
        return $this->isPreview;
    }
    /**
     * Set isPreview value
     * @param bool $isPreview
     * @return \Pggns\MidocoApi\Order\StructType\CheckAgencySettlementLevelRequest
     */
    public function setIsPreview(?bool $isPreview = true): self
    {
        // validation for constraint: boolean
        if (!is_null($isPreview) && !is_bool($isPreview)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPreview, true), gettype($isPreview)), __LINE__);
        }
        $this->isPreview = $isPreview;
        
        return $this;
    }
}
