<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerCreditScoreResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCustomerCreditScoreResponse extends AbstractStructBase
{
    /**
     * The techStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $techStatus = null;
    /**
     * The score
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $score = null;
    /**
     * The creditStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $creditStatus = null;
    /**
     * The textMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $textMessage = null;
    /**
     * Constructor method for GetCustomerCreditScoreResponse
     * @uses GetCustomerCreditScoreResponse::setTechStatus()
     * @uses GetCustomerCreditScoreResponse::setScore()
     * @uses GetCustomerCreditScoreResponse::setCreditStatus()
     * @uses GetCustomerCreditScoreResponse::setTextMessage()
     * @param string $techStatus
     * @param int $score
     * @param string $creditStatus
     * @param string $textMessage
     */
    public function __construct(?string $techStatus = null, ?int $score = null, ?string $creditStatus = null, ?string $textMessage = null)
    {
        $this
            ->setTechStatus($techStatus)
            ->setScore($score)
            ->setCreditStatus($creditStatus)
            ->setTextMessage($textMessage);
    }
    /**
     * Get techStatus value
     * @return string|null
     */
    public function getTechStatus(): ?string
    {
        return $this->techStatus;
    }
    /**
     * Set techStatus value
     * @param string $techStatus
     * @return \Pggns\MidocoApi\Order\StructType\GetCustomerCreditScoreResponse
     */
    public function setTechStatus(?string $techStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($techStatus) && !is_string($techStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($techStatus, true), gettype($techStatus)), __LINE__);
        }
        $this->techStatus = $techStatus;
        
        return $this;
    }
    /**
     * Get score value
     * @return int|null
     */
    public function getScore(): ?int
    {
        return $this->score;
    }
    /**
     * Set score value
     * @param int $score
     * @return \Pggns\MidocoApi\Order\StructType\GetCustomerCreditScoreResponse
     */
    public function setScore(?int $score = null): self
    {
        // validation for constraint: int
        if (!is_null($score) && !(is_int($score) || ctype_digit($score))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($score, true), gettype($score)), __LINE__);
        }
        $this->score = $score;
        
        return $this;
    }
    /**
     * Get creditStatus value
     * @return string|null
     */
    public function getCreditStatus(): ?string
    {
        return $this->creditStatus;
    }
    /**
     * Set creditStatus value
     * @param string $creditStatus
     * @return \Pggns\MidocoApi\Order\StructType\GetCustomerCreditScoreResponse
     */
    public function setCreditStatus(?string $creditStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($creditStatus) && !is_string($creditStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditStatus, true), gettype($creditStatus)), __LINE__);
        }
        $this->creditStatus = $creditStatus;
        
        return $this;
    }
    /**
     * Get textMessage value
     * @return string|null
     */
    public function getTextMessage(): ?string
    {
        return $this->textMessage;
    }
    /**
     * Set textMessage value
     * @param string $textMessage
     * @return \Pggns\MidocoApi\Order\StructType\GetCustomerCreditScoreResponse
     */
    public function setTextMessage(?string $textMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($textMessage) && !is_string($textMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($textMessage, true), gettype($textMessage)), __LINE__);
        }
        $this->textMessage = $textMessage;
        
        return $this;
    }
}
