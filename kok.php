<?php
// Многомерный массив с информацией о футбольных командах (название, тренер, игроки)
$teams = array(
    array(
        "название" => "Локомотив",
        "тренер" => "Иванов",
        "игроки" => array(
            array("Имя" => "Алексей", "Возраст" => 22),
            array("Имя" => "Дмитрий", "Возраст" => 24),
            array("Имя" => "Егор", "Возраст" => 20)
        )
    ),
    array(
        "название" => "Спартак",
        "тренер" => "Петров",
        "игроки" => array(
            array("Имя" => "Иван", "Возраст" => 25),
            array("Имя" => "Максим", "Возраст" => 21),
            array("Имя" => "Николай", "Возраст" => 23)
        )
    ),
    array(
        "название" => "ЦСКА",
        "тренер" => "Сидоров",
        "игроки" => array(
            array("Имя" => "Павел", "Возраст" => 23),
            array("Имя" => "Сергей", "Возраст" => 22),
            array("Имя" => "Андрей", "Возраст" => 21)
        )
    )
);

// Инициализируем переменные для хранения информации о команде с самым молодым игроком
$youngestPlayerTeam = array();
$minAge = PHP_INT_MAX;

// Проходим по массиву и находим команду с самым молодым игроком
foreach ($teams as $team) {
    foreach ($team["игроки"] as $player) {
        if ($player["Возраст"] < $minAge) {
            $minAge = $player["Возраст"];
            $youngestPlayerTeam = $team;
        }
    }
}

// Выводим информацию о команде с самым молодым игроком
echo "Команда с самым молодым игроком: {$youngestPlayerTeam['название']}\n";
echo "Тренер: {$youngestPlayerTeam['тренер']}\n";
echo "Игроки:\n";
foreach ($youngestPlayerTeam["игроки"] as $player) {
    echo "- {$player['Имя']}, Возраст: {$player['Возраст']}\n";
}
?>