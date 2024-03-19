<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for internal-command-configuration StructType
 * Meta information extracted from the WSDL
 * - documentation: Configuration of special internal commands or behaviour during import. Multiple configurations are possible, if there are two bookings which need different commands handled by the id. If there are commands which is on sellitem level
 * an assignment to a booking is optional. If there are commands which is on order level an assignment is not necessary.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Internal_command_configuration extends AbstractStructBase
{
    /**
     * The configuration_id
     * Meta information extracted from the WSDL
     * - documentation: The id must be unique. And the attribute "configuration-ref" of elements bookings/packageinfo/fees/ticket can be used to assign this configuration. If there is no configuration-id in this element it will be assigned to ALL remaining
     * bookings/packageinfo/fees/ticket elements which have no "configuration-ref".
     * @var int|null
     */
    protected ?int $configuration_id = null;
    /**
     * The clear_existing_imported_sell_item_remarks
     * Meta information extracted from the WSDL
     * - documentation: This command deletes all already existing remarks of a sellitem which have been previously imported and not created by GUI. This happens before importing the new remarks via this ABM. The configuration-id is optional, because it is
     * sellitem-levelled.
     * - default: false
     * @var bool|null
     */
    protected ?bool $clear_existing_imported_sell_item_remarks = null;
    /**
     * Constructor method for internal-command-configuration
     * @uses Internal_command_configuration::setConfiguration_id()
     * @uses Internal_command_configuration::setClear_existing_imported_sell_item_remarks()
     * @param int $configuration_id
     * @param bool $clear_existing_imported_sell_item_remarks
     */
    public function __construct(?int $configuration_id = null, ?bool $clear_existing_imported_sell_item_remarks = false)
    {
        $this
            ->setConfiguration_id($configuration_id)
            ->setClear_existing_imported_sell_item_remarks($clear_existing_imported_sell_item_remarks);
    }
    /**
     * Get configuration_id value
     * @return int|null
     */
    public function getConfiguration_id(): ?int
    {
        return $this->{'configuration-id'};
    }
    /**
     * Set configuration_id value
     * @param int $configuration_id
     * @return \Pggns\MidocoApi\Order\StructType\Internal_command_configuration
     */
    public function setConfiguration_id(?int $configuration_id = null): self
    {
        // validation for constraint: int
        if (!is_null($configuration_id) && !(is_int($configuration_id) || ctype_digit($configuration_id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($configuration_id, true), gettype($configuration_id)), __LINE__);
        }
        $this->configuration_id = $this->{'configuration-id'} = $configuration_id;
        
        return $this;
    }
    /**
     * Get clear_existing_imported_sell_item_remarks value
     * @return bool|null
     */
    public function getClear_existing_imported_sell_item_remarks(): ?bool
    {
        return $this->{'clear-existing-imported-sell-item-remarks'};
    }
    /**
     * Set clear_existing_imported_sell_item_remarks value
     * @param bool $clear_existing_imported_sell_item_remarks
     * @return \Pggns\MidocoApi\Order\StructType\Internal_command_configuration
     */
    public function setClear_existing_imported_sell_item_remarks(?bool $clear_existing_imported_sell_item_remarks = false): self
    {
        // validation for constraint: boolean
        if (!is_null($clear_existing_imported_sell_item_remarks) && !is_bool($clear_existing_imported_sell_item_remarks)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($clear_existing_imported_sell_item_remarks, true), gettype($clear_existing_imported_sell_item_remarks)), __LINE__);
        }
        $this->clear_existing_imported_sell_item_remarks = $this->{'clear-existing-imported-sell-item-remarks'} = $clear_existing_imported_sell_item_remarks;
        
        return $this;
    }
}
