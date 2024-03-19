<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBillingDocRemarkResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveBillingDocRemark --- saves a new remark or updates an existing one
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveBillingDocRemarkResponse extends AbstractStructBase
{
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * Constructor method for SaveBillingDocRemarkResponse
     * @uses SaveBillingDocRemarkResponse::setPosition()
     * @param int $position
     */
    public function __construct(?int $position = null)
    {
        $this
            ->setPosition($position);
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingDocRemarkResponse
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
}
