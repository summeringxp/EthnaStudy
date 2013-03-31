<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
 <head></head>
 <body>
 <body>
  {if count($errors)}
  <ul>
  <font color='red'>{foreach from=$errors item=error}
   <li>{$error}</li>
  {/foreach}</color>
  </ul>
{/if}
  <form action="{$script}" method="post">
  <input type="hidden" name="action_login_do" value="dummy">
  <table border="0">
   <tr>
    <td>Email</td>
    <td><input type="text" name="mailaddress" value="{$form.mailaddress}">{message name="mailaddress"}</td>
   </tr>
   <tr>
    <td>Password</td>
    <td><input type="password" name="password" value="">{message name="password"}</td>
   </tr>
  </table>
  <p>
  <input type="submit" name="action_login_do" value="login"><a href='?action_regist=true'>Regist</a>
  </p>
  </form>
 </body>
</html>