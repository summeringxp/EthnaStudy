<?php /* Smarty version 2.6.26, created on 2013-03-31 01:53:36
         compiled from layout.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['config']['url']; ?>
css/ethna.css" type="text/css" />
<title>Test</title>
</head>
<body>
<div id="header">
    <h1>Test</h1>
</div>

<div id="main">
<?php echo $this->_tpl_vars['content']; ?>

</div>

<div id="footer">
    Powered By <a href="http://ethna.jp">Ethna</a>-<?php echo @ETHNA_VERSION; ?>
.
</div>
</body>
</html>