
<?php
$name="Noa Kolombo";
$linkPHP="https://hr.wikipedia.org/wiki/PHP";
$previousPage="vjezba2-1.php";
?>
<!DOCTYPE html>
<html lang="hr">
    <head> 
        <meta  name="viewport" content="width=device-width initial-scale=1" >
        <title>Druga vjezba 2 zadatak</title>
        <style>
            :root{
                --bg:#0f172a; 
                --card:#ffffff; 
                --text:#111827; 
                --muted:#6b7280; 
                --accent:#2563eb; 
            }
            *{
                font-family:system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
                box-sizing: border-box;
                font-size: 16px;
                line-height: 1.6rem;
            }
            .wrap{
                max-width: 720px;
                margin: 48px auto;
                background: var(--card);
                padding: 32px;
                border-radius: 16px;
                box-shadow: 0 10px 30px rgba(0,0,0,.08);
            }
            body{
                margin: 0;
                background: var(--bg);
                color: var(--text);
            }
            body h1{
                margin-top: 0;
                margin-bottom: 14px;
            }
            body p{
                margin-bottom: 14px;
            }
            body footer{
                margin-top: 12px;
                font-family: 0.9rem;
                opacity: 0.6;
            }
            .linkWrapper{
                display: flex;
                column-gap: 12px;

            }
            .btn{

                display: inline-block;
                padding: 10px 16px;
                border: 1px solid var(--accent);
                border-radius: 10px;
                text-decoration: none;
                text-decoration: none;
                color:var(--accent)
            }
            .btn:hover{
                background:var(--accent);
                color: #fff;
            }
            .btn:focus-visible{
                outline:3px solid var(--accent);
            }
            .btn:active{
                opacity: 0.7;
            }

            @media screen and (max-width: 720px) {
                .wrap{
                    width:100%;
                }
                .linkWrapper{
                    flex-direction: column;
                }
            
            }


        </style>
    </head>
    <body>
        <main class="wrap">
            <h1>PHP dokument</h1>
            <p>Ovu je izradio/la <strong><?php echo " " . $name?></strong>.</p>
            <p>Ova stranica nastavlja vjezbu2-1 i sluzi za vjezbanje varijabli i ispisa osnovnog CSS-a</p>
            <div class="linkWrapper">
            <a target="_blank" class="btn" href=<?php echo $linkPHP ?>><strong>Saznaj vise o PHP-u</strong></a>
            <a target="_blank" class="btn" href=<?php echo $previousPage ?>><strong>Natrag na proslu vjezbu</strong></a>
            </div>
            <footer><?php echo Date("Y") ?> - Demo za PHP </footer>

        </main>
    </body>
</html>
<!--vjezba2-2.php-->