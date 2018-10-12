<?php
/* Smarty version 3.1.32, created on 2018-10-12 22:18:23
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc1018f2667b4_56332608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1539099791,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5bc1018f2667b4_56332608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?>
<div id="block_myaccount_infos" class="col-md-2 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://127.0.0.1/prestashop/moje-konto" rel="nofollow">
      Twoje konto
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Twoje konto</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://127.0.0.1/prestashop/dane-osobiste" title="Dane osobowe" rel="nofollow">
            Dane osobowe
          </a>
        </li>
            <li>
          <a href="http://127.0.0.1/prestashop/historia-zamowien" title="Zamówienia" rel="nofollow">
            Zamówienia
          </a>
        </li>
            <li>
          <a href="http://127.0.0.1/prestashop/potwierdzenie-zwrotu" title="Moje pokwitowania - korekty płatności" rel="nofollow">
            Moje pokwitowania - korekty płatności
          </a>
        </li>
            <li>
          <a href="http://127.0.0.1/prestashop/adresy" title="Adresy" rel="nofollow">
            Adresy
          </a>
        </li>
        <li>
  <a href="//127.0.0.1/prestashop/module/ps_emailalerts/account" title="Moje powiadomienia">
    Moje powiadomienia
  </a>
</li>

	</ul>
</div>
<?php }
}
