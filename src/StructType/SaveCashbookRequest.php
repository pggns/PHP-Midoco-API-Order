<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCashbookRequest StructType
 * @subpackage Structs
 */
class SaveCashbookRequest extends AbstractStructBase
{
    /**
     * The CashBookInfo
     * Meta information extracted from the WSDL
     * - ref: CashBookInfo
     * @var \Pggns\MidocoApi\Order\StructType\CashBookInfo|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CashBookInfo $CashBookInfo = null;
    /**
     * The checkUserUnitAssignment
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $checkUserUnitAssignment = null;
    /**
     * Constructor method for SaveCashbookRequest
     * @uses SaveCashbookRequest::setCashBookInfo()
     * @uses SaveCashbookRequest::setCheckUserUnitAssignment()
     * @param \Pggns\MidocoApi\Order\StructType\CashBookInfo $cashBookInfo
     * @param bool $checkUserUnitAssignment
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\CashBookInfo $cashBookInfo = null, ?bool $checkUserUnitAssignment = false)
    {
        $this
            ->setCashBookInfo($cashBookInfo)
            ->setCheckUserUnitAssignment($checkUserUnitAssignment);
    }
    /**
     * Get CashBookInfo value
     * @return \Pggns\MidocoApi\Order\StructType\CashBookInfo|null
     */
    public function getCashBookInfo(): ?\Pggns\MidocoApi\Order\StructType\CashBookInfo
    {
        return $this->CashBookInfo;
    }
    /**
     * Set CashBookInfo value
     * @param \Pggns\MidocoApi\Order\StructType\CashBookInfo $cashBookInfo
     * @return \Pggns\MidocoApi\Order\StructType\SaveCashbookRequest
     */
    public function setCashBookInfo(?\Pggns\MidocoApi\Order\StructType\CashBookInfo $cashBookInfo = null): self
    {
        $this->CashBookInfo = $cashBookInfo;
        
        return $this;
    }
    /**
     * Get checkUserUnitAssignment value
     * @return bool|null
     */
    public function getCheckUserUnitAssignment(): ?bool
    {
        return $this->checkUserUnitAssignment;
    }
    /**
     * Set checkUserUnitAssignment value
     * @param bool $checkUserUnitAssignment
     * @return \Pggns\MidocoApi\Order\StructType\SaveCashbookRequest
     */
    public function setCheckUserUnitAssignment(?bool $checkUserUnitAssignment = false): self
    {
        // validation for constraint: boolean
        if (!is_null($checkUserUnitAssignment) && !is_bool($checkUserUnitAssignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checkUserUnitAssignment, true), gettype($checkUserUnitAssignment)), __LINE__);
        }
        $this->checkUserUnitAssignment = $checkUserUnitAssignment;
        
        return $this;
    }
}
