<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTourOperatorAddress StructType
 * @subpackage Structs
 */
class MidocoTourOperatorAddress extends TouroperatorAddressDTO
{
    /**
     * The companyName
     * @var string|null
     */
    protected ?string $companyName = null;
    /**
     * Constructor method for MidocoTourOperatorAddress
     * @uses MidocoTourOperatorAddress::setCompanyName()
     * @param string $companyName
     */
    public function __construct(?string $companyName = null)
    {
        $this
            ->setCompanyName($companyName);
    }
    /**
     * Get companyName value
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }
    /**
     * Set companyName value
     * @param string $companyName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTourOperatorAddress
     */
    public function setCompanyName(?string $companyName = null): self
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyName, true), gettype($companyName)), __LINE__);
        }
        $this->companyName = $companyName;
        
        return $this;
    }
}
