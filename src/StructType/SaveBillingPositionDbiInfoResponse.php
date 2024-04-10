<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBillingPositionDbiInfoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveBillingPositionDbiInfoResponse extends AbstractStructBase
{
    /**
     * The BillingDbiPositions
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\BillingDbiPositions[]
     */
    protected ?array $BillingDbiPositions = null;
    /**
     * The documentVersion
     * @var int|null
     */
    protected ?int $documentVersion = null;
    /**
     * Constructor method for SaveBillingPositionDbiInfoResponse
     * @uses SaveBillingPositionDbiInfoResponse::setBillingDbiPositions()
     * @uses SaveBillingPositionDbiInfoResponse::setDocumentVersion()
     * @param \Pggns\MidocoApi\Order\StructType\BillingDbiPositions[] $billingDbiPositions
     * @param int $documentVersion
     */
    public function __construct(?array $billingDbiPositions = null, ?int $documentVersion = null)
    {
        $this
            ->setBillingDbiPositions($billingDbiPositions)
            ->setDocumentVersion($documentVersion);
    }
    /**
     * Get BillingDbiPositions value
     * @return \Pggns\MidocoApi\Order\StructType\BillingDbiPositions[]
     */
    public function getBillingDbiPositions(): ?array
    {
        return $this->BillingDbiPositions;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBillingDbiPositions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBillingDbiPositions method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBillingDbiPositionsForArrayConstraintFromSetBillingDbiPositions(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveBillingPositionDbiInfoResponseBillingDbiPositionsItem) {
            // validation for constraint: itemType
            if (!$saveBillingPositionDbiInfoResponseBillingDbiPositionsItem instanceof \Pggns\MidocoApi\Order\StructType\BillingDbiPositions) {
                $invalidValues[] = is_object($saveBillingPositionDbiInfoResponseBillingDbiPositionsItem) ? get_class($saveBillingPositionDbiInfoResponseBillingDbiPositionsItem) : sprintf('%s(%s)', gettype($saveBillingPositionDbiInfoResponseBillingDbiPositionsItem), var_export($saveBillingPositionDbiInfoResponseBillingDbiPositionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BillingDbiPositions property can only contain items of type \Pggns\MidocoApi\Order\StructType\BillingDbiPositions, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BillingDbiPositions value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BillingDbiPositions[] $billingDbiPositions
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingPositionDbiInfoResponse
     */
    public function setBillingDbiPositions(?array $billingDbiPositions = null): self
    {
        // validation for constraint: array
        if ('' !== ($billingDbiPositionsArrayErrorMessage = self::validateBillingDbiPositionsForArrayConstraintFromSetBillingDbiPositions($billingDbiPositions))) {
            throw new InvalidArgumentException($billingDbiPositionsArrayErrorMessage, __LINE__);
        }
        $this->BillingDbiPositions = $billingDbiPositions;
        
        return $this;
    }
    /**
     * Add item to BillingDbiPositions value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BillingDbiPositions $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingPositionDbiInfoResponse
     */
    public function addToBillingDbiPositions(\Pggns\MidocoApi\Order\StructType\BillingDbiPositions $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\BillingDbiPositions) {
            throw new InvalidArgumentException(sprintf('The BillingDbiPositions property can only contain items of type \Pggns\MidocoApi\Order\StructType\BillingDbiPositions, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BillingDbiPositions[] = $item;
        
        return $this;
    }
    /**
     * Get documentVersion value
     * @return int|null
     */
    public function getDocumentVersion(): ?int
    {
        return $this->documentVersion;
    }
    /**
     * Set documentVersion value
     * @param int $documentVersion
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingPositionDbiInfoResponse
     */
    public function setDocumentVersion(?int $documentVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($documentVersion) && !(is_int($documentVersion) || ctype_digit($documentVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentVersion, true), gettype($documentVersion)), __LINE__);
        }
        $this->documentVersion = $documentVersion;
        
        return $this;
    }
}
