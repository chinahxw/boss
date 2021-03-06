<?php
/**
 *  -------------------------------------------------
 *   @file		: StoneBillDetailsModel.php
 *   @link		:  www.kela.cn
 *   @copyright	: 2014-2024 kela Inc
 *   @author	: Laipiyang <462166282@qq.com>
 *   @date		: 2017-03-27 13:36:44
 *   @update	:
 *  -------------------------------------------------
 */
class StoneBillDetailsModel extends Model
{
	function __construct ($id=NULL,$strConn="")
	{
		$this->_objName = 'stone_bill_details';
		$this->pk='id';
		$this->_prefix='';
        $this->_dataObject = array("id"=>" ",
"bill_id"=>" ",
"dia_package"=>" ",
"purchase_price"=>" ",
"specification"=>" ",
"color"=>" ",
"neatness"=>" ",
"cut"=>" ",
"symmetry"=>" ",
"polishing"=>" ",
"fluorescence"=>" ",
"num"=>"数量",
"weight"=>"重量",
"price"=>"价格");
		parent::__construct($id,$strConn);
	}

	/**
	 *	pageList，分页列表
	 *
	 *	@url StoneBillDetailsController/search
	 */
	function pageList ($where,$page,$pageSize=10,$useCache=true)
	{
		//不要用*,修改为具体字段
		$sql = "SELECT * FROM `".$this->table()."`";
		$str = '';
		if(!empty($where['bill_id']))
		{
			$str .= "`bill_id`='".$where['bill_id']."' AND ";
		}
		if($str)
		{
			$str = rtrim($str,"AND ");//这个空格很重要
			$sql .=" WHERE ".$str;
		}
		$sql .= " ORDER BY `id` DESC";
		$data = $this->db()->getPageList($sql,array(),$page, $pageSize,$useCache);
		return $data;
	}
}

?>