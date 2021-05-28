<!-- MOBILE -->
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width initial-scale=1" charset="utf-8">
    <title>Portal Cachorreira</title>
    <link rel="stylesheet" href="mob/mobstl.css">
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>
<body>
    <div class="menu">
        <img id="imagem" usemap="#clickable"src="brason.png" height="50px" width="auto" onlclick="?page = home">
        <a style="float:left;padding: 8px;margin-top:0px;border-right: 5px;border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;" href="?page=home">Império do<br>Cachorreira</a>
        <map name="clickable">
            <area shape="rect" coords="0,0,404,825" href="?page=home">
        </map>
        <button id="plusieur" onclick="showinfo()">+</button>
    </div>
    <div id="nouveau_menu">
        <table>
            <tr>
                <td><a onclick="window.scrollBy(0, 50);">Notícias</a></td>
            </tr>
            <tr>
                <td><a onclick="window.scrollBy(0, 200);">Eleições</a></td>
            </tr>
        </table>
    </div>
<script>
var now_status = false;
function showinfo(){
    if(!(now_status)){
        document.getElementById("nouveau_menu").style.display = "inherit";
        document.getElementById("plusieur").innerHTML = "-";
        now_status = true;
    }
    else{
        document.getElementById("nouveau_menu").style.display = "none";
        document.getElementById("plusieur").innerHTML = "+";
        now_status = false;
    }
}
</script>