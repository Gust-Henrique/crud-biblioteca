<?php
/* CREATE DATABASE biblioteca CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE biblioteca;

CREATE TABLE livros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    autor VARCHAR(255) NOT NULL,
    ano_publicacao INT NOT NULL,
    genero VARCHAR(100) NOT NULL,
    quantidade INT NOT NULL
);*/ 

$servidor = 'localhost';
$banco = 'biblioteca';
$usuario = 'root';
$senha = '';

try {
    $conexao = new PDO("mysql:host=$servidor;dbname=$banco;charset=utf8", $usuario, $senha);
} catch (PDOException $erro) {
    die("Erro ao conectar: " . $erro->getMessage());
}
?>