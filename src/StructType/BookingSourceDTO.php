<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingSourceDTO StructType
 * @subpackage Structs
 */
class BookingSourceDTO extends AbstractStructBase
{
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The sourceId
     * @var string|null
     */
    protected ?string $sourceId = null;
    /**
     * Constructor method for BookingSourceDTO
     * @uses BookingSourceDTO::setCultureId()
     * @uses BookingSourceDTO::setDescription()
     * @uses BookingSourceDTO::setSourceId()
     * @param string $cultureId
     * @param string $description
     * @param string $sourceId
     */
    public function __construct(?string $cultureId = null, ?string $description = null, ?string $sourceId = null)
    {
        $this
            ->setCultureId($cultureId)
            ->setDescription($description)
            ->setSourceId($sourceId);
    }
    /**
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Order\StructType\BookingSourceDTO
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingSourceDTO
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
     * Get sourceId value
     * @return string|null
     */
    public function getSourceId(): ?string
    {
        return $this->sourceId;
    }
    /**
     * Set sourceId value
     * @param string $sourceId
     * @return \Pggns\MidocoApi\Order\StructType\BookingSourceDTO
     */
    public function setSourceId(?string $sourceId = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceId) && !is_string($sourceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceId, true), gettype($sourceId)), __LINE__);
        }
        $this->sourceId = $sourceId;
        
        return $this;
    }
}
