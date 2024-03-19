<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EinvoiceGatewayDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EinvoiceGatewayDTO extends AbstractStructBase
{
    /**
     * The configuration
     * @var string|null
     */
    protected ?string $configuration = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The format
     * @var string|null
     */
    protected ?string $format = null;
    /**
     * The gateway
     * @var string|null
     */
    protected ?string $gateway = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The url
     * @var string|null
     */
    protected ?string $url = null;
    /**
     * Constructor method for EinvoiceGatewayDTO
     * @uses EinvoiceGatewayDTO::setConfiguration()
     * @uses EinvoiceGatewayDTO::setDescription()
     * @uses EinvoiceGatewayDTO::setFormat()
     * @uses EinvoiceGatewayDTO::setGateway()
     * @uses EinvoiceGatewayDTO::setOrgUnit()
     * @uses EinvoiceGatewayDTO::setUrl()
     * @param string $configuration
     * @param string $description
     * @param string $format
     * @param string $gateway
     * @param string $orgUnit
     * @param string $url
     */
    public function __construct(?string $configuration = null, ?string $description = null, ?string $format = null, ?string $gateway = null, ?string $orgUnit = null, ?string $url = null)
    {
        $this
            ->setConfiguration($configuration)
            ->setDescription($description)
            ->setFormat($format)
            ->setGateway($gateway)
            ->setOrgUnit($orgUnit)
            ->setUrl($url);
    }
    /**
     * Get configuration value
     * @return string|null
     */
    public function getConfiguration(): ?string
    {
        return $this->configuration;
    }
    /**
     * Set configuration value
     * @param string $configuration
     * @return \Pggns\MidocoApi\Order\StructType\EinvoiceGatewayDTO
     */
    public function setConfiguration(?string $configuration = null): self
    {
        // validation for constraint: string
        if (!is_null($configuration) && !is_string($configuration)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($configuration, true), gettype($configuration)), __LINE__);
        }
        $this->configuration = $configuration;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\EinvoiceGatewayDTO
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
     * Get format value
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \Pggns\MidocoApi\Order\StructType\EinvoiceGatewayDTO
     */
    public function setFormat(?string $format = null): self
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($format, true), gettype($format)), __LINE__);
        }
        $this->format = $format;
        
        return $this;
    }
    /**
     * Get gateway value
     * @return string|null
     */
    public function getGateway(): ?string
    {
        return $this->gateway;
    }
    /**
     * Set gateway value
     * @param string $gateway
     * @return \Pggns\MidocoApi\Order\StructType\EinvoiceGatewayDTO
     */
    public function setGateway(?string $gateway = null): self
    {
        // validation for constraint: string
        if (!is_null($gateway) && !is_string($gateway)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gateway, true), gettype($gateway)), __LINE__);
        }
        $this->gateway = $gateway;
        
        return $this;
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Order\StructType\EinvoiceGatewayDTO
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
    /**
     * Get url value
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
    /**
     * Set url value
     * @param string $url
     * @return \Pggns\MidocoApi\Order\StructType\EinvoiceGatewayDTO
     */
    public function setUrl(?string $url = null): self
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        $this->url = $url;
        
        return $this;
    }
}
