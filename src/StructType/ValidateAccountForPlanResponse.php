<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateAccountForPlanResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: validateAccountForPlan --- validates an account of a plan
 * @subpackage Structs
 */
class ValidateAccountForPlanResponse extends AbstractStructBase
{
    /**
     * The isValid
     * @var bool|null
     */
    protected ?bool $isValid = null;
    /**
     * Constructor method for ValidateAccountForPlanResponse
     * @uses ValidateAccountForPlanResponse::setIsValid()
     * @param bool $isValid
     */
    public function __construct(?bool $isValid = null)
    {
        $this
            ->setIsValid($isValid);
    }
    /**
     * Get isValid value
     * @return bool|null
     */
    public function getIsValid(): ?bool
    {
        return $this->isValid;
    }
    /**
     * Set isValid value
     * @param bool $isValid
     * @return \Pggns\MidocoApi\Order\StructType\ValidateAccountForPlanResponse
     */
    public function setIsValid(?bool $isValid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isValid) && !is_bool($isValid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isValid, true), gettype($isValid)), __LINE__);
        }
        $this->isValid = $isValid;
        
        return $this;
    }
}
