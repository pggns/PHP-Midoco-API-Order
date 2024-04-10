<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/OrderService.wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/OrderService.wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Pggns\MidocoApi\Order\ClassMap::get(),
];
/**
 * Samples for Announce ServiceType
 */
$announce = new \Pggns\MidocoApi\Order\ServiceType\Announce($options);
$announce->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for announceBookingMessage operation/method
 */
if ($announce->announceBookingMessage(new \Pggns\MidocoApi\Order\StructType\AnnounceBookingMessageRequest()) !== false) {
    print_r($announce->getResult());
} else {
    print_r($announce->getLastError());
}
/**
 * Sample call for announceBookingMessageNorm operation/method
 */
if ($announce->announceBookingMessageNorm(new \Pggns\MidocoApi\Order\StructType\AnnounceBookingMessageNormRequest()) !== false) {
    print_r($announce->getResult());
} else {
    print_r($announce->getLastError());
}
/**
 * Sample call for announceAmaTirMessage operation/method
 */
if ($announce->announceAmaTirMessage(new \Pggns\MidocoApi\Order\StructType\AnnounceAmaTirMessageRequest()) !== false) {
    print_r($announce->getResult());
} else {
    print_r($announce->getLastError());
}
/**
 * Sample call for announceAmaAirMessage operation/method
 */
if ($announce->announceAmaAirMessage(new \Pggns\MidocoApi\Order\StructType\AnnounceAmaAirMessageRequest()) !== false) {
    print_r($announce->getResult());
} else {
    print_r($announce->getLastError());
}
/**
 * Sample call for announceExternalPayment operation/method
 */
if ($announce->announceExternalPayment(new \Pggns\MidocoApi\Order\StructType\AnnounceExternalPaymentRequest()) !== false) {
    print_r($announce->getResult());
} else {
    print_r($announce->getLastError());
}
/**
 * Sample call for announceAmwayFilekey operation/method
 */
if ($announce->announceAmwayFilekey(new \Pggns\MidocoApi\Order\StructType\AnnounceAmwayFilekeyRequest()) !== false) {
    print_r($announce->getResult());
} else {
    print_r($announce->getLastError());
}
/**
 * Sample call for announceAmwayTicket operation/method
 */
if ($announce->announceAmwayTicket(new \Pggns\MidocoApi\Order\StructType\AnnounceAmwayTicketRequest()) !== false) {
    print_r($announce->getResult());
} else {
    print_r($announce->getLastError());
}
/**
 * Sample call for announcePayment operation/method
 */
if ($announce->announcePayment(new \Pggns\MidocoApi\Order\StructType\AnnouncePaymentRequest()) !== false) {
    print_r($announce->getResult());
} else {
    print_r($announce->getLastError());
}
/**
 * Sample call for announceSabreAirMessage operation/method
 */
if ($announce->announceSabreAirMessage(new \Pggns\MidocoApi\Order\StructType\AnnounceSabreAirMessageRequest()) !== false) {
    print_r($announce->getResult());
} else {
    print_r($announce->getLastError());
}
/**
 * Sample call for announceGalileoAirMessage operation/method
 */
if ($announce->announceGalileoAirMessage(new \Pggns\MidocoApi\Order\StructType\AnnounceGalileoAirMessageRequest()) !== false) {
    print_r($announce->getResult());
} else {
    print_r($announce->getLastError());
}
/**
 * Sample call for announceFlightTimeChanges operation/method
 */
if ($announce->announceFlightTimeChanges(new \Pggns\MidocoApi\Order\StructType\AnnounceFlightTimeChangesRequest()) !== false) {
    print_r($announce->getResult());
} else {
    print_r($announce->getLastError());
}
/**
 * Sample call for announceSunnyCarsMessage operation/method
 */
if ($announce->announceSunnyCarsMessage(new \Pggns\MidocoApi\Order\StructType\AnnounceSunnyCarsMessageRequest()) !== false) {
    print_r($announce->getResult());
} else {
    print_r($announce->getLastError());
}
/**
 * Sample call for announceA3MMessage operation/method
 */
if ($announce->announceA3MMessage(new \Pggns\MidocoApi\Order\StructType\AnnounceA3MMessageRequest()) !== false) {
    print_r($announce->getResult());
} else {
    print_r($announce->getLastError());
}
/**
 * Sample call for announceGdsMessage operation/method
 */
if ($announce->announceGdsMessage(new \Pggns\MidocoApi\Order\StructType\AnnounceGdsMessageRequest()) !== false) {
    print_r($announce->getResult());
} else {
    print_r($announce->getLastError());
}
/**
 * Sample call for announceAgencySaleMessage operation/method
 */
if ($announce->announceAgencySaleMessage(new \Pggns\MidocoApi\Order\StructType\AnnounceAgencySaleMessageRequest()) !== false) {
    print_r($announce->getResult());
} else {
    print_r($announce->getLastError());
}
/**
 * Samples for Attach ServiceType
 */
$attach = new \Pggns\MidocoApi\Order\ServiceType\Attach($options);
$attach->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for attachSellItemToOrder operation/method
 */
if ($attach->attachSellItemToOrder(new \Pggns\MidocoApi\Order\StructType\AttachSellItemToOrderRequest()) !== false) {
    print_r($attach->getResult());
} else {
    print_r($attach->getLastError());
}
/**
 * Samples for Has ServiceType
 */
$has = new \Pggns\MidocoApi\Order\ServiceType\Has($options);
$has->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for hasBillingPositionsForSellItems operation/method
 */
if ($has->hasBillingPositionsForSellItems(new \Pggns\MidocoApi\Order\StructType\HasBillingPositionsForSellItemsRequest()) !== false) {
    print_r($has->getResult());
} else {
    print_r($has->getLastError());
}
/**
 * Sample call for hasBookingJournalExport operation/method
 */
if ($has->hasBookingJournalExport(new \Pggns\MidocoApi\Order\StructType\HasBookingJournalExportRequest()) !== false) {
    print_r($has->getResult());
} else {
    print_r($has->getLastError());
}
/**
 * Samples for Calculate ServiceType
 */
$calculate = new \Pggns\MidocoApi\Order\ServiceType\Calculate($options);
$calculate->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for calculateBilling operation/method
 */
if ($calculate->calculateBilling(new \Pggns\MidocoApi\Order\StructType\CalculateBillingRequest()) !== false) {
    print_r($calculate->getResult());
} else {
    print_r($calculate->getLastError());
}
/**
 * Sample call for calculateEntryPeriodSums operation/method
 */
if ($calculate->calculateEntryPeriodSums(new \Pggns\MidocoApi\Order\StructType\CalculateEntryPeriodSumsRequest()) !== false) {
    print_r($calculate->getResult());
} else {
    print_r($calculate->getLastError());
}
/**
 * Sample call for calculateSellItemPricing operation/method
 */
if ($calculate->calculateSellItemPricing(new \Pggns\MidocoApi\Order\StructType\CalculateSellItemPricingRequest()) !== false) {
    print_r($calculate->getResult());
} else {
    print_r($calculate->getLastError());
}
/**
 * Sample call for calculateStatistics operation/method
 */
if ($calculate->calculateStatistics(new \Pggns\MidocoApi\Order\StructType\CalculateStatisticsRequest()) !== false) {
    print_r($calculate->getResult());
} else {
    print_r($calculate->getLastError());
}
/**
 * Sample call for calculateSupplierCommission operation/method
 */
if ($calculate->calculateSupplierCommission(new \Pggns\MidocoApi\Order\StructType\CalculateSupplierCommissionRequest()) !== false) {
    print_r($calculate->getResult());
} else {
    print_r($calculate->getLastError());
}
/**
 * Sample call for calculateRetentionPeriod4Order operation/method
 */
if ($calculate->calculateRetentionPeriod4Order(new \Pggns\MidocoApi\Order\StructType\CalculateRetentionPeriod4OrderRequest()) !== false) {
    print_r($calculate->getResult());
} else {
    print_r($calculate->getLastError());
}
/**
 * Samples for Finish ServiceType
 */
$finish = new \Pggns\MidocoApi\Order\ServiceType\Finish($options);
$finish->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for finishBillingDocument operation/method
 */
if ($finish->finishBillingDocument(new \Pggns\MidocoApi\Order\StructType\FinishBillingDocumentRequest()) !== false) {
    print_r($finish->getResult());
} else {
    print_r($finish->getLastError());
}
/**
 * Sample call for finishMidocoBonusCalculation operation/method
 */
if ($finish->finishMidocoBonusCalculation(new \Pggns\MidocoApi\Order\StructType\FinishMidocoBonusCalculationRequest()) !== false) {
    print_r($finish->getResult());
} else {
    print_r($finish->getLastError());
}
/**
 * Sample call for finishAgencySettlement operation/method
 */
if ($finish->finishAgencySettlement(new \Pggns\MidocoApi\Order\StructType\FinishAgencySettlementRequest()) !== false) {
    print_r($finish->getResult());
} else {
    print_r($finish->getLastError());
}
/**
 * Sample call for finishOrderNotice operation/method
 */
if ($finish->finishOrderNotice(new \Pggns\MidocoApi\Order\StructType\FinishOrderNoticeRequest()) !== false) {
    print_r($finish->getResult());
} else {
    print_r($finish->getLastError());
}
/**
 * Sample call for finishBillingDocumentFibu operation/method
 */
if ($finish->finishBillingDocumentFibu(new \Pggns\MidocoApi\Order\StructType\FinishBillingDocumentFibuRequest()) !== false) {
    print_r($finish->getResult());
} else {
    print_r($finish->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Pggns\MidocoApi\Order\ServiceType\Get($options);
$get->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for getBillingDocument operation/method
 */
if ($get->getBillingDocument(new \Pggns\MidocoApi\Order\StructType\GetBillingDocumentRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBillingDocumentForCustomer operation/method
 */
if ($get->getBillingDocumentForCustomer(new \Pggns\MidocoApi\Order\StructType\GetBillingDocumentForCustomerRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBillingDocumentForOrder operation/method
 */
if ($get->getBillingDocumentForOrder(new \Pggns\MidocoApi\Order\StructType\GetBillingDocumentForOrderRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBillingDocumentForSellItem operation/method
 */
if ($get->getBillingDocumentForSellItem(new \Pggns\MidocoApi\Order\StructType\GetBillingDocumentForSellItemRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getExtendedOrder operation/method
 */
if ($get->getExtendedOrder(new \Pggns\MidocoApi\Order\StructType\GetExtendedOrderRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrder operation/method
 */
if ($get->getOrder(new \Pggns\MidocoApi\Order\StructType\GetOrderRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getUnitNameForBookingById operation/method
 */
if ($get->getUnitNameForBookingById(new \Pggns\MidocoApi\Order\StructType\GetUnitNameForBookingByIdRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSellItem operation/method
 */
if ($get->getSellItem(new \Pggns\MidocoApi\Order\StructType\GetSellItemRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getUnassignedBookings operation/method
 */
if ($get->getUnassignedBookings(new \Pggns\MidocoApi\Order\StructType\GetUnassignedBookingsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTravelersForDocumentId operation/method
 */
if ($get->getTravelersForDocumentId(new \Pggns\MidocoApi\Order\StructType\GetTravelersForDocumentIdRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBillingPositionsForDocumentId operation/method
 */
if ($get->getBillingPositionsForDocumentId(new \Pggns\MidocoApi\Order\StructType\GetBillingPositionsForDocumentIdRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderDebitPayment operation/method
 */
if ($get->getOrderDebitPayment(new \Pggns\MidocoApi\Order\StructType\GetOrderDebitPaymentRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderOnlinePayment operation/method
 */
if ($get->getOrderOnlinePayment(new \Pggns\MidocoApi\Order\StructType\GetOrderOnlinePaymentRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMediatorCommission operation/method
 */
if ($get->getMediatorCommission(new \Pggns\MidocoApi\Order\StructType\GetMediatorCommissionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getFilteredBillingDocumentsForOrder operation/method
 */
if ($get->getFilteredBillingDocumentsForOrder(new \Pggns\MidocoApi\Order\StructType\GetFilteredBillingDocumentsForOrderRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTravelPlans operation/method
 */
if ($get->getTravelPlans(new \Pggns\MidocoApi\Order\StructType\GetTravelPlansRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSettlementInfoDetails operation/method
 */
if ($get->getSettlementInfoDetails(new \Pggns\MidocoApi\Order\StructType\GetSettlementInfoDetailsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplierSettlementError operation/method
 */
if ($get->getSupplierSettlementError(new \Pggns\MidocoApi\Order\StructType\GetSupplierSettlementErrorRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCashbooks operation/method
 */
if ($get->getCashbooks(new \Pggns\MidocoApi\Order\StructType\GetCashbooksRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBookingJournal operation/method
 */
if ($get->getBookingJournal(new \Pggns\MidocoApi\Order\StructType\GetBookingJournalRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getJournalExportFile operation/method
 */
if ($get->getJournalExportFile(new \Pggns\MidocoApi\Order\StructType\GetJournalExportFileRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderRemarks operation/method
 */
if ($get->getOrderRemarks(new \Pggns\MidocoApi\Order\StructType\GetOrderRemarksRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrgUnitUserCashbooks operation/method
 */
if ($get->getOrgUnitUserCashbooks(new \Pggns\MidocoApi\Order\StructType\GetOrgUnitAndUserCashbookRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBillingPrintInfo operation/method
 */
if ($get->getBillingPrintInfo(new \Pggns\MidocoApi\Order\StructType\GetBillingPrintInfoRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSellItemProvision operation/method
 */
if ($get->getSellItemProvision(new \Pggns\MidocoApi\Order\StructType\GetSellItemProvisionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPrintedBillingDoc operation/method
 */
if ($get->getPrintedBillingDoc(new \Pggns\MidocoApi\Order\StructType\GetPrintedBillingDocRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBillingPositionsForOrder operation/method
 */
if ($get->getBillingPositionsForOrder(new \Pggns\MidocoApi\Order\StructType\GetBillingPositionsForOrderRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoBonusCalculations operation/method
 */
if ($get->getMidocoBonusCalculations(new \Pggns\MidocoApi\Order\StructType\GetMidocoBonusCalculationRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getUsersFromBonusCalculation operation/method
 */
if ($get->getUsersFromBonusCalculation(new \Pggns\MidocoApi\Order\StructType\GetUsersFromBonusCalculationRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSkippedBookings operation/method
 */
if ($get->getSkippedBookings(new \Pggns\MidocoApi\Order\StructType\GetSkippedBookingsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBonusForEmployee operation/method
 */
if ($get->getBonusForEmployee(new \Pggns\MidocoApi\Order\StructType\GetMidocoBonusEmployeeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSellitemDetailsForBonusEmployee operation/method
 */
if ($get->getSellitemDetailsForBonusEmployee(new \Pggns\MidocoApi\Order\StructType\GetSellitemDetailsForBonusEmployeeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoBonusAddition operation/method
 */
if ($get->getMidocoBonusAddition(new \Pggns\MidocoApi\Order\StructType\GetMidocoBonusAdditionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderPayments operation/method
 */
if ($get->getOrderPayments(new \Pggns\MidocoApi\Order\StructType\GetOrderPaymentsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderInvoices operation/method
 */
if ($get->getOrderInvoices(new \Pggns\MidocoApi\Order\StructType\GetOrderInvoicesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoAgencySettlement operation/method
 */
if ($get->getMidocoAgencySettlement(new \Pggns\MidocoApi\Order\StructType\GetMidocoAgencySettlementRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoAgencySettlementOrderDetails operation/method
 */
if ($get->getMidocoAgencySettlementOrderDetails(new \Pggns\MidocoApi\Order\StructType\GetMidocoAgencySettlementOrderDetailsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSellItemDocuments operation/method
 */
if ($get->getSellItemDocuments(new \Pggns\MidocoApi\Order\StructType\GetSellItemDocumentsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getReceipt operation/method
 */
if ($get->getReceipt(new \Pggns\MidocoApi\Order\StructType\GetReceiptRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getUnprintedOrderIDs operation/method
 */
if ($get->getUnprintedOrderIDs(new \Pggns\MidocoApi\Order\StructType\GetUnprintedOrderIDsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAgencySettlement operation/method
 */
if ($get->getAgencySettlement(new \Pggns\MidocoApi\Order\StructType\GetAgencySettlementRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAccountEntriesForOrder operation/method
 */
if ($get->getAccountEntriesForOrder(new \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForOrderRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAccountEntriesForDebitor operation/method
 */
if ($get->getAccountEntriesForDebitor(new \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderAttributes operation/method
 */
if ($get->getOrderAttributes(new \Pggns\MidocoApi\Order\StructType\GetOrderAttributesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSellItemAttributes operation/method
 */
if ($get->getSellItemAttributes(new \Pggns\MidocoApi\Order\StructType\GetSellItemAttributesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSellItemAttributesForOrder operation/method
 */
if ($get->getSellItemAttributesForOrder(new \Pggns\MidocoApi\Order\StructType\GetSellItemAttributesForOrderRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getInvoiceOrderByCustomer operation/method
 */
if ($get->getInvoiceOrderByCustomer(new \Pggns\MidocoApi\Order\StructType\GetInvoiceOrderByCustomerIdRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMediatorBillingDetails operation/method
 */
if ($get->getMediatorBillingDetails(new \Pggns\MidocoApi\Order\StructType\GetMediatorBillingDetailsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMerlinExportString operation/method
 */
if ($get->getMerlinExportString(new \Pggns\MidocoApi\Order\StructType\GetMerlinExportStringRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDocumentIdForInvoice operation/method
 */
if ($get->getDocumentIdForInvoice(new \Pggns\MidocoApi\Order\StructType\GetDocumentIdForInvoiceRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderNotices operation/method
 */
if ($get->getOrderNotices(new \Pggns\MidocoApi\Order\StructType\GetOrderNoticesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrdersForTraveller operation/method
 */
if ($get->getOrdersForTraveller(new \Pggns\MidocoApi\Order\StructType\GetOrdersForTravellerRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrdersForMediator operation/method
 */
if ($get->getOrdersForMediator(new \Pggns\MidocoApi\Order\StructType\GetOrdersForMediatorRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getConfirmationReceivedSellitemsForSupplier operation/method
 */
if ($get->getConfirmationReceivedSellitemsForSupplier(new \Pggns\MidocoApi\Order\StructType\GetConfirmationReceivedSellitemsForSupplierRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplierAgencySettlementBookings operation/method
 */
if ($get->getSupplierAgencySettlementBookings(new \Pggns\MidocoApi\Order\StructType\GetSupplierAgencySettlementBookingsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplierAgencySettlementDetails operation/method
 */
if ($get->getSupplierAgencySettlementDetails(new \Pggns\MidocoApi\Order\StructType\GetSupplierAgencySettlementDetailsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderIdForSellItemId operation/method
 */
if ($get->getOrderIdForSellItemId(new \Pggns\MidocoApi\Order\StructType\GetOrderIdForSellItemIdRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCmsHotelData operation/method
 */
if ($get->getCmsHotelData(new \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getICmsHotelData operation/method
 */
if ($get->getICmsHotelData(new \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTextForSellItemError operation/method
 */
if ($get->getTextForSellItemError(new \Pggns\MidocoApi\Order\StructType\GetTextForSellItemErrorRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAmwayMediatorBookings operation/method
 */
if ($get->getAmwayMediatorBookings(new \Pggns\MidocoApi\Order\StructType\GetAmwayMediatorBookingsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderHistory operation/method
 */
if ($get->getOrderHistory(new \Pggns\MidocoApi\Order\StructType\GetOrderHistoryRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBookingMessage4Order operation/method
 */
if ($get->getBookingMessage4Order(new \Pggns\MidocoApi\Order\StructType\GetBookingMessage4OrderRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRevenueBookingForSellitem operation/method
 */
if ($get->getRevenueBookingForSellitem(new \Pggns\MidocoApi\Order\StructType\GetRevenueBookingForSellitemRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMediatorProductSettlementDetails operation/method
 */
if ($get->getMediatorProductSettlementDetails(new \Pggns\MidocoApi\Order\StructType\GetMediatorProductSettlementDetailsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDebitInfoForReceipt operation/method
 */
if ($get->getDebitInfoForReceipt(new \Pggns\MidocoApi\Order\StructType\GetDebitInfoForReceiptRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDebitorForOrgunit operation/method
 */
if ($get->getDebitorForOrgunit(new \Pggns\MidocoApi\Order\StructType\GetDebitorForOrgunitRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAmadeusExportString operation/method
 */
if ($get->getAmadeusExportString(new \Pggns\MidocoApi\Order\StructType\GetAmadeusExportStringRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEntryHistory operation/method
 */
if ($get->getEntryHistory(new \Pggns\MidocoApi\Order\StructType\GetEntryHistoryRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBookingMessage4Takeoff operation/method
 */
if ($get->getBookingMessage4Takeoff(new \Pggns\MidocoApi\Order\StructType\GetBookingMessage4TakeoffRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderIdsForAgencyCommissionDates operation/method
 */
if ($get->getOrderIdsForAgencyCommissionDates(new \Pggns\MidocoApi\Order\StructType\GetOrderIdsForAgencyCommissionDatesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getProcessedBookings operation/method
 */
if ($get->getProcessedBookings(new \Pggns\MidocoApi\Order\StructType\GetProcessedBookingsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTravelDocsPrintInfo operation/method
 */
if ($get->getTravelDocsPrintInfo(new \Pggns\MidocoApi\Order\StructType\GetTravelDocsPrintInfoRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMergedDunningList operation/method
 */
if ($get->getMergedDunningList(new \Pggns\MidocoApi\Order\StructType\GetMergedDunningRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAgencySettlementLevelDetails operation/method
 */
if ($get->getAgencySettlementLevelDetails(new \Pggns\MidocoApi\Order\StructType\GetAgencySettlementLevelDetailsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderDocumentsInfo operation/method
 */
if ($get->getOrderDocumentsInfo(new \Pggns\MidocoApi\Order\StructType\GetOrderDocumentsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBillingPrintSettings operation/method
 */
if ($get->getBillingPrintSettings(new \Pggns\MidocoApi\Order\StructType\GetBillingPrintSettingsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBillingDocumentDocumentsInfo operation/method
 */
if ($get->getBillingDocumentDocumentsInfo(new \Pggns\MidocoApi\Order\StructType\GetBillingDocumentDocumentsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLastDunning operation/method
 */
if ($get->getLastDunning(new \Pggns\MidocoApi\Order\StructType\GetLastDunningRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getIncomingInvoices operation/method
 */
if ($get->getIncomingInvoices(new \Pggns\MidocoApi\Order\StructType\GetIncomingInvoiceRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getExistingVoucherNumber operation/method
 */
if ($get->getExistingVoucherNumber(new \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBillingDocValue operation/method
 */
if ($get->getBillingDocValue(new \Pggns\MidocoApi\Order\StructType\GetBillingDocValueRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderContactHistory operation/method
 */
if ($get->getOrderContactHistory(new \Pggns\MidocoApi\Order\StructType\GetOrderContactHistoryRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrdersDbiInfos operation/method
 */
if ($get->getOrdersDbiInfos(new \Pggns\MidocoApi\Order\StructType\GetOrdersDbiInfosRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getShortOrderStatus operation/method
 */
if ($get->getShortOrderStatus(new \Pggns\MidocoApi\Order\StructType\GetShortOrderStatusRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getErmMailInfo operation/method
 */
if ($get->getErmMailInfo(new \Pggns\MidocoApi\Order\StructType\GetErmMailInfoRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderCustomer operation/method
 */
if ($get->getOrderCustomer(new \Pggns\MidocoApi\Order\StructType\GetOrderCustomerRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBookingControlData operation/method
 */
if ($get->getBookingControlData(new \Pggns\MidocoApi\Order\StructType\GetBookingControlDataRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSaveBookingControl operation/method
 */
if ($get->getSaveBookingControl(new \Pggns\MidocoApi\Order\StructType\GetSaveBookingControlRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAdviceSettlementDetails operation/method
 */
if ($get->getAdviceSettlementDetails(new \Pggns\MidocoApi\Order\StructType\GetAdviceSettlementDetailsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMergedBillingDunningList operation/method
 */
if ($get->getMergedBillingDunningList(new \Pggns\MidocoApi\Order\StructType\GetMergedBillingDunningRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTotalPartialPayments operation/method
 */
if ($get->getTotalPartialPayments(new \Pggns\MidocoApi\Order\StructType\TotalPartialPaymentsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBillingPositions4BonusClearing operation/method
 */
if ($get->getBillingPositions4BonusClearing(new \Pggns\MidocoApi\Order\StructType\GetBillingPositions4BonusClearingRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEmailList operation/method
 */
if ($get->getEmailList(new \Pggns\MidocoApi\Order\StructType\GetEmailListRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getExportMessages4Order operation/method
 */
if ($get->getExportMessages4Order(new \Pggns\MidocoApi\Order\StructType\GetExportMessages4OrderRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderStatus operation/method
 */
if ($get->getOrderStatus(new \Pggns\MidocoApi\Order\StructType\GetOrderStatusRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPackageInfoForBooking operation/method
 */
if ($get->getPackageInfoForBooking(new \Pggns\MidocoApi\Order\StructType\GetPackageInfoForBookingRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBillingDocDbiInfos operation/method
 */
if ($get->getBillingDocDbiInfos(new \Pggns\MidocoApi\Order\StructType\GetBillingDocDbiInfosRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getExternalLinks operation/method
 */
if ($get->getExternalLinks(new \Pggns\MidocoApi\Order\StructType\GetExternalLinksRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTravelDocuments operation/method
 */
if ($get->getTravelDocuments(new \Pggns\MidocoApi\Order\StructType\GetTravelDocumentsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDetailedBillingPositionsInfo operation/method
 */
if ($get->getDetailedBillingPositionsInfo(new \Pggns\MidocoApi\Order\StructType\GetDetailedBillingPositionsInfoRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplAgencySettlemJournal operation/method
 */
if ($get->getSupplAgencySettlemJournal(new \Pggns\MidocoApi\Order\StructType\GetSupplAgencySettlemJournalRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getFeeTypesForAgency operation/method
 */
if ($get->getFeeTypesForAgency(new \Pggns\MidocoApi\Order\StructType\GetFeeTypesForAgencyRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBillingPositions4AgencyFeeType operation/method
 */
if ($get->getBillingPositions4AgencyFeeType(new \Pggns\MidocoApi\Order\StructType\GetBillingPositions4AgencyFeeTypeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderInternalVersion operation/method
 */
if ($get->getOrderInternalVersion(new \Pggns\MidocoApi\Order\StructType\GetOrderInternalVersionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderAndCrmContactHistory operation/method
 */
if ($get->getOrderAndCrmContactHistory(new \Pggns\MidocoApi\Order\StructType\GetOrderAndCrmContactHistoryRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAccountEntriesForDebitorBalance operation/method
 */
if ($get->getAccountEntriesForDebitorBalance(new \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorBalanceRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderVoucher operation/method
 */
if ($get->getOrderVoucher(new \Pggns\MidocoApi\Order\StructType\GetOrderVoucherRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSellItemTooltips operation/method
 */
if ($get->getSellItemTooltips(new \Pggns\MidocoApi\Order\StructType\GetSellItemTooltipsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoAgencySettlementSellItemDetails operation/method
 */
if ($get->getMidocoAgencySettlementSellItemDetails(new \Pggns\MidocoApi\Order\StructType\GetMidocoAgencySettlementSellItemDetailsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBillingPositionsForSellItem operation/method
 */
if ($get->getBillingPositionsForSellItem(new \Pggns\MidocoApi\Order\StructType\GetBillingPositionsForSellItemRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderMargin operation/method
 */
if ($get->getOrderMargin(new \Pggns\MidocoApi\Order\StructType\GetOrderMarginRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPaymentAccrualForCreditor operation/method
 */
if ($get->getPaymentAccrualForCreditor(new \Pggns\MidocoApi\Order\StructType\GetPaymentAccrualForCreditorRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPrintSelectsForOrder operation/method
 */
if ($get->getPrintSelectsForOrder(new \Pggns\MidocoApi\Order\StructType\GetPrintSelectsForOrderRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTravelStartDatesFromCustomer operation/method
 */
if ($get->getTravelStartDatesFromCustomer(new \Pggns\MidocoApi\Order\StructType\GetTravelStartDatesFromCustomerRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTravelStartDatesFromAgency operation/method
 */
if ($get->getTravelStartDatesFromAgency(new \Pggns\MidocoApi\Order\StructType\GetTravelStartDatesFromAgencyRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTotalPartialInvoice operation/method
 */
if ($get->getTotalPartialInvoice(new \Pggns\MidocoApi\Order\StructType\GetTotalPartialInvoiceRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoOrderRecapMessage operation/method
 */
if ($get->getMidocoOrderRecapMessage(new \Pggns\MidocoApi\Order\StructType\GetMidocoOrderRecapMessageRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrdersContactHistoryForCustomer operation/method
 */
if ($get->getOrdersContactHistoryForCustomer(new \Pggns\MidocoApi\Order\StructType\GetOrdersContactHistoryForCustomerRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMdcSettlementBilling operation/method
 */
if ($get->getMdcSettlementBilling(new \Pggns\MidocoApi\Order\StructType\GetMdcSettlementBillingRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderPaymentPaycodes operation/method
 */
if ($get->getOrderPaymentPaycodes(new \Pggns\MidocoApi\Order\StructType\GetOrderPaymentPaycodesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderContext operation/method
 */
if ($get->getOrderContext(new \Pggns\MidocoApi\Order\StructType\GetOrderContextRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAccountEntriesForDebitorPage operation/method
 */
if ($get->getAccountEntriesForDebitorPage(new \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorPageRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEmailText4PrintType operation/method
 */
if ($get->getEmailText4PrintType(new \Pggns\MidocoApi\Order\StructType\GetEmailText4PrintTypeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getVouchersForOrder operation/method
 */
if ($get->getVouchersForOrder(new \Pggns\MidocoApi\Order\StructType\GetVouchersForOrderRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTravelCms operation/method
 */
if ($get->getTravelCms(new \Pggns\MidocoApi\Order\StructType\GetTravelCMSRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPPTransactions operation/method
 */
if ($get->getPPTransactions(new \Pggns\MidocoApi\Order\StructType\GetPPTransactionsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderLockPeriod operation/method
 */
if ($get->getOrderLockPeriod(new \Pggns\MidocoApi\Order\StructType\GetOrderLockPeriodRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSellItemsSettlementNeeded operation/method
 */
if ($get->getSellItemsSettlementNeeded(new \Pggns\MidocoApi\Order\StructType\GetSellItemsSettlementNeededRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSellItemRevenues operation/method
 */
if ($get->getSellItemRevenues(new \Pggns\MidocoApi\Order\StructType\GetSellItemRevenuesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAdviceDetail operation/method
 */
if ($get->getAdviceDetail(new \Pggns\MidocoApi\Order\StructType\GetAdviceDetailRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSubOrdersInfo operation/method
 */
if ($get->getSubOrdersInfo(new \Pggns\MidocoApi\Order\StructType\GetSubOrdersInfoRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCashTurnoverExports operation/method
 */
if ($get->getCashTurnoverExports(new \Pggns\MidocoApi\Order\StructType\GetCashTurnoverExportsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBillingNotices operation/method
 */
if ($get->getBillingNotices(new \Pggns\MidocoApi\Order\StructType\GetBillingNoticesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPaymentProviderSettlementBookings operation/method
 */
if ($get->getPaymentProviderSettlementBookings(new \Pggns\MidocoApi\Order\StructType\GetPaymentProviderSettlementBookingsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPaymentProviderSettlement operation/method
 */
if ($get->getPaymentProviderSettlement(new \Pggns\MidocoApi\Order\StructType\GetPaymentProviderSettlementRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBookingInfo4Kickback operation/method
 */
if ($get->getBookingInfo4Kickback(new \Pggns\MidocoApi\Order\StructType\GetBookingInfo4KickbackRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoVoucher4Kickback operation/method
 */
if ($get->getMidocoVoucher4Kickback(new \Pggns\MidocoApi\Order\StructType\GetMidocoVoucher4KickbackRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderInfo operation/method
 */
if ($get->getOrderInfo(new \Pggns\MidocoApi\Order\StructType\GetOrderInfoRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getExportChangedOrders operation/method
 */
if ($get->getExportChangedOrders(new \Pggns\MidocoApi\Order\StructType\GetExportChangedOrdersRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBillingPrints operation/method
 */
if ($get->getBillingPrints(new \Pggns\MidocoApi\Order\StructType\GetBillingPrintsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderWithSellItemExportLog operation/method
 */
if ($get->getOrderWithSellItemExportLog(new \Pggns\MidocoApi\Order\StructType\GetOrderWithSellItemExportLogRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBillingInternalVersion operation/method
 */
if ($get->getBillingInternalVersion(new \Pggns\MidocoApi\Order\StructType\GetBillingInternalVersionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoItemSellingModes operation/method
 */
if ($get->getMidocoItemSellingModes(new \Pggns\MidocoApi\Order\StructType\GetMidocoItemSellingModesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBillingNoticeComments operation/method
 */
if ($get->getBillingNoticeComments(new \Pggns\MidocoApi\Order\StructType\GetBillingNoticeCommentsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderNoticeComments operation/method
 */
if ($get->getOrderNoticeComments(new \Pggns\MidocoApi\Order\StructType\GetOrderNoticeCommentsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTravelNoMarginItems operation/method
 */
if ($get->getTravelNoMarginItems(new \Pggns\MidocoApi\Order\StructType\GetTravelNoMarginItemsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTravelNoMargins4SettlType operation/method
 */
if ($get->getTravelNoMargins4SettlType(new \Pggns\MidocoApi\Order\StructType\GetTravelNoMargins4SettlTypeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getATOLType4Order operation/method
 */
if ($get->getATOLType4Order(new \Pggns\MidocoApi\Order\StructType\GetATOLType4OrderRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTssProtocol operation/method
 */
if ($get->getTssProtocol(new \Pggns\MidocoApi\Order\StructType\GetTssProtocolRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTravelnoPurchaseAssignments operation/method
 */
if ($get->getTravelnoPurchaseAssignments(new \Pggns\MidocoApi\Order\StructType\GetTravelnoPurchaseAssignmentsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getUnprintedBulkCustomerInvoices operation/method
 */
if ($get->getUnprintedBulkCustomerInvoices(new \Pggns\MidocoApi\Order\StructType\GetUnprintedBulkCustomerInvoicesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getNeoExportString operation/method
 */
if ($get->getNeoExportString(new \Pggns\MidocoApi\Order\StructType\GetNeoExportStringRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSabreVacationsExportString operation/method
 */
if ($get->getSabreVacationsExportString(new \Pggns\MidocoApi\Order\StructType\GetSabreVacationsExportStringRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Make ServiceType
 */
$make = new \Pggns\MidocoApi\Order\ServiceType\Make($options);
$make->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for makeBillingDocumentForCustomer operation/method
 */
if ($make->makeBillingDocumentForCustomer(new \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForCustomerRequest()) !== false) {
    print_r($make->getResult());
} else {
    print_r($make->getLastError());
}
/**
 * Sample call for makeBillingDocumentForOrder operation/method
 */
if ($make->makeBillingDocumentForOrder(new \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest()) !== false) {
    print_r($make->getResult());
} else {
    print_r($make->getLastError());
}
/**
 * Sample call for makeOrderInvoice operation/method
 */
if ($make->makeOrderInvoice(new \Pggns\MidocoApi\Order\StructType\MakeOrderInvoiceRequest()) !== false) {
    print_r($make->getResult());
} else {
    print_r($make->getLastError());
}
/**
 * Sample call for makeBillingDocumentForAgencySettlement operation/method
 */
if ($make->makeBillingDocumentForAgencySettlement(new \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForAgencySettlementRequest()) !== false) {
    print_r($make->getResult());
} else {
    print_r($make->getLastError());
}
/**
 * Sample call for makeBillingDocument4BonusClearing operation/method
 */
if ($make->makeBillingDocument4BonusClearing(new \Pggns\MidocoApi\Order\StructType\MakeBillingDocument4BonusClearingRequest()) !== false) {
    print_r($make->getResult());
} else {
    print_r($make->getLastError());
}
/**
 * Sample call for makeBillingDocument4AgencyFeeType operation/method
 */
if ($make->makeBillingDocument4AgencyFeeType(new \Pggns\MidocoApi\Order\StructType\MakeBillingDocument4AgencyFeeTypeRequest()) !== false) {
    print_r($make->getResult());
} else {
    print_r($make->getLastError());
}
/**
 * Sample call for makePartialInvoice4Order operation/method
 */
if ($make->makePartialInvoice4Order(new \Pggns\MidocoApi\Order\StructType\MakePartialInvoice4OrderRequest()) !== false) {
    print_r($make->getResult());
} else {
    print_r($make->getLastError());
}
/**
 * Sample call for makeOrderDiffInvoice operation/method
 */
if ($make->makeOrderDiffInvoice(new \Pggns\MidocoApi\Order\StructType\MakeOrderDiffInvoiceRequest()) !== false) {
    print_r($make->getResult());
} else {
    print_r($make->getLastError());
}
/**
 * Samples for Preview ServiceType
 */
$preview = new \Pggns\MidocoApi\Order\ServiceType\Preview($options);
$preview->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for previewBillingDocument operation/method
 */
if ($preview->previewBillingDocument(new \Pggns\MidocoApi\Order\StructType\PreviewBillingDocumentRequest()) !== false) {
    print_r($preview->getResult());
} else {
    print_r($preview->getLastError());
}
/**
 * Sample call for previewCashbookForCrtUser operation/method
 */
if ($preview->previewCashbookForCrtUser(new \Pggns\MidocoApi\Order\StructType\PreviewCashbookForCrtUserRequest()) !== false) {
    print_r($preview->getResult());
} else {
    print_r($preview->getLastError());
}
/**
 * Samples for Save ServiceType
 */
$save = new \Pggns\MidocoApi\Order\ServiceType\Save($options);
$save->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for saveBillingDocument operation/method
 */
if ($save->saveBillingDocument(new \Pggns\MidocoApi\Order\StructType\SaveBillingDocumentRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveBillingPosition operation/method
 */
if ($save->saveBillingPosition(new \Pggns\MidocoApi\Order\StructType\SaveBillingPositionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveDunningLockForBillingDocument operation/method
 */
if ($save->saveDunningLockForBillingDocument(new \Pggns\MidocoApi\Order\StructType\SaveDunningLockForBillingDocumentRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveManualItem operation/method
 */
if ($save->saveManualItem(new \Pggns\MidocoApi\Order\StructType\SaveManualItemRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveOrder operation/method
 */
if ($save->saveOrder(new \Pggns\MidocoApi\Order\StructType\SaveOrderRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSellItem operation/method
 */
if ($save->saveSellItem(new \Pggns\MidocoApi\Order\StructType\SaveSellItemRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveBillingDocRemark operation/method
 */
if ($save->saveBillingDocRemark(new \Pggns\MidocoApi\Order\StructType\SaveBillingDocRemarkRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveBillingPosRemark operation/method
 */
if ($save->saveBillingPosRemark(new \Pggns\MidocoApi\Order\StructType\SaveBillingPosRemarkRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveBillingDocumentPosition operation/method
 */
if ($save->saveBillingDocumentPosition(new \Pggns\MidocoApi\Order\StructType\SaveBillingDocumentPositionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveDebitInfo operation/method
 */
if ($save->saveDebitInfo(new \Pggns\MidocoApi\Order\StructType\SaveDebitInfoRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveOrderDebitPayment operation/method
 */
if ($save->saveOrderDebitPayment(new \Pggns\MidocoApi\Order\StructType\SaveOrderDebitPaymentRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveOrderOnlinePayment operation/method
 */
if ($save->saveOrderOnlinePayment(new \Pggns\MidocoApi\Order\StructType\SaveOrderOnlinePaymentRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveBillingVatCalculation operation/method
 */
if ($save->saveBillingVatCalculation(new \Pggns\MidocoApi\Order\StructType\SaveBillingVatCalculationsRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCashbook operation/method
 */
if ($save->saveCashbook(new \Pggns\MidocoApi\Order\StructType\SaveCashbookRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveOrderRemark operation/method
 */
if ($save->saveOrderRemark(new \Pggns\MidocoApi\Order\StructType\SaveOrderRemarkRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveRevenueBooking operation/method
 */
if ($save->saveRevenueBooking(new \Pggns\MidocoApi\Order\StructType\SaveRevenueBookingRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveBookingJournal operation/method
 */
if ($save->saveBookingJournal(new \Pggns\MidocoApi\Order\StructType\SaveBookingJournalRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoBonusCalculation operation/method
 */
if ($save->saveMidocoBonusCalculation(new \Pggns\MidocoApi\Order\StructType\SaveMidocoBonusCalculationRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoBonusAddition operation/method
 */
if ($save->saveMidocoBonusAddition(new \Pggns\MidocoApi\Order\StructType\SaveMidocoBonusAdditionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSellItemDocument operation/method
 */
if ($save->saveSellItemDocument(new \Pggns\MidocoApi\Order\StructType\SaveSellItemDocumentRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveOrderAttributes operation/method
 */
if ($save->saveOrderAttributes(new \Pggns\MidocoApi\Order\StructType\SaveOrderAttributesRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSellItemAttributes operation/method
 */
if ($save->saveSellItemAttributes(new \Pggns\MidocoApi\Order\StructType\SaveSellItemAttributesRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMediatorBilling operation/method
 */
if ($save->saveMediatorBilling(new \Pggns\MidocoApi\Order\StructType\SaveMediatorBillingRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveOrderNotice operation/method
 */
if ($save->saveOrderNotice(new \Pggns\MidocoApi\Order\StructType\SaveOrderNoticeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMultiNotice operation/method
 */
if ($save->saveMultiNotice(new \Pggns\MidocoApi\Order\StructType\SaveMultiNoticeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveOrderHistory operation/method
 */
if ($save->saveOrderHistory(new \Pggns\MidocoApi\Order\StructType\SaveOrderHistoryRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveDebitInfoForReceipt operation/method
 */
if ($save->saveDebitInfoForReceipt(new \Pggns\MidocoApi\Order\StructType\SaveDebitInfoForReceiptRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveOrderDocument operation/method
 */
if ($save->saveOrderDocument(new \Pggns\MidocoApi\Order\StructType\SaveOrderDocumentRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveBillingPrintSettings operation/method
 */
if ($save->saveBillingPrintSettings(new \Pggns\MidocoApi\Order\StructType\SaveBillingPrintSettingsRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveBillingDocumentDocument operation/method
 */
if ($save->saveBillingDocumentDocument(new \Pggns\MidocoApi\Order\StructType\SaveBillingDocumentDocumentRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveIncomingInvoice operation/method
 */
if ($save->saveIncomingInvoice(new \Pggns\MidocoApi\Order\StructType\SaveIncomingInvoiceRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveOrdersDbiInfos operation/method
 */
if ($save->saveOrdersDbiInfos(new \Pggns\MidocoApi\Order\StructType\SaveOrdersDbiInfosRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveAdviceSettlement operation/method
 */
if ($save->saveAdviceSettlement(new \Pggns\MidocoApi\Order\StructType\SaveAdviceSettlementRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveAdviceSettlementDetail operation/method
 */
if ($save->saveAdviceSettlementDetail(new \Pggns\MidocoApi\Order\StructType\SaveAdviceSettlementDetailRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveFlightTimeChangeEmail operation/method
 */
if ($save->saveFlightTimeChangeEmail(new \Pggns\MidocoApi\Order\StructType\SaveFlightTimeChangeEmailRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveBillingDocDbiInfos operation/method
 */
if ($save->saveBillingDocDbiInfos(new \Pggns\MidocoApi\Order\StructType\SaveBillingDocDbiInfosRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSupplierAgencySettlement operation/method
 */
if ($save->saveSupplierAgencySettlement(new \Pggns\MidocoApi\Order\StructType\SaveSupplierAgencySettlementRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSupplAgencySettlemBook operation/method
 */
if ($save->saveSupplAgencySettlemBook(new \Pggns\MidocoApi\Order\StructType\SaveSupplAgencySettlemBookRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSupplAgencySettlemJournal operation/method
 */
if ($save->saveSupplAgencySettlemJournal(new \Pggns\MidocoApi\Order\StructType\SaveSupplAgencySettlemJournalsRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveOrderMarginInfo operation/method
 */
if ($save->saveOrderMarginInfo(new \Pggns\MidocoApi\Order\StructType\SaveOrderMarginInfoRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoOrderQm operation/method
 */
if ($save->saveMidocoOrderQm(new \Pggns\MidocoApi\Order\StructType\SaveMidocoOrderQmRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMdcSettlementBilling operation/method
 */
if ($save->saveMdcSettlementBilling(new \Pggns\MidocoApi\Order\StructType\SaveMdcSettlementBillingRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveOrderPaymentPaycode operation/method
 */
if ($save->saveOrderPaymentPaycode(new \Pggns\MidocoApi\Order\StructType\SaveOrderPaymentPaycodeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveTravelCms operation/method
 */
if ($save->saveTravelCms(new \Pggns\MidocoApi\Order\StructType\SaveTravelCMSRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveFairplaneEmail4Order operation/method
 */
if ($save->saveFairplaneEmail4Order(new \Pggns\MidocoApi\Order\StructType\SaveFairplaneEmail4OrderRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveOrderLockPeriod operation/method
 */
if ($save->saveOrderLockPeriod(new \Pggns\MidocoApi\Order\StructType\SaveOrderLockPeriodRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSubOrders operation/method
 */
if ($save->saveSubOrders(new \Pggns\MidocoApi\Order\StructType\SaveSubOrdersRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSellRemark operation/method
 */
if ($save->saveSellRemark(new \Pggns\MidocoApi\Order\StructType\SaveSellRemarkRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveBillingNotices operation/method
 */
if ($save->saveBillingNotices(new \Pggns\MidocoApi\Order\StructType\SaveBillingNoticesRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for savePaymentProviderSettlement operation/method
 */
if ($save->savePaymentProviderSettlement(new \Pggns\MidocoApi\Order\StructType\SavePaymentProviderSettlementRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for savePaymentProviderSettlementBooking operation/method
 */
if ($save->savePaymentProviderSettlementBooking(new \Pggns\MidocoApi\Order\StructType\SavePaymentProviderSettlementBookingRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoItemSellingModes operation/method
 */
if ($save->saveMidocoItemSellingModes(new \Pggns\MidocoApi\Order\StructType\SaveMidocoItemSellingModesRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveBillingNoticeComment operation/method
 */
if ($save->saveBillingNoticeComment(new \Pggns\MidocoApi\Order\StructType\SaveBillingNoticeCommentRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveOrderNoticeComment operation/method
 */
if ($save->saveOrderNoticeComment(new \Pggns\MidocoApi\Order\StructType\SaveOrderNoticeCommentRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSellItemAndRevenueBooking operation/method
 */
if ($save->saveSellItemAndRevenueBooking(new \Pggns\MidocoApi\Order\StructType\SaveSellItemAndRevenueBookingRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveTravelnoPurchaseAssignment operation/method
 */
if ($save->saveTravelnoPurchaseAssignment(new \Pggns\MidocoApi\Order\StructType\SaveTravelnoPurchaseAssignmentRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Samples for Search ServiceType
 */
$search = new \Pggns\MidocoApi\Order\ServiceType\Search($options);
$search->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for searchBillingDocuments operation/method
 */
if ($search->searchBillingDocuments(new \Pggns\MidocoApi\Order\StructType\SearchBillingDocumentRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchTravelItemByFileKey operation/method
 */
if ($search->searchTravelItemByFileKey(new \Pggns\MidocoApi\Order\StructType\SearchTravelItemByFileKeyRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchDocumentItem operation/method
 */
if ($search->searchDocumentItem(new \Pggns\MidocoApi\Order\StructType\SearchDocumentItemRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchOrder operation/method
 */
if ($search->searchOrder(new \Pggns\MidocoApi\Order\StructType\SearchOrderRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchOrderForAgency operation/method
 */
if ($search->searchOrderForAgency(new \Pggns\MidocoApi\Order\StructType\SearchOrderForAgencyRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchSettlementInfo operation/method
 */
if ($search->searchSettlementInfo(new \Pggns\MidocoApi\Order\StructType\SearchMediatorSettlementInfoRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchOrgUnitUserSpecifiedCashbook operation/method
 */
if ($search->searchOrgUnitUserSpecifiedCashbook(new \Pggns\MidocoApi\Order\StructType\SearchOrgUnitUserSpecifiedCashbookRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchJournalExports operation/method
 */
if ($search->searchJournalExports(new \Pggns\MidocoApi\Order\StructType\SearchJournalExportsRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchCashBookPrints operation/method
 */
if ($search->searchCashBookPrints(new \Pggns\MidocoApi\Order\StructType\SearchCashBookPrintRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchCashBookForCrtUser operation/method
 */
if ($search->searchCashBookForCrtUser(new \Pggns\MidocoApi\Order\StructType\SearchCashBookForCrtUserRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchReceipt operation/method
 */
if ($search->searchReceipt(new \Pggns\MidocoApi\Order\StructType\SearchReceiptRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchMediatorBillings operation/method
 */
if ($search->searchMediatorBillings(new \Pggns\MidocoApi\Order\StructType\SearchMediatorBillingsRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchMediatorCharges operation/method
 */
if ($search->searchMediatorCharges(new \Pggns\MidocoApi\Order\StructType\SearchMediatorChargesRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchBookingId operation/method
 */
if ($search->searchBookingId(new \Pggns\MidocoApi\Order\StructType\SearchBookingIdRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchSupplierAgencySettlements operation/method
 */
if ($search->searchSupplierAgencySettlements(new \Pggns\MidocoApi\Order\StructType\SearchSupplierAgencySettlementsRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchCustomerBookings operation/method
 */
if ($search->searchCustomerBookings(new \Pggns\MidocoApi\Order\StructType\SearchCustomerBookingsRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchDunning operation/method
 */
if ($search->searchDunning(new \Pggns\MidocoApi\Order\StructType\SearchDunningRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchMediatorProductSettlementInfo operation/method
 */
if ($search->searchMediatorProductSettlementInfo(new \Pggns\MidocoApi\Order\StructType\SearchMediatorProductSettlementInfoRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchAgencySettlementLevel operation/method
 */
if ($search->searchAgencySettlementLevel(new \Pggns\MidocoApi\Order\StructType\SearchAgencySettlementLevelRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchFileterdBillingDocumentForCustomer operation/method
 */
if ($search->searchFileterdBillingDocumentForCustomer(new \Pggns\MidocoApi\Order\StructType\SearchFilteredBillingDocumentForCustomerRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchAdviceSettlements operation/method
 */
if ($search->searchAdviceSettlements(new \Pggns\MidocoApi\Order\StructType\SearchAdviceSettlementsRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchBillingDunning operation/method
 */
if ($search->searchBillingDunning(new \Pggns\MidocoApi\Order\StructType\SearchBillingDunningRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchNameSpecifiedCashbook operation/method
 */
if ($search->searchNameSpecifiedCashbook(new \Pggns\MidocoApi\Order\StructType\SearchNameSpecifiedCashbookRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchFlightTimeChangeEmail operation/method
 */
if ($search->searchFlightTimeChangeEmail(new \Pggns\MidocoApi\Order\StructType\SearchFlightTimeChangeEmailRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchDuplicatedAdviceSettlementDetail operation/method
 */
if ($search->searchDuplicatedAdviceSettlementDetail(new \Pggns\MidocoApi\Order\StructType\SearchDuplicatedAdviceSettlementDetailRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchMdcSettlementCharges operation/method
 */
if ($search->searchMdcSettlementCharges(new \Pggns\MidocoApi\Order\StructType\SearchMdcSettlementChargesRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchMdcSettlementBillings operation/method
 */
if ($search->searchMdcSettlementBillings(new \Pggns\MidocoApi\Order\StructType\SearchMdcSettlementBillingsRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchPackageMargins operation/method
 */
if ($search->searchPackageMargins(new \Pggns\MidocoApi\Order\StructType\SearchPackageMarginsRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchPaymentProviderSettlements operation/method
 */
if ($search->searchPaymentProviderSettlements(new \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderSettlementsRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchPaymentProviderEntries operation/method
 */
if ($search->searchPaymentProviderEntries(new \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchTravelNoMargins operation/method
 */
if ($search->searchTravelNoMargins(new \Pggns\MidocoApi\Order\StructType\SearchTravelNoMarginsRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchTssProtocol operation/method
 */
if ($search->searchTssProtocol(new \Pggns\MidocoApi\Order\StructType\SearchTssProtocolRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchDSFinVKExport operation/method
 */
if ($search->searchDSFinVKExport(new \Pggns\MidocoApi\Order\StructType\SearchDSFinVKExportRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \Pggns\MidocoApi\Order\ServiceType\Delete($options);
$delete->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for deleteBillingDocRemark operation/method
 */
if ($delete->deleteBillingDocRemark(new \Pggns\MidocoApi\Order\StructType\DeleteBillingDocRemarkRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteBillingPosRemark operation/method
 */
if ($delete->deleteBillingPosRemark(new \Pggns\MidocoApi\Order\StructType\DeleteBillingPosRemarkRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteBillingPosition operation/method
 */
if ($delete->deleteBillingPosition(new \Pggns\MidocoApi\Order\StructType\DeleteBillingPositionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteBillingDocument operation/method
 */
if ($delete->deleteBillingDocument(new \Pggns\MidocoApi\Order\StructType\DeleteBillingDocumentRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteOrderDebitPayment operation/method
 */
if ($delete->deleteOrderDebitPayment(new \Pggns\MidocoApi\Order\StructType\DeleteOrderDebitPaymentRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteOrderOnlinePayment operation/method
 */
if ($delete->deleteOrderOnlinePayment(new \Pggns\MidocoApi\Order\StructType\DeleteOrderOnlinePaymentRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCashbook operation/method
 */
if ($delete->deleteCashbook(new \Pggns\MidocoApi\Order\StructType\DeleteCashbookRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSupplierSettlementErrorsForItem operation/method
 */
if ($delete->deleteSupplierSettlementErrorsForItem(new \Pggns\MidocoApi\Order\StructType\DeleteSupplierSettlementErrorsForItemRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteOrderRemark operation/method
 */
if ($delete->deleteOrderRemark(new \Pggns\MidocoApi\Order\StructType\DeleteOrderRemarkRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCashBookPrint operation/method
 */
if ($delete->deleteCashBookPrint(new \Pggns\MidocoApi\Order\StructType\DeleteCashBookPrintRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoBonusCalculation operation/method
 */
if ($delete->deleteMidocoBonusCalculation(new \Pggns\MidocoApi\Order\StructType\DeleteMidocoBonusCalculationRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSellItem operation/method
 */
if ($delete->deleteSellItem(new \Pggns\MidocoApi\Order\StructType\DeleteSellItemRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteOrder operation/method
 */
if ($delete->deleteOrder(new \Pggns\MidocoApi\Order\StructType\DeleteOrderRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSkippedBooking operation/method
 */
if ($delete->deleteSkippedBooking(new \Pggns\MidocoApi\Order\StructType\DeleteSkippedBookingRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteOldSkippedBookings operation/method
 */
if ($delete->deleteOldSkippedBookings(new \Pggns\MidocoApi\Order\StructType\DeleteOldSkippedBookingsRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoBonusAddition operation/method
 */
if ($delete->deleteMidocoBonusAddition(new \Pggns\MidocoApi\Order\StructType\DeleteMidocoBonusAdditionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteOrderAttributes operation/method
 */
if ($delete->deleteOrderAttributes(new \Pggns\MidocoApi\Order\StructType\DeleteOrderAttributesRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSellItemAttributes operation/method
 */
if ($delete->deleteSellItemAttributes(new \Pggns\MidocoApi\Order\StructType\DeleteSellItemAttributesRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMediatorBilling operation/method
 */
if ($delete->deleteMediatorBilling(new \Pggns\MidocoApi\Order\StructType\DeleteMediatorBillingRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMediatorCharge operation/method
 */
if ($delete->deleteMediatorCharge(new \Pggns\MidocoApi\Order\StructType\DeleteMediatorChargeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteOrderNotice operation/method
 */
if ($delete->deleteOrderNotice(new \Pggns\MidocoApi\Order\StructType\DeleteOrderNoticeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSupplierAgencySettlement operation/method
 */
if ($delete->deleteSupplierAgencySettlement(new \Pggns\MidocoApi\Order\StructType\DeleteSupplierAgencySettlementRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSupplAgencySettlemJournals operation/method
 */
if ($delete->deleteSupplAgencySettlemJournals(new \Pggns\MidocoApi\Order\StructType\DeleteSupplAgencySettlemJournalsRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMediatorProductSettlementInfo operation/method
 */
if ($delete->deleteMediatorProductSettlementInfo(new \Pggns\MidocoApi\Order\StructType\DeleteMediatorProductSettlementInfoRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteEmptyOrder operation/method
 */
if ($delete->deleteEmptyOrder(new \Pggns\MidocoApi\Order\StructType\DeleteEmptyOrderRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteProcessedBooking operation/method
 */
if ($delete->deleteProcessedBooking(new \Pggns\MidocoApi\Order\StructType\DeleteProcessedBookingRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteOldProcessedBookings operation/method
 */
if ($delete->deleteOldProcessedBookings(new \Pggns\MidocoApi\Order\StructType\DeleteOldProcessedBookingsRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteOrderDocument operation/method
 */
if ($delete->deleteOrderDocument(new \Pggns\MidocoApi\Order\StructType\DeleteOrderDocumentRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteBillingDocumentDocument operation/method
 */
if ($delete->deleteBillingDocumentDocument(new \Pggns\MidocoApi\Order\StructType\DeleteBillingDocumentDocumentRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteOrdersDbiInfos operation/method
 */
if ($delete->deleteOrdersDbiInfos(new \Pggns\MidocoApi\Order\StructType\DeleteOrdersDbiInfosRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteAdviceSettlement operation/method
 */
if ($delete->deleteAdviceSettlement(new \Pggns\MidocoApi\Order\StructType\DeleteAdviceSettlementRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteAdviceSettlementDetail operation/method
 */
if ($delete->deleteAdviceSettlementDetail(new \Pggns\MidocoApi\Order\StructType\DeleteAdviceSettlementDetailRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteFlightTimeChangeEmail operation/method
 */
if ($delete->deleteFlightTimeChangeEmail(new \Pggns\MidocoApi\Order\StructType\DeleteFlightTimeChangeEmailRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteBillingDocDbiInfos operation/method
 */
if ($delete->deleteBillingDocDbiInfos(new \Pggns\MidocoApi\Order\StructType\DeleteBillingDocDbiInfosRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoOrderQm operation/method
 */
if ($delete->deleteMidocoOrderQm(new \Pggns\MidocoApi\Order\StructType\DeleteMidocoOrderQmRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMdcSettlementCharge operation/method
 */
if ($delete->deleteMdcSettlementCharge(new \Pggns\MidocoApi\Order\StructType\DeleteMdcSettlementChargeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMdcSettlementBilling operation/method
 */
if ($delete->deleteMdcSettlementBilling(new \Pggns\MidocoApi\Order\StructType\DeleteMdcSettlementBillingRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSellRemark operation/method
 */
if ($delete->deleteSellRemark(new \Pggns\MidocoApi\Order\StructType\DeleteSellRemarkRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteBillingNotices operation/method
 */
if ($delete->deleteBillingNotices(new \Pggns\MidocoApi\Order\StructType\DeleteBillingNoticesRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deletePaymentProviderSettlement operation/method
 */
if ($delete->deletePaymentProviderSettlement(new \Pggns\MidocoApi\Order\StructType\DeletePaymentProviderSettlementRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteBillingPrint operation/method
 */
if ($delete->deleteBillingPrint(new \Pggns\MidocoApi\Order\StructType\DeleteBillingPrintRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteTravelnoPurchaseAssignment operation/method
 */
if ($delete->deleteTravelnoPurchaseAssignment(new \Pggns\MidocoApi\Order\StructType\DeleteTravelnoPurchaseAssignmentRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Create ServiceType
 */
$create = new \Pggns\MidocoApi\Order\ServiceType\Create($options);
$create->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for createBillingPrintjob operation/method
 */
if ($create->createBillingPrintjob(new \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createTravelPlanPrintjob operation/method
 */
if ($create->createTravelPlanPrintjob(new \Pggns\MidocoApi\Order\StructType\CreateTravelPlanPrintjobRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createSupplierMessage operation/method
 */
if ($create->createSupplierMessage(new \Pggns\MidocoApi\Order\StructType\CreateSupplierMessageRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createVermiLink operation/method
 */
if ($create->createVermiLink(new \Pggns\MidocoApi\Order\StructType\CreateVermiLinkRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createAcconLink operation/method
 */
if ($create->createAcconLink(new \Pggns\MidocoApi\Order\StructType\CreateAcconLinkRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createExternDocument4BillingDocument operation/method
 */
if ($create->createExternDocument4BillingDocument(new \Pggns\MidocoApi\Order\StructType\CreateExternDocument4BillingDocumentRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createAutomaticOrderNotice operation/method
 */
if ($create->createAutomaticOrderNotice(new \Pggns\MidocoApi\Order\StructType\CreateAutomaticOrderNoticeRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createVatCorrectionBillingDocument operation/method
 */
if ($create->createVatCorrectionBillingDocument(new \Pggns\MidocoApi\Order\StructType\CreateVatCorrectionBillingDocumentRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createDSFinVKExport operation/method
 */
if ($create->createDSFinVKExport(new \Pggns\MidocoApi\Order\StructType\CreateDSFinVKExportRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createTamaraEnrichment operation/method
 */
if ($create->createTamaraEnrichment(new \Pggns\MidocoApi\Order\StructType\GetBillingDocumentRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createEmptyOrder operation/method
 */
if ($create->createEmptyOrder(new \Pggns\MidocoApi\Order\StructType\CreateEmptyOrderRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createCollectiveCustomerInvoice operation/method
 */
if ($create->createCollectiveCustomerInvoice(new \Pggns\MidocoApi\Order\StructType\CreateCollectiveCustomerInvoiceRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Prepare ServiceType
 */
$prepare = new \Pggns\MidocoApi\Order\ServiceType\Prepare($options);
$prepare->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for prepareMidocoMailMessage operation/method
 */
if ($prepare->prepareMidocoMailMessage(new \Pggns\MidocoApi\Order\StructType\PrepareMidocoMailMessageRequest()) !== false) {
    print_r($prepare->getResult());
} else {
    print_r($prepare->getLastError());
}
/**
 * Sample call for prepareMediatorSettlement operation/method
 */
if ($prepare->prepareMediatorSettlement(new \Pggns\MidocoApi\Order\StructType\PrepareMediatorSettlementRequest()) !== false) {
    print_r($prepare->getResult());
} else {
    print_r($prepare->getLastError());
}
/**
 * Sample call for prepareAgencyProvision operation/method
 */
if ($prepare->prepareAgencyProvision(new \Pggns\MidocoApi\Order\StructType\PrepareAgencyProvisionRequest()) !== false) {
    print_r($prepare->getResult());
} else {
    print_r($prepare->getLastError());
}
/**
 * Sample call for prepareGroupAdvisorCommission operation/method
 */
if ($prepare->prepareGroupAdvisorCommission(new \Pggns\MidocoApi\Order\StructType\PrepareGroupAdvisorCommissionRequest()) !== false) {
    print_r($prepare->getResult());
} else {
    print_r($prepare->getLastError());
}
/**
 * Sample call for prepareAgenciesListForSettlement operation/method
 */
if ($prepare->prepareAgenciesListForSettlement(new \Pggns\MidocoApi\Order\StructType\PrepareAgenciesListForSettlementRequest()) !== false) {
    print_r($prepare->getResult());
} else {
    print_r($prepare->getLastError());
}
/**
 * Sample call for prepareBillingDocumentForCustomer operation/method
 */
if ($prepare->prepareBillingDocumentForCustomer(new \Pggns\MidocoApi\Order\StructType\PrepareBillingDocumentForCustomerRequest()) !== false) {
    print_r($prepare->getResult());
} else {
    print_r($prepare->getLastError());
}
/**
 * Sample call for prepareDunningBillings operation/method
 */
if ($prepare->prepareDunningBillings(new \Pggns\MidocoApi\Order\StructType\PrepareDunningBillingsRequest()) !== false) {
    print_r($prepare->getResult());
} else {
    print_r($prepare->getLastError());
}
/**
 * Sample call for prepareAdvice operation/method
 */
if ($prepare->prepareAdvice(new \Pggns\MidocoApi\Order\StructType\PrepareAdviceRequest()) !== false) {
    print_r($prepare->getResult());
} else {
    print_r($prepare->getLastError());
}
/**
 * Sample call for prepareCommissionInvoice operation/method
 */
if ($prepare->prepareCommissionInvoice(new \Pggns\MidocoApi\Order\StructType\PrepareCommissionInvoiceRequest()) !== false) {
    print_r($prepare->getResult());
} else {
    print_r($prepare->getLastError());
}
/**
 * Sample call for prepareMidocoSettlement operation/method
 */
if ($prepare->prepareMidocoSettlement(new \Pggns\MidocoApi\Order\StructType\PrepareMidocoSettlementRequest()) !== false) {
    print_r($prepare->getResult());
} else {
    print_r($prepare->getLastError());
}
/**
 * Sample call for preparePseudoRevenueBooking operation/method
 */
if ($prepare->preparePseudoRevenueBooking(new \Pggns\MidocoApi\Order\StructType\PreparePseudoRevenueBookingRequest()) !== false) {
    print_r($prepare->getResult());
} else {
    print_r($prepare->getLastError());
}
/**
 * Sample call for prepareSubOrders operation/method
 */
if ($prepare->prepareSubOrders(new \Pggns\MidocoApi\Order\StructType\PrepareSubOrdersRequest()) !== false) {
    print_r($prepare->getResult());
} else {
    print_r($prepare->getLastError());
}
/**
 * Samples for Send ServiceType
 */
$send = new \Pggns\MidocoApi\Order\ServiceType\Send($options);
$send->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for sendBatchInvoiceEmail operation/method
 */
if ($send->sendBatchInvoiceEmail(new \Pggns\MidocoApi\Order\StructType\SendBatchInvoiceEmailRequest()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for sendInvoiceByEMail operation/method
 */
if ($send->sendInvoiceByEMail(new \Pggns\MidocoApi\Order\StructType\SendInvoiceByEMailRequest()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Samples for Print ServiceType
 */
$print = new \Pggns\MidocoApi\Order\ServiceType\_Print($options);
$print->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for printBillingPrintjob operation/method
 */
if ($print->printBillingPrintjob(new \Pggns\MidocoApi\Order\StructType\PrintBillingPrintjobRequest()) !== false) {
    print_r($print->getResult());
} else {
    print_r($print->getLastError());
}
/**
 * Sample call for printTravelPlanPrintjob operation/method
 */
if ($print->printTravelPlanPrintjob(new \Pggns\MidocoApi\Order\StructType\PrintTravelPlanPrintjobRequest()) !== false) {
    print_r($print->getResult());
} else {
    print_r($print->getLastError());
}
/**
 * Sample call for printCashBook operation/method
 */
if ($print->printCashBook(new \Pggns\MidocoApi\Order\StructType\PrintCashBookRequest()) !== false) {
    print_r($print->getResult());
} else {
    print_r($print->getLastError());
}
/**
 * Sample call for printUserBonusCalculation operation/method
 */
if ($print->printUserBonusCalculation(new \Pggns\MidocoApi\Order\StructType\PrintUserBonusCalculationRequest()) !== false) {
    print_r($print->getResult());
} else {
    print_r($print->getLastError());
}
/**
 * Sample call for printAllUsersBonusCalculation operation/method
 */
if ($print->printAllUsersBonusCalculation(new \Pggns\MidocoApi\Order\StructType\PrintAllUsersBonusCalculationRequest()) !== false) {
    print_r($print->getResult());
} else {
    print_r($print->getLastError());
}
/**
 * Sample call for printOrderInvoice operation/method
 */
if ($print->printOrderInvoice(new \Pggns\MidocoApi\Order\StructType\PrintOrderInvoiceRequest()) !== false) {
    print_r($print->getResult());
} else {
    print_r($print->getLastError());
}
/**
 * Sample call for printAgencySettlementInvoice operation/method
 */
if ($print->printAgencySettlementInvoice(new \Pggns\MidocoApi\Order\StructType\PrintAgencySettlementInvoiceRequest()) !== false) {
    print_r($print->getResult());
} else {
    print_r($print->getLastError());
}
/**
 * Sample call for printAdvice operation/method
 */
if ($print->printAdvice(new \Pggns\MidocoApi\Order\StructType\PrintAdviceRequest()) !== false) {
    print_r($print->getResult());
} else {
    print_r($print->getLastError());
}
/**
 * Sample call for printAgencySettlementFibuConsoMode operation/method
 */
if ($print->printAgencySettlementFibuConsoMode(new \Pggns\MidocoApi\Order\StructType\PrintAgencySettlementFibuConsoModeRequest()) !== false) {
    print_r($print->getResult());
} else {
    print_r($print->getLastError());
}
/**
 * Samples for Void ServiceType
 */
$void = new \Pggns\MidocoApi\Order\ServiceType\_Void($options);
$void->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for voidBillingDocument operation/method
 */
if ($void->voidBillingDocument(new \Pggns\MidocoApi\Order\StructType\VoidBillingDocumentRequest()) !== false) {
    print_r($void->getResult());
} else {
    print_r($void->getLastError());
}
/**
 * Sample call for voidMediatorBilling operation/method
 */
if ($void->voidMediatorBilling(new \Pggns\MidocoApi\Order\StructType\VoidMediatorBillingRequest()) !== false) {
    print_r($void->getResult());
} else {
    print_r($void->getLastError());
}
/**
 * Sample call for voidMediatorSettlement operation/method
 */
if ($void->voidMediatorSettlement(new \Pggns\MidocoApi\Order\StructType\VoidMediatorSettlementRequest()) !== false) {
    print_r($void->getResult());
} else {
    print_r($void->getLastError());
}
/**
 * Sample call for voidMediatorProductSettlement operation/method
 */
if ($void->voidMediatorProductSettlement(new \Pggns\MidocoApi\Order\StructType\VoidMediatorProductSettlementRequest()) !== false) {
    print_r($void->getResult());
} else {
    print_r($void->getLastError());
}
/**
 * Sample call for voidReceipt operation/method
 */
if ($void->voidReceipt(new \Pggns\MidocoApi\Order\StructType\VoidReceiptRequest()) !== false) {
    print_r($void->getResult());
} else {
    print_r($void->getLastError());
}
/**
 * Sample call for voidJournalEntry operation/method
 */
if ($void->voidJournalEntry(new \Pggns\MidocoApi\Order\StructType\VoidJournalEntryRequest()) !== false) {
    print_r($void->getResult());
} else {
    print_r($void->getLastError());
}
/**
 * Sample call for voidRevenueBooking operation/method
 */
if ($void->voidRevenueBooking(new \Pggns\MidocoApi\Order\StructType\VoidRevenueBookingRequest()) !== false) {
    print_r($void->getResult());
} else {
    print_r($void->getLastError());
}
/**
 * Sample call for voidAndRebookForeignCurencyEntryHistory operation/method
 */
if ($void->voidAndRebookForeignCurencyEntryHistory(new \Pggns\MidocoApi\Order\StructType\VoidAndRebookForeignCurrencyEntryHistoryRequest()) !== false) {
    print_r($void->getResult());
} else {
    print_r($void->getLastError());
}
/**
 * Sample call for voidAgencySettlement operation/method
 */
if ($void->voidAgencySettlement(new \Pggns\MidocoApi\Order\StructType\VoidAgencySettlementRequest()) !== false) {
    print_r($void->getResult());
} else {
    print_r($void->getLastError());
}
/**
 * Sample call for voidTravelNoMarginBooking operation/method
 */
if ($void->voidTravelNoMarginBooking(new \Pggns\MidocoApi\Order\StructType\VoidTravelNoMarginBookingRequest()) !== false) {
    print_r($void->getResult());
} else {
    print_r($void->getLastError());
}
/**
 * Samples for Export ServiceType
 */
$export = new \Pggns\MidocoApi\Order\ServiceType\Export($options);
$export->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for exportAgencySettlementData operation/method
 */
if ($export->exportAgencySettlementData(new \Pggns\MidocoApi\Order\StructType\ExportAgencySettlementDataRequest()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Sample call for exportBookingJournal operation/method
 */
if ($export->exportBookingJournal(new \Pggns\MidocoApi\Order\StructType\ExportBookingJournalCriteria()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Sample call for exportBookingJournalFile operation/method
 */
if ($export->exportBookingJournalFile(new \Pggns\MidocoApi\Order\StructType\ExportBookingJournalCriteria()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Sample call for exportTravelRegistration operation/method
 */
if ($export->exportTravelRegistration(new \Pggns\MidocoApi\Order\StructType\ExportTravelRegistrationRequest()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Sample call for exportTravelPlan operation/method
 */
if ($export->exportTravelPlan(new \Pggns\MidocoApi\Order\StructType\ExportTravelPlanRequest()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Sample call for exportBillingDocument operation/method
 */
if ($export->exportBillingDocument(new \Pggns\MidocoApi\Order\StructType\ExportBillingDocumentRequest()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Sample call for exportOrderInvoice operation/method
 */
if ($export->exportOrderInvoice(new \Pggns\MidocoApi\Order\StructType\ExportOrderInvoiceRequest()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Sample call for exportPrintedAgencySettlements operation/method
 */
if ($export->exportPrintedAgencySettlements(new \Pggns\MidocoApi\Order\StructType\ExportPrintedAgencySettlementsRequest()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Sample call for exportIbizaData operation/method
 */
if ($export->exportIbizaData(new \Pggns\MidocoApi\Order\StructType\ExportIbizaDataRequest()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Sample call for exportReweData operation/method
 */
if ($export->exportReweData(new \Pggns\MidocoApi\Order\StructType\ExportReweDataRequest()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Sample call for exportAutomaticSettlement operation/method
 */
if ($export->exportAutomaticSettlement(new \Pggns\MidocoApi\Order\StructType\ExportAutomaticSettlementRequest()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Sample call for exportJournalData operation/method
 */
if ($export->exportJournalData(new \Pggns\MidocoApi\Order\StructType\ExportJournalDataRequest()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Sample call for exportSilverSurferData operation/method
 */
if ($export->exportSilverSurferData(new \Pggns\MidocoApi\Order\StructType\ExportSilverSurferDataRequest()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Sample call for exportSettlementsOverview operation/method
 */
if ($export->exportSettlementsOverview(new \Pggns\MidocoApi\Order\StructType\ExportSettlementOverviewRequest()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Sample call for exportCashTurnover operation/method
 */
if ($export->exportCashTurnover(new \Pggns\MidocoApi\Order\StructType\ExportCashTurnoverRequest()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Samples for Execute ServiceType
 */
$execute = new \Pggns\MidocoApi\Order\ServiceType\Execute($options);
$execute->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for executeMediatorSettlement operation/method
 */
if ($execute->executeMediatorSettlement(new \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementRequest()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Sample call for executeAgencySettlement operation/method
 */
if ($execute->executeAgencySettlement(new \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementRequest()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Sample call for executeCompetitionRule operation/method
 */
if ($execute->executeCompetitionRule(new \Pggns\MidocoApi\Order\StructType\ExecuteCompetitionRuleRequest()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Sample call for executeBonusRule operation/method
 */
if ($execute->executeBonusRule(new \Pggns\MidocoApi\Order\StructType\ExecuteBonusRuleRequest()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Sample call for executeSettlementChargeForCompany operation/method
 */
if ($execute->executeSettlementChargeForCompany(new \Pggns\MidocoApi\Order\StructType\ExecuteSettlementChargeForCompanyRequest()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Sample call for executeSettlementCharge operation/method
 */
if ($execute->executeSettlementCharge(new \Pggns\MidocoApi\Order\StructType\ExecuteSettlementChargeRequest()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Sample call for executeMediatorSettlementLevel operation/method
 */
if ($execute->executeMediatorSettlementLevel(new \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelRequest()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Sample call for executeGroupAdvisorCommission operation/method
 */
if ($execute->executeGroupAdvisorCommission(new \Pggns\MidocoApi\Order\StructType\ExecuteGroupAdvisorSettlementRequest()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Sample call for executeMediatorProductSettlement operation/method
 */
if ($execute->executeMediatorProductSettlement(new \Pggns\MidocoApi\Order\StructType\ExecuteMediatorProductSettlementRequest()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Sample call for executeAgencySettlementLevel operation/method
 */
if ($execute->executeAgencySettlementLevel(new \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementLevelRequest()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Sample call for executeBillingDunning operation/method
 */
if ($execute->executeBillingDunning(new \Pggns\MidocoApi\Order\StructType\ExecuteBillingDunningRequest()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Sample call for executeOrderRules operation/method
 */
if ($execute->executeOrderRules(new \Pggns\MidocoApi\Order\StructType\ExecuteOrderRulesRequest()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Sample call for executeRevertAuth operation/method
 */
if ($execute->executeRevertAuth(new \Pggns\MidocoApi\Order\StructType\ExecuteRevertAuthRequest()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Sample call for executeSingleMarginBooking operation/method
 */
if ($execute->executeSingleMarginBooking(new \Pggns\MidocoApi\Order\StructType\ExecuteSingleMarginBookingRequest()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Sample call for executeBackofficeExport operation/method
 */
if ($execute->executeBackofficeExport(new \Pggns\MidocoApi\Order\StructType\ExecuteBackofficeExportRequest()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Sample call for executeTravelNoMarginBooking operation/method
 */
if ($execute->executeTravelNoMarginBooking(new \Pggns\MidocoApi\Order\StructType\ExecuteTravelNoMarginBookingRequest()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \Pggns\MidocoApi\Order\ServiceType\Update($options);
$update->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for updateMediatorAmounts operation/method
 */
if ($update->updateMediatorAmounts(new \Pggns\MidocoApi\Order\StructType\UpdateMediatorAmountsRequest()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateOrderCooperationId operation/method
 */
if ($update->updateOrderCooperationId(new \Pggns\MidocoApi\Order\StructType\UpdateOrderCooperationIdRequest()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateChangeableReceiptPosition operation/method
 */
if ($update->updateChangeableReceiptPosition(new \Pggns\MidocoApi\Order\StructType\UpdateChangeableReceiptPositionRequest()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateFlightTimeChangeEmail operation/method
 */
if ($update->updateFlightTimeChangeEmail(new \Pggns\MidocoApi\Order\StructType\UpdateFlightTimeChangeEmailRequest()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateFlightTimeChangeEmailDet operation/method
 */
if ($update->updateFlightTimeChangeEmailDet(new \Pggns\MidocoApi\Order\StructType\UpdateFlightTimeChangeEmailDetRequest()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateSupplierAgencySettlementDetail operation/method
 */
if ($update->updateSupplierAgencySettlementDetail(new \Pggns\MidocoApi\Order\StructType\UpdateSupplierAgencySettlementDetailRequest()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updatePackageMargin operation/method
 */
if ($update->updatePackageMargin(new \Pggns\MidocoApi\Order\StructType\UpdatePackageMarginRequest()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateBookingStatus operation/method
 */
if ($update->updateBookingStatus(new \Pggns\MidocoApi\Order\StructType\UpdateBookingStatusRequest()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateOrderPaymentInfo operation/method
 */
if ($update->updateOrderPaymentInfo(new \Pggns\MidocoApi\Order\StructType\UpdateOrderPaymentInfoRequest()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Actualize ServiceType
 */
$actualize = new \Pggns\MidocoApi\Order\ServiceType\Actualize($options);
$actualize->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for actualizePhoneticData operation/method
 */
if ($actualize->actualizePhoneticData(new \Pggns\MidocoApi\Order\StructType\ActualizePhoneticDataRequest()) !== false) {
    print_r($actualize->getResult());
} else {
    print_r($actualize->getLastError());
}
/**
 * Sample call for actualizeOrderErmMail operation/method
 */
if ($actualize->actualizeOrderErmMail(new \Pggns\MidocoApi\Order\StructType\ActualizeOrderErmMailRequest()) !== false) {
    print_r($actualize->getResult());
} else {
    print_r($actualize->getLastError());
}
/**
 * Samples for Set ServiceType
 */
$set = new \Pggns\MidocoApi\Order\ServiceType\Set($options);
$set->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for setFinishedFlag operation/method
 */
if ($set->setFinishedFlag(new \Pggns\MidocoApi\Order\StructType\SetFinishedFlagRequest()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for setConfirmationRequiredOfSellitem operation/method
 */
if ($set->setConfirmationRequiredOfSellitem(new \Pggns\MidocoApi\Order\StructType\SetConfirmationRequiredOfSellitemRequest()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for setOrderMandate operation/method
 */
if ($set->setOrderMandate(new \Pggns\MidocoApi\Order\StructType\SetOrderMandateRequest()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for setRevenueBookingPayment operation/method
 */
if ($set->setRevenueBookingPayment(new \Pggns\MidocoApi\Order\StructType\SetRevenueBookingPaymentRequest()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Samples for Simulate ServiceType
 */
$simulate = new \Pggns\MidocoApi\Order\ServiceType\Simulate($options);
$simulate->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for simulateRevenueBooking operation/method
 */
if ($simulate->simulateRevenueBooking(new \Pggns\MidocoApi\Order\StructType\SimulateRevenueBookingRequest()) !== false) {
    print_r($simulate->getResult());
} else {
    print_r($simulate->getLastError());
}
/**
 * Samples for Add ServiceType
 */
$add = new \Pggns\MidocoApi\Order\ServiceType\Add($options);
$add->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for addSkippedBooking operation/method
 */
if ($add->addSkippedBooking(new \Pggns\MidocoApi\Order\StructType\AddSkippedBookingRequest()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addBillingPosForOfflineCC operation/method
 */
if ($add->addBillingPosForOfflineCC(new \Pggns\MidocoApi\Order\StructType\AddBillingPosForOfflineCCRequest()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addProcessedBooking operation/method
 */
if ($add->addProcessedBooking(new \Pggns\MidocoApi\Order\StructType\AddProcessedBookingRequest()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addOrderContactHistoryEntry operation/method
 */
if ($add->addOrderContactHistoryEntry(new \Pggns\MidocoApi\Order\StructType\AddOrderContactHistoryEntryRequest()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addAdditionalServices operation/method
 */
if ($add->addAdditionalServices(new \Pggns\MidocoApi\Order\StructType\AddAdditionalServicesRequest()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Samples for Change ServiceType
 */
$change = new \Pggns\MidocoApi\Order\ServiceType\Change($options);
$change->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for changeSellItemCreationUser operation/method
 */
if ($change->changeSellItemCreationUser(new \Pggns\MidocoApi\Order\StructType\ChangeSellItemCreationUserRequest()) !== false) {
    print_r($change->getResult());
} else {
    print_r($change->getLastError());
}
/**
 * Sample call for changeOrderCreationUser operation/method
 */
if ($change->changeOrderCreationUser(new \Pggns\MidocoApi\Order\StructType\ChangeOrderCreationUserRequest()) !== false) {
    print_r($change->getResult());
} else {
    print_r($change->getLastError());
}
/**
 * Samples for Validate ServiceType
 */
$validate = new \Pggns\MidocoApi\Order\ServiceType\Validate($options);
$validate->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for validateBonusCalculation operation/method
 */
if ($validate->validateBonusCalculation(new \Pggns\MidocoApi\Order\StructType\ValidateBonusCalculationRequest()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Samples for Read ServiceType
 */
$read = new \Pggns\MidocoApi\Order\ServiceType\Read($options);
$read->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for readNumberOfBookingsForBonusCalculation operation/method
 */
if ($read->readNumberOfBookingsForBonusCalculation(new \Pggns\MidocoApi\Order\StructType\ReadNumberOfBookingsForBonusCalculationRequest()) !== false) {
    print_r($read->getResult());
} else {
    print_r($read->getLastError());
}
/**
 * Samples for Check ServiceType
 */
$check = new \Pggns\MidocoApi\Order\ServiceType\Check($options);
$check->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for checkAccessTravelDataForCustomer operation/method
 */
if ($check->checkAccessTravelDataForCustomer(new \Pggns\MidocoApi\Order\StructType\CheckAccess_TravelDataForCustomerRequest()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for checkIfPaidBillingDoc operation/method
 */
if ($check->checkIfPaidBillingDoc(new \Pggns\MidocoApi\Order\StructType\CheckIfPaidBillingDocRequest()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for checkIfPaidOrder operation/method
 */
if ($check->checkIfPaidOrder(new \Pggns\MidocoApi\Order\StructType\CheckIfPaidOrderRequest()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for checkSupplierAgencySettlementBooking operation/method
 */
if ($check->checkSupplierAgencySettlementBooking(new \Pggns\MidocoApi\Order\StructType\CheckSupplierAgencySettlementBookingRequest()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for checkCreditLimit operation/method
 */
if ($check->checkCreditLimit(new \Pggns\MidocoApi\Order\StructType\CheckCreditLimitRequest()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for checkCreditLimitByOrder operation/method
 */
if ($check->checkCreditLimitByOrder(new \Pggns\MidocoApi\Order\StructType\CheckCreditLimitByOrderRequest()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for checkLockedUserByMail operation/method
 */
if ($check->checkLockedUserByMail(new \Pggns\MidocoApi\Order\StructType\CheckLockedUserByMailRequest()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for checkIfMultipleMdcSettlementBilling operation/method
 */
if ($check->checkIfMultipleMdcSettlementBilling(new \Pggns\MidocoApi\Order\StructType\CheckIfMultipleMdcSettlementBillingRequest()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for checkExistingAgencySettlementLevel operation/method
 */
if ($check->checkExistingAgencySettlementLevel(new \Pggns\MidocoApi\Order\StructType\CheckAgencySettlementLevelRequest()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for checkPaymentProviderSettlementBooking operation/method
 */
if ($check->checkPaymentProviderSettlementBooking(new \Pggns\MidocoApi\Order\StructType\CheckPaymentProviderSettlementBookingRequest()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for checkPaymentProviderSettlement operation/method
 */
if ($check->checkPaymentProviderSettlement(new \Pggns\MidocoApi\Order\StructType\CheckPaymentProviderSettlementRequest()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for checkSupplierAgencySettlement operation/method
 */
if ($check->checkSupplierAgencySettlement(new \Pggns\MidocoApi\Order\StructType\CheckSupplierAgencySettlementRequest()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Samples for Do ServiceType
 */
$do = new \Pggns\MidocoApi\Order\ServiceType\_Do($options);
$do->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for doMultiPrint operation/method
 */
if ($do->doMultiPrint(new \Pggns\MidocoApi\Order\StructType\MultiPrintRequest()) !== false) {
    print_r($do->getResult());
} else {
    print_r($do->getLastError());
}
/**
 * Sample call for doFlightTimeChangeEmail operation/method
 */
if ($do->doFlightTimeChangeEmail(new \Pggns\MidocoApi\Order\StructType\DoFlightTimeChangeEmailRequest()) !== false) {
    print_r($do->getResult());
} else {
    print_r($do->getLastError());
}
/**
 * Samples for Mark ServiceType
 */
$mark = new \Pggns\MidocoApi\Order\ServiceType\Mark($options);
$mark->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for markTravelplanHistoryEmailsSent operation/method
 */
if ($mark->markTravelplanHistoryEmailsSent(new \Pggns\MidocoApi\Order\StructType\MarkTravelplanHistoryEmailsSentRequest()) !== false) {
    print_r($mark->getResult());
} else {
    print_r($mark->getLastError());
}
/**
 * Sample call for markInvoiceHistoryEmailSent operation/method
 */
if ($mark->markInvoiceHistoryEmailSent(new \Pggns\MidocoApi\Order\StructType\MarkInvoiceHistoryEmailSentRequest()) !== false) {
    print_r($mark->getResult());
} else {
    print_r($mark->getLastError());
}
/**
 * Sample call for markExportChangedOrders operation/method
 */
if ($mark->markExportChangedOrders(new \Pggns\MidocoApi\Order\StructType\MarkExportChangedOrdersRequest()) !== false) {
    print_r($mark->getResult());
} else {
    print_r($mark->getLastError());
}
/**
 * Sample call for markOrderDocumentEmailSent operation/method
 */
if ($mark->markOrderDocumentEmailSent(new \Pggns\MidocoApi\Order\StructType\MarkOrderDocumentEmailSentRequest()) !== false) {
    print_r($mark->getResult());
} else {
    print_r($mark->getLastError());
}
/**
 * Sample call for markVoidedBillingNoticeComment operation/method
 */
if ($mark->markVoidedBillingNoticeComment(new \Pggns\MidocoApi\Order\StructType\MarkVoidedBillingNoticeCommentRequest()) !== false) {
    print_r($mark->getResult());
} else {
    print_r($mark->getLastError());
}
/**
 * Sample call for markVoidedOrderNoticeComment operation/method
 */
if ($mark->markVoidedOrderNoticeComment(new \Pggns\MidocoApi\Order\StructType\MarkVoidedOrderNoticeCommentRequest()) !== false) {
    print_r($mark->getResult());
} else {
    print_r($mark->getLastError());
}
/**
 * Samples for Import ServiceType
 */
$import = new \Pggns\MidocoApi\Order\ServiceType\Import($options);
$import->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for importMediatorCharges operation/method
 */
if ($import->importMediatorCharges(new \Pggns\MidocoApi\Order\StructType\ImportMediatorChargesRequest()) !== false) {
    print_r($import->getResult());
} else {
    print_r($import->getLastError());
}
/**
 * Sample call for importSupplierSettlementData operation/method
 */
if ($import->importSupplierSettlementData(new \Pggns\MidocoApi\Order\StructType\ImportSupplierSettlementDataRequest()) !== false) {
    print_r($import->getResult());
} else {
    print_r($import->getLastError());
}
/**
 * Sample call for importMdcSettlementCharges operation/method
 */
if ($import->importMdcSettlementCharges(new \Pggns\MidocoApi\Order\StructType\ImportMdcSettlementChargesRequest()) !== false) {
    print_r($import->getResult());
} else {
    print_r($import->getLastError());
}
/**
 * Sample call for importVouchers operation/method
 */
if ($import->importVouchers(new \Pggns\MidocoApi\Order\StructType\ImportVouchersRequest()) !== false) {
    print_r($import->getResult());
} else {
    print_r($import->getLastError());
}
/**
 * Sample call for importPaymentProviderSettlementData operation/method
 */
if ($import->importPaymentProviderSettlementData(new \Pggns\MidocoApi\Order\StructType\ImportPaymentProviderSettlementDataRequest()) !== false) {
    print_r($import->getResult());
} else {
    print_r($import->getLastError());
}
/**
 * Samples for Delegate ServiceType
 */
$delegate = new \Pggns\MidocoApi\Order\ServiceType\Delegate($options);
$delegate->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for delegatePrepareAgencySettlement operation/method
 */
if ($delegate->delegatePrepareAgencySettlement(new \Pggns\MidocoApi\Order\StructType\DelegatePrepareAgencySettlementRequest()) !== false) {
    print_r($delegate->getResult());
} else {
    print_r($delegate->getLastError());
}
/**
 * Samples for Move ServiceType
 */
$move = new \Pggns\MidocoApi\Order\ServiceType\Move($options);
$move->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for moveDocuments operation/method
 */
if ($move->moveDocuments(new \Pggns\MidocoApi\Order\StructType\MoveDocumentsRequest()) !== false) {
    print_r($move->getResult());
} else {
    print_r($move->getLastError());
}
/**
 * Samples for Rebooking ServiceType
 */
$rebooking = new \Pggns\MidocoApi\Order\ServiceType\Rebooking($options);
$rebooking->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for rebookingSupplierInvoice operation/method
 */
if ($rebooking->rebookingSupplierInvoice(new \Pggns\MidocoApi\Order\StructType\RebookingSupplierInvoiceRequest()) !== false) {
    print_r($rebooking->getResult());
} else {
    print_r($rebooking->getLastError());
}
/**
 * Samples for Modify ServiceType
 */
$modify = new \Pggns\MidocoApi\Order\ServiceType\Modify($options);
$modify->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for modifyOrderWorkfow operation/method
 */
if ($modify->modifyOrderWorkfow(new \Pggns\MidocoApi\Order\StructType\ModifyOrderWorkflowRequest()) !== false) {
    print_r($modify->getResult());
} else {
    print_r($modify->getLastError());
}
/**
 * Samples for Book ServiceType
 */
$book = new \Pggns\MidocoApi\Order\ServiceType\Book($options);
$book->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for bookSupplierAgencySettlementBooking operation/method
 */
if ($book->bookSupplierAgencySettlementBooking(new \Pggns\MidocoApi\Order\StructType\BookSupplierAgencySettlementBookingRequest()) !== false) {
    print_r($book->getResult());
} else {
    print_r($book->getLastError());
}
/**
 * Sample call for bookAdviceSettlement operation/method
 */
if ($book->bookAdviceSettlement(new \Pggns\MidocoApi\Order\StructType\BookAdviceSettlementRequest()) !== false) {
    print_r($book->getResult());
} else {
    print_r($book->getLastError());
}
/**
 * Sample call for bookPseudoRevenueBookings operation/method
 */
if ($book->bookPseudoRevenueBookings(new \Pggns\MidocoApi\Order\StructType\BookPseudoRevenueBookingsRequest()) !== false) {
    print_r($book->getResult());
} else {
    print_r($book->getLastError());
}
/**
 * Sample call for bookPaymentProviderSettlementBooking operation/method
 */
if ($book->bookPaymentProviderSettlementBooking(new \Pggns\MidocoApi\Order\StructType\BookPaymentProviderSettlementBookingRequest()) !== false) {
    print_r($book->getResult());
} else {
    print_r($book->getLastError());
}
/**
 * Sample call for bookMidocoVoucher4Kickback operation/method
 */
if ($book->bookMidocoVoucher4Kickback(new \Pggns\MidocoApi\Order\StructType\BookMidocoVoucher4KickbackRequest()) !== false) {
    print_r($book->getResult());
} else {
    print_r($book->getLastError());
}
/**
 * Samples for Is ServiceType
 */
$is = new \Pggns\MidocoApi\Order\ServiceType\Is($options);
$is->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for isOrderTotallyCancelled operation/method
 */
if ($is->isOrderTotallyCancelled(new \Pggns\MidocoApi\Order\StructType\IsOrderTotallyCancelledRequest()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Sample call for isPrintRequiredForPassengers operation/method
 */
if ($is->isPrintRequiredForPassengers(new \Pggns\MidocoApi\Order\StructType\IsPrintRequiredForPassengersRequest()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Samples for Invoke ServiceType
 */
$invoke = new \Pggns\MidocoApi\Order\ServiceType\Invoke($options);
$invoke->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for invokeProcessOrder operation/method
 */
if ($invoke->invokeProcessOrder(new \Pggns\MidocoApi\Order\StructType\InvokeProcessOrderRequest()) !== false) {
    print_r($invoke->getResult());
} else {
    print_r($invoke->getLastError());
}
/**
 * Samples for Cancel ServiceType
 */
$cancel = new \Pggns\MidocoApi\Order\ServiceType\Cancel($options);
$cancel->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for cancelPackage operation/method
 */
if ($cancel->cancelPackage(new \Pggns\MidocoApi\Order\StructType\CancelPackageRequest()) !== false) {
    print_r($cancel->getResult());
} else {
    print_r($cancel->getLastError());
}
/**
 * Sample call for cancelFlight operation/method
 */
if ($cancel->cancelFlight(new \Pggns\MidocoApi\Order\StructType\CancelFlightRequest()) !== false) {
    print_r($cancel->getResult());
} else {
    print_r($cancel->getLastError());
}
/**
 * Sample call for cancelSubscription operation/method
 */
if ($cancel->cancelSubscription(new \Pggns\MidocoApi\Order\StructType\CancelSubscriptionRequest()) !== false) {
    print_r($cancel->getResult());
} else {
    print_r($cancel->getLastError());
}
/**
 * Samples for Start ServiceType
 */
$start = new \Pggns\MidocoApi\Order\ServiceType\Start($options);
$start->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for startWorkOrderUpdate operation/method
 */
if ($start->startWorkOrderUpdate(new \Pggns\MidocoApi\Order\StructType\StartWorkOrderUpdateRequest()) !== false) {
    print_r($start->getResult());
} else {
    print_r($start->getLastError());
}
/**
 * Samples for End ServiceType
 */
$end = new \Pggns\MidocoApi\Order\ServiceType\End($options);
$end->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for endWorkOrderUpdate operation/method
 */
if ($end->endWorkOrderUpdate(new \Pggns\MidocoApi\Order\StructType\EndWorkOrderUpdateRequest()) !== false) {
    print_r($end->getResult());
} else {
    print_r($end->getLastError());
}
/**
 * Samples for Load ServiceType
 */
$load = new \Pggns\MidocoApi\Order\ServiceType\Load($options);
$load->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for loadFlightTimeChangeEmailDetails operation/method
 */
if ($load->loadFlightTimeChangeEmailDetails(new \Pggns\MidocoApi\Order\StructType\LoadFlightTimeChangeEmailDetailsRequest()) !== false) {
    print_r($load->getResult());
} else {
    print_r($load->getLastError());
}
/**
 * Samples for Flight ServiceType
 */
$flight = new \Pggns\MidocoApi\Order\ServiceType\Flight($options);
$flight->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for flightTimeChangeEmailOrderSave operation/method
 */
if ($flight->flightTimeChangeEmailOrderSave(new \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailOrderSaveRequest()) !== false) {
    print_r($flight->getResult());
} else {
    print_r($flight->getLastError());
}
/**
 * Samples for Process ServiceType
 */
$process = new \Pggns\MidocoApi\Order\ServiceType\Process($options);
$process->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for processInvoiceMixedMode operation/method
 */
if ($process->processInvoiceMixedMode(new \Pggns\MidocoApi\Order\StructType\ProcessInvoiceMixedModeRequest()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Sample call for processReceiptMixedMode operation/method
 */
if ($process->processReceiptMixedMode(new \Pggns\MidocoApi\Order\StructType\ProcessReceiptMixedModeRequest()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Sample call for processSofortTransaction operation/method
 */
if ($process->processSofortTransaction(new \Pggns\MidocoApi\Order\StructType\ProcessSofortTransactionRequest()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Sample call for processFairplaneFlightData operation/method
 */
if ($process->processFairplaneFlightData(new \Pggns\MidocoApi\Order\StructType\ProcessFairplaneFlightDataRequest()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Sample call for processCompensation2GoNotification operation/method
 */
if ($process->processCompensation2GoNotification(new \Pggns\MidocoApi\Order\StructType\ProcessCompensation2GoNotificationRequest()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Samples for Split ServiceType
 */
$split = new \Pggns\MidocoApi\Order\ServiceType\Split($options);
$split->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for splitSupplAgencySettlemBook operation/method
 */
if ($split->splitSupplAgencySettlemBook(new \Pggns\MidocoApi\Order\StructType\SplitSupplAgencySettlemBookRequest()) !== false) {
    print_r($split->getResult());
} else {
    print_r($split->getLastError());
}
/**
 * Samples for Agency ServiceType
 */
$agency = new \Pggns\MidocoApi\Order\ServiceType\Agency($options);
$agency->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for agencySettlementBookingSetItemPrice operation/method
 */
if ($agency->agencySettlementBookingSetItemPrice(new \Pggns\MidocoApi\Order\StructType\AgencySettlementBookingSetItemPriceRequest()) !== false) {
    print_r($agency->getResult());
} else {
    print_r($agency->getLastError());
}
/**
 * Samples for Simu ServiceType
 */
$simu = new \Pggns\MidocoApi\Order\ServiceType\Simu($options);
$simu->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for simuFee operation/method
 */
if ($simu->simuFee(new \Pggns\MidocoApi\Order\StructType\SimuFeeRequest()) !== false) {
    print_r($simu->getResult());
} else {
    print_r($simu->getLastError());
}
/**
 * Samples for Perform ServiceType
 */
$perform = new \Pggns\MidocoApi\Order\ServiceType\Perform($options);
$perform->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for performEntryClearing operation/method
 */
if ($perform->performEntryClearing(new \Pggns\MidocoApi\Order\StructType\PerformEntryClearingRequest()) !== false) {
    print_r($perform->getResult());
} else {
    print_r($perform->getLastError());
}
/**
 * Sample call for performForeignCurrencyEntryClearing operation/method
 */
if ($perform->performForeignCurrencyEntryClearing(new \Pggns\MidocoApi\Order\StructType\PerformForeignCurrencyEntryClearingRequest()) !== false) {
    print_r($perform->getResult());
} else {
    print_r($perform->getLastError());
}
/**
 * Samples for Upload ServiceType
 */
$upload = new \Pggns\MidocoApi\Order\ServiceType\Upload($options);
$upload->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for uploadPaymentData operation/method
 */
if ($upload->uploadPaymentData(new \Pggns\MidocoApi\Order\StructType\UploadPaymentDataRequest()) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
/**
 * Sample call for uploadBSPZip operation/method
 */
if ($upload->uploadBSPZip(new \Pggns\MidocoApi\Order\StructType\UploadBSPZipRequest()) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
/**
 * Samples for Remove ServiceType
 */
$remove = new \Pggns\MidocoApi\Order\ServiceType\Remove($options);
$remove->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for removeUnprintedBillingPositions operation/method
 */
if ($remove->removeUnprintedBillingPositions(new \Pggns\MidocoApi\Order\StructType\RemoveUnprintedBillingPositionsRequest()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Samples for Refresh ServiceType
 */
$refresh = new \Pggns\MidocoApi\Order\ServiceType\Refresh($options);
$refresh->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for refreshYpsilonPnr operation/method
 */
if ($refresh->refreshYpsilonPnr(new \Pggns\MidocoApi\Order\StructType\RefreshYpsilonPnrRequest()) !== false) {
    print_r($refresh->getResult());
} else {
    print_r($refresh->getLastError());
}
/**
 * Sample call for refreshDefaultFees operation/method
 */
if ($refresh->refreshDefaultFees(new \Pggns\MidocoApi\Order\StructType\RefreshDefaultFeesRequest()) !== false) {
    print_r($refresh->getResult());
} else {
    print_r($refresh->getLastError());
}
/**
 * Samples for List ServiceType
 */
$list = new \Pggns\MidocoApi\Order\ServiceType\_List($options);
$list->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for listMidocoOrderQm operation/method
 */
if ($list->listMidocoOrderQm(new \Pggns\MidocoApi\Order\StructType\ListMidocoOrderQmRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Samples for Edit ServiceType
 */
$edit = new \Pggns\MidocoApi\Order\ServiceType\Edit($options);
$edit->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for editEntry operation/method
 */
if ($edit->editEntry(new \Pggns\MidocoApi\Order\StructType\EditEntryRequest()) !== false) {
    print_r($edit->getResult());
} else {
    print_r($edit->getLastError());
}
/**
 * Sample call for editTravelNoMargin operation/method
 */
if ($edit->editTravelNoMargin(new \Pggns\MidocoApi\Order\StructType\EditTravelNoMarginRequest()) !== false) {
    print_r($edit->getResult());
} else {
    print_r($edit->getLastError());
}
/**
 * Samples for Needs ServiceType
 */
$needs = new \Pggns\MidocoApi\Order\ServiceType\Needs($options);
$needs->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for needsToPrintCashReceipt operation/method
 */
if ($needs->needsToPrintCashReceipt(new \Pggns\MidocoApi\Order\StructType\NeedsToPrintCashReceiptRequest()) !== false) {
    print_r($needs->getResult());
} else {
    print_r($needs->getLastError());
}
/**
 * Samples for Correct ServiceType
 */
$correct = new \Pggns\MidocoApi\Order\ServiceType\Correct($options);
$correct->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for correctBookingJournal operation/method
 */
if ($correct->correctBookingJournal(new \Pggns\MidocoApi\Order\StructType\CorrectBookingJournalRequest()) !== false) {
    print_r($correct->getResult());
} else {
    print_r($correct->getLastError());
}
/**
 * Samples for Register ServiceType
 */
$register = new \Pggns\MidocoApi\Order\ServiceType\Register($options);
$register->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for registerFairplane operation/method
 */
if ($register->registerFairplane(new \Pggns\MidocoApi\Order\StructType\RegisterFairplaneRequest()) !== false) {
    print_r($register->getResult());
} else {
    print_r($register->getLastError());
}
/**
 * Samples for Generate ServiceType
 */
$generate = new \Pggns\MidocoApi\Order\ServiceType\Generate($options);
$generate->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for generateCsvForCollectiveBilling operation/method
 */
if ($generate->generateCsvForCollectiveBilling(new \Pggns\MidocoApi\Order\StructType\GenerateCsvForCollectiveBillingRequest()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/**
 * Sample call for generateCsvForBatchInvoicing operation/method
 */
if ($generate->generateCsvForBatchInvoicing(new \Pggns\MidocoApi\Order\StructType\GenerateCsvForBatchInvoicingRequest()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/**
 * Sample call for generateInvoiceFile operation/method
 */
if ($generate->generateInvoiceFile(new \Pggns\MidocoApi\Order\StructType\GenerateInvoiceFileRequest()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/**
 * Samples for Pseudo ServiceType
 */
$pseudo = new \Pggns\MidocoApi\Order\ServiceType\Pseudo($options);
$pseudo->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for pseudoRBCsvExport operation/method
 */
if ($pseudo->pseudoRBCsvExport(new \Pggns\MidocoApi\Order\StructType\PseudoRBCsvExportRequest()) !== false) {
    print_r($pseudo->getResult());
} else {
    print_r($pseudo->getLastError());
}
/**
 * Samples for Recalculate ServiceType
 */
$recalculate = new \Pggns\MidocoApi\Order\ServiceType\Recalculate($options);
$recalculate->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for recalculateTravelNoMargin operation/method
 */
if ($recalculate->recalculateTravelNoMargin(new \Pggns\MidocoApi\Order\StructType\RecalculateTravelNoMarginRequest()) !== false) {
    print_r($recalculate->getResult());
} else {
    print_r($recalculate->getLastError());
}
/**
 * Samples for Amadeus ServiceType
 */
$amadeus = new \Pggns\MidocoApi\Order\ServiceType\Amadeus($options);
$amadeus->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for amadeusManualClearing operation/method
 */
if ($amadeus->amadeusManualClearing(new \Pggns\MidocoApi\Order\StructType\AmadeusManualClearingRequest()) !== false) {
    print_r($amadeus->getResult());
} else {
    print_r($amadeus->getLastError());
}
/**
 * Samples for Initialize ServiceType
 */
$initialize = new \Pggns\MidocoApi\Order\ServiceType\Initialize($options);
$initialize->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for initializeCashBookSignature operation/method
 */
if ($initialize->initializeCashBookSignature(new \Pggns\MidocoApi\Order\StructType\InitializeCashBookSignatureRequest()) !== false) {
    print_r($initialize->getResult());
} else {
    print_r($initialize->getLastError());
}
/**
 * Samples for Cash ServiceType
 */
$cash = new \Pggns\MidocoApi\Order\ServiceType\Cash($options);
$cash->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for cashBookSignatureBalance operation/method
 */
if ($cash->cashBookSignatureBalance(new \Pggns\MidocoApi\Order\StructType\CashBookSignatureBalanceRequest()) !== false) {
    print_r($cash->getResult());
} else {
    print_r($cash->getLastError());
}
/**
 * Samples for Close ServiceType
 */
$close = new \Pggns\MidocoApi\Order\ServiceType\Close($options);
$close->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for closeCashBookSignature operation/method
 */
if ($close->closeCashBookSignature(new \Pggns\MidocoApi\Order\StructType\CloseCashBookSignatureRequest()) !== false) {
    print_r($close->getResult());
} else {
    print_r($close->getLastError());
}
/**
 * Samples for Reprint ServiceType
 */
$reprint = new \Pggns\MidocoApi\Order\ServiceType\Reprint($options);
$reprint->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for reprintReceipt operation/method
 */
if ($reprint->reprintReceipt(new \Pggns\MidocoApi\Order\StructType\ReprintReceiptRequest()) !== false) {
    print_r($reprint->getResult());
} else {
    print_r($reprint->getLastError());
}
/**
 * Samples for Duplicate ServiceType
 */
$duplicate = new \Pggns\MidocoApi\Order\ServiceType\Duplicate($options);
$duplicate->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for duplicateOrder operation/method
 */
if ($duplicate->duplicateOrder(new \Pggns\MidocoApi\Order\StructType\DuplicateOrderRequest()) !== false) {
    print_r($duplicate->getResult());
} else {
    print_r($duplicate->getLastError());
}
/**
 * Samples for Online ServiceType
 */
$online = new \Pggns\MidocoApi\Order\ServiceType\Online($options);
$online->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for onlineSearchTssProtocol operation/method
 */
if ($online->onlineSearchTssProtocol(new \Pggns\MidocoApi\Order\StructType\SearchTssProtocolRequest()) !== false) {
    print_r($online->getResult());
} else {
    print_r($online->getLastError());
}
/**
 * Sample call for onlineGetTssProtocol operation/method
 */
if ($online->onlineGetTssProtocol(new \Pggns\MidocoApi\Order\StructType\GetTssProtocolRequest()) !== false) {
    print_r($online->getResult());
} else {
    print_r($online->getLastError());
}
/**
 * Samples for Donate ServiceType
 */
$donate = new \Pggns\MidocoApi\Order\ServiceType\Donate($options);
$donate->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for donateKickback operation/method
 */
if ($donate->donateKickback(new \Pggns\MidocoApi\Order\StructType\DonateKickbackRequest()) !== false) {
    print_r($donate->getResult());
} else {
    print_r($donate->getLastError());
}
/**
 * Samples for Auto ServiceType
 */
$auto = new \Pggns\MidocoApi\Order\ServiceType\Auto($options);
$auto->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for autoSplitTravelnoPurchaseAssignments operation/method
 */
if ($auto->autoSplitTravelnoPurchaseAssignments(new \Pggns\MidocoApi\Order\StructType\AutoSplitTravelnoPurchaseAssignmentsRequest()) !== false) {
    print_r($auto->getResult());
} else {
    print_r($auto->getLastError());
}
/**
 * Samples for Handle ServiceType
 */
$handle = new \Pggns\MidocoApi\Order\ServiceType\Handle($options);
$handle->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for handleBookingDotComNotification operation/method
 */
if ($handle->handleBookingDotComNotification(new \Pggns\MidocoApi\Order\StructType\HandleBookingDotComNotificationRequest()) !== false) {
    print_r($handle->getResult());
} else {
    print_r($handle->getLastError());
}
