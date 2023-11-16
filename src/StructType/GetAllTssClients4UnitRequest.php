<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllTssClients4UnitRequest StructType
 * @subpackage Structs
 */
class GetAllTssClients4UnitRequest extends AbstractStructBase
{
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $unitName;
    /**
     * The tssSystem
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $tssSystem;
    /**
     * Constructor method for GetAllTssClients4UnitRequest
     * @uses GetAllTssClients4UnitRequest::setUnitName()
     * @uses GetAllTssClients4UnitRequest::setTssSystem()
     * @param string $unitName
     * @param string $tssSystem
     */
    public function __construct(string $unitName, string $tssSystem)
    {
        $this
            ->setUnitName($unitName)
            ->setTssSystem($tssSystem);
    }
    /**
     * Get unitName value
     * @return string
     */
    public function getUnitName(): string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\GetAllTssClients4UnitRequest
     */
    public function setUnitName(string $unitName): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get tssSystem value
     * @return string
     */
    public function getTssSystem(): string
    {
        return $this->tssSystem;
    }
    /**
     * Set tssSystem value
     * @param string $tssSystem
     * @return \Pggns\MidocoApi\Order\StructType\GetAllTssClients4UnitRequest
     */
    public function setTssSystem(string $tssSystem): self
    {
        // validation for constraint: string
        if (!is_null($tssSystem) && !is_string($tssSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tssSystem, true), gettype($tssSystem)), __LINE__);
        }
        $this->tssSystem = $tssSystem;
        
        return $this;
    }
}
