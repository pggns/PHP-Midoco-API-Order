<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessCompensation2GoNotificationRequest StructType
 * @subpackage Structs
 */
class ProcessCompensation2GoNotificationRequest extends AbstractStructBase
{
    /**
     * The Compensation2GoNotification
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Compensation2GoNotification
     * @var \Pggns\MidocoApi\Order\StructType\Compensation2GoNotificationType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Compensation2GoNotificationType $Compensation2GoNotification = null;
    /**
     * Constructor method for ProcessCompensation2GoNotificationRequest
     * @uses ProcessCompensation2GoNotificationRequest::setCompensation2GoNotification()
     * @param \Pggns\MidocoApi\Order\StructType\Compensation2GoNotificationType $compensation2GoNotification
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\Compensation2GoNotificationType $compensation2GoNotification = null)
    {
        $this
            ->setCompensation2GoNotification($compensation2GoNotification);
    }
    /**
     * Get Compensation2GoNotification value
     * @return \Pggns\MidocoApi\Order\StructType\Compensation2GoNotificationType|null
     */
    public function getCompensation2GoNotification(): ?\Pggns\MidocoApi\Order\StructType\Compensation2GoNotificationType
    {
        return $this->Compensation2GoNotification;
    }
    /**
     * Set Compensation2GoNotification value
     * @param \Pggns\MidocoApi\Order\StructType\Compensation2GoNotificationType $compensation2GoNotification
     * @return \Pggns\MidocoApi\Order\StructType\ProcessCompensation2GoNotificationRequest
     */
    public function setCompensation2GoNotification(?\Pggns\MidocoApi\Order\StructType\Compensation2GoNotificationType $compensation2GoNotification = null): self
    {
        $this->Compensation2GoNotification = $compensation2GoNotification;
        
        return $this;
    }
}
