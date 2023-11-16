<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTravelDocumentsRequest StructType
 * @subpackage Structs
 */
class DeleteTravelDocumentsRequest extends AbstractStructBase
{
    /**
     * The tdId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected array $tdId = [];
    /**
     * Constructor method for DeleteTravelDocumentsRequest
     * @uses DeleteTravelDocumentsRequest::setTdId()
     * @param int[] $tdId
     */
    public function __construct(array $tdId = [])
    {
        $this
            ->setTdId($tdId);
    }
    /**
     * Get tdId value
     * @return int[]
     */
    public function getTdId(): array
    {
        return $this->tdId;
    }
    /**
     * This method is responsible for validating the values passed to the setTdId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTdId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTdIdForArrayConstraintsFromSetTdId(array $values = []): string
    {
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
    public function setTdId(array $tdId = []): self
    {
        // validation for constraint: array
        if ('' !== ($tdIdArrayErrorMessage = self::validateTdIdForArrayConstraintsFromSetTdId($tdId))) {
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
