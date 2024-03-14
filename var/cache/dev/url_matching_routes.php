<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/category' => [[['_route' => 'app_category', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, false, false, null]],
        '/addformcategory' => [[['_route' => 'addformcategory', '_controller' => 'App\\Controller\\CategoryController::addformbook'], null, null, null, false, false, null]],
        '/showdbcategorie' => [[['_route' => 'showdbcategory', '_controller' => 'App\\Controller\\CategoryController::showdbauthor'], null, null, null, false, false, null]],
        '/showdbcategorief1' => [[['_route' => 'showdbcategoryf', '_controller' => 'App\\Controller\\CategoryController::showdbcategoryf'], null, null, null, false, false, null]],
        '/comment' => [[['_route' => 'app_comment', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, false, false, null]],
        '/adminc' => [[['_route' => 'adminc', '_controller' => 'App\\Controller\\CommentController::indexx'], null, null, null, false, false, null]],
        '/evenement/stat' => [[['_route' => 'app_evenement_indexstat', '_controller' => 'App\\Controller\\EvenementController::index3'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement/pdf' => [[['_route' => 'generator_service3', '_controller' => 'App\\Controller\\EvenementController::pdfService'], null, null, null, false, false, null]],
        '/evenement' => [[['_route' => 'app_evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/evenement/front' => [[['_route' => 'app_evenement_indexFront', '_controller' => 'App\\Controller\\EvenementController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/new' => [[['_route' => 'app_evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/participant' => [[['_route' => 'app_participant_index', '_controller' => 'App\\Controller\\ParticipantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/post' => [[['_route' => 'app_post', '_controller' => 'App\\Controller\\PostController::index'], null, null, null, false, false, null]],
        '/postmed' => [[['_route' => 'app_postmed', '_controller' => 'App\\Controller\\PostController::indexmed'], null, null, null, false, false, null]],
        '/postlab' => [[['_route' => 'app_postlab', '_controller' => 'App\\Controller\\PostController::indexlab'], null, null, null, false, false, null]],
        '/postHeart' => [[['_route' => 'app_postHeart', '_controller' => 'App\\Controller\\PostController::indexHeart'], null, null, null, false, false, null]],
        '/postEquipments' => [[['_route' => 'app_postEquipments', '_controller' => 'App\\Controller\\PostController::indexEquipments'], null, null, null, false, false, null]],
        '/postFreecounselling' => [[['_route' => 'app_postFreecounselling', '_controller' => 'App\\Controller\\PostController::indexFreecounselling'], null, null, null, false, false, null]],
        '/admin' => [
            [['_route' => 'app_Admin', '_controller' => 'App\\Controller\\PostController::indexx'], null, null, null, false, false, null],
            [['_route' => 'app_admin', '_controller' => 'App\\Controller\\PostController::indexAdmin'], null, null, null, false, false, null],
            [['_route' => 'adisplay_admin', '_controller' => 'App\\Controller\\ReclamationController::indexAdmin'], null, null, null, false, false, null],
            [['_route' => 'admin', '_controller' => 'App\\Controller\\ReservationserviceController::index'], null, null, null, false, false, null],
        ],
        '/addformpost' => [[['_route' => 'addformpost', '_controller' => 'App\\Controller\\PostController::addformpost'], null, null, null, false, false, null]],
        '/qr-codes' => [[['_route' => 'app_qr_codes', '_controller' => 'App\\Controller\\QrCodeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/rapport' => [[['_route' => 'app_rapport', '_controller' => 'App\\Controller\\RapportController::index'], null, null, null, false, false, null]],
        '/showrapport' => [[['_route' => 'showrapport', '_controller' => 'App\\Controller\\RapportController::showrapport'], null, null, null, false, false, null]],
        '/addrapport' => [[['_route' => 'addrapport', '_controller' => 'App\\Controller\\RapportController::addrapport'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'display_reclamations', '_controller' => 'App\\Controller\\ReclamationController::index'], null, null, null, false, false, null]],
        '/addReclamation' => [[['_route' => 'add_reclamation', '_controller' => 'App\\Controller\\ReclamationController::addReclamation'], null, null, null, false, false, null]],
        '/showReclamations' => [[['_route' => 'show_reclamations', '_controller' => 'App\\Controller\\ReclamationController::showReclamations'], null, null, null, false, false, null]],
        '/show_stats' => [[['_route' => 'test', '_controller' => 'App\\Controller\\ReclamationController::showStats'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'app_registration', '_controller' => 'App\\Controller\\RegistrationController::index'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'signup', '_controller' => 'App\\Controller\\RegistrationController::addformuser'], null, null, null, false, false, null]],
        '/signupdoc' => [[['_route' => 'signupdoc', '_controller' => 'App\\Controller\\RegistrationController::addformdoc'], null, null, null, false, false, null]],
        '/rendezvous' => [[['_route' => 'app_rendezvous', '_controller' => 'App\\Controller\\RendezvousController::index'], null, null, null, false, false, null]],
        '/indexadmin' => [[['_route' => 'indexadmin', '_controller' => 'App\\Controller\\RendezvousController::indexadmin'], null, null, null, false, false, null]],
        '/indexfront' => [[['_route' => 'indexfront', '_controller' => 'App\\Controller\\RendezvousController::indexfront'], null, null, null, false, false, null]],
        '/show' => [[['_route' => 'show', '_controller' => 'App\\Controller\\RendezvousController::show'], null, null, null, false, false, null]],
        '/addRV' => [[['_route' => 'addRV', '_controller' => 'App\\Controller\\RendezvousController::addRV'], null, null, null, false, false, null]],
        '/add' => [[['_route' => 'add', '_controller' => 'App\\Controller\\RendezvousController::add'], null, null, null, false, false, null]],
        '/searchrendezvous' => [[['_route' => 'searchrendezvous', '_controller' => 'App\\Controller\\RendezvousController::searchrendezvous'], null, null, null, false, false, null]],
        '/rendezvouschart' => [[['_route' => 'rendezvouschart', '_controller' => 'App\\Controller\\RendezvousController::rendezvouschart'], null, null, null, false, false, null]],
        '/addReply' => [[['_route' => 'add_reply', '_controller' => 'App\\Controller\\ReplyController::addReply'], null, null, null, false, false, null]],
        '/showReplies' => [[['_route' => 'show_replies', '_controller' => 'App\\Controller\\ReplyController::showReplies'], null, null, null, false, false, null]],
        '/showdbReclamations' => [[['_route' => 'show_dbreclamations', '_controller' => 'App\\Controller\\ReplyController::showReclamations'], null, null, null, false, false, null]],
        '/admin/stats' => [[['_route' => 'admin_stats', '_controller' => 'App\\Controller\\ReplyController::showAdminStats'], null, null, null, false, false, null]],
        '/addformreservationser' => [[['_route' => 'addformreservationser', '_controller' => 'App\\Controller\\ReservationserviceController::addformreservationser'], null, null, null, false, false, null]],
        '/showdbreservationser' => [[['_route' => 'showdbreservationser', '_controller' => 'App\\Controller\\ReservationserviceController::showdbreservationserv'], null, null, null, false, false, null]],
        '/chartservice' => [[['_route' => 'chartservice', '_controller' => 'App\\Controller\\ReservationserviceController::chart'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/security' => [[['_route' => 'app_security', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'app_service', '_controller' => 'App\\Controller\\ServiceController::index'], null, null, null, false, false, null]],
        '/bookservice' => [[['_route' => 'bookservice', '_controller' => 'App\\Controller\\ServiceController::indexservice'], null, null, null, false, false, null]],
        '/calculimc' => [[['_route' => 'calculimc', '_controller' => 'App\\Controller\\ServiceController::calculimc'], null, null, null, false, false, null]],
        '/addformservice' => [[['_route' => 'addformservice', '_controller' => 'App\\Controller\\ServiceController::addformauthor'], null, null, null, false, false, null]],
        '/tableservicef' => [[['_route' => 'showdbservicef', '_controller' => 'App\\Controller\\ServiceController::showdbauthorf'], null, null, null, false, false, null]],
        '/calculate-imc' => [[['_route' => 'calculate_imc', '_controller' => 'App\\Controller\\ServiceController::calculateIMC'], null, null, null, false, false, null]],
        '/search' => [
            [['_route' => 'search', '_controller' => 'App\\Controller\\ServiceController::searchAction'], null, null, null, false, false, null],
            [['_route' => 'ajax_search', '_controller' => 'App\\Controller\\ServiceController::searchAction'], null, null, null, false, false, null],
        ],
        '/sponsor/new' => [[['_route' => 'app_sponsor_new', '_controller' => 'App\\Controller\\SponsorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sponsor' => [[['_route' => 'app_sponsor_index', '_controller' => 'App\\Controller\\SponsorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pagehome' => [[['_route' => 'pagehome', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\UserController::profile'], null, null, null, false, false, null]],
        '/profiledoc' => [[['_route' => 'profiledoc', '_controller' => 'App\\Controller\\UserController::profiledoc'], null, null, null, false, false, null]],
        '/showdbuser' => [[['_route' => 'showdbuser', '_controller' => 'App\\Controller\\UserController::showdbuser'], null, null, null, false, false, null]],
        '/pdfadmin' => [[['_route' => 'pdfadmin', '_controller' => 'App\\Controller\\UserController::generatePdf'], null, null, null, false, false, null]],
        '/showdocuser' => [[['_route' => 'showdocuser', '_controller' => 'App\\Controller\\UserController::showdocuser'], null, null, null, false, false, null]],
        '/showdoc' => [[['_route' => 'showdoc', '_controller' => 'App\\Controller\\UserController::showdoc'], null, null, null, false, false, null]],
        '/addadmin' => [[['_route' => 'addadmin', '_controller' => 'App\\Controller\\UserController::addformuser'], null, null, null, false, false, null]],
        '/adminprofile' => [[['_route' => 'adminprofile', '_controller' => 'App\\Controller\\UserController::adminprofile'], null, null, null, false, false, null]],
        '/docchart' => [[['_route' => 'docchart', '_controller' => 'App\\Controller\\UserController::specialtiesChart'], null, null, null, false, false, null]],
        '/chatbotadmin' => [[['_route' => 'chatbotadmin', '_controller' => 'App\\Controller\\UserController::chat'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/chatbotuser' => [[['_route' => 'chatbotuser', '_controller' => 'App\\Controller\\UserController::chatuser'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/2fa' => [[['_route' => '2fa_login', '_controller' => 'scheb_two_factor.form_controller::form'], null, null, null, false, false, null]],
        '/2fa_check' => [[['_route' => '2fa_login_check'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/e(?'
                    .'|dit(?'
                        .'|c(?'
                            .'|ategorie/([^/]++)(*:39)'
                            .'|omment/([^/]++)(*:61)'
                        .')'
                        .'|post/([^/]++)(*:82)'
                        .'|r(?'
                            .'|apport/([^/]++)(*:108)'
                            .'|v/([^/]++)(*:126)'
                        .')'
                        .'|Re(?'
                            .'|clamation/([^/]++)(*:158)'
                            .'|ply/([^/]++)(*:178)'
                        .')'
                        .'|sevice/([^/]++)(*:202)'
                        .'|user/([^/]++)(*:223)'
                        .'|doc/([^/]++)(*:243)'
                        .'|admin/([^/]++)(*:265)'
                    .')'
                    .'|venement/(?'
                        .'|show_in_map/([^/]++)(*:306)'
                        .'|([^/]++)(?'
                            .'|(*:325)'
                            .'|/edit(*:338)'
                            .'|(*:346)'
                        .')'
                    .')'
                .')'
                .'|/delete(?'
                    .'|c(?'
                        .'|ategorie/([^/]++)(*:388)'
                        .'|omment/([^/]++)(*:411)'
                        .'|reservationser/([^/]++)(*:442)'
                    .')'
                    .'|post/([^/]++)(*:464)'
                    .'|rapport/([^/]++)(*:488)'
                    .'|R(?'
                        .'|eclamation/([^/]++)(*:519)'
                        .'|V/([^/]++)(*:537)'
                    .')'
                    .'|_reply/([^/]++)(*:561)'
                    .'|dbReclamation/([^/]++)(*:591)'
                    .'|service/([^/]++)(*:615)'
                    .'|user(?'
                        .'|/([^/]++)(*:639)'
                        .'|ad/([^/]++)(*:658)'
                    .')'
                .')'
                .'|/add(?'
                    .'|like(?'
                        .'|comment/([^/]++)(*:698)'
                        .'|post/([^/]++)(*:719)'
                    .')'
                    .'|dislike(?'
                        .'|comment/([^/]++)(*:754)'
                        .'|post/([^/]++)(*:775)'
                    .')'
                    .'|formcomment/([^/]++)(*:804)'
                .')'
                .'|/p(?'
                    .'|articipant(?'
                        .'|([^/]++)/new(*:843)'
                        .'|/([^/]++)(?'
                            .'|(*:863)'
                            .'|/edit(*:876)'
                            .'|(*:884)'
                        .')'
                    .')'
                    .'|ostsingle/([^/]++)(*:912)'
                    .'|dfrapport/([^/]++)(*:938)'
                .')'
                .'|/v(?'
                    .'|alidpost/([^/]++)(*:969)'
                    .'|erificationparmail/([^/]++)(*:1004)'
                .')'
                .'|/s(?'
                    .'|how(?'
                        .'|_dbreplies/([^/]++)(*:1044)'
                        .'|id(?'
                            .'|service/([^/]++)(*:1074)'
                            .'|catservice/([^/]++)(*:1102)'
                        .')'
                    .')'
                    .'|ponsor/([^/]++)(?'
                        .'|(*:1131)'
                        .'|/edit(*:1145)'
                        .'|(*:1154)'
                    .')'
                    .'|witchrole(?'
                        .'|admin/([^/]++)(*:1190)'
                        .'|utoser/([^/]++)(*:1214)'
                    .')'
                .')'
                .'|/ge(?'
                    .'|nerate\\-pdf/([^/]++)(*:1251)'
                    .'|t\\-rendezvous/([^/]++)(*:1282)'
                .')'
                .'|/c(?'
                    .'|onfirmerRV/([^/]++)(*:1316)'
                    .'|hange\\-language/([^/]++)(*:1349)'
                .')'
                .'|/re(?'
                    .'|jectreservationser/([^/]++)(*:1392)'
                    .'|set\\-password/reset(?:/([^/]++))?(*:1434)'
                    .'|ndezvous\\-calendar/([^/]++)(*:1470)'
                .')'
                .'|/tableservice/([^/]++)(*:1502)'
                .'|/block_user/([^/]++)(*:1531)'
                .'|/unblock_user/([^/]++)(*:1562)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1602)'
                    .'|wdt/([^/]++)(*:1623)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1670)'
                            .'|router(*:1685)'
                            .'|exception(?'
                                .'|(*:1706)'
                                .'|\\.css(*:1720)'
                            .')'
                        .')'
                        .'|(*:1731)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        39 => [[['_route' => 'editcategorie', '_controller' => 'App\\Controller\\CategoryController::editcategorie'], ['id'], null, null, false, true, null]],
        61 => [[['_route' => 'editcomment', '_controller' => 'App\\Controller\\CommentController::editcomment'], ['id'], null, null, false, true, null]],
        82 => [[['_route' => 'editpost', '_controller' => 'App\\Controller\\PostController::editpost'], ['id'], null, null, false, true, null]],
        108 => [[['_route' => 'editrapport', '_controller' => 'App\\Controller\\RapportController::editrapport'], ['id'], null, null, false, true, null]],
        126 => [[['_route' => 'editrv', '_controller' => 'App\\Controller\\RendezvousController::editrv'], ['id'], null, null, false, true, null]],
        158 => [[['_route' => 'edit_reclamation', '_controller' => 'App\\Controller\\ReclamationController::editReclamation'], ['id'], null, null, false, true, null]],
        178 => [[['_route' => 'edit_reply', '_controller' => 'App\\Controller\\ReplyController::editReply'], ['id'], null, null, false, true, null]],
        202 => [[['_route' => 'editservice', '_controller' => 'App\\Controller\\ServiceController::editservice'], ['id'], null, null, false, true, null]],
        223 => [[['_route' => 'edituser', '_controller' => 'App\\Controller\\UserController::editadmin'], ['id'], null, null, false, true, null]],
        243 => [[['_route' => 'editdoc', '_controller' => 'App\\Controller\\UserController::editdoc'], ['id'], null, null, false, true, null]],
        265 => [[['_route' => 'editadmin', '_controller' => 'App\\Controller\\UserController::editad'], ['id'], null, null, false, true, null]],
        306 => [[['_route' => 'app_evenement_map', '_controller' => 'App\\Controller\\EvenementController::Map'], ['id'], ['GET' => 0], null, false, true, null]],
        325 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        338 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        346 => [[['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        388 => [[['_route' => 'deletecategorie', '_controller' => 'App\\Controller\\CategoryController::deletecategorie'], ['id'], null, null, false, true, null]],
        411 => [[['_route' => 'deletecomment', '_controller' => 'App\\Controller\\CommentController::deletecomment'], ['id'], null, null, false, true, null]],
        442 => [[['_route' => 'deletecreservationser', '_controller' => 'App\\Controller\\ReservationserviceController::deletecreservationser'], ['id'], null, null, false, true, null]],
        464 => [[['_route' => 'deletepost', '_controller' => 'App\\Controller\\PostController::deletepost'], ['id'], null, null, false, true, null]],
        488 => [[['_route' => 'deleterapport', '_controller' => 'App\\Controller\\RapportController::deleterapport'], ['id'], null, null, false, true, null]],
        519 => [[['_route' => 'delete_reclamation', '_controller' => 'App\\Controller\\ReclamationController::deleteReclamation'], ['id'], null, null, false, true, null]],
        537 => [[['_route' => 'deleteRV', '_controller' => 'App\\Controller\\RendezvousController::deleteRV'], ['id'], null, null, false, true, null]],
        561 => [[['_route' => 'delete_reply', '_controller' => 'App\\Controller\\ReplyController::deleteReply'], ['id'], null, null, false, true, null]],
        591 => [[['_route' => 'delete_dbreclamation', '_controller' => 'App\\Controller\\ReplyController::deletedbReclamation'], ['id'], null, null, false, true, null]],
        615 => [[['_route' => 'deleteservice', '_controller' => 'App\\Controller\\ServiceController::deleteauthor'], ['id'], null, null, false, true, null]],
        639 => [[['_route' => 'deleteuser', '_controller' => 'App\\Controller\\UserController::deleteUser'], ['id'], null, null, false, true, null]],
        658 => [[['_route' => 'deleteuserad', '_controller' => 'App\\Controller\\UserController::admindeleteuser'], ['id'], null, null, false, true, null]],
        698 => [[['_route' => 'addlikecomment', '_controller' => 'App\\Controller\\CommentController::adlikepost'], ['id'], null, null, false, true, null]],
        719 => [[['_route' => 'addlikepost', '_controller' => 'App\\Controller\\PostController::adlikepost'], ['id'], null, null, false, true, null]],
        754 => [[['_route' => 'adddislikecomment', '_controller' => 'App\\Controller\\CommentController::adddislikepost'], ['id'], null, null, false, true, null]],
        775 => [[['_route' => 'adddislikepost', '_controller' => 'App\\Controller\\PostController::addislikepost'], ['id'], null, null, false, true, null]],
        804 => [[['_route' => 'addformcomment', '_controller' => 'App\\Controller\\CommentController::addformcomment'], ['id'], null, null, false, true, null]],
        843 => [[['_route' => 'app_participant_new', '_controller' => 'App\\Controller\\ParticipantController::new'], ['idevent'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        863 => [[['_route' => 'app_participant_show', '_controller' => 'App\\Controller\\ParticipantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        876 => [[['_route' => 'app_participant_edit', '_controller' => 'App\\Controller\\ParticipantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        884 => [[['_route' => 'app_participant_delete', '_controller' => 'App\\Controller\\ParticipantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        912 => [[['_route' => 'postsingle', '_controller' => 'App\\Controller\\PostController::showPostt'], ['id'], null, null, false, true, null]],
        938 => [[['_route' => 'pdfrapport', '_controller' => 'App\\Controller\\RapportController::pdfrapport'], ['id'], null, null, false, true, null]],
        969 => [[['_route' => 'validpost', '_controller' => 'App\\Controller\\PostController::validpost'], ['id'], null, null, false, true, null]],
        1004 => [[['_route' => 'verificationparmail', '_controller' => 'App\\Controller\\ReservationserviceController::verificationparmail'], ['id'], null, null, false, true, null]],
        1044 => [[['_route' => 'show_dbreplies', '_controller' => 'App\\Controller\\ReclamationController::showReplies'], ['id'], null, null, false, true, null]],
        1074 => [[['_route' => 'showidservice', '_controller' => 'App\\Controller\\ServiceController::showidservice'], ['id'], null, null, false, true, null]],
        1102 => [[['_route' => 'showidcatservice', '_controller' => 'App\\Controller\\ServiceController::showidcatservice'], ['id_category'], null, null, false, true, null]],
        1131 => [[['_route' => 'app_sponsor_show', '_controller' => 'App\\Controller\\SponsorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1145 => [[['_route' => 'app_sponsor_edit', '_controller' => 'App\\Controller\\SponsorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1154 => [[['_route' => 'app_sponsor_delete', '_controller' => 'App\\Controller\\SponsorController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1190 => [[['_route' => 'switchroleadmin', '_controller' => 'App\\Controller\\UserController::switchUserRoleToAdmin'], ['id'], null, null, false, true, null]],
        1214 => [[['_route' => 'switchroleutoser', '_controller' => 'App\\Controller\\UserController::switchUserRoleToUser'], ['id'], null, null, false, true, null]],
        1251 => [[['_route' => 'generate_pdf', '_controller' => 'App\\Controller\\ReclamationController::generatePdf'], ['id'], null, null, false, true, null]],
        1282 => [[['_route' => 'get_rendezvous', '_controller' => 'App\\Controller\\RendezvousController::getRendezvous'], ['id'], null, null, false, true, null]],
        1316 => [[['_route' => 'confirmerRV', '_controller' => 'App\\Controller\\RendezvousController::confirmerRV'], ['id'], null, null, false, true, null]],
        1349 => [[['_route' => 'change_language', '_controller' => 'App\\Controller\\ServiceController::switchLanguage'], ['language'], null, null, false, true, null]],
        1392 => [[['_route' => 'rejectreservationser', '_controller' => 'App\\Controller\\ReservationserviceController::rejectreservationser'], ['id'], null, null, false, true, null]],
        1434 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1470 => [[['_route' => 'rendezvous_calendar', '_controller' => 'App\\Controller\\RendezvousController::calendar'], ['id'], null, null, false, true, null]],
        1502 => [[['_route' => 'showdbservice', '_controller' => 'App\\Controller\\ServiceController::showdbservice'], ['page'], null, null, false, true, null]],
        1531 => [[['_route' => 'block_user', '_controller' => 'App\\Controller\\UserController::blockUser'], ['id'], null, null, false, true, null]],
        1562 => [[['_route' => 'unblock_user', '_controller' => 'App\\Controller\\UserController::unblockUser'], ['id'], null, null, false, true, null]],
        1602 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1623 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1670 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1685 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1706 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1720 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1731 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
