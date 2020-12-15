<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/ad/messages/contact-ad-author' => [[['_route' => 'contact_ad_author', '_controller' => 'App\\Controller\\AdMessagesController::contactAdAuthor'], null, null, null, false, false, null]],
        '/ad/messages/list-messages' => [[['_route' => 'list_messages', '_controller' => 'App\\Controller\\AdMessagesController::listMessages'], null, null, null, false, false, null]],
        '/ad/search' => [[['_route' => 'ad_search', '_controller' => 'App\\Controller\\AdSearchController::adSearch'], null, null, null, false, false, null]],
        '/ad/search/ads-list' => [[['_route' => 'ads_search_list', '_controller' => 'App\\Controller\\AdSearchController::adsList'], null, null, null, false, false, null]],
        '/admin/ads/list' => [[['_route' => 'ads_list', '_controller' => 'App\\Controller\\Admin\\AdsController::adsList'], null, null, null, false, false, null]],
        '/admin/posts/list' => [[['_route' => 'posts_list', '_controller' => 'App\\Controller\\Admin\\PostsController::postsList'], null, ['GET' => 0], null, false, false, null]],
        '/admin/posts/add' => [[['_route' => 'posts_add', '_controller' => 'App\\Controller\\Admin\\PostsController::postsAdd'], null, null, null, false, false, null]],
        '/admin/users/list' => [[['_route' => 'users_list', '_controller' => 'App\\Controller\\Admin\\UsersController::usersList'], null, null, null, false, false, null]],
        '/admin/add/user' => [[['_route' => 'add_user', '_controller' => 'App\\Controller\\Admin\\UsersController::addUser'], null, null, null, false, false, null]],
        '/ads/add' => [[['_route' => 'ads_add', '_controller' => 'App\\Controller\\AdsController::add'], null, null, null, false, false, null]],
        '/user/allcandidature' => [[['_route' => 'MesCandidatures', '_controller' => 'App\\Controller\\CandController::MesCandidatures'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact/infos' => [[['_route' => 'contact_infos', '_controller' => 'App\\Controller\\ContactInfosController::contact'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::accueil'], null, null, null, false, false, null]],
        '/inscriptions' => [[['_route' => 'inscriptions', '_controller' => 'App\\Controller\\HomeController::success'], null, null, null, false, false, null]],
        '/candidater' => [[['_route' => 'candidater', '_controller' => 'App\\Controller\\HomeController::candidater'], null, null, null, false, false, null]],
        '/mot-de-passe-perdu' => [[['_route' => 'forgot', '_controller' => 'App\\Controller\\HomeController::forgot'], null, null, null, false, false, null]],
        '/loginform' => [[['_route' => 'loginform', '_controller' => 'App\\Controller\\HomeController::loginform'], null, null, null, false, false, null]],
        '/mes-annonces' => [[['_route' => 'annonces', '_controller' => 'App\\Controller\\HomeController::annonce'], null, null, null, false, false, null]],
        '/gestion-des-candidatures' => [[['_route' => 'gestion-des-candidatures', '_controller' => 'App\\Controller\\HomeController::gestion'], null, null, null, false, false, null]],
        '/messagerie' => [[['_route' => 'messagerie', '_controller' => 'App\\Controller\\HomeController::messagerie'], null, null, null, false, false, null]],
        '/contacter' => [[['_route' => 'contacter', '_controller' => 'App\\Controller\\HomeController::contacter'], null, null, null, false, false, null]],
        '/mon-espace' => [[['_route' => 'espace', '_controller' => 'App\\Controller\\HomeController::espace'], null, null, null, false, false, null]],
        '/mon-espace/groupe' => [[['_route' => 'groupe', '_controller' => 'App\\Controller\\HomeController::groupe'], null, null, null, false, false, null]],
        '/mon-espace/calendrier' => [[['_route' => 'calendrier', '_controller' => 'App\\Controller\\HomeController::calendrier'], null, null, null, false, false, null]],
        '/mon-espace/bibliotheque' => [[['_route' => 'bibliotheques', '_controller' => 'App\\Controller\\HomeController::bibliotheques'], null, null, null, false, false, null]],
        '/mon-espace/topic' => [[['_route' => 'topic', '_controller' => 'App\\Controller\\HomeController::topic'], null, null, null, false, false, null]],
        '/mon-espace/messagerie' => [[['_route' => '_messagerie', '_controller' => 'App\\Controller\\HomeController::_messagerie'], null, null, null, false, false, null]],
        '/mon-espace/ajouter_un_evenement' => [[['_route' => 'addevent', '_controller' => 'App\\Controller\\HomeController::addevent'], null, null, null, false, false, null]],
        '/mon-espace/membre' => [[['_route' => 'membre', '_controller' => 'App\\Controller\\HomeController::membre'], null, null, null, false, false, null]],
        '/candidature' => [[['_route' => 'candidature', '_controller' => 'App\\Controller\\HomeController::candidature'], null, null, null, false, false, null]],
        '/favoris' => [[['_route' => 'favoris', '_controller' => 'App\\Controller\\HomeController::favoris'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/bibliotheque' => [[['_route' => 'bibliotheque', '_controller' => 'App\\Controller\\HomeController::bibliotheque'], null, null, null, false, false, null]],
        '/header' => [[['_route' => 'header', '_controller' => 'App\\Controller\\HomeController::header'], null, null, null, false, false, null]],
        '/mon-espace/me' => [[['_route' => 'me', '_controller' => 'App\\Controller\\HomeController::me'], null, null, null, false, false, null]],
        '/reset/password/get-email' => [[['_route' => 'get_email', '_controller' => 'App\\Controller\\ResetPasswordController::getEmail'], null, null, null, false, false, null]],
        '/reset/password/lost-password-redirect' => [[['_route' => 'lost_password_redirect', '_controller' => 'App\\Controller\\ResetPasswordController::lostPasswordRedirect'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/profile' => [[['_route' => 'user_profile', '_controller' => 'App\\Controller\\UserProfileController::userProfile'], null, null, null, false, false, null]],
        '/profile/add/avatar' => [[['_route' => 'image', '_controller' => 'App\\Controller\\UserProfileController::addAvatar'], null, ['POST' => 0], null, false, false, null]],
        '/elfinder.main.js' => [[['_route' => 'ef_main_js', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|d(?'
                        .'|/messages/(?'
                            .'|conversation/(\\d+)_(\\d+)(*:215)'
                            .'|delete/(\\d+)(*:235)'
                        .')'
                        .'|min/(?'
                            .'|posts/(?'
                                .'|update/(\\d+)(*:272)'
                                .'|delete/(\\d+)(*:292)'
                            .')'
                            .'|update/([^/]++)(*:316)'
                            .'|delete/([^/]++)(*:339)'
                        .')'
                        .'|\\-page/(\\d+)_([^/]++)(*:369)'
                    .')'
                    .'|nnonce/([^/]++)/candidature(?'
                        .'|/inscription(*:420)'
                        .'|light/inscription(*:445)'
                    .')'
                    .'|ccount/confirm(?:/([^/]++))?(*:482)'
                .')'
                .'|/user/(?'
                    .'|edit/candidature(?'
                        .'|/([^/]++)(*:528)'
                        .'|light/([^/]++)(*:550)'
                    .')'
                    .'|annonce/([^/]++)/candidature/manage(?'
                        .'|(*:597)'
                        .'|/(?'
                            .'|pdf/([^/]++)(*:621)'
                            .'|reponse(*:636)'
                        .')'
                    .')'
                .')'
                .'|/pro(?'
                    .'|jet/([^/]++)(*:666)'
                    .'|file(?:/(\\d+))?(*:689)'
                .')'
                .'|/mon\\-espace/forum(?:/([^/]++))?(*:730)'
                .'|/reset/password/lost\\-password(?:/([^/]++))?(*:782)'
                .'|/e(?'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:831)'
                    .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:874)'
                .')'
                .'|/js/routing(?:\\.(js|json))?(*:910)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        215 => [[['_route' => 'ad_conversation', '_controller' => 'App\\Controller\\AdMessagesController::adConversation'], ['author', 'ad'], null, null, false, true, null]],
        235 => [[['_route' => 'messages_delete', '_controller' => 'App\\Controller\\AdMessagesController::messagesDelete'], ['messageDel'], null, null, false, true, null]],
        272 => [[['_route' => 'posts_update', '_controller' => 'App\\Controller\\Admin\\PostsController::postsUpdate'], ['post'], null, null, false, true, null]],
        292 => [[['_route' => 'posts_delete', '_controller' => 'App\\Controller\\Admin\\PostsController::postsDelete'], ['post'], null, null, false, true, null]],
        316 => [[['_route' => 'update_user', '_controller' => 'App\\Controller\\Admin\\UsersController::updateUser'], ['user'], null, null, false, true, null]],
        339 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\Admin\\UsersController::deleteUser'], ['user'], null, null, false, true, null]],
        369 => [[['_route' => 'ad_page', '_controller' => 'App\\Controller\\AdsController::adPage'], ['ad', 'slug'], null, null, false, true, null]],
        420 => [[['_route' => 'NewCandidature', '_controller' => 'App\\Controller\\CandController::NewCandidature'], ['annonce'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        445 => [[['_route' => 'NewCandidatureLight', '_controller' => 'App\\Controller\\CandController::NewCandidatureLight'], ['annonce'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        482 => [[['_route' => 'confirm_account', 'token' => null, '_controller' => 'App\\Controller\\SecurityController::confirmAccount'], ['token'], null, null, false, true, null]],
        528 => [[['_route' => 'EditCandidature', '_controller' => 'App\\Controller\\CandController::EditCandidature'], ['candidature'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        550 => [[['_route' => 'EditCandidatureLight', '_controller' => 'App\\Controller\\CandController::EditCandidatureLight'], ['candidature'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        597 => [[['_route' => 'ManageCandidature', '_controller' => 'App\\Controller\\CandController::manageCandidature'], ['annonce'], ['GET' => 0, 'POST' => 1], null, true, false, null]],
        621 => [[['_route' => 'GeneratePdfCandidature', '_controller' => 'App\\Controller\\CandController::GeneratePdf'], ['annonce', 'candidature'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        636 => [[['_route' => 'ReponseCandidature', '_controller' => 'App\\Controller\\CandController::ReponseCandidature'], ['annonce'], ['GET' => 0, 'POST' => 1], null, true, false, null]],
        666 => [[['_route' => 'projet', '_controller' => 'App\\Controller\\HomeController::projet'], ['id'], null, null, false, true, null]],
        689 => [[['_route' => 'profil', 'state' => false, '_controller' => 'App\\Controller\\HomeController::profil'], ['state'], null, null, false, true, null]],
        730 => [[['_route' => 'forum', 'exist' => false, '_controller' => 'App\\Controller\\HomeController::forum'], ['exist'], null, null, false, true, null]],
        782 => [[['_route' => 'reset_lost_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::resetLostPassword'], ['token'], null, null, false, true, null]],
        831 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        874 => [[['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        910 => [
            [['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
