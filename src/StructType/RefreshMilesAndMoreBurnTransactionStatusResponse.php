<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefreshMilesAndMoreBurnTransactionStatusResponse
 * StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RefreshMilesAndMoreBurnTransactionStatusResponse extends MilesAndMoreBurnTransactionResponseType
{
    /**
     * The documentChanged
     * Meta information extracted from the WSDL
     * - documentation: true, if the billing position was saved. For the GUI that means that the billing document should be reloaded.
     * - default: false
     * @var bool|null
     */
    protected ?bool $documentChanged = null;
    /**
     * The transactionsAuthorized
     * Meta information extracted from the WSDL
     * - documentation: The number of transactions whose status changed to AUTHORIZED
     * @var int|null
     */
    protected ?int $transactionsAuthorized = null;
    /**
     * The transactionsClosed
     * Meta information extracted from the WSDL
     * - documentation: The number of transactions whose status changed from CREATED or AUTHORIZED to one of CANCELLED, CAPTURED, REFUNDED or EXPIRED.
     * @var int|null
     */
    protected ?int $transactionsClosed = null;
    /**
     * The locale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $locale = null;
    /**
     * Constructor method for RefreshMilesAndMoreBurnTransactionStatusResponse
     * @uses RefreshMilesAndMoreBurnTransactionStatusResponse::setDocumentChanged()
     * @uses RefreshMilesAndMoreBurnTransactionStatusResponse::setTransactionsAuthorized()
     * @uses RefreshMilesAndMoreBurnTransactionStatusResponse::setTransactionsClosed()
     * @uses RefreshMilesAndMoreBurnTransactionStatusResponse::setLocale()
     * @param bool $documentChanged
     * @param int $transactionsAuthorized
     * @param int $transactionsClosed
     * @param string $locale
     */
    public function __construct(?bool $documentChanged = false, ?int $transactionsAuthorized = null, ?int $transactionsClosed = null, ?string $locale = null)
    {
        $this
            ->setDocumentChanged($documentChanged)
            ->setTransactionsAuthorized($transactionsAuthorized)
            ->setTransactionsClosed($transactionsClosed)
            ->setLocale($locale);
    }
    /**
     * Get documentChanged value
     * @return bool|null
     */
    public function getDocumentChanged(): ?bool
    {
        return $this->documentChanged;
    }
    /**
     * Set documentChanged value
     * @param bool $documentChanged
     * @return \Pggns\MidocoApi\Order\StructType\RefreshMilesAndMoreBurnTransactionStatusResponse
     */
    public function setDocumentChanged(?bool $documentChanged = false): self
    {
        // validation for constraint: boolean
        if (!is_null($documentChanged) && !is_bool($documentChanged)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($documentChanged, true), gettype($documentChanged)), __LINE__);
        }
        $this->documentChanged = $documentChanged;
        
        return $this;
    }
    /**
     * Get transactionsAuthorized value
     * @return int|null
     */
    public function getTransactionsAuthorized(): ?int
    {
        return $this->transactionsAuthorized;
    }
    /**
     * Set transactionsAuthorized value
     * @param int $transactionsAuthorized
     * @return \Pggns\MidocoApi\Order\StructType\RefreshMilesAndMoreBurnTransactionStatusResponse
     */
    public function setTransactionsAuthorized(?int $transactionsAuthorized = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionsAuthorized) && !(is_int($transactionsAuthorized) || ctype_digit($transactionsAuthorized))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionsAuthorized, true), gettype($transactionsAuthorized)), __LINE__);
        }
        $this->transactionsAuthorized = $transactionsAuthorized;
        
        return $this;
    }
    /**
     * Get transactionsClosed value
     * @return int|null
     */
    public function getTransactionsClosed(): ?int
    {
        return $this->transactionsClosed;
    }
    /**
     * Set transactionsClosed value
     * @param int $transactionsClosed
     * @return \Pggns\MidocoApi\Order\StructType\RefreshMilesAndMoreBurnTransactionStatusResponse
     */
    public function setTransactionsClosed(?int $transactionsClosed = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionsClosed) && !(is_int($transactionsClosed) || ctype_digit($transactionsClosed))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionsClosed, true), gettype($transactionsClosed)), __LINE__);
        }
        $this->transactionsClosed = $transactionsClosed;
        
        return $this;
    }
    /**
     * Get locale value
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }
    /**
     * Set locale value
     * @param string $locale
     * @return \Pggns\MidocoApi\Order\StructType\RefreshMilesAndMoreBurnTransactionStatusResponse
     */
    public function setLocale(?string $locale = null): self
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->locale = $locale;
        
        return $this;
    }
}
