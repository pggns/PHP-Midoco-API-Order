<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMediatorProductSettlementInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoMediatorProductSettlementInfo extends MedStlmntProdDTO
{
    /**
     * The mediatorName
     * @var string|null
     */
    protected ?string $mediatorName = null;
    /**
     * The creatingUserName
     * @var string|null
     */
    protected ?string $creatingUserName = null;
    /**
     * Constructor method for MidocoMediatorProductSettlementInfo
     * @uses MidocoMediatorProductSettlementInfo::setMediatorName()
     * @uses MidocoMediatorProductSettlementInfo::setCreatingUserName()
     * @param string $mediatorName
     * @param string $creatingUserName
     */
    public function __construct(?string $mediatorName = null, ?string $creatingUserName = null)
    {
        $this
            ->setMediatorName($mediatorName)
            ->setCreatingUserName($creatingUserName);
    }
    /**
     * Get mediatorName value
     * @return string|null
     */
    public function getMediatorName(): ?string
    {
        return $this->mediatorName;
    }
    /**
     * Set mediatorName value
     * @param string $mediatorName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementInfo
     */
    public function setMediatorName(?string $mediatorName = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorName) && !is_string($mediatorName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorName, true), gettype($mediatorName)), __LINE__);
        }
        $this->mediatorName = $mediatorName;
        
        return $this;
    }
    /**
     * Get creatingUserName value
     * @return string|null
     */
    public function getCreatingUserName(): ?string
    {
        return $this->creatingUserName;
    }
    /**
     * Set creatingUserName value
     * @param string $creatingUserName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementInfo
     */
    public function setCreatingUserName(?string $creatingUserName = null): self
    {
        // validation for constraint: string
        if (!is_null($creatingUserName) && !is_string($creatingUserName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creatingUserName, true), gettype($creatingUserName)), __LINE__);
        }
        $this->creatingUserName = $creatingUserName;
        
        return $this;
    }
}
