<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsurerDisabledUnitDTO StructType
 * @subpackage Structs
 */
class InsurerDisabledUnitDTO extends AbstractStructBase
{
    /**
     * The disabledUnitName
     * @var string|null
     */
    protected ?string $disabledUnitName = null;
    /**
     * The insurerId
     * @var int|null
     */
    protected ?int $insurerId = null;
    /**
     * Constructor method for InsurerDisabledUnitDTO
     * @uses InsurerDisabledUnitDTO::setDisabledUnitName()
     * @uses InsurerDisabledUnitDTO::setInsurerId()
     * @param string $disabledUnitName
     * @param int $insurerId
     */
    public function __construct(?string $disabledUnitName = null, ?int $insurerId = null)
    {
        $this
            ->setDisabledUnitName($disabledUnitName)
            ->setInsurerId($insurerId);
    }
    /**
     * Get disabledUnitName value
     * @return string|null
     */
    public function getDisabledUnitName(): ?string
    {
        return $this->disabledUnitName;
    }
    /**
     * Set disabledUnitName value
     * @param string $disabledUnitName
     * @return \Pggns\MidocoApi\Order\StructType\InsurerDisabledUnitDTO
     */
    public function setDisabledUnitName(?string $disabledUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($disabledUnitName) && !is_string($disabledUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disabledUnitName, true), gettype($disabledUnitName)), __LINE__);
        }
        $this->disabledUnitName = $disabledUnitName;
        
        return $this;
    }
    /**
     * Get insurerId value
     * @return int|null
     */
    public function getInsurerId(): ?int
    {
        return $this->insurerId;
    }
    /**
     * Set insurerId value
     * @param int $insurerId
     * @return \Pggns\MidocoApi\Order\StructType\InsurerDisabledUnitDTO
     */
    public function setInsurerId(?int $insurerId = null): self
    {
        // validation for constraint: int
        if (!is_null($insurerId) && !(is_int($insurerId) || ctype_digit($insurerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($insurerId, true), gettype($insurerId)), __LINE__);
        }
        $this->insurerId = $insurerId;
        
        return $this;
    }
}
