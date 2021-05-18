<?php
/**
 * The signatureCheck request model
 * @author    Remo Siegenthaler <remo.siegenthaler@annanow-pay.com>
 * @copyright 2017 Annanow
 * @since     v1.0
 */
namespace Annanow\Models\Request;

/**
 * Class SignatureCheck
 * @package Annanow\Models\Request
 */
class SignatureCheck extends \Annanow\Models\Base
{
    /**
     * {@inheritdoc}
     */
    public function getResponseModel()
    {
        return new \Annanow\Models\Response\SignatureCheck();
    }
}
