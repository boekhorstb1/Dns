<?php

/**
 * The Record RDO Mapper
 *
 * See the enclosed file LICENSE for license information (LGPL). If you
 * did not receive this file, see http://www.horde.org/licenses/lgpl21.
 *
 * @author Diana Hille <hille@b1-systems.de>
 * @author Ralf Lang <lang@b1-systems.de>
 *
 * @category   Horde
 * @package horde-dns
 */
class Horde_DNS_Backend_Rdo_RecordMapper extends Horde_Rdo_Mapper
{
    protected $_classname = 'Horde_DNS_Backend_Rdo_RecordEntity';
    protected $_table = 'horde_dns_records';
    protected $_lazyRelationships = array(
        'zone' => array('type' => Horde_Rdo::MANY_TO_ONE,
                         'foreignkey' => 'zone',
                         'mapper' => 'Horde_DNS_Backend_Rdo_ZoneMapper')
    );
}
