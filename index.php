<!DOCTYPE HTML>
<html>

<head>
    <title>LB2</title>
    <script src="localStorage.js">
    </script>
</head>
<form method="GET" action="championship_table.php">
Получить таблицу чемпионата лиги <select name="league" id="league" onchange="leagueFunction()">
            <?php
                include 'connect.php';
                $table = $game->distinct("league");
                foreach ($table as $document) {
                    echo "<option>";
                    echo($document);
                    echo "</option>";
                }
                echo '</select>';
            ?>
    </select>
    <button> ОК </button>
</form>

<form method="GET" action="player.php">
<p>Получить список футболистов указанной команды <select name="player" id="player" onchange="playerFunction()">
            <?php
                include 'connect.php';
                $table = $team->distinct("title");
                foreach ($table as $document) {
                    echo "<option>";
                    echo($document);
                    echo "</option>";
                }
                echo '</select>';
            ?>
    </select>
    <button> ОК </button></p>
</form>
<form method="GET" action="game.php">
<p>Получить список игр, в которых участвовала выбранная команда <select name="team" id="team" onchange="teamFunction()">
            <?php
                include 'connect.php';
                $table = $game->distinct("teams");
                foreach ($table as $document) {
                    echo "<option>";
                    echo($document);
                    echo "</option>";
                }
                echo '</select>';
            ?>
    </select>
    <button> ОК </button> </p>
</form>
<p> Сохраненные результаты (<b>localStorage</b>): </p>
<div id="res"></div>
</body>
</html>