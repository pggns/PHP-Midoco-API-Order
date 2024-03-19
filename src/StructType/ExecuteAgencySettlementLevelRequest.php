<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteAgencySettlementLevelRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteAgencySettlementLevelRequest extends AbstractStructBase
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
     * The compareTravelDateFrom
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $compareTravelDateFrom;
    /**
     * The compareTravelDateTo
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $compareTravelDateTo;
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
     * The invoiceByEmail
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $invoiceByEmail = null;
    /**
     * The isPreview
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $isPreview = null;
    /**
     * Constructor method for ExecuteAgencySettlementLevelRequest
     * @uses ExecuteAgencySettlementLevelRequest::setTravelDateFrom()
     * @uses ExecuteAgencySettlementLevelRequest::setTravelDateTo()
     * @uses ExecuteAgencySettlementLevelRequest::setCompareTravelDateFrom()
     * @uses ExecuteAgencySettlementLevelRequest::setCompareTravelDateTo()
     * @uses ExecuteAgencySettlementLevelRequest::setSettlementType()
     * @uses ExecuteAgencySettlementLevelRequest::setID()
     * @uses ExecuteAgencySettlementLevelRequest::setInvoiceByEmail()
     * @uses ExecuteAgencySettlementLevelRequest::setIsPreview()
     * @param string $travelDateFrom
     * @param string $travelDateTo
     * @param string $compareTravelDateFrom
     * @param string $compareTravelDateTo
     * @param string $settlementType
     * @param string[] $iD
     * @param bool $invoiceByEmail
     * @param bool $isPreview
     */
    public function __construct(string $travelDateFrom, string $travelDateTo, string $compareTravelDateFrom, string $compareTravelDateTo, string $settlementType, ?array $iD = null, ?bool $invoiceByEmail = false, ?bool $isPreview = true)
    {
        $this
            ->setTravelDateFrom($travelDateFrom)
            ->setTravelDateTo($travelDateTo)
            ->setCompareTravelDateFrom($compareTravelDateFrom)
            ->setCompareTravelDateTo($compareTravelDateTo)
            ->setSettlementType($settlementType)
            ->setID($iD)
            ->setInvoiceByEmail($invoiceByEmail)
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementLevelRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementLevelRequest
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
     * Get compareTravelDateFrom value
     * @return string
     */
    public function getCompareTravelDateFrom(): string
    {
        return $this->compareTravelDateFrom;
    }
    /**
     * Set compareTravelDateFrom value
     * @param string $compareTravelDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementLevelRequest
     */
    public function setCompareTravelDateFrom(string $compareTravelDateFrom): self
    {
        // validation for constraint: string
        if (!is_null($compareTravelDateFrom) && !is_string($compareTravelDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($compareTravelDateFrom, true), gettype($compareTravelDateFrom)), __LINE__);
        }
        $this->compareTravelDateFrom = $compareTravelDateFrom;
        
        return $this;
    }
    /**
     * Get compareTravelDateTo value
     * @return string
     */
    public function getCompareTravelDateTo(): string
    {
        return $this->compareTravelDateTo;
    }
    /**
     * Set compareTravelDateTo value
     * @param string $compareTravelDateTo
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementLevelRequest
     */
    public function setCompareTravelDateTo(string $compareTravelDateTo): self
    {
        // validation for constraint: string
        if (!is_null($compareTravelDateTo) && !is_string($compareTravelDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($compareTravelDateTo, true), gettype($compareTravelDateTo)), __LINE__);
        }
        $this->compareTravelDateTo = $compareTravelDateTo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementLevelRequest
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
        foreach ($values as $executeAgencySettlementLevelRequestIDItem) {
            // validation for constraint: itemType
            if (!is_string($executeAgencySettlementLevelRequestIDItem)) {
                $invalidValues[] = is_object($executeAgencySettlementLevelRequestIDItem) ? get_class($executeAgencySettlementLevelRequestIDItem) : sprintf('%s(%s)', gettype($executeAgencySettlementLevelRequestIDItem), var_export($executeAgencySettlementLevelRequestIDItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementLevelRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementLevelRequest
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
     * Get invoiceByEmail value
     * @return bool|null
     */
    public function getInvoiceByEmail(): ?bool
    {
        return $this->invoiceByEmail;
    }
    /**
     * Set invoiceByEmail value
     * @param bool $invoiceByEmail
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementLevelRequest
     */
    public function setInvoiceByEmail(?bool $invoiceByEmail = false): self
    {
        // validation for constraint: boolean
        if (!is_null($invoiceByEmail) && !is_bool($invoiceByEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($invoiceByEmail, true), gettype($invoiceByEmail)), __LINE__);
        }
        $this->invoiceByEmail = $invoiceByEmail;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementLevelRequest
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
