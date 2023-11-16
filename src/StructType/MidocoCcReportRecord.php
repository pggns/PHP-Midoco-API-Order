<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCcReportRecord StructType
 * @subpackage Structs
 */
class MidocoCcReportRecord extends AbstractStructBase
{
    /**
     * The adapter
     * @var string|null
     */
    protected ?string $adapter = null;
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * The sumExported
     * @var float|null
     */
    protected ?float $sumExported = null;
    /**
     * The sumCreated
     * @var float|null
     */
    protected ?float $sumCreated = null;
    /**
     * The countExported
     * @var int|null
     */
    protected ?int $countExported = null;
    /**
     * The countCreated
     * @var int|null
     */
    protected ?int $countCreated = null;
    /**
     * Constructor method for MidocoCcReportRecord
     * @uses MidocoCcReportRecord::setAdapter()
     * @uses MidocoCcReportRecord::setCcType()
     * @uses MidocoCcReportRecord::setSumExported()
     * @uses MidocoCcReportRecord::setSumCreated()
     * @uses MidocoCcReportRecord::setCountExported()
     * @uses MidocoCcReportRecord::setCountCreated()
     * @param string $adapter
     * @param string $ccType
     * @param float $sumExported
     * @param float $sumCreated
     * @param int $countExported
     * @param int $countCreated
     */
    public function __construct(?string $adapter = null, ?string $ccType = null, ?float $sumExported = null, ?float $sumCreated = null, ?int $countExported = null, ?int $countCreated = null)
    {
        $this
            ->setAdapter($adapter)
            ->setCcType($ccType)
            ->setSumExported($sumExported)
            ->setSumCreated($sumCreated)
            ->setCountExported($countExported)
            ->setCountCreated($countCreated);
    }
    /**
     * Get adapter value
     * @return string|null
     */
    public function getAdapter(): ?string
    {
        return $this->adapter;
    }
    /**
     * Set adapter value
     * @param string $adapter
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcReportRecord
     */
    public function setAdapter(?string $adapter = null): self
    {
        // validation for constraint: string
        if (!is_null($adapter) && !is_string($adapter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adapter, true), gettype($adapter)), __LINE__);
        }
        $this->adapter = $adapter;
        
        return $this;
    }
    /**
     * Get ccType value
     * @return string|null
     */
    public function getCcType(): ?string
    {
        return $this->ccType;
    }
    /**
     * Set ccType value
     * @param string $ccType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcReportRecord
     */
    public function setCcType(?string $ccType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccType) && !is_string($ccType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccType, true), gettype($ccType)), __LINE__);
        }
        $this->ccType = $ccType;
        
        return $this;
    }
    /**
     * Get sumExported value
     * @return float|null
     */
    public function getSumExported(): ?float
    {
        return $this->sumExported;
    }
    /**
     * Set sumExported value
     * @param float $sumExported
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcReportRecord
     */
    public function setSumExported(?float $sumExported = null): self
    {
        // validation for constraint: float
        if (!is_null($sumExported) && !(is_float($sumExported) || is_numeric($sumExported))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumExported, true), gettype($sumExported)), __LINE__);
        }
        $this->sumExported = $sumExported;
        
        return $this;
    }
    /**
     * Get sumCreated value
     * @return float|null
     */
    public function getSumCreated(): ?float
    {
        return $this->sumCreated;
    }
    /**
     * Set sumCreated value
     * @param float $sumCreated
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcReportRecord
     */
    public function setSumCreated(?float $sumCreated = null): self
    {
        // validation for constraint: float
        if (!is_null($sumCreated) && !(is_float($sumCreated) || is_numeric($sumCreated))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumCreated, true), gettype($sumCreated)), __LINE__);
        }
        $this->sumCreated = $sumCreated;
        
        return $this;
    }
    /**
     * Get countExported value
     * @return int|null
     */
    public function getCountExported(): ?int
    {
        return $this->countExported;
    }
    /**
     * Set countExported value
     * @param int $countExported
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcReportRecord
     */
    public function setCountExported(?int $countExported = null): self
    {
        // validation for constraint: int
        if (!is_null($countExported) && !(is_int($countExported) || ctype_digit($countExported))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($countExported, true), gettype($countExported)), __LINE__);
        }
        $this->countExported = $countExported;
        
        return $this;
    }
    /**
     * Get countCreated value
     * @return int|null
     */
    public function getCountCreated(): ?int
    {
        return $this->countCreated;
    }
    /**
     * Set countCreated value
     * @param int $countCreated
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcReportRecord
     */
    public function setCountCreated(?int $countCreated = null): self
    {
        // validation for constraint: int
        if (!is_null($countCreated) && !(is_int($countCreated) || ctype_digit($countCreated))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($countCreated, true), gettype($countCreated)), __LINE__);
        }
        $this->countCreated = $countCreated;
        
        return $this;
    }
}
