<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMandatoryType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoMandatoryType extends AbstractStructBase
{
    /**
     * The mandatory
     * @var int|null
     */
    protected ?int $mandatory = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for MidocoMandatoryType
     * @uses MidocoMandatoryType::setMandatory()
     * @uses MidocoMandatoryType::setDescription()
     * @param int $mandatory
     * @param string $description
     */
    public function __construct(?int $mandatory = null, ?string $description = null)
    {
        $this
            ->setMandatory($mandatory)
            ->setDescription($description);
    }
    /**
     * Get mandatory value
     * @return int|null
     */
    public function getMandatory(): ?int
    {
        return $this->mandatory;
    }
    /**
     * Set mandatory value
     * @param int $mandatory
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMandatoryType
     */
    public function setMandatory(?int $mandatory = null): self
    {
        // validation for constraint: int
        if (!is_null($mandatory) && !(is_int($mandatory) || ctype_digit($mandatory))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mandatory, true), gettype($mandatory)), __LINE__);
        }
        $this->mandatory = $mandatory;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMandatoryType
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
