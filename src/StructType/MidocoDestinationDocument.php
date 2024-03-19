<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDestinationDocument StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoDestinationDocument extends DestinationDocumentDTO
{
    /**
     * The content
     * @var string|null
     */
    protected ?string $content = null;
    /**
     * Constructor method for MidocoDestinationDocument
     * @uses MidocoDestinationDocument::setContent()
     * @param string $content
     */
    public function __construct(?string $content = null)
    {
        $this
            ->setContent($content);
    }
    /**
     * Get content value
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }
    /**
     * Set content value
     * @param string $content
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDestinationDocument
     */
    public function setContent(?string $content = null): self
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content, true), gettype($content)), __LINE__);
        }
        $this->content = $content;
        
        return $this;
    }
}
