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

require_once MAX_PATH . '/lib/max/Delivery/limitations.delivery.php';

class DeliveryLimitationsUpgrade
{
    /**
     * A method to upgrade delivery limitation plugins where the limitation data
     * is stored as an "string" type from v0.3.29-alpha to v0.3.31-alpha.
     *
     * @param string $op The comparison string for the limitation in v0.3.29-alpha format.
     * @param string $sData The comparison data for the limitation in v0.3.29-alpha format.
     * @return array An array of two items, indexed by "op" and "data", which are the new
     *               v0.3.31-alpha format versions of the parameters above.
     */
    public function getDeliveryLimitationPluginUpgradeThreeThirtyOneAlpha($op, $sData)
    {
        return MAX_limitationsGetAUpgradeForString($op, $sData);
    }

    /**
     * A method to downgrade delivery limitation plugins where the limitation data
     * is stored as an "string" type from v0.3.31-alpha to v0.3.29-alpha.
     *
     * @param string $op The comparison string for the limitation in v0.3.31-alpha format.
     * @param string $sData The comparison data for the limitation in v0.3.31-alpha format.
     * @return array An array of two items, indexed by "op" and "data", which are the old
     *               v0.3.29-alpha format versions of the parameters above.
     */
    public function getDeliveryLimitationPluginDowngradeThreeTwentyNineAlpha($op, $sData)
    {
        return MAX_limitationsGetADowngradeForString($op, $sData);
    }

    /**
     * Gets information about $op and $data for upgrade from OpenX 2.0.
     *
     * @param string $op
     * @param string $sData
     * @return array
     */
    public function getUpgradeFromEarly($op, $sData)
    {
        return $this->getDeliveryLimitationPluginUpgradeThreeThirtyOneAlpha($op, $sData);
    }
}

class DeliveryLimitationsUpgradeArray extends DeliveryLimitationsUpgrade
{
    /**
     * A method to upgrade delivery limitation plugins where the limitation data
     * is stored as an "array" type from v0.3.29-alpha to v0.3.31-alpha.
     *
     * @param string $op The comparison string for the limitation in v0.3.29-alpha format.
     * @param string $sData The comparison data for the limitation in v0.3.29-alpha format.
     * @return array An array of two items, indexed by "op" and "data", which are the new
     *               v0.3.31-alpha format versions of the parameters above.
     */
    public function getDeliveryLimitationPluginUpgradeThreeThirtyOneAlpha($op, $sData)
    {
        return MAX_limitationsGetAUpgradeForArray($op, $sData);
    }

    /**
     * A method to downgrade delivery limitation plugins where the limitation data
     * is stored as an "array" type from v0.3.31-alpha to v0.3.29-alpha.
     *
     * @param string $op The comparison string for the limitation in v0.3.31-alpha format.
     * @param string $sData The comparison data for the limitation in v0.3.31-alpha format.
     * @return array An array of two items, indexed by "op" and "data", which are the old
     *               v0.3.29-alpha format versions of the parameters above.
     */
    public function getDeliveryLimitationPluginDowngradeThreeTwentyNineAlpha($op, $sData)
    {
        return MAX_limitationsGetADowngradeForArray($op, $sData);
    }
}

class Upgrade_DeliveryLimitations_Client_Browser extends DeliveryLimitationsUpgradeArray
{
}

class Upgrade_DeliveryLimitations_Client_Domain extends DeliveryLimitationsUpgrade
{
}

class Upgrade_DeliveryLimitations_Client_Ip extends DeliveryLimitationsUpgrade
{
    /**
     * A method to upgrade the Client:Ip delivery limitation plugin from v0.3.29-alpha
     * to v0.3.31-alpha format.
     *
     * @param string $op The comparison string for the limitation in v0.3.29-alpha format.
     * @param string $sData The comparison data for the limitation in v0.3.29-alpha format.
     * @return array An array of two items, indexed by "op" and "data", which are the new
     *               v0.3.31-alpha format versions of the parameters above.
     */
    public function getDeliveryLimitationPluginUpgradeThreeThirtyOneAlpha($op, $sData)
    {
        return ['op' => $op, 'data' => $sData];
    }

    /**
     * A method to downgrade the Client:Ip delivery limitation plugin from v0.3.29-alpha
     * to v0.3.31-alpha format.
     *
     * @param string $op The comparison string for the limitation in v0.3.31-alpha format.
     * @param string $sData The comparison data for the limitation in v0.3.31-alpha format.
     * @return array An array of two items, indexed by "op" and "data", which are the old
     *               v0.3.29-alpha format versions of the parameters above.
     */
    public function getDeliveryLimitationPluginDowngradeThreeTwentyNineAlpha($op, $sData)
    {
        return ['op' => $op, 'data' => $sData];
    }
}

class Upgrade_DeliveryLimitations_Client_Language extends DeliveryLimitationsUpgrade
{
    /**
     * A method to upgrade the Client:Language delivery limitation plugin from v0.3.29-alpha
     * to v0.3.31-alpha format.
     *
     * @param string $op The comparison string for the limitation in v0.3.29-alpha format.
     * @param string $sData The comparison data for the limitation in v0.3.29-alpha format.
     * @return array An array of two items, indexed by "op" and "data", which are the new
     *               v0.3.31-alpha format versions of the parameters above.
     */
    public function getDeliveryLimitationPluginUpgradeThreeThirtyOneAlpha($op, $sData)
    {
        return MAX_limitationsGetAUpgradeForLanguage($op, $sData);
    }

    /**
     * A method to downgrade the Client:Language delivery limitation plugin from v0.3.29-alpha
     * to v0.3.31-alpha format.
     *
     * @param string $op The comparison string for the limitation in v0.3.31-alpha format.
     * @param string $sData The comparison data for the limitation in v0.3.31-alpha format.
     * @return array An array of two items, indexed by "op" and "data", which are the old
     *               v0.3.29-alpha format versions of the parameters above.
     */
    public function getDeliveryLimitationPluginDowngradeThreeTwentyNineAlpha($op, $sData)
    {
        return MAX_limitationsGetADowngradeForLanguage($op, $sData);
    }
}

class Upgrade_DeliveryLimitations_Client_Os extends DeliveryLimitationsUpgradeArray
{
}

class Upgrade_DeliveryLimitations_Client_Useragent extends DeliveryLimitationsUpgrade
{
    public function getUpgradeFromEarly($op, $sData)
    {
        return OA_limitationsGetAUpgradeFor20Regexp($op, $sData);
    }
}

class Upgrade_DeliveryLimitations_Geo_Areacode extends DeliveryLimitationsUpgrade
{
    public function getUpgradeFromEarly($op, $sData)
    {
        return OA_limitationsGetUpgradeForContains($op, $sData);
    }
}

class Upgrade_DeliveryLimitations_Geo_City extends DeliveryLimitationsUpgrade
{
    /**
     * A method to upgrade the Geo:City delivery limitation plugin from v0.3.29-alpha
     * to v0.3.31-alpha format.
     *
     * @param string $op The comparison string for the limitation in v0.3.29-alpha format.
     * @param string $sData The comparison data for the limitation in v0.3.29-alpha format.
     * @return array An array of two items, indexed by "op" and "data", which are the new
     *               v0.3.31-alpha format versions of the parameters above.
     */
    public function getDeliveryLimitationPluginUpgradeThreeThirtyOneAlpha($op, $sData)
    {
        return ['op' => $op, 'data' => $sData];
    }

    /**
     * A method to downgrade the Geo:City delivery limitation plugin from v0.3.29-alpha
     * to v0.3.31-alpha format.
     *
     * @param string $op The comparison string for the limitation in v0.3.31-alpha format.
     * @param string $sData The comparison data for the limitation in v0.3.31-alpha format.
     * @return array An array of two items, indexed by "op" and "data", which are the old
     *               v0.3.29-alpha format versions of the parameters above.
     */
    public function getDeliveryLimitationPluginDowngradeThreeTwentyNineAlpha($op, $sData)
    {
        return ['op' => $op, 'data' => $sData];
    }

    public function getUpgradeFromEarly($op, $sData)
    {
        return OA_limitationsGetUpgradeForGeoCity($op, $sData);
    }
}

class Upgrade_DeliveryLimitations_Geo_Continent extends DeliveryLimitationsUpgradeArray
{
}

class Upgrade_DeliveryLimitations_Geo_Country extends DeliveryLimitationsUpgradeArray
{
}

class Upgrade_DeliveryLimitations_Geo_Dma extends DeliveryLimitationsUpgradeArray
{
}

class Upgrade_DeliveryLimitations_Geo_Latlong extends DeliveryLimitationsUpgradeArray
{
}

class Upgrade_DeliveryLimitations_Geo_Netspeed extends DeliveryLimitationsUpgrade
{
    public function getUpgradeFromEarly($op, $sData)
    {
        return OA_limitationsGetUpgradeForGeoNetspeed($op, $sData);
    }
}

class Upgrade_DeliveryLimitations_Geo_Organisation extends DeliveryLimitationsUpgrade
{
    public function getUpgradeFromEarly($op, $sData)
    {
        return OA_limitationsGetUpgradeForContains($op, $sData);
    }
}

class Upgrade_DeliveryLimitations_Geo_Postalcode extends DeliveryLimitationsUpgrade
{
    public function getUpgradeFromEarly($op, $sData)
    {
        return OA_limitationsGetUpgradeForContains($op, $sData);
    }
}

class Upgrade_DeliveryLimitations_Geo_Region extends DeliveryLimitationsUpgrade
{
    /**
     * A method to upgrade the Geo:Region delivery limitation plugin from v0.3.29-alpha
     * to v0.3.31-alpha format.
     *
     * @param string $op The comparison string for the limitation in v0.3.29-alpha format.
     * @param string $sData The comparison data for the limitation in v0.3.29-alpha format.
     * @return array An array of two items, indexed by "op" and "data", which are the new
     *               v0.3.31-alpha format versions of the parameters above.
     */
    public function getDeliveryLimitationPluginUpgradeThreeThirtyOneAlpha($op, $sData)
    {
        return ['op' => $op, 'data' => $sData];
    }

    /**
     * A method to downgrade the Geo:Region delivery limitation plugin from v0.3.29-alpha
     * to v0.3.31-alpha format.
     *
     * @param string $op The comparison string for the limitation in v0.3.31-alpha format.
     * @param string $sData The comparison data for the limitation in v0.3.31-alpha format.
     * @return array An array of two items, indexed by "op" and "data", which are the old
     *               v0.3.29-alpha format versions of the parameters above.
     */
    public function getDeliveryLimitationPluginDowngradeThreeTwentyNineAlpha($op, $sData)
    {
        return ['op' => $op, 'data' => $sData];
    }


    public function getUpgradeFromEarly($op, $sData)
    {
        return OA_limitationsGetUpgradeForGeoRegion($op, $sData);
    }
}

class Upgrade_DeliveryLimitations_Site_Channel extends DeliveryLimitationsUpgradeArray
{
}

class Upgrade_DeliveryLimitations_Site_Pageurl extends DeliveryLimitationsUpgrade
{
    public function getUpgradeFromEarly($op, $sData)
    {
        return OA_limitationsGetUpgradeForContains($op, $sData);
    }
}

class Upgrade_DeliveryLimitations_Site_Referingpage extends DeliveryLimitationsUpgrade
{
    public function getUpgradeFromEarly($op, $sData)
    {
        return OA_limitationsGetUpgradeForContains($op, $sData);
    }
}

class Upgrade_DeliveryLimitations_Site_Source extends DeliveryLimitationsUpgrade
{
    public function getUpgradeFromEarly($op, $sData)
    {
        return OA_limitationsGetAUpgradeFor20Regexp($op, $sData);
    }
}

class Upgrade_DeliveryLimitations_Site_Variable extends DeliveryLimitationsUpgradeArray
{
}

class Upgrade_DeliveryLimitations_Time_Date extends DeliveryLimitationsUpgrade
{
    /**
     * A method to upgrade the Time:Date delivery limitation plugin from v0.3.29-alpha
     * to v0.3.31-alpha format.
     *
     * @param string $op The comparison string for the limitation in v0.3.29-alpha format.
     * @param string $sData The comparison data for the limitation in v0.3.29-alpha format.
     * @return array An array of two items, indexed by "op" and "data", which are the new
     *               v0.3.31-alpha format versions of the parameters above.
     */
    public function getDeliveryLimitationPluginUpgradeThreeThirtyOneAlpha($op, $sData)
    {
        return ['op' => $op, 'data' => $sData];
    }

    /**
     * A method to downgrade the Time:Date delivery limitation plugin from v0.3.29-alpha
     * to v0.3.31-alpha format.
     *
     * @param string $op The comparison string for the limitation in v0.3.31-alpha format.
     * @param string $sData The comparison data for the limitation in v0.3.31-alpha format.
     * @return array An array of two items, indexed by "op" and "data", which are the old
     *               v0.3.29-alpha format versions of the parameters above.
     */
    public function getDeliveryLimitationPluginDowngradeThreeTwentyNineAlpha($op, $sData)
    {
        return ['op' => $op, 'data' => $sData];
    }
}

class Upgrade_DeliveryLimitations_Time_Day extends DeliveryLimitationsUpgradeArray
{
}

class Upgrade_DeliveryLimitations_Time_Hour extends DeliveryLimitationsUpgradeArray
{
}

// UPGRADE/DOWNGRADE helper functions

/**
 * Returns an array with upgraded format of operator and data
 * for string-based delivery limitations.
 * The new operator is stored in ['op'] field,
 * the data in ['data'] field.
 *
 * @param string $op An old operator.
 * @param string $sData An old data specification.
 * @return array An array which contains a new operator in the ['op'] field
 * and the new data in ['data'] field.
 */
function MAX_limitationsGetAUpgradeForString($op, $sData)
{
    $sData = preg_replace('#[\\*]+#', '*', $sData);
    $aResult = [];
    if ($sData == '*'
        || preg_match('#^\\*[^\\*]+$#', $sData)
        || preg_match('#^[^\\*]+\\*$#', $sData)
        || preg_match('#[^\\*]+\\*[^\\**]+#', $sData)
        ) {
        $sData = str_replace('(', '\\(', $sData);
        $sData = str_replace(')', '\\)', $sData);
        $sData = str_replace('.', '\\.', $sData);
        $sData = str_replace('*', '.*', $sData);
        $sData = "^$sData$";
        $aResult['op'] = MAX_limitationsIsOperatorPositive($op) ? '=x' : '!x';
        $aResult['data'] = $sData;
        return $aResult;
    } elseif (preg_match('#^\\*[^\\*]*\\*$#', $sData)) {
        $aResult['op'] = MAX_limitationsIsOperatorPositive($op) ? '=~' : '!~';
        $aResult['data'] = str_replace('*', '', $sData);
        return $aResult;
    } else {
        $aResult['op'] = $op;
        $aResult['data'] = $sData;
        return $aResult;
    }
}

/**
 * Returns an array with upgraded format of operator and data
 * for array-based delivery limitations.
 * The new operator is stored in ['op'] field,
 * the data in ['data'] field.
 *
 * @param string $op An old operator.
 * @param string $sData An old data specification.
 * @return array An array which contains a new operator in the ['op'] field
 * and the new data in ['data'] field.
 */
function MAX_limitationsGetAUpgradeForArray($op, $sData)
{
    $aResult = ['data' => $sData];
    $aResult['op'] = MAX_limitationsIsOperatorPositive($op) ? '=~' : '!~';
    return $aResult;
}

/**
 * Returns an array with upgraded format of operator and data
 * for {@link Plugins_DeliveryLimitations_Client_Language}.
 * The new operator is stored in ['op'] field,
 * the data in ['data'] field.
 *
 * @param string $op An old operator.
 * @param string $sData An old data specification.
 * @return array An array which contains a new operator in the ['op'] field
 * and the new data in ['data'] field.
 */
function MAX_limitationsGetAUpgradeForLanguage($op, $sData)
{
    $sData = substr($sData, 1, strlen($sData) - 2);
    $sData = str_replace(')|(', ',', $sData);
    return MAX_limitationsGetAUpgradeForArray($op, $sData);
}

/**
 * This function should be used for the following delivery limitations:
 *   * browser,
 *   * operating system,
 *   * useragent.
 *
 * @param string $op
 * @param string $sData
 */
function OA_limitationsGetAUpgradeFor20Regexp($op, $sData)
{
    $aResult = [];
    $aResult['op'] = MAX_limitationsIsOperatorPositive($op) ? '=x' : '!x';
    $aResult['data'] = $sData;
    return $aResult;
}

/**
 * This function should be used for the 'referer' delivery limitation and other "==" to "=~" based limitations
 *
 * @param string $op
 * @param string $sData
 * @return array
 */
function OA_limitationsGetUpgradeForContains($op, $sData)
{
    $aResult = [];
    $aResult['op'] = MAX_limitationsIsOperatorPositive($op) ? '=~' : '!~';
    $aResult['data'] = $sData;
    return $aResult;
}

/**
 * This function should be used for the 'city' delivery limitation
 *
 * @param string $op
 * @param string $sData
 * @return array
 */
function OA_limitationsGetUpgradeForGeoCity($op, $sData)
{
    $aResult = [];
    $aResult['op'] = MAX_limitationsIsOperatorPositive($op) ? '=~' : '!~';
    $aResult['data'] = '|' . $sData;
    return $aResult;
}

/**
 * This function should be used for the 'region' delivery limitation
 *
 * @param string $op
 * @param string $sData
 * @return array
 */
function OA_limitationsGetUpgradeForGeoRegion($op, $sData)
{
    $aData = [];
    foreach (explode(',', $sData) as $v) {
        $country = substr($v, 0, 2);
        $region = substr($v, 2);
        if (!isset($aData[$country])) {
            $aData[$country] = [];
            $aCount[$country] = 0;
        }
        $aData[$country][] = $region;
    }

    ksort($aData);

    $country = key($aData);
    $sData = $country . '|' . implode(',', $aData[$country]);
    unset($aData[$country]);

    $aResult = [];
    $aResult['op'] = MAX_limitationsIsOperatorPositive($op) ? '=~' : '!~';
    $aResult['data'] = $sData;

    if ($aData !== []) {
        $aResult['add'] = [];
        foreach ($aData as $country => $aRegions) {
            $aResult['add'][] = [
                'type' => 'Geo:Region',
                'logical' => MAX_limitationsIsOperatorPositive($op) ? 'or' : 'and',
                'comparison' => MAX_limitationsIsOperatorPositive($op) ? '=~' : '!~',
                'data' => $country . '|' . implode(',', $aRegions)
            ];
        }
    }

    return $aResult;
}

/**
 * This function should be used for the 'netspeed' delivery limitation
 *
 * @param string $op
 * @param string $sData
 * @return array
 */
function OA_limitationsGetUpgradeForGeoNetspeed($op, $sData)
{
    $aTrans = ['unknown', 'dialup', 'cabledsl', 'corporate'];
    $aData = explode(',', $sData);
    foreach ($aData as $k => $v) {
        $aData[$k] = $aTrans[$v];
    }
    $sData = implode(',', $aData);

    $aResult = [];
    $aResult['op'] = MAX_limitationsIsOperatorPositive($op) ? '=~' : '!~';
    $aResult['data'] = $sData;
    return $aResult;
}

/**
 * Returns an array with downgraded format of operator and data
 * for string-based delivery limitations.
 * The old operator is stored in ['op'] field,
 * the data in ['data'] field.
 *
 * @param string $op A new operator.
 * @param string $sData A new data specification.
 * @return array An array which contains an old operator in the ['op'] field
 * and an old data in ['data'] field.
 */
function MAX_limitationsGetADowngradeForString($op, $sData)
{
    $aResult['op'] = MAX_limitationsIsOperatorPositive($op) ? '==' : '!=';
    if (MAX_limitationsIsOperatorRegexp($op)) {
        if (substr($sData, 0, 1) == '^') {
            $sData = substr($sData, 1);
        }
        if (substr($sData, strlen($sData) - 1) == '$') {
            $sData = substr($sData, 0, strlen($sData) - 1);
        }
        $sData = str_replace('.*', '*', $sData);
        $sData = str_replace('\\(', '(', $sData);
        $sData = str_replace('\\)', ')', $sData);
        $sData = str_replace('\\.', '.', $sData);
        $aResult['data'] = $sData;
    } elseif (MAX_limitationsIsOperatorContains($op)) {
        $aResult['data'] = "*$sData*";
    } else {
        $aResult['data'] = $sData;
    }
    return $aResult;
}

/**
 * Returns an array with downgraded format of operator and data
 * for array-based delivery limitations.
 * The old operator is stored in ['op'] field,
 * the data in ['data'] field.
 *
 * @param string $op A new operator.
 * @param string $sData A new data specification.
 * @return array An array which contains an old operator in the ['op'] field
 * and an old data in ['data'] field.
 */
function MAX_limitationsGetADowngradeForArray($op, $sData)
{
    $aResult = ['data' => $sData];
    $aResult['op'] = MAX_limitationsIsOperatorPositive($op) ? '==' : '!=';
    return $aResult;
}

/**
 * Returns an array with downgraded format of operator and data
 * for {@link Plugins_DeliveryLimitations_Client_Language}.
 * The old operator is stored in ['op'] field,
 * the data in ['data'] field.
 *
 * @param string $op A new operator.
 * @param string $sData A new data specification.
 * @return array An array which contains an old operator in the ['op'] field
 * and an old data in ['data'] field.
 */
function MAX_limitationsGetADowngradeForLanguage($op, $sData)
{
    $sData = '(' . str_replace(',', ')|(', $sData) . ')';
    return MAX_limitationsGetADowngradeForArray($op, $sData);
}
