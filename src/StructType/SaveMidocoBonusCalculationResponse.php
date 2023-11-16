<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoBonusCalculationResponse StructType
 * @subpackage Structs
 */
class SaveMidocoBonusCalculationResponse extends AbstractStructBase
{
    /**
     * The users
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $users = [];
    /**
     * The bonusId
     * @var int|null
     */
    protected ?int $bonusId = null;
    /**
     * Constructor method for SaveMidocoBonusCalculationResponse
     * @uses SaveMidocoBonusCalculationResponse::setUsers()
     * @uses SaveMidocoBonusCalculationResponse::setBonusId()
     * @param int[] $users
     * @param int $bonusId
     */
    public function __construct(array $users = [], ?int $bonusId = null)
    {
        $this
            ->setUsers($users)
            ->setBonusId($bonusId);
    }
    /**
     * Get users value
     * @return int[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }
    /**
     * This method is responsible for validating the values passed to the setUsers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUsers method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUsersForArrayConstraintsFromSetUsers(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveMidocoBonusCalculationResponseUsersItem) {
            // validation for constraint: itemType
            if (!(is_int($saveMidocoBonusCalculationResponseUsersItem) || ctype_digit($saveMidocoBonusCalculationResponseUsersItem))) {
                $invalidValues[] = is_object($saveMidocoBonusCalculationResponseUsersItem) ? get_class($saveMidocoBonusCalculationResponseUsersItem) : sprintf('%s(%s)', gettype($saveMidocoBonusCalculationResponseUsersItem), var_export($saveMidocoBonusCalculationResponseUsersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The users property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set users value
     * @throws InvalidArgumentException
     * @param int[] $users
     * @return \Pggns\MidocoApi\Order\StructType\SaveMidocoBonusCalculationResponse
     */
    public function setUsers(array $users = []): self
    {
        // validation for constraint: array
        if ('' !== ($usersArrayErrorMessage = self::validateUsersForArrayConstraintsFromSetUsers($users))) {
            throw new InvalidArgumentException($usersArrayErrorMessage, __LINE__);
        }
        $this->users = $users;
        
        return $this;
    }
    /**
     * Add item to users value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveMidocoBonusCalculationResponse
     */
    public function addToUsers(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The users property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->users[] = $item;
        
        return $this;
    }
    /**
     * Get bonusId value
     * @return int|null
     */
    public function getBonusId(): ?int
    {
        return $this->bonusId;
    }
    /**
     * Set bonusId value
     * @param int $bonusId
     * @return \Pggns\MidocoApi\Order\StructType\SaveMidocoBonusCalculationResponse
     */
    public function setBonusId(?int $bonusId = null): self
    {
        // validation for constraint: int
        if (!is_null($bonusId) && !(is_int($bonusId) || ctype_digit($bonusId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bonusId, true), gettype($bonusId)), __LINE__);
        }
        $this->bonusId = $bonusId;
        
        return $this;
    }
}
