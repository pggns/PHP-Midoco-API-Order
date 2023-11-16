<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTravelCMSResponse StructType
 * @subpackage Structs
 */
class SaveTravelCMSResponse extends AbstractStructBase
{
    /**
     * The statusOk
     * @var bool|null
     */
    protected ?bool $statusOk = null;
    /**
     * The countAttributes
     * @var int|null
     */
    protected ?int $countAttributes = null;
    /**
     * Constructor method for SaveTravelCMSResponse
     * @uses SaveTravelCMSResponse::setStatusOk()
     * @uses SaveTravelCMSResponse::setCountAttributes()
     * @param bool $statusOk
     * @param int $countAttributes
     */
    public function __construct(?bool $statusOk = null, ?int $countAttributes = null)
    {
        $this
            ->setStatusOk($statusOk)
            ->setCountAttributes($countAttributes);
    }
    /**
     * Get statusOk value
     * @return bool|null
     */
    public function getStatusOk(): ?bool
    {
        return $this->statusOk;
    }
    /**
     * Set statusOk value
     * @param bool $statusOk
     * @return \Pggns\MidocoApi\Order\StructType\SaveTravelCMSResponse
     */
    public function setStatusOk(?bool $statusOk = null): self
    {
        // validation for constraint: boolean
        if (!is_null($statusOk) && !is_bool($statusOk)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($statusOk, true), gettype($statusOk)), __LINE__);
        }
        $this->statusOk = $statusOk;
        
        return $this;
    }
    /**
     * Get countAttributes value
     * @return int|null
     */
    public function getCountAttributes(): ?int
    {
        return $this->countAttributes;
    }
    /**
     * Set countAttributes value
     * @param int $countAttributes
     * @return \Pggns\MidocoApi\Order\StructType\SaveTravelCMSResponse
     */
    public function setCountAttributes(?int $countAttributes = null): self
    {
        // validation for constraint: int
        if (!is_null($countAttributes) && !(is_int($countAttributes) || ctype_digit($countAttributes))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($countAttributes, true), gettype($countAttributes)), __LINE__);
        }
        $this->countAttributes = $countAttributes;
        
        return $this;
    }
}
