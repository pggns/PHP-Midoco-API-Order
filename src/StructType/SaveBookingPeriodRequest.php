<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBookingPeriodRequest StructType
 * @subpackage Structs
 */
class SaveBookingPeriodRequest extends AbstractStructBase
{
    /**
     * The MidocoBookingPeriod
     * Meta information extracted from the WSDL
     * - ref: MidocoBookingPeriod
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBookingPeriod|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBookingPeriod $MidocoBookingPeriod = null;
    /**
     * The pastYearsToClose
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $pastYearsToClose = [];
    /**
     * Constructor method for SaveBookingPeriodRequest
     * @uses SaveBookingPeriodRequest::setMidocoBookingPeriod()
     * @uses SaveBookingPeriodRequest::setPastYearsToClose()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingPeriod $midocoBookingPeriod
     * @param int[] $pastYearsToClose
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBookingPeriod $midocoBookingPeriod = null, array $pastYearsToClose = [])
    {
        $this
            ->setMidocoBookingPeriod($midocoBookingPeriod)
            ->setPastYearsToClose($pastYearsToClose);
    }
    /**
     * Get MidocoBookingPeriod value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingPeriod|null
     */
    public function getMidocoBookingPeriod(): ?\Pggns\MidocoApi\Order\StructType\MidocoBookingPeriod
    {
        return $this->MidocoBookingPeriod;
    }
    /**
     * Set MidocoBookingPeriod value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingPeriod $midocoBookingPeriod
     * @return \Pggns\MidocoApi\Order\StructType\SaveBookingPeriodRequest
     */
    public function setMidocoBookingPeriod(?\Pggns\MidocoApi\Order\StructType\MidocoBookingPeriod $midocoBookingPeriod = null): self
    {
        $this->MidocoBookingPeriod = $midocoBookingPeriod;
        
        return $this;
    }
    /**
     * Get pastYearsToClose value
     * @return int[]
     */
    public function getPastYearsToClose(): array
    {
        return $this->pastYearsToClose;
    }
    /**
     * This method is responsible for validating the values passed to the setPastYearsToClose method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPastYearsToClose method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePastYearsToCloseForArrayConstraintsFromSetPastYearsToClose(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveBookingPeriodRequestPastYearsToCloseItem) {
            // validation for constraint: itemType
            if (!(is_int($saveBookingPeriodRequestPastYearsToCloseItem) || ctype_digit($saveBookingPeriodRequestPastYearsToCloseItem))) {
                $invalidValues[] = is_object($saveBookingPeriodRequestPastYearsToCloseItem) ? get_class($saveBookingPeriodRequestPastYearsToCloseItem) : sprintf('%s(%s)', gettype($saveBookingPeriodRequestPastYearsToCloseItem), var_export($saveBookingPeriodRequestPastYearsToCloseItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The pastYearsToClose property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set pastYearsToClose value
     * @throws InvalidArgumentException
     * @param int[] $pastYearsToClose
     * @return \Pggns\MidocoApi\Order\StructType\SaveBookingPeriodRequest
     */
    public function setPastYearsToClose(array $pastYearsToClose = []): self
    {
        // validation for constraint: array
        if ('' !== ($pastYearsToCloseArrayErrorMessage = self::validatePastYearsToCloseForArrayConstraintsFromSetPastYearsToClose($pastYearsToClose))) {
            throw new InvalidArgumentException($pastYearsToCloseArrayErrorMessage, __LINE__);
        }
        $this->pastYearsToClose = $pastYearsToClose;
        
        return $this;
    }
    /**
     * Add item to pastYearsToClose value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveBookingPeriodRequest
     */
    public function addToPastYearsToClose(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The pastYearsToClose property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->pastYearsToClose[] = $item;
        
        return $this;
    }
}
