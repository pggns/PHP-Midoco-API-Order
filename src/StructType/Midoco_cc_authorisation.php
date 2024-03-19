<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for midoco-cc-authorisation StructType
 * Meta information extracted from the WSDL
 * - documentation: reference to previously executed cc authorisation over midoco Onlinepayment service (only transactionId is needed for reference)
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Midoco_cc_authorisation extends AbstractStructBase
{
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The transaction_id
     * @var int|null
     */
    protected ?int $transaction_id = null;
    /**
     * Constructor method for midoco-cc-authorisation
     * @uses Midoco_cc_authorisation::setPosition()
     * @uses Midoco_cc_authorisation::setTransaction_id()
     * @param int $position
     * @param int $transaction_id
     */
    public function __construct(?int $position = null, ?int $transaction_id = null)
    {
        $this
            ->setPosition($position)
            ->setTransaction_id($transaction_id);
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
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_cc_authorisation
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
     * Get transaction_id value
     * @return int|null
     */
    public function getTransaction_id(): ?int
    {
        return $this->{'transaction-id'};
    }
    /**
     * Set transaction_id value
     * @param int $transaction_id
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_cc_authorisation
     */
    public function setTransaction_id(?int $transaction_id = null): self
    {
        // validation for constraint: int
        if (!is_null($transaction_id) && !(is_int($transaction_id) || ctype_digit($transaction_id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transaction_id, true), gettype($transaction_id)), __LINE__);
        }
        $this->transaction_id = $this->{'transaction-id'} = $transaction_id;
        
        return $this;
    }
}
