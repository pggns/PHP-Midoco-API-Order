<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDocumentNatureDescriptionType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoDocumentNatureDescriptionType extends DocumentNatureDescriptionDTO
{
    /**
     * The inherited
     * @var bool|null
     */
    protected ?bool $inherited = null;
    /**
     * The documentNatureId
     * @var string|null
     */
    protected ?string $documentNatureId = null;
    /**
     * Constructor method for MidocoDocumentNatureDescriptionType
     * @uses MidocoDocumentNatureDescriptionType::setInherited()
     * @uses MidocoDocumentNatureDescriptionType::setDocumentNatureId()
     * @param bool $inherited
     * @param string $documentNatureId
     */
    public function __construct(?bool $inherited = null, ?string $documentNatureId = null)
    {
        $this
            ->setInherited($inherited)
            ->setDocumentNatureId($documentNatureId);
    }
    /**
     * Get inherited value
     * @return bool|null
     */
    public function getInherited(): ?bool
    {
        return $this->inherited;
    }
    /**
     * Set inherited value
     * @param bool $inherited
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureDescriptionType
     */
    public function setInherited(?bool $inherited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inherited) && !is_bool($inherited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inherited, true), gettype($inherited)), __LINE__);
        }
        $this->inherited = $inherited;
        
        return $this;
    }
    /**
     * Get documentNatureId value
     * @return string|null
     */
    public function getDocumentNatureId(): ?string
    {
        return $this->documentNatureId;
    }
    /**
     * Set documentNatureId value
     * @param string $documentNatureId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureDescriptionType
     */
    public function setDocumentNatureId(?string $documentNatureId = null): self
    {
        // validation for constraint: string
        if (!is_null($documentNatureId) && !is_string($documentNatureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNatureId, true), gettype($documentNatureId)), __LINE__);
        }
        $this->documentNatureId = $documentNatureId;
        
        return $this;
    }
}
