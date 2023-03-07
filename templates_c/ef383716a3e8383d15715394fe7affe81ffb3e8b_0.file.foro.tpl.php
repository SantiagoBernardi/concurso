<?php
/* Smarty version 4.2.1, created on 2023-03-07 01:16:30
  from 'C:\xampp\htdocs\concurso\templates\foro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6406825e0c12e1_45549636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef383716a3e8383d15715394fe7affe81ffb3e8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\concurso\\templates\\foro.tpl',
      1 => 1678148116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6406825e0c12e1_45549636 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
    <form method="post" action="enviar" >
    <input type="text" name="nombre" placeholder="nombre">
    <input type="text" name="comentario" placeholder="comentario">
    <input type="submit" value="enviar">
</div>
<div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comentarios']->value, 'comentario');
$_smarty_tpl->tpl_vars['comentario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->value) {
$_smarty_tpl->tpl_vars['comentario']->do_else = false;
?>
        <div>
            <div>
                <div>
                <?php echo $_smarty_tpl->tpl_vars['comentario']->value->nombre;?>

                </div>
                <div>
                <?php echo $_smarty_tpl->tpl_vars['comentario']->value->fecha;?>

                </div>
            </div>
            <div>
            <?php echo $_smarty_tpl->tpl_vars['comentario']->value->comentario;?>

            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
