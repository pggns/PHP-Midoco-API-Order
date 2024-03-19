<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateEinvoiceDocumentsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateEinvoiceDocumentsRequest extends AbstractStructBase
{
    /**
     * The einvoiceId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $einvoiceId = null;
    /**
     * The provisionBy
     * @var int|null
     */
    protected ?int $provisionBy = null;
    /**
     * The provisionTimestamp
     * @var string|null
     */
    protected ?string $provisionTimestamp = null;
    /**
     * Constructor method for UpdateEinvoiceDocumentsRequest
     * @uses UpdateEinvoiceDocumentsRequest::setEinvoiceId()
     * @uses UpdateEinvoiceDocumentsRequest::setProvisionBy()
     * @uses UpdateEinvoiceDocumentsRequest::setProvisionTimestamp()
     * @param int[] $einvoiceId
     * @param int $provisionBy
     * @param string $provisionTimestamp
     */
    public function __construct(?array $einvoiceId = null, ?int $provisionBy = null, ?string $provisionTimestamp = null)
    {
        $this
            ->setEinvoiceId($einvoiceId)
            ->setProvisionBy($provisionBy)
            ->setProvisionTimestamp($provisionTimestamp);
    }
    /**
     * Get einvoiceId value
     * @return int[]
     */
    public function getEinvoiceId(): ?array
    {
        return $this->einvoiceId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEinvoiceId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEinvoiceId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEinvoiceIdForArrayConstraintFromSetEinvoiceId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $updateEinvoiceDocumentsRequestEinvoiceIdItem) {
            // validation for constraint: itemType
            if (!(is_int($updateEinvoiceDocumentsRequestEinvoiceIdItem) || ctype_digit($updateEinvoiceDocumentsRequestEinvoiceIdItem))) {
                $invalidValues[] = is_object($updateEinvoiceDocumentsRequestEinvoiceIdItem) ? get_class($updateEinvoiceDocumentsRequestEinvoiceIdItem) : sprintf('%s(%s)', gettype($updateEinvoiceDocumentsRequestEinvoiceIdItem), var_export($updateEinvoiceDocumentsRequestEinvoiceIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The einvoiceId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set einvoiceId value
     * @throws InvalidArgumentException
     * @param int[] $einvoiceId
     * @return \Pggns\MidocoApi\Order\StructType\UpdateEinvoiceDocumentsRequest
     */
    public function setEinvoiceId(?array $einvoiceId = null): self
    {
        // validation for constraint: array
        if ('' !== ($einvoiceIdArrayErrorMessage = self::validateEinvoiceIdForArrayConstraintFromSetEinvoiceId($einvoiceId))) {
            throw new InvalidArgumentException($einvoiceIdArrayErrorMessage, __LINE__);
        }
        $this->einvoiceId = $einvoiceId;
        
        return $this;
    }
    /**
     * Add item to einvoiceId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\UpdateEinvoiceDocumentsRequest
     */
    public function addToEinvoiceId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The einvoiceId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->einvoiceId[] = $item;
        
        return $this;
    }
    /**
     * Get provisionBy value
     * @return int|null
     */
    public function getProvisionBy(): ?int
    {
        return $this->provisionBy;
    }
    /**
     * Set provisionBy value
     * @param int $provisionBy
     * @return \Pggns\MidocoApi\Order\StructType\UpdateEinvoiceDocumentsRequest
     */
    public function setProvisionBy(?int $provisionBy = null): self
    {
        // validation for constraint: int
        if (!is_null($provisionBy) && !(is_int($provisionBy) || ctype_digit($provisionBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($provisionBy, true), gettype($provisionBy)), __LINE__);
        }
        $this->provisionBy = $provisionBy;
        
        return $this;
    }
    /**
     * Get provisionTimestamp value
     * @return string|null
     */
    public function getProvisionTimestamp(): ?string
    {
        return $this->provisionTimestamp;
    }
    /**
     * Set provisionTimestamp value
     * @param string $provisionTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\UpdateEinvoiceDocumentsRequest
     */
    public function setProvisionTimestamp(?string $provisionTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($provisionTimestamp) && !is_string($provisionTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provisionTimestamp, true), gettype($provisionTimestamp)), __LINE__);
        }
        $this->provisionTimestamp = $provisionTimestamp;
        
        return $this;
    }
}
