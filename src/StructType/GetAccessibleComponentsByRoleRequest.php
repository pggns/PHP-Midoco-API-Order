<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccessibleComponentsByRoleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAccessibleComponentsByRoleRequest extends AbstractStructBase
{
    /**
     * The MidocoAccessibleComponentByRole
     * Meta information extracted from the WSDL
     * - ref: MidocoAccessibleComponentByRole
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType $MidocoAccessibleComponentByRole = null;
    /**
     * Constructor method for GetAccessibleComponentsByRoleRequest
     * @uses GetAccessibleComponentsByRoleRequest::setMidocoAccessibleComponentByRole()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole = null)
    {
        $this
            ->setMidocoAccessibleComponentByRole($midocoAccessibleComponentByRole);
    }
    /**
     * Get MidocoAccessibleComponentByRole value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType|null
     */
    public function getMidocoAccessibleComponentByRole(): ?\Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType
    {
        return $this->MidocoAccessibleComponentByRole;
    }
    /**
     * Set MidocoAccessibleComponentByRole value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole
     * @return \Pggns\MidocoApi\Order\StructType\GetAccessibleComponentsByRoleRequest
     */
    public function setMidocoAccessibleComponentByRole(?\Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole = null): self
    {
        $this->MidocoAccessibleComponentByRole = $midocoAccessibleComponentByRole;
        
        return $this;
    }
}
