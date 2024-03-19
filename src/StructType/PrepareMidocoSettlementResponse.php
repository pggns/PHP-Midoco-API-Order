<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrepareMidocoSettlementResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrepareMidocoSettlementResponse extends AbstractStructBase
{
    /**
     * The companyId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $companyId = null;
    /**
     * Constructor method for PrepareMidocoSettlementResponse
     * @uses PrepareMidocoSettlementResponse::setCompanyId()
     * @param int[] $companyId
     */
    public function __construct(?array $companyId = null)
    {
        $this
            ->setCompanyId($companyId);
    }
    /**
     * Get companyId value
     * @return int[]
     */
    public function getCompanyId(): ?array
    {
        return $this->companyId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCompanyId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCompanyId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCompanyIdForArrayConstraintFromSetCompanyId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $prepareMidocoSettlementResponseCompanyIdItem) {
            // validation for constraint: itemType
            if (!(is_int($prepareMidocoSettlementResponseCompanyIdItem) || ctype_digit($prepareMidocoSettlementResponseCompanyIdItem))) {
                $invalidValues[] = is_object($prepareMidocoSettlementResponseCompanyIdItem) ? get_class($prepareMidocoSettlementResponseCompanyIdItem) : sprintf('%s(%s)', gettype($prepareMidocoSettlementResponseCompanyIdItem), var_export($prepareMidocoSettlementResponseCompanyIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The companyId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set companyId value
     * @throws InvalidArgumentException
     * @param int[] $companyId
     * @return \Pggns\MidocoApi\Order\StructType\PrepareMidocoSettlementResponse
     */
    public function setCompanyId(?array $companyId = null): self
    {
        // validation for constraint: array
        if ('' !== ($companyIdArrayErrorMessage = self::validateCompanyIdForArrayConstraintFromSetCompanyId($companyId))) {
            throw new InvalidArgumentException($companyIdArrayErrorMessage, __LINE__);
        }
        $this->companyId = $companyId;
        
        return $this;
    }
    /**
     * Add item to companyId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\PrepareMidocoSettlementResponse
     */
    public function addToCompanyId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The companyId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->companyId[] = $item;
        
        return $this;
    }
}
