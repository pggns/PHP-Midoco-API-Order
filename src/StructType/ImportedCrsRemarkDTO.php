<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportedCrsRemarkDTO StructType
 * @subpackage Structs
 */
class ImportedCrsRemarkDTO extends AbstractStructBase
{
    /**
     * The importCrs
     * @var string|null
     */
    protected ?string $importCrs = null;
    /**
     * The importTimestamp
     * @var string|null
     */
    protected ?string $importTimestamp = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The remark
     * @var string|null
     */
    protected ?string $remark = null;
    /**
     * Constructor method for ImportedCrsRemarkDTO
     * @uses ImportedCrsRemarkDTO::setImportCrs()
     * @uses ImportedCrsRemarkDTO::setImportTimestamp()
     * @uses ImportedCrsRemarkDTO::setItemId()
     * @uses ImportedCrsRemarkDTO::setPosition()
     * @uses ImportedCrsRemarkDTO::setRemark()
     * @param string $importCrs
     * @param string $importTimestamp
     * @param int $itemId
     * @param int $position
     * @param string $remark
     */
    public function __construct(?string $importCrs = null, ?string $importTimestamp = null, ?int $itemId = null, ?int $position = null, ?string $remark = null)
    {
        $this
            ->setImportCrs($importCrs)
            ->setImportTimestamp($importTimestamp)
            ->setItemId($itemId)
            ->setPosition($position)
            ->setRemark($remark);
    }
    /**
     * Get importCrs value
     * @return string|null
     */
    public function getImportCrs(): ?string
    {
        return $this->importCrs;
    }
    /**
     * Set importCrs value
     * @param string $importCrs
     * @return \Pggns\MidocoApi\Order\StructType\ImportedCrsRemarkDTO
     */
    public function setImportCrs(?string $importCrs = null): self
    {
        // validation for constraint: string
        if (!is_null($importCrs) && !is_string($importCrs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importCrs, true), gettype($importCrs)), __LINE__);
        }
        $this->importCrs = $importCrs;
        
        return $this;
    }
    /**
     * Get importTimestamp value
     * @return string|null
     */
    public function getImportTimestamp(): ?string
    {
        return $this->importTimestamp;
    }
    /**
     * Set importTimestamp value
     * @param string $importTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\ImportedCrsRemarkDTO
     */
    public function setImportTimestamp(?string $importTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($importTimestamp) && !is_string($importTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importTimestamp, true), gettype($importTimestamp)), __LINE__);
        }
        $this->importTimestamp = $importTimestamp;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\ImportedCrsRemarkDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\ImportedCrsRemarkDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get remark value
     * @return string|null
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }
    /**
     * Set remark value
     * @param string $remark
     * @return \Pggns\MidocoApi\Order\StructType\ImportedCrsRemarkDTO
     */
    public function setRemark(?string $remark = null): self
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), gettype($remark)), __LINE__);
        }
        $this->remark = $remark;
        
        return $this;
    }
}
