<?php /* Smarty version Smarty-3.1.19, created on 2017-02-24 13:08:02
         compiled from "/var/www/html/prestashop-1.6/prestashop_1.7/admin5464g7wt9/themes/default/template/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165551543658b022227c79d4-06017592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '356fb4461e5546f0a299b75140167fa6d982a282' => 
    array (
      0 => '/var/www/html/prestashop-1.6/prestashop_1.7/admin5464g7wt9/themes/default/template/nav.tpl',
      1 => 1487900923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165551543658b022227c79d4-06017592',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee' => 0,
    'tabs' => 0,
    'level_1' => 0,
    'level_2' => 0,
    'level_3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b02222816554_22455895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b02222816554_22455895')) {function content_58b02222816554_22455895($_smarty_tpl) {?><div class="bootstrap">
	<nav id="<?php if ($_smarty_tpl->tpl_vars['employee']->value->bo_menu) {?>nav-sidebar<?php } else { ?>nav-topbar<?php }?>" role="navigation">
	<ul class="menu">
		<?php  $_smarty_tpl->tpl_vars['level_1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['level_1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['level_1']->key => $_smarty_tpl->tpl_vars['level_1']->value) {
$_smarty_tpl->tpl_vars['level_1']->_loop = true;
?>

			<?php if ($_smarty_tpl->tpl_vars['level_1']->value['active']) {?>

				

				<?php if ($_smarty_tpl->tpl_vars['level_1']->value['class_name']=='AdminDashboard') {?>
					<li class="maintab <?php if ($_smarty_tpl->tpl_vars['level_1']->value['current']) {?>active<?php }?>" id="tab-<?php echo $_smarty_tpl->tpl_vars['level_1']->value['class_name'];?>
" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level_1']->value['id_tab'];?>
">
						<a href="<?php if (count($_smarty_tpl->tpl_vars['level_1']->value['sub_tabs'])&&isset($_smarty_tpl->tpl_vars['level_1']->value['sub_tabs'][0]['href'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level_1']->value['sub_tabs'][0]['href'],'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level_1']->value['href'],'html','UTF-8');?>
<?php }?>" class="title" >
							<i class="material-icons"><?php echo $_smarty_tpl->tpl_vars['level_1']->value['icon'];?>
</i>
							<span><?php if ($_smarty_tpl->tpl_vars['level_1']->value['name']=='') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level_1']->value['class_name'],'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level_1']->value['name'],'html','UTF-8');?>
<?php }?></span>
						</a>
					</li>
				<?php } else { ?>

					<li class="<?php if ($_smarty_tpl->tpl_vars['level_1']->value['current']) {?>active<?php }?>" id="tab-<?php echo $_smarty_tpl->tpl_vars['level_1']->value['class_name'];?>
" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level_1']->value['id_tab'];?>
">
						<div class="categorytab">
							<div class="line"></div>
							<span><?php if ($_smarty_tpl->tpl_vars['level_1']->value['name']=='') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level_1']->value['class_name'],'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level_1']->value['name'],'html','UTF-8');?>
<?php }?></span>
						</div>
					</li>
					<?php if (count($_smarty_tpl->tpl_vars['level_1']->value['sub_tabs'])) {?>
						<?php  $_smarty_tpl->tpl_vars['level_2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['level_2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['level_1']->value['sub_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['level_2']->key => $_smarty_tpl->tpl_vars['level_2']->value) {
$_smarty_tpl->tpl_vars['level_2']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['level_2']->value['active']) {?>
								<li class="maintab <?php if ($_smarty_tpl->tpl_vars['level_2']->value['current']) {?>active<?php }?> <?php if (count($_smarty_tpl->tpl_vars['level_2']->value['sub_tabs'])) {?>has_submenu<?php }?>" id="subtab-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level_2']->value['class_name'],'html','UTF-8');?>
" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level_2']->value['id_tab'];?>
">
									<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level_2']->value['href'],'html','UTF-8');?>
" class="title <?php if (count($_smarty_tpl->tpl_vars['level_2']->value['sub_tabs'])) {?>has_submenu<?php }?>">
										<i class="material-icons"><?php echo $_smarty_tpl->tpl_vars['level_2']->value['icon'];?>
</i>
										<span>
											<?php if ($_smarty_tpl->tpl_vars['level_2']->value['name']=='') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level_2']->value['class_name'],'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level_2']->value['name'],'html','UTF-8');?>
<?php }?>
										</span>
									</a>
									<?php if (count($_smarty_tpl->tpl_vars['level_2']->value['sub_tabs'])) {?>
										<ul class="submenu">
											<?php  $_smarty_tpl->tpl_vars['level_3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['level_3']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['level_2']->value['sub_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['level_3']->key => $_smarty_tpl->tpl_vars['level_3']->value) {
$_smarty_tpl->tpl_vars['level_3']->_loop = true;
?>
												<?php if ($_smarty_tpl->tpl_vars['level_3']->value['active']) {?>
													<li class="<?php if ($_smarty_tpl->tpl_vars['level_3']->value['current']) {?>active<?php }?>" id="subtab-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level_3']->value['class_name'],'html','UTF-8');?>
" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level_3']->value['id_tab'];?>
">
														<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level_3']->value['href'],'html','UTF-8');?>
" class="title">
															<?php if ($_smarty_tpl->tpl_vars['level_3']->value['name']=='') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level_3']->value['class_name'],'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['level_3']->value['name'],'html','UTF-8');?>
<?php }?>
														</a>
													</li>
												<?php }?>
											<?php } ?>
										</ul>
									<?php }?>
								</li>
							<?php }?>
						<?php } ?>
					<?php }?>
				<?php }?>

			<?php }?>
		<?php } ?>
	</ul>

	<span class="menu-collapse">
		<i class="icon-align-justify icon-rotate-90"></i>
	</span>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminNavBarBeforeEnd'),$_smarty_tpl);?>


	</nav>
</div>
<?php }} ?>