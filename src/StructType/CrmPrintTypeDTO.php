<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmPrintTypeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrmPrintTypeDTO extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The noOfCopies
     * @var int|null
     */
    protected ?int $noOfCopies = null;
    /**
     * The printType
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * Constructor method for CrmPrintTypeDTO
     * @uses CrmPrintTypeDTO::setCustomerId()
     * @uses CrmPrintTypeDTO::setNoOfCopies()
     * @uses CrmPrintTypeDTO::setPrintType()
     * @param int $customerId
     * @param int $noOfCopies
     * @param string $printType
     */
    public function __construct(?int $customerId = null, ?int $noOfCopies = null, ?string $printType = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setNoOfCopies($noOfCopies)
            ->setPrintType($printType);
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmPrintTypeDTO
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
     * Get noOfCopies value
     * @return int|null
     */
    public function getNoOfCopies(): ?int
    {
        return $this->noOfCopies;
    }
    /**
     * Set noOfCopies value
     * @param int $noOfCopies
     * @return \Pggns\MidocoApi\Order\StructType\CrmPrintTypeDTO
     */
    public function setNoOfCopies(?int $noOfCopies = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfCopies) && !(is_int($noOfCopies) || ctype_digit($noOfCopies))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfCopies, true), gettype($noOfCopies)), __LINE__);
        }
        $this->noOfCopies = $noOfCopies;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmPrintTypeDTO
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
}
