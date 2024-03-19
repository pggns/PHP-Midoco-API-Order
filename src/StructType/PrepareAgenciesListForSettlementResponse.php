<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrepareAgenciesListForSettlementResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrepareAgenciesListForSettlementResponse extends AbstractStructBase
{
    /**
     * The AgencyId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $AgencyId = null;
    /**
     * Constructor method for PrepareAgenciesListForSettlementResponse
     * @uses PrepareAgenciesListForSettlementResponse::setAgencyId()
     * @param string[] $agencyId
     */
    public function __construct(?array $agencyId = null)
    {
        $this
            ->setAgencyId($agencyId);
    }
    /**
     * Get AgencyId value
     * @return string[]
     */
    public function getAgencyId(): ?array
    {
        return $this->AgencyId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAgencyId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAgencyId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAgencyIdForArrayConstraintFromSetAgencyId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $prepareAgenciesListForSettlementResponseAgencyIdItem) {
            // validation for constraint: itemType
            if (!is_string($prepareAgenciesListForSettlementResponseAgencyIdItem)) {
                $invalidValues[] = is_object($prepareAgenciesListForSettlementResponseAgencyIdItem) ? get_class($prepareAgenciesListForSettlementResponseAgencyIdItem) : sprintf('%s(%s)', gettype($prepareAgenciesListForSettlementResponseAgencyIdItem), var_export($prepareAgenciesListForSettlementResponseAgencyIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AgencyId property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AgencyId value
     * @throws InvalidArgumentException
     * @param string[] $agencyId
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAgenciesListForSettlementResponse
     */
    public function setAgencyId(?array $agencyId = null): self
    {
        // validation for constraint: array
        if ('' !== ($agencyIdArrayErrorMessage = self::validateAgencyIdForArrayConstraintFromSetAgencyId($agencyId))) {
            throw new InvalidArgumentException($agencyIdArrayErrorMessage, __LINE__);
        }
        $this->AgencyId = $agencyId;
        
        return $this;
    }
    /**
     * Add item to AgencyId value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAgenciesListForSettlementResponse
     */
    public function addToAgencyId(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The AgencyId property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AgencyId[] = $item;
        
        return $this;
    }
}
