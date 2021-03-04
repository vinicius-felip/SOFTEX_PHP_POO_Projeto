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
     *
     * @param object Usuario $objUsuario
     */
    public static function autenticado($objUsuario)
    {
        self::iniciarSession();

        $_SESSION['usuario'] = [
            'id' => $objUsuario->id,
            'nome' => $objUsuario->nome,
            'email' => $objUsuario->emaial,
        ];

        header('location: index.php');
        exit;
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

        return isset($_SESSION['usuario']['id']);
    }

    /**
     * Método que impede o usuário não identificado de acessar páginas exclusivas de login
     *
     */
    public static function requireLogin()
    {
        if (!self::validarLogin()) {
            header('location: entrar.php');
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
