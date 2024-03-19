<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionSyncNumberDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TransactionSyncNumberDTO extends AbstractStructBase
{
    /**
     * The posId
     * @var string|null
     */
    protected ?string $posId = null;
    /**
     * The syncNumber
     * @var int|null
     */
    protected ?int $syncNumber = null;
    /**
     * Constructor method for TransactionSyncNumberDTO
     * @uses TransactionSyncNumberDTO::setPosId()
     * @uses TransactionSyncNumberDTO::setSyncNumber()
     * @param string $posId
     * @param int $syncNumber
     */
    public function __construct(?string $posId = null, ?int $syncNumber = null)
    {
        $this
            ->setPosId($posId)
            ->setSyncNumber($syncNumber);
    }
    /**
     * Get posId value
     * @return string|null
     */
    public function getPosId(): ?string
    {
        return $this->posId;
    }
    /**
     * Set posId value
     * @param string $posId
     * @return \Pggns\MidocoApi\Order\StructType\TransactionSyncNumberDTO
     */
    public function setPosId(?string $posId = null): self
    {
        // validation for constraint: string
        if (!is_null($posId) && !is_string($posId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($posId, true), gettype($posId)), __LINE__);
        }
        $this->posId = $posId;
        
        return $this;
    }
    /**
     * Get syncNumber value
     * @return int|null
     */
    public function getSyncNumber(): ?int
    {
        return $this->syncNumber;
    }
    /**
     * Set syncNumber value
     * @param int $syncNumber
     * @return \Pggns\MidocoApi\Order\StructType\TransactionSyncNumberDTO
     */
    public function setSyncNumber(?int $syncNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($syncNumber) && !(is_int($syncNumber) || ctype_digit($syncNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($syncNumber, true), gettype($syncNumber)), __LINE__);
        }
        $this->syncNumber = $syncNumber;
        
        return $this;
    }
}
