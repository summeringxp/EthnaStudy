<?php /* Smarty version 2.6.26, created on 2013-03-31 02:16:30
         compiled from login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'message', 'login.tpl', 18, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
 <head></head>
 <body>
 <body>
  <?php if (count ( $this->_tpl_vars['errors'] )): ?>
  <ul>
  <font color='red'><?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error']):
?>
   <li><?php echo $this->_tpl_vars['error']; ?>
</li>
  <?php endforeach; endif; unset($_from); ?></color>
  </ul>
<?php endif; ?>
  <form action="<?php echo $this->_tpl_vars['script']; ?>
" method="post">
  <input type="hidden" name="action_login_do" value="dummy">
  <table border="0">
   <tr>
    <td>Email</td>
    <td><input type="text" name="mailaddress" value="<?php echo $this->_tpl_vars['form']['mailaddress']; ?>
"><?php echo smarty_function_message(array('name' => 'mailaddress'), $this);?>
</td>
   </tr>
   <tr>
    <td>Password</td>
    <td><input type="password" name="password" value=""><?php echo smarty_function_message(array('name' => 'password'), $this);?>
</td>
   </tr>
  </table>
  <p>
  <input type="submit" name="action_login_do" value="login">
  </p>
  </form>
 </body>
</html>