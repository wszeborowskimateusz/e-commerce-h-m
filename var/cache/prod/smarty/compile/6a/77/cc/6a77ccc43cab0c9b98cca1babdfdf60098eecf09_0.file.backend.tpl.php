<?php
/* Smarty version 3.1.32, created on 2018-10-07 12:52:12
  from 'C:\xampp\htdocs\modules\revws\views\templates\admin\backend.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb9e55c5ea129_43142670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a77ccc43cab0c9b98cca1babdfdf60098eecf09' => 
    array (
      0 => 'C:\\xampp\\htdocs\\modules\\revws\\views\\templates\\admin\\backend.tpl',
      1 => 1538909523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb9e55c5ea129_43142670 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="revws-app">
  Please wait...
</div>
<?php echo '<script'; ?>
>
  (function(){
    var started = false;
    var attempt = 0;
    function startRevwsApp() {
      if (started) {
        return;
      }
      if (window.startRevws) {
        started = true;
        startRevws(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['revws']->value ));?>
);
      } else {
        attempt++;
        console.log('['+attempt+'] startRevws not loaded yet, waiting...');
        setTimeout(startRevwsApp, 500);
      }
    }
    startRevwsApp();
  })();
<?php echo '</script'; ?>
>
<?php }
}
