<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class GetReturnAddressResponse {
	
	static $_TSPEC;
	public $header = null;
	public $forwardAddressResponse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'forwardAddressResponse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['forwardAddressResponse'])){
				
				$this->forwardAddressResponse = $vals['forwardAddressResponse'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetReturnAddressResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("header" == $schemeField){
				
				$needSkip = false;
				
				$this->header = new \com\vip\tpc\api\model\common\TpcResponseHeader();
				$this->header->read($input);
				
			}
			
			
			
			
			if ("forwardAddressResponse" == $schemeField){
				
				$needSkip = false;
				
				$this->forwardAddressResponse = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key1 = '';
						$input->readString($key1);
						
						$val1 = null;
						
						$val1 = new \com\vip\tpc\api\model\Receiver();
						$val1->read($input);
						
						$this->forwardAddressResponse[$key1] = $val1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
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
		
		$xfer += $output->writeFieldBegin('header');
		
		if (!is_object($this->header)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->header->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->forwardAddressResponse !== null) {
			
			$xfer += $output->writeFieldBegin('forwardAddressResponse');
			
			if (!is_array($this->forwardAddressResponse)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->forwardAddressResponse as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				
				if (!is_object($viter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $viter0->write($output);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>