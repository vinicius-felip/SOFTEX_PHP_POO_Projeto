<?php

namespace App\session;

class Login
{

    /**
     * Método que inicia a sessão na pagina
     *
     */
    public static function iniciarSession()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    /**
     * Metodo que cria a $_SESSION do usuário
     * @param  string $location
     * @param  string $user
     * @param  string $dados
     * 
     */
    public static function getDados($user, $dados)
    {
        self::iniciarSession();

        if (!isset($_SESSION['usuario'][$user])) {
            $_SESSION['usuario'][$user] = array();
        }

        $_SESSION['usuario'][$user] =  array_merge($_SESSION['usuario'][$user], $dados);
    }

    
    /**
     * Metodo que deleta dados da $_SESSION do usuário
     *
     * @param  string $user
     * @param  array $dados
     * @return void
     */
    public static function delDados($user, $dados)
    {
        foreach ($dados as $key) {
            if (isset($_SESSION['usuario'][$user][$key])) {
                unset($_SESSION['usuario'][$user][$key]);
            }
        }
    }
    /**
     * Método que finaliza a $_SESSION do usuario
     *
     */
    public static function desautenticar()
    {
        self::iniciarSession();

        unset($_SESSION['usuario']);
        header('location: entrar.php');
        exit;
    }

    /**
     * Método que verifica se o usuário está logado
     *
     * @return boolean
     */
    public static function validarLogin()
    {
        self::iniciarSession();

        return isset($_SESSION['usuario']);
    }

    /**
     * Método que impede o usuário não identificado de acessar páginas exclusivas de login
     *
     */
    public static function requireLogin($user, $location)
    {
        if (!self::validarLogin()) {
            header('location: entrar.php');
            exit;
        }
        if (!isset($_SESSION['usuario'][$user])) {
            header('location: ' . $location);
            exit;
        }
    }

    /**
     * Método que impede usuário identificado dee acessar páginas exclusivas de não login
     *
     */
    public static function requireLogout()
    {
        if (self::validarLogin()) {
            header('location: index.php');
            exit;
        }
    }
}
