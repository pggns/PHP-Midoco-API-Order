<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMediatorByCriteriaRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMediatorByCriteriaRequest extends AbstractStructBase
{
    /**
     * The criteria_name
     * @var string|null
     */
    protected ?string $criteria_name = null;
    /**
     * The criteria_value
     * @var string|null
     */
    protected ?string $criteria_value = null;
    /**
     * Constructor method for GetMediatorByCriteriaRequest
     * @uses GetMediatorByCriteriaRequest::setCriteria_name()
     * @uses GetMediatorByCriteriaRequest::setCriteria_value()
     * @param string $criteria_name
     * @param string $criteria_value
     */
    public function __construct(?string $criteria_name = null, ?string $criteria_value = null)
    {
        $this
            ->setCriteria_name($criteria_name)
            ->setCriteria_value($criteria_value);
    }
    /**
     * Get criteria_name value
     * @return string|null
     */
    public function getCriteria_name(): ?string
    {
        return $this->criteria_name;
    }
    /**
     * Set criteria_name value
     * @param string $criteria_name
     * @return \Pggns\MidocoApi\Order\StructType\GetMediatorByCriteriaRequest
     */
    public function setCriteria_name(?string $criteria_name = null): self
    {
        // validation for constraint: string
        if (!is_null($criteria_name) && !is_string($criteria_name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($criteria_name, true), gettype($criteria_name)), __LINE__);
        }
        $this->criteria_name = $criteria_name;
        
        return $this;
    }
    /**
     * Get criteria_value value
     * @return string|null
     */
    public function getCriteria_value(): ?string
    {
        return $this->criteria_value;
    }
    /**
     * Set criteria_value value
     * @param string $criteria_value
     * @return \Pggns\MidocoApi\Order\StructType\GetMediatorByCriteriaRequest
     */
    public function setCriteria_value(?string $criteria_value = null): self
    {
        // validation for constraint: string
        if (!is_null($criteria_value) && !is_string($criteria_value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($criteria_value, true), gettype($criteria_value)), __LINE__);
        }
        $this->criteria_value = $criteria_value;
        
        return $this;
    }
}
