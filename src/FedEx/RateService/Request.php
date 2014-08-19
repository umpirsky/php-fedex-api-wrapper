<?php
namespace FedEx\RateService;

use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class Request extends AbstractRequest
{
    public function __construct($beta = true, $wsdlFile = 'RateService_v14.wsdl', $wsdlPath = null)
    {
        parent::__construct($beta, $wsdlFile, $wsdlPath);
    }

    /**
     * Sends the RateRequest and returns the response
     *
     * @param ComplexType\RateRequest $rateRequest
     * @return stdClass
     */
    public function getGetRatesReply(ComplexType\RateRequest $rateRequest)
    {
        return $this->_soapClient->getRates($rateRequest->toArray());
    }

}
