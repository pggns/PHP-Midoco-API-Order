<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoConnectionTypeDescriptionExt StructType
 * @subpackage Structs
 */
class MidocoConnectionTypeDescriptionExt extends CrmConnectionTypeDTO
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The isGlobal
     * @var bool|null
     */
    protected ?bool $isGlobal = null;
    /**
     * Constructor method for MidocoConnectionTypeDescriptionExt
     * @uses MidocoConnectionTypeDescriptionExt::setDescription()
     * @uses MidocoConnectionTypeDescriptionExt::setCultureId()
     * @uses MidocoConnectionTypeDescriptionExt::setIsGlobal()
     * @param string $description
     * @param string $cultureId
     * @param bool $isGlobal
     */
    public function __construct(?string $description = null, ?string $cultureId = null, ?bool $isGlobal = null)
    {
        $this
            ->setDescription($description)
            ->setCultureId($cultureId)
            ->setIsGlobal($isGlobal);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\MidocoConnectionTypeDescriptionExt
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoConnectionTypeDescriptionExt
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
    }
    /**
     * Get isGlobal value
     * @return bool|null
     */
    public function getIsGlobal(): ?bool
    {
        return $this->isGlobal;
    }
    /**
     * Set isGlobal value
     * @param bool $isGlobal
     * @return \Pggns\MidocoApi\Order\StructType\MidocoConnectionTypeDescriptionExt
     */
    public function setIsGlobal(?bool $isGlobal = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isGlobal) && !is_bool($isGlobal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isGlobal, true), gettype($isGlobal)), __LINE__);
        }
        $this->isGlobal = $isGlobal;
        
        return $this;
    }
}
