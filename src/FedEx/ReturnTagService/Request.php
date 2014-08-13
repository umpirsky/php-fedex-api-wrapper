<?php
namespace FedEx\ReturnTagService;

use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Return Tag Service
 */
class Request extends AbstractRequest
{
    public function __construct($beta = true, $wsdlPath = null)
    {
        parent::__construct($beta, 'ReturnTagService_v1.wsdl', $wsdlPath);
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
     * Sends the ExpressTagAvailabilityRequest and returns the response
     *
     * @param ComplexType\ExpressTagAvailabilityRequest $expressTagAvailabilityRequest
     * @return stdClass
     */
    public function getGetExpressTagAvailabilityReply(ComplexType\ExpressTagAvailabilityRequest $expressTagAvailabilityRequest)
    {
        return $this->_soapClient->getExpressTagAvailability($expressTagAvailabilityRequest->toArray());
    }


}

