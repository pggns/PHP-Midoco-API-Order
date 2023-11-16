<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoExternalCampaign StructType
 * @subpackage Structs
 */
class MidocoExternalCampaign extends ExternalCampaignDTO
{
    /**
     * The ExternalCampaignAssignment
     * Meta information extracted from the WSDL
     * - documentation: During import: The customerId is required while the unitName might be omitted. The customers unitName is required if the unit the customers is in, uses a different database than the unit the External Campaign is imported into. The
     * extCampId should be omitted, it will not be used. The externalReference can be used to provide a link that is accessible in the midoffice GUI. The recipient can be used to provide the email address to which a campaign mail was sent.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\ExternalCampaignAssignDTO[]
     */
    protected array $ExternalCampaignAssignment = [];
    /**
     * Constructor method for MidocoExternalCampaign
     * @uses MidocoExternalCampaign::setExternalCampaignAssignment()
     * @param \Pggns\MidocoApi\Order\StructType\ExternalCampaignAssignDTO[] $externalCampaignAssignment
     */
    public function __construct(array $externalCampaignAssignment = [])
    {
        $this
            ->setExternalCampaignAssignment($externalCampaignAssignment);
    }
    /**
     * Get ExternalCampaignAssignment value
     * @return \Pggns\MidocoApi\Order\StructType\ExternalCampaignAssignDTO[]
     */
    public function getExternalCampaignAssignment(): array
    {
        return $this->ExternalCampaignAssignment;
    }
    /**
     * This method is responsible for validating the values passed to the setExternalCampaignAssignment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalCampaignAssignment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternalCampaignAssignmentForArrayConstraintsFromSetExternalCampaignAssignment(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoExternalCampaignExternalCampaignAssignmentItem) {
            // validation for constraint: itemType
            if (!$midocoExternalCampaignExternalCampaignAssignmentItem instanceof \Pggns\MidocoApi\Order\StructType\ExternalCampaignAssignDTO) {
                $invalidValues[] = is_object($midocoExternalCampaignExternalCampaignAssignmentItem) ? get_class($midocoExternalCampaignExternalCampaignAssignmentItem) : sprintf('%s(%s)', gettype($midocoExternalCampaignExternalCampaignAssignmentItem), var_export($midocoExternalCampaignExternalCampaignAssignmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExternalCampaignAssignment property can only contain items of type \Pggns\MidocoApi\Order\StructType\ExternalCampaignAssignDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExternalCampaignAssignment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ExternalCampaignAssignDTO[] $externalCampaignAssignment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoExternalCampaign
     */
    public function setExternalCampaignAssignment(array $externalCampaignAssignment = []): self
    {
        // validation for constraint: array
        if ('' !== ($externalCampaignAssignmentArrayErrorMessage = self::validateExternalCampaignAssignmentForArrayConstraintsFromSetExternalCampaignAssignment($externalCampaignAssignment))) {
            throw new InvalidArgumentException($externalCampaignAssignmentArrayErrorMessage, __LINE__);
        }
        $this->ExternalCampaignAssignment = $externalCampaignAssignment;
        
        return $this;
    }
    /**
     * Add item to ExternalCampaignAssignment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ExternalCampaignAssignDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoExternalCampaign
     */
    public function addToExternalCampaignAssignment(\Pggns\MidocoApi\Order\StructType\ExternalCampaignAssignDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\ExternalCampaignAssignDTO) {
            throw new InvalidArgumentException(sprintf('The ExternalCampaignAssignment property can only contain items of type \Pggns\MidocoApi\Order\StructType\ExternalCampaignAssignDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExternalCampaignAssignment[] = $item;
        
        return $this;
    }
}
