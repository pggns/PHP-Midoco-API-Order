<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintAllUsersBonusCalculationResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintAllUsersBonusCalculationResponse extends AbstractStructBase
{
    /**
     * The PrintjobId
     * @var int|null
     */
    protected ?int $PrintjobId = null;
    /**
     * The bytes
     * @var string|null
     */
    protected ?string $bytes = null;
    /**
     * Constructor method for PrintAllUsersBonusCalculationResponse
     * @uses PrintAllUsersBonusCalculationResponse::setPrintjobId()
     * @uses PrintAllUsersBonusCalculationResponse::setBytes()
     * @param int $printjobId
     * @param string $bytes
     */
    public function __construct(?int $printjobId = null, ?string $bytes = null)
    {
        $this
            ->setPrintjobId($printjobId)
            ->setBytes($bytes);
    }
    /**
     * Get PrintjobId value
     * @return int|null
     */
    public function getPrintjobId(): ?int
    {
        return $this->PrintjobId;
    }
    /**
     * Set PrintjobId value
     * @param int $printjobId
     * @return \Pggns\MidocoApi\Order\StructType\PrintAllUsersBonusCalculationResponse
     */
    public function setPrintjobId(?int $printjobId = null): self
    {
        // validation for constraint: int
        if (!is_null($printjobId) && !(is_int($printjobId) || ctype_digit($printjobId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printjobId, true), gettype($printjobId)), __LINE__);
        }
        $this->PrintjobId = $printjobId;
        
        return $this;
    }
    /**
     * Get bytes value
     * @return string|null
     */
    public function getBytes(): ?string
    {
        return $this->bytes;
    }
    /**
     * Set bytes value
     * @param string $bytes
     * @return \Pggns\MidocoApi\Order\StructType\PrintAllUsersBonusCalculationResponse
     */
    public function setBytes(?string $bytes = null): self
    {
        // validation for constraint: string
        if (!is_null($bytes) && !is_string($bytes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bytes, true), gettype($bytes)), __LINE__);
        }
        $this->bytes = $bytes;
        
        return $this;
    }
}
