<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoSystemOrgunitClosingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoSystemOrgunitClosingRequest extends AbstractStructBase
{
    /**
     * The MidocoSystemOrgunitClosing
     * Meta information extracted from the WSDL
     * - ref: MidocoSystemOrgunitClosing
     * @var \Pggns\MidocoApi\Order\StructType\OrgunitClosingDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\OrgunitClosingDTO $MidocoSystemOrgunitClosing = null;
    /**
     * Constructor method for SaveMidocoSystemOrgunitClosingRequest
     * @uses SaveMidocoSystemOrgunitClosingRequest::setMidocoSystemOrgunitClosing()
     * @param \Pggns\MidocoApi\Order\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing = null)
    {
        $this
            ->setMidocoSystemOrgunitClosing($midocoSystemOrgunitClosing);
    }
    /**
     * Get MidocoSystemOrgunitClosing value
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitClosingDTO|null
     */
    public function getMidocoSystemOrgunitClosing(): ?\Pggns\MidocoApi\Order\StructType\OrgunitClosingDTO
    {
        return $this->MidocoSystemOrgunitClosing;
    }
    /**
     * Set MidocoSystemOrgunitClosing value
     * @param \Pggns\MidocoApi\Order\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing
     * @return \Pggns\MidocoApi\Order\StructType\SaveMidocoSystemOrgunitClosingRequest
     */
    public function setMidocoSystemOrgunitClosing(?\Pggns\MidocoApi\Order\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing = null): self
    {
        $this->MidocoSystemOrgunitClosing = $midocoSystemOrgunitClosing;
        
        return $this;
    }
}
