<?php
    require_once('vendor/autoload.php');
    use Twig\Environment;
    use Twig\Loader\FilesystemLoader;

    // Fonction qui permet d'initialiser Twig 
    // et de préciser le dossier de stockage des modèles
 
    // ============================
    function init_twig() {
    // ============================
        // Indique le répertoire ou sont placés les modèles (templates)
        $loader = new FilesystemLoader('templates');

        // Crée un nouveau moteur Twig en mode debug
        $twig = new Environment($loader, ['debug' => true]);
        $twig->addExtension(new \Twig\Extension\DebugExtension());

        // Renvoie le moteur twig créé
        return ( $twig ) ;
    }
?>