<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCustomerDataList StructType
 * @subpackage Structs
 */
class MidocoCustomerDataList extends AbstractStructBase
{
    /**
     * The MidocoCustomerData
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerData
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCustomerData|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoCustomerData $MidocoCustomerData = null;
    /**
     * Constructor method for MidocoCustomerDataList
     * @uses MidocoCustomerDataList::setMidocoCustomerData()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCustomerData $midocoCustomerData
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoCustomerData $midocoCustomerData = null)
    {
        $this
            ->setMidocoCustomerData($midocoCustomerData);
    }
    /**
     * Get MidocoCustomerData value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerData|null
     */
    public function getMidocoCustomerData(): ?\Pggns\MidocoApi\Order\StructType\MidocoCustomerData
    {
        return $this->MidocoCustomerData;
    }
    /**
     * Set MidocoCustomerData value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCustomerData $midocoCustomerData
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerDataList
     */
    public function setMidocoCustomerData(?\Pggns\MidocoApi\Order\StructType\MidocoCustomerData $midocoCustomerData = null): self
    {
        $this->MidocoCustomerData = $midocoCustomerData;
        
        return $this;
    }
}
