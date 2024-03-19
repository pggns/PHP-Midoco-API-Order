<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for agency-identity StructType
 * Meta information extracted from the WSDL
 * - documentation: Identification of the booking agency. Important when the login-information do not contain the correct information for assigning the data to the midoco OrgUnit.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Agency_identity extends AbstractStructBase
{
    /**
     * The crs_agency_no
     * Meta information extracted from the WSDL
     * - documentation: This field should contain the agency id used for reservation of this booking (like a Amadeus agency id)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $crs_agency_no = null;
    /**
     * The crs_type
     * Meta information extracted from the WSDL
     * - documentation: The type of the agency no mentioned above (e.g. AMADEUS, MERLIN etc).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $crs_type = null;
    /**
     * The crs_expedient_code
     * Meta information extracted from the WSDL
     * - documentation: in case a known code for the booking agent is set, it should be set in this place
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $crs_expedient_code = null;
    /**
     * The midoco_user_id
     * Meta information extracted from the WSDL
     * - documentation: in case a known user_id for the booking agent is set, it should be set in this place
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $midoco_user_id = null;
    /**
     * The subagency
     * Meta information extracted from the WSDL
     * - documentation: In case there is a subagency booking (the main agency no is used to perform a booking for a subagency), the subagency agency id is to be mentioned here.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $subagency = null;
    /**
     * The agent
     * Meta information extracted from the WSDL
     * - documentation: used to declare a responsible partner(mediator) for this booking, internal use for commission calculation. Normally, this is used in case of a white-label portal, where the customer can choose an agency in his surrounding
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $agent = null;
    /**
     * The agent_affiliate
     * Meta information extracted from the WSDL
     * - documentation: sub agent
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $agent_affiliate = null;
    /**
     * The agency_no
     * Meta information extracted from the WSDL
     * - documentation: in case of a message for a supplier (midoco in supplier-mode), set agency_no of booking agency here for commission calculation
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $agency_no = null;
    /**
     * The agency_commission_amount
     * Meta information extracted from the WSDL
     * - documentation: in case of a message for a supplier, add agency commission here, if pre-calculated. Midoco will calculate commission amount otherwise by agency_no and commission_id using master-date. Empty will be treated as 0, for no pre-calculated
     * agency-commission for order element should not be sent at all
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $agency_commission_amount = null;
    /**
     * The agency_commission_currency
     * Meta information extracted from the WSDL
     * - documentation: the commission currency - use only for foreign currency agency settlement
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $agency_commission_currency = null;
    /**
     * The invoicing_mode
     * Meta information extracted from the WSDL
     * - documentation: Whom to charge for this bookings: "CUSTOMER" or "AGENCY". Only valid in supplier-mode.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $invoicing_mode = null;
    /**
     * The underAgencyId
     * Meta information extracted from the WSDL
     * - documentation: The id of the sub-agency (under-agency) of the agency
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $underAgencyId = null;
    /**
     * The AgencyInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AgencyInfo
     * @var \Pggns\MidocoApi\Order\StructType\AgencyInfoType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\AgencyInfoType $AgencyInfo = null;
    /**
     * Constructor method for agency-identity
     * @uses Agency_identity::setCrs_agency_no()
     * @uses Agency_identity::setCrs_type()
     * @uses Agency_identity::setCrs_expedient_code()
     * @uses Agency_identity::setMidoco_user_id()
     * @uses Agency_identity::setSubagency()
     * @uses Agency_identity::setAgent()
     * @uses Agency_identity::setAgent_affiliate()
     * @uses Agency_identity::setAgency_no()
     * @uses Agency_identity::setAgency_commission_amount()
     * @uses Agency_identity::setAgency_commission_currency()
     * @uses Agency_identity::setInvoicing_mode()
     * @uses Agency_identity::setUnderAgencyId()
     * @uses Agency_identity::setAgencyInfo()
     * @param string $crs_agency_no
     * @param string $crs_type
     * @param string $crs_expedient_code
     * @param int $midoco_user_id
     * @param string $subagency
     * @param string $agent
     * @param string $agent_affiliate
     * @param string $agency_no
     * @param float $agency_commission_amount
     * @param string $agency_commission_currency
     * @param string $invoicing_mode
     * @param string $underAgencyId
     * @param \Pggns\MidocoApi\Order\StructType\AgencyInfoType $agencyInfo
     */
    public function __construct(?string $crs_agency_no = null, ?string $crs_type = null, ?string $crs_expedient_code = null, ?int $midoco_user_id = null, ?string $subagency = null, ?string $agent = null, ?string $agent_affiliate = null, ?string $agency_no = null, ?float $agency_commission_amount = null, ?string $agency_commission_currency = null, ?string $invoicing_mode = null, ?string $underAgencyId = null, ?\Pggns\MidocoApi\Order\StructType\AgencyInfoType $agencyInfo = null)
    {
        $this
            ->setCrs_agency_no($crs_agency_no)
            ->setCrs_type($crs_type)
            ->setCrs_expedient_code($crs_expedient_code)
            ->setMidoco_user_id($midoco_user_id)
            ->setSubagency($subagency)
            ->setAgent($agent)
            ->setAgent_affiliate($agent_affiliate)
            ->setAgency_no($agency_no)
            ->setAgency_commission_amount($agency_commission_amount)
            ->setAgency_commission_currency($agency_commission_currency)
            ->setInvoicing_mode($invoicing_mode)
            ->setUnderAgencyId($underAgencyId)
            ->setAgencyInfo($agencyInfo);
    }
    /**
     * Get crs_agency_no value
     * @return string|null
     */
    public function getCrs_agency_no(): ?string
    {
        return $this->{'crs-agency-no'};
    }
    /**
     * Set crs_agency_no value
     * @param string $crs_agency_no
     * @return \Pggns\MidocoApi\Order\StructType\Agency_identity
     */
    public function setCrs_agency_no(?string $crs_agency_no = null): self
    {
        // validation for constraint: string
        if (!is_null($crs_agency_no) && !is_string($crs_agency_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crs_agency_no, true), gettype($crs_agency_no)), __LINE__);
        }
        $this->crs_agency_no = $this->{'crs-agency-no'} = $crs_agency_no;
        
        return $this;
    }
    /**
     * Get crs_type value
     * @return string|null
     */
    public function getCrs_type(): ?string
    {
        return $this->{'crs-type'};
    }
    /**
     * Set crs_type value
     * @param string $crs_type
     * @return \Pggns\MidocoApi\Order\StructType\Agency_identity
     */
    public function setCrs_type(?string $crs_type = null): self
    {
        // validation for constraint: string
        if (!is_null($crs_type) && !is_string($crs_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crs_type, true), gettype($crs_type)), __LINE__);
        }
        $this->crs_type = $this->{'crs-type'} = $crs_type;
        
        return $this;
    }
    /**
     * Get crs_expedient_code value
     * @return string|null
     */
    public function getCrs_expedient_code(): ?string
    {
        return $this->{'crs-expedient-code'};
    }
    /**
     * Set crs_expedient_code value
     * @param string $crs_expedient_code
     * @return \Pggns\MidocoApi\Order\StructType\Agency_identity
     */
    public function setCrs_expedient_code(?string $crs_expedient_code = null): self
    {
        // validation for constraint: string
        if (!is_null($crs_expedient_code) && !is_string($crs_expedient_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crs_expedient_code, true), gettype($crs_expedient_code)), __LINE__);
        }
        $this->crs_expedient_code = $this->{'crs-expedient-code'} = $crs_expedient_code;
        
        return $this;
    }
    /**
     * Get midoco_user_id value
     * @return int|null
     */
    public function getMidoco_user_id(): ?int
    {
        return $this->{'midoco-user-id'};
    }
    /**
     * Set midoco_user_id value
     * @param int $midoco_user_id
     * @return \Pggns\MidocoApi\Order\StructType\Agency_identity
     */
    public function setMidoco_user_id(?int $midoco_user_id = null): self
    {
        // validation for constraint: int
        if (!is_null($midoco_user_id) && !(is_int($midoco_user_id) || ctype_digit($midoco_user_id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midoco_user_id, true), gettype($midoco_user_id)), __LINE__);
        }
        $this->midoco_user_id = $this->{'midoco-user-id'} = $midoco_user_id;
        
        return $this;
    }
    /**
     * Get subagency value
     * @return string|null
     */
    public function getSubagency(): ?string
    {
        return $this->subagency;
    }
    /**
     * Set subagency value
     * @param string $subagency
     * @return \Pggns\MidocoApi\Order\StructType\Agency_identity
     */
    public function setSubagency(?string $subagency = null): self
    {
        // validation for constraint: string
        if (!is_null($subagency) && !is_string($subagency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subagency, true), gettype($subagency)), __LINE__);
        }
        $this->subagency = $subagency;
        
        return $this;
    }
    /**
     * Get agent value
     * @return string|null
     */
    public function getAgent(): ?string
    {
        return $this->agent;
    }
    /**
     * Set agent value
     * @param string $agent
     * @return \Pggns\MidocoApi\Order\StructType\Agency_identity
     */
    public function setAgent(?string $agent = null): self
    {
        // validation for constraint: string
        if (!is_null($agent) && !is_string($agent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agent, true), gettype($agent)), __LINE__);
        }
        $this->agent = $agent;
        
        return $this;
    }
    /**
     * Get agent_affiliate value
     * @return string|null
     */
    public function getAgent_affiliate(): ?string
    {
        return $this->{'agent-affiliate'};
    }
    /**
     * Set agent_affiliate value
     * @param string $agent_affiliate
     * @return \Pggns\MidocoApi\Order\StructType\Agency_identity
     */
    public function setAgent_affiliate(?string $agent_affiliate = null): self
    {
        // validation for constraint: string
        if (!is_null($agent_affiliate) && !is_string($agent_affiliate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agent_affiliate, true), gettype($agent_affiliate)), __LINE__);
        }
        $this->agent_affiliate = $this->{'agent-affiliate'} = $agent_affiliate;
        
        return $this;
    }
    /**
     * Get agency_no value
     * @return string|null
     */
    public function getAgency_no(): ?string
    {
        return $this->agency_no;
    }
    /**
     * Set agency_no value
     * @param string $agency_no
     * @return \Pggns\MidocoApi\Order\StructType\Agency_identity
     */
    public function setAgency_no(?string $agency_no = null): self
    {
        // validation for constraint: string
        if (!is_null($agency_no) && !is_string($agency_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agency_no, true), gettype($agency_no)), __LINE__);
        }
        $this->agency_no = $agency_no;
        
        return $this;
    }
    /**
     * Get agency_commission_amount value
     * @return float|null
     */
    public function getAgency_commission_amount(): ?float
    {
        return $this->agency_commission_amount;
    }
    /**
     * Set agency_commission_amount value
     * @param float $agency_commission_amount
     * @return \Pggns\MidocoApi\Order\StructType\Agency_identity
     */
    public function setAgency_commission_amount(?float $agency_commission_amount = null): self
    {
        // validation for constraint: float
        if (!is_null($agency_commission_amount) && !(is_float($agency_commission_amount) || is_numeric($agency_commission_amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($agency_commission_amount, true), gettype($agency_commission_amount)), __LINE__);
        }
        $this->agency_commission_amount = $agency_commission_amount;
        
        return $this;
    }
    /**
     * Get agency_commission_currency value
     * @return string|null
     */
    public function getAgency_commission_currency(): ?string
    {
        return $this->{'agency-commission-currency'};
    }
    /**
     * Set agency_commission_currency value
     * @param string $agency_commission_currency
     * @return \Pggns\MidocoApi\Order\StructType\Agency_identity
     */
    public function setAgency_commission_currency(?string $agency_commission_currency = null): self
    {
        // validation for constraint: string
        if (!is_null($agency_commission_currency) && !is_string($agency_commission_currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agency_commission_currency, true), gettype($agency_commission_currency)), __LINE__);
        }
        $this->agency_commission_currency = $this->{'agency-commission-currency'} = $agency_commission_currency;
        
        return $this;
    }
    /**
     * Get invoicing_mode value
     * @return string|null
     */
    public function getInvoicing_mode(): ?string
    {
        return $this->invoicing_mode;
    }
    /**
     * Set invoicing_mode value
     * @param string $invoicing_mode
     * @return \Pggns\MidocoApi\Order\StructType\Agency_identity
     */
    public function setInvoicing_mode(?string $invoicing_mode = null): self
    {
        // validation for constraint: string
        if (!is_null($invoicing_mode) && !is_string($invoicing_mode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoicing_mode, true), gettype($invoicing_mode)), __LINE__);
        }
        $this->invoicing_mode = $invoicing_mode;
        
        return $this;
    }
    /**
     * Get underAgencyId value
     * @return string|null
     */
    public function getUnderAgencyId(): ?string
    {
        return $this->underAgencyId;
    }
    /**
     * Set underAgencyId value
     * @param string $underAgencyId
     * @return \Pggns\MidocoApi\Order\StructType\Agency_identity
     */
    public function setUnderAgencyId(?string $underAgencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($underAgencyId) && !is_string($underAgencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($underAgencyId, true), gettype($underAgencyId)), __LINE__);
        }
        $this->underAgencyId = $underAgencyId;
        
        return $this;
    }
    /**
     * Get AgencyInfo value
     * @return \Pggns\MidocoApi\Order\StructType\AgencyInfoType|null
     */
    public function getAgencyInfo(): ?\Pggns\MidocoApi\Order\StructType\AgencyInfoType
    {
        return $this->AgencyInfo;
    }
    /**
     * Set AgencyInfo value
     * @param \Pggns\MidocoApi\Order\StructType\AgencyInfoType $agencyInfo
     * @return \Pggns\MidocoApi\Order\StructType\Agency_identity
     */
    public function setAgencyInfo(?\Pggns\MidocoApi\Order\StructType\AgencyInfoType $agencyInfo = null): self
    {
        $this->AgencyInfo = $agencyInfo;
        
        return $this;
    }
}
