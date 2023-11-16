<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteBillingPositionRequest StructType
 * @subpackage Structs
 */
class DeleteBillingPositionRequest extends AbstractStructBase
{
    /**
     * The parentInternalVersion
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $parentInternalVersion;
    /**
     * The positionId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $positionId = [];
    /**
     * Constructor method for DeleteBillingPositionRequest
     * @uses DeleteBillingPositionRequest::setParentInternalVersion()
     * @uses DeleteBillingPositionRequest::setPositionId()
     * @param int $parentInternalVersion
     * @param int[] $positionId
     */
    public function __construct(int $parentInternalVersion, array $positionId = [])
    {
        $this
            ->setParentInternalVersion($parentInternalVersion)
            ->setPositionId($positionId);
    }
    /**
     * Get parentInternalVersion value
     * @return int
     */
    public function getParentInternalVersion(): int
    {
        return $this->parentInternalVersion;
    }
    /**
     * Set parentInternalVersion value
     * @param int $parentInternalVersion
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingPositionRequest
     */
    public function setParentInternalVersion(int $parentInternalVersion): self
    {
        // validation for constraint: int
        if (!is_null($parentInternalVersion) && !(is_int($parentInternalVersion) || ctype_digit($parentInternalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentInternalVersion, true), gettype($parentInternalVersion)), __LINE__);
        }
        $this->parentInternalVersion = $parentInternalVersion;
        
        return $this;
    }
    /**
     * Get positionId value
     * @return int[]
     */
    public function getPositionId(): array
    {
        return $this->positionId;
    }
    /**
     * This method is responsible for validating the values passed to the setPositionId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPositionId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePositionIdForArrayConstraintsFromSetPositionId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteBillingPositionRequestPositionIdItem) {
            // validation for constraint: itemType
            if (!(is_int($deleteBillingPositionRequestPositionIdItem) || ctype_digit($deleteBillingPositionRequestPositionIdItem))) {
                $invalidValues[] = is_object($deleteBillingPositionRequestPositionIdItem) ? get_class($deleteBillingPositionRequestPositionIdItem) : sprintf('%s(%s)', gettype($deleteBillingPositionRequestPositionIdItem), var_export($deleteBillingPositionRequestPositionIdItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingPositionRequest
     */
    public function setPositionId(array $positionId = []): self
    {
        // validation for constraint: array
        if ('' !== ($positionIdArrayErrorMessage = self::validatePositionIdForArrayConstraintsFromSetPositionId($positionId))) {
            throw new InvalidArgumentException($positionIdArrayErrorMessage, __LINE__);
        }
        $this->positionId = $positionId;
        
        return $this;
    }
    /**
     * Add item to positionId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingPositionRequest
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
