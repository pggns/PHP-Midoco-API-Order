<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoOrgUnitGuiAttributeRequest StructType
 * @subpackage Structs
 */
class GetMidocoOrgUnitGuiAttributeRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The GUIAttributeGroup
     * Meta information extracted from the WSDL
     * - ref: GUIAttributeGroup
     * @var string|null
     */
    protected ?string $GUIAttributeGroup = null;
    /**
     * Constructor method for GetMidocoOrgUnitGuiAttributeRequest
     * @uses GetMidocoOrgUnitGuiAttributeRequest::setUnitName()
     * @uses GetMidocoOrgUnitGuiAttributeRequest::setGUIAttributeGroup()
     * @param string $unitName
     * @param string $gUIAttributeGroup
     */
    public function __construct(?string $unitName = null, ?string $gUIAttributeGroup = null)
    {
        $this
            ->setUnitName($unitName)
            ->setGUIAttributeGroup($gUIAttributeGroup);
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoOrgUnitGuiAttributeRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get GUIAttributeGroup value
     * @return string|null
     */
    public function getGUIAttributeGroup(): ?string
    {
        return $this->GUIAttributeGroup;
    }
    /**
     * Set GUIAttributeGroup value
     * @uses \Pggns\MidocoApi\Order\EnumType\GUIAttributeGroup::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\GUIAttributeGroup::getValidValues()
     * @throws InvalidArgumentException
     * @param string $gUIAttributeGroup
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoOrgUnitGuiAttributeRequest
     */
    public function setGUIAttributeGroup(?string $gUIAttributeGroup = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\GUIAttributeGroup::valueIsValid($gUIAttributeGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\GUIAttributeGroup', is_array($gUIAttributeGroup) ? implode(', ', $gUIAttributeGroup) : var_export($gUIAttributeGroup, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\GUIAttributeGroup::getValidValues())), __LINE__);
        }
        $this->GUIAttributeGroup = $gUIAttributeGroup;
        
        return $this;
    }
}
