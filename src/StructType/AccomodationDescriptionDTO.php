<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccomodationDescriptionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AccomodationDescriptionDTO extends AbstractStructBase
{
    /**
     * The accomodationCode
     * @var string|null
     */
    protected ?string $accomodationCode = null;
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for AccomodationDescriptionDTO
     * @uses AccomodationDescriptionDTO::setAccomodationCode()
     * @uses AccomodationDescriptionDTO::setCultureId()
     * @uses AccomodationDescriptionDTO::setDescription()
     * @param string $accomodationCode
     * @param string $cultureId
     * @param string $description
     */
    public function __construct(?string $accomodationCode = null, ?string $cultureId = null, ?string $description = null)
    {
        $this
            ->setAccomodationCode($accomodationCode)
            ->setCultureId($cultureId)
            ->setDescription($description);
    }
    /**
     * Get accomodationCode value
     * @return string|null
     */
    public function getAccomodationCode(): ?string
    {
        return $this->accomodationCode;
    }
    /**
     * Set accomodationCode value
     * @param string $accomodationCode
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDescriptionDTO
     */
    public function setAccomodationCode(?string $accomodationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodationCode) && !is_string($accomodationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodationCode, true), gettype($accomodationCode)), __LINE__);
        }
        $this->accomodationCode = $accomodationCode;
        
        return $this;
    }
    /**
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDescriptionDTO
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDescriptionDTO
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
}
