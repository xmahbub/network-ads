<?php /* Smarty version 2.6.18, created on 2023-10-09 21:24:33
         compiled from /Applications/XAMPP/xamppfiles/htdocs/revive/lib/templates/admin/form/custom-campaign-remaining-impr.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', '/Applications/XAMPP/xamppfiles/htdocs/revive/lib/templates/admin/form/custom-campaign-remaining-impr.html', 15, false),)), $this); ?>

<span id="remainingImpressionsSection">
<span id='impressions_remaining_span' class="hide"><?php echo OA_Admin_Template::_function_t(array('str' => 'ImpressionsRemaining'), $this);?>
:<span id='impressions_remaining_count'><?php echo $this->_tpl_vars['_e']['vars']['impressionsRemaining']; ?>
</span></span><br/>

<?php if ($this->_tpl_vars['adDirectEnabled']): ?>
	<span id="openadsRemainingImpressions"><?php echo OA_Admin_Template::_function_t(array('str' => 'OpenxImpressionsRemaining'), $this);?>
: <span id='openadsRemainingImpressionsCount'>3000 *REAL DATA GOES HERE*</span>
	    <span class="link hide" help="help-openads-remaining-impressions" id="openadsRemainingImpressionsHelpLink"><img style="border: none; position: relative; top:5px;" src="<?php echo $this->_tpl_vars['assetPath']; ?>
/images/help-book.gif" /></span>
	</span>
	<div class="hide" id="help-openads-remaining-impressions" style="height: auto; width: 290px;">
	    <?php echo OA_Admin_Template::_function_t(array('str' => 'OpenxImpressionsRemainingHelp'), $this);?>

	</div>
<?php endif; ?>
</span>