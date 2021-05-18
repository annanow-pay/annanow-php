<?php
/**
 * This class is a template for all communication handler classes.
 * @author    Ueli Kramer <ueli.kramer@annanow-pay.com>
 * @copyright 2014 Annanow
 * @since     v1.0
 */
namespace Annanow\CommunicationAdapter;

/**
 * Class AbstractCommunication
 * @package Annanow\CommunicationAdapter
 */
abstract class AbstractCommunication
{
    /**
     * Perform an API request
     *
     * @param string $apiUrl
     * @param array  $params
     * @param string $method
     *
     * @return mixed
     */
    abstract public function requestApi($apiUrl, $params = array(), $method = 'POST');
}
