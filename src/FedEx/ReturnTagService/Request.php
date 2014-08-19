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
    public function __construct($beta = true, $wsdlFile = 'ReturnTagService_v1.wsdl', $wsdlPath = null)
    {
        parent::__construct($beta, $wsdlFile, $wsdlPath);
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
