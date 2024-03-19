<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentTypeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DocumentTypeDTO extends AbstractStructBase
{
    /**
     * The extension
     * @var string|null
     */
    protected ?string $extension = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * Constructor method for DocumentTypeDTO
     * @uses DocumentTypeDTO::setExtension()
     * @uses DocumentTypeDTO::setTypeId()
     * @param string $extension
     * @param string $typeId
     */
    public function __construct(?string $extension = null, ?string $typeId = null)
    {
        $this
            ->setExtension($extension)
            ->setTypeId($typeId);
    }
    /**
     * Get extension value
     * @return string|null
     */
    public function getExtension(): ?string
    {
        return $this->extension;
    }
    /**
     * Set extension value
     * @param string $extension
     * @return \Pggns\MidocoApi\Order\StructType\DocumentTypeDTO
     */
    public function setExtension(?string $extension = null): self
    {
        // validation for constraint: string
        if (!is_null($extension) && !is_string($extension)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extension, true), gettype($extension)), __LINE__);
        }
        $this->extension = $extension;
        
        return $this;
    }
    /**
     * Get typeId value
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \Pggns\MidocoApi\Order\StructType\DocumentTypeDTO
     */
    public function setTypeId(?string $typeId = null): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
}
