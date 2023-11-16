<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCcToken StructType
 * @subpackage Structs
 */
class MidocoCcToken extends CcTokenDTO
{
    /**
     * The MidocoCcTokenAttr
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCcTokenAttr
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCcTokenAttr[]
     */
    protected array $MidocoCcTokenAttr = [];
    /**
     * The ccMask
     * @var string|null
     */
    protected ?string $ccMask = null;
    /**
     * The lookupLink
     * @var string|null
     */
    protected ?string $lookupLink = null;
    /**
     * Constructor method for MidocoCcToken
     * @uses MidocoCcToken::setMidocoCcTokenAttr()
     * @uses MidocoCcToken::setCcMask()
     * @uses MidocoCcToken::setLookupLink()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCcTokenAttr[] $midocoCcTokenAttr
     * @param string $ccMask
     * @param string $lookupLink
     */
    public function __construct(array $midocoCcTokenAttr = [], ?string $ccMask = null, ?string $lookupLink = null)
    {
        $this
            ->setMidocoCcTokenAttr($midocoCcTokenAttr)
            ->setCcMask($ccMask)
            ->setLookupLink($lookupLink);
    }
    /**
     * Get MidocoCcTokenAttr value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcTokenAttr[]
     */
    public function getMidocoCcTokenAttr(): array
    {
        return $this->MidocoCcTokenAttr;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCcTokenAttr method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCcTokenAttr method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCcTokenAttrForArrayConstraintsFromSetMidocoCcTokenAttr(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCcTokenMidocoCcTokenAttrItem) {
            // validation for constraint: itemType
            if (!$midocoCcTokenMidocoCcTokenAttrItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCcTokenAttr) {
                $invalidValues[] = is_object($midocoCcTokenMidocoCcTokenAttrItem) ? get_class($midocoCcTokenMidocoCcTokenAttrItem) : sprintf('%s(%s)', gettype($midocoCcTokenMidocoCcTokenAttrItem), var_export($midocoCcTokenMidocoCcTokenAttrItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCcTokenAttr property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCcTokenAttr, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCcTokenAttr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCcTokenAttr[] $midocoCcTokenAttr
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcToken
     */
    public function setMidocoCcTokenAttr(array $midocoCcTokenAttr = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCcTokenAttrArrayErrorMessage = self::validateMidocoCcTokenAttrForArrayConstraintsFromSetMidocoCcTokenAttr($midocoCcTokenAttr))) {
            throw new InvalidArgumentException($midocoCcTokenAttrArrayErrorMessage, __LINE__);
        }
        $this->MidocoCcTokenAttr = $midocoCcTokenAttr;
        
        return $this;
    }
    /**
     * Add item to MidocoCcTokenAttr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCcTokenAttr $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcToken
     */
    public function addToMidocoCcTokenAttr(\Pggns\MidocoApi\Order\StructType\MidocoCcTokenAttr $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCcTokenAttr) {
            throw new InvalidArgumentException(sprintf('The MidocoCcTokenAttr property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCcTokenAttr, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCcTokenAttr[] = $item;
        
        return $this;
    }
    /**
     * Get ccMask value
     * @return string|null
     */
    public function getCcMask(): ?string
    {
        return $this->ccMask;
    }
    /**
     * Set ccMask value
     * @param string $ccMask
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcToken
     */
    public function setCcMask(?string $ccMask = null): self
    {
        // validation for constraint: string
        if (!is_null($ccMask) && !is_string($ccMask)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccMask, true), gettype($ccMask)), __LINE__);
        }
        $this->ccMask = $ccMask;
        
        return $this;
    }
    /**
     * Get lookupLink value
     * @return string|null
     */
    public function getLookupLink(): ?string
    {
        return $this->lookupLink;
    }
    /**
     * Set lookupLink value
     * @param string $lookupLink
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcToken
     */
    public function setLookupLink(?string $lookupLink = null): self
    {
        // validation for constraint: string
        if (!is_null($lookupLink) && !is_string($lookupLink)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lookupLink, true), gettype($lookupLink)), __LINE__);
        }
        $this->lookupLink = $lookupLink;
        
        return $this;
    }
}
