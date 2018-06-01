<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/plugin.proto

namespace Akaxin\Proto\Core;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 
 */
class Plugin extends \Google\Protobuf\Internal\Message
{
    /**
     * 对于一个特定的Site，plugin.id 是唯一的。
     *
     * 
     */
    private $id = '';
    /**
     * 扩展名字，会显示在界面上
     *
     * 
     */
    private $name = '';
    /**
     * 落地页地址
     * 以http或https开头，客户端直接以url_page作为网址渲染webview
     * 否则，为api.proxy.page 请求的page参数值，默认为空
     * 如：
     * value= https://www.google.com 直接以此网址加载webview。
     * value= main，代表通过api.proxy.page接口请求main页面。
     * value= 空，代表通过api.proxy.page接口请求空页面（pluginServer自己把空返回默认主页）
     *
     * 
     */
    private $url_page = '';
    /**
     * api.plugin.proxy 请求转发请求时的目的URL
     * 此URL只能以http或者https开头，如无则为http
     * ====IMPORTANT====
     * 此api是给server用的，不允许传递此值到客户端。如复用此结构必须在传递给客户端之前将此值置空。
     *
     * 
     */
    private $api_url = '';
    /**
     * 扩展图标文件，会显示在界面上
     * 如果以http开头，则代表着这是一个http协议的文件。
     * 否则，通过site-download功能下载此图片。
     *
     * 
     */
    private $icon = '';
    /**
     * pluginServer 在 请求 siteServer的innerAPI时，使用此值加密数据，以证明身份。
     * 添加扩展时由SiteServer自动生成并记录，为64个[A-Za-z0-9]组成的随机字符串。
     * site 使用auth_key 加密发送给plugin的整个proto
     * 同时 site使用auth_key解析 plugin传递过来的具体proto值
     *
     * 
     */
    private $auth_key = '';
    /**
     * site server的innerAPI允许的pluginServer地址。
     * 默认为127.0.0.1，如为空则代表不限制，此外：支持网络掩码的配置方式。
     * 如果有多个ip，以英文逗号[,]隔开。
     *
     * 
     */
    private $allowed_ip = '';
    /**
     * 扩展的位置【应该为一个枚举】
     * 值：首页、消息帧
     * 本次不允许首页并且消息帧这个类型。
     *
     * 
     */
    private $position = 0;
    /**
     * 显示顺序
     * 当一个位置，有多个扩展时，此处描述顺序，数字越小，排列越靠前（从上往下，从左往右排列）
     *
     * 
     */
    private $order = 0;
    /**
     * 展现方式【应该为一个枚举】
     * 默认、浮屏、分屏
     * 目前写死【默认】
     *
     * 
     */
    private $display_mode = 0;
    /**
     * 可用状态
     * - 禁用
     * - 管理员可用
     * - 全员可用
     *
     * 
     */
    private $permission_status = 0;
    /**
     * 使用auth_key加密的用户session
     *
     * 
     */
    private $encrypted_session_id_base64 = '';

    public function __construct() {
        \GPBMetadata\Core\Plugin::initOnce();
        parent::__construct();
    }

    /**
     * 对于一个特定的Site，plugin.id 是唯一的。
     *
     * 
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 对于一个特定的Site，plugin.id 是唯一的。
     *
     * 
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * 扩展名字，会显示在界面上
     *
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 扩展名字，会显示在界面上
     *
     * 
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * 落地页地址
     * 以http或https开头，客户端直接以url_page作为网址渲染webview
     * 否则，为api.proxy.page 请求的page参数值，默认为空
     * 如：
     * value= https://www.google.com 直接以此网址加载webview。
     * value= main，代表通过api.proxy.page接口请求main页面。
     * value= 空，代表通过api.proxy.page接口请求空页面（pluginServer自己把空返回默认主页）
     *
     * 
     * @return string
     */
    public function getUrlPage()
    {
        return $this->url_page;
    }

    /**
     * 落地页地址
     * 以http或https开头，客户端直接以url_page作为网址渲染webview
     * 否则，为api.proxy.page 请求的page参数值，默认为空
     * 如：
     * value= https://www.google.com 直接以此网址加载webview。
     * value= main，代表通过api.proxy.page接口请求main页面。
     * value= 空，代表通过api.proxy.page接口请求空页面（pluginServer自己把空返回默认主页）
     *
     * 
     * @param string $var
     * @return $this
     */
    public function setUrlPage($var)
    {
        GPBUtil::checkString($var, True);
        $this->url_page = $var;

        return $this;
    }

    /**
     * api.plugin.proxy 请求转发请求时的目的URL
     * 此URL只能以http或者https开头，如无则为http
     * ====IMPORTANT====
     * 此api是给server用的，不允许传递此值到客户端。如复用此结构必须在传递给客户端之前将此值置空。
     *
     * 
     * @return string
     */
    public function getApiUrl()
    {
        return $this->api_url;
    }

    /**
     * api.plugin.proxy 请求转发请求时的目的URL
     * 此URL只能以http或者https开头，如无则为http
     * ====IMPORTANT====
     * 此api是给server用的，不允许传递此值到客户端。如复用此结构必须在传递给客户端之前将此值置空。
     *
     * 
     * @param string $var
     * @return $this
     */
    public function setApiUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_url = $var;

        return $this;
    }

    /**
     * 扩展图标文件，会显示在界面上
     * 如果以http开头，则代表着这是一个http协议的文件。
     * 否则，通过site-download功能下载此图片。
     *
     * 
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * 扩展图标文件，会显示在界面上
     * 如果以http开头，则代表着这是一个http协议的文件。
     * 否则，通过site-download功能下载此图片。
     *
     * 
     * @param string $var
     * @return $this
     */
    public function setIcon($var)
    {
        GPBUtil::checkString($var, True);
        $this->icon = $var;

        return $this;
    }

    /**
     * pluginServer 在 请求 siteServer的innerAPI时，使用此值加密数据，以证明身份。
     * 添加扩展时由SiteServer自动生成并记录，为64个[A-Za-z0-9]组成的随机字符串。
     * site 使用auth_key 加密发送给plugin的整个proto
     * 同时 site使用auth_key解析 plugin传递过来的具体proto值
     *
     * 
     * @return string
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * pluginServer 在 请求 siteServer的innerAPI时，使用此值加密数据，以证明身份。
     * 添加扩展时由SiteServer自动生成并记录，为64个[A-Za-z0-9]组成的随机字符串。
     * site 使用auth_key 加密发送给plugin的整个proto
     * 同时 site使用auth_key解析 plugin传递过来的具体proto值
     *
     * 
     * @param string $var
     * @return $this
     */
    public function setAuthKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->auth_key = $var;

        return $this;
    }

    /**
     * site server的innerAPI允许的pluginServer地址。
     * 默认为127.0.0.1，如为空则代表不限制，此外：支持网络掩码的配置方式。
     * 如果有多个ip，以英文逗号[,]隔开。
     *
     * 
     * @return string
     */
    public function getAllowedIp()
    {
        return $this->allowed_ip;
    }

    /**
     * site server的innerAPI允许的pluginServer地址。
     * 默认为127.0.0.1，如为空则代表不限制，此外：支持网络掩码的配置方式。
     * 如果有多个ip，以英文逗号[,]隔开。
     *
     * 
     * @param string $var
     * @return $this
     */
    public function setAllowedIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->allowed_ip = $var;

        return $this;
    }

    /**
     * 扩展的位置【应该为一个枚举】
     * 值：首页、消息帧
     * 本次不允许首页并且消息帧这个类型。
     *
     * 
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * 扩展的位置【应该为一个枚举】
     * 值：首页、消息帧
     * 本次不允许首页并且消息帧这个类型。
     *
     * 
     * @param int $var
     * @return $this
     */
    public function setPosition($var)
    {
        GPBUtil::checkEnum($var, \Akaxin\Proto\Core\PluginPosition::class);
        $this->position = $var;

        return $this;
    }

    /**
     * 显示顺序
     * 当一个位置，有多个扩展时，此处描述顺序，数字越小，排列越靠前（从上往下，从左往右排列）
     *
     * 
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * 显示顺序
     * 当一个位置，有多个扩展时，此处描述顺序，数字越小，排列越靠前（从上往下，从左往右排列）
     *
     * 
     * @param int $var
     * @return $this
     */
    public function setOrder($var)
    {
        GPBUtil::checkInt32($var);
        $this->order = $var;

        return $this;
    }

    /**
     * 展现方式【应该为一个枚举】
     * 默认、浮屏、分屏
     * 目前写死【默认】
     *
     * 
     * @return int
     */
    public function getDisplayMode()
    {
        return $this->display_mode;
    }

    /**
     * 展现方式【应该为一个枚举】
     * 默认、浮屏、分屏
     * 目前写死【默认】
     *
     * 
     * @param int $var
     * @return $this
     */
    public function setDisplayMode($var)
    {
        GPBUtil::checkEnum($var, \Akaxin\Proto\Core\PluginDisplayMode::class);
        $this->display_mode = $var;

        return $this;
    }

    /**
     * 可用状态
     * - 禁用
     * - 管理员可用
     * - 全员可用
     *
     * 
     * @return int
     */
    public function getPermissionStatus()
    {
        return $this->permission_status;
    }

    /**
     * 可用状态
     * - 禁用
     * - 管理员可用
     * - 全员可用
     *
     * 
     * @param int $var
     * @return $this
     */
    public function setPermissionStatus($var)
    {
        GPBUtil::checkEnum($var, \Akaxin\Proto\Core\PermissionStatus::class);
        $this->permission_status = $var;

        return $this;
    }

    /**
     * 使用auth_key加密的用户session
     *
     * 
     * @return string
     */
    public function getEncryptedSessionIdBase64()
    {
        return $this->encrypted_session_id_base64;
    }

    /**
     * 使用auth_key加密的用户session
     *
     * 
     * @param string $var
     * @return $this
     */
    public function setEncryptedSessionIdBase64($var)
    {
        GPBUtil::checkString($var, True);
        $this->encrypted_session_id_base64 = $var;

        return $this;
    }

}

