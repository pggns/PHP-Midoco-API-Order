<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for special-service-request StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Special_service_request extends AbstractStructBase
{
    /**
     * The person_assignment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $person_assignment = null;
    /**
     * The ssr_id
     * @var int|null
     */
    protected ?int $ssr_id = null;
    /**
     * The code
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The seat
     * @var string|null
     */
    protected ?string $seat = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * Constructor method for special-service-request
     * @uses Special_service_request::setPerson_assignment()
     * @uses Special_service_request::setSsr_id()
     * @uses Special_service_request::setCode()
     * @uses Special_service_request::setDescription()
     * @uses Special_service_request::setSeat()
     * @uses Special_service_request::setStatus()
     * @param string $person_assignment
     * @param int $ssr_id
     * @param string $code
     * @param string $description
     * @param string $seat
     * @param string $status
     */
    public function __construct(?string $person_assignment = null, ?int $ssr_id = null, ?string $code = null, ?string $description = null, ?string $seat = null, ?string $status = null)
    {
        $this
            ->setPerson_assignment($person_assignment)
            ->setSsr_id($ssr_id)
            ->setCode($code)
            ->setDescription($description)
            ->setSeat($seat)
            ->setStatus($status);
    }
    /**
     * Get person_assignment value
     * @return string|null
     */
    public function getPerson_assignment(): ?string
    {
        return $this->{'person-assignment'};
    }
    /**
     * Set person_assignment value
     * @param string $person_assignment
     * @return \Pggns\MidocoApi\Order\StructType\Special_service_request
     */
    public function setPerson_assignment(?string $person_assignment = null): self
    {
        // validation for constraint: string
        if (!is_null($person_assignment) && !is_string($person_assignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($person_assignment, true), gettype($person_assignment)), __LINE__);
        }
        $this->person_assignment = $this->{'person-assignment'} = $person_assignment;
        
        return $this;
    }
    /**
     * Get ssr_id value
     * @return int|null
     */
    public function getSsr_id(): ?int
    {
        return $this->{'ssr-id'};
    }
    /**
     * Set ssr_id value
     * @param int $ssr_id
     * @return \Pggns\MidocoApi\Order\StructType\Special_service_request
     */
    public function setSsr_id(?int $ssr_id = null): self
    {
        // validation for constraint: int
        if (!is_null($ssr_id) && !(is_int($ssr_id) || ctype_digit($ssr_id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ssr_id, true), gettype($ssr_id)), __LINE__);
        }
        $this->ssr_id = $this->{'ssr-id'} = $ssr_id;
        
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Pggns\MidocoApi\Order\StructType\Special_service_request
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\Special_service_request
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get seat value
     * @return string|null
     */
    public function getSeat(): ?string
    {
        return $this->seat;
    }
    /**
     * Set seat value
     * @param string $seat
     * @return \Pggns\MidocoApi\Order\StructType\Special_service_request
     */
    public function setSeat(?string $seat = null): self
    {
        // validation for constraint: string
        if (!is_null($seat) && !is_string($seat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seat, true), gettype($seat)), __LINE__);
        }
        $this->seat = $seat;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\Special_service_request
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
}
