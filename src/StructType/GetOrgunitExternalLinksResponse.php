<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgunitExternalLinksResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrgunitExternalLinksResponse extends AbstractStructBase
{
    /**
     * The MidocoOrgunitExternalLink
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrgunitExternalLink
     * @var \Pggns\MidocoApi\Order\StructType\OrgunitExternalLinkDTO[]
     */
    protected ?array $MidocoOrgunitExternalLink = null;
    /**
     * Constructor method for GetOrgunitExternalLinksResponse
     * @uses GetOrgunitExternalLinksResponse::setMidocoOrgunitExternalLink()
     * @param \Pggns\MidocoApi\Order\StructType\OrgunitExternalLinkDTO[] $midocoOrgunitExternalLink
     */
    public function __construct(?array $midocoOrgunitExternalLink = null)
    {
        $this
            ->setMidocoOrgunitExternalLink($midocoOrgunitExternalLink);
    }
    /**
     * Get MidocoOrgunitExternalLink value
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitExternalLinkDTO[]
     */
    public function getMidocoOrgunitExternalLink(): ?array
    {
        return $this->MidocoOrgunitExternalLink;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrgunitExternalLink method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrgunitExternalLink method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrgunitExternalLinkForArrayConstraintFromSetMidocoOrgunitExternalLink(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrgunitExternalLinksResponseMidocoOrgunitExternalLinkItem) {
            // validation for constraint: itemType
            if (!$getOrgunitExternalLinksResponseMidocoOrgunitExternalLinkItem instanceof \Pggns\MidocoApi\Order\StructType\OrgunitExternalLinkDTO) {
                $invalidValues[] = is_object($getOrgunitExternalLinksResponseMidocoOrgunitExternalLinkItem) ? get_class($getOrgunitExternalLinksResponseMidocoOrgunitExternalLinkItem) : sprintf('%s(%s)', gettype($getOrgunitExternalLinksResponseMidocoOrgunitExternalLinkItem), var_export($getOrgunitExternalLinksResponseMidocoOrgunitExternalLinkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrgunitExternalLink property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrgunitExternalLinkDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrgunitExternalLink value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrgunitExternalLinkDTO[] $midocoOrgunitExternalLink
     * @return \Pggns\MidocoApi\Order\StructType\GetOrgunitExternalLinksResponse
     */
    public function setMidocoOrgunitExternalLink(?array $midocoOrgunitExternalLink = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrgunitExternalLinkArrayErrorMessage = self::validateMidocoOrgunitExternalLinkForArrayConstraintFromSetMidocoOrgunitExternalLink($midocoOrgunitExternalLink))) {
            throw new InvalidArgumentException($midocoOrgunitExternalLinkArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrgunitExternalLink = $midocoOrgunitExternalLink;
        
        return $this;
    }
    /**
     * Add item to MidocoOrgunitExternalLink value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrgunitExternalLinkDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrgunitExternalLinksResponse
     */
    public function addToMidocoOrgunitExternalLink(\Pggns\MidocoApi\Order\StructType\OrgunitExternalLinkDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\OrgunitExternalLinkDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrgunitExternalLink property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrgunitExternalLinkDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrgunitExternalLink[] = $item;
        
        return $this;
    }
}
