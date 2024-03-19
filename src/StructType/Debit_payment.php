<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for debit-payment StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Debit_payment extends AbstractStructBase
{
    /**
     * The bank_name
     * @var string|null
     */
    protected ?string $bank_name = null;
    /**
     * The bank_number
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bank_number = null;
    /**
     * The account_no
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $account_no = null;
    /**
     * The account_owner
     * @var string|null
     */
    protected ?string $account_owner = null;
    /**
     * The bank_country
     * Meta information extracted from the WSDL
     * - default: DE
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bank_country = null;
    /**
     * The is_iban
     * Meta information extracted from the WSDL
     * - documentation: this field will be removed in the future release
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $is_iban = null;
    /**
     * The iban
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $iban = null;
    /**
     * The swift_bic_code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $swift_bic_code = null;
    /**
     * The bank_city
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bank_city = null;
    /**
     * The bank_street
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bank_street = null;
    /**
     * The mandate_reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mandate_reference = null;
    /**
     * Constructor method for debit-payment
     * @uses Debit_payment::setBank_name()
     * @uses Debit_payment::setBank_number()
     * @uses Debit_payment::setAccount_no()
     * @uses Debit_payment::setAccount_owner()
     * @uses Debit_payment::setBank_country()
     * @uses Debit_payment::setIs_iban()
     * @uses Debit_payment::setIban()
     * @uses Debit_payment::setSwift_bic_code()
     * @uses Debit_payment::setBank_city()
     * @uses Debit_payment::setBank_street()
     * @uses Debit_payment::setMandate_reference()
     * @param string $bank_name
     * @param string $bank_number
     * @param string $account_no
     * @param string $account_owner
     * @param string $bank_country
     * @param bool $is_iban
     * @param string $iban
     * @param string $swift_bic_code
     * @param string $bank_city
     * @param string $bank_street
     * @param string $mandate_reference
     */
    public function __construct(?string $bank_name = null, ?string $bank_number = null, ?string $account_no = null, ?string $account_owner = null, ?string $bank_country = 'DE', ?bool $is_iban = false, ?string $iban = null, ?string $swift_bic_code = null, ?string $bank_city = null, ?string $bank_street = null, ?string $mandate_reference = null)
    {
        $this
            ->setBank_name($bank_name)
            ->setBank_number($bank_number)
            ->setAccount_no($account_no)
            ->setAccount_owner($account_owner)
            ->setBank_country($bank_country)
            ->setIs_iban($is_iban)
            ->setIban($iban)
            ->setSwift_bic_code($swift_bic_code)
            ->setBank_city($bank_city)
            ->setBank_street($bank_street)
            ->setMandate_reference($mandate_reference);
    }
    /**
     * Get bank_name value
     * @return string|null
     */
    public function getBank_name(): ?string
    {
        return $this->{'bank-name'};
    }
    /**
     * Set bank_name value
     * @param string $bank_name
     * @return \Pggns\MidocoApi\Order\StructType\Debit_payment
     */
    public function setBank_name(?string $bank_name = null): self
    {
        // validation for constraint: string
        if (!is_null($bank_name) && !is_string($bank_name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bank_name, true), gettype($bank_name)), __LINE__);
        }
        $this->bank_name = $this->{'bank-name'} = $bank_name;
        
        return $this;
    }
    /**
     * Get bank_number value
     * @return string|null
     */
    public function getBank_number(): ?string
    {
        return $this->{'bank-number'};
    }
    /**
     * Set bank_number value
     * @param string $bank_number
     * @return \Pggns\MidocoApi\Order\StructType\Debit_payment
     */
    public function setBank_number(?string $bank_number = null): self
    {
        // validation for constraint: string
        if (!is_null($bank_number) && !is_string($bank_number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bank_number, true), gettype($bank_number)), __LINE__);
        }
        $this->bank_number = $this->{'bank-number'} = $bank_number;
        
        return $this;
    }
    /**
     * Get account_no value
     * @return string|null
     */
    public function getAccount_no(): ?string
    {
        return $this->{'account-no'};
    }
    /**
     * Set account_no value
     * @param string $account_no
     * @return \Pggns\MidocoApi\Order\StructType\Debit_payment
     */
    public function setAccount_no(?string $account_no = null): self
    {
        // validation for constraint: string
        if (!is_null($account_no) && !is_string($account_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($account_no, true), gettype($account_no)), __LINE__);
        }
        $this->account_no = $this->{'account-no'} = $account_no;
        
        return $this;
    }
    /**
     * Get account_owner value
     * @return string|null
     */
    public function getAccount_owner(): ?string
    {
        return $this->{'account-owner'};
    }
    /**
     * Set account_owner value
     * @param string $account_owner
     * @return \Pggns\MidocoApi\Order\StructType\Debit_payment
     */
    public function setAccount_owner(?string $account_owner = null): self
    {
        // validation for constraint: string
        if (!is_null($account_owner) && !is_string($account_owner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($account_owner, true), gettype($account_owner)), __LINE__);
        }
        $this->account_owner = $this->{'account-owner'} = $account_owner;
        
        return $this;
    }
    /**
     * Get bank_country value
     * @return string|null
     */
    public function getBank_country(): ?string
    {
        return $this->{'bank-country'};
    }
    /**
     * Set bank_country value
     * @param string $bank_country
     * @return \Pggns\MidocoApi\Order\StructType\Debit_payment
     */
    public function setBank_country(?string $bank_country = 'DE'): self
    {
        // validation for constraint: string
        if (!is_null($bank_country) && !is_string($bank_country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bank_country, true), gettype($bank_country)), __LINE__);
        }
        $this->bank_country = $this->{'bank-country'} = $bank_country;
        
        return $this;
    }
    /**
     * Get is_iban value
     * @return bool|null
     */
    public function getIs_iban(): ?bool
    {
        return $this->{'is-iban'};
    }
    /**
     * Set is_iban value
     * @param bool $is_iban
     * @return \Pggns\MidocoApi\Order\StructType\Debit_payment
     */
    public function setIs_iban(?bool $is_iban = false): self
    {
        // validation for constraint: boolean
        if (!is_null($is_iban) && !is_bool($is_iban)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($is_iban, true), gettype($is_iban)), __LINE__);
        }
        $this->is_iban = $this->{'is-iban'} = $is_iban;
        
        return $this;
    }
    /**
     * Get iban value
     * @return string|null
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }
    /**
     * Set iban value
     * @param string $iban
     * @return \Pggns\MidocoApi\Order\StructType\Debit_payment
     */
    public function setIban(?string $iban = null): self
    {
        // validation for constraint: string
        if (!is_null($iban) && !is_string($iban)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iban, true), gettype($iban)), __LINE__);
        }
        $this->iban = $iban;
        
        return $this;
    }
    /**
     * Get swift_bic_code value
     * @return string|null
     */
    public function getSwift_bic_code(): ?string
    {
        return $this->{'swift-bic-code'};
    }
    /**
     * Set swift_bic_code value
     * @param string $swift_bic_code
     * @return \Pggns\MidocoApi\Order\StructType\Debit_payment
     */
    public function setSwift_bic_code(?string $swift_bic_code = null): self
    {
        // validation for constraint: string
        if (!is_null($swift_bic_code) && !is_string($swift_bic_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($swift_bic_code, true), gettype($swift_bic_code)), __LINE__);
        }
        $this->swift_bic_code = $this->{'swift-bic-code'} = $swift_bic_code;
        
        return $this;
    }
    /**
     * Get bank_city value
     * @return string|null
     */
    public function getBank_city(): ?string
    {
        return $this->{'bank-city'};
    }
    /**
     * Set bank_city value
     * @param string $bank_city
     * @return \Pggns\MidocoApi\Order\StructType\Debit_payment
     */
    public function setBank_city(?string $bank_city = null): self
    {
        // validation for constraint: string
        if (!is_null($bank_city) && !is_string($bank_city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bank_city, true), gettype($bank_city)), __LINE__);
        }
        $this->bank_city = $this->{'bank-city'} = $bank_city;
        
        return $this;
    }
    /**
     * Get bank_street value
     * @return string|null
     */
    public function getBank_street(): ?string
    {
        return $this->{'bank-street'};
    }
    /**
     * Set bank_street value
     * @param string $bank_street
     * @return \Pggns\MidocoApi\Order\StructType\Debit_payment
     */
    public function setBank_street(?string $bank_street = null): self
    {
        // validation for constraint: string
        if (!is_null($bank_street) && !is_string($bank_street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bank_street, true), gettype($bank_street)), __LINE__);
        }
        $this->bank_street = $this->{'bank-street'} = $bank_street;
        
        return $this;
    }
    /**
     * Get mandate_reference value
     * @return string|null
     */
    public function getMandate_reference(): ?string
    {
        return $this->{'mandate-reference'};
    }
    /**
     * Set mandate_reference value
     * @param string $mandate_reference
     * @return \Pggns\MidocoApi\Order\StructType\Debit_payment
     */
    public function setMandate_reference(?string $mandate_reference = null): self
    {
        // validation for constraint: string
        if (!is_null($mandate_reference) && !is_string($mandate_reference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandate_reference, true), gettype($mandate_reference)), __LINE__);
        }
        $this->mandate_reference = $this->{'mandate-reference'} = $mandate_reference;
        
        return $this;
    }
}
