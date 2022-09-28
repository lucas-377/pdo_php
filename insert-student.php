<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/database.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$student = new Student(null, 'Lucas Santana', new DateTimeImmutable('1992-11-01'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}')";

$pdo->exec($sqlInsert);
