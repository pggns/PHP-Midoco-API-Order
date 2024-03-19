<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAgencyByCriteriaResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAgencyByCriteriaResponse extends AbstractStructBase
{
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * Constructor method for GetAgencyByCriteriaResponse
     * @uses GetAgencyByCriteriaResponse::setAgencyId()
     * @param string $agencyId
     */
    public function __construct(?string $agencyId = null)
    {
        $this
            ->setAgencyId($agencyId);
    }
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Order\StructType\GetAgencyByCriteriaResponse
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
}
