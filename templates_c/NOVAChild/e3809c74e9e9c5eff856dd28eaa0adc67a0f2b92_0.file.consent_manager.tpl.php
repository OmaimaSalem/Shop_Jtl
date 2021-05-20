<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:16:47
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\consent_manager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a385ffe6b970_34013967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3809c74e9e9c5eff856dd28eaa0adc67a0f2b92' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\consent_manager.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a385ffe6b970_34013967 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176888742460a385ffe17732_92717871', 'snippets-consent-manager');
?>

<?php }
/* {block 'snippets-consent-manager-banner-icon'} */
class Block_88141521060a385ffe1ea60_36898391 extends Smarty_Internal_Block
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
class Block_160568593060a385ffe21395_09666118 extends Smarty_Internal_Block
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
class Block_190699117860a385ffe26ef0_12072297 extends Smarty_Internal_Block
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
class Block_214505908260a385ffe207d1_41437508 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="consent-banner-description">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160568593060a385ffe21395_09666118', 'snippets-consent-manager-banner-body-description-title', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190699117860a385ffe26ef0_12072297', 'snippets-consent-manager-banner-body-description-description', $this->tplIndex);
?>

						</div>
					<?php
}
}
/* {/block 'snippets-consent-manager-banner-body-description'} */
/* {block 'snippets-consent-manager-banner-body-actions'} */
class Block_142021537360a385ffe2baa1_33963563 extends Smarty_Internal_Block
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
class Block_177734436860a385ffe1fd46_92177453 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="consent-banner-body">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214505908260a385ffe207d1_41437508', 'snippets-consent-manager-banner-body-description', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142021537360a385ffe2baa1_33963563', 'snippets-consent-manager-banner-body-actions', $this->tplIndex);
?>

				</div>
			<?php
}
}
/* {/block 'snippets-consent-manager-banner-body'} */
/* {block 'snippets-consent-manager-banner'} */
class Block_183028474860a385ffe1dfa6_32723338 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div id="consent-banner">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88141521060a385ffe1ea60_36898391', 'snippets-consent-manager-banner-icon', $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177734436860a385ffe1fd46_92177453', 'snippets-consent-manager-banner-body', $this->tplIndex);
?>

		</div>
	<?php
}
}
/* {/block 'snippets-consent-manager-banner'} */
/* {block 'snippets-consent-manager-settings-close'} */
class Block_203188345460a385ffe321b1_57213677 extends Smarty_Internal_Block
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
class Block_46563967160a385ffe333c9_64128370 extends Smarty_Internal_Block
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
class Block_133753959360a385ffe345f9_55062105 extends Smarty_Internal_Block
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
class Block_25498362260a385ffe364b7_66898864 extends Smarty_Internal_Block
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
class Block_49569557060a385ffe38837_80976476 extends Smarty_Internal_Block
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
class Block_147224793760a385ffe3b431_42975671 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<hr />
				<?php
}
}
/* {/block 'snippets-consent-manager-settings-hr'} */
/* {block 'snippets-consent-manager-settings-items-checkbox'} */
class Block_203965711760a385ffe3f897_09964667 extends Smarty_Internal_Block
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
class Block_96788531360a385ffe44031_39947306 extends Smarty_Internal_Block
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
class Block_18085624260a385ffe46543_11855771 extends Smarty_Internal_Block
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
class Block_45607057760a385ffe48872_49700766 extends Smarty_Internal_Block
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
class Block_44437833760a385ffe509c5_79300133 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<hr />
						<?php
}
}
/* {/block 'snippets-consent-manager-settings-items-hr'} */
/* {block 'snippets-consent-manager-settings-items'} */
class Block_10422381160a385ffe3c589_29674228 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203965711760a385ffe3f897_09964667', 'snippets-consent-manager-settings-items-checkbox', $this->tplIndex);
?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96788531360a385ffe44031_39947306', 'snippets-consent-manager-settings-items-more-button', $this->tplIndex);
?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18085624260a385ffe46543_11855771', 'snippets-consent-manager-settings-items-help', $this->tplIndex);
?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45607057760a385ffe48872_49700766', 'snippets-consent-manager-settings-items-more-content', $this->tplIndex);
?>

						</div>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44437833760a385ffe509c5_79300133', 'snippets-consent-manager-settings-items-hr', $this->tplIndex);
?>

					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php
}
}
/* {/block 'snippets-consent-manager-settings-items'} */
/* {block 'snippets-consent-manager-settings-buttons-bottom'} */
class Block_89256734560a385ffe52842_68282111 extends Smarty_Internal_Block
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
class Block_41021756860a385ffe31579_56227560 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div id="consent-settings" class="consent-modal">
			<div class="consent-modal-content">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203188345460a385ffe321b1_57213677', 'snippets-consent-manager-settings-close', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46563967160a385ffe333c9_64128370', 'snippets-consent-manager-settings-icon', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133753959360a385ffe345f9_55062105', 'snippets-consent-manager-settings-title', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25498362260a385ffe364b7_66898864', 'snippets-consent-manager-settings-description', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49569557060a385ffe38837_80976476', 'snippets-consent-manager-settings-buttons-top', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147224793760a385ffe3b431_42975671', 'snippets-consent-manager-settings-hr', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10422381160a385ffe3c589_29674228', 'snippets-consent-manager-settings-items', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89256734560a385ffe52842_68282111', 'snippets-consent-manager-settings-buttons-bottom', $this->tplIndex);
?>

			</div>
		</div>
	<?php
}
}
/* {/block 'snippets-consent-manager-settings'} */
/* {block 'snippets-consent-manager-button'} */
class Block_86321316860a385ffe55d70_99140239 extends Smarty_Internal_Block
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
class Block_34381806660a385ffe58764_30084332 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<input type="hidden" id="consent-confirm-key">
			<?php
}
}
/* {/block 'snippets-consent-manager-confirm-hidden'} */
/* {block 'snippets-consent-manager-confirm-close'} */
class Block_64569877960a385ffe5a2b9_18339181 extends Smarty_Internal_Block
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
class Block_140320551560a385ffe5b3b3_41438981 extends Smarty_Internal_Block
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
class Block_25654770260a385ffe5c5a9_45156824 extends Smarty_Internal_Block
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
class Block_6687081960a385ffe5e3e4_51177494 extends Smarty_Internal_Block
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
class Block_95902995160a385ffe61162_09465201 extends Smarty_Internal_Block
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
class Block_178420128060a385ffe62fd2_51827721 extends Smarty_Internal_Block
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
class Block_79459146360a385ffe606d7_46405532 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="consent-info">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95902995160a385ffe61162_09465201', 'snippets-consent-manager-confirm-info-more-button', $this->tplIndex);
?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178420128060a385ffe62fd2_51827721', 'snippets-consent-manager-confirm-info-more-content', $this->tplIndex);
?>

						</div>
					<?php
}
}
/* {/block 'snippets-consent-manager-confirm-info'} */
/* {block 'snippets-consent-manager-confirm-buttons'} */
class Block_63267309160a385ffe67283_64367992 extends Smarty_Internal_Block
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
class Block_199071530960a385ffe59833_24584120 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="consent-modal-content">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64569877960a385ffe5a2b9_18339181', 'snippets-consent-manager-confirm-close', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140320551560a385ffe5b3b3_41438981', 'snippets-consent-manager-confirm-icon', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25654770260a385ffe5c5a9_45156824', 'snippets-consent-manager-confirm-title', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6687081960a385ffe5e3e4_51177494', 'snippets-consent-manager-confirm-description', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79459146360a385ffe606d7_46405532', 'snippets-consent-manager-confirm-info', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63267309160a385ffe67283_64367992', 'snippets-consent-manager-confirm-buttons', $this->tplIndex);
?>

				</div>
			<?php
}
}
/* {/block 'snippets-consent-manager-confirm-content'} */
/* {block 'snippets-consent-manager-confirm'} */
class Block_167000945660a385ffe57ce1_27509646 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div id="consent-confirm" class="consent-modal">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34381806660a385ffe58764_30084332', 'snippets-consent-manager-confirm-hidden', $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199071530960a385ffe59833_24584120', 'snippets-consent-manager-confirm-content', $this->tplIndex);
?>

		</div>
	<?php
}
}
/* {/block 'snippets-consent-manager-confirm'} */
/* {block 'snippets-consent-manager'} */
class Block_176888742460a385ffe17732_92717871 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-consent-manager' => 
  array (
    0 => 'Block_176888742460a385ffe17732_92717871',
  ),
  'snippets-consent-manager-banner' => 
  array (
    0 => 'Block_183028474860a385ffe1dfa6_32723338',
  ),
  'snippets-consent-manager-banner-icon' => 
  array (
    0 => 'Block_88141521060a385ffe1ea60_36898391',
  ),
  'snippets-consent-manager-banner-body' => 
  array (
    0 => 'Block_177734436860a385ffe1fd46_92177453',
  ),
  'snippets-consent-manager-banner-body-description' => 
  array (
    0 => 'Block_214505908260a385ffe207d1_41437508',
  ),
  'snippets-consent-manager-banner-body-description-title' => 
  array (
    0 => 'Block_160568593060a385ffe21395_09666118',
  ),
  'snippets-consent-manager-banner-body-description-description' => 
  array (
    0 => 'Block_190699117860a385ffe26ef0_12072297',
  ),
  'snippets-consent-manager-banner-body-actions' => 
  array (
    0 => 'Block_142021537360a385ffe2baa1_33963563',
  ),
  'snippets-consent-manager-settings' => 
  array (
    0 => 'Block_41021756860a385ffe31579_56227560',
  ),
  'snippets-consent-manager-settings-close' => 
  array (
    0 => 'Block_203188345460a385ffe321b1_57213677',
  ),
  'snippets-consent-manager-settings-icon' => 
  array (
    0 => 'Block_46563967160a385ffe333c9_64128370',
  ),
  'snippets-consent-manager-settings-title' => 
  array (
    0 => 'Block_133753959360a385ffe345f9_55062105',
  ),
  'snippets-consent-manager-settings-description' => 
  array (
    0 => 'Block_25498362260a385ffe364b7_66898864',
  ),
  'snippets-consent-manager-settings-buttons-top' => 
  array (
    0 => 'Block_49569557060a385ffe38837_80976476',
  ),
  'snippets-consent-manager-settings-hr' => 
  array (
    0 => 'Block_147224793760a385ffe3b431_42975671',
  ),
  'snippets-consent-manager-settings-items' => 
  array (
    0 => 'Block_10422381160a385ffe3c589_29674228',
  ),
  'snippets-consent-manager-settings-items-checkbox' => 
  array (
    0 => 'Block_203965711760a385ffe3f897_09964667',
  ),
  'snippets-consent-manager-settings-items-more-button' => 
  array (
    0 => 'Block_96788531360a385ffe44031_39947306',
  ),
  'snippets-consent-manager-settings-items-help' => 
  array (
    0 => 'Block_18085624260a385ffe46543_11855771',
  ),
  'snippets-consent-manager-settings-items-more-content' => 
  array (
    0 => 'Block_45607057760a385ffe48872_49700766',
  ),
  'snippets-consent-manager-settings-items-hr' => 
  array (
    0 => 'Block_44437833760a385ffe509c5_79300133',
  ),
  'snippets-consent-manager-settings-buttons-bottom' => 
  array (
    0 => 'Block_89256734560a385ffe52842_68282111',
  ),
  'snippets-consent-manager-button' => 
  array (
    0 => 'Block_86321316860a385ffe55d70_99140239',
  ),
  'snippets-consent-manager-confirm' => 
  array (
    0 => 'Block_167000945660a385ffe57ce1_27509646',
  ),
  'snippets-consent-manager-confirm-hidden' => 
  array (
    0 => 'Block_34381806660a385ffe58764_30084332',
  ),
  'snippets-consent-manager-confirm-content' => 
  array (
    0 => 'Block_199071530960a385ffe59833_24584120',
  ),
  'snippets-consent-manager-confirm-close' => 
  array (
    0 => 'Block_64569877960a385ffe5a2b9_18339181',
  ),
  'snippets-consent-manager-confirm-icon' => 
  array (
    0 => 'Block_140320551560a385ffe5b3b3_41438981',
  ),
  'snippets-consent-manager-confirm-title' => 
  array (
    0 => 'Block_25654770260a385ffe5c5a9_45156824',
  ),
  'snippets-consent-manager-confirm-description' => 
  array (
    0 => 'Block_6687081960a385ffe5e3e4_51177494',
  ),
  'snippets-consent-manager-confirm-info' => 
  array (
    0 => 'Block_79459146360a385ffe606d7_46405532',
  ),
  'snippets-consent-manager-confirm-info-more-button' => 
  array (
    0 => 'Block_95902995160a385ffe61162_09465201',
  ),
  'snippets-consent-manager-confirm-info-more-content' => 
  array (
    0 => 'Block_178420128060a385ffe62fd2_51827721',
  ),
  'snippets-consent-manager-confirm-buttons' => 
  array (
    0 => 'Block_63267309160a385ffe67283_64367992',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183028474860a385ffe1dfa6_32723338', 'snippets-consent-manager-banner', $this->tplIndex);
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41021756860a385ffe31579_56227560', 'snippets-consent-manager-settings', $this->tplIndex);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86321316860a385ffe55d70_99140239', 'snippets-consent-manager-button', $this->tplIndex);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167000945660a385ffe57ce1_27509646', 'snippets-consent-manager-confirm', $this->tplIndex);
?>

</div>
<?php
}
}
/* {/block 'snippets-consent-manager'} */
}
