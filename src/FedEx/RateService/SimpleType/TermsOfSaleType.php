<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TermsOfSaleType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class TermsOfSaleType
    extends AbstractSimpleType
{
    const _CFR_OR_CPT = 'CFR_OR_CPT';
    const _CIF_OR_CIP = 'CIF_OR_CIP';
    const _DAP = 'DAP';
    const _DAT = 'DAT';
    const _DDP = 'DDP';
    const _DDU = 'DDU';
    const _EXW = 'EXW';
    const _FOB_OR_FCA = 'FOB_OR_FCA';
}