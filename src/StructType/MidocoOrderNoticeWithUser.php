<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderNoticeWithUser StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoOrderNoticeWithUser extends OrderNoticeDTO
{
    /**
     * The MidocoUser
     * Meta information extracted from the WSDL
     * - ref: system:MidocoUser
     * @var \Pggns\MidocoApi\Order\StructType\MidocoUser|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoUser $MidocoUser = null;
    /**
     * Constructor method for MidocoOrderNoticeWithUser
     * @uses MidocoOrderNoticeWithUser::setMidocoUser()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoUser $midocoUser
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoUser $midocoUser = null)
    {
        $this
            ->setMidocoUser($midocoUser);
    }
    /**
     * Get MidocoUser value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUser|null
     */
    public function getMidocoUser(): ?\Pggns\MidocoApi\Order\StructType\MidocoUser
    {
        return $this->MidocoUser;
    }
    /**
     * Set MidocoUser value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoUser $midocoUser
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderNoticeWithUser
     */
    public function setMidocoUser(?\Pggns\MidocoApi\Order\StructType\MidocoUser $midocoUser = null): self
    {
        $this->MidocoUser = $midocoUser;
        
        return $this;
    }
}
