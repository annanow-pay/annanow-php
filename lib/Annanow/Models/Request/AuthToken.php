<?php
/**
 * The AuthToken request model
 * @author    Ueli Kramer <ueli.kramer@annanow-pay.com>
 * @copyright 2014 Annanow
 * @since     v1.0
 */
namespace Annanow\Models\Request;

/**
 * Class AuthToken
 * @package Annanow\Models\Request
 */
class AuthToken extends \Annanow\Models\Base
{
    protected $userId = 0;

    /**
     * The user id of the user you want an auth token for
     * 
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the user id you would like to get an auth token for
     * 
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseModel()
    {
        return new \Annanow\Models\Response\AuthToken();
    }
}
