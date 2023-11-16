<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteUnitNoticeRequest StructType
 * @subpackage Structs
 */
class DeleteUnitNoticeRequest extends AbstractStructBase
{
    /**
     * The midocoOrgUnitName
     * @var string|null
     */
    protected ?string $midocoOrgUnitName = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * Constructor method for DeleteUnitNoticeRequest
     * @uses DeleteUnitNoticeRequest::setMidocoOrgUnitName()
     * @uses DeleteUnitNoticeRequest::setPosition()
     * @param string $midocoOrgUnitName
     * @param int $position
     */
    public function __construct(?string $midocoOrgUnitName = null, ?int $position = null)
    {
        $this
            ->setMidocoOrgUnitName($midocoOrgUnitName)
            ->setPosition($position);
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
     * @return \Pggns\MidocoApi\Order\StructType\DeleteUnitNoticeRequest
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
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\DeleteUnitNoticeRequest
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
}
