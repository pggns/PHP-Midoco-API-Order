<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingRemarkDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BillingRemarkDTO extends AbstractStructBase
{
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The printRemark
     * @var bool|null
     */
    protected ?bool $printRemark = null;
    /**
     * The remark
     * @var string|null
     */
    protected ?string $remark = null;
    /**
     * Constructor method for BillingRemarkDTO
     * @uses BillingRemarkDTO::setDocumentId()
     * @uses BillingRemarkDTO::setPosition()
     * @uses BillingRemarkDTO::setPrintRemark()
     * @uses BillingRemarkDTO::setRemark()
     * @param int $documentId
     * @param int $position
     * @param bool $printRemark
     * @param string $remark
     */
    public function __construct(?int $documentId = null, ?int $position = null, ?bool $printRemark = null, ?string $remark = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setPosition($position)
            ->setPrintRemark($printRemark)
            ->setRemark($remark);
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\BillingRemarkDTO
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\BillingRemarkDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get printRemark value
     * @return bool|null
     */
    public function getPrintRemark(): ?bool
    {
        return $this->printRemark;
    }
    /**
     * Set printRemark value
     * @param bool $printRemark
     * @return \Pggns\MidocoApi\Order\StructType\BillingRemarkDTO
     */
    public function setPrintRemark(?bool $printRemark = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printRemark) && !is_bool($printRemark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printRemark, true), gettype($printRemark)), __LINE__);
        }
        $this->printRemark = $printRemark;
        
        return $this;
    }
    /**
     * Get remark value
     * @return string|null
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }
    /**
     * Set remark value
     * @param string $remark
     * @return \Pggns\MidocoApi\Order\StructType\BillingRemarkDTO
     */
    public function setRemark(?string $remark = null): self
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), gettype($remark)), __LINE__);
        }
        $this->remark = $remark;
        
        return $this;
    }
}
