<?php /* Smarty version 2.6.18, created on 2023-10-09 21:06:22
         compiled from options/password.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'options/password.html', 13, false),)), $this); ?>
<tr>
    <td>&nbsp;</td>
    <td id='cell_<?php echo $this->_tpl_vars['aItem']['name']; ?>
' class='<?php if ($this->_tpl_vars['aItem']['disabled']): ?>celldisabled<?php else: ?>cellenabled<?php endif; ?>' valign='top'><?php echo $this->_tpl_vars['aItem']['text']; ?>

    <?php if ($this->_tpl_vars['aItem']['req']): ?><span class="required">*</span><?php endif; ?>
    </td>
    <td width='100%' valign='top'>
        <?php if (! empty ( $this->_tpl_vars['aItem']['strengthIndicator'] )): ?>
        <script src="assets/js/zxcvbn.js"></script>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['hidePassword']): ?>
        <!-- password is set to password for security reasons -->
        <?php endif; ?>
        <input onKeyPress='phpAds_refreshEnabled()' onBlur='max_formValidateElement(this)' class='flat <?php echo $this->_tpl_vars['aItem']['class']; ?>
' type='password' name='<?php echo $this->_tpl_vars['aItem']['name']; ?>
' id='<?php echo $this->_tpl_vars['aItem']['name']; ?>
' <?php if ($this->_tpl_vars['aItem']['disabled']): ?>disabled='disabled'<?php endif; ?> value="<?php echo ((is_array($_tmp=$this->_tpl_vars['aItem']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size='<?php echo $this->_tpl_vars['aItem']['size']; ?>
' tabindex='<?php echo $this->_tpl_vars['aItem']['tabindex']++; ?>
' <?php if ($this->_tpl_vars['aItem']['autocomplete']): ?>autocomplete="<?php echo $this->_tpl_vars['aItem']['autocomplete']; ?>
"<?php endif; ?>>
    </td>
    <td><?php echo $this->_tpl_vars['this']->_showPadLock($this->_tpl_vars['aItem']); ?>
</td>
</tr>