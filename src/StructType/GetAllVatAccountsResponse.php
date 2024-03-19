<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllVatAccountsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAllVatAccountsResponse extends AbstractStructBase
{
    /**
     * The MidocoVatAccount
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVatAccount
     * @var \Pggns\MidocoApi\Order\StructType\VatAccountDTO[]
     */
    protected ?array $MidocoVatAccount = null;
    /**
     * Constructor method for GetAllVatAccountsResponse
     * @uses GetAllVatAccountsResponse::setMidocoVatAccount()
     * @param \Pggns\MidocoApi\Order\StructType\VatAccountDTO[] $midocoVatAccount
     */
    public function __construct(?array $midocoVatAccount = null)
    {
        $this
            ->setMidocoVatAccount($midocoVatAccount);
    }
    /**
     * Get MidocoVatAccount value
     * @return \Pggns\MidocoApi\Order\StructType\VatAccountDTO[]
     */
    public function getMidocoVatAccount(): ?array
    {
        return $this->MidocoVatAccount;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoVatAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVatAccount method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVatAccountForArrayConstraintFromSetMidocoVatAccount(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllVatAccountsResponseMidocoVatAccountItem) {
            // validation for constraint: itemType
            if (!$getAllVatAccountsResponseMidocoVatAccountItem instanceof \Pggns\MidocoApi\Order\StructType\VatAccountDTO) {
                $invalidValues[] = is_object($getAllVatAccountsResponseMidocoVatAccountItem) ? get_class($getAllVatAccountsResponseMidocoVatAccountItem) : sprintf('%s(%s)', gettype($getAllVatAccountsResponseMidocoVatAccountItem), var_export($getAllVatAccountsResponseMidocoVatAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVatAccount property can only contain items of type \Pggns\MidocoApi\Order\StructType\VatAccountDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVatAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VatAccountDTO[] $midocoVatAccount
     * @return \Pggns\MidocoApi\Order\StructType\GetAllVatAccountsResponse
     */
    public function setMidocoVatAccount(?array $midocoVatAccount = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVatAccountArrayErrorMessage = self::validateMidocoVatAccountForArrayConstraintFromSetMidocoVatAccount($midocoVatAccount))) {
            throw new InvalidArgumentException($midocoVatAccountArrayErrorMessage, __LINE__);
        }
        $this->MidocoVatAccount = $midocoVatAccount;
        
        return $this;
    }
    /**
     * Add item to MidocoVatAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VatAccountDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAllVatAccountsResponse
     */
    public function addToMidocoVatAccount(\Pggns\MidocoApi\Order\StructType\VatAccountDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\VatAccountDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoVatAccount property can only contain items of type \Pggns\MidocoApi\Order\StructType\VatAccountDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVatAccount[] = $item;
        
        return $this;
    }
}
