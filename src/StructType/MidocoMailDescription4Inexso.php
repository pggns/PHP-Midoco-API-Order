<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMailDescription4Inexso StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoMailDescription4Inexso extends AbstractStructBase
{
    /**
     * The fileName
     * @var string|null
     */
    protected ?string $fileName = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * Constructor method for MidocoMailDescription4Inexso
     * @uses MidocoMailDescription4Inexso::setFileName()
     * @uses MidocoMailDescription4Inexso::setRepositoryId()
     * @param string $fileName
     * @param int $repositoryId
     */
    public function __construct(?string $fileName = null, ?int $repositoryId = null)
    {
        $this
            ->setFileName($fileName)
            ->setRepositoryId($repositoryId);
    }
    /**
     * Get fileName value
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }
    /**
     * Set fileName value
     * @param string $fileName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso
     */
    public function setFileName(?string $fileName = null): self
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        $this->fileName = $fileName;
        
        return $this;
    }
    /**
     * Get repositoryId value
     * @return int|null
     */
    public function getRepositoryId(): ?int
    {
        return $this->repositoryId;
    }
    /**
     * Set repositoryId value
     * @param int $repositoryId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso
     */
    public function setRepositoryId(?int $repositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($repositoryId) && !(is_int($repositoryId) || ctype_digit($repositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repositoryId, true), gettype($repositoryId)), __LINE__);
        }
        $this->repositoryId = $repositoryId;
        
        return $this;
    }
}
