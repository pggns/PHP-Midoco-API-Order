<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTourOperatorAssessor StructType
 * @subpackage Structs
 */
class MidocoTourOperatorAssessor extends TouroperatorInsurerDTO
{
    /**
     * The companyName
     * @var string|null
     */
    protected ?string $companyName = null;
    /**
     * The insuranceCode
     * @var string|null
     */
    protected ?string $insuranceCode = null;
    /**
     * Constructor method for MidocoTourOperatorAssessor
     * @uses MidocoTourOperatorAssessor::setCompanyName()
     * @uses MidocoTourOperatorAssessor::setInsuranceCode()
     * @param string $companyName
     * @param string $insuranceCode
     */
    public function __construct(?string $companyName = null, ?string $insuranceCode = null)
    {
        $this
            ->setCompanyName($companyName)
            ->setInsuranceCode($insuranceCode);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTourOperatorAssessor
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
    /**
     * Get insuranceCode value
     * @return string|null
     */
    public function getInsuranceCode(): ?string
    {
        return $this->insuranceCode;
    }
    /**
     * Set insuranceCode value
     * @param string $insuranceCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTourOperatorAssessor
     */
    public function setInsuranceCode(?string $insuranceCode = null): self
    {
        // validation for constraint: string
        if (!is_null($insuranceCode) && !is_string($insuranceCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insuranceCode, true), gettype($insuranceCode)), __LINE__);
        }
        $this->insuranceCode = $insuranceCode;
        
        return $this;
    }
}
