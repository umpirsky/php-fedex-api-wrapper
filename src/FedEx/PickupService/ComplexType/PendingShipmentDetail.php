<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This information describes the kind of pending shipment being requested.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PendingShipmentDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PendingShipmentDetail';

    /**
     * Identifies the type of FedEx pending shipment
     *
     * @param \FedEx\Pickup\SimpleType\PendingShipmentType|string $type
     * @return PendingShipmentDetail
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Identifies the type of FedEx pending shipment
     *
     * @return \FedEx\Pickup\SimpleType\PendingShipmentType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Date after which the pending shipment will no longer be available for completion.
     *
     * @param date $expirationDate
     * @return PendingShipmentDetail
     */
    public function setExpirationDate($expirationDate)
    {
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    
    /**
     * Returns Date after which the pending shipment will no longer be available for completion.
     *
     * @return date
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    
    /**
     * Only used with type of EMAIL.
     *
     * @param EMailLabelDetail $emailLabelDetail
     * @return PendingShipmentDetail
     */
    public function setEmailLabelDetail(EMailLabelDetail $emailLabelDetail)
    {
        $this->EmailLabelDetail = $emailLabelDetail;
        return $this;
    }
    
    /**
     * Returns Only used with type of EMAIL.
     *
     * @return EMailLabelDetail
     */
    public function getEmailLabelDetail()
    {
        return $this->EmailLabelDetail;
    }
    

    
}