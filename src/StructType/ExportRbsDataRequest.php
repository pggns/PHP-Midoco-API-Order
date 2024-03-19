<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportRbsDataRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExportRbsDataRequest extends AbstractStructBase
{
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The endTravel
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * The startCreation
     * @var string|null
     */
    protected ?string $startCreation = null;
    /**
     * Constructor method for ExportRbsDataRequest
     * @uses ExportRbsDataRequest::setStartTravel()
     * @uses ExportRbsDataRequest::setEndTravel()
     * @uses ExportRbsDataRequest::setStartCreation()
     * @param string $startTravel
     * @param string $endTravel
     * @param string $startCreation
     */
    public function __construct(?string $startTravel = null, ?string $endTravel = null, ?string $startCreation = null)
    {
        $this
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setStartCreation($startCreation);
    }
    /**
     * Get startTravel value
     * @return string|null
     */
    public function getStartTravel(): ?string
    {
        return $this->startTravel;
    }
    /**
     * Set startTravel value
     * @param string $startTravel
     * @return \Pggns\MidocoApi\Order\StructType\ExportRbsDataRequest
     */
    public function setStartTravel(?string $startTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravel) && !is_string($startTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravel, true), gettype($startTravel)), __LINE__);
        }
        $this->startTravel = $startTravel;
        
        return $this;
    }
    /**
     * Get endTravel value
     * @return string|null
     */
    public function getEndTravel(): ?string
    {
        return $this->endTravel;
    }
    /**
     * Set endTravel value
     * @param string $endTravel
     * @return \Pggns\MidocoApi\Order\StructType\ExportRbsDataRequest
     */
    public function setEndTravel(?string $endTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravel) && !is_string($endTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravel, true), gettype($endTravel)), __LINE__);
        }
        $this->endTravel = $endTravel;
        
        return $this;
    }
    /**
     * Get startCreation value
     * @return string|null
     */
    public function getStartCreation(): ?string
    {
        return $this->startCreation;
    }
    /**
     * Set startCreation value
     * @param string $startCreation
     * @return \Pggns\MidocoApi\Order\StructType\ExportRbsDataRequest
     */
    public function setStartCreation(?string $startCreation = null): self
    {
        // validation for constraint: string
        if (!is_null($startCreation) && !is_string($startCreation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startCreation, true), gettype($startCreation)), __LINE__);
        }
        $this->startCreation = $startCreation;
        
        return $this;
    }
}
