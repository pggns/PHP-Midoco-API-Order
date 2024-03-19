<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeletePreparedAgencySettlementResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeletePreparedAgencySettlementResponse extends AbstractStructBase
{
    /**
     * The doneOk
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $doneOk = null;
    /**
     * Constructor method for DeletePreparedAgencySettlementResponse
     * @uses DeletePreparedAgencySettlementResponse::setDoneOk()
     * @param bool $doneOk
     */
    public function __construct(?bool $doneOk = false)
    {
        $this
            ->setDoneOk($doneOk);
    }
    /**
     * Get doneOk value
     * @return bool|null
     */
    public function getDoneOk(): ?bool
    {
        return $this->doneOk;
    }
    /**
     * Set doneOk value
     * @param bool $doneOk
     * @return \Pggns\MidocoApi\Order\StructType\DeletePreparedAgencySettlementResponse
     */
    public function setDoneOk(?bool $doneOk = false): self
    {
        // validation for constraint: boolean
        if (!is_null($doneOk) && !is_bool($doneOk)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($doneOk, true), gettype($doneOk)), __LINE__);
        }
        $this->doneOk = $doneOk;
        
        return $this;
    }
}
