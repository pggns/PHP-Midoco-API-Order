<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAdditionalPrintDocument StructType
 * @subpackage Structs
 */
class MidocoAdditionalPrintDocument extends AbstractStructBase
{
    /**
     * The name
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $name;
    /**
     * The data
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $data;
    /**
     * The mimeType
     * Meta information extracted from the WSDL
     * - default: application/pdf
     * @var string|null
     */
    protected ?string $mimeType = null;
    /**
     * Constructor method for MidocoAdditionalPrintDocument
     * @uses MidocoAdditionalPrintDocument::setName()
     * @uses MidocoAdditionalPrintDocument::setData()
     * @uses MidocoAdditionalPrintDocument::setMimeType()
     * @param string $name
     * @param string $data
     * @param string $mimeType
     */
    public function __construct(string $name, string $data, ?string $mimeType = 'application/pdf')
    {
        $this
            ->setName($name)
            ->setData($data)
            ->setMimeType($mimeType);
    }
    /**
     * Get name value
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdditionalPrintDocument
     */
    public function setName(string $name): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get data value
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param string $data
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdditionalPrintDocument
     */
    public function setData(string $data): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->data = $data;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdditionalPrintDocument
     */
    public function setMimeType(?string $mimeType = 'application/pdf'): self
    {
        // validation for constraint: string
        if (!is_null($mimeType) && !is_string($mimeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mimeType, true), gettype($mimeType)), __LINE__);
        }
        $this->mimeType = $mimeType;
        
        return $this;
    }
}
