<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserDataSaveGUIPropertiesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UserDataSaveGUIPropertiesResponse extends AbstractStructBase
{
    /**
     * The countSaved
     * @var int|null
     */
    protected ?int $countSaved = null;
    /**
     * Constructor method for UserDataSaveGUIPropertiesResponse
     * @uses UserDataSaveGUIPropertiesResponse::setCountSaved()
     * @param int $countSaved
     */
    public function __construct(?int $countSaved = null)
    {
        $this
            ->setCountSaved($countSaved);
    }
    /**
     * Get countSaved value
     * @return int|null
     */
    public function getCountSaved(): ?int
    {
        return $this->countSaved;
    }
    /**
     * Set countSaved value
     * @param int $countSaved
     * @return \Pggns\MidocoApi\Order\StructType\UserDataSaveGUIPropertiesResponse
     */
    public function setCountSaved(?int $countSaved = null): self
    {
        // validation for constraint: int
        if (!is_null($countSaved) && !(is_int($countSaved) || ctype_digit($countSaved))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($countSaved, true), gettype($countSaved)), __LINE__);
        }
        $this->countSaved = $countSaved;
        
        return $this;
    }
}
