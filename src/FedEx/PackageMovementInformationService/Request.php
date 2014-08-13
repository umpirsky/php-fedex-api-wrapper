<?php
namespace FedEx\PackageMovementInformationService;

use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class Request extends AbstractRequest
{
    public function __construct($beta = true, $wsdlPath = null)
    {
        parent::__construct($beta, 'PackageMovementInformationService_v5.wsdl', $wsdlPath);
    }

    /**
     * Returns the SoapClient instance
     *
     * @return \SoapClient
     */
    public function getSoapClient()
    {
        return $this->_soapClient;
    }

    /**
     * Sends the PostalCodeInquiryRequest and returns the response
     *
     * @param ComplexType\PostalCodeInquiryRequest $postalCodeInquiryRequest
     * @return stdClass
     */
    public function getPostalCodeInquiryReply(ComplexType\PostalCodeInquiryRequest $postalCodeInquiryRequest)
    {
        return $this->_soapClient->postalCodeInquiry($postalCodeInquiryRequest->toArray());
    }
       /**
     * Sends the ServiceAvailabilityRequest and returns the response
     *
     * @param ComplexType\ServiceAvailabilityRequest $serviceAvailabilityRequest
     * @return stdClass
     */
    public function getServiceAvailabilityReply(ComplexType\ServiceAvailabilityRequest $serviceAvailabilityRequest)
    {
        return $this->_soapClient->serviceAvailability($serviceAvailabilityRequest->toArray());
    }


}

