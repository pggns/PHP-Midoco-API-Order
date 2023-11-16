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
    protected array $MidocoExternalServiceLink = [];
    /**
     * Constructor method for GetExternalServiceLinksResponse
     * @uses GetExternalServiceLinksResponse::setMidocoExternalServiceLink()
     * @param \Pggns\MidocoApi\Order\StructType\ExternalServiceLinkDTO[] $midocoExternalServiceLink
     */
    public function __construct(array $midocoExternalServiceLink = [])
    {
        $this
            ->setMidocoExternalServiceLink($midocoExternalServiceLink);
    }
    /**
     * Get MidocoExternalServiceLink value
     * @return \Pggns\MidocoApi\Order\StructType\ExternalServiceLinkDTO[]
     */
    public function getMidocoExternalServiceLink(): array
    {
        return $this->MidocoExternalServiceLink;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoExternalServiceLink method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoExternalServiceLink method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoExternalServiceLinkForArrayConstraintsFromSetMidocoExternalServiceLink(array $values = []): string
    {
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
    public function setMidocoExternalServiceLink(array $midocoExternalServiceLink = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoExternalServiceLinkArrayErrorMessage = self::validateMidocoExternalServiceLinkForArrayConstraintsFromSetMidocoExternalServiceLink($midocoExternalServiceLink))) {
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
