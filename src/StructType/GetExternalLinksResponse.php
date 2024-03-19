<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExternalLinksResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetExternalLinksResponse extends AbstractStructBase
{
    /**
     * The MidocoExternalLink
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoExternalLink
     * @var \Pggns\MidocoApi\Order\StructType\MidocoExternalLink[]
     */
    protected ?array $MidocoExternalLink = null;
    /**
     * Constructor method for GetExternalLinksResponse
     * @uses GetExternalLinksResponse::setMidocoExternalLink()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoExternalLink[] $midocoExternalLink
     */
    public function __construct(?array $midocoExternalLink = null)
    {
        $this
            ->setMidocoExternalLink($midocoExternalLink);
    }
    /**
     * Get MidocoExternalLink value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoExternalLink[]
     */
    public function getMidocoExternalLink(): ?array
    {
        return $this->MidocoExternalLink;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoExternalLink method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoExternalLink method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoExternalLinkForArrayConstraintFromSetMidocoExternalLink(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExternalLinksResponseMidocoExternalLinkItem) {
            // validation for constraint: itemType
            if (!$getExternalLinksResponseMidocoExternalLinkItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoExternalLink) {
                $invalidValues[] = is_object($getExternalLinksResponseMidocoExternalLinkItem) ? get_class($getExternalLinksResponseMidocoExternalLinkItem) : sprintf('%s(%s)', gettype($getExternalLinksResponseMidocoExternalLinkItem), var_export($getExternalLinksResponseMidocoExternalLinkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoExternalLink property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoExternalLink, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoExternalLink value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoExternalLink[] $midocoExternalLink
     * @return \Pggns\MidocoApi\Order\StructType\GetExternalLinksResponse
     */
    public function setMidocoExternalLink(?array $midocoExternalLink = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoExternalLinkArrayErrorMessage = self::validateMidocoExternalLinkForArrayConstraintFromSetMidocoExternalLink($midocoExternalLink))) {
            throw new InvalidArgumentException($midocoExternalLinkArrayErrorMessage, __LINE__);
        }
        $this->MidocoExternalLink = $midocoExternalLink;
        
        return $this;
    }
    /**
     * Add item to MidocoExternalLink value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoExternalLink $item
     * @return \Pggns\MidocoApi\Order\StructType\GetExternalLinksResponse
     */
    public function addToMidocoExternalLink(\Pggns\MidocoApi\Order\StructType\MidocoExternalLink $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoExternalLink) {
            throw new InvalidArgumentException(sprintf('The MidocoExternalLink property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoExternalLink, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoExternalLink[] = $item;
        
        return $this;
    }
}
