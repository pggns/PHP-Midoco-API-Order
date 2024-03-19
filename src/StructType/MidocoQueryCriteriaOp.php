<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoQueryCriteriaOp StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoQueryCriteriaOp extends AbstractStructBase
{
    /**
     * The opName
     * @var string|null
     */
    protected ?string $opName = null;
    /**
     * The opType
     * @var string|null
     */
    protected ?string $opType = null;
    /**
     * The opLocalizedName
     * @var string|null
     */
    protected ?string $opLocalizedName = null;
    /**
     * Constructor method for MidocoQueryCriteriaOp
     * @uses MidocoQueryCriteriaOp::setOpName()
     * @uses MidocoQueryCriteriaOp::setOpType()
     * @uses MidocoQueryCriteriaOp::setOpLocalizedName()
     * @param string $opName
     * @param string $opType
     * @param string $opLocalizedName
     */
    public function __construct(?string $opName = null, ?string $opType = null, ?string $opLocalizedName = null)
    {
        $this
            ->setOpName($opName)
            ->setOpType($opType)
            ->setOpLocalizedName($opLocalizedName);
    }
    /**
     * Get opName value
     * @return string|null
     */
    public function getOpName(): ?string
    {
        return $this->opName;
    }
    /**
     * Set opName value
     * @param string $opName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaOp
     */
    public function setOpName(?string $opName = null): self
    {
        // validation for constraint: string
        if (!is_null($opName) && !is_string($opName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opName, true), gettype($opName)), __LINE__);
        }
        $this->opName = $opName;
        
        return $this;
    }
    /**
     * Get opType value
     * @return string|null
     */
    public function getOpType(): ?string
    {
        return $this->opType;
    }
    /**
     * Set opType value
     * @param string $opType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaOp
     */
    public function setOpType(?string $opType = null): self
    {
        // validation for constraint: string
        if (!is_null($opType) && !is_string($opType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opType, true), gettype($opType)), __LINE__);
        }
        $this->opType = $opType;
        
        return $this;
    }
    /**
     * Get opLocalizedName value
     * @return string|null
     */
    public function getOpLocalizedName(): ?string
    {
        return $this->opLocalizedName;
    }
    /**
     * Set opLocalizedName value
     * @param string $opLocalizedName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaOp
     */
    public function setOpLocalizedName(?string $opLocalizedName = null): self
    {
        // validation for constraint: string
        if (!is_null($opLocalizedName) && !is_string($opLocalizedName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opLocalizedName, true), gettype($opLocalizedName)), __LINE__);
        }
        $this->opLocalizedName = $opLocalizedName;
        
        return $this;
    }
}
