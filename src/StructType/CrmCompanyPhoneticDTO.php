<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmCompanyPhoneticDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrmCompanyPhoneticDTO extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The exactOrganisationName
     * @var string|null
     */
    protected ?string $exactOrganisationName = null;
    /**
     * The organisationName
     * @var string|null
     */
    protected ?string $organisationName = null;
    /**
     * Constructor method for CrmCompanyPhoneticDTO
     * @uses CrmCompanyPhoneticDTO::setCustomerId()
     * @uses CrmCompanyPhoneticDTO::setExactOrganisationName()
     * @uses CrmCompanyPhoneticDTO::setOrganisationName()
     * @param int $customerId
     * @param string $exactOrganisationName
     * @param string $organisationName
     */
    public function __construct(?int $customerId = null, ?string $exactOrganisationName = null, ?string $organisationName = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setExactOrganisationName($exactOrganisationName)
            ->setOrganisationName($organisationName);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CrmCompanyPhoneticDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get exactOrganisationName value
     * @return string|null
     */
    public function getExactOrganisationName(): ?string
    {
        return $this->exactOrganisationName;
    }
    /**
     * Set exactOrganisationName value
     * @param string $exactOrganisationName
     * @return \Pggns\MidocoApi\Order\StructType\CrmCompanyPhoneticDTO
     */
    public function setExactOrganisationName(?string $exactOrganisationName = null): self
    {
        // validation for constraint: string
        if (!is_null($exactOrganisationName) && !is_string($exactOrganisationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exactOrganisationName, true), gettype($exactOrganisationName)), __LINE__);
        }
        $this->exactOrganisationName = $exactOrganisationName;
        
        return $this;
    }
    /**
     * Get organisationName value
     * @return string|null
     */
    public function getOrganisationName(): ?string
    {
        return $this->organisationName;
    }
    /**
     * Set organisationName value
     * @param string $organisationName
     * @return \Pggns\MidocoApi\Order\StructType\CrmCompanyPhoneticDTO
     */
    public function setOrganisationName(?string $organisationName = null): self
    {
        // validation for constraint: string
        if (!is_null($organisationName) && !is_string($organisationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organisationName, true), gettype($organisationName)), __LINE__);
        }
        $this->organisationName = $organisationName;
        
        return $this;
    }
}
