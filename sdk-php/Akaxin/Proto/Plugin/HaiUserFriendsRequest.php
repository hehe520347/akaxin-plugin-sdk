<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plugin/hai_user_friends.proto

namespace Akaxin\Proto\Plugin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 *获取用户的好友列表
 *----
 *接口名
 *----
 * /hai/user/friends
 *错误码
 *----
 *- success
 *- error.alert
 *
 * 
 */
class HaiUserFriendsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *需要查找的用户ID
     *
     * 
     */
    private $site_user_id = '';
    /**
     * 默认0
     *
     * 
     */
    private $page_number = 0;
    /**
     * 默认100
     *
     * 
     */
    private $page_size = 0;

    public function __construct() {
        \GPBMetadata\Plugin\HaiUserFriends::initOnce();
        parent::__construct();
    }

    /**
     *需要查找的用户ID
     *
     * 
     * @return string
     */
    public function getSiteUserId()
    {
        return $this->site_user_id;
    }

    /**
     *需要查找的用户ID
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
     * 默认0
     *
     * 
     * @return int
     */
    public function getPageNumber()
    {
        return $this->page_number;
    }

    /**
     * 默认0
     *
     * 
     * @param int $var
     * @return $this
     */
    public function setPageNumber($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_number = $var;

        return $this;
    }

    /**
     * 默认100
     *
     * 
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * 默认100
     *
     * 
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

}

