<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/push.proto

namespace Akaxin\Proto\Core;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 
 */
class PushFromUser extends \Google\Protobuf\Internal\Message
{
    /**
     *push发送者的globalUserId
     *
     * 
     */
    private $global_user_id = '';
    /**
     *push消息发送者或者群ID，这里使用站点siteUserId
     *
     * 
     */
    private $site_user_id = '';
    /**
     *发送着用户名称，文案展示的一部分
     *
     * 
     */
    private $push_from_name = '';

    public function __construct() {
        \GPBMetadata\Core\Push::initOnce();
        parent::__construct();
    }

    /**
     *push发送者的globalUserId
     *
     * 
     * @return string
     */
    public function getGlobalUserId()
    {
        return $this->global_user_id;
    }

    /**
     *push发送者的globalUserId
     *
     * 
     * @param string $var
     * @return $this
     */
    public function setGlobalUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->global_user_id = $var;

        return $this;
    }

    /**
     *push消息发送者或者群ID，这里使用站点siteUserId
     *
     * 
     * @return string
     */
    public function getSiteUserId()
    {
        return $this->site_user_id;
    }

    /**
     *push消息发送者或者群ID，这里使用站点siteUserId
     *
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
     *发送着用户名称，文案展示的一部分
     *
     * 
     * @return string
     */
    public function getPushFromName()
    {
        return $this->push_from_name;
    }

    /**
     *发送着用户名称，文案展示的一部分
     *
     * 
     * @param string $var
     * @return $this
     */
    public function setPushFromName($var)
    {
        GPBUtil::checkString($var, True);
        $this->push_from_name = $var;

        return $this;
    }

}

