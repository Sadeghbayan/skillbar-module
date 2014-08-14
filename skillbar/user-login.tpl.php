<div id="wrap-user-login"> </div>
<div id="login">
 <?php
// split the username and password so we can put the form links were we want (they are in the "user-login-links" div bellow)
print drupal_render($form['name']);
print drupal_render($form['pass']);
?>
<div class="user-login-links">

</div>
<?php
// render login button
print drupal_render($form['form_build_id']);
print drupal_render($form['form_id']);
print drupal_render($form['actions']);
?>
    <p class="reg-lose">
        <a class="reg" href="http://www.webpen.ir/user/register">ثبت نام</a>
        |
        <a class="lose-pass" href="http://www.webpen.ir/user/password">درخواست رمز جدید</a>
    </p>

    <p class="wp-login-wrapper"><a class="wp-main" href="http://www.webpen.ir" target="_blank">برگشت به صفحه اصلی سایت ←</a></p>
    <p class="logo-wp">
        <a href="http://www.webpen.ir" target="_blank"<span class="logo-user-img"></span></a>
    </p>
    </<div>
<!-- /user-login-custom-form -->