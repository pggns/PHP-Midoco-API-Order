<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for lock StructType
 * Meta information extracted from the WSDL
 * - documentation: information about the type of lock set on the order
 * @subpackage Structs
 */
class Lock extends AbstractStructBase
{
    /**
     * The dunning
     * @var bool|null
     */
    protected ?bool $dunning = null;
    /**
     * The documents
     * @var bool|null
     */
    protected ?bool $documents = null;
    /**
     * The fibu
     * @var bool|null
     */
    protected ?bool $fibu = null;
    /**
     * The payment
     * @var bool|null
     */
    protected ?bool $payment = null;
    /**
     * The preventAutoInvoice
     * @var bool|null
     */
    protected ?bool $preventAutoInvoice = null;
    /**
     * Constructor method for lock
     * @uses Lock::setDunning()
     * @uses Lock::setDocuments()
     * @uses Lock::setFibu()
     * @uses Lock::setPayment()
     * @uses Lock::setPreventAutoInvoice()
     * @param bool $dunning
     * @param bool $documents
     * @param bool $fibu
     * @param bool $payment
     * @param bool $preventAutoInvoice
     */
    public function __construct(?bool $dunning = null, ?bool $documents = null, ?bool $fibu = null, ?bool $payment = null, ?bool $preventAutoInvoice = null)
    {
        $this
            ->setDunning($dunning)
            ->setDocuments($documents)
            ->setFibu($fibu)
            ->setPayment($payment)
            ->setPreventAutoInvoice($preventAutoInvoice);
    }
    /**
     * Get dunning value
     * @return bool|null
     */
    public function getDunning(): ?bool
    {
        return $this->dunning;
    }
    /**
     * Set dunning value
     * @param bool $dunning
     * @return \Pggns\MidocoApi\Order\StructType\Lock
     */
    public function setDunning(?bool $dunning = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dunning) && !is_bool($dunning)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dunning, true), gettype($dunning)), __LINE__);
        }
        $this->dunning = $dunning;
        
        return $this;
    }
    /**
     * Get documents value
     * @return bool|null
     */
    public function getDocuments(): ?bool
    {
        return $this->documents;
    }
    /**
     * Set documents value
     * @param bool $documents
     * @return \Pggns\MidocoApi\Order\StructType\Lock
     */
    public function setDocuments(?bool $documents = null): self
    {
        // validation for constraint: boolean
        if (!is_null($documents) && !is_bool($documents)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($documents, true), gettype($documents)), __LINE__);
        }
        $this->documents = $documents;
        
        return $this;
    }
    /**
     * Get fibu value
     * @return bool|null
     */
    public function getFibu(): ?bool
    {
        return $this->fibu;
    }
    /**
     * Set fibu value
     * @param bool $fibu
     * @return \Pggns\MidocoApi\Order\StructType\Lock
     */
    public function setFibu(?bool $fibu = null): self
    {
        // validation for constraint: boolean
        if (!is_null($fibu) && !is_bool($fibu)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($fibu, true), gettype($fibu)), __LINE__);
        }
        $this->fibu = $fibu;
        
        return $this;
    }
    /**
     * Get payment value
     * @return bool|null
     */
    public function getPayment(): ?bool
    {
        return $this->payment;
    }
    /**
     * Set payment value
     * @param bool $payment
     * @return \Pggns\MidocoApi\Order\StructType\Lock
     */
    public function setPayment(?bool $payment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($payment) && !is_bool($payment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($payment, true), gettype($payment)), __LINE__);
        }
        $this->payment = $payment;
        
        return $this;
    }
    /**
     * Get preventAutoInvoice value
     * @return bool|null
     */
    public function getPreventAutoInvoice(): ?bool
    {
        return $this->preventAutoInvoice;
    }
    /**
     * Set preventAutoInvoice value
     * @param bool $preventAutoInvoice
     * @return \Pggns\MidocoApi\Order\StructType\Lock
     */
    public function setPreventAutoInvoice(?bool $preventAutoInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($preventAutoInvoice) && !is_bool($preventAutoInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventAutoInvoice, true), gettype($preventAutoInvoice)), __LINE__);
        }
        $this->preventAutoInvoice = $preventAutoInvoice;
        
        return $this;
    }
}
