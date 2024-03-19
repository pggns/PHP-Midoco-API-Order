<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintjobDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintjobDTO extends AbstractStructBase
{
    /**
     * The creatingUser
     * @var int|null
     */
    protected ?int $creatingUser = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The isPreview
     * @var bool|null
     */
    protected ?bool $isPreview = null;
    /**
     * The isPrinted
     * @var bool|null
     */
    protected ?bool $isPrinted = null;
    /**
     * The media
     * @var string|null
     */
    protected ?string $media = null;
    /**
     * The numCopies
     * @var int|null
     */
    protected ?int $numCopies = null;
    /**
     * The printTimestamp
     * @var string|null
     */
    protected ?string $printTimestamp = null;
    /**
     * The printjob
     * @var string|null
     */
    protected ?string $printjob = null;
    /**
     * The printjobId
     * @var string|null
     */
    protected ?string $printjobId = null;
    /**
     * The timeCreated
     * @var string|null
     */
    protected ?string $timeCreated = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * The workstationId
     * @var string|null
     */
    protected ?string $workstationId = null;
    /**
     * Constructor method for PrintjobDTO
     * @uses PrintjobDTO::setCreatingUser()
     * @uses PrintjobDTO::setId()
     * @uses PrintjobDTO::setIsPreview()
     * @uses PrintjobDTO::setIsPrinted()
     * @uses PrintjobDTO::setMedia()
     * @uses PrintjobDTO::setNumCopies()
     * @uses PrintjobDTO::setPrintTimestamp()
     * @uses PrintjobDTO::setPrintjob()
     * @uses PrintjobDTO::setPrintjobId()
     * @uses PrintjobDTO::setTimeCreated()
     * @uses PrintjobDTO::setTypeId()
     * @uses PrintjobDTO::setWorkstationId()
     * @param int $creatingUser
     * @param int $id
     * @param bool $isPreview
     * @param bool $isPrinted
     * @param string $media
     * @param int $numCopies
     * @param string $printTimestamp
     * @param string $printjob
     * @param string $printjobId
     * @param string $timeCreated
     * @param string $typeId
     * @param string $workstationId
     */
    public function __construct(?int $creatingUser = null, ?int $id = null, ?bool $isPreview = null, ?bool $isPrinted = null, ?string $media = null, ?int $numCopies = null, ?string $printTimestamp = null, ?string $printjob = null, ?string $printjobId = null, ?string $timeCreated = null, ?string $typeId = null, ?string $workstationId = null)
    {
        $this
            ->setCreatingUser($creatingUser)
            ->setId($id)
            ->setIsPreview($isPreview)
            ->setIsPrinted($isPrinted)
            ->setMedia($media)
            ->setNumCopies($numCopies)
            ->setPrintTimestamp($printTimestamp)
            ->setPrintjob($printjob)
            ->setPrintjobId($printjobId)
            ->setTimeCreated($timeCreated)
            ->setTypeId($typeId)
            ->setWorkstationId($workstationId);
    }
    /**
     * Get creatingUser value
     * @return int|null
     */
    public function getCreatingUser(): ?int
    {
        return $this->creatingUser;
    }
    /**
     * Set creatingUser value
     * @param int $creatingUser
     * @return \Pggns\MidocoApi\Order\StructType\PrintjobDTO
     */
    public function setCreatingUser(?int $creatingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creatingUser) && !(is_int($creatingUser) || ctype_digit($creatingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creatingUser, true), gettype($creatingUser)), __LINE__);
        }
        $this->creatingUser = $creatingUser;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintjobDTO
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
     * Get isPreview value
     * @return bool|null
     */
    public function getIsPreview(): ?bool
    {
        return $this->isPreview;
    }
    /**
     * Set isPreview value
     * @param bool $isPreview
     * @return \Pggns\MidocoApi\Order\StructType\PrintjobDTO
     */
    public function setIsPreview(?bool $isPreview = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPreview) && !is_bool($isPreview)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPreview, true), gettype($isPreview)), __LINE__);
        }
        $this->isPreview = $isPreview;
        
        return $this;
    }
    /**
     * Get isPrinted value
     * @return bool|null
     */
    public function getIsPrinted(): ?bool
    {
        return $this->isPrinted;
    }
    /**
     * Set isPrinted value
     * @param bool $isPrinted
     * @return \Pggns\MidocoApi\Order\StructType\PrintjobDTO
     */
    public function setIsPrinted(?bool $isPrinted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPrinted) && !is_bool($isPrinted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPrinted, true), gettype($isPrinted)), __LINE__);
        }
        $this->isPrinted = $isPrinted;
        
        return $this;
    }
    /**
     * Get media value
     * @return string|null
     */
    public function getMedia(): ?string
    {
        return $this->media;
    }
    /**
     * Set media value
     * @param string $media
     * @return \Pggns\MidocoApi\Order\StructType\PrintjobDTO
     */
    public function setMedia(?string $media = null): self
    {
        // validation for constraint: string
        if (!is_null($media) && !is_string($media)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($media, true), gettype($media)), __LINE__);
        }
        $this->media = $media;
        
        return $this;
    }
    /**
     * Get numCopies value
     * @return int|null
     */
    public function getNumCopies(): ?int
    {
        return $this->numCopies;
    }
    /**
     * Set numCopies value
     * @param int $numCopies
     * @return \Pggns\MidocoApi\Order\StructType\PrintjobDTO
     */
    public function setNumCopies(?int $numCopies = null): self
    {
        // validation for constraint: int
        if (!is_null($numCopies) && !(is_int($numCopies) || ctype_digit($numCopies))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numCopies, true), gettype($numCopies)), __LINE__);
        }
        $this->numCopies = $numCopies;
        
        return $this;
    }
    /**
     * Get printTimestamp value
     * @return string|null
     */
    public function getPrintTimestamp(): ?string
    {
        return $this->printTimestamp;
    }
    /**
     * Set printTimestamp value
     * @param string $printTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\PrintjobDTO
     */
    public function setPrintTimestamp(?string $printTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($printTimestamp) && !is_string($printTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printTimestamp, true), gettype($printTimestamp)), __LINE__);
        }
        $this->printTimestamp = $printTimestamp;
        
        return $this;
    }
    /**
     * Get printjob value
     * @return string|null
     */
    public function getPrintjob(): ?string
    {
        return $this->printjob;
    }
    /**
     * Set printjob value
     * @param string $printjob
     * @return \Pggns\MidocoApi\Order\StructType\PrintjobDTO
     */
    public function setPrintjob(?string $printjob = null): self
    {
        // validation for constraint: string
        if (!is_null($printjob) && !is_string($printjob)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printjob, true), gettype($printjob)), __LINE__);
        }
        $this->printjob = $printjob;
        
        return $this;
    }
    /**
     * Get printjobId value
     * @return string|null
     */
    public function getPrintjobId(): ?string
    {
        return $this->printjobId;
    }
    /**
     * Set printjobId value
     * @param string $printjobId
     * @return \Pggns\MidocoApi\Order\StructType\PrintjobDTO
     */
    public function setPrintjobId(?string $printjobId = null): self
    {
        // validation for constraint: string
        if (!is_null($printjobId) && !is_string($printjobId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printjobId, true), gettype($printjobId)), __LINE__);
        }
        $this->printjobId = $printjobId;
        
        return $this;
    }
    /**
     * Get timeCreated value
     * @return string|null
     */
    public function getTimeCreated(): ?string
    {
        return $this->timeCreated;
    }
    /**
     * Set timeCreated value
     * @param string $timeCreated
     * @return \Pggns\MidocoApi\Order\StructType\PrintjobDTO
     */
    public function setTimeCreated(?string $timeCreated = null): self
    {
        // validation for constraint: string
        if (!is_null($timeCreated) && !is_string($timeCreated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeCreated, true), gettype($timeCreated)), __LINE__);
        }
        $this->timeCreated = $timeCreated;
        
        return $this;
    }
    /**
     * Get typeId value
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \Pggns\MidocoApi\Order\StructType\PrintjobDTO
     */
    public function setTypeId(?string $typeId = null): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
    /**
     * Get workstationId value
     * @return string|null
     */
    public function getWorkstationId(): ?string
    {
        return $this->workstationId;
    }
    /**
     * Set workstationId value
     * @param string $workstationId
     * @return \Pggns\MidocoApi\Order\StructType\PrintjobDTO
     */
    public function setWorkstationId(?string $workstationId = null): self
    {
        // validation for constraint: string
        if (!is_null($workstationId) && !is_string($workstationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workstationId, true), gettype($workstationId)), __LINE__);
        }
        $this->workstationId = $workstationId;
        
        return $this;
    }
}
