<?php



// Function de sauvegarde pour la table users
function saveUser(PDO $connection, array $data): void
{
    $query = $connection->prepare
    ('INSERT INTO users (nom,mail) VALUES (?,?)');

    $query->execute([
        $data['nom'],
        $data['mail']
    ]);
}


// Function de sauvegarde pour la table content
function saveContent(PDO $connection, array $data): void
{
    $query = $connection->prepare
    ('INSERT INTO content (theme,jobs,message,idUser) VALUES (?,?,?,?)');
    $idU=$connection->lastInsertId();
    $query->execute([
        $data['themes'],
        $data['choose_job'],
        $data['message'],
        $idU
    ]);
}


