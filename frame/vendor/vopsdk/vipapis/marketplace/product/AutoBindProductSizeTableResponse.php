<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\product;

class AutoBindProductSizeTableResponse {
	
	static $_TSPEC;
	public $spu_id = null;
	public $size_table_id = null;
	public $sku_size_detail_id_mappings = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'spu_id'
			),
			2 => array(
			'var' => 'size_table_id'
			),
			3 => array(
			'var' => 'sku_size_detail_id_mappings'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['spu_id'])){
				
				$this->spu_id = $vals['spu_id'];
			}
			
			
			if (isset($vals['size_table_id'])){
				
				$this->size_table_id = $vals['size_table_id'];
			}
			
			
			if (isset($vals['sku_size_detail_id_mappings'])){
				
				$this->sku_size_detail_id_mappings = $vals['sku_size_detail_id_mappings'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AutoBindProductSizeTableResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("spu_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->spu_id);
				
			}
			
			
			
			
			if ("size_table_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->size_table_id); 
				
			}
			
			
			
			
			if ("sku_size_detail_id_mappings" == $schemeField){
				
				$needSkip = false;
				
				$this->sku_size_detail_id_mappings = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = 0;
						$input->readI64($val0); 
						
						$this->sku_size_detail_id_mappings[$key0] = $val0;
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
		
		$xfer += $output->writeFieldBegin('spu_id');
		$xfer += $output->writeString($this->spu_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('size_table_id');
		$xfer += $output->writeI64($this->size_table_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->sku_size_detail_id_mappings !== null) {
			
			$xfer += $output->writeFieldBegin('sku_size_detail_id_mappings');
			
			if (!is_array($this->sku_size_detail_id_mappings)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->sku_size_detail_id_mappings as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeI64($viter0);
				
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