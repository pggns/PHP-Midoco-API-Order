<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBillingPositionDbiInfoRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: The bulk mode allows adding BillingPositionDbiInfo to all billing positions that do not yet have such a DBI info. It requires that the positoinId of all included BillingPositionDbiInfo are unset or -1.<br> <br> The normal mode allows
 * creating, updating and deleting DBI info, if these were created manually, not from the order. Invalid DBI infos from the order can be updated if the new value is valid.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveBillingPositionDbiInfoRequest extends AbstractStructBase
{
    /**
     * The MidocoBillingPositionDbiInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - ref: MidocoBillingPositionDbiInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionDbiInfo[]
     */
    protected array $MidocoBillingPositionDbiInfo;
    /**
     * The documentId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $documentId;
    /**
     * The bulk
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $bulk;
    /**
     * The documentVersion
     * @var int|null
     */
    protected ?int $documentVersion = null;
    /**
     * Constructor method for SaveBillingPositionDbiInfoRequest
     * @uses SaveBillingPositionDbiInfoRequest::setMidocoBillingPositionDbiInfo()
     * @uses SaveBillingPositionDbiInfoRequest::setDocumentId()
     * @uses SaveBillingPositionDbiInfoRequest::setBulk()
     * @uses SaveBillingPositionDbiInfoRequest::setDocumentVersion()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionDbiInfo[] $midocoBillingPositionDbiInfo
     * @param int $documentId
     * @param bool $bulk
     * @param int $documentVersion
     */
    public function __construct(array $midocoBillingPositionDbiInfo, int $documentId, bool $bulk, ?int $documentVersion = null)
    {
        $this
            ->setMidocoBillingPositionDbiInfo($midocoBillingPositionDbiInfo)
            ->setDocumentId($documentId)
            ->setBulk($bulk)
            ->setDocumentVersion($documentVersion);
    }
    /**
     * Get MidocoBillingPositionDbiInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionDbiInfo[]
     */
    public function getMidocoBillingPositionDbiInfo(): array
    {
        return $this->MidocoBillingPositionDbiInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBillingPositionDbiInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingPositionDbiInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingPositionDbiInfoForArrayConstraintFromSetMidocoBillingPositionDbiInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveBillingPositionDbiInfoRequestMidocoBillingPositionDbiInfoItem) {
            // validation for constraint: itemType
            if (!$saveBillingPositionDbiInfoRequestMidocoBillingPositionDbiInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionDbiInfo) {
                $invalidValues[] = is_object($saveBillingPositionDbiInfoRequestMidocoBillingPositionDbiInfoItem) ? get_class($saveBillingPositionDbiInfoRequestMidocoBillingPositionDbiInfoItem) : sprintf('%s(%s)', gettype($saveBillingPositionDbiInfoRequestMidocoBillingPositionDbiInfoItem), var_export($saveBillingPositionDbiInfoRequestMidocoBillingPositionDbiInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingPositionDbiInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionDbiInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingPositionDbiInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionDbiInfo[] $midocoBillingPositionDbiInfo
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingPositionDbiInfoRequest
     */
    public function setMidocoBillingPositionDbiInfo(array $midocoBillingPositionDbiInfo): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingPositionDbiInfoArrayErrorMessage = self::validateMidocoBillingPositionDbiInfoForArrayConstraintFromSetMidocoBillingPositionDbiInfo($midocoBillingPositionDbiInfo))) {
            throw new InvalidArgumentException($midocoBillingPositionDbiInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingPositionDbiInfo = $midocoBillingPositionDbiInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingPositionDbiInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionDbiInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingPositionDbiInfoRequest
     */
    public function addToMidocoBillingPositionDbiInfo(\Pggns\MidocoApi\Order\StructType\MidocoBillingPositionDbiInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionDbiInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingPositionDbiInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionDbiInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingPositionDbiInfo[] = $item;
        
        return $this;
    }
    /**
     * Get documentId value
     * @return int
     */
    public function getDocumentId(): int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingPositionDbiInfoRequest
     */
    public function setDocumentId(int $documentId): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Get bulk value
     * @return bool
     */
    public function getBulk(): bool
    {
        return $this->bulk;
    }
    /**
     * Set bulk value
     * @param bool $bulk
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingPositionDbiInfoRequest
     */
    public function setBulk(bool $bulk): self
    {
        // validation for constraint: boolean
        if (!is_null($bulk) && !is_bool($bulk)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bulk, true), gettype($bulk)), __LINE__);
        }
        $this->bulk = $bulk;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingPositionDbiInfoRequest
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
