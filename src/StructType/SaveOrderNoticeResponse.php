<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderNoticeResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveOrderNotice --- saves a notice for an order
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveOrderNoticeResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderNotice
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderNotice
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderNotice $MidocoOrderNotice = null;
    /**
     * The afterFinishAction
     * Meta information extracted from the WSDL
     * - documentation: action in midoco gui - for internal use only
     * @var string|null
     */
    protected ?string $afterFinishAction = null;
    /**
     * Constructor method for SaveOrderNoticeResponse
     * @uses SaveOrderNoticeResponse::setMidocoOrderNotice()
     * @uses SaveOrderNoticeResponse::setAfterFinishAction()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice $midocoOrderNotice
     * @param string $afterFinishAction
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrderNotice $midocoOrderNotice = null, ?string $afterFinishAction = null)
    {
        $this
            ->setMidocoOrderNotice($midocoOrderNotice)
            ->setAfterFinishAction($afterFinishAction);
    }
    /**
     * Get MidocoOrderNotice value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice|null
     */
    public function getMidocoOrderNotice(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderNotice
    {
        return $this->MidocoOrderNotice;
    }
    /**
     * Set MidocoOrderNotice value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice $midocoOrderNotice
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderNoticeResponse
     */
    public function setMidocoOrderNotice(?\Pggns\MidocoApi\Order\StructType\MidocoOrderNotice $midocoOrderNotice = null): self
    {
        $this->MidocoOrderNotice = $midocoOrderNotice;
        
        return $this;
    }
    /**
     * Get afterFinishAction value
     * @return string|null
     */
    public function getAfterFinishAction(): ?string
    {
        return $this->afterFinishAction;
    }
    /**
     * Set afterFinishAction value
     * @param string $afterFinishAction
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderNoticeResponse
     */
    public function setAfterFinishAction(?string $afterFinishAction = null): self
    {
        // validation for constraint: string
        if (!is_null($afterFinishAction) && !is_string($afterFinishAction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($afterFinishAction, true), gettype($afterFinishAction)), __LINE__);
        }
        $this->afterFinishAction = $afterFinishAction;
        
        return $this;
    }
}
