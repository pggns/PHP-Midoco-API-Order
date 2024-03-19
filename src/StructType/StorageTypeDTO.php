<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StorageTypeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class StorageTypeDTO extends AbstractStructBase
{
    /**
     * The datastoreTypeId
     * @var string|null
     */
    protected ?string $datastoreTypeId = null;
    /**
     * Constructor method for StorageTypeDTO
     * @uses StorageTypeDTO::setDatastoreTypeId()
     * @param string $datastoreTypeId
     */
    public function __construct(?string $datastoreTypeId = null)
    {
        $this
            ->setDatastoreTypeId($datastoreTypeId);
    }
    /**
     * Get datastoreTypeId value
     * @return string|null
     */
    public function getDatastoreTypeId(): ?string
    {
        return $this->datastoreTypeId;
    }
    /**
     * Set datastoreTypeId value
     * @param string $datastoreTypeId
     * @return \Pggns\MidocoApi\Order\StructType\StorageTypeDTO
     */
    public function setDatastoreTypeId(?string $datastoreTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($datastoreTypeId) && !is_string($datastoreTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datastoreTypeId, true), gettype($datastoreTypeId)), __LINE__);
        }
        $this->datastoreTypeId = $datastoreTypeId;
        
        return $this;
    }
}
