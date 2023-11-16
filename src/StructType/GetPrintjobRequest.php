<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintjobRequest StructType
 * @subpackage Structs
 */
class GetPrintjobRequest extends AbstractStructBase
{
    /**
     * The printjob_id
     * @var int|null
     */
    protected ?int $printjob_id = null;
    /**
     * Constructor method for GetPrintjobRequest
     * @uses GetPrintjobRequest::setPrintjob_id()
     * @param int $printjob_id
     */
    public function __construct(?int $printjob_id = null)
    {
        $this
            ->setPrintjob_id($printjob_id);
    }
    /**
     * Get printjob_id value
     * @return int|null
     */
    public function getPrintjob_id(): ?int
    {
        return $this->printjob_id;
    }
    /**
     * Set printjob_id value
     * @param int $printjob_id
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintjobRequest
     */
    public function setPrintjob_id(?int $printjob_id = null): self
    {
        // validation for constraint: int
        if (!is_null($printjob_id) && !(is_int($printjob_id) || ctype_digit($printjob_id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printjob_id, true), gettype($printjob_id)), __LINE__);
        }
        $this->printjob_id = $printjob_id;
        
        return $this;
    }
}
