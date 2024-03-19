<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FileType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FileType extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * The filename
     * @var string|null
     */
    protected ?string $filename = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The mimeType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mimeType = null;
    /**
     * The bytes
     * @var string|null
     */
    protected ?string $bytes = null;
    /**
     * Constructor method for FileType
     * @uses FileType::set_()
     * @uses FileType::setFilename()
     * @uses FileType::setName()
     * @uses FileType::setMimeType()
     * @uses FileType::setBytes()
     * @param string $_
     * @param string $filename
     * @param string $name
     * @param string $mimeType
     * @param string $bytes
     */
    public function __construct(?string $_ = null, ?string $filename = null, ?string $name = null, ?string $mimeType = null, ?string $bytes = null)
    {
        $this
            ->set_($_)
            ->setFilename($filename)
            ->setName($name)
            ->setMimeType($mimeType)
            ->setBytes($bytes);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Pggns\MidocoApi\Order\StructType\FileType
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get filename value
     * @return string|null
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }
    /**
     * Set filename value
     * @param string $filename
     * @return \Pggns\MidocoApi\Order\StructType\FileType
     */
    public function setFilename(?string $filename = null): self
    {
        // validation for constraint: string
        if (!is_null($filename) && !is_string($filename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filename, true), gettype($filename)), __LINE__);
        }
        $this->filename = $filename;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\FileType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get mimeType value
     * @return string|null
     */
    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }
    /**
     * Set mimeType value
     * @param string $mimeType
     * @return \Pggns\MidocoApi\Order\StructType\FileType
     */
    public function setMimeType(?string $mimeType = null): self
    {
        // validation for constraint: string
        if (!is_null($mimeType) && !is_string($mimeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mimeType, true), gettype($mimeType)), __LINE__);
        }
        $this->mimeType = $mimeType;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\FileType
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
}
