<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMilesAndMorePromotionRequest StructType
 * @subpackage Structs
 */
class DeleteMilesAndMorePromotionRequest extends AbstractStructBase
{
    /**
     * The PromotionId
     * Meta information extracted from the WSDL
     * - documentation: The promotionId of the promotion to delete
     * @var int|null
     */
    protected ?int $PromotionId = null;
    /**
     * The UnitName
     * Meta information extracted from the WSDL
     * - documentation: The unit name in which the promotion is saved - if absent the unit is taken from the session
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UnitName = null;
    /**
     * Constructor method for DeleteMilesAndMorePromotionRequest
     * @uses DeleteMilesAndMorePromotionRequest::setPromotionId()
     * @uses DeleteMilesAndMorePromotionRequest::setUnitName()
     * @param int $promotionId
     * @param string $unitName
     */
    public function __construct(?int $promotionId = null, ?string $unitName = null)
    {
        $this
            ->setPromotionId($promotionId)
            ->setUnitName($unitName);
    }
    /**
     * Get PromotionId value
     * @return int|null
     */
    public function getPromotionId(): ?int
    {
        return $this->PromotionId;
    }
    /**
     * Set PromotionId value
     * @param int $promotionId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMilesAndMorePromotionRequest
     */
    public function setPromotionId(?int $promotionId = null): self
    {
        // validation for constraint: int
        if (!is_null($promotionId) && !(is_int($promotionId) || ctype_digit($promotionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($promotionId, true), gettype($promotionId)), __LINE__);
        }
        $this->PromotionId = $promotionId;
        
        return $this;
    }
    /**
     * Get UnitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->UnitName;
    }
    /**
     * Set UnitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMilesAndMorePromotionRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->UnitName = $unitName;
        
        return $this;
    }
}
