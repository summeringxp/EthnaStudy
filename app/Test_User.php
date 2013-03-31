<?php
/**
 *  Test_User.php
 *
 *  @author     {$author}
 *  @package    Test
 *  @version    $Id: 2043ca0d5627d5248d0761d3846d06ba3009300d $
 */

/**
 *  Test_UserManager
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Test
 */
class Test_UserManager extends Ethna_AppManager
{
	function auth($mailaddress, $password)
	{
	
		$db =& $this->backend->getDB();
		$sql = "SELECT password FROM user WHERE email = ?";
		$data = array($mailaddress);
		$stmt =& $this->db->db->prepare($sql);
		$res =& $this->db->db->execute($stmt, $data);
		$i = 0;
		$password_db = $res->fetchRow();
		if ($password_db != $password) {
			return Ethna::raiseNotice('Wrong Email Address or Password.', E_SAMPLE_AUTH);
		}
		return 0;
	}
}

/**
 *  Test_User
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Test
 */
class Test_User extends Ethna_AppObject
{
	/**#@+
	 *  @access private
	 */
	/**
	 *  @var    array  
	 */
	var $table_def = array(
			'user' => array(
					'primary' => true,
			),
	);
	
	/**
	 *  @var    array   
	 */
	var $prop_def = array(
			// user_tbl
			'email' => array(
					'primary' => true, 'key' => true, 
					'type' => VAR_TYPE_STRING, 'form_name' => 'email',
			),
			'password' => array(
					'primary' => false, 'key' => false, 'type' => VAR_TYPE_STRING,
					'form_name' => 'password',
			),
	);
    /**
     *  property display name getter.
     *
     *  @access public
     */
	
    function getName($key)
    {
        return $this->get($key);
    }
}

