<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/12/28
 * Time: 13:21
 */
try{
    /**
     * 简单的注册脚本实现，主要体现在用户信息认证和密码哈希。
     */
    // 验证电子邮件地址
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if (!$email){
        throw new Exception('invalid email');
    }

    $password = filter_input(INPUT_POST, 'password');
    if (!$password || mb_strlen($password) < 8){
        throw new Exception('Password must contain 8+ characters');
    }

    // 创建密码的哈希值
    $passwordHash = password_hash(
        $password,
        PASSWORD_DEFAULT,
        ['cost'=>12]
    );
    if ($passwordHash===false){
        throw new Exception('Password has failed');
    }

    // 创建用户账户(未实现)
    $user = new StdClass();
    $user->email = $email;
    $user->password_hash = $passwordHash;

    // 重定向到登陆页面
    header('HTTP/1.1 302 Redirect');
    header('Location: /login.php');

} catch (Exception $e){
    // 报告错误
    header('HTTP/1.1 400 Bad request');
    echo $e->getMessage();
}