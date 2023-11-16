<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmSubjectAssignDTO StructType
 * @subpackage Structs
 */
class CrmSubjectAssignDTO extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The printType
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * The subjectDefId
     * @var string|null
     */
    protected ?string $subjectDefId = null;
    /**
     * Constructor method for CrmSubjectAssignDTO
     * @uses CrmSubjectAssignDTO::setCustomerId()
     * @uses CrmSubjectAssignDTO::setPrintType()
     * @uses CrmSubjectAssignDTO::setSubjectDefId()
     * @param int $customerId
     * @param string $printType
     * @param string $subjectDefId
     */
    public function __construct(?int $customerId = null, ?string $printType = null, ?string $subjectDefId = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setPrintType($printType)
            ->setSubjectDefId($subjectDefId);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CrmSubjectAssignDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmSubjectAssignDTO
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
     * Get subjectDefId value
     * @return string|null
     */
    public function getSubjectDefId(): ?string
    {
        return $this->subjectDefId;
    }
    /**
     * Set subjectDefId value
     * @param string $subjectDefId
     * @return \Pggns\MidocoApi\Order\StructType\CrmSubjectAssignDTO
     */
    public function setSubjectDefId(?string $subjectDefId = null): self
    {
        // validation for constraint: string
        if (!is_null($subjectDefId) && !is_string($subjectDefId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subjectDefId, true), gettype($subjectDefId)), __LINE__);
        }
        $this->subjectDefId = $subjectDefId;
        
        return $this;
    }
}
