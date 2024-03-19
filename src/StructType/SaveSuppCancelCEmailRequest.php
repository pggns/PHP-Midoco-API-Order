<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSuppCancelCEmailRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSuppCancelCEmailRequest extends AbstractStructBase
{
    /**
     * The MidocoSuppCancelCEmail
     * Meta information extracted from the WSDL
     * - ref: MidocoSuppCancelCEmail
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCEmail|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCEmail $MidocoSuppCancelCEmail = null;
    /**
     * Constructor method for SaveSuppCancelCEmailRequest
     * @uses SaveSuppCancelCEmailRequest::setMidocoSuppCancelCEmail()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCEmail $midocoSuppCancelCEmail
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCEmail $midocoSuppCancelCEmail = null)
    {
        $this
            ->setMidocoSuppCancelCEmail($midocoSuppCancelCEmail);
    }
    /**
     * Get MidocoSuppCancelCEmail value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCEmail|null
     */
    public function getMidocoSuppCancelCEmail(): ?\Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCEmail
    {
        return $this->MidocoSuppCancelCEmail;
    }
    /**
     * Set MidocoSuppCancelCEmail value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCEmail $midocoSuppCancelCEmail
     * @return \Pggns\MidocoApi\Order\StructType\SaveSuppCancelCEmailRequest
     */
    public function setMidocoSuppCancelCEmail(?\Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCEmail $midocoSuppCancelCEmail = null): self
    {
        $this->MidocoSuppCancelCEmail = $midocoSuppCancelCEmail;
        
        return $this;
    }
}
