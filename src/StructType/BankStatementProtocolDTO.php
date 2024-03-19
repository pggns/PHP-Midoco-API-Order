<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankStatementProtocolDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BankStatementProtocolDTO extends AbstractStructBase
{
    /**
     * The accountPosition
     * @var int|null
     */
    protected ?int $accountPosition = null;
    /**
     * The protocolId
     * @var int|null
     */
    protected ?int $protocolId = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * The statementId
     * @var int|null
     */
    protected ?int $statementId = null;
    /**
     * Constructor method for BankStatementProtocolDTO
     * @uses BankStatementProtocolDTO::setAccountPosition()
     * @uses BankStatementProtocolDTO::setProtocolId()
     * @uses BankStatementProtocolDTO::setRepositoryId()
     * @uses BankStatementProtocolDTO::setStatementId()
     * @param int $accountPosition
     * @param int $protocolId
     * @param int $repositoryId
     * @param int $statementId
     */
    public function __construct(?int $accountPosition = null, ?int $protocolId = null, ?int $repositoryId = null, ?int $statementId = null)
    {
        $this
            ->setAccountPosition($accountPosition)
            ->setProtocolId($protocolId)
            ->setRepositoryId($repositoryId)
            ->setStatementId($statementId);
    }
    /**
     * Get accountPosition value
     * @return int|null
     */
    public function getAccountPosition(): ?int
    {
        return $this->accountPosition;
    }
    /**
     * Set accountPosition value
     * @param int $accountPosition
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementProtocolDTO
     */
    public function setAccountPosition(?int $accountPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($accountPosition) && !(is_int($accountPosition) || ctype_digit($accountPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountPosition, true), gettype($accountPosition)), __LINE__);
        }
        $this->accountPosition = $accountPosition;
        
        return $this;
    }
    /**
     * Get protocolId value
     * @return int|null
     */
    public function getProtocolId(): ?int
    {
        return $this->protocolId;
    }
    /**
     * Set protocolId value
     * @param int $protocolId
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementProtocolDTO
     */
    public function setProtocolId(?int $protocolId = null): self
    {
        // validation for constraint: int
        if (!is_null($protocolId) && !(is_int($protocolId) || ctype_digit($protocolId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($protocolId, true), gettype($protocolId)), __LINE__);
        }
        $this->protocolId = $protocolId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementProtocolDTO
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
     * Get statementId value
     * @return int|null
     */
    public function getStatementId(): ?int
    {
        return $this->statementId;
    }
    /**
     * Set statementId value
     * @param int $statementId
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementProtocolDTO
     */
    public function setStatementId(?int $statementId = null): self
    {
        // validation for constraint: int
        if (!is_null($statementId) && !(is_int($statementId) || ctype_digit($statementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statementId, true), gettype($statementId)), __LINE__);
        }
        $this->statementId = $statementId;
        
        return $this;
    }
}
