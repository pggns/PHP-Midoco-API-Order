<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoInset StructType
 * @subpackage Structs
 */
class MidocoInset extends AbstractStructBase
{
    /**
     * The fileName
     * @var string|null
     */
    protected ?string $fileName = null;
    /**
     * The fileContent
     * @var string|null
     */
    protected ?string $fileContent = null;
    /**
     * The saveAsTravelPlan
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $saveAsTravelPlan = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * Constructor method for MidocoInset
     * @uses MidocoInset::setFileName()
     * @uses MidocoInset::setFileContent()
     * @uses MidocoInset::setSaveAsTravelPlan()
     * @uses MidocoInset::setRepositoryId()
     * @param string $fileName
     * @param string $fileContent
     * @param bool $saveAsTravelPlan
     * @param int $repositoryId
     */
    public function __construct(?string $fileName = null, ?string $fileContent = null, ?bool $saveAsTravelPlan = false, ?int $repositoryId = null)
    {
        $this
            ->setFileName($fileName)
            ->setFileContent($fileContent)
            ->setSaveAsTravelPlan($saveAsTravelPlan)
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInset
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
     * Get fileContent value
     * @return string|null
     */
    public function getFileContent(): ?string
    {
        return $this->fileContent;
    }
    /**
     * Set fileContent value
     * @param string $fileContent
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInset
     */
    public function setFileContent(?string $fileContent = null): self
    {
        // validation for constraint: string
        if (!is_null($fileContent) && !is_string($fileContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileContent, true), gettype($fileContent)), __LINE__);
        }
        $this->fileContent = $fileContent;
        
        return $this;
    }
    /**
     * Get saveAsTravelPlan value
     * @return bool|null
     */
    public function getSaveAsTravelPlan(): ?bool
    {
        return $this->saveAsTravelPlan;
    }
    /**
     * Set saveAsTravelPlan value
     * @param bool $saveAsTravelPlan
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInset
     */
    public function setSaveAsTravelPlan(?bool $saveAsTravelPlan = false): self
    {
        // validation for constraint: boolean
        if (!is_null($saveAsTravelPlan) && !is_bool($saveAsTravelPlan)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($saveAsTravelPlan, true), gettype($saveAsTravelPlan)), __LINE__);
        }
        $this->saveAsTravelPlan = $saveAsTravelPlan;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInset
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
