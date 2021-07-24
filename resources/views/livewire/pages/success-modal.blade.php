<div style="position:fixed; top:20%; left:30%; width: 40%; padding:20px; z-index:1000;text-align:center;background:white;" x-data="{ open: @entangle('show_modal') }" x-show="open" @click.away="open = false">
    <h3>Данные обновлены!</h3>
    <br>
    <input value="Закрыть" class="btn btn-success" type="button" @click="open = false">
</div>
