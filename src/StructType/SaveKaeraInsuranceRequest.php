<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveKaeraInsuranceRequest StructType
 * @subpackage Structs
 */
class SaveKaeraInsuranceRequest extends AbstractStructBase
{
    /**
     * The MidocoPackageInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoPackageInfo
     * @var \Pggns\MidocoApi\Order\StructType\PackageitemDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\PackageitemDTO $MidocoPackageInfo = null;
    /**
     * The toCancel
     * @var bool|null
     */
    protected ?bool $toCancel = null;
    /**
     * Constructor method for SaveKaeraInsuranceRequest
     * @uses SaveKaeraInsuranceRequest::setMidocoPackageInfo()
     * @uses SaveKaeraInsuranceRequest::setToCancel()
     * @param \Pggns\MidocoApi\Order\StructType\PackageitemDTO $midocoPackageInfo
     * @param bool $toCancel
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\PackageitemDTO $midocoPackageInfo = null, ?bool $toCancel = null)
    {
        $this
            ->setMidocoPackageInfo($midocoPackageInfo)
            ->setToCancel($toCancel);
    }
    /**
     * Get MidocoPackageInfo value
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO|null
     */
    public function getMidocoPackageInfo(): ?\Pggns\MidocoApi\Order\StructType\PackageitemDTO
    {
        return $this->MidocoPackageInfo;
    }
    /**
     * Set MidocoPackageInfo value
     * @param \Pggns\MidocoApi\Order\StructType\PackageitemDTO $midocoPackageInfo
     * @return \Pggns\MidocoApi\Order\StructType\SaveKaeraInsuranceRequest
     */
    public function setMidocoPackageInfo(?\Pggns\MidocoApi\Order\StructType\PackageitemDTO $midocoPackageInfo = null): self
    {
        $this->MidocoPackageInfo = $midocoPackageInfo;
        
        return $this;
    }
    /**
     * Get toCancel value
     * @return bool|null
     */
    public function getToCancel(): ?bool
    {
        return $this->toCancel;
    }
    /**
     * Set toCancel value
     * @param bool $toCancel
     * @return \Pggns\MidocoApi\Order\StructType\SaveKaeraInsuranceRequest
     */
    public function setToCancel(?bool $toCancel = null): self
    {
        // validation for constraint: boolean
        if (!is_null($toCancel) && !is_bool($toCancel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($toCancel, true), gettype($toCancel)), __LINE__);
        }
        $this->toCancel = $toCancel;
        
        return $this;
    }
}
