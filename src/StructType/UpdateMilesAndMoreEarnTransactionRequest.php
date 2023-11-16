<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateMilesAndMoreEarnTransactionRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This action can be used to send a transaction to Miles & More, that is still in state NOT_CREATED, or create a transaction anew and send it to Miles & More in case its content changed. The action fails, if the transaction was already
 * paid out, or it is past due date.
 * @subpackage Structs
 */
class UpdateMilesAndMoreEarnTransactionRequest extends AbstractStructBase
{
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - documentation: Sell item id
     * - base: xs:integer
     * - maxOccurs: unbounded
     * - minInclusive: 1
     * - minOccurs: 0
     * @var int[]
     */
    protected array $ItemId = [];
    /**
     * The prepare
     * Meta information extracted from the WSDL
     * - documentation: Supply false, to resend a transaction as is. Otherwise, the transaction is recalculated and save in state NOT_CREATED. Default: true.
     * @var bool|null
     */
    protected ?bool $prepare = null;
    /**
     * The send
     * Meta information extracted from the WSDL
     * - documentation: Supply false, to prevent sending the transaction to Miles & More. The transaction is sent, if is in state NOT_CREATED. Default: true.
     * @var bool|null
     */
    protected ?bool $send = null;
    /**
     * Constructor method for UpdateMilesAndMoreEarnTransactionRequest
     * @uses UpdateMilesAndMoreEarnTransactionRequest::setItemId()
     * @uses UpdateMilesAndMoreEarnTransactionRequest::setPrepare()
     * @uses UpdateMilesAndMoreEarnTransactionRequest::setSend()
     * @param int[] $itemId
     * @param bool $prepare
     * @param bool $send
     */
    public function __construct(array $itemId = [], ?bool $prepare = null, ?bool $send = null)
    {
        $this
            ->setItemId($itemId)
            ->setPrepare($prepare)
            ->setSend($send);
    }
    /**
     * Get ItemId value
     * @return int[]
     */
    public function getItemId(): array
    {
        return $this->ItemId;
    }
    /**
     * This method is responsible for validating the values passed to the setItemId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemIdForArrayConstraintsFromSetItemId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $updateMilesAndMoreEarnTransactionRequestItemIdItem) {
            // validation for constraint: itemType
            if (!(is_int($updateMilesAndMoreEarnTransactionRequestItemIdItem) || ctype_digit($updateMilesAndMoreEarnTransactionRequestItemIdItem))) {
                $invalidValues[] = is_object($updateMilesAndMoreEarnTransactionRequestItemIdItem) ? get_class($updateMilesAndMoreEarnTransactionRequestItemIdItem) : sprintf('%s(%s)', gettype($updateMilesAndMoreEarnTransactionRequestItemIdItem), var_export($updateMilesAndMoreEarnTransactionRequestItemIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ItemId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ItemId value
     * @throws InvalidArgumentException
     * @param int[] $itemId
     * @return \Pggns\MidocoApi\Order\StructType\UpdateMilesAndMoreEarnTransactionRequest
     */
    public function setItemId(array $itemId = []): self
    {
        // validation for constraint: array
        if ('' !== ($itemIdArrayErrorMessage = self::validateItemIdForArrayConstraintsFromSetItemId($itemId))) {
            throw new InvalidArgumentException($itemIdArrayErrorMessage, __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($itemId) && $itemId < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($itemId, true)), __LINE__);
        }
        $this->ItemId = $itemId;
        
        return $this;
    }
    /**
     * Add item to ItemId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\UpdateMilesAndMoreEarnTransactionRequest
     */
    public function addToItemId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The ItemId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if ($item < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($item, true)), __LINE__);
        }
        $this->ItemId[] = $item;
        
        return $this;
    }
    /**
     * Get prepare value
     * @return bool|null
     */
    public function getPrepare(): ?bool
    {
        return $this->prepare;
    }
    /**
     * Set prepare value
     * @param bool $prepare
     * @return \Pggns\MidocoApi\Order\StructType\UpdateMilesAndMoreEarnTransactionRequest
     */
    public function setPrepare(?bool $prepare = null): self
    {
        // validation for constraint: boolean
        if (!is_null($prepare) && !is_bool($prepare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prepare, true), gettype($prepare)), __LINE__);
        }
        $this->prepare = $prepare;
        
        return $this;
    }
    /**
     * Get send value
     * @return bool|null
     */
    public function getSend(): ?bool
    {
        return $this->send;
    }
    /**
     * Set send value
     * @param bool $send
     * @return \Pggns\MidocoApi\Order\StructType\UpdateMilesAndMoreEarnTransactionRequest
     */
    public function setSend(?bool $send = null): self
    {
        // validation for constraint: boolean
        if (!is_null($send) && !is_bool($send)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($send, true), gettype($send)), __LINE__);
        }
        $this->send = $send;
        
        return $this;
    }
}
