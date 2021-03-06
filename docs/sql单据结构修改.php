<?php 
1、KELA商品收入	时间可选	己审核//已修改   xiaoshoujia===》shijia
表头：货号	S销售单	单号	订单录入类型	销售部门	日期	款式类型	销货商品数量	实际价格	成本价	原始成本价	销账公司	来源	单据号	订单号
sql:
	SELECT  o.bill_no as S销售单,og.goods_id as 货号,i.referer as 订单录入类型,c.channel_name as 销售部门, o.check_time AS 仓储销账审核日期	,g.cat_type as 款式类型,   og.num as 销货商品数量,  og.shijia  AS 实际价格,  g.chengbenjia  AS 成本价, g.yuanshichengbenjia  AS 原始成本价,o.from_company_name as 销账公司, cs.source_name as 来源,o.order_sn as 订单号
	FROM 
	warehouse_shipping.warehouse_bill_goods AS og, warehouse_shipping.warehouse_goods AS g, 
	cuteframe.sales_channels AS c, 
	cuteframe.customer_sources AS cs, 
	app_order.base_order_info AS i 
	LEFT JOIN warehouse_shipping.warehouse_bill AS o 
	ON o.order_sn = i.order_sn
	WHERE o.id = og.bill_id
	AND og.goods_id = g.goods_id
	AND cs.id = i.customer_source_id
	AND o.bill_type = 'S'
	AND c.id = i.department_id
	AND o.bill_status =2
	AND o.check_time >= '2015-07-01 00:00:00'
	AND o.check_time <= '2015-07-19 23:59:59'
2、KELA商品退货	可选	己审核 //已修改   xiaoshoujia===》shijia
表头：货号	D退货单	单号	订单录入类型	销售部门	日期	款式类型	销货商品数量	实际价格	成本价	原始成本价	销账公司	来源	单据号	订单号
sql：
	SELECT  o.bill_no as D退货单,og.goods_id as 货号,i.referer as 订单录入类型,c.channel_name as 销售部门, o.check_time AS 仓储销账审核日期	,g.cat_type as 款式类型,   og.num as 销货商品数量,  og.shijia  AS 实际价格,  g.chengbenjia  AS 成本价, g.yuanshichengbenjia  AS 原始成本价, o.to_company_name as 销账公司, cs.source_name as 来源,o.order_sn as 订单号
	FROM 
	warehouse_shipping.warehouse_bill_goods AS og, warehouse_shipping.warehouse_goods AS g, 
	cuteframe.sales_channels AS c, 
	cuteframe.customer_sources AS cs, 
	app_order.base_order_info AS i 
	LEFT JOIN warehouse_shipping.warehouse_bill AS o 
	ON o.order_sn = i.order_sn
	WHERE o.id = og.bill_id
	AND og.goods_id = g.goods_id
	AND cs.id = i.customer_source_id
	AND o.bill_type = 'D'
	AND c.id = i.department_id
	AND o.bill_status =2
	AND o.check_time >= '2015-06-01 00:00:00'
	AND o.check_time <= '2015-06-30 23:59:59'
3、批发销售单	可选	己审核	货号 //已修改   xiaoshoujia===》shijia
表头：单号	仓储销账审核日期 	货号	款式类型 	出库公司 	批发客户	 货品数量	材质	主石重	副石重	名义成本	 实际价格	 原始成本价	制单时间	审核时间
sql:
	SELECT  b.`bill_no` AS 单号,b.`check_time` AS 仓储销账审核日期, wg.goods_id as 货号,wg.cat_type  as 款式类型,b.`from_company_name` as 出库公司 ,c. wholesale_name AS 批发客户,g.num as 货品数量, wg.caizhi as 材质, wg.zuanshidaxiao as 主石重, wg.fushizhong as 副石重, wg.jinzhong as  金重,wg. mingyichengben as 名义成本,g.shijia as 实际价格,wg.`yuanshichengbenjia` AS 原始成本价,  b.`create_time` AS 制单时间
	FROM `warehouse_bill` AS `b` , `warehouse_bill_goods` AS `g` , `warehouse_goods` AS `wg`, jxc_wholesale  as   c
	WHERE `g`.`bill_id` = `b`.`id` 
	AND  b. to_customer_id = c. wholesale_id
	AND `g`.`goods_id` = `wg`.`goods_id` 
	AND `b`.bill_status = 2
	AND `b`.bill_type = 'P'
	AND b.check_time >= '2015-06-01 00:00:00'
	AND b.check_time <= '2015-06-30 23:59:59'
	ORDER BY `b`.id DESC
	批发退货单
	SELECT  b.`bill_no` AS 单号,b.`check_time` AS 仓储销账审核日期, wg.goods_id as 货号,wg.cat_type  as 款式类型,b.`to_company_name` as 入库公司 ,c. wholesale_name AS 批发客户,g.num as 货品数量, wg.caizhi as 材质, wg.zuanshidaxiao as 主石重, wg.fushizhong as 副石重, wg.jinzhong as  金重,wg. mingyichengben as 名义成本,g.shijia as 实际价格,wg.`yuanshichengbenjia` AS 原始成本价,  b.`create_time` AS 制单时间
	FROM `warehouse_bill` AS `b` , `warehouse_bill_goods` AS `g` , `warehouse_goods` AS `wg`, jxc_wholesale  as   c
	WHERE `g`.`bill_id` = `b`.`id` 
	AND  b. to_customer_id = c. wholesale_id
	AND `g`.`goods_id` = `wg`.`goods_id` 
	AND `b`.bill_status = 2
	AND `b`.bill_type = 'H'
	AND b.check_time >= '2015-06-01 00:00:00'
	AND b.check_time <= '2015-06-30 23:59:59'
	ORDER BY `b`.id DESC

4、名称：销售出入库记录	 审核时间：可选	    出入 可选        公司：可选
 //已修改  xiaoshoujia===》shijia
 表头：单号	单据类型	单据状态	数量	订单号	出（入）库公司	制单人	审核人	创建时间	审核时间	货号	材质	主石重	副石重	款式分类	实价	名义成本	原始采购成本	
 sql：
	SELECT  b.`bill_no` AS 单号, b.`bill_type` AS 单据类型,  case when b.`bill_status`=1 then '保存' when b.`bill_status`=2 then '已审核' when b.`bill_status`=3 then '已取消' end  AS 单据状态, b.`goods_num` AS 数量, b.`order_sn` AS 订单号, b.`from_company_name` AS 出库公司, b.`to_company_name` AS 入库公司, b.`create_user` AS 制单人,  b.`check_user` AS 审核人,b.`create_time` AS 创建时间,b.`check_time` AS 审核时间, wg.goods_id as 货号,wg.caizhi as 材质,`wg`.`zuanshidaxiao` as 主石重,`wg`.`fushizhong` as 副石重,`wg`.`jinzhong` as 金重,`wg`.`cat_type` as 款式分类, g.shijia AS 实价, `wg`.`mingyichengben` as 名义成本,wg.`yuanshichengbenjia` AS 原始采购成本
	FROM `warehouse_bill` AS `b` , `warehouse_bill_goods` AS `g` , `warehouse_goods` AS `wg` 
	WHERE `g`.`bill_id` = `b`.`id` 
	AND `g`.`goods_id` = `wg`.`goods_id` 
	AND `b`.bill_status = 2
	AND `b`.bill_type in ('S','D')
	AND b.check_time >= '2015-06-01 00:00:00'
	AND b.check_time <= '2015-06-30 23:59:59'
5、调拨单 //无修改
	SELECT  b.`bill_no` AS 单号, b.`bill_type` AS 单据类型,case when b.`bill_status`=1 then '保存' when b.`bill_status`=2 then '已审核' when b.`bill_status`=3 then '已取消' end  AS 单据状态, b.`order_sn` AS 订单号, b.`from_company_name` AS 出货公司,b.`to_company_name` AS 入货公司, b.`to_warehouse_name` AS 入货仓, b.`create_user` AS 制单人, b.`check_user` AS 审核人, b.`create_time` AS 创建时间, b.`check_time` AS 审核时间,wg.goods_id as 货号,wg.caizhi as 材质,wg.cat_type  as 款式分类,wg.zuanshidaxiao as 主石重,wg.fushizhong as 副石重,wg.jinzhong as 金重, wg.`yuanshichengbenjia` AS 原始采购成本
	FROM `warehouse_bill` AS `b` , `warehouse_bill_goods` AS `g` , `warehouse_goods` AS `wg` 
	WHERE `g`.`bill_id` = `b`.`id` 
	AND `g`.`goods_id` = `wg`.`goods_id` 
	AND `b`.bill_status = 2
	AND `b`.bill_type = 'M'
	AND `b`.`check_time` >= '2015-06-01 00:00:00 '
	AND `b`.`check_time` <= '2015-06-30 23:59:59'
	ORDER BY `b`.id DESC
6、退货返厂单 //因以前数据没有洗，现在导出2种情况(2015-07-27之后是第二种)

	select wb.bill_no as '单号',case when wb.bill_type='L' then '收货单' when wb.bill_type='B' then '退货返厂单' end  as '单据类型',wb.pro_name as '结算商', wb.goods_total as '结算金额',wb.create_time as '制单时间',wb.check_time as '审核时间', wg.goods_id as '货号',wg.cat_type as '款式分类',wg.jinzhong as '金重',wg.zuanshidaxiao as 主石重,wg.yuanshichengbenjia as '原始采购成本'  from warehouse_bill as wb,warehouse_bill_goods as
	wbg,warehouse_goods as wg  where
	wg.goods_id=wbg.goods_id and wbg.bill_id=wb.id  and wb.bill_type ='B' and wb.bill_status =2 AND wb.check_time <=  '2015-07-01 23:59:59'
	AND wb.check_time >=  '2015-07-26 00:00:00'

	select wb.bill_no as '单号',case when wb.bill_type='B' then '退货返厂单' when wb.bill_type='T' then '其他收货单' end  as '单据类型',bp.pro_name as '结算商',bp.amount as '结算金额',wb.create_time as '制单时间',wb.check_time as '审核时间', wg.goods_id as '货号',wg.jinzhong as '金重',wg.zuanshidaxiao as  '主石重',wg.cat_type as '款式分类',wg.yuanshichengbenjia as '原始采购成本'  from warehouse_bill as wb,warehouse_bill_goods as
	wbg,warehouse_goods as wg,warehouse_bill_pay as bp  where
	wg.goods_id=wbg.goods_id and wbg.bill_id=wb.id  and bp.bill_id=wb.id and wb.bill_type ='B' and wb.bill_status =2 AND wb.check_time <=  '2015-07-31 23:59:59'
	AND wb.check_time >=  '2015-07-27 00:00:00'

7、其他出库单  //已修改
	select wb.bill_no as '单号',case when wb.bill_type='C' then '其他出库单' when wb.bill_type='T' then '其他收货单' end  as '单据类型',wb.pro_name as '结算商', wb.goods_total as '结算金额',wb.create_time as '制单时间',wb.check_time as '审核时间', wg.goods_id as '货号',wg.jinzhong as '金重',wg.zuanshidaxiao as '主石重',wg.cat_type as '款式分类',wg.yuanshichengbenjia as '原始采购成本'  from warehouse_bill as wb,warehouse_bill_goods as

	wbg,warehouse_goods as wg where

	wg.goods_id=wbg.goods_id and wbg.bill_id=wb.id  and wb.bill_type ='C' and wb.bill_status =2 AND wb.check_time <=  '2015-07-91 23:59:59'
	AND wb.check_time >=  '2015-07-01 00:00:00'
8、收货单 //无修改
	select wb.bill_no as '单号',case when wb.bill_type='L' then '收货单' when wb.bill_type='B' then '退货返厂单' end  as '单据类型',bp.pro_name as '结算商',bp.amount as '结算金额',wb.create_time as '制单时间',wb.check_time as '审核时间', wg.goods_id as '货号',wg.jinzhong as '金重',wg.zuanshidaxiao as 主石重,wg.cat_type as '款式分类',wg.yuanshichengbenjia as '原始采购成本'  from warehouse_bill as wb,warehouse_bill_goods as
	wbg,warehouse_goods as wg,warehouse_bill_pay as bp  where
	wg.goods_id=wbg.goods_id and wbg.bill_id=wb.id  and bp.bill_id=wb.id and wb.bill_type ='L' and wb.bill_status =2 
	and wb.check_time <= '2015-07-19 23:59:59' 
	and wb.check_time >= '2015-07-01 00:00:00' 
9、其他收货单 //无修改
	select wb.bill_no as '单号',case when wb.bill_type='C' then '其他出库单' when wb.bill_type='T' then '其他收货单' end  as '单据类型',bp.pro_name as '结算商',bp.amount as '结算金额',wb.create_time as '制单时间',wb.check_time as '审核时间', wg.goods_id as '货号',wg.jinzhong as '金重',wg.zuanshidaxiao as  主石重,wg.cat_type as '款式分类',wg.yuanshichengbenjia as '原始采购成本'  from warehouse_bill as wb,warehouse_bill_goods as

	wbg,warehouse_goods as wg,warehouse_bill_pay as bp  where

	wg.goods_id=wbg.goods_id and wbg.bill_id=wb.id  and bp.bill_id=wb.id and wb.bill_type ='T' and wb.bill_status =2 AND wb.check_time <=  '2015-07-19 23:59:59'
	AND wb.check_time >=  '2015-07-01 00:00:00'
10、损益单 //已修改
	SELECT  b.`bill_no` AS 单号, b.`bill_type` AS 单据类型,  case when b.`bill_status`=1 then '保存' when b.`bill_status`=2 then '已审核' when b.`bill_status`=3 then '已取消' end  AS 单据状态, b.`goods_num` AS 数量, b.`order_sn` AS 订单号, b.`from_company_name` AS 出库公司, b.`to_company_name` AS 入库公司, b.`create_user` AS 制单人,  b.`check_user` AS 审核人,b.`create_time` AS 创建时间,b.`check_time` AS 审核时间, wg.goods_id as 货号,wg.caizhi as 材质,`wg`.`zuanshidaxiao` as 主石重,`wg`.`fushizhong` as 副石重,`wg`.`jinzhong` as 金重,`wg`.`cat_type` as 款式分类, g.`shijia` AS 实价, `wg`.`mingyichengben` as 名义成本,wg.`yuanshichengbenjia` AS 原始采购成本
	FROM `warehouse_bill` AS `b` , `warehouse_bill_goods` AS `g` , `warehouse_goods` AS `wg` 
	WHERE `g`.`bill_id` = `b`.`id` 
	AND `g`.`goods_id` = `wg`.`goods_id` 
	AND `b`.bill_status = 2
	AND `b`.bill_type ='E'
	AND b.check_time >= '2015-06-01 00:00:00'
	AND b.check_time <= '2015-06-30 23:59:59'

叶启新导：
黄金销售数据:时间范围是4月21日-5月6日。（吴鹏）
包括的字段为：
日期、库房、款号、数量、金重、成本、买入工费、销售价、是否结价。

SELECT left( o.check_time, 10 ) AS 日期, warehouse AS 库房, g.goods_sn AS 款号, count( g.id ) AS 数量, sum( g.jinzhong ) AS 金重, sum( g.chengbenjia ) AS 成本, sum( g.mairugongfei ) AS 买入工费, sum( og.shijia ) AS 销售价, 
CASE WHEN g.jiejia =1
THEN '未结价'
ELSE '已结价'
END AS 是否结价
FROM warehouse_goods AS g, warehouse AS w, warehouse_bill_goods AS og, warehouse_bill AS o
WHERE og.bill_id = o.id
AND g.warehouse_id=w.id
AND o.bill_status =2
AND o.bill_type = 'S'
AND g.goods_id = og.goods_id
AND g.is_on_sale =3
AND g.caizhi = '千足金'
AND check_time >= '2015-07-22 00:00:00'
AND check_time <= '2015-07-28 23:59:59'
GROUP BY g.warehouse_id, g.goods_sn, left( o.check_time, 10 ),g.jiejia 


黄金库存数据-总库存数据（吴鹏）
select w.name as 商品渠道, count(g.id) as 库存数量, sum(g.chengbenjia) as 总成本, sum(jinzhong) as 总金重 from warehouse_goods as g, warehouse as w where g.is_on_sale in (2,4,5,6,8,10,11) and g.caizhi='千足金'
and g.warehouse_id=w.id group by warehouse_id
