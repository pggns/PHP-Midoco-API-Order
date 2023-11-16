<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemarkOrgunitDTO StructType
 * @subpackage Structs
 */
class RemarkOrgunitDTO extends AbstractStructBase
{
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The shortId
     * @var string|null
     */
    protected ?string $shortId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for RemarkOrgunitDTO
     * @uses RemarkOrgunitDTO::setCultureId()
     * @uses RemarkOrgunitDTO::setShortId()
     * @uses RemarkOrgunitDTO::setUnitName()
     * @param string $cultureId
     * @param string $shortId
     * @param string $unitName
     */
    public function __construct(?string $cultureId = null, ?string $shortId = null, ?string $unitName = null)
    {
        $this
            ->setCultureId($cultureId)
            ->setShortId($shortId)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Order\StructType\RemarkOrgunitDTO
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
     * Get shortId value
     * @return string|null
     */
    public function getShortId(): ?string
    {
        return $this->shortId;
    }
    /**
     * Set shortId value
     * @param string $shortId
     * @return \Pggns\MidocoApi\Order\StructType\RemarkOrgunitDTO
     */
    public function setShortId(?string $shortId = null): self
    {
        // validation for constraint: string
        if (!is_null($shortId) && !is_string($shortId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortId, true), gettype($shortId)), __LINE__);
        }
        $this->shortId = $shortId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\RemarkOrgunitDTO
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
}
