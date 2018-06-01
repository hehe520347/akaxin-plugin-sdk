<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/phone.proto

namespace Akaxin\Proto\Core;

/**
 *手机验证码类型
 *
 * Protobuf enum <code>Core\VCType</code>
 */
class VCType
{
    /**
     *统一的验证码
     *
     * Generated from protobuf enum <code>UNIFIED = 0;</code>
     */
    const UNIFIED = 0;
    /**
     *手机号同步登陆使用的验证码
     *
     * Generated from protobuf enum <code>PHONE_LOGIN = 1;</code>
     */
    const PHONE_LOGIN = 1;
    /**
     *用户实名使用的验证码
     *
     * Generated from protobuf enum <code>PHONE_REALNAME = 2;</code>
     */
    const PHONE_REALNAME = 2;
    /**
     *通过手机号实名注册平台
     *
     * Generated from protobuf enum <code>PHONE_REGISTER = 3;</code>
     */
    const PHONE_REGISTER = 3;
    /**
     *匿名登陆实名站点，需平台手机注册
     *
     * Generated from protobuf enum <code>PHONE_REGISTER_FOR_SITE = 4;</code>
     */
    const PHONE_REGISTER_FOR_SITE = 4;
}

