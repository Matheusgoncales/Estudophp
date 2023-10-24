<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 17 Country API</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@800&family=Nunito+Sans:opsz,wght@6..12,300;6..12,600;6..12,800&display=swap" rel="stylesheet">
</head>
<header>
    <div id="title">
        <h2 class="title"> Where in the Worlds?</h2>
        </a>
    </div>
    <div id="theme"><input type="button" value="Dark Mode"></div>
</header>

<body>

    <div class="parent">
        <div class="filters">
            <div class="search">
                <input type="search" name="search" id="search" placeholder="Search for a country...">
            </div>
            <div class="filterregion">
                <div id="textfilter">
                    <p class="textfilter">Filter by region</p>
                </div>
                <button class="btnfilter">></button>
            </div>
            <div class="filterregioncard" style="display: none;">
                <p class="filterp" id="africa">Africa</p>
                <p class="filterp" id="america">America</p>
                <p class="filterp" id="asia">Asia</p>
                <p class="filterp" id="europe">Europe</p>
                <p class="filterp" id="oceania">Oceania</p>
            </div>
        </div>
        <div id="countrys">

            <?php
            $url = json_decode(file_get_contents("https://restcountries.com/v3.1/all"), true);

            $conta = 0;
            foreach ($url as $numpais) {
                //acessar nomes oficiais do pais
                $nome = $numpais["name"];
                $official = $nome["official"];
                //fim do nome
                //populacao
                $population = $numpais["population"];
                //fim populacao
                $region = $numpais["region"];
                $flags = $numpais["flags"];
                $flag = $flags["png"];
                $capitalarray = isset($numpais["capital"]) ? $numpais["capital"] : "Não possui capital";
                $capital = $capitalarray[0];
                $id = $numpais["cca2"];



            ?>
                <div class="country" id=<?= $id ?>>
                    <div class="flag"><img class="flag" src=<?= $flag ?>></div>
                    <div class="info">
                        <div class="infocountryp" id="name"><?= $official ?></div>
                        <div class="infocountryp" id="population">Population:<p class="population"><?= $population ?></p>
                        </div>
                        <div class="infocountryp" id="region">Region:<p class="region"><?= $region ?></p>
                        </div>
                        <div class="infocountryp" id="capital">Capital: <p class="capital"><?= $capital ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
        <div id="countrys2">
            <div class="container">
                <div id="back"><button class="back">back</button></div>
                <div class="infocountrys">
                    
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>