<?php
namespace FedEx\TrackService;

use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class Request extends AbstractRequest
{
    public function __construct($beta = true, $wsdlFile = 'TrackService_v5.wsdl', $wsdlPath = null)
    {
        parent::__construct($beta, $wsdlFile, $wsdlPath);
    }

    /**
     * Sends the TrackNotificationRequest and returns the response
     *
     * @param ComplexType\TrackNotificationRequest $trackNotificationRequest
     * @return stdClass
     */
    public function getGetTrackNotificationReply(ComplexType\TrackNotificationRequest $trackNotificationRequest)
    {
        return $this->_soapClient->getTrackNotification($trackNotificationRequest->toArray());
    }
    /**
     * Sends the SignatureProofOfDeliveryLetterRequest and returns the response
     *
     * @param ComplexType\SignatureProofOfDeliveryLetterRequest $signatureProofOfDeliveryLetterRequest
     * @return stdClass
     */
    public function getRetrieveSignatureProofOfDeliveryLetterReply(ComplexType\SignatureProofOfDeliveryLetterRequest $signatureProofOfDeliveryLetterRequest)
    {
        return $this->_soapClient->retrieveSignatureProofOfDeliveryLetter($signatureProofOfDeliveryLetterRequest->toArray());
    }
    /**
     * Sends the TrackRequest and returns the response
     *
     * @param ComplexType\TrackRequest $trackRequest
     * @return stdClass
     */
    public function getTrackReply(ComplexType\TrackRequest $trackRequest)
    {
        return $this->_soapClient->track($trackRequest->toArray());
    }
    /**
     * Sends the SignatureProofOfDeliveryFaxRequest and returns the response
     *
     * @param ComplexType\SignatureProofOfDeliveryFaxRequest $signatureProofOfDeliveryFaxRequest
     * @return stdClass
     */
    public function getSendSignatureProofOfDeliveryFaxReply(ComplexType\SignatureProofOfDeliveryFaxRequest $signatureProofOfDeliveryFaxRequest)
    {
        return $this->_soapClient->sendSignatureProofOfDeliveryFax($signatureProofOfDeliveryFaxRequest->toArray());
    }

}
