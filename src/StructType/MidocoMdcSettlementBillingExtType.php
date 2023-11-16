<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMdcSettlementBillingExtType StructType
 * @subpackage Structs
 */
class MidocoMdcSettlementBillingExtType extends MdcSettlementBillingDTO
{
    /**
     * The customerName
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The documentNo
     * @var int|null
     */
    protected ?int $documentNo = null;
    /**
     * Constructor method for MidocoMdcSettlementBillingExtType
     * @uses MidocoMdcSettlementBillingExtType::setCustomerName()
     * @uses MidocoMdcSettlementBillingExtType::setDocumentNo()
     * @param string $customerName
     * @param int $documentNo
     */
    public function __construct(?string $customerName = null, ?int $documentNo = null)
    {
        $this
            ->setCustomerName($customerName)
            ->setDocumentNo($documentNo);
    }
    /**
     * Get customerName value
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }
    /**
     * Set customerName value
     * @param string $customerName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMdcSettlementBillingExtType
     */
    public function setCustomerName(?string $customerName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName, true), gettype($customerName)), __LINE__);
        }
        $this->customerName = $customerName;
        
        return $this;
    }
    /**
     * Get documentNo value
     * @return int|null
     */
    public function getDocumentNo(): ?int
    {
        return $this->documentNo;
    }
    /**
     * Set documentNo value
     * @param int $documentNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMdcSettlementBillingExtType
     */
    public function setDocumentNo(?int $documentNo = null): self
    {
        // validation for constraint: int
        if (!is_null($documentNo) && !(is_int($documentNo) || ctype_digit($documentNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentNo, true), gettype($documentNo)), __LINE__);
        }
        $this->documentNo = $documentNo;
        
        return $this;
    }
}
