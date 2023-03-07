{include file='header.tpl'}
<div>
    <form method="post" action="enviar" >
    <input type="text" name="nombre" placeholder="nombre">
    <input type="text" name="comentario" placeholder="comentario">
    <input type="submit" value="enviar">
</div>
<div>
    {foreach from=$comentarios item=$comentario }
        <div>
            <div>
                <div>
                {$comentario->nombre}
                </div>
                <div>
                {$comentario->fecha}
                </div>
            </div>
            <div>
            {$comentario->comentario}
            </div>
        </div>
    {/foreach}
</div>

{include file='footer.tpl'}