<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveFairplaneEmail4OrderRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveFairplaneEmail4OrderRequest extends AbstractStructBase
{
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected ?array $orderId = null;
    /**
     * The MidocoMailMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: mail:MidocoMailMessage
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * Constructor method for SaveFairplaneEmail4OrderRequest
     * @uses SaveFairplaneEmail4OrderRequest::setOrderId()
     * @uses SaveFairplaneEmail4OrderRequest::setMidocoMailMessage()
     * @param int[] $orderId
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage
     */
    public function __construct(?array $orderId = null, ?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage = null)
    {
        $this
            ->setOrderId($orderId)
            ->setMidocoMailMessage($midocoMailMessage);
    }
    /**
     * Get orderId value
     * @return int[]
     */
    public function getOrderId(): ?array
    {
        return $this->orderId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOrderId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderIdForArrayConstraintFromSetOrderId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveFairplaneEmail4OrderRequestOrderIdItem) {
            // validation for constraint: itemType
            if (!(is_int($saveFairplaneEmail4OrderRequestOrderIdItem) || ctype_digit($saveFairplaneEmail4OrderRequestOrderIdItem))) {
                $invalidValues[] = is_object($saveFairplaneEmail4OrderRequestOrderIdItem) ? get_class($saveFairplaneEmail4OrderRequestOrderIdItem) : sprintf('%s(%s)', gettype($saveFairplaneEmail4OrderRequestOrderIdItem), var_export($saveFairplaneEmail4OrderRequestOrderIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orderId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orderId value
     * @throws InvalidArgumentException
     * @param int[] $orderId
     * @return \Pggns\MidocoApi\Order\StructType\SaveFairplaneEmail4OrderRequest
     */
    public function setOrderId(?array $orderId = null): self
    {
        // validation for constraint: array
        if ('' !== ($orderIdArrayErrorMessage = self::validateOrderIdForArrayConstraintFromSetOrderId($orderId))) {
            throw new InvalidArgumentException($orderIdArrayErrorMessage, __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Add item to orderId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveFairplaneEmail4OrderRequest
     */
    public function addToOrderId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The orderId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orderId[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMailMessage value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType|null
     */
    public function getMidocoMailMessage(): ?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType
    {
        return $this->MidocoMailMessage;
    }
    /**
     * Set MidocoMailMessage value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage
     * @return \Pggns\MidocoApi\Order\StructType\SaveFairplaneEmail4OrderRequest
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
}
