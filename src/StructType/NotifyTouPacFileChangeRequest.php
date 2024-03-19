<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotifyTouPacFileChangeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class NotifyTouPacFileChangeRequest extends AbstractStructBase
{
    /**
     * The TouPacFileChangeNotification
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\TouPacFileChangeNotification|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\TouPacFileChangeNotification $TouPacFileChangeNotification = null;
    /**
     * Constructor method for NotifyTouPacFileChangeRequest
     * @uses NotifyTouPacFileChangeRequest::setTouPacFileChangeNotification()
     * @param \Pggns\MidocoApi\Order\StructType\TouPacFileChangeNotification $touPacFileChangeNotification
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\TouPacFileChangeNotification $touPacFileChangeNotification = null)
    {
        $this
            ->setTouPacFileChangeNotification($touPacFileChangeNotification);
    }
    /**
     * Get TouPacFileChangeNotification value
     * @return \Pggns\MidocoApi\Order\StructType\TouPacFileChangeNotification|null
     */
    public function getTouPacFileChangeNotification(): ?\Pggns\MidocoApi\Order\StructType\TouPacFileChangeNotification
    {
        return $this->TouPacFileChangeNotification;
    }
    /**
     * Set TouPacFileChangeNotification value
     * @param \Pggns\MidocoApi\Order\StructType\TouPacFileChangeNotification $touPacFileChangeNotification
     * @return \Pggns\MidocoApi\Order\StructType\NotifyTouPacFileChangeRequest
     */
    public function setTouPacFileChangeNotification(?\Pggns\MidocoApi\Order\StructType\TouPacFileChangeNotification $touPacFileChangeNotification = null): self
    {
        $this->TouPacFileChangeNotification = $touPacFileChangeNotification;
        
        return $this;
    }
}
