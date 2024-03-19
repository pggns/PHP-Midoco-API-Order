<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExternalServiceLinksResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: Response with all matched ExternalServiceLinks.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetExternalServiceLinksResponse extends AbstractStructBase
{
    /**
     * The MidocoExternalServiceLink
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoExternalServiceLink
     * @var \Pggns\MidocoApi\Order\StructType\ExternalServiceLinkDTO[]
     */
    protected ?array $MidocoExternalServiceLink = null;
    /**
     * Constructor method for GetExternalServiceLinksResponse
     * @uses GetExternalServiceLinksResponse::setMidocoExternalServiceLink()
     * @param \Pggns\MidocoApi\Order\StructType\ExternalServiceLinkDTO[] $midocoExternalServiceLink
     */
    public function __construct(?array $midocoExternalServiceLink = null)
    {
        $this
            ->setMidocoExternalServiceLink($midocoExternalServiceLink);
    }
    /**
     * Get MidocoExternalServiceLink value
     * @return \Pggns\MidocoApi\Order\StructType\ExternalServiceLinkDTO[]
     */
    public function getMidocoExternalServiceLink(): ?array
    {
        return $this->MidocoExternalServiceLink;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoExternalServiceLink method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoExternalServiceLink method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoExternalServiceLinkForArrayConstraintFromSetMidocoExternalServiceLink(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExternalServiceLinksResponseMidocoExternalServiceLinkItem) {
            // validation for constraint: itemType
            if (!$getExternalServiceLinksResponseMidocoExternalServiceLinkItem instanceof \Pggns\MidocoApi\Order\StructType\ExternalServiceLinkDTO) {
                $invalidValues[] = is_object($getExternalServiceLinksResponseMidocoExternalServiceLinkItem) ? get_class($getExternalServiceLinksResponseMidocoExternalServiceLinkItem) : sprintf('%s(%s)', gettype($getExternalServiceLinksResponseMidocoExternalServiceLinkItem), var_export($getExternalServiceLinksResponseMidocoExternalServiceLinkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoExternalServiceLink property can only contain items of type \Pggns\MidocoApi\Order\StructType\ExternalServiceLinkDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoExternalServiceLink value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ExternalServiceLinkDTO[] $midocoExternalServiceLink
     * @return \Pggns\MidocoApi\Order\StructType\GetExternalServiceLinksResponse
     */
    public function setMidocoExternalServiceLink(?array $midocoExternalServiceLink = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoExternalServiceLinkArrayErrorMessage = self::validateMidocoExternalServiceLinkForArrayConstraintFromSetMidocoExternalServiceLink($midocoExternalServiceLink))) {
            throw new InvalidArgumentException($midocoExternalServiceLinkArrayErrorMessage, __LINE__);
        }
        $this->MidocoExternalServiceLink = $midocoExternalServiceLink;
        
        return $this;
    }
    /**
     * Add item to MidocoExternalServiceLink value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ExternalServiceLinkDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetExternalServiceLinksResponse
     */
    public function addToMidocoExternalServiceLink(\Pggns\MidocoApi\Order\StructType\ExternalServiceLinkDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\ExternalServiceLinkDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoExternalServiceLink property can only contain items of type \Pggns\MidocoApi\Order\StructType\ExternalServiceLinkDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoExternalServiceLink[] = $item;
        
        return $this;
    }
}
