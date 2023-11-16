<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintOptionDTO StructType
 * @subpackage Structs
 */
class PrintOptionDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The printOption
     * @var string|null
     */
    protected ?string $printOption = null;
    /**
     * The printOptionId
     * @var int|null
     */
    protected ?int $printOptionId = null;
    /**
     * Constructor method for PrintOptionDTO
     * @uses PrintOptionDTO::setDescription()
     * @uses PrintOptionDTO::setPrintOption()
     * @uses PrintOptionDTO::setPrintOptionId()
     * @param string $description
     * @param string $printOption
     * @param int $printOptionId
     */
    public function __construct(?string $description = null, ?string $printOption = null, ?int $printOptionId = null)
    {
        $this
            ->setDescription($description)
            ->setPrintOption($printOption)
            ->setPrintOptionId($printOptionId);
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintOptionDTO
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
     * Get printOption value
     * @return string|null
     */
    public function getPrintOption(): ?string
    {
        return $this->printOption;
    }
    /**
     * Set printOption value
     * @param string $printOption
     * @return \Pggns\MidocoApi\Order\StructType\PrintOptionDTO
     */
    public function setPrintOption(?string $printOption = null): self
    {
        // validation for constraint: string
        if (!is_null($printOption) && !is_string($printOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printOption, true), gettype($printOption)), __LINE__);
        }
        $this->printOption = $printOption;
        
        return $this;
    }
    /**
     * Get printOptionId value
     * @return int|null
     */
    public function getPrintOptionId(): ?int
    {
        return $this->printOptionId;
    }
    /**
     * Set printOptionId value
     * @param int $printOptionId
     * @return \Pggns\MidocoApi\Order\StructType\PrintOptionDTO
     */
    public function setPrintOptionId(?int $printOptionId = null): self
    {
        // validation for constraint: int
        if (!is_null($printOptionId) && !(is_int($printOptionId) || ctype_digit($printOptionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printOptionId, true), gettype($printOptionId)), __LINE__);
        }
        $this->printOptionId = $printOptionId;
        
        return $this;
    }
}
