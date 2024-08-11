<?php
class ConfigurationBaseDeDonnees {
    private static array $configurationBaseDeDonnees = array(
        'nomHote' => 'localhost',
        'nomBaseDeDonnees' => 'td',
        'port' => '3306',
        'login' => 'td',
        'motDePasse' => 'password'
    );

    public static function getLogin(): string {
        // L'attribut statique $configurationBaseDeDonnees
        // s'obtient avec la syntaxe ConfigurationBaseDeDonnees::$configurationBaseDeDonnees
        // au lieu de $this->configurationBaseDeDonnees pour un attribut non statique
        return ConfigurationBaseDeDonnees::$configurationBaseDeDonnees['login'];
    }

    public static function getNomHote(): string {
        return ConfigurationBaseDeDonnees::$configurationBaseDeDonnees['nomHote'];
    }

    public static function getPort(): int {
        return intval(ConfigurationBaseDeDonnees::$configurationBaseDeDonnees['port']);
    }

    public static function getNomBaseDeDonnees(): string {
        return ConfigurationBaseDeDonnees::$configurationBaseDeDonnees['nomBaseDeDonnees'];
    }

    public static function getPassword(): string {
        return ConfigurationBaseDeDonnees::$configurationBaseDeDonnees['motDePasse'];
    }
}