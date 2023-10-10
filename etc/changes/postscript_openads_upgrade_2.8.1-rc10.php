<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

$className = 'OA_UpgradePostscript_2_8_1_rc10';

require_once MAX_PATH . '/lib/OA/DB/Table.php';
require_once MAX_PATH . '/lib/OA/Upgrade/UpgradeLogger.php';

class OA_UpgradePostscript_2_8_1_rc10
{
    /**
     * @var OA_Upgrade
     */
    public $oUpgrade;

    /**
     * @var MDB2_Driver_Common
     */
    public $oDbh;

    /**
     * DB table prefix
     *
     * @var string
     */
    public $prefix;
    public $tblPreferences;

    public function __construct()
    {
    }

    public function execute($aParams)
    {
        $this->oUpgrade = &$aParams[0];

        $this->oDbh = OA_DB::singleton();
        $aConf = $GLOBALS['_MAX']['CONF']['table'];
        $this->prefix = $aConf['prefix'];
        $this->tblPreferences = $aConf['prefix'] . ($aConf['preferences'] ? $aConf['preferences'] : 'preferences');

        $query = "INSERT INTO " . $this->oDbh->quoteIdentifier($this->tblPreferences, true) . "
                  (preference_name, account_type)
                 VALUES('ui_show_entity_id', '')";
        $ret = $this->oDbh->query($query);
        //check for error
        if (PEAR::isError($ret)) {
            $this->logError($ret->getUserInfo());
            return false;
        }

        $this->logOnly("Added 'ui_show_entity_id' preference");
        return true;
    }

    public function logOnly($msg)
    {
        $this->oUpgrade->oLogger->logOnly($msg);
    }


    public function logError($msg)
    {
        $this->oUpgrade->oLogger->logError($msg);
    }
}
