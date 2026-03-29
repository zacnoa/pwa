<?php

$a=isset($_GET["a"]) && is_numeric($_GET["a"]) ? (float)$_GET["a"] : "";
$b=isset($_GET["b"]) && is_numeric($_GET["b"]) ? (float)$_GET["b"] : "";


?>
<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Aritmeticke operacije">
    </head>
    <body>
        <main style="width:720px; margin:48px auto">
            <form method="get" action="vjezba2-4.php">
                <fieldset style="display:flex; flex-direction:column; row-gap: 10px">
                    <label>Vrijednost a:<input name="a" type="text" value="<?php echo $a ?>" ></label>
                    <label>Vrijednost b:<input name="b" type="text" value="<?php echo $b ?>" ></label>
                </fieldset>
                <button type="submit" >Posalji</button>
            </form>
            <?php if($a !== "" && $b !== ""): ?>
                <p>Rezultat: <?php echo ($a*3 - $b) / 2 ?></p>
            <?php elseif($a !== "" || $b !== ""): ?>
                <p style="color:red">Unesite valjane brojeve!</p>
            <?php endif; ?>
        </main>
    </body>
</html>