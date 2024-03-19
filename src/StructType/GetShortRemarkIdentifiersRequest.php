<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShortRemarkIdentifiersRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetShortRemarkIdentifiersRequest extends AbstractStructBase
{
    /**
     * The RemarkIdentifiersSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: RemarkIdentifiersSearchCriteria
     * @var \Pggns\MidocoApi\Order\StructType\RemarkIdentifiersSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\RemarkIdentifiersSearchCriteria $RemarkIdentifiersSearchCriteria = null;
    /**
     * Constructor method for GetShortRemarkIdentifiersRequest
     * @uses GetShortRemarkIdentifiersRequest::setRemarkIdentifiersSearchCriteria()
     * @param \Pggns\MidocoApi\Order\StructType\RemarkIdentifiersSearchCriteria $remarkIdentifiersSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\RemarkIdentifiersSearchCriteria $remarkIdentifiersSearchCriteria = null)
    {
        $this
            ->setRemarkIdentifiersSearchCriteria($remarkIdentifiersSearchCriteria);
    }
    /**
     * Get RemarkIdentifiersSearchCriteria value
     * @return \Pggns\MidocoApi\Order\StructType\RemarkIdentifiersSearchCriteria|null
     */
    public function getRemarkIdentifiersSearchCriteria(): ?\Pggns\MidocoApi\Order\StructType\RemarkIdentifiersSearchCriteria
    {
        return $this->RemarkIdentifiersSearchCriteria;
    }
    /**
     * Set RemarkIdentifiersSearchCriteria value
     * @param \Pggns\MidocoApi\Order\StructType\RemarkIdentifiersSearchCriteria $remarkIdentifiersSearchCriteria
     * @return \Pggns\MidocoApi\Order\StructType\GetShortRemarkIdentifiersRequest
     */
    public function setRemarkIdentifiersSearchCriteria(?\Pggns\MidocoApi\Order\StructType\RemarkIdentifiersSearchCriteria $remarkIdentifiersSearchCriteria = null): self
    {
        $this->RemarkIdentifiersSearchCriteria = $remarkIdentifiersSearchCriteria;
        
        return $this;
    }
}
