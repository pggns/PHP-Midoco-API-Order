<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoAgencySettlementSellItemDetailsResponse
 * StructType
 * @subpackage Structs
 */
class GetMidocoAgencySettlementSellItemDetailsResponse extends AbstractStructBase
{
    /**
     * The MidocoAgencySettlementFibuConsoDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAgencySettlementFibuConsoDetail
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail[]
     */
    protected array $MidocoAgencySettlementFibuConsoDetail = [];
    /**
     * The MidocoAgencySettlement
     * Meta information extracted from the WSDL
     * - ref: MidocoAgencySettlement
     * @var \Pggns\MidocoApi\Order\StructType\AgencySettlementDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\AgencySettlementDTO $MidocoAgencySettlement = null;
    /**
     * Constructor method for GetMidocoAgencySettlementSellItemDetailsResponse
     * @uses GetMidocoAgencySettlementSellItemDetailsResponse::setMidocoAgencySettlementFibuConsoDetail()
     * @uses GetMidocoAgencySettlementSellItemDetailsResponse::setMidocoAgencySettlement()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail[] $midocoAgencySettlementFibuConsoDetail
     * @param \Pggns\MidocoApi\Order\StructType\AgencySettlementDTO $midocoAgencySettlement
     */
    public function __construct(array $midocoAgencySettlementFibuConsoDetail = [], ?\Pggns\MidocoApi\Order\StructType\AgencySettlementDTO $midocoAgencySettlement = null)
    {
        $this
            ->setMidocoAgencySettlementFibuConsoDetail($midocoAgencySettlementFibuConsoDetail)
            ->setMidocoAgencySettlement($midocoAgencySettlement);
    }
    /**
     * Get MidocoAgencySettlementFibuConsoDetail value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail[]
     */
    public function getMidocoAgencySettlementFibuConsoDetail(): array
    {
        return $this->MidocoAgencySettlementFibuConsoDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAgencySettlementFibuConsoDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAgencySettlementFibuConsoDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAgencySettlementFibuConsoDetailForArrayConstraintsFromSetMidocoAgencySettlementFibuConsoDetail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoAgencySettlementSellItemDetailsResponseMidocoAgencySettlementFibuConsoDetailItem) {
            // validation for constraint: itemType
            if (!$getMidocoAgencySettlementSellItemDetailsResponseMidocoAgencySettlementFibuConsoDetailItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail) {
                $invalidValues[] = is_object($getMidocoAgencySettlementSellItemDetailsResponseMidocoAgencySettlementFibuConsoDetailItem) ? get_class($getMidocoAgencySettlementSellItemDetailsResponseMidocoAgencySettlementFibuConsoDetailItem) : sprintf('%s(%s)', gettype($getMidocoAgencySettlementSellItemDetailsResponseMidocoAgencySettlementFibuConsoDetailItem), var_export($getMidocoAgencySettlementSellItemDetailsResponseMidocoAgencySettlementFibuConsoDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAgencySettlementFibuConsoDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAgencySettlementFibuConsoDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail[] $midocoAgencySettlementFibuConsoDetail
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoAgencySettlementSellItemDetailsResponse
     */
    public function setMidocoAgencySettlementFibuConsoDetail(array $midocoAgencySettlementFibuConsoDetail = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAgencySettlementFibuConsoDetailArrayErrorMessage = self::validateMidocoAgencySettlementFibuConsoDetailForArrayConstraintsFromSetMidocoAgencySettlementFibuConsoDetail($midocoAgencySettlementFibuConsoDetail))) {
            throw new InvalidArgumentException($midocoAgencySettlementFibuConsoDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoAgencySettlementFibuConsoDetail = $midocoAgencySettlementFibuConsoDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoAgencySettlementFibuConsoDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoAgencySettlementSellItemDetailsResponse
     */
    public function addToMidocoAgencySettlementFibuConsoDetail(\Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail) {
            throw new InvalidArgumentException(sprintf('The MidocoAgencySettlementFibuConsoDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAgencySettlementFibuConsoDetail[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoAgencySettlement value
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementDTO|null
     */
    public function getMidocoAgencySettlement(): ?\Pggns\MidocoApi\Order\StructType\AgencySettlementDTO
    {
        return $this->MidocoAgencySettlement;
    }
    /**
     * Set MidocoAgencySettlement value
     * @param \Pggns\MidocoApi\Order\StructType\AgencySettlementDTO $midocoAgencySettlement
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoAgencySettlementSellItemDetailsResponse
     */
    public function setMidocoAgencySettlement(?\Pggns\MidocoApi\Order\StructType\AgencySettlementDTO $midocoAgencySettlement = null): self
    {
        $this->MidocoAgencySettlement = $midocoAgencySettlement;
        
        return $this;
    }
}
