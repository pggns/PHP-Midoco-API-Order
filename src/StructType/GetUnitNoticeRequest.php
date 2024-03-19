<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnitNoticeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUnitNoticeRequest extends AbstractStructBase
{
    /**
     * The midocoOrgUnitName
     * @var string|null
     */
    protected ?string $midocoOrgUnitName = null;
    /**
     * Constructor method for GetUnitNoticeRequest
     * @uses GetUnitNoticeRequest::setMidocoOrgUnitName()
     * @param string $midocoOrgUnitName
     */
    public function __construct(?string $midocoOrgUnitName = null)
    {
        $this
            ->setMidocoOrgUnitName($midocoOrgUnitName);
    }
    /**
     * Get midocoOrgUnitName value
     * @return string|null
     */
    public function getMidocoOrgUnitName(): ?string
    {
        return $this->midocoOrgUnitName;
    }
    /**
     * Set midocoOrgUnitName value
     * @param string $midocoOrgUnitName
     * @return \Pggns\MidocoApi\Order\StructType\GetUnitNoticeRequest
     */
    public function setMidocoOrgUnitName(?string $midocoOrgUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoOrgUnitName) && !is_string($midocoOrgUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoOrgUnitName, true), gettype($midocoOrgUnitName)), __LINE__);
        }
        $this->midocoOrgUnitName = $midocoOrgUnitName;
        
        return $this;
    }
}
