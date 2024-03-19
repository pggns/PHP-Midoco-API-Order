<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessMyFlyRightNotificationRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ProcessMyFlyRightNotificationRequest extends AbstractStructBase
{
    /**
     * The MyFlyRightNotification
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MyFlyRightNotification
     * @var \Pggns\MidocoApi\Order\StructType\MyFlyRightNotification|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MyFlyRightNotification $MyFlyRightNotification = null;
    /**
     * Constructor method for ProcessMyFlyRightNotificationRequest
     * @uses ProcessMyFlyRightNotificationRequest::setMyFlyRightNotification()
     * @param \Pggns\MidocoApi\Order\StructType\MyFlyRightNotification $myFlyRightNotification
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MyFlyRightNotification $myFlyRightNotification = null)
    {
        $this
            ->setMyFlyRightNotification($myFlyRightNotification);
    }
    /**
     * Get MyFlyRightNotification value
     * @return \Pggns\MidocoApi\Order\StructType\MyFlyRightNotification|null
     */
    public function getMyFlyRightNotification(): ?\Pggns\MidocoApi\Order\StructType\MyFlyRightNotification
    {
        return $this->MyFlyRightNotification;
    }
    /**
     * Set MyFlyRightNotification value
     * @param \Pggns\MidocoApi\Order\StructType\MyFlyRightNotification $myFlyRightNotification
     * @return \Pggns\MidocoApi\Order\StructType\ProcessMyFlyRightNotificationRequest
     */
    public function setMyFlyRightNotification(?\Pggns\MidocoApi\Order\StructType\MyFlyRightNotification $myFlyRightNotification = null): self
    {
        $this->MyFlyRightNotification = $myFlyRightNotification;
        
        return $this;
    }
}
