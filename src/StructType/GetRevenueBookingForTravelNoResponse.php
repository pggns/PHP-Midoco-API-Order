<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRevenueBookingForTravelNoResponse StructType
 * @subpackage Structs
 */
class GetRevenueBookingForTravelNoResponse extends AbstractStructBase
{
    /**
     * The RevenueBookingForTravelNo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: RevenueBookingForTravelNo
     * @var \Pggns\MidocoApi\Order\StructType\RevenueBookingForTravelNo[]
     */
    protected array $RevenueBookingForTravelNo = [];
    /**
     * Constructor method for GetRevenueBookingForTravelNoResponse
     * @uses GetRevenueBookingForTravelNoResponse::setRevenueBookingForTravelNo()
     * @param \Pggns\MidocoApi\Order\StructType\RevenueBookingForTravelNo[] $revenueBookingForTravelNo
     */
    public function __construct(array $revenueBookingForTravelNo = [])
    {
        $this
            ->setRevenueBookingForTravelNo($revenueBookingForTravelNo);
    }
    /**
     * Get RevenueBookingForTravelNo value
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingForTravelNo[]
     */
    public function getRevenueBookingForTravelNo(): array
    {
        return $this->RevenueBookingForTravelNo;
    }
    /**
     * This method is responsible for validating the values passed to the setRevenueBookingForTravelNo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRevenueBookingForTravelNo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRevenueBookingForTravelNoForArrayConstraintsFromSetRevenueBookingForTravelNo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRevenueBookingForTravelNoResponseRevenueBookingForTravelNoItem) {
            // validation for constraint: itemType
            if (!$getRevenueBookingForTravelNoResponseRevenueBookingForTravelNoItem instanceof \Pggns\MidocoApi\Order\StructType\RevenueBookingForTravelNo) {
                $invalidValues[] = is_object($getRevenueBookingForTravelNoResponseRevenueBookingForTravelNoItem) ? get_class($getRevenueBookingForTravelNoResponseRevenueBookingForTravelNoItem) : sprintf('%s(%s)', gettype($getRevenueBookingForTravelNoResponseRevenueBookingForTravelNoItem), var_export($getRevenueBookingForTravelNoResponseRevenueBookingForTravelNoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RevenueBookingForTravelNo property can only contain items of type \Pggns\MidocoApi\Order\StructType\RevenueBookingForTravelNo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RevenueBookingForTravelNo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\RevenueBookingForTravelNo[] $revenueBookingForTravelNo
     * @return \Pggns\MidocoApi\Order\StructType\GetRevenueBookingForTravelNoResponse
     */
    public function setRevenueBookingForTravelNo(array $revenueBookingForTravelNo = []): self
    {
        // validation for constraint: array
        if ('' !== ($revenueBookingForTravelNoArrayErrorMessage = self::validateRevenueBookingForTravelNoForArrayConstraintsFromSetRevenueBookingForTravelNo($revenueBookingForTravelNo))) {
            throw new InvalidArgumentException($revenueBookingForTravelNoArrayErrorMessage, __LINE__);
        }
        $this->RevenueBookingForTravelNo = $revenueBookingForTravelNo;
        
        return $this;
    }
    /**
     * Add item to RevenueBookingForTravelNo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\RevenueBookingForTravelNo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetRevenueBookingForTravelNoResponse
     */
    public function addToRevenueBookingForTravelNo(\Pggns\MidocoApi\Order\StructType\RevenueBookingForTravelNo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\RevenueBookingForTravelNo) {
            throw new InvalidArgumentException(sprintf('The RevenueBookingForTravelNo property can only contain items of type \Pggns\MidocoApi\Order\StructType\RevenueBookingForTravelNo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RevenueBookingForTravelNo[] = $item;
        
        return $this;
    }
}
