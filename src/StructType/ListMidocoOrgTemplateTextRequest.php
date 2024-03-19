<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListMidocoOrgTemplateTextRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListMidocoOrgTemplateTextRequest extends AbstractStructBase
{
    /**
     * The org_unit_name
     * @var string|null
     */
    protected ?string $org_unit_name = null;
    /**
     * Constructor method for ListMidocoOrgTemplateTextRequest
     * @uses ListMidocoOrgTemplateTextRequest::setOrg_unit_name()
     * @param string $org_unit_name
     */
    public function __construct(?string $org_unit_name = null)
    {
        $this
            ->setOrg_unit_name($org_unit_name);
    }
    /**
     * Get org_unit_name value
     * @return string|null
     */
    public function getOrg_unit_name(): ?string
    {
        return $this->org_unit_name;
    }
    /**
     * Set org_unit_name value
     * @param string $org_unit_name
     * @return \Pggns\MidocoApi\Order\StructType\ListMidocoOrgTemplateTextRequest
     */
    public function setOrg_unit_name(?string $org_unit_name = null): self
    {
        // validation for constraint: string
        if (!is_null($org_unit_name) && !is_string($org_unit_name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($org_unit_name, true), gettype($org_unit_name)), __LINE__);
        }
        $this->org_unit_name = $org_unit_name;
        
        return $this;
    }
}
