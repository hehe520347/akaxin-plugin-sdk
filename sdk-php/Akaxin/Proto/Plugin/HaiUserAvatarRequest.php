<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plugin/hai_user_avatar.proto

namespace Akaxin\Proto\Plugin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 *下载用户头像
 *----
 *接口名
 *----
 * /hai/user/avatar
 *错误码
 *----
 *- success
 *- error.alert
 *
 * 
 */
class HaiUserAvatarRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *用户的siteUserId
     *
     * 
     */
    private $site_user_id = '';

    public function __construct() {
        \GPBMetadata\Plugin\HaiUserAvatar::initOnce();
        parent::__construct();
    }

    /**
     *用户的siteUserId
     *
     * 
     * @return string
     */
    public function getSiteUserId()
    {
        return $this->site_user_id;
    }

    /**
     *用户的siteUserId
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

}

