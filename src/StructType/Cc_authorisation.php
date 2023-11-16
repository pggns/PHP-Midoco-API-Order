<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cc-authorisation StructType
 * Meta information extracted from the WSDL
 * - documentation: reference to external cc-authorisation information, not executed inside of midoco, can be used in later capture using cc payment
 * @subpackage Structs
 */
class Cc_authorisation extends AbstractStructBase
{
    /**
     * The auth_code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $auth_code = null;
    /**
     * The auth_amount
     * @var float|null
     */
    protected ?float $auth_amount = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The capture_executed
     * @var bool|null
     */
    protected ?bool $capture_executed = null;
    /**
     * The cc_type
     * @var string|null
     */
    protected ?string $cc_type = null;
    /**
     * The cc_number
     * Meta information extracted from the WSDL
     * - documentation: mandatory for cc payment, not mandatory for paypal via cc Provider
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cc_number = null;
    /**
     * The authorisation_executed
     * Meta information extracted from the WSDL
     * - documentation: authorisation-executed = true, paypal transaction is authenticated and autorised , otherwise only authenticated | not mandatory for cc payment, mandatory for paypal via cc Provider
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $authorisation_executed = null;
    /**
     * The cc_token
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: cc-token
     * @var \Pggns\MidocoApi\Order\StructType\Cc_token|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Cc_token $cc_token = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The transaction_ref_id
     * @var string|null
     */
    protected ?string $transaction_ref_id = null;
    /**
     * Constructor method for cc-authorisation
     * @uses Cc_authorisation::setAuth_code()
     * @uses Cc_authorisation::setAuth_amount()
     * @uses Cc_authorisation::setCurrency()
     * @uses Cc_authorisation::setCapture_executed()
     * @uses Cc_authorisation::setCc_type()
     * @uses Cc_authorisation::setCc_number()
     * @uses Cc_authorisation::setAuthorisation_executed()
     * @uses Cc_authorisation::setCc_token()
     * @uses Cc_authorisation::setPosition()
     * @uses Cc_authorisation::setTransaction_ref_id()
     * @param string $auth_code
     * @param float $auth_amount
     * @param string $currency
     * @param bool $capture_executed
     * @param string $cc_type
     * @param string $cc_number
     * @param bool $authorisation_executed
     * @param \Pggns\MidocoApi\Order\StructType\Cc_token $cc_token
     * @param int $position
     * @param string $transaction_ref_id
     */
    public function __construct(?string $auth_code = null, ?float $auth_amount = null, ?string $currency = null, ?bool $capture_executed = null, ?string $cc_type = null, ?string $cc_number = null, ?bool $authorisation_executed = null, ?\Pggns\MidocoApi\Order\StructType\Cc_token $cc_token = null, ?int $position = null, ?string $transaction_ref_id = null)
    {
        $this
            ->setAuth_code($auth_code)
            ->setAuth_amount($auth_amount)
            ->setCurrency($currency)
            ->setCapture_executed($capture_executed)
            ->setCc_type($cc_type)
            ->setCc_number($cc_number)
            ->setAuthorisation_executed($authorisation_executed)
            ->setCc_token($cc_token)
            ->setPosition($position)
            ->setTransaction_ref_id($transaction_ref_id);
    }
    /**
     * Get auth_code value
     * @return string|null
     */
    public function getAuth_code(): ?string
    {
        return $this->{'auth-code'};
    }
    /**
     * Set auth_code value
     * @param string $auth_code
     * @return \Pggns\MidocoApi\Order\StructType\Cc_authorisation
     */
    public function setAuth_code(?string $auth_code = null): self
    {
        // validation for constraint: string
        if (!is_null($auth_code) && !is_string($auth_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($auth_code, true), gettype($auth_code)), __LINE__);
        }
        $this->auth_code = $this->{'auth-code'} = $auth_code;
        
        return $this;
    }
    /**
     * Get auth_amount value
     * @return float|null
     */
    public function getAuth_amount(): ?float
    {
        return $this->{'auth-amount'};
    }
    /**
     * Set auth_amount value
     * @param float $auth_amount
     * @return \Pggns\MidocoApi\Order\StructType\Cc_authorisation
     */
    public function setAuth_amount(?float $auth_amount = null): self
    {
        // validation for constraint: float
        if (!is_null($auth_amount) && !(is_float($auth_amount) || is_numeric($auth_amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($auth_amount, true), gettype($auth_amount)), __LINE__);
        }
        $this->auth_amount = $this->{'auth-amount'} = $auth_amount;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Order\StructType\Cc_authorisation
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get capture_executed value
     * @return bool|null
     */
    public function getCapture_executed(): ?bool
    {
        return $this->{'capture-executed'};
    }
    /**
     * Set capture_executed value
     * @param bool $capture_executed
     * @return \Pggns\MidocoApi\Order\StructType\Cc_authorisation
     */
    public function setCapture_executed(?bool $capture_executed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($capture_executed) && !is_bool($capture_executed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($capture_executed, true), gettype($capture_executed)), __LINE__);
        }
        $this->capture_executed = $this->{'capture-executed'} = $capture_executed;
        
        return $this;
    }
    /**
     * Get cc_type value
     * @return string|null
     */
    public function getCc_type(): ?string
    {
        return $this->{'cc-type'};
    }
    /**
     * Set cc_type value
     * @param string $cc_type
     * @return \Pggns\MidocoApi\Order\StructType\Cc_authorisation
     */
    public function setCc_type(?string $cc_type = null): self
    {
        // validation for constraint: string
        if (!is_null($cc_type) && !is_string($cc_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cc_type, true), gettype($cc_type)), __LINE__);
        }
        $this->cc_type = $this->{'cc-type'} = $cc_type;
        
        return $this;
    }
    /**
     * Get cc_number value
     * @return string|null
     */
    public function getCc_number(): ?string
    {
        return $this->{'cc-number'};
    }
    /**
     * Set cc_number value
     * @param string $cc_number
     * @return \Pggns\MidocoApi\Order\StructType\Cc_authorisation
     */
    public function setCc_number(?string $cc_number = null): self
    {
        // validation for constraint: string
        if (!is_null($cc_number) && !is_string($cc_number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cc_number, true), gettype($cc_number)), __LINE__);
        }
        $this->cc_number = $this->{'cc-number'} = $cc_number;
        
        return $this;
    }
    /**
     * Get authorisation_executed value
     * @return bool|null
     */
    public function getAuthorisation_executed(): ?bool
    {
        return $this->{'authorisation-executed'};
    }
    /**
     * Set authorisation_executed value
     * @param bool $authorisation_executed
     * @return \Pggns\MidocoApi\Order\StructType\Cc_authorisation
     */
    public function setAuthorisation_executed(?bool $authorisation_executed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($authorisation_executed) && !is_bool($authorisation_executed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($authorisation_executed, true), gettype($authorisation_executed)), __LINE__);
        }
        $this->authorisation_executed = $this->{'authorisation-executed'} = $authorisation_executed;
        
        return $this;
    }
    /**
     * Get cc_token value
     * @return \Pggns\MidocoApi\Order\StructType\Cc_token|null
     */
    public function getCc_token(): ?\Pggns\MidocoApi\Order\StructType\Cc_token
    {
        return $this->{'cc-token'};
    }
    /**
     * Set cc_token value
     * @param \Pggns\MidocoApi\Order\StructType\Cc_token $cc_token
     * @return \Pggns\MidocoApi\Order\StructType\Cc_authorisation
     */
    public function setCc_token(?\Pggns\MidocoApi\Order\StructType\Cc_token $cc_token = null): self
    {
        $this->cc_token = $this->{'cc-token'} = $cc_token;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\Cc_authorisation
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
     * Get transaction_ref_id value
     * @return string|null
     */
    public function getTransaction_ref_id(): ?string
    {
        return $this->{'transaction-ref-id'};
    }
    /**
     * Set transaction_ref_id value
     * @param string $transaction_ref_id
     * @return \Pggns\MidocoApi\Order\StructType\Cc_authorisation
     */
    public function setTransaction_ref_id(?string $transaction_ref_id = null): self
    {
        // validation for constraint: string
        if (!is_null($transaction_ref_id) && !is_string($transaction_ref_id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transaction_ref_id, true), gettype($transaction_ref_id)), __LINE__);
        }
        $this->transaction_ref_id = $this->{'transaction-ref-id'} = $transaction_ref_id;
        
        return $this;
    }
}
