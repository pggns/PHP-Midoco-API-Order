<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoidReceiptRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VoidReceiptRequest extends AbstractStructBase
{
    /**
     * The receiptId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $receiptId;
    /**
     * The ReceiptPositioninfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ReceiptPositioninfo
     * @var \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo[]
     */
    protected ?array $ReceiptPositioninfo = null;
    /**
     * The ReceiptOnlinePaymentInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ReceiptOnlinePaymentInfo
     * @var \Pggns\MidocoApi\Order\StructType\ReceiptOnlinePaymentInfo|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\ReceiptOnlinePaymentInfo $ReceiptOnlinePaymentInfo = null;
    /**
     * The doPrint
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $doPrint = null;
    /**
     * Constructor method for VoidReceiptRequest
     * @uses VoidReceiptRequest::setReceiptId()
     * @uses VoidReceiptRequest::setReceiptPositioninfo()
     * @uses VoidReceiptRequest::setReceiptOnlinePaymentInfo()
     * @uses VoidReceiptRequest::setDoPrint()
     * @param int $receiptId
     * @param \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo[] $receiptPositioninfo
     * @param \Pggns\MidocoApi\Order\StructType\ReceiptOnlinePaymentInfo $receiptOnlinePaymentInfo
     * @param bool $doPrint
     */
    public function __construct(int $receiptId, ?array $receiptPositioninfo = null, ?\Pggns\MidocoApi\Order\StructType\ReceiptOnlinePaymentInfo $receiptOnlinePaymentInfo = null, ?bool $doPrint = false)
    {
        $this
            ->setReceiptId($receiptId)
            ->setReceiptPositioninfo($receiptPositioninfo)
            ->setReceiptOnlinePaymentInfo($receiptOnlinePaymentInfo)
            ->setDoPrint($doPrint);
    }
    /**
     * Get receiptId value
     * @return int
     */
    public function getReceiptId(): int
    {
        return $this->receiptId;
    }
    /**
     * Set receiptId value
     * @param int $receiptId
     * @return \Pggns\MidocoApi\Order\StructType\VoidReceiptRequest
     */
    public function setReceiptId(int $receiptId): self
    {
        // validation for constraint: int
        if (!is_null($receiptId) && !(is_int($receiptId) || ctype_digit($receiptId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptId, true), gettype($receiptId)), __LINE__);
        }
        $this->receiptId = $receiptId;
        
        return $this;
    }
    /**
     * Get ReceiptPositioninfo value
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo[]
     */
    public function getReceiptPositioninfo(): ?array
    {
        return $this->ReceiptPositioninfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setReceiptPositioninfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReceiptPositioninfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReceiptPositioninfoForArrayConstraintFromSetReceiptPositioninfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $voidReceiptRequestReceiptPositioninfoItem) {
            // validation for constraint: itemType
            if (!$voidReceiptRequestReceiptPositioninfoItem instanceof \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo) {
                $invalidValues[] = is_object($voidReceiptRequestReceiptPositioninfoItem) ? get_class($voidReceiptRequestReceiptPositioninfoItem) : sprintf('%s(%s)', gettype($voidReceiptRequestReceiptPositioninfoItem), var_export($voidReceiptRequestReceiptPositioninfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReceiptPositioninfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ReceiptPositioninfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo[] $receiptPositioninfo
     * @return \Pggns\MidocoApi\Order\StructType\VoidReceiptRequest
     */
    public function setReceiptPositioninfo(?array $receiptPositioninfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($receiptPositioninfoArrayErrorMessage = self::validateReceiptPositioninfoForArrayConstraintFromSetReceiptPositioninfo($receiptPositioninfo))) {
            throw new InvalidArgumentException($receiptPositioninfoArrayErrorMessage, __LINE__);
        }
        $this->ReceiptPositioninfo = $receiptPositioninfo;
        
        return $this;
    }
    /**
     * Add item to ReceiptPositioninfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo $item
     * @return \Pggns\MidocoApi\Order\StructType\VoidReceiptRequest
     */
    public function addToReceiptPositioninfo(\Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo) {
            throw new InvalidArgumentException(sprintf('The ReceiptPositioninfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ReceiptPositioninfo[] = $item;
        
        return $this;
    }
    /**
     * Get ReceiptOnlinePaymentInfo value
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptOnlinePaymentInfo|null
     */
    public function getReceiptOnlinePaymentInfo(): ?\Pggns\MidocoApi\Order\StructType\ReceiptOnlinePaymentInfo
    {
        return $this->ReceiptOnlinePaymentInfo;
    }
    /**
     * Set ReceiptOnlinePaymentInfo value
     * @param \Pggns\MidocoApi\Order\StructType\ReceiptOnlinePaymentInfo $receiptOnlinePaymentInfo
     * @return \Pggns\MidocoApi\Order\StructType\VoidReceiptRequest
     */
    public function setReceiptOnlinePaymentInfo(?\Pggns\MidocoApi\Order\StructType\ReceiptOnlinePaymentInfo $receiptOnlinePaymentInfo = null): self
    {
        $this->ReceiptOnlinePaymentInfo = $receiptOnlinePaymentInfo;
        
        return $this;
    }
    /**
     * Get doPrint value
     * @return bool|null
     */
    public function getDoPrint(): ?bool
    {
        return $this->doPrint;
    }
    /**
     * Set doPrint value
     * @param bool $doPrint
     * @return \Pggns\MidocoApi\Order\StructType\VoidReceiptRequest
     */
    public function setDoPrint(?bool $doPrint = false): self
    {
        // validation for constraint: boolean
        if (!is_null($doPrint) && !is_bool($doPrint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($doPrint, true), gettype($doPrint)), __LINE__);
        }
        $this->doPrint = $doPrint;
        
        return $this;
    }
}
