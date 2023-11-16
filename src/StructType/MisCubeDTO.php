<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisCubeDTO StructType
 * @subpackage Structs
 */
class MisCubeDTO extends AbstractStructBase
{
    /**
     * The cubeId
     * @var int|null
     */
    protected ?int $cubeId = null;
    /**
     * The cubeName
     * @var string|null
     */
    protected ?string $cubeName = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * Constructor method for MisCubeDTO
     * @uses MisCubeDTO::setCubeId()
     * @uses MisCubeDTO::setCubeName()
     * @uses MisCubeDTO::setDescription()
     * @uses MisCubeDTO::setOrgUnit()
     * @param int $cubeId
     * @param string $cubeName
     * @param string $description
     * @param string $orgUnit
     */
    public function __construct(?int $cubeId = null, ?string $cubeName = null, ?string $description = null, ?string $orgUnit = null)
    {
        $this
            ->setCubeId($cubeId)
            ->setCubeName($cubeName)
            ->setDescription($description)
            ->setOrgUnit($orgUnit);
    }
    /**
     * Get cubeId value
     * @return int|null
     */
    public function getCubeId(): ?int
    {
        return $this->cubeId;
    }
    /**
     * Set cubeId value
     * @param int $cubeId
     * @return \Pggns\MidocoApi\Order\StructType\MisCubeDTO
     */
    public function setCubeId(?int $cubeId = null): self
    {
        // validation for constraint: int
        if (!is_null($cubeId) && !(is_int($cubeId) || ctype_digit($cubeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cubeId, true), gettype($cubeId)), __LINE__);
        }
        $this->cubeId = $cubeId;
        
        return $this;
    }
    /**
     * Get cubeName value
     * @return string|null
     */
    public function getCubeName(): ?string
    {
        return $this->cubeName;
    }
    /**
     * Set cubeName value
     * @param string $cubeName
     * @return \Pggns\MidocoApi\Order\StructType\MisCubeDTO
     */
    public function setCubeName(?string $cubeName = null): self
    {
        // validation for constraint: string
        if (!is_null($cubeName) && !is_string($cubeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cubeName, true), gettype($cubeName)), __LINE__);
        }
        $this->cubeName = $cubeName;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\MisCubeDTO
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
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Order\StructType\MisCubeDTO
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
}
