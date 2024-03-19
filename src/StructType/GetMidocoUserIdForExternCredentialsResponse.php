<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoUserIdForExternCredentialsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoUserIdForExternCredentialsResponse extends AbstractStructBase
{
    /**
     * The midocoUserId
     * @var int|null
     */
    protected ?int $midocoUserId = null;
    /**
     * The midocoOrgUnitName
     * @var string|null
     */
    protected ?string $midocoOrgUnitName = null;
    /**
     * Constructor method for GetMidocoUserIdForExternCredentialsResponse
     * @uses GetMidocoUserIdForExternCredentialsResponse::setMidocoUserId()
     * @uses GetMidocoUserIdForExternCredentialsResponse::setMidocoOrgUnitName()
     * @param int $midocoUserId
     * @param string $midocoOrgUnitName
     */
    public function __construct(?int $midocoUserId = null, ?string $midocoOrgUnitName = null)
    {
        $this
            ->setMidocoUserId($midocoUserId)
            ->setMidocoOrgUnitName($midocoOrgUnitName);
    }
    /**
     * Get midocoUserId value
     * @return int|null
     */
    public function getMidocoUserId(): ?int
    {
        return $this->midocoUserId;
    }
    /**
     * Set midocoUserId value
     * @param int $midocoUserId
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoUserIdForExternCredentialsResponse
     */
    public function setMidocoUserId(?int $midocoUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($midocoUserId) && !(is_int($midocoUserId) || ctype_digit($midocoUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midocoUserId, true), gettype($midocoUserId)), __LINE__);
        }
        $this->midocoUserId = $midocoUserId;
        
        return $this;
    }
    /**
     * Get midocoOrgUnitName value
     * @return string|null
     */
    public function getMidocoOrgUnitName(): ?string
    {
        return $this->midocoOrgUnitName;
    }
    /**
     * Set midocoOrgUnitName value
     * @param string $midocoOrgUnitName
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoUserIdForExternCredentialsResponse
     */
    public function setMidocoOrgUnitName(?string $midocoOrgUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoOrgUnitName) && !is_string($midocoOrgUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoOrgUnitName, true), gettype($midocoOrgUnitName)), __LINE__);
        }
        $this->midocoOrgUnitName = $midocoOrgUnitName;
        
        return $this;
    }
}
