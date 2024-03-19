<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnfinishedTaskTypeStatisticsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UnfinishedTaskTypeStatisticsRequest extends AbstractStructBase
{
    /**
     * The UnfinishedTaskTypeStatisticsDetails
     * Meta information extracted from the WSDL
     * - ref: UnfinishedTaskTypeStatisticsDetails
     * @var \Pggns\MidocoApi\Order\StructType\UnfinishedTaskTypeStatisticsDetails|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\UnfinishedTaskTypeStatisticsDetails $UnfinishedTaskTypeStatisticsDetails = null;
    /**
     * Constructor method for UnfinishedTaskTypeStatisticsRequest
     * @uses UnfinishedTaskTypeStatisticsRequest::setUnfinishedTaskTypeStatisticsDetails()
     * @param \Pggns\MidocoApi\Order\StructType\UnfinishedTaskTypeStatisticsDetails $unfinishedTaskTypeStatisticsDetails
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\UnfinishedTaskTypeStatisticsDetails $unfinishedTaskTypeStatisticsDetails = null)
    {
        $this
            ->setUnfinishedTaskTypeStatisticsDetails($unfinishedTaskTypeStatisticsDetails);
    }
    /**
     * Get UnfinishedTaskTypeStatisticsDetails value
     * @return \Pggns\MidocoApi\Order\StructType\UnfinishedTaskTypeStatisticsDetails|null
     */
    public function getUnfinishedTaskTypeStatisticsDetails(): ?\Pggns\MidocoApi\Order\StructType\UnfinishedTaskTypeStatisticsDetails
    {
        return $this->UnfinishedTaskTypeStatisticsDetails;
    }
    /**
     * Set UnfinishedTaskTypeStatisticsDetails value
     * @param \Pggns\MidocoApi\Order\StructType\UnfinishedTaskTypeStatisticsDetails $unfinishedTaskTypeStatisticsDetails
     * @return \Pggns\MidocoApi\Order\StructType\UnfinishedTaskTypeStatisticsRequest
     */
    public function setUnfinishedTaskTypeStatisticsDetails(?\Pggns\MidocoApi\Order\StructType\UnfinishedTaskTypeStatisticsDetails $unfinishedTaskTypeStatisticsDetails = null): self
    {
        $this->UnfinishedTaskTypeStatisticsDetails = $unfinishedTaskTypeStatisticsDetails;
        
        return $this;
    }
}
