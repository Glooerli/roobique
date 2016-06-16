<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'roobique\\configuration' => '/Configuration.php',
                'roobique\\controllers\\abstractcontroller' => '/Controllers/AbstractController.php',
                'roobique\\controllers\\frontpagecontroller' => '/Controllers/FrontPageController.php',
                'roobique\\controllers\\logincontroller' => '/Controllers/LoginController.php',
                'roobique\\controllers\\loginactioncontroller' => '/Controllers/LoginActionController.php',
                'roobique\\controllers\\profilepagecontroller' => '/Controllers/ProfilePageController.php',
                'roobique\\handlers\\registerhandler' => '/Handlers/RegisterHandler.php',
                'roobique\\loaders\\loader' => '/Loaders/Loader.php',
                'roobique\\logins\\connecttoinsta' => '/Logins/ConnectToInsta.php',
                'roobique\\queries\\fetchaccesstokenfrominstagramquery' => '/Queries/FetchAccessTokenFromInstagramQuery.php',
                'roobique\\responses\\response' => '/Responses/Response.php',
                'roobique\\routers\\router' => '/Routers/Router.php',
                'roobique\\valueobjects\\uri' => '/ValueObjects/Uri.php',
                'roobique\\wrappers\\curl' => '/Wrappers/Curl.php',
                'roobique\\wrappers\\databasewrapper' => '/Wrappers/DatabaseWrapper.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd
