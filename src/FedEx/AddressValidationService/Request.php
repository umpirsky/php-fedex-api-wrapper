<?php
namespace FedEx\AddressValidationService;

use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class Request extends AbstractRequest
{
    public function __construct($beta = true, $wsdlPath = null)
    {
        parent::__construct($beta, 'AddressValidationService_v2.wsdl', $wsdlPath);
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
     * Sends the AddressValidationRequest and returns the response
     *
     * @param ComplexType\AddressValidationRequest $addressValidationRequest
     * @return stdClass
     */
    public function getAddressValidationReply(ComplexType\AddressValidationRequest $addressValidationRequest)
    {
        return $this->_soapClient->addressValidation($addressValidationRequest->toArray());
    }


}

