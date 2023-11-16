<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for agencyIdentity StructType
 * Meta information extracted from the WSDL
 * - documentation: Identification of the booking agency. Important when the loginInformation do not contain the correct information for assigning the data to the midoco OrgUnit.
 * @subpackage Structs
 */
class AgencyIdentity extends AbstractStructBase
{
    /**
     * The crsAgencyNo
     * Meta information extracted from the WSDL
     * - documentation: This field should contain the agency id used for reservation of this booking (like a Amadeus agency id)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $crsAgencyNo = null;
    /**
     * The crsType
     * Meta information extracted from the WSDL
     * - documentation: The type of the agency no mentioned above (e.g. AMADEUS, MERLIN etc).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $crsType = null;
    /**
     * The crsExpedientCode
     * Meta information extracted from the WSDL
     * - documentation: in case a known code for the booking agent is set, it should be set in this place
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $crsExpedientCode = null;
    /**
     * The midocoUserId
     * Meta information extracted from the WSDL
     * - documentation: in case a known user_id for the booking agent is set, it should be set in this place
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $midocoUserId = null;
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
     * - documentation: used to declare a responsible partner(mediator) for this booking, internal use for commission calculation. Normally, this is used in case of a whiteLabel portal, where the customer can choose an agency in his surrounding
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $agent = null;
    /**
     * The agentAffiliate
     * Meta information extracted from the WSDL
     * - documentation: sub agent
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $agentAffiliate = null;
    /**
     * The agency_no
     * Meta information extracted from the WSDL
     * - documentation: in case of a message for a supplier (midoco in supplierMode), set agency_no of booking agency here for commission calculation
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $agency_no = null;
    /**
     * The agency_commission_amount
     * Meta information extracted from the WSDL
     * - documentation: in case of a message for a supplier, add agency commission here, if preCalculated. Midoco will calculate commission amount otherwise by agency_no and commission_id using masterDate. Empty will be treated as 0, for no preCalculated
     * agencyCommission for order element should not be sent at all
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $agency_commission_amount = null;
    /**
     * The agencyCommissionCurrency
     * Meta information extracted from the WSDL
     * - documentation: the commission currency - use only for foreign currency agency settlement
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $agencyCommissionCurrency = null;
    /**
     * The invoicing_mode
     * Meta information extracted from the WSDL
     * - documentation: Whom to charge for this bookings: "CUSTOMER" or "AGENCY". Only valid in supplierMode.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $invoicing_mode = null;
    /**
     * The underAgencyId
     * Meta information extracted from the WSDL
     * - documentation: The id of the subAgency (underAgency) of the agency
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
     * Constructor method for agencyIdentity
     * @uses AgencyIdentity::setCrsAgencyNo()
     * @uses AgencyIdentity::setCrsType()
     * @uses AgencyIdentity::setCrsExpedientCode()
     * @uses AgencyIdentity::setMidocoUserId()
     * @uses AgencyIdentity::setSubagency()
     * @uses AgencyIdentity::setAgent()
     * @uses AgencyIdentity::setAgentAffiliate()
     * @uses AgencyIdentity::setAgency_no()
     * @uses AgencyIdentity::setAgency_commission_amount()
     * @uses AgencyIdentity::setAgencyCommissionCurrency()
     * @uses AgencyIdentity::setInvoicing_mode()
     * @uses AgencyIdentity::setUnderAgencyId()
     * @uses AgencyIdentity::setAgencyInfo()
     * @param string $crsAgencyNo
     * @param string $crsType
     * @param string $crsExpedientCode
     * @param int $midocoUserId
     * @param string $subagency
     * @param string $agent
     * @param string $agentAffiliate
     * @param string $agency_no
     * @param float $agency_commission_amount
     * @param string $agencyCommissionCurrency
     * @param string $invoicing_mode
     * @param string $underAgencyId
     * @param \Pggns\MidocoApi\Order\StructType\AgencyInfoType $agencyInfo
     */
    public function __construct(?string $crsAgencyNo = null, ?string $crsType = null, ?string $crsExpedientCode = null, ?int $midocoUserId = null, ?string $subagency = null, ?string $agent = null, ?string $agentAffiliate = null, ?string $agency_no = null, ?float $agency_commission_amount = null, ?string $agencyCommissionCurrency = null, ?string $invoicing_mode = null, ?string $underAgencyId = null, ?\Pggns\MidocoApi\Order\StructType\AgencyInfoType $agencyInfo = null)
    {
        $this
            ->setCrsAgencyNo($crsAgencyNo)
            ->setCrsType($crsType)
            ->setCrsExpedientCode($crsExpedientCode)
            ->setMidocoUserId($midocoUserId)
            ->setSubagency($subagency)
            ->setAgent($agent)
            ->setAgentAffiliate($agentAffiliate)
            ->setAgency_no($agency_no)
            ->setAgency_commission_amount($agency_commission_amount)
            ->setAgencyCommissionCurrency($agencyCommissionCurrency)
            ->setInvoicing_mode($invoicing_mode)
            ->setUnderAgencyId($underAgencyId)
            ->setAgencyInfo($agencyInfo);
    }
    /**
     * Get crsAgencyNo value
     * @return string|null
     */
    public function getCrsAgencyNo(): ?string
    {
        return $this->crsAgencyNo;
    }
    /**
     * Set crsAgencyNo value
     * @param string $crsAgencyNo
     * @return \Pggns\MidocoApi\Order\StructType\AgencyIdentity
     */
    public function setCrsAgencyNo(?string $crsAgencyNo = null): self
    {
        // validation for constraint: string
        if (!is_null($crsAgencyNo) && !is_string($crsAgencyNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crsAgencyNo, true), gettype($crsAgencyNo)), __LINE__);
        }
        $this->crsAgencyNo = $crsAgencyNo;
        
        return $this;
    }
    /**
     * Get crsType value
     * @return string|null
     */
    public function getCrsType(): ?string
    {
        return $this->crsType;
    }
    /**
     * Set crsType value
     * @param string $crsType
     * @return \Pggns\MidocoApi\Order\StructType\AgencyIdentity
     */
    public function setCrsType(?string $crsType = null): self
    {
        // validation for constraint: string
        if (!is_null($crsType) && !is_string($crsType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crsType, true), gettype($crsType)), __LINE__);
        }
        $this->crsType = $crsType;
        
        return $this;
    }
    /**
     * Get crsExpedientCode value
     * @return string|null
     */
    public function getCrsExpedientCode(): ?string
    {
        return $this->crsExpedientCode;
    }
    /**
     * Set crsExpedientCode value
     * @param string $crsExpedientCode
     * @return \Pggns\MidocoApi\Order\StructType\AgencyIdentity
     */
    public function setCrsExpedientCode(?string $crsExpedientCode = null): self
    {
        // validation for constraint: string
        if (!is_null($crsExpedientCode) && !is_string($crsExpedientCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crsExpedientCode, true), gettype($crsExpedientCode)), __LINE__);
        }
        $this->crsExpedientCode = $crsExpedientCode;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyIdentity
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyIdentity
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyIdentity
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
     * Get agentAffiliate value
     * @return string|null
     */
    public function getAgentAffiliate(): ?string
    {
        return $this->agentAffiliate;
    }
    /**
     * Set agentAffiliate value
     * @param string $agentAffiliate
     * @return \Pggns\MidocoApi\Order\StructType\AgencyIdentity
     */
    public function setAgentAffiliate(?string $agentAffiliate = null): self
    {
        // validation for constraint: string
        if (!is_null($agentAffiliate) && !is_string($agentAffiliate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agentAffiliate, true), gettype($agentAffiliate)), __LINE__);
        }
        $this->agentAffiliate = $agentAffiliate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyIdentity
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyIdentity
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
     * Get agencyCommissionCurrency value
     * @return string|null
     */
    public function getAgencyCommissionCurrency(): ?string
    {
        return $this->agencyCommissionCurrency;
    }
    /**
     * Set agencyCommissionCurrency value
     * @param string $agencyCommissionCurrency
     * @return \Pggns\MidocoApi\Order\StructType\AgencyIdentity
     */
    public function setAgencyCommissionCurrency(?string $agencyCommissionCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyCommissionCurrency) && !is_string($agencyCommissionCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyCommissionCurrency, true), gettype($agencyCommissionCurrency)), __LINE__);
        }
        $this->agencyCommissionCurrency = $agencyCommissionCurrency;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyIdentity
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyIdentity
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyIdentity
     */
    public function setAgencyInfo(?\Pggns\MidocoApi\Order\StructType\AgencyInfoType $agencyInfo = null): self
    {
        $this->AgencyInfo = $agencyInfo;
        
        return $this;
    }
}
