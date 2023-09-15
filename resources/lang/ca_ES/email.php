<?php

/**
 * email.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


declare(strict_types=1);

return [
    // common items
    'greeting'                                => 'Hola,',
    'closing'                                 => 'Bip bop,',
    'signature'                               => 'El Robot de Correu de Firefly III',
    'footer_ps'                               => 'PD: Aquest missatge s\'ha enviat perquè una petició de la IP :ipAddress l\'ha activat.',

    // admin test
    'admin_test_subject'                      => 'Missatge de prova de la teva instal·lació de Firefly III',
    'admin_test_body'                         => 'Aquest és un missatge de prova de la teva instància de Firefly III. S\'ha enviat a :email.',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    // invite
    'invitation_created_subject'              => 'S\'ha creat una invitació',
    'invitation_created_body'                 => 'L\'usuari administrador ":email" ha creat una invitació d\'usuari que pot utilitzar qui estigui darrere l\'adreça de correu ":invitee". La invitació serà vàlida durant 48 h.',
    'invite_user_subject'                     => 'Has estat invitat a crear un compte a Firefly III.',
    'invitation_introduction'                 => 'Has estat invitat a crear un compte a Firefly III a **:host**. Firefly III és un gestor financer personal privat i autoallotjat. Tots els nois ben parits el fan servir.',
    'invitation_invited_by'                   => 'Has estat invitat per ":admin" i la invitació s\'ha enviat a ":invitee". Ets tu, oi?',
    'invitation_url'                          => 'La invitació és vàlida durant 48 hores i es pot bescanviar navegant a [Firefly III](:url). Gaudeix!',

    // new IP
    'login_from_new_ip'                       => 'Nou inici de sessió a Firefly III',
    'slack_login_from_new_ip'                 => 'Nou inici de sessió a Firefly III des de la IP :ip (:host)',
    'new_ip_body'                             => 'Firefly III ha detectat un nou inici de sessió al teu compte des d\'una IP desconeguda. Si no has iniciat mai sessió des de l\'adreça IP de sota, o han passat més de sis mesos, Firefly III t\'avisarà.',
    'new_ip_warning'                          => 'Si reconeixes l\'adreça IP o l\'inici de sessió, pots ignorar aquest missatge. Si no has iniciat sessió, o no en tens ni idea de què és això, verifica la seguretat de la teva contrasenya, canvia-la, i tanca totes les altres sessions. Per a fer això, ves a la pàgina del teu perfil. Per descomptat tens activada l\'A2F, oi? Cuidat!',
    'ip_address'                              => 'Adreça IP',
    'host_name'                               => 'Servidor',
    'date_time'                               => 'Data + hora',

    // access token created
    'access_token_created_subject'            => 'S\'ha creat un nou identificador d\'accés',
    'access_token_created_body'               => 'Algú (esperem que tu) acaba de crear un nou Identificador d\'Accés a l\'API de Firefly III pel teu compte.',
    'access_token_created_explanation'        => 'Amb aquest identificador d\'accés, es pot accedir a **tots** els teus registres financers a través de l\'API de Firefly III.',
    'access_token_created_revoke'             => 'Si no has estat tu, si us plau, revoca aquest identificador d\'accés tan aviat com puguis a :url',

    // registered
    'registered_subject'                      => 'Benvingut a Firefly III!',
    'registered_subject_admin'                => 'Un nou usuari s\'ha registrat',
    'admin_new_user_registered'               => 'Un nou usuari s\'ha registrat. A l\'usuari **:email** se li ha donat l\'ID d\'usuari #:id.',
    'registered_welcome'                      => 'Benvingut a [Firefly III](:address). T\'has registrat correctament, i aquest correu és per confirmar-t\'ho. Visca!',
    'registered_pw'                           => 'Si ja te n\'has oblidat de la contrasenya, si us plau, reinicia-la utilitzant [l\'eina de restabliment de contrasenyes](:address/contrasenya/restablir).',
    'registered_help'                         => 'Hi ha una icona d\'ajuda a la cantonada superior dreta de cada pàgina. Si necessites ajuda, prem-la!',
    'registered_doc_html'                     => 'Si encara no ho has fet, si us plau, llegeix la [documentació](https://docs.firefly-iii.org/about-firefly-iii/personal-finances).',
    'registered_doc_text'                     => 'Si encara no ho has fet, si us plau, llegeix la guia de primer ús i la descripció completa.',
    'registered_closing'                      => 'Gaudeix!',
    'registered_firefly_iii_link'             => 'Firefly III:',
    'registered_pw_reset_link'                => 'Restablir contrasenya:',
    'registered_doc_link'                     => 'Documentació:',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    // new version
    'new_version_email_subject'               => 'Hi ha disponible una nova versió de Firefly III',

    // email change
    'email_change_subject'                    => 'S\'ha canviat la teva adreça de correu de Firefly III',
    'email_change_body_to_new'                => 'Tu o algú amb accés al teu compte de Firefly III ha canviat la teva adreça de correu electrònic. Si no esperaves aquest missatge, si us plau, ignora\'l i elimina\'l.',
    'email_change_body_to_old'                => 'Tu o algú amb accés al teu compte de Firefly III ha canviat la teva adreça de correu electrònic. Si no esperaves aquest canvi, **has de** seguir l\'enllaç de "desfer" de sota per protegir el teu compte!',
    'email_change_ignore'                     => 'Si has fet tu aquest canvi, pots ignorar aquest missatge de forma segura.',
    'email_change_old'                        => 'L\'adreça de correu electrònic anterior era: :email',
    'email_change_old_strong'                 => 'L\'adreça de correu electrònic anterior era: **:email**',
    'email_change_new'                        => 'La nova adreça de correu electrònic és :email',
    'email_change_new_strong'                 => 'La nova adreça de correu és: **:email**',
    'email_change_instructions'               => 'No pots utilitzar Firefly III fins que no confirmis aquest canvi. Si us plau, segueix l\'enllaç de sota per a fer-ho.',
    'email_change_undo_link'                  => 'Per desfer el canvi, segueix aquest enllaç:',

    // OAuth token created
    'oauth_created_subject'                   => 'S\'ha creat un nou client d\'OAuth',
    'oauth_created_body'                      => 'Algú (esperem que tu) acaba de crear un nou Client OAuth a l\'API de Firefly III pel teu compte. Té l\'etiqueta ":name" i l\'adreça URL de retorn \':url\'.',
    'oauth_created_explanation'               => 'Amb aquest client, es pot accedir a **tots** els teus registres financers a través de l\'API de Firefly III.',
    'oauth_created_undo'                      => 'Si no has estat tu, si us plau, revoca aquest client tan aviat com puguis a \':url\'',

    // reset password
    'reset_pw_subject'                        => 'Petició de restabliment de contrasenya',
    'reset_pw_instructions'                   => 'Algú ha provat de restablir la teva contrasenya. Si has estat tu, si us plau, segueix l\'enllaç de sota per a fer-ho.',
    'reset_pw_warning'                        => '**SI US PLAU**, comprova que l\'enllaç realment va al Firefly III on esperes que vagi!',

    // error
    'error_subject'                           => 'Hi ha hagut un error a Firefly III',
    'error_intro'                             => 'Hi ha hagut un error a Firefly III v:version: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                              => 'L\'error ha estat del tipus ":class".',
    'error_timestamp'                         => 'L\'error ha succeït el :time.',
    'error_location'                          => 'L\'error ha succeït a l\'arxiu "<span style="font-family: monospace;">:file</span>" a la línia :line amb codi :code.',
    'error_user'                              => 'L\'error ha estat trobat per l\'usuari #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                           => 'Cap usuari havia iniciat sessió en aquest error o no s\'ha detectat cap usuari.',
    'error_ip'                                => 'L\'adreça IP d\'aquest error és: :ip',
    'error_url'                               => 'L\'URL és: :url',
    'error_user_agent'                        => 'Agent d\'usuari: :userAgent',
    'error_stacktrace'                        => 'La traça completa és a continuació. Si creus que és un error de Firefly III, pots reenviar aquest missatge a <a href="mailto:james@firefly-iii.org?subject=BUG!">james@firefly-iii.org</a>. Podria ajudar a solucionar l\'error que acabes de trobar.',
    'error_github_html'                       => 'Si ho prefereixes, també pots obrir un nou issue a <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                       => 'Si ho prefereixes, també pots obrir un nou issue a https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                  => 'La traça completa és a continuació:',
    'error_headers'                           => 'Les següents capçaleres també podrien ser rellevants:',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    // report new journals
    'new_journals_subject'                    => 'Firefly III ha creat una nova transacció|Firefly III ha creat :count noves transaccions',
    'new_journals_header'                     => 'Firefly III ha creat una transacció per tu. Pots trobar-la a la teva instal·lació de Firefly III:|Firefly III ha creat :count transaccions per tu. Les pots trobar a la teva instal·lació de Firefly III:',

    // bill warning
    'bill_warning_subject_end_date'           => 'La factura ":name" venç en :diff dies',
    'bill_warning_subject_now_end_date'       => 'La factura ":name" venç AVUI',
    'bill_warning_subject_extension_date'     => 'La factura ":name" ha de ser prorrogada o cancel·lada en :diff dies',
    'bill_warning_subject_now_extension_date' => 'La factura ":name" ha de ser prorrogada o cancel·lada AVUI',
    'bill_warning_end_date'                   => 'La factura **":name"** venç el :date. Això serè en **:diff dies**.',
    'bill_warning_extension_date'             => 'La factura ":name" ha de ser prorrogada o cancel·lada el :date. Això serà d\'aquí **:diff dies**.',
    'bill_warning_end_date_zero'              => 'La factura **":name"** venç el :date. Això és **AVUI!**',
    'bill_warning_extension_date_zero'        => 'La factura **":name"** ha de ser prorrogada o cancel·lada el :date. Això és **AVUI!**',
    'bill_warning_please_action'              => 'Si us plau, prengui les mesures oportunes.',

];
/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */
