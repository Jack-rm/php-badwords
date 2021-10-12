<?php

    $article = "Abdulrazak Gurnah è il nuovo Nobel per la letteratura. L'Accademia svedese ha scelto lo scrittore nato nell'isola di Zanzibar (Tanzania), nel 1948, e arrivato in Inghilterra come rifugiato alla fine degli anni Sessanta. Abdulrazak Gurnah  ha insegnato letteratura post coloniale e inglese all'università del Kent, Canterbury. Nelle motivazioni si sottolinea 'la sua intransigente e compassionevole penetrazione degli effetti del colonialismo e del destino del rifugiato nel divario tra culture e continenti'. La scelta del Nobel a uno scrittore africano cade dopo quella della poetessa americana Louise Gluck che lo aveva vinto nel 2020.
    Dopo che Zanzibar nel 1963 venne sconvolta da una rivoluzione che portò alla persecuzione dei cittadini di origine araba Gurnah che apparteneva ai gruppi etnici perseguitati fu costretto ad allontanarsi dal suo paese.
    Aveva 18 anni quando gli fu concesso di tornare a Zanzibar. In quell'occasione riuscì a vedere il padre prima che morisse. Dopo la Tanzania nel 1968 andò in Inghilterra. Tra i suoi autori di riferimento Wole Soyinka, Ngugi wa Thiong'o e Salman Rushdie (sul quale nel 2007 ha scritto il saggio The Cambridge Companion to Salman Rushdie).
    Scrive l'Accademia: 'Gurnah ha pubblicato dieci romanzi e molte raccolte di racconti. In tutti i suoi lavori ricorre il tema dei rifugiati. Ha iniziato a scrivere a 21 anni mentre era in esilio in Inghilterra e nonostante il Swahili fosse la sua prima lingua, presto l'inglese è divento la sua scelta letteraria. La lingua letteraria della tradizione inglese da Shakespeare a V.S. Naipaul ha molto influenzato il suo lavoro. Un'opera nella quale lo scrittore sa però rompere la convenzione mettendo fine alla prospettiva coloniale valorizzando quella delle popolazioni indigene'.
    Tra i suoi romanzi più noti Desertion (2005) tradotto in Italia l'anno dopo da Garzanti con il titolo Il disertore, una storia che narra l'incontro tra un inglese, studioso dell'oriente, e un africano che lo salva nel deserto. Il suo romanzo di esordio è Memory of Departure del 1987, ambientato in Africa racconta un'insurrezione fallita. In Italia sono stati pubblicati da Garzanti tre suoi romanzi: oltre a Il disertore, Paradiso (2007) e Sulla riva del mare (2002). La casa editrice milanese sta ora pensando alla loro ristampa.
    Da quando il Nobel per la letteratura è stato istituito nel 1901, Gurnah è il quinto autore africano a vincerlo, dopo Wole Soyinka (Nigeria, 1986), Naguib Mahfouz (Egitto, 1988), Nadine Gordimer (Sudafrica, 1991) e John Maxwell Coetzee (Sudafrica, 2003).
    Appena contattato al telefono poco prima dell'annuncio ufficiale Gurnah era stupito: 'Ho pensato che fosse uno scherzo', ha detto. 'È stata una tale sorpresa che ho aspettato fino a quando l'ho sentito annunciare prima di poterci credere'. Le prime dichiarazioni sono state sul dramma dei migranti: 'Sono arrivato in Inghilterra quando espressioni come 'richiedente asilo' non erano le stesse: oggi sempre più persone stanno lottando e scappando dagli stati terroristici. Molte di queste persone fuggono per necessità'."
    

?>

<html>
    <h2>Abdulrazak Gurnah è il Premio Nobel per la letteratura 2021</h2>
    <p>
        <?php
            echo $article;
        ?>
    </p>
    <ul>
        <li>
            <h4>Questo articolo contiene
                <?php
                    echo strlen($article);
                ?>
                caratteri.
            </h4>
        </li>
    </ul>
    <hr>
    <h1>
       " <?php echo $_GET["badword"]; ?> " è una parola proibita!
    </h1>
    <hr>
    <h2>Abdulrazak Gurnah è il Premio Nobel per la letteratura 2021</h2>
    <p>
        <?php
            echo str_replace($_GET["badword"],"***",$article);
        ?>
    </p>
    <ul>
        <li>
            <h4>
                Questo articolo contiene
                <?php
                    echo strlen($article);
                ?>
                caratteri.
            </h4>
        </li>
    </ul>
</html>