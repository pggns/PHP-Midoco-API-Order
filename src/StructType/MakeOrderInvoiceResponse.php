<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakeOrderInvoiceResponse StructType
 * @subpackage Structs
 */
class MakeOrderInvoiceResponse extends AbstractStructBase
{
    /**
     * The MidocoInvoice
     * Meta information extracted from the WSDL
     * - ref: MidocoInvoice
     * @var \Pggns\MidocoApi\Order\StructType\MidocoInvoice|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoInvoice $MidocoInvoice = null;
    /**
     * The VoidInvoice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoInvoiceType $VoidInvoice = null;
    /**
     * The VoidInvoices
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType[]
     */
    protected array $VoidInvoices = [];
    /**
     * The VoidPartialInvoice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType[]
     */
    protected array $VoidPartialInvoice = [];
    /**
     * Constructor method for MakeOrderInvoiceResponse
     * @uses MakeOrderInvoiceResponse::setMidocoInvoice()
     * @uses MakeOrderInvoiceResponse::setVoidInvoice()
     * @uses MakeOrderInvoiceResponse::setVoidInvoices()
     * @uses MakeOrderInvoiceResponse::setVoidPartialInvoice()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoice $midocoInvoice
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType $voidInvoice
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType[] $voidInvoices
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType[] $voidPartialInvoice
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoInvoice $midocoInvoice = null, ?\Pggns\MidocoApi\Order\StructType\MidocoInvoiceType $voidInvoice = null, array $voidInvoices = [], array $voidPartialInvoice = [])
    {
        $this
            ->setMidocoInvoice($midocoInvoice)
            ->setVoidInvoice($voidInvoice)
            ->setVoidInvoices($voidInvoices)
            ->setVoidPartialInvoice($voidPartialInvoice);
    }
    /**
     * Get MidocoInvoice value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoice|null
     */
    public function getMidocoInvoice(): ?\Pggns\MidocoApi\Order\StructType\MidocoInvoice
    {
        return $this->MidocoInvoice;
    }
    /**
     * Set MidocoInvoice value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoice $midocoInvoice
     * @return \Pggns\MidocoApi\Order\StructType\MakeOrderInvoiceResponse
     */
    public function setMidocoInvoice(?\Pggns\MidocoApi\Order\StructType\MidocoInvoice $midocoInvoice = null): self
    {
        $this->MidocoInvoice = $midocoInvoice;
        
        return $this;
    }
    /**
     * Get VoidInvoice value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType|null
     */
    public function getVoidInvoice(): ?\Pggns\MidocoApi\Order\StructType\MidocoInvoiceType
    {
        return $this->VoidInvoice;
    }
    /**
     * Set VoidInvoice value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType $voidInvoice
     * @return \Pggns\MidocoApi\Order\StructType\MakeOrderInvoiceResponse
     */
    public function setVoidInvoice(?\Pggns\MidocoApi\Order\StructType\MidocoInvoiceType $voidInvoice = null): self
    {
        $this->VoidInvoice = $voidInvoice;
        
        return $this;
    }
    /**
     * Get VoidInvoices value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType[]
     */
    public function getVoidInvoices(): array
    {
        return $this->VoidInvoices;
    }
    /**
     * This method is responsible for validating the values passed to the setVoidInvoices method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVoidInvoices method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVoidInvoicesForArrayConstraintsFromSetVoidInvoices(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $makeOrderInvoiceResponseVoidInvoicesItem) {
            // validation for constraint: itemType
            if (!$makeOrderInvoiceResponseVoidInvoicesItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType) {
                $invalidValues[] = is_object($makeOrderInvoiceResponseVoidInvoicesItem) ? get_class($makeOrderInvoiceResponseVoidInvoicesItem) : sprintf('%s(%s)', gettype($makeOrderInvoiceResponseVoidInvoicesItem), var_export($makeOrderInvoiceResponseVoidInvoicesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VoidInvoices property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VoidInvoices value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType[] $voidInvoices
     * @return \Pggns\MidocoApi\Order\StructType\MakeOrderInvoiceResponse
     */
    public function setVoidInvoices(array $voidInvoices = []): self
    {
        // validation for constraint: array
        if ('' !== ($voidInvoicesArrayErrorMessage = self::validateVoidInvoicesForArrayConstraintsFromSetVoidInvoices($voidInvoices))) {
            throw new InvalidArgumentException($voidInvoicesArrayErrorMessage, __LINE__);
        }
        $this->VoidInvoices = $voidInvoices;
        
        return $this;
    }
    /**
     * Add item to VoidInvoices value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType $item
     * @return \Pggns\MidocoApi\Order\StructType\MakeOrderInvoiceResponse
     */
    public function addToVoidInvoices(\Pggns\MidocoApi\Order\StructType\MidocoInvoiceType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType) {
            throw new InvalidArgumentException(sprintf('The VoidInvoices property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->VoidInvoices[] = $item;
        
        return $this;
    }
    /**
     * Get VoidPartialInvoice value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType[]
     */
    public function getVoidPartialInvoice(): array
    {
        return $this->VoidPartialInvoice;
    }
    /**
     * This method is responsible for validating the values passed to the setVoidPartialInvoice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVoidPartialInvoice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVoidPartialInvoiceForArrayConstraintsFromSetVoidPartialInvoice(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $makeOrderInvoiceResponseVoidPartialInvoiceItem) {
            // validation for constraint: itemType
            if (!$makeOrderInvoiceResponseVoidPartialInvoiceItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType) {
                $invalidValues[] = is_object($makeOrderInvoiceResponseVoidPartialInvoiceItem) ? get_class($makeOrderInvoiceResponseVoidPartialInvoiceItem) : sprintf('%s(%s)', gettype($makeOrderInvoiceResponseVoidPartialInvoiceItem), var_export($makeOrderInvoiceResponseVoidPartialInvoiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VoidPartialInvoice property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VoidPartialInvoice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType[] $voidPartialInvoice
     * @return \Pggns\MidocoApi\Order\StructType\MakeOrderInvoiceResponse
     */
    public function setVoidPartialInvoice(array $voidPartialInvoice = []): self
    {
        // validation for constraint: array
        if ('' !== ($voidPartialInvoiceArrayErrorMessage = self::validateVoidPartialInvoiceForArrayConstraintsFromSetVoidPartialInvoice($voidPartialInvoice))) {
            throw new InvalidArgumentException($voidPartialInvoiceArrayErrorMessage, __LINE__);
        }
        $this->VoidPartialInvoice = $voidPartialInvoice;
        
        return $this;
    }
    /**
     * Add item to VoidPartialInvoice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType $item
     * @return \Pggns\MidocoApi\Order\StructType\MakeOrderInvoiceResponse
     */
    public function addToVoidPartialInvoice(\Pggns\MidocoApi\Order\StructType\MidocoInvoiceType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType) {
            throw new InvalidArgumentException(sprintf('The VoidPartialInvoice property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->VoidPartialInvoice[] = $item;
        
        return $this;
    }
}
