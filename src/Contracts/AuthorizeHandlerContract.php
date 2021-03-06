<?php
namespace Chunhei2008\EasyOpenWechat\Contracts;

use Chunhei2008\EasyOpenWechat\Core\AuthorizationInfo;
use Chunhei2008\EasyOpenWechat\Core\ComponentVerifyTicket;


/**
 * AuthPushContract.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2016/12/16 09:25
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */
interface AuthorizeHandlerContract
{
    /**
     * handle component verify ticket
     *
     * @param                       $message
     * @param ComponentVerifyTicket $componentVerifyTicket
     *
     * @return mixed
     */

    public function componentVerifyTicket($message, ComponentVerifyTicket $componentVerifyTicket);

    /**
     * handle authorized
     *
     * @param                   $message
     * @param AuthorizationInfo $authorizationInfo
     *
     * @return mixed
     */

    public function authorized($message, AuthorizationInfo $authorizationInfo);

    /**
     * handle unauthorized
     *
     * @param $message
     *
     * @return mixed
     */
    public function unauthorized($message, AuthorizerRefreshTokenContract $authorizerRefreshToken);

    /**
     *
     * handle updateauthorized
     *
     * @param                   $message
     * @param AuthorizationInfo $authorizationInfo
     *
     * @return mixed
     */
    public function updateauthorized($message , AuthorizationInfo $authorizationInfo);

}