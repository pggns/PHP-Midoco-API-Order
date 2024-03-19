<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoKaeraPackageExt StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoKaeraPackageExt extends AbstractStructBase
{
    /**
     * The MidocoPackageInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoPackageInfo
     * @var \Pggns\MidocoApi\Order\StructType\PackageitemDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\PackageitemDTO $MidocoPackageInfo = null;
    /**
     * The success
     * @var bool|null
     */
    protected ?bool $success = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for MidocoKaeraPackageExt
     * @uses MidocoKaeraPackageExt::setMidocoPackageInfo()
     * @uses MidocoKaeraPackageExt::setSuccess()
     * @uses MidocoKaeraPackageExt::setDescription()
     * @param \Pggns\MidocoApi\Order\StructType\PackageitemDTO $midocoPackageInfo
     * @param bool $success
     * @param string $description
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\PackageitemDTO $midocoPackageInfo = null, ?bool $success = null, ?string $description = null)
    {
        $this
            ->setMidocoPackageInfo($midocoPackageInfo)
            ->setSuccess($success)
            ->setDescription($description);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraPackageExt
     */
    public function setMidocoPackageInfo(?\Pggns\MidocoApi\Order\StructType\PackageitemDTO $midocoPackageInfo = null): self
    {
        $this->MidocoPackageInfo = $midocoPackageInfo;
        
        return $this;
    }
    /**
     * Get success value
     * @return bool|null
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }
    /**
     * Set success value
     * @param bool $success
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraPackageExt
     */
    public function setSuccess(?bool $success = null): self
    {
        // validation for constraint: boolean
        if (!is_null($success) && !is_bool($success)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($success, true), gettype($success)), __LINE__);
        }
        $this->success = $success;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraPackageExt
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
}
