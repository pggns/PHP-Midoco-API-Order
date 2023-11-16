<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommissionDescriptionDTO StructType
 * @subpackage Structs
 */
class CommissionDescriptionDTO extends AbstractStructBase
{
    /**
     * The commissionId
     * @var string|null
     */
    protected ?string $commissionId = null;
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for CommissionDescriptionDTO
     * @uses CommissionDescriptionDTO::setCommissionId()
     * @uses CommissionDescriptionDTO::setCultureId()
     * @uses CommissionDescriptionDTO::setDescription()
     * @param string $commissionId
     * @param string $cultureId
     * @param string $description
     */
    public function __construct(?string $commissionId = null, ?string $cultureId = null, ?string $description = null)
    {
        $this
            ->setCommissionId($commissionId)
            ->setCultureId($cultureId)
            ->setDescription($description);
    }
    /**
     * Get commissionId value
     * @return string|null
     */
    public function getCommissionId(): ?string
    {
        return $this->commissionId;
    }
    /**
     * Set commissionId value
     * @param string $commissionId
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDescriptionDTO
     */
    public function setCommissionId(?string $commissionId = null): self
    {
        // validation for constraint: string
        if (!is_null($commissionId) && !is_string($commissionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commissionId, true), gettype($commissionId)), __LINE__);
        }
        $this->commissionId = $commissionId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDescriptionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDescriptionDTO
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
}
