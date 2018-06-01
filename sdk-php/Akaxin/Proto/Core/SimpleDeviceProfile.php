<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/device.proto

namespace Akaxin\Proto\Core;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *设备简要信息
 *
 * 
 */
class SimpleDeviceProfile extends \Google\Protobuf\Internal\Message
{
    /**
     * 
     */
    private $device_id = '';
    /**
     * 
     */
    private $device_name = '';
    /**
     * 
     */
    private $user_device_pubk = '';
    /**
     * 
     */
    private $last_login_time = 0;

    public function __construct() {
        \GPBMetadata\Core\Device::initOnce();
        parent::__construct();
    }

    /**
     * 
     * @return string
     */
    public function getDeviceId()
    {
        return $this->device_id;
    }

    /**
     * 
     * @param string $var
     * @return $this
     */
    public function setDeviceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_id = $var;

        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getDeviceName()
    {
        return $this->device_name;
    }

    /**
     * 
     * @param string $var
     * @return $this
     */
    public function setDeviceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_name = $var;

        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getUserDevicePubk()
    {
        return $this->user_device_pubk;
    }

    /**
     * 
     * @param string $var
     * @return $this
     */
    public function setUserDevicePubk($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_device_pubk = $var;

        return $this;
    }

    /**
     * 
     * @return int|string
     */
    public function getLastLoginTime()
    {
        return $this->last_login_time;
    }

    /**
     * 
     * @param int|string $var
     * @return $this
     */
    public function setLastLoginTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->last_login_time = $var;

        return $this;
    }

}

