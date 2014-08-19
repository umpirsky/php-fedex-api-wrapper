<?php
namespace FedEx\Pickup;

use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class Request extends AbstractRequest
{
    public function __construct($beta = true, $wsdlFile = 'PickupService_v3.wsdl', $wsdlPath = null)
    {
        parent::__construct($beta, $wsdlFile, $wsdlPath);
    }

    /**
     * Sends the PickupAvailabilityRequest and returns the response
     *
     * @param ComplexType\PickupAvailabilityRequest $pickupAvailabilityRequest
     * @return stdClass
     */
    public function getGetPickupAvailabilityReply(ComplexType\PickupAvailabilityRequest $pickupAvailabilityRequest)
    {
        return $this->_soapClient->getPickupAvailability($pickupAvailabilityRequest->toArray());
    }
    /**
     * Sends the CreatePickupRequest and returns the response
     *
     * @param ComplexType\CreatePickupRequest $createPickupRequest
     * @return stdClass
     */
    public function getCreatePickupReply(ComplexType\CreatePickupRequest $createPickupRequest)
    {
        return $this->_soapClient->createPickup($createPickupRequest->toArray());
    }
    /**
     * Sends the CancelPickupRequest and returns the response
     *
     * @param ComplexType\CancelPickupRequest $cancelPickupRequest
     * @return stdClass
     */
    public function getCancelPickupReply(ComplexType\CancelPickupRequest $cancelPickupRequest)
    {
        return $this->_soapClient->cancelPickup($cancelPickupRequest->toArray());
    }

}
