<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for specialServiceRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SpecialServiceRequest_1 extends AbstractStructBase
{
    /**
     * The personAssignment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $personAssignment = null;
    /**
     * The ssrId
     * @var int|null
     */
    protected ?int $ssrId = null;
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
     * Constructor method for specialServiceRequest
     * @uses SpecialServiceRequest_1::setPersonAssignment()
     * @uses SpecialServiceRequest_1::setSsrId()
     * @uses SpecialServiceRequest_1::setCode()
     * @uses SpecialServiceRequest_1::setDescription()
     * @uses SpecialServiceRequest_1::setSeat()
     * @uses SpecialServiceRequest_1::setStatus()
     * @param string $personAssignment
     * @param int $ssrId
     * @param string $code
     * @param string $description
     * @param string $seat
     * @param string $status
     */
    public function __construct(?string $personAssignment = null, ?int $ssrId = null, ?string $code = null, ?string $description = null, ?string $seat = null, ?string $status = null)
    {
        $this
            ->setPersonAssignment($personAssignment)
            ->setSsrId($ssrId)
            ->setCode($code)
            ->setDescription($description)
            ->setSeat($seat)
            ->setStatus($status);
    }
    /**
     * Get personAssignment value
     * @return string|null
     */
    public function getPersonAssignment(): ?string
    {
        return $this->personAssignment;
    }
    /**
     * Set personAssignment value
     * @param string $personAssignment
     * @return \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1
     */
    public function setPersonAssignment(?string $personAssignment = null): self
    {
        // validation for constraint: string
        if (!is_null($personAssignment) && !is_string($personAssignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personAssignment, true), gettype($personAssignment)), __LINE__);
        }
        $this->personAssignment = $personAssignment;
        
        return $this;
    }
    /**
     * Get ssrId value
     * @return int|null
     */
    public function getSsrId(): ?int
    {
        return $this->ssrId;
    }
    /**
     * Set ssrId value
     * @param int $ssrId
     * @return \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1
     */
    public function setSsrId(?int $ssrId = null): self
    {
        // validation for constraint: int
        if (!is_null($ssrId) && !(is_int($ssrId) || ctype_digit($ssrId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ssrId, true), gettype($ssrId)), __LINE__);
        }
        $this->ssrId = $ssrId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1
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
     * @return \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1
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
     * @return \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1
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
     * @return \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1
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
