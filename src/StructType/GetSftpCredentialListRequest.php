<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSftpCredentialListRequest StructType
 * @subpackage Structs
 */
class GetSftpCredentialListRequest extends AbstractStructBase
{
    /**
     * The sftpCredentialName
     * @var string|null
     */
    protected ?string $sftpCredentialName = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for GetSftpCredentialListRequest
     * @uses GetSftpCredentialListRequest::setSftpCredentialName()
     * @uses GetSftpCredentialListRequest::setUnitName()
     * @param string $sftpCredentialName
     * @param string $unitName
     */
    public function __construct(?string $sftpCredentialName = null, ?string $unitName = null)
    {
        $this
            ->setSftpCredentialName($sftpCredentialName)
            ->setUnitName($unitName);
    }
    /**
     * Get sftpCredentialName value
     * @return string|null
     */
    public function getSftpCredentialName(): ?string
    {
        return $this->sftpCredentialName;
    }
    /**
     * Set sftpCredentialName value
     * @param string $sftpCredentialName
     * @return \Pggns\MidocoApi\Order\StructType\GetSftpCredentialListRequest
     */
    public function setSftpCredentialName(?string $sftpCredentialName = null): self
    {
        // validation for constraint: string
        if (!is_null($sftpCredentialName) && !is_string($sftpCredentialName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sftpCredentialName, true), gettype($sftpCredentialName)), __LINE__);
        }
        $this->sftpCredentialName = $sftpCredentialName;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\GetSftpCredentialListRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
