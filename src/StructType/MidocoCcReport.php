<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCcReport StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCcReport extends AbstractStructBase
{
    /**
     * The MidocoCcReportRecord
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCcReportRecord
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCcReportRecord[]
     */
    protected ?array $MidocoCcReportRecord = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The email2
     * @var string|null
     */
    protected ?string $email2 = null;
    /**
     * The midocoEmail
     * @var string|null
     */
    protected ?string $midocoEmail = null;
    /**
     * Constructor method for MidocoCcReport
     * @uses MidocoCcReport::setMidocoCcReportRecord()
     * @uses MidocoCcReport::setUnitName()
     * @uses MidocoCcReport::setCreationTimestamp()
     * @uses MidocoCcReport::setEmail()
     * @uses MidocoCcReport::setEmail2()
     * @uses MidocoCcReport::setMidocoEmail()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCcReportRecord[] $midocoCcReportRecord
     * @param string $unitName
     * @param string $creationTimestamp
     * @param string $email
     * @param string $email2
     * @param string $midocoEmail
     */
    public function __construct(?array $midocoCcReportRecord = null, ?string $unitName = null, ?string $creationTimestamp = null, ?string $email = null, ?string $email2 = null, ?string $midocoEmail = null)
    {
        $this
            ->setMidocoCcReportRecord($midocoCcReportRecord)
            ->setUnitName($unitName)
            ->setCreationTimestamp($creationTimestamp)
            ->setEmail($email)
            ->setEmail2($email2)
            ->setMidocoEmail($midocoEmail);
    }
    /**
     * Get MidocoCcReportRecord value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcReportRecord[]
     */
    public function getMidocoCcReportRecord(): ?array
    {
        return $this->MidocoCcReportRecord;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCcReportRecord method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCcReportRecord method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCcReportRecordForArrayConstraintFromSetMidocoCcReportRecord(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCcReportMidocoCcReportRecordItem) {
            // validation for constraint: itemType
            if (!$midocoCcReportMidocoCcReportRecordItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCcReportRecord) {
                $invalidValues[] = is_object($midocoCcReportMidocoCcReportRecordItem) ? get_class($midocoCcReportMidocoCcReportRecordItem) : sprintf('%s(%s)', gettype($midocoCcReportMidocoCcReportRecordItem), var_export($midocoCcReportMidocoCcReportRecordItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCcReportRecord property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCcReportRecord, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCcReportRecord value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCcReportRecord[] $midocoCcReportRecord
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcReport
     */
    public function setMidocoCcReportRecord(?array $midocoCcReportRecord = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCcReportRecordArrayErrorMessage = self::validateMidocoCcReportRecordForArrayConstraintFromSetMidocoCcReportRecord($midocoCcReportRecord))) {
            throw new InvalidArgumentException($midocoCcReportRecordArrayErrorMessage, __LINE__);
        }
        $this->MidocoCcReportRecord = $midocoCcReportRecord;
        
        return $this;
    }
    /**
     * Add item to MidocoCcReportRecord value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCcReportRecord $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcReport
     */
    public function addToMidocoCcReportRecord(\Pggns\MidocoApi\Order\StructType\MidocoCcReportRecord $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCcReportRecord) {
            throw new InvalidArgumentException(sprintf('The MidocoCcReportRecord property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCcReportRecord, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCcReportRecord[] = $item;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcReport
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
     * Get creationTimestamp value
     * @return string|null
     */
    public function getCreationTimestamp(): ?string
    {
        return $this->creationTimestamp;
    }
    /**
     * Set creationTimestamp value
     * @param string $creationTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcReport
     */
    public function setCreationTimestamp(?string $creationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimestamp) && !is_string($creationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimestamp, true), gettype($creationTimestamp)), __LINE__);
        }
        $this->creationTimestamp = $creationTimestamp;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcReport
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get email2 value
     * @return string|null
     */
    public function getEmail2(): ?string
    {
        return $this->email2;
    }
    /**
     * Set email2 value
     * @param string $email2
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcReport
     */
    public function setEmail2(?string $email2 = null): self
    {
        // validation for constraint: string
        if (!is_null($email2) && !is_string($email2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email2, true), gettype($email2)), __LINE__);
        }
        $this->email2 = $email2;
        
        return $this;
    }
    /**
     * Get midocoEmail value
     * @return string|null
     */
    public function getMidocoEmail(): ?string
    {
        return $this->midocoEmail;
    }
    /**
     * Set midocoEmail value
     * @param string $midocoEmail
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcReport
     */
    public function setMidocoEmail(?string $midocoEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoEmail) && !is_string($midocoEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoEmail, true), gettype($midocoEmail)), __LINE__);
        }
        $this->midocoEmail = $midocoEmail;
        
        return $this;
    }
}
