<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculateBillingResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: calculateBilling --- this method is used internally to recalculate the billing positions for a sell-item It has to consider: a changed or newly created sell-item (fields inkasso-price, travel date, storno, deposit-amount,
 * deposit/final payment dates, account). A lookup has to take place in the supplier database to find out about the account settings and inkasso handling. In case the payment dates are empty and the inkasso-value is set, the payment dates and values
 * have to be calculated. The necessary billing positions have to be calculated. In case the amounts are equal to already printed positions, the item is not changed. In case of a difference, a corrective position has to be created for deposit, which
 * reflects the price change. This is done by moving the printing-date of the void position for any previously printed deposit amount to the new deposit date and creating a new position with the actual amount (in case this is not 0). Each newly created
 * deposit position has to have a voiding position with the negative amount to be printed at the final payment date. In case the final payment date is already reached (this is the case always for tickets), a deposit change is not reflected any more !
 * For the deposit amount a billing position has to be created with the account marked for deposit. For the final payment amount (= inkasso) a billing position has to be created with the account of the sellItem. In case the account has changed, all
 * pre-existing billing-positions with the different account (which are not deposit positions) have to be voided.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CalculateBillingResponse extends AbstractStructBase
{
}
