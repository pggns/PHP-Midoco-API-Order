<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgTemplateTextFooterRequest StructType
 * @subpackage Structs
 */
class GetOrgTemplateTextFooterRequest extends AbstractStructBase
{
    /**
     * The printTypeId
     * @var string|null
     */
    protected ?string $printTypeId = null;
    /**
     * The orgunitName
     * @var string|null
     */
    protected ?string $orgunitName = null;
    /**
     * Constructor method for GetOrgTemplateTextFooterRequest
     * @uses GetOrgTemplateTextFooterRequest::setPrintTypeId()
     * @uses GetOrgTemplateTextFooterRequest::setOrgunitName()
     * @param string $printTypeId
     * @param string $orgunitName
     */
    public function __construct(?string $printTypeId = null, ?string $orgunitName = null)
    {
        $this
            ->setPrintTypeId($printTypeId)
            ->setOrgunitName($orgunitName);
    }
    /**
     * Get printTypeId value
     * @return string|null
     */
    public function getPrintTypeId(): ?string
    {
        return $this->printTypeId;
    }
    /**
     * Set printTypeId value
     * @param string $printTypeId
     * @return \Pggns\MidocoApi\Order\StructType\GetOrgTemplateTextFooterRequest
     */
    public function setPrintTypeId(?string $printTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($printTypeId) && !is_string($printTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printTypeId, true), gettype($printTypeId)), __LINE__);
        }
        $this->printTypeId = $printTypeId;
        
        return $this;
    }
    /**
     * Get orgunitName value
     * @return string|null
     */
    public function getOrgunitName(): ?string
    {
        return $this->orgunitName;
    }
    /**
     * Set orgunitName value
     * @param string $orgunitName
     * @return \Pggns\MidocoApi\Order\StructType\GetOrgTemplateTextFooterRequest
     */
    public function setOrgunitName(?string $orgunitName = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunitName) && !is_string($orgunitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunitName, true), gettype($orgunitName)), __LINE__);
        }
        $this->orgunitName = $orgunitName;
        
        return $this;
    }
}
