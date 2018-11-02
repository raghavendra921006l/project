<?php
/**
 * This is for fetching db values
 * @param $sql
 * @param null $params
 * @return mixed
 */
function getQueryResult($sql, $params = null)
{
    $db = new Database();
    $db->query($sql);
    if (isset($params) && !empty($params)) {
        foreach ($params as  $key => $value) {
            $db->bind(":" . $key,$value);
        }
    }
    $result = $db->resultset();
    return $result;
}

/**
 * This is generic method for insert update and delete
 * @param $sql
 * @param null $params
 * @return mixed
 */
function setQueryParams($sql, $params = null)
{
    $db = new Database();
    $db->query($sql);
    if (isset($params) && !empty($params)) {
        foreach ($params as  $key => $value) {
            $db->bind(":" . $key,$value);
        }
    }
    return $db->execute();
}