<?php
/**
 *  {$view_path}
 *
 *  @author     {$author}
 *  @package    Test
 *  @version    $Id: 3746a141b08f7277ff5d5367023b2f4f12139878 $
 */

/**
 *  {$forward_name} view implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Test
 */
class {$view_class} extends Test_ViewClass
{
    /** @var boolean  layout template use flag   */
    public $use_layout = true;

    /**
     *  preprocess before forwarding.
     *
     *  @access public
     */
    public function preforward()
    {
    }
}

