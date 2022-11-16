<?php

class Database
{
    // A compléter

    /**
     * Constructeur de la classe Database
     * @param string $host Le host de la base de données
     * @param string $user L'utilisateur de la base de données
     * @param string $dbName Le nom de la base de données
     * @param string $pass Le mot de passe de la base de données
     */
    public function __construct(string $host, string $user, string $dbName, string $pass)
    {
        // A compléter
    }

    /**
     * Connexion à la base de données à l'aide de PDO
     * @return PDO|PDOException
     */
    public function connect (): PDO|PDOException
    {
        // A compléter
        // Tip : utiliser un try...catch pour renvoyer des erreurs si la connexion n'est pas établie
    }

    /**
     * Requête préparée
     * @param string $query La requête SQL
     * @param array $array Les paramètres SQL
     * @return bool|PDOStatement
     */
    public function prepReq(string $query, array $array = []): bool|PDOStatement
    {
        // A compléter
        // Tip : voir les requêtes préparées avec prepare() et execute()
    }

    /**
     * Récupère les données
     * @return bool|array
     */
    public function fetchData(): bool|array
    {
        // A compléter
        // Tip voir fetch/fetchAll
    }
}