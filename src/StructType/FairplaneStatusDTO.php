<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FairplaneStatusDTO StructType
 * @subpackage Structs
 */
class FairplaneStatusDTO extends AbstractStructBase
{
    /**
     * The importDate
     * @var string|null
     */
    protected ?string $importDate = null;
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
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * The status
     * @var int|null
     */
    protected ?int $status = null;
    /**
     * Constructor method for FairplaneStatusDTO
     * @uses FairplaneStatusDTO::setImportDate()
     * @uses FairplaneStatusDTO::setItemId()
     * @uses FairplaneStatusDTO::setPosition()
     * @uses FairplaneStatusDTO::setRepositoryId()
     * @uses FairplaneStatusDTO::setStatus()
     * @param string $importDate
     * @param int $itemId
     * @param int $position
     * @param int $repositoryId
     * @param int $status
     */
    public function __construct(?string $importDate = null, ?int $itemId = null, ?int $position = null, ?int $repositoryId = null, ?int $status = null)
    {
        $this
            ->setImportDate($importDate)
            ->setItemId($itemId)
            ->setPosition($position)
            ->setRepositoryId($repositoryId)
            ->setStatus($status);
    }
    /**
     * Get importDate value
     * @return string|null
     */
    public function getImportDate(): ?string
    {
        return $this->importDate;
    }
    /**
     * Set importDate value
     * @param string $importDate
     * @return \Pggns\MidocoApi\Order\StructType\FairplaneStatusDTO
     */
    public function setImportDate(?string $importDate = null): self
    {
        // validation for constraint: string
        if (!is_null($importDate) && !is_string($importDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importDate, true), gettype($importDate)), __LINE__);
        }
        $this->importDate = $importDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FairplaneStatusDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\FairplaneStatusDTO
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
     * Get repositoryId value
     * @return int|null
     */
    public function getRepositoryId(): ?int
    {
        return $this->repositoryId;
    }
    /**
     * Set repositoryId value
     * @param int $repositoryId
     * @return \Pggns\MidocoApi\Order\StructType\FairplaneStatusDTO
     */
    public function setRepositoryId(?int $repositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($repositoryId) && !(is_int($repositoryId) || ctype_digit($repositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repositoryId, true), gettype($repositoryId)), __LINE__);
        }
        $this->repositoryId = $repositoryId;
        
        return $this;
    }
    /**
     * Get status value
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param int $status
     * @return \Pggns\MidocoApi\Order\StructType\FairplaneStatusDTO
     */
    public function setStatus(?int $status = null): self
    {
        // validation for constraint: int
        if (!is_null($status) && !(is_int($status) || ctype_digit($status))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
}
