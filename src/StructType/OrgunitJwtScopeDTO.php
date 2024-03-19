<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrgunitJwtScopeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrgunitJwtScopeDTO extends AbstractStructBase
{
    /**
     * The scopeName
     * @var string|null
     */
    protected ?string $scopeName = null;
    /**
     * Constructor method for OrgunitJwtScopeDTO
     * @uses OrgunitJwtScopeDTO::setScopeName()
     * @param string $scopeName
     */
    public function __construct(?string $scopeName = null)
    {
        $this
            ->setScopeName($scopeName);
    }
    /**
     * Get scopeName value
     * @return string|null
     */
    public function getScopeName(): ?string
    {
        return $this->scopeName;
    }
    /**
     * Set scopeName value
     * @param string $scopeName
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitJwtScopeDTO
     */
    public function setScopeName(?string $scopeName = null): self
    {
        // validation for constraint: string
        if (!is_null($scopeName) && !is_string($scopeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scopeName, true), gettype($scopeName)), __LINE__);
        }
        $this->scopeName = $scopeName;
        
        return $this;
    }
}
