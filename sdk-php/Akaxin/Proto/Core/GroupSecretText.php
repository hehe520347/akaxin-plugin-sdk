<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/core.proto

namespace Akaxin\Proto\Core;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *加密文本消息
 *
 * 
 */
class GroupSecretText extends \Google\Protobuf\Internal\Message
{
    /**
     * 
     */
    private $msg_id = '';
    /**
     * 
     */
    private $site_user_id = '';
    /**
     * 
     */
    private $site_group_id = '';
    /**
     * 
     */
    private $text = '';
    /**
     *加密key，值为aes密钥（原始bytes base64encode后的字符串）
     *
     * 
     */
    private $base64_ts_key = '';
    /**
     * 
     */
    private $to_device_id = '';
    /**
     *消息时间，单位ms
     *
     * 
     */
    private $time = 0;

    public function __construct() {
        \GPBMetadata\Core\Core::initOnce();
        parent::__construct();
    }

    /**
     * 
     * @return string
     */
    public function getMsgId()
    {
        return $this->msg_id;
    }

    /**
     * 
     * @param string $var
     * @return $this
     */
    public function setMsgId($var)
    {
        GPBUtil::checkString($var, True);
        $this->msg_id = $var;

        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getSiteUserId()
    {
        return $this->site_user_id;
    }

    /**
     * 
     * @param string $var
     * @return $this
     */
    public function setSiteUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->site_user_id = $var;

        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getSiteGroupId()
    {
        return $this->site_group_id;
    }

    /**
     * 
     * @param string $var
     * @return $this
     */
    public function setSiteGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->site_group_id = $var;

        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * 
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, False);
        $this->text = $var;

        return $this;
    }

    /**
     *加密key，值为aes密钥（原始bytes base64encode后的字符串）
     *
     * 
     * @return string
     */
    public function getBase64TsKey()
    {
        return $this->base64_ts_key;
    }

    /**
     *加密key，值为aes密钥（原始bytes base64encode后的字符串）
     *
     * 
     * @param string $var
     * @return $this
     */
    public function setBase64TsKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->base64_ts_key = $var;

        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getToDeviceId()
    {
        return $this->to_device_id;
    }

    /**
     * 
     * @param string $var
     * @return $this
     */
    public function setToDeviceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->to_device_id = $var;

        return $this;
    }

    /**
     *消息时间，单位ms
     *
     * 
     * @return int|string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     *消息时间，单位ms
     *
     * 
     * @param int|string $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->time = $var;

        return $this;
    }

}

