<?php
/* Smarty version 3.1.38, created on 2021-05-04 14:27:13
  from 'C:\xampp\htdocs\shop\templates\NOVA\snippets\consent_manager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60913da1ecb425_74071529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00e97f3d0f17eeaa624014114dbc6119503c8367' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\consent_manager.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60913da1ecb425_74071529 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117235839260913da1e53ff5_85441495', 'snippets-consent-manager');
?>

<?php }
/* {block 'snippets-consent-manager-banner-icon'} */
class Block_96771571460913da1e5e8d7_91972531 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="consent-banner-icon">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256.12 245.96c-13.25 0-24 10.74-24 24 1.14 72.25-8.14 141.9-27.7 211.55-2.73 9.72 2.15 30.49 23.12 30.49 10.48 0 20.11-6.92 23.09-17.52 13.53-47.91 31.04-125.41 29.48-224.52.01-13.25-10.73-24-23.99-24zm-.86-81.73C194 164.16 151.25 211.3 152.1 265.32c.75 47.94-3.75 95.91-13.37 142.55-2.69 12.98 5.67 25.69 18.64 28.36 13.05 2.67 25.67-5.66 28.36-18.64 10.34-50.09 15.17-101.58 14.37-153.02-.41-25.95 19.92-52.49 54.45-52.34 31.31.47 57.15 25.34 57.62 55.47.77 48.05-2.81 96.33-10.61 143.55-2.17 13.06 6.69 25.42 19.76 27.58 19.97 3.33 26.81-15.1 27.58-19.77 8.28-50.03 12.06-101.21 11.27-152.11-.88-55.8-47.94-101.88-104.91-102.72zm-110.69-19.78c-10.3-8.34-25.37-6.8-33.76 3.48-25.62 31.5-39.39 71.28-38.75 112 .59 37.58-2.47 75.27-9.11 112.05-2.34 13.05 6.31 25.53 19.36 27.89 20.11 3.5 27.07-14.81 27.89-19.36 7.19-39.84 10.5-80.66 9.86-121.33-.47-29.88 9.2-57.88 28-80.97 8.35-10.28 6.79-25.39-3.49-33.76zm109.47-62.33c-15.41-.41-30.87 1.44-45.78 4.97-12.89 3.06-20.87 15.98-17.83 28.89 3.06 12.89 16 20.83 28.89 17.83 11.05-2.61 22.47-3.77 34-3.69 75.43 1.13 137.73 61.5 138.88 134.58.59 37.88-1.28 76.11-5.58 113.63-1.5 13.17 7.95 25.08 21.11 26.58 16.72 1.95 25.51-11.88 26.58-21.11a929.06 929.06 0 0 0 5.89-119.85c-1.56-98.75-85.07-180.33-186.16-181.83zm252.07 121.45c-2.86-12.92-15.51-21.2-28.61-18.27-12.94 2.86-21.12 15.66-18.26 28.61 4.71 21.41 4.91 37.41 4.7 61.6-.11 13.27 10.55 24.09 23.8 24.2h.2c13.17 0 23.89-10.61 24-23.8.18-22.18.4-44.11-5.83-72.34zm-40.12-90.72C417.29 43.46 337.6 1.29 252.81.02 183.02-.82 118.47 24.91 70.46 72.94 24.09 119.37-.9 181.04.14 246.65l-.12 21.47c-.39 13.25 10.03 24.31 23.28 24.69.23.02.48.02.72.02 12.92 0 23.59-10.3 23.97-23.3l.16-23.64c-.83-52.5 19.16-101.86 56.28-139 38.76-38.8 91.34-59.67 147.68-58.86 69.45 1.03 134.73 35.56 174.62 92.39 7.61 10.86 22.56 13.45 33.42 5.86 10.84-7.62 13.46-22.59 5.84-33.43z"/></svg>
				</div>
			<?php
}
}
/* {/block 'snippets-consent-manager-banner-icon'} */
/* {block 'snippets-consent-manager-banner-body-description-title'} */
class Block_128887137860913da1e61707_62258472 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<span class="consent-display-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'howWeUseCookies','section'=>'consent'),$_smarty_tpl ) );?>
</span>
							<?php
}
}
/* {/block 'snippets-consent-manager-banner-body-description-title'} */
/* {block 'snippets-consent-manager-banner-body-description-description'} */
class Block_126467776960913da1e74381_19402952 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'consentDescription','section'=>'consent','printf'=>((implode(', ',$_smarty_tpl->tpl_vars['items']->value)).(':::')).($_smarty_tpl->tpl_vars['privacyURL']->value)),$_smarty_tpl ) );?>
</p>
							<?php
}
}
/* {/block 'snippets-consent-manager-banner-body-description-description'} */
/* {block 'snippets-consent-manager-banner-body-description'} */
class Block_45418594760913da1e60919_82088842 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="consent-banner-description">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128887137860913da1e61707_62258472', 'snippets-consent-manager-banner-body-description-title', $this->tplIndex);
?>

							<?php $_smarty_tpl->_assignInScope('items', array());?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['consentItems']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_tmp_array = isset($_smarty_tpl->tpl_vars['items']) ? $_smarty_tpl->tpl_vars['items']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['item']->value->getName();
$_smarty_tpl->_assignInScope('items', $_tmp_array);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126467776960913da1e74381_19402952', 'snippets-consent-manager-banner-body-description-description', $this->tplIndex);
?>

						</div>
					<?php
}
}
/* {/block 'snippets-consent-manager-banner-body-description'} */
/* {block 'snippets-consent-manager-banner-body-actions'} */
class Block_15992251160913da1e78dd2_02765150 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="consent-banner-actions">
							<div class="consent-btn-helper">
								<div class="consent-accept">
									<button type="button" class="consent-btn consent-btn-tertiary btn-block" id="consent-banner-btn-all"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'consentAll','section'=>'consent'),$_smarty_tpl ) );?>
</button>
								</div>
								<div>
									<button type="button"
											class="consent-btn consent-btn-outline-primary btn-block"
											id="consent-banner-btn-close"
											title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'close','section'=>'consent'),$_smarty_tpl ) );?>
">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'close','section'=>'consent'),$_smarty_tpl ) );?>

									</button>
								</div>
								<div>
									<button type="button" class="consent-btn consent-btn-secondary btn-block" id="consent-banner-btn-settings"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'configure','section'=>'consent'),$_smarty_tpl ) );?>
</button>
								</div>
							</div>
						</div>
					<?php
}
}
/* {/block 'snippets-consent-manager-banner-body-actions'} */
/* {block 'snippets-consent-manager-banner-body'} */
class Block_111926754860913da1e5fe90_48072174 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="consent-banner-body">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45418594760913da1e60919_82088842', 'snippets-consent-manager-banner-body-description', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15992251160913da1e78dd2_02765150', 'snippets-consent-manager-banner-body-actions', $this->tplIndex);
?>

				</div>
			<?php
}
}
/* {/block 'snippets-consent-manager-banner-body'} */
/* {block 'snippets-consent-manager-banner'} */
class Block_23403146860913da1e5d913_23841926 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div id="consent-banner">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96771571460913da1e5e8d7_91972531', 'snippets-consent-manager-banner-icon', $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111926754860913da1e5fe90_48072174', 'snippets-consent-manager-banner-body', $this->tplIndex);
?>

		</div>
	<?php
}
}
/* {/block 'snippets-consent-manager-banner'} */
/* {block 'snippets-consent-manager-settings-close'} */
class Block_98897613860913da1e7df36_67168043 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<button type="button" class="consent-modal-close" data-toggle="consent-close">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z"/></svg>
					</button>
				<?php
}
}
/* {/block 'snippets-consent-manager-settings-close'} */
/* {block 'snippets-consent-manager-settings-icon'} */
class Block_132455386160913da1e7f018_41186091 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<div class="consent-modal-icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256.12 245.96c-13.25 0-24 10.74-24 24 1.14 72.25-8.14 141.9-27.7 211.55-2.73 9.72 2.15 30.49 23.12 30.49 10.48 0 20.11-6.92 23.09-17.52 13.53-47.91 31.04-125.41 29.48-224.52.01-13.25-10.73-24-23.99-24zm-.86-81.73C194 164.16 151.25 211.3 152.1 265.32c.75 47.94-3.75 95.91-13.37 142.55-2.69 12.98 5.67 25.69 18.64 28.36 13.05 2.67 25.67-5.66 28.36-18.64 10.34-50.09 15.17-101.58 14.37-153.02-.41-25.95 19.92-52.49 54.45-52.34 31.31.47 57.15 25.34 57.62 55.47.77 48.05-2.81 96.33-10.61 143.55-2.17 13.06 6.69 25.42 19.76 27.58 19.97 3.33 26.81-15.1 27.58-19.77 8.28-50.03 12.06-101.21 11.27-152.11-.88-55.8-47.94-101.88-104.91-102.72zm-110.69-19.78c-10.3-8.34-25.37-6.8-33.76 3.48-25.62 31.5-39.39 71.28-38.75 112 .59 37.58-2.47 75.27-9.11 112.05-2.34 13.05 6.31 25.53 19.36 27.89 20.11 3.5 27.07-14.81 27.89-19.36 7.19-39.84 10.5-80.66 9.86-121.33-.47-29.88 9.2-57.88 28-80.97 8.35-10.28 6.79-25.39-3.49-33.76zm109.47-62.33c-15.41-.41-30.87 1.44-45.78 4.97-12.89 3.06-20.87 15.98-17.83 28.89 3.06 12.89 16 20.83 28.89 17.83 11.05-2.61 22.47-3.77 34-3.69 75.43 1.13 137.73 61.5 138.88 134.58.59 37.88-1.28 76.11-5.58 113.63-1.5 13.17 7.95 25.08 21.11 26.58 16.72 1.95 25.51-11.88 26.58-21.11a929.06 929.06 0 0 0 5.89-119.85c-1.56-98.75-85.07-180.33-186.16-181.83zm252.07 121.45c-2.86-12.92-15.51-21.2-28.61-18.27-12.94 2.86-21.12 15.66-18.26 28.61 4.71 21.41 4.91 37.41 4.7 61.6-.11 13.27 10.55 24.09 23.8 24.2h.2c13.17 0 23.89-10.61 24-23.8.18-22.18.4-44.11-5.83-72.34zm-40.12-90.72C417.29 43.46 337.6 1.29 252.81.02 183.02-.82 118.47 24.91 70.46 72.94 24.09 119.37-.9 181.04.14 246.65l-.12 21.47c-.39 13.25 10.03 24.31 23.28 24.69.23.02.48.02.72.02 12.92 0 23.59-10.3 23.97-23.3l.16-23.64c-.83-52.5 19.16-101.86 56.28-139 38.76-38.8 91.34-59.67 147.68-58.86 69.45 1.03 134.73 35.56 174.62 92.39 7.61 10.86 22.56 13.45 33.42 5.86 10.84-7.62 13.46-22.59 5.84-33.43z"/></svg>
					</div>
				<?php
}
}
/* {/block 'snippets-consent-manager-settings-icon'} */
/* {block 'snippets-consent-manager-settings-title'} */
class Block_1504450560913da1e80133_56001109 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<span class="consent-display-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cookieSettings','section'=>'consent'),$_smarty_tpl ) );?>
</span>
				<?php
}
}
/* {/block 'snippets-consent-manager-settings-title'} */
/* {block 'snippets-consent-manager-settings-description'} */
class Block_114131992360913da1e87389_57741985 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cookieSettingsDescription','section'=>'consent','printf'=>$_smarty_tpl->tpl_vars['privacyURL']->value),$_smarty_tpl ) );?>
</p>
				<?php
}
}
/* {/block 'snippets-consent-manager-settings-description'} */
/* {block 'snippets-consent-manager-settings-buttons-top'} */
class Block_3682962560913da1e89455_74494114 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<div class="consent-btn-holder">
						<div class="consent-switch">
							<input type="checkbox" class="consent-input" id="consent-all-1" name="consent-all-1" data-toggle="consent-all">
							<label class="consent-label consent-label-secondary" for="consent-all-1"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'selectAll','section'=>'consent'),$_smarty_tpl ) );?>
</span></label>
						</div>
						<div class="consent-accept">
							<button type="button" class="consent-btn consent-btn-tertiary consent-btn-block consent-btn-primary consent-btn-sm d-md-none" data-toggle="consent-close">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'apply','section'=>'consent'),$_smarty_tpl ) );?>

							</button>
						</div>
					</div>
				<?php
}
}
/* {/block 'snippets-consent-manager-settings-buttons-top'} */
/* {block 'snippets-consent-manager-settings-hr'} */
class Block_127994528660913da1e8b9e2_15586210 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<hr />
				<?php
}
}
/* {/block 'snippets-consent-manager-settings-hr'} */
/* {block 'snippets-consent-manager-settings-items-checkbox'} */
class Block_61041159360913da1e8f538_77957672 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<input type="checkbox" class="consent-input" id="consent-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="consent-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-storage-key="<?php echo $_smarty_tpl->tpl_vars['item']->value->getItemID();?>
">
								<label class="consent-label" for="consent-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
</label>
							<?php
}
}
/* {/block 'snippets-consent-manager-settings-items-checkbox'} */
/* {block 'snippets-consent-manager-settings-items-more-button'} */
class Block_2906302660913da1e98c27_58763523 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<a class="consent-show-more" href="#" data-collapse="consent-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-description">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'moreInformation','section'=>'consent'),$_smarty_tpl ) );?>
<span class="consent-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"/></svg></span>
								</a>
							<?php
}
}
/* {/block 'snippets-consent-manager-settings-items-more-button'} */
/* {block 'snippets-consent-manager-settings-items-help'} */
class Block_47276903660913da1e9b3a4_16882014 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div class="consent-help">
									<p><?php echo $_smarty_tpl->tpl_vars['item']->value->getDescription();?>
</p>
								</div>
							<?php
}
}
/* {/block 'snippets-consent-manager-settings-items-help'} */
/* {block 'snippets-consent-manager-settings-items-more-content'} */
class Block_116675411160913da1e9d3e4_27833492 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div class="consent-help consent-more-description consent-hidden" id="consent-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-description">
									<span class="consent-display-3 consent-no-space"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'description','section'=>'consent'),$_smarty_tpl ) );?>
:</span>
									<p><?php echo $_smarty_tpl->tpl_vars['item']->value->getPurpose();?>
</p>
									<span class="consent-display-3 consent-no-space"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'company','section'=>'consent'),$_smarty_tpl ) );?>
:</span>
									<p><?php echo $_smarty_tpl->tpl_vars['item']->value->getCompany();?>
</p>
									<span class="consent-display-3 consent-no-space"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'terms','section'=>'consent'),$_smarty_tpl ) );?>
:</span>
									<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value->getPrivacyPolicy();?>
" target="_blank" rel="noopener"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'link','section'=>'consent'),$_smarty_tpl ) );?>
</a>
								</div>
							<?php
}
}
/* {/block 'snippets-consent-manager-settings-items-more-content'} */
/* {block 'snippets-consent-manager-settings-items-hr'} */
class Block_180113842460913da1ea4374_38771138 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<hr />
						<?php
}
}
/* {/block 'snippets-consent-manager-settings-items-hr'} */
/* {block 'snippets-consent-manager-settings-items'} */
class Block_202814619060913da1e8c9a1_84520180 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['consentItems']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
						<?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['item']->value->getID());?>
						<div class="consent-switch">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61041159360913da1e8f538_77957672', 'snippets-consent-manager-settings-items-checkbox', $this->tplIndex);
?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2906302660913da1e98c27_58763523', 'snippets-consent-manager-settings-items-more-button', $this->tplIndex);
?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47276903660913da1e9b3a4_16882014', 'snippets-consent-manager-settings-items-help', $this->tplIndex);
?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116675411160913da1e9d3e4_27833492', 'snippets-consent-manager-settings-items-more-content', $this->tplIndex);
?>

						</div>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180113842460913da1ea4374_38771138', 'snippets-consent-manager-settings-items-hr', $this->tplIndex);
?>

					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php
}
}
/* {/block 'snippets-consent-manager-settings-items'} */
/* {block 'snippets-consent-manager-settings-buttons-bottom'} */
class Block_106069884260913da1ea5dc0_73604001 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<div class="consent-btn-holder">
						<div class="consent-switch">
							<input type="checkbox" class="consent-input" id="consent-all-2" name="consent-all-2" data-toggle="consent-all">
							<label class="consent-label consent-label-secondary" for="consent-all-2"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'selectAll','section'=>'consent'),$_smarty_tpl ) );?>
</span></label>
						</div>
						<div class="consent-accept">
							<button type="button" class="consent-btn consent-btn-tertiary consent-btn-block consent-btn-primary consent-btn-sm" data-toggle="consent-close">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'apply','section'=>'consent'),$_smarty_tpl ) );?>

							</button>
						</div>
					</div>
				<?php
}
}
/* {/block 'snippets-consent-manager-settings-buttons-bottom'} */
/* {block 'snippets-consent-manager-settings'} */
class Block_157141992560913da1e7d603_80477125 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div id="consent-settings" class="consent-modal">
			<div class="consent-modal-content">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98897613860913da1e7df36_67168043', 'snippets-consent-manager-settings-close', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132455386160913da1e7f018_41186091', 'snippets-consent-manager-settings-icon', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1504450560913da1e80133_56001109', 'snippets-consent-manager-settings-title', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114131992360913da1e87389_57741985', 'snippets-consent-manager-settings-description', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3682962560913da1e89455_74494114', 'snippets-consent-manager-settings-buttons-top', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127994528660913da1e8b9e2_15586210', 'snippets-consent-manager-settings-hr', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202814619060913da1e8c9a1_84520180', 'snippets-consent-manager-settings-items', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106069884260913da1ea5dc0_73604001', 'snippets-consent-manager-settings-buttons-bottom', $this->tplIndex);
?>

			</div>
		</div>
	<?php
}
}
/* {/block 'snippets-consent-manager-settings'} */
/* {block 'snippets-consent-manager-button'} */
class Block_53846244460913da1ea8e68_85872212 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<button type="button" class="consent-btn consent-btn-outline-primary d-none" id="consent-settings-btn" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cookieSettings','section'=>'consent'),$_smarty_tpl ) );?>
">
			<span class="consent-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256.12 245.96c-13.25 0-24 10.74-24 24 1.14 72.25-8.14 141.9-27.7 211.55-2.73 9.72 2.15 30.49 23.12 30.49 10.48 0 20.11-6.92 23.09-17.52 13.53-47.91 31.04-125.41 29.48-224.52.01-13.25-10.73-24-23.99-24zm-.86-81.73C194 164.16 151.25 211.3 152.1 265.32c.75 47.94-3.75 95.91-13.37 142.55-2.69 12.98 5.67 25.69 18.64 28.36 13.05 2.67 25.67-5.66 28.36-18.64 10.34-50.09 15.17-101.58 14.37-153.02-.41-25.95 19.92-52.49 54.45-52.34 31.31.47 57.15 25.34 57.62 55.47.77 48.05-2.81 96.33-10.61 143.55-2.17 13.06 6.69 25.42 19.76 27.58 19.97 3.33 26.81-15.1 27.58-19.77 8.28-50.03 12.06-101.21 11.27-152.11-.88-55.8-47.94-101.88-104.91-102.72zm-110.69-19.78c-10.3-8.34-25.37-6.8-33.76 3.48-25.62 31.5-39.39 71.28-38.75 112 .59 37.58-2.47 75.27-9.11 112.05-2.34 13.05 6.31 25.53 19.36 27.89 20.11 3.5 27.07-14.81 27.89-19.36 7.19-39.84 10.5-80.66 9.86-121.33-.47-29.88 9.2-57.88 28-80.97 8.35-10.28 6.79-25.39-3.49-33.76zm109.47-62.33c-15.41-.41-30.87 1.44-45.78 4.97-12.89 3.06-20.87 15.98-17.83 28.89 3.06 12.89 16 20.83 28.89 17.83 11.05-2.61 22.47-3.77 34-3.69 75.43 1.13 137.73 61.5 138.88 134.58.59 37.88-1.28 76.11-5.58 113.63-1.5 13.17 7.95 25.08 21.11 26.58 16.72 1.95 25.51-11.88 26.58-21.11a929.06 929.06 0 0 0 5.89-119.85c-1.56-98.75-85.07-180.33-186.16-181.83zm252.07 121.45c-2.86-12.92-15.51-21.2-28.61-18.27-12.94 2.86-21.12 15.66-18.26 28.61 4.71 21.41 4.91 37.41 4.7 61.6-.11 13.27 10.55 24.09 23.8 24.2h.2c13.17 0 23.89-10.61 24-23.8.18-22.18.4-44.11-5.83-72.34zm-40.12-90.72C417.29 43.46 337.6 1.29 252.81.02 183.02-.82 118.47 24.91 70.46 72.94 24.09 119.37-.9 181.04.14 246.65l-.12 21.47c-.39 13.25 10.03 24.31 23.28 24.69.23.02.48.02.72.02 12.92 0 23.59-10.3 23.97-23.3l.16-23.64c-.83-52.5 19.16-101.86 56.28-139 38.76-38.8 91.34-59.67 147.68-58.86 69.45 1.03 134.73 35.56 174.62 92.39 7.61 10.86 22.56 13.45 33.42 5.86 10.84-7.62 13.46-22.59 5.84-33.43z"/></svg></span>
		</button>
	<?php
}
}
/* {/block 'snippets-consent-manager-button'} */
/* {block 'snippets-consent-manager-confirm-hidden'} */
class Block_160597243860913da1eab280_70302188 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<input type="hidden" id="consent-confirm-key">
			<?php
}
}
/* {/block 'snippets-consent-manager-confirm-hidden'} */
/* {block 'snippets-consent-manager-confirm-close'} */
class Block_53555844960913da1eb59d7_64677512 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<button type="button" class="consent-modal-close" data-toggle="consent-close">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z"/></svg>
						</button>
					<?php
}
}
/* {/block 'snippets-consent-manager-confirm-close'} */
/* {block 'snippets-consent-manager-confirm-icon'} */
class Block_92623235760913da1eb68e3_14500835 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="consent-modal-icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256.12 245.96c-13.25 0-24 10.74-24 24 1.14 72.25-8.14 141.9-27.7 211.55-2.73 9.72 2.15 30.49 23.12 30.49 10.48 0 20.11-6.92 23.09-17.52 13.53-47.91 31.04-125.41 29.48-224.52.01-13.25-10.73-24-23.99-24zm-.86-81.73C194 164.16 151.25 211.3 152.1 265.32c.75 47.94-3.75 95.91-13.37 142.55-2.69 12.98 5.67 25.69 18.64 28.36 13.05 2.67 25.67-5.66 28.36-18.64 10.34-50.09 15.17-101.58 14.37-153.02-.41-25.95 19.92-52.49 54.45-52.34 31.31.47 57.15 25.34 57.62 55.47.77 48.05-2.81 96.33-10.61 143.55-2.17 13.06 6.69 25.42 19.76 27.58 19.97 3.33 26.81-15.1 27.58-19.77 8.28-50.03 12.06-101.21 11.27-152.11-.88-55.8-47.94-101.88-104.91-102.72zm-110.69-19.78c-10.3-8.34-25.37-6.8-33.76 3.48-25.62 31.5-39.39 71.28-38.75 112 .59 37.58-2.47 75.27-9.11 112.05-2.34 13.05 6.31 25.53 19.36 27.89 20.11 3.5 27.07-14.81 27.89-19.36 7.19-39.84 10.5-80.66 9.86-121.33-.47-29.88 9.2-57.88 28-80.97 8.35-10.28 6.79-25.39-3.49-33.76zm109.47-62.33c-15.41-.41-30.87 1.44-45.78 4.97-12.89 3.06-20.87 15.98-17.83 28.89 3.06 12.89 16 20.83 28.89 17.83 11.05-2.61 22.47-3.77 34-3.69 75.43 1.13 137.73 61.5 138.88 134.58.59 37.88-1.28 76.11-5.58 113.63-1.5 13.17 7.95 25.08 21.11 26.58 16.72 1.95 25.51-11.88 26.58-21.11a929.06 929.06 0 0 0 5.89-119.85c-1.56-98.75-85.07-180.33-186.16-181.83zm252.07 121.45c-2.86-12.92-15.51-21.2-28.61-18.27-12.94 2.86-21.12 15.66-18.26 28.61 4.71 21.41 4.91 37.41 4.7 61.6-.11 13.27 10.55 24.09 23.8 24.2h.2c13.17 0 23.89-10.61 24-23.8.18-22.18.4-44.11-5.83-72.34zm-40.12-90.72C417.29 43.46 337.6 1.29 252.81.02 183.02-.82 118.47 24.91 70.46 72.94 24.09 119.37-.9 181.04.14 246.65l-.12 21.47c-.39 13.25 10.03 24.31 23.28 24.69.23.02.48.02.72.02 12.92 0 23.59-10.3 23.97-23.3l.16-23.64c-.83-52.5 19.16-101.86 56.28-139 38.76-38.8 91.34-59.67 147.68-58.86 69.45 1.03 134.73 35.56 174.62 92.39 7.61 10.86 22.56 13.45 33.42 5.86 10.84-7.62 13.46-22.59 5.84-33.43z"/></svg>
						</div>
					<?php
}
}
/* {/block 'snippets-consent-manager-confirm-icon'} */
/* {block 'snippets-consent-manager-confirm-title'} */
class Block_80757114560913da1eb83c7_15287251 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<span class="consent-display-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'dataProtection','section'=>'consent'),$_smarty_tpl ) );?>
</span>
					<?php
}
}
/* {/block 'snippets-consent-manager-confirm-title'} */
/* {block 'snippets-consent-manager-confirm-description'} */
class Block_113295713360913da1eba326_82763711 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'dataProtectionDescription','section'=>'consent','printf'=>$_smarty_tpl->tpl_vars['privacyURL']->value),$_smarty_tpl ) );?>
</p>
					<?php
}
}
/* {/block 'snippets-consent-manager-confirm-description'} */
/* {block 'snippets-consent-manager-confirm-info-more-button'} */
class Block_137141560860913da1ec21c1_42538833 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<a class="consent-show-more" href="#" data-collapse="consent-confirm-info-description">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'moreInformation','section'=>'consent'),$_smarty_tpl ) );?>
<span class="consent-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"/></svg></span>
								</a>
							<?php
}
}
/* {/block 'snippets-consent-manager-confirm-info-more-button'} */
/* {block 'snippets-consent-manager-confirm-info-more-content'} */
class Block_30422542060913da1ec5aa6_49882346 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								
								<span class="consent-display-2" id="consent-confirm-info-headline">{{headline}}</span>
								<span class="consent-help" id="consent-confirm-info-help">{{description}}</span>
								<div class="consent-help consent-more-description consent-hidden" id="consent-confirm-info-description"></div>
								
							<?php
}
}
/* {/block 'snippets-consent-manager-confirm-info-more-content'} */
/* {block 'snippets-consent-manager-confirm-info'} */
class Block_32303790760913da1ebff88_30912434 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="consent-info">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137141560860913da1ec21c1_42538833', 'snippets-consent-manager-confirm-info-more-button', $this->tplIndex);
?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30422542060913da1ec5aa6_49882346', 'snippets-consent-manager-confirm-info-more-content', $this->tplIndex);
?>

						</div>
					<?php
}
}
/* {/block 'snippets-consent-manager-confirm-info'} */
/* {block 'snippets-consent-manager-confirm-buttons'} */
class Block_195341218160913da1ec7802_67308199 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="consent-btn-helper">
							<div>
								<button type="button" class="consent-btn consent-btn-outline-primary btn-block" id="consent-btn-once"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'consentOnce','section'=>'consent'),$_smarty_tpl ) );?>
</button>
							</div>
							<div>
								<button type="button" class="consent-btn consent-btn-tertiary btn-block" id="consent-btn-always"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'consentAlways','section'=>'consent'),$_smarty_tpl ) );?>
</button>
							</div>
						</div>
					<?php
}
}
/* {/block 'snippets-consent-manager-confirm-buttons'} */
/* {block 'snippets-consent-manager-confirm-content'} */
class Block_32917299860913da1eb4f85_01409484 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="consent-modal-content">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53555844960913da1eb59d7_64677512', 'snippets-consent-manager-confirm-close', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92623235760913da1eb68e3_14500835', 'snippets-consent-manager-confirm-icon', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80757114560913da1eb83c7_15287251', 'snippets-consent-manager-confirm-title', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113295713360913da1eba326_82763711', 'snippets-consent-manager-confirm-description', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32303790760913da1ebff88_30912434', 'snippets-consent-manager-confirm-info', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195341218160913da1ec7802_67308199', 'snippets-consent-manager-confirm-buttons', $this->tplIndex);
?>

				</div>
			<?php
}
}
/* {/block 'snippets-consent-manager-confirm-content'} */
/* {block 'snippets-consent-manager-confirm'} */
class Block_12160711460913da1eaa971_53896607 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div id="consent-confirm" class="consent-modal">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160597243860913da1eab280_70302188', 'snippets-consent-manager-confirm-hidden', $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32917299860913da1eb4f85_01409484', 'snippets-consent-manager-confirm-content', $this->tplIndex);
?>

		</div>
	<?php
}
}
/* {/block 'snippets-consent-manager-confirm'} */
/* {block 'snippets-consent-manager'} */
class Block_117235839260913da1e53ff5_85441495 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-consent-manager' => 
  array (
    0 => 'Block_117235839260913da1e53ff5_85441495',
  ),
  'snippets-consent-manager-banner' => 
  array (
    0 => 'Block_23403146860913da1e5d913_23841926',
  ),
  'snippets-consent-manager-banner-icon' => 
  array (
    0 => 'Block_96771571460913da1e5e8d7_91972531',
  ),
  'snippets-consent-manager-banner-body' => 
  array (
    0 => 'Block_111926754860913da1e5fe90_48072174',
  ),
  'snippets-consent-manager-banner-body-description' => 
  array (
    0 => 'Block_45418594760913da1e60919_82088842',
  ),
  'snippets-consent-manager-banner-body-description-title' => 
  array (
    0 => 'Block_128887137860913da1e61707_62258472',
  ),
  'snippets-consent-manager-banner-body-description-description' => 
  array (
    0 => 'Block_126467776960913da1e74381_19402952',
  ),
  'snippets-consent-manager-banner-body-actions' => 
  array (
    0 => 'Block_15992251160913da1e78dd2_02765150',
  ),
  'snippets-consent-manager-settings' => 
  array (
    0 => 'Block_157141992560913da1e7d603_80477125',
  ),
  'snippets-consent-manager-settings-close' => 
  array (
    0 => 'Block_98897613860913da1e7df36_67168043',
  ),
  'snippets-consent-manager-settings-icon' => 
  array (
    0 => 'Block_132455386160913da1e7f018_41186091',
  ),
  'snippets-consent-manager-settings-title' => 
  array (
    0 => 'Block_1504450560913da1e80133_56001109',
  ),
  'snippets-consent-manager-settings-description' => 
  array (
    0 => 'Block_114131992360913da1e87389_57741985',
  ),
  'snippets-consent-manager-settings-buttons-top' => 
  array (
    0 => 'Block_3682962560913da1e89455_74494114',
  ),
  'snippets-consent-manager-settings-hr' => 
  array (
    0 => 'Block_127994528660913da1e8b9e2_15586210',
  ),
  'snippets-consent-manager-settings-items' => 
  array (
    0 => 'Block_202814619060913da1e8c9a1_84520180',
  ),
  'snippets-consent-manager-settings-items-checkbox' => 
  array (
    0 => 'Block_61041159360913da1e8f538_77957672',
  ),
  'snippets-consent-manager-settings-items-more-button' => 
  array (
    0 => 'Block_2906302660913da1e98c27_58763523',
  ),
  'snippets-consent-manager-settings-items-help' => 
  array (
    0 => 'Block_47276903660913da1e9b3a4_16882014',
  ),
  'snippets-consent-manager-settings-items-more-content' => 
  array (
    0 => 'Block_116675411160913da1e9d3e4_27833492',
  ),
  'snippets-consent-manager-settings-items-hr' => 
  array (
    0 => 'Block_180113842460913da1ea4374_38771138',
  ),
  'snippets-consent-manager-settings-buttons-bottom' => 
  array (
    0 => 'Block_106069884260913da1ea5dc0_73604001',
  ),
  'snippets-consent-manager-button' => 
  array (
    0 => 'Block_53846244460913da1ea8e68_85872212',
  ),
  'snippets-consent-manager-confirm' => 
  array (
    0 => 'Block_12160711460913da1eaa971_53896607',
  ),
  'snippets-consent-manager-confirm-hidden' => 
  array (
    0 => 'Block_160597243860913da1eab280_70302188',
  ),
  'snippets-consent-manager-confirm-content' => 
  array (
    0 => 'Block_32917299860913da1eb4f85_01409484',
  ),
  'snippets-consent-manager-confirm-close' => 
  array (
    0 => 'Block_53555844960913da1eb59d7_64677512',
  ),
  'snippets-consent-manager-confirm-icon' => 
  array (
    0 => 'Block_92623235760913da1eb68e3_14500835',
  ),
  'snippets-consent-manager-confirm-title' => 
  array (
    0 => 'Block_80757114560913da1eb83c7_15287251',
  ),
  'snippets-consent-manager-confirm-description' => 
  array (
    0 => 'Block_113295713360913da1eba326_82763711',
  ),
  'snippets-consent-manager-confirm-info' => 
  array (
    0 => 'Block_32303790760913da1ebff88_30912434',
  ),
  'snippets-consent-manager-confirm-info-more-button' => 
  array (
    0 => 'Block_137141560860913da1ec21c1_42538833',
  ),
  'snippets-consent-manager-confirm-info-more-content' => 
  array (
    0 => 'Block_30422542060913da1ec5aa6_49882346',
  ),
  'snippets-consent-manager-confirm-buttons' => 
  array (
    0 => 'Block_195341218160913da1ec7802_67308199',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="consent-manager" class="d-none">
	<?php if ((isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_DATENSCHUTZ') ? constant('LINKTYP_DATENSCHUTZ') : null)]))) {?>
		<?php $_smarty_tpl->_assignInScope('privacyURL', $_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_DATENSCHUTZ') ? constant('LINKTYP_DATENSCHUTZ') : null)]->getURL());?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('privacyURL', '');?>
	<?php }?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23403146860913da1e5d913_23841926', 'snippets-consent-manager-banner', $this->tplIndex);
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157141992560913da1e7d603_80477125', 'snippets-consent-manager-settings', $this->tplIndex);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53846244460913da1ea8e68_85872212', 'snippets-consent-manager-button', $this->tplIndex);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12160711460913da1eaa971_53896607', 'snippets-consent-manager-confirm', $this->tplIndex);
?>

</div>
<?php
}
}
/* {/block 'snippets-consent-manager'} */
}
