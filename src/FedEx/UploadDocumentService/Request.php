<?php
namespace FedEx\UploadDocumentService;

use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class Request extends AbstractRequest
{
    public function __construct($beta = true, $wsdlPath = null)
    {
        parent::__construct($beta, 'UploadDocumentService_v1.wsdl', $wsdlPath);
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
     * Sends the UploadDocumentsRequest and returns the response
     *
     * @param ComplexType\UploadDocumentsRequest $uploadDocumentsRequest
     * @return stdClass
     */
    public function getUploadDocumentsReply(ComplexType\UploadDocumentsRequest $uploadDocumentsRequest)
    {
        return $this->_soapClient->uploadDocuments($uploadDocumentsRequest->toArray());
    }
       /**
     * Sends the UploadImagesRequest and returns the response
     *
     * @param ComplexType\UploadImagesRequest $uploadImagesRequest
     * @return stdClass
     */
    public function getUploadImagesReply(ComplexType\UploadImagesRequest $uploadImagesRequest)
    {
        return $this->_soapClient->uploadImages($uploadImagesRequest->toArray());
    }


}

