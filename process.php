<?php
    if($_POST['candidatos1']){
        $user = $_POST['id'].':';
        $file = fopen('votos.txt','a');
        fwrite($file,$user);
        fclose($file);
        $str = date("d/m/Y,H:i:s").' Eleições Cachorreira 2019'.$_POST['candidatos1'].','.$_POST['candidatos2'].','.$_POST['candidatos3']."\n";
        $myfile = file_put_contents('votos.txt', $str.PHP_EOL , FILE_APPEND | LOCK_EX);
        echo("<p style='color:white;'>Obrigado por votar! Seu voto foi cadastrado!</p>");
        echo "<br><button style='background-color: cornflowerblue;padding: 15px;font-size: larger;'
                onclick='history.go(-2)'>Voltar</button>";
    }
    else{
    $myfile = file_put_contents('votos.txt', $str.PHP_EOL , FILE_APPEND | LOCK_EX);
    $ids = file("ids.txt");
    $dados = [];
    $j = 0;
    foreach($ids as $line){
        $user = [];
        $user[0] = substr($line, 0, 4);
        $user[1] = rtrim(substr($line,5,12));
        $dados[$j] = $user;
        $j++;
    }
    $passer = false;
    foreach($dados as $user){
        if(($_POST['id'] == $user[0])&&(($_POST['num'] == $user[1]))){
            $passer = true;
        }
    }
        if($passer){
            $now = file("votos.txt");
            $votes = [];
            $i = 0;
            foreach($now as $line){
                $user = [];
                $votes[$i] = substr($line, 0, 4);
                $i++;
            }
            $a_vote = false;
            foreach($votes as $vote){
                if($_POST['id'] == $vote){
                    $a_vote = true;
                }
            }
            if($a_vote){
                echo "<br><p style='color:white'>Você já votou e não pode votar mais :(</p><br>
                <button style='background-color: cornflowerblue;padding: 15px;font-size: larger;'
                onclick='history.go(-1)'>Voltar</button>";
            }
            else{
                if(date('d') == '15'){
                    $str = $_POST['id'].';'.date("d/m/Y,H:i:s");
                    $myfile = file_put_contents('votos.txt', $str.PHP_EOL , FILE_APPEND | LOCK_EX);
                    echo "<br><p>Votos repetidos contarão como apenas um voto para o candidato que estiver repetido!</p>
                    <br><div style='padding:10px; background-color:grey; border-radius:10px; text-align:center'>
                    <form action='?page=votar' method='POST'>
                        <p>Primeiro Voto:</p>
                        <select name='candidatos1'>
                            <option value='Betman' class='Avante'>Pedro Betman</option>
                            <option value='Thaago' class='Conservador'>Thiago 'Thaago' Landim</option>
                            <option value='Ed' class='Independente'>Vinícius 'Ed' Eduardo</option>
                            <option value='Carlos' class='Avante'>Carlos César</option>
                            <option value='Eduardo' class='Conservador'>Eduardo José</option>
                            <option value='Johnnys' class='Johnnys'>João 'Johnnys' Freire</option>
                            <option value='Carlão' class='Avante'>Carlos 'Carlão' Eduardo</option>
                            <option value='Thalles' class='Conservador'>Thalles Ranieri</option>
                            <option value='---'>Branco</option>
                        </select>
                        <br>
                        <p>Segundo Voto:</p>
                        <select name='candidatos2'>
                            <option value='Betman' class='Avante'>Pedro Betman</option>
                            <option value='Thaago' class='Conservador'>Thiago 'Thaago' Landim</option>
                            <option value='Ed' class='Independente'>Vinícius 'Ed' Eduardo</option>
                            <option value='Carlos' class='Avante'>Carlos César</option>
                            <option value='Eduardo' class='Conservador'>Eduardo José</option>
                            <option value='Johnnys' class='Johnnys'>João 'Johnnys' Freire</option>
                            <option value='Carlão' class='Avante'>Carlos 'Carlão' Eduardo</option>
                            <option value='Thalles' class='Conservador'>Thalles Ranieri</option>
                            <option value='---'>Branco</option>
                        </select>
                        <br>
                        <p>Terceiro Voto:</p>
                        <select name='candidatos3'>
                            <option value='Betman' class='Avante'>Pedro Betman</option>
                            <option value='Thaago' class='Conservador'>Thiago 'Thaago' Landim</option>
                            <option value='Ed' class='Independente'>Vinícius 'Ed' Eduardo</option>
                            <option value='Carlos' class='Avante'>Carlos César</option>
                            <option value='Eduardo' class='Conservador'>Eduardo José</option>
                            <option value='Johnnys' class='Johnnys'>João 'Johnnys' Freire</option>
                            <option value='Carlão' class='Avante'>Carlos 'Carlão' Eduardo</option>
                            <option value='Thalles' class='Conservador'>Thalles Ranieri</option>
                            <option value='---'>Branco</option>
                        </select>
                        <br><br>
                        <input style='background-color: cornflowerblue;padding: 15px;font-size: larger;' type='submit'>
                    </form>
                    </div>";
                }else{
                    echo "<p style='color: white'>As eleições serão no dia 15 de dezembro</p><br>";
                }
            }
        }
    }
?>
<style>
    .Avante{
        color:#FFFFFF;
        background-color:#8B008B;
    }
    .Conservador{
        color:#FFFF00;
        background-color:#2E8B57;
    }
    .Johnnys{
        color:#FFFFFF;
        background-color:#000000;
    }
    .Independente{
        color:#000000;
        background-color: #FFFFFF;
    }
</style>