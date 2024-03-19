<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavePrintjobRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SavePrintjobRequest extends AbstractStructBase
{
    /**
     * The preview
     * @var bool|null
     */
    protected ?bool $preview = null;
    /**
     * The num_copies
     * @var int|null
     */
    protected ?int $num_copies = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The printjob_data
     * @var string|null
     */
    protected ?string $printjob_data = null;
    /**
     * The printjobId
     * @var string|null
     */
    protected ?string $printjobId = null;
    /**
     * The media
     * @var string|null
     */
    protected ?string $media = null;
    /**
     * Constructor method for SavePrintjobRequest
     * @uses SavePrintjobRequest::setPreview()
     * @uses SavePrintjobRequest::setNum_copies()
     * @uses SavePrintjobRequest::setType()
     * @uses SavePrintjobRequest::setPrintjob_data()
     * @uses SavePrintjobRequest::setPrintjobId()
     * @uses SavePrintjobRequest::setMedia()
     * @param bool $preview
     * @param int $num_copies
     * @param string $type
     * @param string $printjob_data
     * @param string $printjobId
     * @param string $media
     */
    public function __construct(?bool $preview = null, ?int $num_copies = null, ?string $type = null, ?string $printjob_data = null, ?string $printjobId = null, ?string $media = null)
    {
        $this
            ->setPreview($preview)
            ->setNum_copies($num_copies)
            ->setType($type)
            ->setPrintjob_data($printjob_data)
            ->setPrintjobId($printjobId)
            ->setMedia($media);
    }
    /**
     * Get preview value
     * @return bool|null
     */
    public function getPreview(): ?bool
    {
        return $this->preview;
    }
    /**
     * Set preview value
     * @param bool $preview
     * @return \Pggns\MidocoApi\Order\StructType\SavePrintjobRequest
     */
    public function setPreview(?bool $preview = null): self
    {
        // validation for constraint: boolean
        if (!is_null($preview) && !is_bool($preview)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preview, true), gettype($preview)), __LINE__);
        }
        $this->preview = $preview;
        
        return $this;
    }
    /**
     * Get num_copies value
     * @return int|null
     */
    public function getNum_copies(): ?int
    {
        return $this->num_copies;
    }
    /**
     * Set num_copies value
     * @param int $num_copies
     * @return \Pggns\MidocoApi\Order\StructType\SavePrintjobRequest
     */
    public function setNum_copies(?int $num_copies = null): self
    {
        // validation for constraint: int
        if (!is_null($num_copies) && !(is_int($num_copies) || ctype_digit($num_copies))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($num_copies, true), gettype($num_copies)), __LINE__);
        }
        $this->num_copies = $num_copies;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\SavePrintjobRequest
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get printjob_data value
     * @return string|null
     */
    public function getPrintjob_data(): ?string
    {
        return $this->{'printjob-data'};
    }
    /**
     * Set printjob_data value
     * @param string $printjob_data
     * @return \Pggns\MidocoApi\Order\StructType\SavePrintjobRequest
     */
    public function setPrintjob_data(?string $printjob_data = null): self
    {
        // validation for constraint: string
        if (!is_null($printjob_data) && !is_string($printjob_data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printjob_data, true), gettype($printjob_data)), __LINE__);
        }
        $this->printjob_data = $this->{'printjob-data'} = $printjob_data;
        
        return $this;
    }
    /**
     * Get printjobId value
     * @return string|null
     */
    public function getPrintjobId(): ?string
    {
        return $this->printjobId;
    }
    /**
     * Set printjobId value
     * @param string $printjobId
     * @return \Pggns\MidocoApi\Order\StructType\SavePrintjobRequest
     */
    public function setPrintjobId(?string $printjobId = null): self
    {
        // validation for constraint: string
        if (!is_null($printjobId) && !is_string($printjobId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printjobId, true), gettype($printjobId)), __LINE__);
        }
        $this->printjobId = $printjobId;
        
        return $this;
    }
    /**
     * Get media value
     * @return string|null
     */
    public function getMedia(): ?string
    {
        return $this->media;
    }
    /**
     * Set media value
     * @param string $media
     * @return \Pggns\MidocoApi\Order\StructType\SavePrintjobRequest
     */
    public function setMedia(?string $media = null): self
    {
        // validation for constraint: string
        if (!is_null($media) && !is_string($media)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($media, true), gettype($media)), __LINE__);
        }
        $this->media = $media;
        
        return $this;
    }
}
