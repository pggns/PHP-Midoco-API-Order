<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTravelDocumentsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteTravelDocumentsRequest extends AbstractStructBase
{
    /**
     * The tdId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected ?array $tdId = null;
    /**
     * Constructor method for DeleteTravelDocumentsRequest
     * @uses DeleteTravelDocumentsRequest::setTdId()
     * @param int[] $tdId
     */
    public function __construct(?array $tdId = null)
    {
        $this
            ->setTdId($tdId);
    }
    /**
     * Get tdId value
     * @return int[]
     */
    public function getTdId(): ?array
    {
        return $this->tdId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTdId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTdId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTdIdForArrayConstraintFromSetTdId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteTravelDocumentsRequestTdIdItem) {
            // validation for constraint: itemType
            if (!(is_int($deleteTravelDocumentsRequestTdIdItem) || ctype_digit($deleteTravelDocumentsRequestTdIdItem))) {
                $invalidValues[] = is_object($deleteTravelDocumentsRequestTdIdItem) ? get_class($deleteTravelDocumentsRequestTdIdItem) : sprintf('%s(%s)', gettype($deleteTravelDocumentsRequestTdIdItem), var_export($deleteTravelDocumentsRequestTdIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The tdId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set tdId value
     * @throws InvalidArgumentException
     * @param int[] $tdId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteTravelDocumentsRequest
     */
    public function setTdId(?array $tdId = null): self
    {
        // validation for constraint: array
        if ('' !== ($tdIdArrayErrorMessage = self::validateTdIdForArrayConstraintFromSetTdId($tdId))) {
            throw new InvalidArgumentException($tdIdArrayErrorMessage, __LINE__);
        }
        $this->tdId = $tdId;
        
        return $this;
    }
    /**
     * Add item to tdId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\DeleteTravelDocumentsRequest
     */
    public function addToTdId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The tdId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->tdId[] = $item;
        
        return $this;
    }
}
