<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plugin/hai_friend_add.proto

namespace Akaxin\Proto\Plugin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *### 功能
 *添加A、B两人为好友
 *### 接口名
 * /hai/friend/add
 *### 错误码
 *- success
 *- error.alert
 *
 * 
 */
class HaiFriendAddRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 用户1
     *
     * 
     */
    private $site_user_id = '';
    /**
     * 用户2
     *
     * 
     */
    private $friend_site_user_id = '';

    public function __construct() {
        \GPBMetadata\Plugin\HaiFriendAdd::initOnce();
        parent::__construct();
    }

    /**
     * 用户1
     *
     * 
     * @return string
     */
    public function getSiteUserId()
    {
        return $this->site_user_id;
    }

    /**
     * 用户1
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
     * 用户2
     *
     * 
     * @return string
     */
    public function getFriendSiteUserId()
    {
        return $this->friend_site_user_id;
    }

    /**
     * 用户2
     *
     * 
     * @param string $var
     * @return $this
     */
    public function setFriendSiteUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->friend_site_user_id = $var;

        return $this;
    }

}

