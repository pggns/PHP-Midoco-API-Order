<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for internalCommandConfiguration StructType
 * Meta information extracted from the WSDL
 * - documentation: Configuration of special internal commands or behaviour during import. Multiple configurations are possible, if there are two bookings which need different commands handled by the id. If there are commands which is on sellitem level
 * an assignment to a booking is optional. If there are commands which is on order level an assignment is not necessary.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class InternalCommandConfiguration extends AbstractStructBase
{
    /**
     * The configurationId
     * Meta information extracted from the WSDL
     * - documentation: The id must be unique. And the attribute "configurationRef" of elements bookings/packageinfo/fees/ticket can be used to assign this configuration. If there is no configurationId in this element it will be assigned to ALL remaining
     * bookings/packageinfo/fees/ticket elements which have no "configurationRef".
     * @var int|null
     */
    protected ?int $configurationId = null;
    /**
     * The clearExistingImportedSellItemRemarks
     * Meta information extracted from the WSDL
     * - documentation: This command deletes all already existing remarks of a sellitem which have been previously imported and not created by GUI. This happens before importing the new remarks via this ABM. The configurationId is optional, because it is
     * sellitemLevelled.
     * - default: false
     * @var bool|null
     */
    protected ?bool $clearExistingImportedSellItemRemarks = null;
    /**
     * Constructor method for internalCommandConfiguration
     * @uses InternalCommandConfiguration::setConfigurationId()
     * @uses InternalCommandConfiguration::setClearExistingImportedSellItemRemarks()
     * @param int $configurationId
     * @param bool $clearExistingImportedSellItemRemarks
     */
    public function __construct(?int $configurationId = null, ?bool $clearExistingImportedSellItemRemarks = false)
    {
        $this
            ->setConfigurationId($configurationId)
            ->setClearExistingImportedSellItemRemarks($clearExistingImportedSellItemRemarks);
    }
    /**
     * Get configurationId value
     * @return int|null
     */
    public function getConfigurationId(): ?int
    {
        return $this->configurationId;
    }
    /**
     * Set configurationId value
     * @param int $configurationId
     * @return \Pggns\MidocoApi\Order\StructType\InternalCommandConfiguration
     */
    public function setConfigurationId(?int $configurationId = null): self
    {
        // validation for constraint: int
        if (!is_null($configurationId) && !(is_int($configurationId) || ctype_digit($configurationId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($configurationId, true), gettype($configurationId)), __LINE__);
        }
        $this->configurationId = $configurationId;
        
        return $this;
    }
    /**
     * Get clearExistingImportedSellItemRemarks value
     * @return bool|null
     */
    public function getClearExistingImportedSellItemRemarks(): ?bool
    {
        return $this->clearExistingImportedSellItemRemarks;
    }
    /**
     * Set clearExistingImportedSellItemRemarks value
     * @param bool $clearExistingImportedSellItemRemarks
     * @return \Pggns\MidocoApi\Order\StructType\InternalCommandConfiguration
     */
    public function setClearExistingImportedSellItemRemarks(?bool $clearExistingImportedSellItemRemarks = false): self
    {
        // validation for constraint: boolean
        if (!is_null($clearExistingImportedSellItemRemarks) && !is_bool($clearExistingImportedSellItemRemarks)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($clearExistingImportedSellItemRemarks, true), gettype($clearExistingImportedSellItemRemarks)), __LINE__);
        }
        $this->clearExistingImportedSellItemRemarks = $clearExistingImportedSellItemRemarks;
        
        return $this;
    }
}
