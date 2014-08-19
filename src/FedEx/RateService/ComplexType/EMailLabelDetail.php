<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EMailLabelDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class EMailLabelDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'EMailLabelDetail';

    /**
     * Set NotificationEMailAddress
     *
     * @param string $notificationEMailAddress
     * @return EMailLabelDetail
     */
    public function setNotificationEMailAddress($notificationEMailAddress)
    {
        $this->NotificationEMailAddress = $notificationEMailAddress;
        return $this;
    }
    
    /**
     * Returns Set NotificationEMailAddress
     *
     * @return string
     */
    public function getNotificationEMailAddress()
    {
        return $this->NotificationEMailAddress;
    }
    
    /**
     * Set NotificationMessage
     *
     * @param string $notificationMessage
     * @return EMailLabelDetail
     */
    public function setNotificationMessage($notificationMessage)
    {
        $this->NotificationMessage = $notificationMessage;
        return $this;
    }
    
    /**
     * Returns Set NotificationMessage
     *
     * @return string
     */
    public function getNotificationMessage()
    {
        return $this->NotificationMessage;
    }
    

    
}