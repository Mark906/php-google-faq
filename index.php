<?php
    $faq = [
        [
            'domanda' => 'provadomanda',
            'risposta' => 'provarisposta'
        ],
        [
            'domanda' => 'provadomanda',
            'risposta' => 'provarisposta'
        ],
        [
            'domanda' => 'provadomanda',
            'risposta' => 'provarisposta'
        ],
    ]
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <ul>
            <?php for ($i=0; $i < count($faq); $i++) { ?>
                <li>
                    <h1>
                        <?php
                        echo $faq[$i]['domanda'];
                        ?>
                    </h1>
                    <p>
                        <?php
                        echo $faq[$i]['risposta'];
                        ?>
                    </p>
                </li>
                <?php
            }
            ?>
        </ul>

    </body>
</html>
