<?php

/**
 * The old Record Manager
 * NOTE: I don't think this is necessary anymore as this rdo class isn't used
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
class Horde_DNS_Record_Manager extends Horde_DNS_Manager
{
    protected $_mapper = 'Record';

    public function getRecord($id)
    {
        return $this->mapper->findOne($id);
    }

    public function listRecords(array $criteria)
    {
        return $this->mapper->find($criteria);
    }

    public function getUpdateData(array $criteria = null)
    {
        $resultsArray = array();
        $results = $this->mapper->find($criteria);
        foreach ($results as $result) {
            $resultsArray[] = $result->toArray();
        }
        return $resultsArray;
    }

}
