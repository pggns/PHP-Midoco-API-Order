<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrsExpedientDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrsExpedientDTO extends AbstractStructBase
{
    /**
     * The crsName
     * @var string|null
     */
    protected ?string $crsName = null;
    /**
     * The expedientId
     * @var string|null
     */
    protected ?string $expedientId = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for CrsExpedientDTO
     * @uses CrsExpedientDTO::setCrsName()
     * @uses CrsExpedientDTO::setExpedientId()
     * @uses CrsExpedientDTO::setUserId()
     * @param string $crsName
     * @param string $expedientId
     * @param int $userId
     */
    public function __construct(?string $crsName = null, ?string $expedientId = null, ?int $userId = null)
    {
        $this
            ->setCrsName($crsName)
            ->setExpedientId($expedientId)
            ->setUserId($userId);
    }
    /**
     * Get crsName value
     * @return string|null
     */
    public function getCrsName(): ?string
    {
        return $this->crsName;
    }
    /**
     * Set crsName value
     * @param string $crsName
     * @return \Pggns\MidocoApi\Order\StructType\CrsExpedientDTO
     */
    public function setCrsName(?string $crsName = null): self
    {
        // validation for constraint: string
        if (!is_null($crsName) && !is_string($crsName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crsName, true), gettype($crsName)), __LINE__);
        }
        $this->crsName = $crsName;
        
        return $this;
    }
    /**
     * Get expedientId value
     * @return string|null
     */
    public function getExpedientId(): ?string
    {
        return $this->expedientId;
    }
    /**
     * Set expedientId value
     * @param string $expedientId
     * @return \Pggns\MidocoApi\Order\StructType\CrsExpedientDTO
     */
    public function setExpedientId(?string $expedientId = null): self
    {
        // validation for constraint: string
        if (!is_null($expedientId) && !is_string($expedientId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expedientId, true), gettype($expedientId)), __LINE__);
        }
        $this->expedientId = $expedientId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrsExpedientDTO
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
