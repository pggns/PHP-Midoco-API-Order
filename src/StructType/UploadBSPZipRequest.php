<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadBSPZipRequest StructType
 * @subpackage Structs
 */
class UploadBSPZipRequest extends AbstractStructBase
{
    /**
     * The bytes
     * @var string|null
     */
    protected ?string $bytes = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The bspType
     * @var string|null
     */
    protected ?string $bspType = null;
    /**
     * Constructor method for UploadBSPZipRequest
     * @uses UploadBSPZipRequest::setBytes()
     * @uses UploadBSPZipRequest::setPassword()
     * @uses UploadBSPZipRequest::setBspType()
     * @param string $bytes
     * @param string $password
     * @param string $bspType
     */
    public function __construct(?string $bytes = null, ?string $password = null, ?string $bspType = null)
    {
        $this
            ->setBytes($bytes)
            ->setPassword($password)
            ->setBspType($bspType);
    }
    /**
     * Get bytes value
     * @return string|null
     */
    public function getBytes(): ?string
    {
        return $this->bytes;
    }
    /**
     * Set bytes value
     * @param string $bytes
     * @return \Pggns\MidocoApi\Order\StructType\UploadBSPZipRequest
     */
    public function setBytes(?string $bytes = null): self
    {
        // validation for constraint: string
        if (!is_null($bytes) && !is_string($bytes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bytes, true), gettype($bytes)), __LINE__);
        }
        $this->bytes = $bytes;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Pggns\MidocoApi\Order\StructType\UploadBSPZipRequest
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get bspType value
     * @return string|null
     */
    public function getBspType(): ?string
    {
        return $this->bspType;
    }
    /**
     * Set bspType value
     * @param string $bspType
     * @return \Pggns\MidocoApi\Order\StructType\UploadBSPZipRequest
     */
    public function setBspType(?string $bspType = null): self
    {
        // validation for constraint: string
        if (!is_null($bspType) && !is_string($bspType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bspType, true), gettype($bspType)), __LINE__);
        }
        $this->bspType = $bspType;
        
        return $this;
    }
}
