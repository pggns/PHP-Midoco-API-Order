<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFeeGroupAssignsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetFeeGroupAssignsRequest extends AbstractStructBase
{
    /**
     * The MidocoFeeGroupAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeGroupAssign
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign $MidocoFeeGroupAssign = null;
    /**
     * The groupId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $groupId = null;
    /**
     * The onlyFromOwnDb
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $onlyFromOwnDb = null;
    /**
     * Constructor method for GetFeeGroupAssignsRequest
     * @uses GetFeeGroupAssignsRequest::setMidocoFeeGroupAssign()
     * @uses GetFeeGroupAssignsRequest::setGroupId()
     * @uses GetFeeGroupAssignsRequest::setOnlyFromOwnDb()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign $midocoFeeGroupAssign
     * @param int[] $groupId
     * @param bool $onlyFromOwnDb
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign $midocoFeeGroupAssign = null, ?array $groupId = null, ?bool $onlyFromOwnDb = false)
    {
        $this
            ->setMidocoFeeGroupAssign($midocoFeeGroupAssign)
            ->setGroupId($groupId)
            ->setOnlyFromOwnDb($onlyFromOwnDb);
    }
    /**
     * Get MidocoFeeGroupAssign value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign|null
     */
    public function getMidocoFeeGroupAssign(): ?\Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign
    {
        return $this->MidocoFeeGroupAssign;
    }
    /**
     * Set MidocoFeeGroupAssign value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign $midocoFeeGroupAssign
     * @return \Pggns\MidocoApi\Order\StructType\GetFeeGroupAssignsRequest
     */
    public function setMidocoFeeGroupAssign(?\Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign $midocoFeeGroupAssign = null): self
    {
        $this->MidocoFeeGroupAssign = $midocoFeeGroupAssign;
        
        return $this;
    }
    /**
     * Get groupId value
     * @return int[]
     */
    public function getGroupId(): ?array
    {
        return $this->groupId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setGroupId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroupId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGroupIdForArrayConstraintFromSetGroupId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getFeeGroupAssignsRequestGroupIdItem) {
            // validation for constraint: itemType
            if (!(is_int($getFeeGroupAssignsRequestGroupIdItem) || ctype_digit($getFeeGroupAssignsRequestGroupIdItem))) {
                $invalidValues[] = is_object($getFeeGroupAssignsRequestGroupIdItem) ? get_class($getFeeGroupAssignsRequestGroupIdItem) : sprintf('%s(%s)', gettype($getFeeGroupAssignsRequestGroupIdItem), var_export($getFeeGroupAssignsRequestGroupIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The groupId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set groupId value
     * @throws InvalidArgumentException
     * @param int[] $groupId
     * @return \Pggns\MidocoApi\Order\StructType\GetFeeGroupAssignsRequest
     */
    public function setGroupId(?array $groupId = null): self
    {
        // validation for constraint: array
        if ('' !== ($groupIdArrayErrorMessage = self::validateGroupIdForArrayConstraintFromSetGroupId($groupId))) {
            throw new InvalidArgumentException($groupIdArrayErrorMessage, __LINE__);
        }
        $this->groupId = $groupId;
        
        return $this;
    }
    /**
     * Add item to groupId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\GetFeeGroupAssignsRequest
     */
    public function addToGroupId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The groupId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->groupId[] = $item;
        
        return $this;
    }
    /**
     * Get onlyFromOwnDb value
     * @return bool|null
     */
    public function getOnlyFromOwnDb(): ?bool
    {
        return $this->onlyFromOwnDb;
    }
    /**
     * Set onlyFromOwnDb value
     * @param bool $onlyFromOwnDb
     * @return \Pggns\MidocoApi\Order\StructType\GetFeeGroupAssignsRequest
     */
    public function setOnlyFromOwnDb(?bool $onlyFromOwnDb = false): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyFromOwnDb) && !is_bool($onlyFromOwnDb)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyFromOwnDb, true), gettype($onlyFromOwnDb)), __LINE__);
        }
        $this->onlyFromOwnDb = $onlyFromOwnDb;
        
        return $this;
    }
}
