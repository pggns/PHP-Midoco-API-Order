<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUsersFromTopMostOrgUnitResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUsersFromTopMostOrgUnitResponse extends AbstractStructBase
{
    /**
     * The MidocoUser
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUser
     * @var \Pggns\MidocoApi\Order\StructType\MidocoUser[]
     */
    protected ?array $MidocoUser = null;
    /**
     * The userId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $userId = null;
    /**
     * Constructor method for GetUsersFromTopMostOrgUnitResponse
     * @uses GetUsersFromTopMostOrgUnitResponse::setMidocoUser()
     * @uses GetUsersFromTopMostOrgUnitResponse::setUserId()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoUser[] $midocoUser
     * @param int[] $userId
     */
    public function __construct(?array $midocoUser = null, ?array $userId = null)
    {
        $this
            ->setMidocoUser($midocoUser)
            ->setUserId($userId);
    }
    /**
     * Get MidocoUser value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUser[]
     */
    public function getMidocoUser(): ?array
    {
        return $this->MidocoUser;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoUser method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUser method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUserForArrayConstraintFromSetMidocoUser(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUsersFromTopMostOrgUnitResponseMidocoUserItem) {
            // validation for constraint: itemType
            if (!$getUsersFromTopMostOrgUnitResponseMidocoUserItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoUser) {
                $invalidValues[] = is_object($getUsersFromTopMostOrgUnitResponseMidocoUserItem) ? get_class($getUsersFromTopMostOrgUnitResponseMidocoUserItem) : sprintf('%s(%s)', gettype($getUsersFromTopMostOrgUnitResponseMidocoUserItem), var_export($getUsersFromTopMostOrgUnitResponseMidocoUserItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUser property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoUser, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUser value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoUser[] $midocoUser
     * @return \Pggns\MidocoApi\Order\StructType\GetUsersFromTopMostOrgUnitResponse
     */
    public function setMidocoUser(?array $midocoUser = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUserArrayErrorMessage = self::validateMidocoUserForArrayConstraintFromSetMidocoUser($midocoUser))) {
            throw new InvalidArgumentException($midocoUserArrayErrorMessage, __LINE__);
        }
        $this->MidocoUser = $midocoUser;
        
        return $this;
    }
    /**
     * Add item to MidocoUser value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoUser $item
     * @return \Pggns\MidocoApi\Order\StructType\GetUsersFromTopMostOrgUnitResponse
     */
    public function addToMidocoUser(\Pggns\MidocoApi\Order\StructType\MidocoUser $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoUser) {
            throw new InvalidArgumentException(sprintf('The MidocoUser property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoUser, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUser[] = $item;
        
        return $this;
    }
    /**
     * Get userId value
     * @return int[]
     */
    public function getUserId(): ?array
    {
        return $this->userId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUserId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserIdForArrayConstraintFromSetUserId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUsersFromTopMostOrgUnitResponseUserIdItem) {
            // validation for constraint: itemType
            if (!(is_int($getUsersFromTopMostOrgUnitResponseUserIdItem) || ctype_digit($getUsersFromTopMostOrgUnitResponseUserIdItem))) {
                $invalidValues[] = is_object($getUsersFromTopMostOrgUnitResponseUserIdItem) ? get_class($getUsersFromTopMostOrgUnitResponseUserIdItem) : sprintf('%s(%s)', gettype($getUsersFromTopMostOrgUnitResponseUserIdItem), var_export($getUsersFromTopMostOrgUnitResponseUserIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The userId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set userId value
     * @throws InvalidArgumentException
     * @param int[] $userId
     * @return \Pggns\MidocoApi\Order\StructType\GetUsersFromTopMostOrgUnitResponse
     */
    public function setUserId(?array $userId = null): self
    {
        // validation for constraint: array
        if ('' !== ($userIdArrayErrorMessage = self::validateUserIdForArrayConstraintFromSetUserId($userId))) {
            throw new InvalidArgumentException($userIdArrayErrorMessage, __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
    /**
     * Add item to userId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\GetUsersFromTopMostOrgUnitResponse
     */
    public function addToUserId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The userId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->userId[] = $item;
        
        return $this;
    }
}
