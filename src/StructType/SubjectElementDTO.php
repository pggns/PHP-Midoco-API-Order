<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubjectElementDTO StructType
 * @subpackage Structs
 */
class SubjectElementDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The locale
     * @var string|null
     */
    protected ?string $locale = null;
    /**
     * The template
     * @var string|null
     */
    protected ?string $template = null;
    /**
     * Constructor method for SubjectElementDTO
     * @uses SubjectElementDTO::setDescription()
     * @uses SubjectElementDTO::setId()
     * @uses SubjectElementDTO::setLocale()
     * @uses SubjectElementDTO::setTemplate()
     * @param string $description
     * @param int $id
     * @param string $locale
     * @param string $template
     */
    public function __construct(?string $description = null, ?int $id = null, ?string $locale = null, ?string $template = null)
    {
        $this
            ->setDescription($description)
            ->setId($id)
            ->setLocale($locale)
            ->setTemplate($template);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\SubjectElementDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\SubjectElementDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get locale value
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }
    /**
     * Set locale value
     * @param string $locale
     * @return \Pggns\MidocoApi\Order\StructType\SubjectElementDTO
     */
    public function setLocale(?string $locale = null): self
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->locale = $locale;
        
        return $this;
    }
    /**
     * Get template value
     * @return string|null
     */
    public function getTemplate(): ?string
    {
        return $this->template;
    }
    /**
     * Set template value
     * @param string $template
     * @return \Pggns\MidocoApi\Order\StructType\SubjectElementDTO
     */
    public function setTemplate(?string $template = null): self
    {
        // validation for constraint: string
        if (!is_null($template) && !is_string($template)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($template, true), gettype($template)), __LINE__);
        }
        $this->template = $template;
        
        return $this;
    }
}
