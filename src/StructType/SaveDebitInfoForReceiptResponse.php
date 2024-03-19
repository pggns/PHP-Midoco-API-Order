<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDebitInfoForReceiptResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveDebitInfoForReceiptResponse extends AbstractStructBase
{
    /**
     * The ok
     * @var bool|null
     */
    protected ?bool $ok = null;
    /**
     * Constructor method for SaveDebitInfoForReceiptResponse
     * @uses SaveDebitInfoForReceiptResponse::setOk()
     * @param bool $ok
     */
    public function __construct(?bool $ok = null)
    {
        $this
            ->setOk($ok);
    }
    /**
     * Get ok value
     * @return bool|null
     */
    public function getOk(): ?bool
    {
        return $this->ok;
    }
    /**
     * Set ok value
     * @param bool $ok
     * @return \Pggns\MidocoApi\Order\StructType\SaveDebitInfoForReceiptResponse
     */
    public function setOk(?bool $ok = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ok) && !is_bool($ok)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ok, true), gettype($ok)), __LINE__);
        }
        $this->ok = $ok;
        
        return $this;
    }
}
