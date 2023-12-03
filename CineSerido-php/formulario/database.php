<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    header('Location:/');

} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    function connection()
    {
        return new SQLite3('database_cineserido.db');
    }

    connection()->exec("CREATE TABLE IF NOT EXISTS respostas(
    id INTEGER PRIMARY KEY NOT NULL,
    email VARCHAR(50),
    resposta1 VARCHAR(255),
    resposta2 VARCHAR(255),
    resposta3 VARCHAR(255),
    resposta4 VARCHAR(255),
    resposta5 VARCHAR(255),
    resposta6 VARCHAR(255),
    resposta7 VARCHAR(255),
    resposta8 VARCHAR(255)
)");

    connection()->exec("INSERT INTO respostas(
    email,
    resposta1,
    resposta2,
    resposta3,
    resposta4,
    resposta5,
    resposta6,
    resposta7,
    resposta8
    ) VALUES (
        '".$_POST['email']."',  
        '".$_POST['resposta1']."',
        '".$_POST['resposta2']."',
        '".$_POST['resposta3']."',
        '".$_POST['resposta4']."',
        '".$_POST['resposta5']."',
        '".$_POST['resposta6']."',
        '".$_POST['resposta7']."',
        '".$_POST['resposta8']."'
        )");

    header('Location:/');

    // formulario/database.php
}
