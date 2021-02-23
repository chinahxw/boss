<?php

require('../../frame/init.php');
$conn=mysqli_connect('192.168.1.93','cuteman','QW@W#RSS33#E#','app_order')or die("数据库连接失败！");
$conn -> set_charset ( "utf8" );
$sql="select distinct(r.out_order_sn) as taobao_id,ad.freight_no,ad.express_id  from rel_out_order as r left join  app_order_address as ad on r.order_id=ad.order_id where r.out_order_sn in('941442128917068','940930930325953','940922456176658','940236227190971','1041654660480240','1043405683750610','1040644432549930','1043339127926040','940112946570773','1040564594411740','1041508182450030','939174231548386','1043253527198240','1043223448846240','939128715237892','1042344813873530','1040471553485200','939099352358452','1040447715180410','1042305371442710','1042291618473930','1042286257447630','940629895909186','939056397743750','939025437822387','1043090807886740','938993917075680','941030364337073','1041278743993530','940513495620081','1043015362233530','938916156505388','939806867575388','938917590725388','939806864595388','939806943605388','939792942445388','939791345235388','939787666795388','939788622325388','939784469575388','1042956320879800','940417897004951','1041163865708040','938817831138866','1042848480540810','1040095792457030','1042804164489430','939576862702852','938686558205952','1040009479870340','1042713203741610','940187419902060','940051899201677','1041686650635900','1041684412711600','1042541443614300','940032857132380','940033733282380','1041656651954700','1041656890454310','1039793716119340','940472202599358','1040706826179810','939953891309853','1039515318193220','1040456588682120','1039440116580410','1041288893129320','938059678005263','940111326778763','1039392194263330','939612773311556','938905106128878','1041187050792920','939999726330764','939499492352071','938788783537761','1041948880697200','1039199716320710','1040148108552530','1040098986802110','1039034355383400','1039034115473400','1039013079139130','938498229813754','937621992873754','939146291062668','1039723707964640','1041399601865830','938210621941184','1041358167331140','937214951880272','938699819565881','938568134941093','1040860167365600','938375174425381','1040015933180640','937663186415381','1039003943420920','937496787257886','1040546808861220','937963255819370','1037743877847140','1038637462051840','1038607468571700','1039433936037230','1037553475951540','1038396181568620','1037409798053210','936860546770488','935955918617874','1039938720207310','1037141550392740','937289331592661','1036983637374300','1038666090558020','936288948335587','937431080295587','1036710112979240','935296313825284','1036618913413210','1037527540968040','936083587305052','1037217307298240','934900477947464','935643909039560','934733994964763','935601982777968','1038714884694440','936618207899964','1035855234763930','1038461047881840','1037621852269230','1037579059064820','934397111558661','936349806515996','1038137280251100','1036336101553110','935629494257577','1037089851180030','1036850650064900','935177897029474','1035702267052020','1036633294308410','935508525909162','935503966829162','1036526334556920','933788787111075','1034098992344740','1035014263904740','1034993784284900','1035890259125810','1035881774335810','1035296011633520','931887030192494','1034913217964500','1033629467973320','931311997870366','1034070576410140','932086451525984','931021817485257','929506470615257','930365188485257','929505191145257','931544924195257','931448526695475','930791019099798','930142467929798','929269997079798','931016366789472','1031568331873220','929688051238177','929443896244050','927584714823168','927576476014155','1030350656303110','1030235452101420','1029163544605620','1030095455211710','1030866408990430','1028821131035300','1029358329821920','1029357929891920','1026710918601920','926368229161255','1026633631657410','927209649944992','1028966487718110','927147481771272','1026145876448310','924882555840689','926150454932757','924611595782757','1026548182419530','1026349457565710','1025357063255710','1024477875365710','1025308185296940','1024585145094130','924406685670661','923889418530661','923765497785679','923112060665679','921635671760960','922483820940960','1022679790938710','923421084014489','1023471620921110','923373322582980','1024176094460710','1024012017533840','921855744101767','1022915781791610','1022895627187430','922545006821670','1022173464453400','919944798638075','1023552169394900','921327014461665','1021838180620800','920577586436752','1022656096272440','1020665712368720','921524845291679','1021585861405120','920404948471679','1023266084431520','1023252806779500','919541110122192','1020620036429500','1020620195899500','1022503698401520','1022372098512700','920867330589586','1022661768752130','920107973494889','1019703150572200','1022173526995830','1021446978815830','1021442579905830','1021427370205830','1021393538154510','919751256927574','1021830726889420','1019689063353510','919099099075251','917747656671757','918213728401757','1019899682387330','917595806918685','917119246337884','916634615387884','1018077765909420','1015488758449420','1017340894663930','1016475129365740','1015604412009510','913518224887168','1013315870122740','914231402728660','911888155112451','911718797787188','912676778628457','912465490142451','912461738912451','1014462323314740','1011550428955030','1012525058945030','909335676896493','909853748934851','1009274272912030','908748944997991','908680062979366','907787035043070','1007995776385910','906615887387865','1006168269720140','904892628033070','904070312173070','904061758913070','905521892713070','904850702522486','1007131848425300','905233015859781','1004845229310140','903953641291054','902032441611679','1003213529741240','900735901810960','1002264498053440','901204685450960','900014386190586','900606532412980','898801599742267','900592926762267','900288537872267','900060688917168','899620775535388','899593659865388','899573737385388','898067678945388','998700672579821','998573315443340','898532145490087','899162058820087','896757759067991','997998404675910','995586599205910','997400250825910','995579151335910','994306511247421','893375354431077','994924107282839','992349873805441','993033862004306','890930154457594','891234389822864','991200196436746','992813932575110','890995820076969','991488825241912','992885444997604','992112017905949','990216993492720','890718134007692','890351898882568','890279733053083','990011543183436','989995704237105','991498722265110','988977550175110','990357377834933','801618869173579','795083675253953','545840277947804','467896564520921','467715026880921','467701853600921','467891244930921','467888047630921','467693818600921','467707067070921','467691658940921','467705063100921','281046323687997','174334553880796','215047482080796','131358957808423','123507709138423')";
$res = mysqli_query($conn,$sql);
$path=APP_ROOT."shipping/modules/taobaoOrderApi/index.php";
if(!file_exists($path)){
    die('没有找到接口文件');
}
require($path);
$tb = new taobaoOrderApi();
/*
$tb -> TAOBAO_APP_KEY = "21316845";
$tb -> TAOBAO_SECRETKEY = "1169aa8bf28956d2a82d7201666042f8";
$tb -> top_session = "6101e139a3c2de25d07191e01c7d7dfe39c054f2ece214d289919";
*/
while ( $row = mysqli_fetch_assoc($res) ){
    if(empty($row['freight_no'])){
        continue;
    }
    $tb -> LogisticsOnlineSendRequest($row['taobao_id'], $row['freight_no'], $row['express_id']);
    file_put_contents('taobao.sendapi.txt','淘宝订单号：'.$row['taobao_id']."写入$row[freight_no]快递号".PHP_EOL,FILE_APPEND);
    sleep(3);
}


?>
