<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchAccountResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchAccountResponse extends AbstractStructBase
{
    /**
     * The MidocoAccount
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAccount
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAccount[]
     */
    protected ?array $MidocoAccount = null;
    /**
     * Constructor method for SearchAccountResponse
     * @uses SearchAccountResponse::setMidocoAccount()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAccount[] $midocoAccount
     */
    public function __construct(?array $midocoAccount = null)
    {
        $this
            ->setMidocoAccount($midocoAccount);
    }
    /**
     * Get MidocoAccount value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAccount[]
     */
    public function getMidocoAccount(): ?array
    {
        return $this->MidocoAccount;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAccount method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAccountForArrayConstraintFromSetMidocoAccount(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchAccountResponseMidocoAccountItem) {
            // validation for constraint: itemType
            if (!$searchAccountResponseMidocoAccountItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAccount) {
                $invalidValues[] = is_object($searchAccountResponseMidocoAccountItem) ? get_class($searchAccountResponseMidocoAccountItem) : sprintf('%s(%s)', gettype($searchAccountResponseMidocoAccountItem), var_export($searchAccountResponseMidocoAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAccount property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAccount, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAccount[] $midocoAccount
     * @return \Pggns\MidocoApi\Order\StructType\SearchAccountResponse
     */
    public function setMidocoAccount(?array $midocoAccount = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAccountArrayErrorMessage = self::validateMidocoAccountForArrayConstraintFromSetMidocoAccount($midocoAccount))) {
            throw new InvalidArgumentException($midocoAccountArrayErrorMessage, __LINE__);
        }
        $this->MidocoAccount = $midocoAccount;
        
        return $this;
    }
    /**
     * Add item to MidocoAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAccount $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchAccountResponse
     */
    public function addToMidocoAccount(\Pggns\MidocoApi\Order\StructType\MidocoAccount $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAccount) {
            throw new InvalidArgumentException(sprintf('The MidocoAccount property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAccount, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAccount[] = $item;
        
        return $this;
    }
}
