<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmLockReasonDTO StructType
 * @subpackage Structs
 */
class CrmLockReasonDTO extends AbstractStructBase
{
    /**
     * The reasonId
     * @var string|null
     */
    protected ?string $reasonId = null;
    /**
     * The showMessage
     * @var bool|null
     */
    protected ?bool $showMessage = null;
    /**
     * Constructor method for CrmLockReasonDTO
     * @uses CrmLockReasonDTO::setReasonId()
     * @uses CrmLockReasonDTO::setShowMessage()
     * @param string $reasonId
     * @param bool $showMessage
     */
    public function __construct(?string $reasonId = null, ?bool $showMessage = null)
    {
        $this
            ->setReasonId($reasonId)
            ->setShowMessage($showMessage);
    }
    /**
     * Get reasonId value
     * @return string|null
     */
    public function getReasonId(): ?string
    {
        return $this->reasonId;
    }
    /**
     * Set reasonId value
     * @param string $reasonId
     * @return \Pggns\MidocoApi\Order\StructType\CrmLockReasonDTO
     */
    public function setReasonId(?string $reasonId = null): self
    {
        // validation for constraint: string
        if (!is_null($reasonId) && !is_string($reasonId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reasonId, true), gettype($reasonId)), __LINE__);
        }
        $this->reasonId = $reasonId;
        
        return $this;
    }
    /**
     * Get showMessage value
     * @return bool|null
     */
    public function getShowMessage(): ?bool
    {
        return $this->showMessage;
    }
    /**
     * Set showMessage value
     * @param bool $showMessage
     * @return \Pggns\MidocoApi\Order\StructType\CrmLockReasonDTO
     */
    public function setShowMessage(?bool $showMessage = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showMessage) && !is_bool($showMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showMessage, true), gettype($showMessage)), __LINE__);
        }
        $this->showMessage = $showMessage;
        
        return $this;
    }
}
