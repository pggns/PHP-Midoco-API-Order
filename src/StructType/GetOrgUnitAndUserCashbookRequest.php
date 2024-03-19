<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgUnitAndUserCashbookRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrgUnitAndUserCashbookRequest extends AbstractStructBase
{
    /**
     * The checkSignature
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $checkSignature = null;
    /**
     * Constructor method for GetOrgUnitAndUserCashbookRequest
     * @uses GetOrgUnitAndUserCashbookRequest::setCheckSignature()
     * @param bool $checkSignature
     */
    public function __construct(?bool $checkSignature = null)
    {
        $this
            ->setCheckSignature($checkSignature);
    }
    /**
     * Get checkSignature value
     * @return bool|null
     */
    public function getCheckSignature(): ?bool
    {
        return $this->checkSignature;
    }
    /**
     * Set checkSignature value
     * @param bool $checkSignature
     * @return \Pggns\MidocoApi\Order\StructType\GetOrgUnitAndUserCashbookRequest
     */
    public function setCheckSignature(?bool $checkSignature = null): self
    {
        // validation for constraint: boolean
        if (!is_null($checkSignature) && !is_bool($checkSignature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checkSignature, true), gettype($checkSignature)), __LINE__);
        }
        $this->checkSignature = $checkSignature;
        
        return $this;
    }
}
