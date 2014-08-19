<?php
namespace FedEx\LocatorService;

use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locator Service
 */
class Request extends AbstractRequest
{
    public function __construct($beta = true, $wsdlFile = 'LocatorService_v2.wsdl', $wsdlPath = null)
    {
        parent::__construct($beta, $wsdlFile, $wsdlPath);
    }

    /**
     * Sends the FedExLocatorRequest and returns the response
     *
     * @param ComplexType\FedExLocatorRequest $fedExLocatorRequest
     * @return stdClass
     */
    public function getFedExLocatorReply(ComplexType\FedExLocatorRequest $fedExLocatorRequest)
    {
        return $this->_soapClient->fedExLocator($fedExLocatorRequest->toArray());
    }

}
