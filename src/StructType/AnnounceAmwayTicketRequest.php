<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnounceAmwayTicketRequest StructType
 * @subpackage Structs
 */
class AnnounceAmwayTicketRequest extends AbstractStructBase
{
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The filekey
     * @var string|null
     */
    protected ?string $filekey = null;
    /**
     * The ticket
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Pggns\MidocoApi\Order\StructType\Ticket[]
     */
    protected array $ticket = [];
    /**
     * Constructor method for AnnounceAmwayTicketRequest
     * @uses AnnounceAmwayTicketRequest::setOrderNo()
     * @uses AnnounceAmwayTicketRequest::setFilekey()
     * @uses AnnounceAmwayTicketRequest::setTicket()
     * @param int $orderNo
     * @param string $filekey
     * @param \Pggns\MidocoApi\Order\StructType\Ticket[] $ticket
     */
    public function __construct(?int $orderNo = null, ?string $filekey = null, array $ticket = [])
    {
        $this
            ->setOrderNo($orderNo)
            ->setFilekey($filekey)
            ->setTicket($ticket);
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceAmwayTicketRequest
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get filekey value
     * @return string|null
     */
    public function getFilekey(): ?string
    {
        return $this->filekey;
    }
    /**
     * Set filekey value
     * @param string $filekey
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceAmwayTicketRequest
     */
    public function setFilekey(?string $filekey = null): self
    {
        // validation for constraint: string
        if (!is_null($filekey) && !is_string($filekey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filekey, true), gettype($filekey)), __LINE__);
        }
        $this->filekey = $filekey;
        
        return $this;
    }
    /**
     * Get ticket value
     * @return \Pggns\MidocoApi\Order\StructType\Ticket[]
     */
    public function getTicket(): array
    {
        return $this->ticket;
    }
    /**
     * This method is responsible for validating the values passed to the setTicket method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTicket method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTicketForArrayConstraintsFromSetTicket(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $announceAmwayTicketRequestTicketItem) {
            // validation for constraint: itemType
            if (!$announceAmwayTicketRequestTicketItem instanceof \Pggns\MidocoApi\Order\StructType\Ticket) {
                $invalidValues[] = is_object($announceAmwayTicketRequestTicketItem) ? get_class($announceAmwayTicketRequestTicketItem) : sprintf('%s(%s)', gettype($announceAmwayTicketRequestTicketItem), var_export($announceAmwayTicketRequestTicketItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ticket property can only contain items of type \Pggns\MidocoApi\Order\StructType\Ticket, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ticket value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Ticket[] $ticket
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceAmwayTicketRequest
     */
    public function setTicket(array $ticket = []): self
    {
        // validation for constraint: array
        if ('' !== ($ticketArrayErrorMessage = self::validateTicketForArrayConstraintsFromSetTicket($ticket))) {
            throw new InvalidArgumentException($ticketArrayErrorMessage, __LINE__);
        }
        $this->ticket = $ticket;
        
        return $this;
    }
    /**
     * Add item to ticket value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Ticket $item
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceAmwayTicketRequest
     */
    public function addToTicket(\Pggns\MidocoApi\Order\StructType\Ticket $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Ticket) {
            throw new InvalidArgumentException(sprintf('The ticket property can only contain items of type \Pggns\MidocoApi\Order\StructType\Ticket, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ticket[] = $item;
        
        return $this;
    }
}
