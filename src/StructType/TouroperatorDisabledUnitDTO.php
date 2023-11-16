<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TouroperatorDisabledUnitDTO StructType
 * @subpackage Structs
 */
class TouroperatorDisabledUnitDTO extends AbstractStructBase
{
    /**
     * The disabledUnitName
     * @var string|null
     */
    protected ?string $disabledUnitName = null;
    /**
     * The touroperatorId
     * @var int|null
     */
    protected ?int $touroperatorId = null;
    /**
     * Constructor method for TouroperatorDisabledUnitDTO
     * @uses TouroperatorDisabledUnitDTO::setDisabledUnitName()
     * @uses TouroperatorDisabledUnitDTO::setTouroperatorId()
     * @param string $disabledUnitName
     * @param int $touroperatorId
     */
    public function __construct(?string $disabledUnitName = null, ?int $touroperatorId = null)
    {
        $this
            ->setDisabledUnitName($disabledUnitName)
            ->setTouroperatorId($touroperatorId);
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
     * @return \Pggns\MidocoApi\Order\StructType\TouroperatorDisabledUnitDTO
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
     * Get touroperatorId value
     * @return int|null
     */
    public function getTouroperatorId(): ?int
    {
        return $this->touroperatorId;
    }
    /**
     * Set touroperatorId value
     * @param int $touroperatorId
     * @return \Pggns\MidocoApi\Order\StructType\TouroperatorDisabledUnitDTO
     */
    public function setTouroperatorId(?int $touroperatorId = null): self
    {
        // validation for constraint: int
        if (!is_null($touroperatorId) && !(is_int($touroperatorId) || ctype_digit($touroperatorId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($touroperatorId, true), gettype($touroperatorId)), __LINE__);
        }
        $this->touroperatorId = $touroperatorId;
        
        return $this;
    }
}
