<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveVoucherExpiryDateRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveVoucherExpiryDateRequest extends AbstractStructBase
{
    /**
     * The voucherId
     * @var int|null
     */
    protected ?int $voucherId = null;
    /**
     * The newExpiryDate
     * @var string|null
     */
    protected ?string $newExpiryDate = null;
    /**
     * The expiryComment
     * @var string|null
     */
    protected ?string $expiryComment = null;
    /**
     * Constructor method for SaveVoucherExpiryDateRequest
     * @uses SaveVoucherExpiryDateRequest::setVoucherId()
     * @uses SaveVoucherExpiryDateRequest::setNewExpiryDate()
     * @uses SaveVoucherExpiryDateRequest::setExpiryComment()
     * @param int $voucherId
     * @param string $newExpiryDate
     * @param string $expiryComment
     */
    public function __construct(?int $voucherId = null, ?string $newExpiryDate = null, ?string $expiryComment = null)
    {
        $this
            ->setVoucherId($voucherId)
            ->setNewExpiryDate($newExpiryDate)
            ->setExpiryComment($expiryComment);
    }
    /**
     * Get voucherId value
     * @return int|null
     */
    public function getVoucherId(): ?int
    {
        return $this->voucherId;
    }
    /**
     * Set voucherId value
     * @param int $voucherId
     * @return \Pggns\MidocoApi\Order\StructType\SaveVoucherExpiryDateRequest
     */
    public function setVoucherId(?int $voucherId = null): self
    {
        // validation for constraint: int
        if (!is_null($voucherId) && !(is_int($voucherId) || ctype_digit($voucherId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($voucherId, true), gettype($voucherId)), __LINE__);
        }
        $this->voucherId = $voucherId;
        
        return $this;
    }
    /**
     * Get newExpiryDate value
     * @return string|null
     */
    public function getNewExpiryDate(): ?string
    {
        return $this->newExpiryDate;
    }
    /**
     * Set newExpiryDate value
     * @param string $newExpiryDate
     * @return \Pggns\MidocoApi\Order\StructType\SaveVoucherExpiryDateRequest
     */
    public function setNewExpiryDate(?string $newExpiryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($newExpiryDate) && !is_string($newExpiryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newExpiryDate, true), gettype($newExpiryDate)), __LINE__);
        }
        $this->newExpiryDate = $newExpiryDate;
        
        return $this;
    }
    /**
     * Get expiryComment value
     * @return string|null
     */
    public function getExpiryComment(): ?string
    {
        return $this->expiryComment;
    }
    /**
     * Set expiryComment value
     * @param string $expiryComment
     * @return \Pggns\MidocoApi\Order\StructType\SaveVoucherExpiryDateRequest
     */
    public function setExpiryComment(?string $expiryComment = null): self
    {
        // validation for constraint: string
        if (!is_null($expiryComment) && !is_string($expiryComment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiryComment, true), gettype($expiryComment)), __LINE__);
        }
        $this->expiryComment = $expiryComment;
        
        return $this;
    }
}
