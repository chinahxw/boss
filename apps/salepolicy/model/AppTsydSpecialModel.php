<?php
/**
 *  -------------------------------------------------
 *   @file		: AppTsydSpecialModel.php
 *   @link		:  www.kela.cn
 *   @copyright	: 2014-2024 kela Inc
 *   @author	: Laipiyang <462166282@qq.com>
 *   @date		: 2017-08-25 17:30:09
 *   @update	:
 *  -------------------------------------------------
 */
class AppTsydSpecialModel extends Model
{
	function __construct ($id=NULL,$strConn="")
	{
		$this->_objName = 'app_tsyd_special';
		$this->pk='id';
		$this->_prefix='';
        $this->_dataObject = array("id"=>" ",
"style_name"=>"款式名称",
"style_sn"=>"款号",
"add_user"=>"添加用户",
"add_time"=>"添加时间");
		parent::__construct($id,$strConn);
	}

	/**
	 *	pageList，分页列表
	 *
	 *	@url AppTsydSpecialController/search
	 */
	function pageList ($where,$page,$pageSize=10,$useCache=true)
	{
		//不要用*,修改为具体字段
		$sql = "SELECT * FROM `".$this->table()."`";
		$str = '';
		if($where['style_sn'] != "")
		{
			$str .= "`style_sn` like \"%".addslashes($where['style_sn'])."%\" AND ";
		}
//		if(!empty($where['xx']))
//		{
//			$str .= "`xx`='".$where['xx']."' AND ";
//		}
		if($str)
		{
			$str = rtrim($str,"AND ");//这个空格很重要
			$sql .=" WHERE ".$str;
		}
		$sql .= " ORDER BY `id` DESC";
		$data = $this->db()->getPageList($sql,array(),$page, $pageSize,$useCache);
		return $data;
	}

    //确认款号是否存在
    public function checkStyle_sn($style_sn)
    {
        $sql = "select * from base_style_info where check_status = 3 and style_sn = '".$style_sn."'";
        return $this->db()->getRow($sql);
    }

    //确认款号是否存在
    public function checkStyle_snTodo($style_sn)
    {
        $sql = "select * from app_tsyd_special where style_sn = '".$style_sn."'";
        return $this->db()->getRow($sql);
    }
}

?>