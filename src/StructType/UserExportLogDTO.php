<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserExportLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UserExportLogDTO extends AbstractStructBase
{
    /**
     * The exportName
     * @var string|null
     */
    protected ?string $exportName = null;
    /**
     * The exportSize
     * @var int|null
     */
    protected ?int $exportSize = null;
    /**
     * The exportTime
     * @var string|null
     */
    protected ?string $exportTime = null;
    /**
     * The exportType
     * @var string|null
     */
    protected ?string $exportType = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The rowCount
     * @var int|null
     */
    protected ?int $rowCount = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for UserExportLogDTO
     * @uses UserExportLogDTO::setExportName()
     * @uses UserExportLogDTO::setExportSize()
     * @uses UserExportLogDTO::setExportTime()
     * @uses UserExportLogDTO::setExportType()
     * @uses UserExportLogDTO::setId()
     * @uses UserExportLogDTO::setRowCount()
     * @uses UserExportLogDTO::setUnitName()
     * @uses UserExportLogDTO::setUserId()
     * @param string $exportName
     * @param int $exportSize
     * @param string $exportTime
     * @param string $exportType
     * @param int $id
     * @param int $rowCount
     * @param string $unitName
     * @param int $userId
     */
    public function __construct(?string $exportName = null, ?int $exportSize = null, ?string $exportTime = null, ?string $exportType = null, ?int $id = null, ?int $rowCount = null, ?string $unitName = null, ?int $userId = null)
    {
        $this
            ->setExportName($exportName)
            ->setExportSize($exportSize)
            ->setExportTime($exportTime)
            ->setExportType($exportType)
            ->setId($id)
            ->setRowCount($rowCount)
            ->setUnitName($unitName)
            ->setUserId($userId);
    }
    /**
     * Get exportName value
     * @return string|null
     */
    public function getExportName(): ?string
    {
        return $this->exportName;
    }
    /**
     * Set exportName value
     * @param string $exportName
     * @return \Pggns\MidocoApi\Order\StructType\UserExportLogDTO
     */
    public function setExportName(?string $exportName = null): self
    {
        // validation for constraint: string
        if (!is_null($exportName) && !is_string($exportName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportName, true), gettype($exportName)), __LINE__);
        }
        $this->exportName = $exportName;
        
        return $this;
    }
    /**
     * Get exportSize value
     * @return int|null
     */
    public function getExportSize(): ?int
    {
        return $this->exportSize;
    }
    /**
     * Set exportSize value
     * @param int $exportSize
     * @return \Pggns\MidocoApi\Order\StructType\UserExportLogDTO
     */
    public function setExportSize(?int $exportSize = null): self
    {
        // validation for constraint: int
        if (!is_null($exportSize) && !(is_int($exportSize) || ctype_digit($exportSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($exportSize, true), gettype($exportSize)), __LINE__);
        }
        $this->exportSize = $exportSize;
        
        return $this;
    }
    /**
     * Get exportTime value
     * @return string|null
     */
    public function getExportTime(): ?string
    {
        return $this->exportTime;
    }
    /**
     * Set exportTime value
     * @param string $exportTime
     * @return \Pggns\MidocoApi\Order\StructType\UserExportLogDTO
     */
    public function setExportTime(?string $exportTime = null): self
    {
        // validation for constraint: string
        if (!is_null($exportTime) && !is_string($exportTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportTime, true), gettype($exportTime)), __LINE__);
        }
        $this->exportTime = $exportTime;
        
        return $this;
    }
    /**
     * Get exportType value
     * @return string|null
     */
    public function getExportType(): ?string
    {
        return $this->exportType;
    }
    /**
     * Set exportType value
     * @param string $exportType
     * @return \Pggns\MidocoApi\Order\StructType\UserExportLogDTO
     */
    public function setExportType(?string $exportType = null): self
    {
        // validation for constraint: string
        if (!is_null($exportType) && !is_string($exportType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportType, true), gettype($exportType)), __LINE__);
        }
        $this->exportType = $exportType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\UserExportLogDTO
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
     * Get rowCount value
     * @return int|null
     */
    public function getRowCount(): ?int
    {
        return $this->rowCount;
    }
    /**
     * Set rowCount value
     * @param int $rowCount
     * @return \Pggns\MidocoApi\Order\StructType\UserExportLogDTO
     */
    public function setRowCount(?int $rowCount = null): self
    {
        // validation for constraint: int
        if (!is_null($rowCount) && !(is_int($rowCount) || ctype_digit($rowCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rowCount, true), gettype($rowCount)), __LINE__);
        }
        $this->rowCount = $rowCount;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\UserExportLogDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Order\StructType\UserExportLogDTO
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
}
