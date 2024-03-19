<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchOrgUnitUserSpecifiedCashbookResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchOrgUnitUserSpecifiedCashbookResponse extends AbstractStructBase
{
    /**
     * The CashBookInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CashBookInfo
     * @var \Pggns\MidocoApi\Order\StructType\CashBookInfo|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CashBookInfo $CashBookInfo = null;
    /**
     * The UnitCashBookInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: UnitCashBookInfoList
     * @var \Pggns\MidocoApi\Order\StructType\UnitCashBookInfoList|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\UnitCashBookInfoList $UnitCashBookInfoList = null;
    /**
     * Constructor method for SearchOrgUnitUserSpecifiedCashbookResponse
     * @uses SearchOrgUnitUserSpecifiedCashbookResponse::setCashBookInfo()
     * @uses SearchOrgUnitUserSpecifiedCashbookResponse::setUnitCashBookInfoList()
     * @param \Pggns\MidocoApi\Order\StructType\CashBookInfo $cashBookInfo
     * @param \Pggns\MidocoApi\Order\StructType\UnitCashBookInfoList $unitCashBookInfoList
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\CashBookInfo $cashBookInfo = null, ?\Pggns\MidocoApi\Order\StructType\UnitCashBookInfoList $unitCashBookInfoList = null)
    {
        $this
            ->setCashBookInfo($cashBookInfo)
            ->setUnitCashBookInfoList($unitCashBookInfoList);
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrgUnitUserSpecifiedCashbookResponse
     */
    public function setCashBookInfo(?\Pggns\MidocoApi\Order\StructType\CashBookInfo $cashBookInfo = null): self
    {
        $this->CashBookInfo = $cashBookInfo;
        
        return $this;
    }
    /**
     * Get UnitCashBookInfoList value
     * @return \Pggns\MidocoApi\Order\StructType\UnitCashBookInfoList|null
     */
    public function getUnitCashBookInfoList(): ?\Pggns\MidocoApi\Order\StructType\UnitCashBookInfoList
    {
        return $this->UnitCashBookInfoList;
    }
    /**
     * Set UnitCashBookInfoList value
     * @param \Pggns\MidocoApi\Order\StructType\UnitCashBookInfoList $unitCashBookInfoList
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrgUnitUserSpecifiedCashbookResponse
     */
    public function setUnitCashBookInfoList(?\Pggns\MidocoApi\Order\StructType\UnitCashBookInfoList $unitCashBookInfoList = null): self
    {
        $this->UnitCashBookInfoList = $unitCashBookInfoList;
        
        return $this;
    }
}
