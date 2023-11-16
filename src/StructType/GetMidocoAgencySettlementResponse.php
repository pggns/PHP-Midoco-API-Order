<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoAgencySettlementResponse StructType
 * @subpackage Structs
 */
class GetMidocoAgencySettlementResponse extends AbstractStructBase
{
    /**
     * The SearchMidocoAgencyProvisionInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: SearchMidocoAgencyProvisionInfo
     * @var \Pggns\MidocoApi\Order\StructType\SearchMidocoAgencyProvisionInfo[]
     */
    protected array $SearchMidocoAgencyProvisionInfo = [];
    /**
     * Constructor method for GetMidocoAgencySettlementResponse
     * @uses GetMidocoAgencySettlementResponse::setSearchMidocoAgencyProvisionInfo()
     * @param \Pggns\MidocoApi\Order\StructType\SearchMidocoAgencyProvisionInfo[] $searchMidocoAgencyProvisionInfo
     */
    public function __construct(array $searchMidocoAgencyProvisionInfo = [])
    {
        $this
            ->setSearchMidocoAgencyProvisionInfo($searchMidocoAgencyProvisionInfo);
    }
    /**
     * Get SearchMidocoAgencyProvisionInfo value
     * @return \Pggns\MidocoApi\Order\StructType\SearchMidocoAgencyProvisionInfo[]
     */
    public function getSearchMidocoAgencyProvisionInfo(): array
    {
        return $this->SearchMidocoAgencyProvisionInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setSearchMidocoAgencyProvisionInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchMidocoAgencyProvisionInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchMidocoAgencyProvisionInfoForArrayConstraintsFromSetSearchMidocoAgencyProvisionInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoAgencySettlementResponseSearchMidocoAgencyProvisionInfoItem) {
            // validation for constraint: itemType
            if (!$getMidocoAgencySettlementResponseSearchMidocoAgencyProvisionInfoItem instanceof \Pggns\MidocoApi\Order\StructType\SearchMidocoAgencyProvisionInfo) {
                $invalidValues[] = is_object($getMidocoAgencySettlementResponseSearchMidocoAgencyProvisionInfoItem) ? get_class($getMidocoAgencySettlementResponseSearchMidocoAgencyProvisionInfoItem) : sprintf('%s(%s)', gettype($getMidocoAgencySettlementResponseSearchMidocoAgencyProvisionInfoItem), var_export($getMidocoAgencySettlementResponseSearchMidocoAgencyProvisionInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SearchMidocoAgencyProvisionInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\SearchMidocoAgencyProvisionInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SearchMidocoAgencyProvisionInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SearchMidocoAgencyProvisionInfo[] $searchMidocoAgencyProvisionInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoAgencySettlementResponse
     */
    public function setSearchMidocoAgencyProvisionInfo(array $searchMidocoAgencyProvisionInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($searchMidocoAgencyProvisionInfoArrayErrorMessage = self::validateSearchMidocoAgencyProvisionInfoForArrayConstraintsFromSetSearchMidocoAgencyProvisionInfo($searchMidocoAgencyProvisionInfo))) {
            throw new InvalidArgumentException($searchMidocoAgencyProvisionInfoArrayErrorMessage, __LINE__);
        }
        $this->SearchMidocoAgencyProvisionInfo = $searchMidocoAgencyProvisionInfo;
        
        return $this;
    }
    /**
     * Add item to SearchMidocoAgencyProvisionInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SearchMidocoAgencyProvisionInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoAgencySettlementResponse
     */
    public function addToSearchMidocoAgencyProvisionInfo(\Pggns\MidocoApi\Order\StructType\SearchMidocoAgencyProvisionInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SearchMidocoAgencyProvisionInfo) {
            throw new InvalidArgumentException(sprintf('The SearchMidocoAgencyProvisionInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\SearchMidocoAgencyProvisionInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SearchMidocoAgencyProvisionInfo[] = $item;
        
        return $this;
    }
}
