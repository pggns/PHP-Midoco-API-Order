<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDocumentBinary StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoDocumentBinary extends AbstractStructBase
{
    /**
     * The docName
     * @var string|null
     */
    protected ?string $docName = null;
    /**
     * The docContent
     * @var string|null
     */
    protected ?string $docContent = null;
    /**
     * Constructor method for MidocoDocumentBinary
     * @uses MidocoDocumentBinary::setDocName()
     * @uses MidocoDocumentBinary::setDocContent()
     * @param string $docName
     * @param string $docContent
     */
    public function __construct(?string $docName = null, ?string $docContent = null)
    {
        $this
            ->setDocName($docName)
            ->setDocContent($docContent);
    }
    /**
     * Get docName value
     * @return string|null
     */
    public function getDocName(): ?string
    {
        return $this->docName;
    }
    /**
     * Set docName value
     * @param string $docName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentBinary
     */
    public function setDocName(?string $docName = null): self
    {
        // validation for constraint: string
        if (!is_null($docName) && !is_string($docName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($docName, true), gettype($docName)), __LINE__);
        }
        $this->docName = $docName;
        
        return $this;
    }
    /**
     * Get docContent value
     * @return string|null
     */
    public function getDocContent(): ?string
    {
        return $this->docContent;
    }
    /**
     * Set docContent value
     * @param string $docContent
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentBinary
     */
    public function setDocContent(?string $docContent = null): self
    {
        // validation for constraint: string
        if (!is_null($docContent) && !is_string($docContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($docContent, true), gettype($docContent)), __LINE__);
        }
        $this->docContent = $docContent;
        
        return $this;
    }
}
