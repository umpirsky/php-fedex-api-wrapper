<?php
namespace FedEx\CloseService;

use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class Request extends AbstractRequest
{
    public function __construct($beta = true, $wsdlFile = 'CloseService_v2.wsdl', $wsdlPath = null)
    {
        parent::__construct($beta, $wsdlFile, $wsdlPath);
    }

    /**
     * Sends the SmartPostCloseRequest and returns the response
     *
     * @param ComplexType\SmartPostCloseRequest $smartPostCloseRequest
     * @return stdClass
     */
    public function getSmartPostCloseReply(ComplexType\SmartPostCloseRequest $smartPostCloseRequest)
    {
        return $this->_soapClient->smartPostClose($smartPostCloseRequest->toArray());
    }
    /**
     * Sends the GroundCloseRequest and returns the response
     *
     * @param ComplexType\GroundCloseRequest $groundCloseRequest
     * @return stdClass
     */
    public function getGroundCloseReply(ComplexType\GroundCloseRequest $groundCloseRequest)
    {
        return $this->_soapClient->groundClose($groundCloseRequest->toArray());
    }
    /**
     * Sends the GroundCloseReportsReprintRequest and returns the response
     *
     * @param ComplexType\GroundCloseReportsReprintRequest $groundCloseReportsReprintRequest
     * @return stdClass
     */
    public function getGroundCloseReportsReprintReply(ComplexType\GroundCloseReportsReprintRequest $groundCloseReportsReprintRequest)
    {
        return $this->_soapClient->groundCloseReportsReprint($groundCloseReportsReprintRequest->toArray());
    }
    /**
     * Sends the GroundCloseWithDocumentsRequest and returns the response
     *
     * @param ComplexType\GroundCloseWithDocumentsRequest $groundCloseWithDocumentsRequest
     * @return stdClass
     */
    public function getGroundCloseWithDocumentsReply(ComplexType\GroundCloseWithDocumentsRequest $groundCloseWithDocumentsRequest)
    {
        return $this->_soapClient->groundCloseWithDocuments($groundCloseWithDocumentsRequest->toArray());
    }
    /**
     * Sends the ReprintGroundCloseDocumentsRequest and returns the response
     *
     * @param ComplexType\ReprintGroundCloseDocumentsRequest $reprintGroundCloseDocumentsRequest
     * @return stdClass
     */
    public function getReprintGroundCloseDocumentsReply(ComplexType\ReprintGroundCloseDocumentsRequest $reprintGroundCloseDocumentsRequest)
    {
        return $this->_soapClient->reprintGroundCloseDocuments($reprintGroundCloseDocumentsRequest->toArray());
    }

}
