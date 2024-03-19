<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrustedMediatorDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TrustedMediatorDTO extends AbstractStructBase
{
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * Constructor method for TrustedMediatorDTO
     * @uses TrustedMediatorDTO::setMediatorId()
     * @uses TrustedMediatorDTO::setPassword()
     * @param string $mediatorId
     * @param string $password
     */
    public function __construct(?string $mediatorId = null, ?string $password = null)
    {
        $this
            ->setMediatorId($mediatorId)
            ->setPassword($password);
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\TrustedMediatorDTO
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Pggns\MidocoApi\Order\StructType\TrustedMediatorDTO
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
}
