<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="__TMPL__Common/style/style.css" />
<script type="text/javascript">
 	var VAR_MODULE = "<?php echo conf("VAR_MODULE");?>";
	var VAR_ACTION = "<?php echo conf("VAR_ACTION");?>";
	var MODULE_NAME	=	'<?php echo MODULE_NAME; ?>';
	var ACTION_NAME	=	'<?php echo ACTION_NAME; ?>';
	var ROOT = '__APP__';
	var ROOT_PATH = '<?php echo APP_ROOT; ?>';
	var CURRENT_URL = '<?php echo trim($_SERVER['REQUEST_URI']);?>';
	var INPUT_KEY_PLEASE = "<?php echo L("INPUT_KEY_PLEASE");?>";
	var TMPL = '__TMPL__';
	var APP_ROOT = '<?php echo APP_ROOT; ?>';
</script>
<script type="text/javascript" src="__TMPL__Common/js/jquery.js"></script>
<script type="text/javascript" src="__TMPL__Common/js/jquery.timer.js"></script>
<script type="text/javascript" src="__TMPL__Common/js/script.js"></script>
<script type="text/javascript" src="__ROOT__/public/runtime/admin/lang.js"></script>
<script type='text/javascript'  src='__ROOT__/admin/public/kindeditor/kindeditor.js'></script>
</head>
<body>
<div id="info"></div>

<?php function get_payment_effect($effect)
	{
		return l("IS_EFFECT_".$effect);
	}
	function get_payment_install($install)
	{
		return l("IS_INSTALL_".$install);
	} ?>
<script type="text/javascript">
	function uninstall(id)
	{
		if(confirm("<?php echo L("CONFIRM_DELETE");?>"))
		{
			location.href = ROOT + "?m=Payment&a=uninstall&id="+id;
		}
	}
</script>
<div class="main">
<div class="main_title"><?php echo ($main_title); ?></div>
<div class="blank5"></div>

<table cellspacing="0" cellpadding="0" class="dataTable" id="dataTable">
	<tbody>
		<tr>
			<td class="topTd" colspan="7">&nbsp; </td>
			</tr>
			<tr class="row">
				<th><?php echo L("PAYMENT_NAME");?></th>
				<th><?php echo L("IS_EFFECT");?></th>
				<th><?php echo L("IS_INSTALL");?></th>				
				<th> <?php echo L("PAYMENT_INCHARGE");?></th>
				<th><?php echo L("SORT");?></th>
				<th><?php echo L("TAG_LANG_OPERATE");?></th>
				</tr>
				<?php if(is_array($payment_list)): foreach($payment_list as $key=>$payment_item): ?><tr class="row">
					<td><?php echo ($payment_item["name"]); ?>
					<?php if($payment_item['reg_url'] != ''): ?><a href="<?php echo ($payment_item['reg_url']); ?>" target="_blank">
							<?php echo L("GO_TO_REG");?>
						</a><?php endif; ?>
					</td>
					<td><?php echo (get_payment_effect($payment_item["is_effect"])); ?></td>
					<td><?php echo (get_payment_install($payment_item["installed"])); ?></td>
					<td><?php echo (format_price($payment_item["total_amount"])); ?> 
					<?php if($payment_item['installed'] == 1): ?><a href="<?php echo u("PaymentNotice/index",array("payment_id"=>$payment_item['id']));?>"><?php echo L("VIEW");?></a><?php endif; ?>
					</td>
					<td><?php echo ($payment_item["sort"]); ?></td>
					<td>
						<?php if($payment_item['installed'] == 0): ?><a href="<?php echo u("Payment/install",array("class_name"=>$payment_item['class_name']));?>"><?php echo L("INSTALL");?></a>
						<?php else: ?>
						<a href="<?php echo u("Payment/edit",array("id"=>$payment_item['id']));?>"><?php echo L("EDIT");?></a>
						<a href="javascript:uninstall(<?php echo ($payment_item["id"]); ?>);" ><?php echo L("UNINSTALL");?></a><?php endif; ?>
					</td>
				</tr><?php endforeach; endif; ?>
				<tr><td class="bottomTd" colspan="7"> &nbsp;</td></tr>
			</tbody>
		</table>


</div>
</body>
</html>