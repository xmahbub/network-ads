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

require_once MAX_PATH . '/etc/changes/StatMigration.php';
require_once(MAX_PATH . '/lib/OA/Upgrade/Migration.php');

class Migration_199 extends Migration
{
    public function __construct()
    {
        //$this->__construct();

        $this->aTaskList_destructive[] = 'beforeRemoveTable__adclicks';
        $this->aTaskList_destructive[] = 'afterRemoveTable__adclicks';
        $this->aTaskList_destructive[] = 'beforeRemoveTable__adstats';
        $this->aTaskList_destructive[] = 'afterRemoveTable__adstats';
        $this->aTaskList_destructive[] = 'beforeRemoveTable__adviews';
        $this->aTaskList_destructive[] = 'afterRemoveTable__adviews';
        $this->aTaskList_destructive[] = 'beforeRemoveTable__cache';
        $this->aTaskList_destructive[] = 'afterRemoveTable__cache';
        $this->aTaskList_destructive[] = 'beforeRemoveTable__config';
        $this->aTaskList_destructive[] = 'afterRemoveTable__config';
    }



    public function beforeRemoveTable__adclicks()
    {
        return $this->beforeRemoveTable('adclicks');
    }

    public function afterRemoveTable__adclicks()
    {
        return $this->afterRemoveTable('adclicks');
    }

    public function beforeRemoveTable__adstats()
    {
        $migration = new StatMigration();
        $migration->init($this->oDBH, $this->logFile);
        return $migration->correctCampaignTargets() && $this->beforeRemoveTable('adstats');
    }

    public function afterRemoveTable__adstats()
    {
        return $this->afterRemoveTable('adstats');
    }

    public function beforeRemoveTable__adviews()
    {
        return $this->beforeRemoveTable('adviews');
    }

    public function afterRemoveTable__adviews()
    {
        return $this->afterRemoveTable('adviews');
    }

    public function beforeRemoveTable__cache()
    {
        return $this->beforeRemoveTable('cache');
    }

    public function afterRemoveTable__cache()
    {
        return $this->afterRemoveTable('cache');
    }

    public function beforeRemoveTable__config()
    {
        return $this->beforeRemoveTable('config');
    }

    public function afterRemoveTable__config()
    {
        return $this->afterRemoveTable('config');
    }
}
