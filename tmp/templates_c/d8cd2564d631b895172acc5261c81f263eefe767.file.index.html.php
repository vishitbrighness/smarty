<?php /* Smarty version Smarty-3.1.3, created on 2011-10-19 09:27:41
         compiled from "/var/www/smarty_demo/templates/index.html" */ ?>
<?php /*%%SmartyHeaderCode:15098862194e9e89c6e0da26-25275189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8cd2564d631b895172acc5261c81f263eefe767' => 
    array (
      0 => '/var/www/smarty_demo/templates/index.html',
      1 => 1319016384,
      2 => 'file',
    ),
    '98aa0cd28669987867c1ecbd0ca85d757a8d8181' => 
    array (
      0 => '/var/www/smarty_demo/templates/base_template.html',
      1 => 1319016458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15098862194e9e89c6e0da26-25275189',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_4e9e89c7023fd',
  'variables' => 
  array (
    'title' => 0,
    'posted' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4e9e89c7023fd')) {function content_4e9e89c7023fd($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/var/www/smarty_demo/lib/Smarty-3.1.3/plugins/function.html_options.php';
if (!is_callable('smarty_function_html_checkboxes')) include '/var/www/smarty_demo/lib/Smarty-3.1.3/plugins/function.html_checkboxes.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/smarty_demo/lib/Smarty-3.1.3/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/smarty_demo/lib/Smarty-3.1.3/plugins/modifier.date_format.php';
?><html>
<head>
<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? "Smarty 3.1.3 Demonstration" : $tmp);?>
</title>
</head>

<body>
<h1>Smarty 3.1.3 Demo</h1>
<h2>Blog: <a href="http://ranskills.wordpress.com">http://ranskills.wordpress.com</a></h2>


<p>
	<label>Select a destination country: </label>
	<select>
		<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['countries']->value,'selected'=>$_smarty_tpl->tpl_vars['selectedCountry']->value),$_smarty_tpl);?>

	</select>
</p>

<p>
	<?php echo smarty_function_html_checkboxes(array('values'=>$_smarty_tpl->tpl_vars['countryKeys']->value,'output'=>$_smarty_tpl->tpl_vars['countries']->value,'selected'=>$_smarty_tpl->tpl_vars['selectedCountries']->value,'separator'=>'<br/>'),$_smarty_tpl);?>

</p>

<p>
	<table width="100%" cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th width="18%" scope="col">NO.</th>
				<th width="18%" scope="col">COURSE</th>
				<th width="18%" scope="col">CREDIT</th>
				<th width="18%" scope="col">SCORE</th>
				<th width="18%" scope="col">COMMENT</th>
			</tr>
		</thead>	
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['course'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['course']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['courses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['course']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['course']->key => $_smarty_tpl->tpl_vars['course']->value){
$_smarty_tpl->tpl_vars['course']->_loop = true;
 $_smarty_tpl->tpl_vars['course']->iteration++;
?>
		<tr bgcolor="<?php echo smarty_function_cycle(array('values'=>'#FFA, #FFF'),$_smarty_tpl);?>
">
			<td><?php echo $_smarty_tpl->tpl_vars['course']->iteration;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['course']->value['name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['course']->value['credit'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['course']->value['score'];?>
</td>
			<td>
				<?php if ($_smarty_tpl->tpl_vars['course']->value['score']>=50){?>
					PASS
				<?php }else{ ?>
					FAIL
				<?php }?>
	
		
			</td>
		</tr>
		<?php } ?>
			
		</tbody>
	</table>
</p>

<p>
	<form>
		<p>
			<label>Flight Operator: </label>
			<input type="text" id="company" name="company" value="<?php echo $_smarty_tpl->tpl_vars['flight']->value->company;?>
" />
		</p>
		<p>
			<label>Route</label>

			<input type="text" name="from" value="<?php echo $_smarty_tpl->tpl_vars['flight']->value->from;?>
" /> ->
			<input type="text" name="to" value="<?php echo $_smarty_tpl->tpl_vars['flight']->value->to;?>
" />
		</p>
	</form>
</p>


<footer>
	Created on: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['posted']->value,"%A, %B %c, %Y");?>

</footer>
</body>
</html>
<?php }} ?>