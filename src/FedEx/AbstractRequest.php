<?php

namespace FedEx;

/**
 * Abstract class for Request classes
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 */
abstract class AbstractRequest
{
    protected $_soapClient;

    public function __construct($beta = true, $wsdlFile, $wsdlPath = null)
    {
        if (null === $wsdlPath) {
            $wsdlPath = __DIR__.'/_wsdl/'.($beta ? 'beta/' : '').$wsdlFile;
        }

        $this->_soapClient = new \SoapClient($wsdlPath, array('trace' => true));
    }

    public function getSoapClient()
    {
        return $this->_soapClient;
    }
}
