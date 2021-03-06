<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vipmax\coupon;

class CouponInfo {
	
	static $_TSPEC;
	public $seq = null;
	public $coupon_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'seq'
			),
			2 => array(
			'var' => 'coupon_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['seq'])){
				
				$this->seq = $vals['seq'];
			}
			
			
			if (isset($vals['coupon_sn'])){
				
				$this->coupon_sn = $vals['coupon_sn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CouponInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("seq" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->seq); 
				
			}
			
			
			
			
			if ("coupon_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->coupon_sn);
				
			}
			
			
			
			if($needSkip){
				
				\Osp\Protocol\ProtocolUtil::skip($input);
			}
			
			$input->readFieldEnd();
		}
		
		$input->readStructEnd();
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('seq');
		$xfer += $output->writeI32($this->seq);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('coupon_sn');
		$xfer += $output->writeString($this->coupon_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>