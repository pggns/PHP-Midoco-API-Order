<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QmPrintDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class QmPrintDTO extends AbstractStructBase
{
    /**
     * The printType
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * The qmId
     * @var int|null
     */
    protected ?int $qmId = null;
    /**
     * Constructor method for QmPrintDTO
     * @uses QmPrintDTO::setPrintType()
     * @uses QmPrintDTO::setQmId()
     * @param string $printType
     * @param int $qmId
     */
    public function __construct(?string $printType = null, ?int $qmId = null)
    {
        $this
            ->setPrintType($printType)
            ->setQmId($qmId);
    }
    /**
     * Get printType value
     * @return string|null
     */
    public function getPrintType(): ?string
    {
        return $this->printType;
    }
    /**
     * Set printType value
     * @param string $printType
     * @return \Pggns\MidocoApi\Order\StructType\QmPrintDTO
     */
    public function setPrintType(?string $printType = null): self
    {
        // validation for constraint: string
        if (!is_null($printType) && !is_string($printType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printType, true), gettype($printType)), __LINE__);
        }
        $this->printType = $printType;
        
        return $this;
    }
    /**
     * Get qmId value
     * @return int|null
     */
    public function getQmId(): ?int
    {
        return $this->qmId;
    }
    /**
     * Set qmId value
     * @param int $qmId
     * @return \Pggns\MidocoApi\Order\StructType\QmPrintDTO
     */
    public function setQmId(?int $qmId = null): self
    {
        // validation for constraint: int
        if (!is_null($qmId) && !(is_int($qmId) || ctype_digit($qmId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($qmId, true), gettype($qmId)), __LINE__);
        }
        $this->qmId = $qmId;
        
        return $this;
    }
}
