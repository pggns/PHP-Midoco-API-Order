<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TouPacFileChangeNotification StructType
 * Meta information extracted from the WSDL
 * - documentation: The content of the original request for further processing.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TouPacFileChangeNotification extends AbstractStructBase
{
    /**
     * The content
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $content;
    /**
     * The version
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * The X_Request_ID
     * @var string|null
     */
    protected ?string $X_Request_ID = null;
    /**
     * The X_Correlation_ID
     * @var string|null
     */
    protected ?string $X_Correlation_ID = null;
    /**
     * The transfer_encoding
     * @var string|null
     */
    protected ?string $transfer_encoding = null;
    /**
     * Constructor method for TouPacFileChangeNotification
     * @uses TouPacFileChangeNotification::setContent()
     * @uses TouPacFileChangeNotification::setVersion()
     * @uses TouPacFileChangeNotification::setX_Request_ID()
     * @uses TouPacFileChangeNotification::setX_Correlation_ID()
     * @uses TouPacFileChangeNotification::setTransfer_encoding()
     * @param string $content
     * @param string $version
     * @param string $x_Request_ID
     * @param string $x_Correlation_ID
     * @param string $transfer_encoding
     */
    public function __construct(string $content, ?string $version = null, ?string $x_Request_ID = null, ?string $x_Correlation_ID = null, ?string $transfer_encoding = null)
    {
        $this
            ->setContent($content)
            ->setVersion($version)
            ->setX_Request_ID($x_Request_ID)
            ->setX_Correlation_ID($x_Correlation_ID)
            ->setTransfer_encoding($transfer_encoding);
    }
    /**
     * Get content value
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
    /**
     * Set content value
     * @param string $content
     * @return \Pggns\MidocoApi\Order\StructType\TouPacFileChangeNotification
     */
    public function setContent(string $content): self
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content, true), gettype($content)), __LINE__);
        }
        $this->content = $content;
        
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \Pggns\MidocoApi\Order\StructType\TouPacFileChangeNotification
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
    /**
     * Get X_Request_ID value
     * @return string|null
     */
    public function getX_Request_ID(): ?string
    {
        return $this->{'X-Request-ID'};
    }
    /**
     * Set X_Request_ID value
     * @param string $x_Request_ID
     * @return \Pggns\MidocoApi\Order\StructType\TouPacFileChangeNotification
     */
    public function setX_Request_ID(?string $x_Request_ID = null): self
    {
        // validation for constraint: string
        if (!is_null($x_Request_ID) && !is_string($x_Request_ID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($x_Request_ID, true), gettype($x_Request_ID)), __LINE__);
        }
        $this->X_Request_ID = $this->{'X-Request-ID'} = $x_Request_ID;
        
        return $this;
    }
    /**
     * Get X_Correlation_ID value
     * @return string|null
     */
    public function getX_Correlation_ID(): ?string
    {
        return $this->{'X-Correlation-ID'};
    }
    /**
     * Set X_Correlation_ID value
     * @param string $x_Correlation_ID
     * @return \Pggns\MidocoApi\Order\StructType\TouPacFileChangeNotification
     */
    public function setX_Correlation_ID(?string $x_Correlation_ID = null): self
    {
        // validation for constraint: string
        if (!is_null($x_Correlation_ID) && !is_string($x_Correlation_ID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($x_Correlation_ID, true), gettype($x_Correlation_ID)), __LINE__);
        }
        $this->X_Correlation_ID = $this->{'X-Correlation-ID'} = $x_Correlation_ID;
        
        return $this;
    }
    /**
     * Get transfer_encoding value
     * @return string|null
     */
    public function getTransfer_encoding(): ?string
    {
        return $this->{'transfer-encoding'};
    }
    /**
     * Set transfer_encoding value
     * @param string $transfer_encoding
     * @return \Pggns\MidocoApi\Order\StructType\TouPacFileChangeNotification
     */
    public function setTransfer_encoding(?string $transfer_encoding = null): self
    {
        // validation for constraint: string
        if (!is_null($transfer_encoding) && !is_string($transfer_encoding)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transfer_encoding, true), gettype($transfer_encoding)), __LINE__);
        }
        $this->transfer_encoding = $this->{'transfer-encoding'} = $transfer_encoding;
        
        return $this;
    }
}
