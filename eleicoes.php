<br>
<?php
    echo'<div style="text-align:center">
    <div class="bigbox">
        <h1>Log-in na plataforma das eleições</h1>
        <form action="?page=votar" method="POST">
            e-VID C <input type="text" name="id" placeholder="ID de eleitor"><br>
            Celular <input type="text" name="num" placeholder="Sem DDI, DDD e hífen"><br><br>
            <input type="submit" value="Logar" id="log">
        </form>
    </div>
    </div>';
?>
<br>