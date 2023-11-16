<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmTraveller StructType
 * @subpackage Structs
 */
class MidocoCrmTraveller extends CrmTravellerDTO
{
    /**
     * The fullName
     * @var string|null
     */
    protected ?string $fullName = null;
    /**
     * Constructor method for MidocoCrmTraveller
     * @uses MidocoCrmTraveller::setFullName()
     * @param string $fullName
     */
    public function __construct(?string $fullName = null)
    {
        $this
            ->setFullName($fullName);
    }
    /**
     * Get fullName value
     * @return string|null
     */
    public function getFullName(): ?string
    {
        return $this->fullName;
    }
    /**
     * Set fullName value
     * @param string $fullName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmTraveller
     */
    public function setFullName(?string $fullName = null): self
    {
        // validation for constraint: string
        if (!is_null($fullName) && !is_string($fullName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fullName, true), gettype($fullName)), __LINE__);
        }
        $this->fullName = $fullName;
        
        return $this;
    }
}
