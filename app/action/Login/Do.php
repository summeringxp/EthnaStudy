<?php
/**
 *  Login/Do.php
 *
 *  @author     {$author}
 *  @package    Test
 *  @version    $Id: 7eaa7a065e4bbc15f8e3a92ab9fea5ab5d4d9fe4 $
 */

/**
 *  login_do Form implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Test
 */
class Test_Form_LoginDo extends Test_ActionForm
{
    /**
     *  @access protected
     *  @var    array   form definition.
     */
    protected $form = array(

                 'mailaddress' => array(
         'name'          => 'Email',
          'required'      => true,
             'type'          => VAR_TYPE_STRING,
         ),
      'password' => array(
          'name'          => 'Password',
          'required'      => true,
          'type'          => VAR_TYPE_STRING,
      ),
       /*
        *  TODO: Write form definition which this action uses.
        *  @see http://ethna.jp/ethna-document-dev_guide-form.html
        *
        *  Example(You can omit all elements except for "type" one) :
        *
        *  'sample' => array(
        *      // Form definition
        *      'type'        => VAR_TYPE_INT,    // Input type
        *      'form_type'   => FORM_TYPE_TEXT,  // Form type
        *      'name'        => 'Sample',        // Display name
        *  
        *      //  Validator (executes Validator by written order.)
        *      'required'    => true,            // Required Option(true/false)
        *      'min'         => null,            // Minimum value
        *      'max'         => null,            // Maximum value
        *      'regexp'      => null,            // String by Regexp
        *      'mbregexp'    => null,            // Multibype string by Regexp
        *      'mbregexp_encoding' => 'UTF-8',   // Matching encoding when using mbregexp 
        *
        *      //  Filter
        *      'filter'      => 'sample',        // Optional Input filter to convert input
        *      'custom'      => null,            // Optional method name which
        *                                        // is defined in this(parent) class.
        *  ),
        */
        
    );

    /**
     *  Form input value convert filter : sample
     *
     *  @access protected
     *  @param  mixed   $value  Form Input Value
     *  @return mixed           Converted result.
     */
    /*
    protected function _filter_sample($value)
    {
        //  convert to upper case.
        return strtoupper($value);
    }
    */
}

/**
 *  login_do action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Test
 */
class Test_Action_LoginDo extends Test_ActionClass
{
    /**
     *  preprocess of login_do Action.
     *
     *  @access public
     *  @return string    forward name(null: success.
     *                                false: in case you want to exit.)
     */
    public function prepare()
    {
        /**
        if ($this->af->validate() > 0) {
            // forward to error view (this is sample)
            return 'error';
        }
        $sample = $this->af->get('sample');
        */
         if ($this->af->validate() > 0) {
          return 'login';
      }
        return null;
    }

    /**
     *  login_do action implementation.
     *
     *  @access public
     *  @return string  forward name.
     */
    public function perform()
    {
  		$um =& new Test_UserManager();
         $result = $um->auth($this->af->get('mailaddress'), $this->af->get('password'));
         if (Ethna::isError($result)) {
              
             return 'login';
         }else{
         	$this->session->start();
         return 'index';
         }
    }
}

