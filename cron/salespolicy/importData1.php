<?php
header("Content-type:text/html;charset=utf-8;");

$conn_read=mysqli_connect('192.168.1.93','cuteman','QW@W#RSS33#E#','front');
$conn_write=mysqli_connect('192.168.1.93','cuteman','QW@W#RSS33#E#','front');
//$conn=new mysqli('localhost','root','','test') or die("数据库连接失败！"); 

//mysqli_query($conn,'set names utf-8');
//$conn -> set_charset ( "utf8" );


//线下钻饰类默认销售政策
$policy_id = 15;

$info_sql = "select `jiajia`,`sta_value` from `base_salepolicy_info` where `policy_id`=".$policy_id;
$tmp = mysqli_query($conn_write,$info_sql);
$arr = mysqli_fetch_row($tmp);
$jiajia = $arr[0];
$sta_value = $arr[1];

$goods_id_in = "'150421542287','150421542288','150421542289','150421542290','150421542291','150421542292','150421542310','150421542312','150421542313','150421542315','150421542316','150421542317','150421542318','150421542319','150421542320','150421542321','150421542322','150421542324','150421542325','150421542326','150421542327','150421542328','150421542329','150421542331','150421542333','150421542334','150421542335','150421542336','150421542337','150421542338','150421542339','150421542341','150423542941','150423542942','150423542943','150423542944','150423542945','150423542946','150423542947','150423542948','150423542949','150423542950','150423543166','150423543167','150423543168','150423543169','150423543170','150423543171','150423543172','150423543173','150423543443','150423543444','150423543445','150423543446','150423543447','150423543448','150423543449','150423542877','150423542878','150423542879','150423542880','150423542881','150423542882','150423542883','150423542884','150423542885','150423542886','150423542887','150423542888','150423542889','150423542890','150423542891','150423542892','150423542893','150423542894','150423542895','150421541725','150421541726','150421541727','150421541728','150421541729','150421541730','150421541731','150421541732','150421541733','150421541734','150421541735','150421541736','150421541737','150421541738','150421541739','150421541740','150421541741','150421541742','150421542293','150421542294','150421542295','150421542296','150421542297','150421542298','150421542299','150421542300','150421542301','150421542302','150421542303','150421542304','150421542305','150421542306','150421542307','150421542308','150421542309','150423543228','150423543229','150423543230','150423543231','150423543232','150423543233','150423543234','150423543235','150423543236','150423543237','150423543238','150423543239','150423543240','150423543241','150423543242','150423543243','150423543244','150423543245','150423543411','150423543412','150423543413','150423543414','150423543415','150423543416','150423543417','150423543418','150423543419','150423543420','150423543421','150423543422','150423543423','150423543424','150423543425','150423543426','150423543427','150423543428','150423543429','150423543430','150423543431','150423543432','150423543433','150423543434','150423543435','150423543436','150423543437','150423543438','150423543439','150423543440','150423543441'";

$sql = "SELECT count(*) FROM `base_salepolicy_goods` WHERE `goods_id` in ($goods_id_in)";

//echo $sql;die;
$t = mysqli_query($conn_read,$sql);
$cnt = mysqli_fetch_row($t);

$len = $cnt[0];
$num = 500;
$forsize = ceil($len / $num);

$insert_fields = "`policy_id`, `goods_id`, `chengben`, `sale_price`, `jiajia`, `sta_value`, `isXianhuo`, `create_time`, `create_user`, `check_time`, `check_user`, `status`, `is_delete`";

$dtime = date("Y-m-d H:i:s");
for($ii = 1; $ii <= $forsize; $ii ++){
	$offset = ($ii - 1) * $num;
	$read_sql = "select * from `base_salepolicy_goods` where `goods_id` in ($goods_id_in) limit $offset,$num";
	$res_data = mysqli_query($conn_write,$read_sql);
	$val_sql=array();
	while ( $data = mysqli_fetch_array($res_data) ){
		$goods_id = $data['goods_id'];
		$chengben = $data['chengbenjia'];
		$sale_price = $chengben*$jiajia+$sta_value;
		$row = array();
        $row['policy_id']       = $policy_id;
		$row['goods_id']        = $goods_id;
		$row['chengben']        = $chengben;
		$row['sale_price']      = $sale_price;
		$row['jiajia']          = $jiajia;
		$row['sta_value']       = $sta_value;
		$row['isXianhuo']       = $data['isXianhuo'];
		$row['create_time']     = $dtime;
		$row['create_user']     = 'admin';
		$row['check_time']      = $dtime;
		$row['check_user']      = 'admin';
		$row['status']          = 3;
		$row['is_delete']       = 1;
        $val_sql[] = "('".implode("','",$row)."')";
	}
    $sql = "INSERT INTO `app_salepolicy_goods` (" . $insert_fields . ")  VALUES " . implode(',',$val_sql).";";
	//echo $sql;die;	
    if(!mysqli_query($conn_write, $sql)){
        echo $sql."\n\n";
    }else{
        echo mysqli_insert_id($conn_write)."\n\n";
    }
}
die('ok');