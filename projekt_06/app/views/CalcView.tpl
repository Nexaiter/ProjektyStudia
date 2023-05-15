{extends file="main.tpl"}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>   

<h2> Kalkulator delty </h2>

<form action="{$conf->action_url}calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">

Proszę wpisać wartości a, b, c do obliczenia delty: <br />
    <fieldset>
    <label for="id_a">Liczba a:</label>
    <input id="id_a" type="text" name="a" placeholder="wartość a" value="{$form->a}" /><br />

    <label for="id_b">Liczba b:</label>
    <input id="id_b" type="text" name="b" placeholder="wartość b" value="{$form->b}" /><br />
    
    <label for="id_c">Liczba c:</label>
    <input id="id_c" type="text" name="c" placeholder="wartość c" value="{$form->c}" /><br />
    
    </fieldset>
    <button type="submit" class="pure-button pure-button-primary">Oblicz deltę</button>
</form>

{include file='messages.tpl'}

{if isset($res->delta)}
<div class="messages inf">
	Delta: {$res->delta}
</div>
{/if}

{if isset($res->delta)}
<div class="messages inf">
    1 miejsce zerowe: {$res->x1}
</div>
{/if}

{if isset($res->delta)}
<div class="messages inf">
    1 miejsce zerowe: {$res->x1}
    2 miejsce zerowe: {$res->x2}
</div>
{/if}
    
{/block}