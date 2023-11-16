<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveWSGroupsForUserResponse StructType
 * @subpackage Structs
 */
class SaveWSGroupsForUserResponse extends AbstractStructBase
{
    /**
     * The processedWSGroups
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $processedWSGroups = [];
    /**
     * Constructor method for SaveWSGroupsForUserResponse
     * @uses SaveWSGroupsForUserResponse::setProcessedWSGroups()
     * @param int[] $processedWSGroups
     */
    public function __construct(array $processedWSGroups = [])
    {
        $this
            ->setProcessedWSGroups($processedWSGroups);
    }
    /**
     * Get processedWSGroups value
     * @return int[]
     */
    public function getProcessedWSGroups(): array
    {
        return $this->processedWSGroups;
    }
    /**
     * This method is responsible for validating the values passed to the setProcessedWSGroups method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProcessedWSGroups method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProcessedWSGroupsForArrayConstraintsFromSetProcessedWSGroups(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveWSGroupsForUserResponseProcessedWSGroupsItem) {
            // validation for constraint: itemType
            if (!(is_int($saveWSGroupsForUserResponseProcessedWSGroupsItem) || ctype_digit($saveWSGroupsForUserResponseProcessedWSGroupsItem))) {
                $invalidValues[] = is_object($saveWSGroupsForUserResponseProcessedWSGroupsItem) ? get_class($saveWSGroupsForUserResponseProcessedWSGroupsItem) : sprintf('%s(%s)', gettype($saveWSGroupsForUserResponseProcessedWSGroupsItem), var_export($saveWSGroupsForUserResponseProcessedWSGroupsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The processedWSGroups property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set processedWSGroups value
     * @throws InvalidArgumentException
     * @param int[] $processedWSGroups
     * @return \Pggns\MidocoApi\Order\StructType\SaveWSGroupsForUserResponse
     */
    public function setProcessedWSGroups(array $processedWSGroups = []): self
    {
        // validation for constraint: array
        if ('' !== ($processedWSGroupsArrayErrorMessage = self::validateProcessedWSGroupsForArrayConstraintsFromSetProcessedWSGroups($processedWSGroups))) {
            throw new InvalidArgumentException($processedWSGroupsArrayErrorMessage, __LINE__);
        }
        $this->processedWSGroups = $processedWSGroups;
        
        return $this;
    }
    /**
     * Add item to processedWSGroups value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveWSGroupsForUserResponse
     */
    public function addToProcessedWSGroups(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The processedWSGroups property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->processedWSGroups[] = $item;
        
        return $this;
    }
}
