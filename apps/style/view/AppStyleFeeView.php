<?php
/**
 *  -------------------------------------------------
 *   @file		: AppStyleFeeView.php
 *   @link		:  www.kela.cn
 *   @copyright	: 2014-2024 kela Inc
 *   @author	: Laipiyang <462166282@qq.com>
 *   @date		: 2015-02-26 16:53:06
 *   @update	:
 *  -------------------------------------------------
 */
class AppStyleFeeView extends View
{
	protected $_id;
	protected $_style_id;
	protected $_fee_type;
	protected $_price;
	protected $_status;
	protected $_check_user;
	protected $_check_time;
	protected $_cancel_time;


	public function get_id(){return $this->_id;}
	public function get_style_id(){return $this->_style_id;}
	public function get_fee_type(){return $this->_fee_type;}
	public function get_price(){return $this->_price;}
	public function get_status(){return $this->_status;}
	public function get_check_user(){return $this->_check_user;}
	public function get_check_time(){return $this->_check_time;}
	public function get_cancel_time(){return $this->_cancel_time;}

}
?>