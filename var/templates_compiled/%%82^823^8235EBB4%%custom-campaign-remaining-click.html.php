<?php /* Smarty version 2.6.18, created on 2023-10-09 21:24:33
         compiled from /Applications/XAMPP/xamppfiles/htdocs/revive/lib/templates/admin/form/custom-campaign-remaining-click.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', '/Applications/XAMPP/xamppfiles/htdocs/revive/lib/templates/admin/form/custom-campaign-remaining-click.html', 15, false),)), $this); ?>

<span id="remainingClicksSection">
     <span id='clicks_remaining_span' class="hide"><?php echo OA_Admin_Template::_function_t(array('str' => 'ClicksRemaining'), $this);?>
:<span id='clicks_remaining_count'><?php echo $this->_tpl_vars['_e']['vars']['clicksRemaining']; ?>
</span></span><br/>
<?php if ($this->_tpl_vars['adDirectEnabled']): ?>
     <span id="openadsRemainingClicks"><?php echo OA_Admin_Template::_function_t(array('str' => 'OpenxClicksRemaining'), $this);?>
: <span id='openadsRemainingClicksCount'>600 *REAL DATA GOES HERE*</span>
       <span class="link hide" help="help-openads-remaining-clicks" id="openadsRemainingClicksHelpLink"><img style="border: none; position: relative; top:5px;" src="<?php echo $this->_tpl_vars['assetPath']; ?>
/images/help-book.gif" /></span>
     </span>
    <div class="hide" id="help-openads-remaining-clicks" style="height: auto; width: 290px;">
     <?php echo OA_Admin_Template::_function_t(array('str' => 'OpenxClicksRemainingHelp'), $this);?>

    </div>
<?php endif; ?>
</span>