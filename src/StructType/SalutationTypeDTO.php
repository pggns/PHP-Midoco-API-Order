<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalutationTypeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SalutationTypeDTO extends AbstractStructBase
{
    /**
     * The printForename
     * @var bool|null
     */
    protected ?bool $printForename = null;
    /**
     * The printName
     * @var bool|null
     */
    protected ?bool $printName = null;
    /**
     * The printTitle
     * @var bool|null
     */
    protected ?bool $printTitle = null;
    /**
     * The salutationId
     * @var string|null
     */
    protected ?string $salutationId = null;
    /**
     * Constructor method for SalutationTypeDTO
     * @uses SalutationTypeDTO::setPrintForename()
     * @uses SalutationTypeDTO::setPrintName()
     * @uses SalutationTypeDTO::setPrintTitle()
     * @uses SalutationTypeDTO::setSalutationId()
     * @param bool $printForename
     * @param bool $printName
     * @param bool $printTitle
     * @param string $salutationId
     */
    public function __construct(?bool $printForename = null, ?bool $printName = null, ?bool $printTitle = null, ?string $salutationId = null)
    {
        $this
            ->setPrintForename($printForename)
            ->setPrintName($printName)
            ->setPrintTitle($printTitle)
            ->setSalutationId($salutationId);
    }
    /**
     * Get printForename value
     * @return bool|null
     */
    public function getPrintForename(): ?bool
    {
        return $this->printForename;
    }
    /**
     * Set printForename value
     * @param bool $printForename
     * @return \Pggns\MidocoApi\Order\StructType\SalutationTypeDTO
     */
    public function setPrintForename(?bool $printForename = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printForename) && !is_bool($printForename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printForename, true), gettype($printForename)), __LINE__);
        }
        $this->printForename = $printForename;
        
        return $this;
    }
    /**
     * Get printName value
     * @return bool|null
     */
    public function getPrintName(): ?bool
    {
        return $this->printName;
    }
    /**
     * Set printName value
     * @param bool $printName
     * @return \Pggns\MidocoApi\Order\StructType\SalutationTypeDTO
     */
    public function setPrintName(?bool $printName = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printName) && !is_bool($printName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printName, true), gettype($printName)), __LINE__);
        }
        $this->printName = $printName;
        
        return $this;
    }
    /**
     * Get printTitle value
     * @return bool|null
     */
    public function getPrintTitle(): ?bool
    {
        return $this->printTitle;
    }
    /**
     * Set printTitle value
     * @param bool $printTitle
     * @return \Pggns\MidocoApi\Order\StructType\SalutationTypeDTO
     */
    public function setPrintTitle(?bool $printTitle = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printTitle) && !is_bool($printTitle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printTitle, true), gettype($printTitle)), __LINE__);
        }
        $this->printTitle = $printTitle;
        
        return $this;
    }
    /**
     * Get salutationId value
     * @return string|null
     */
    public function getSalutationId(): ?string
    {
        return $this->salutationId;
    }
    /**
     * Set salutationId value
     * @param string $salutationId
     * @return \Pggns\MidocoApi\Order\StructType\SalutationTypeDTO
     */
    public function setSalutationId(?string $salutationId = null): self
    {
        // validation for constraint: string
        if (!is_null($salutationId) && !is_string($salutationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salutationId, true), gettype($salutationId)), __LINE__);
        }
        $this->salutationId = $salutationId;
        
        return $this;
    }
}
