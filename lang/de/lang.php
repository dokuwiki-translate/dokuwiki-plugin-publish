<?php

/**
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 *
 */
$lang['apr_recent_draft']      = 'Die <a href="%s">aktuellste Version</a> dieses Dokuments ist ein Entwurf.';
$lang['apr_outdated']          = 'Diese Version wurde durch eine <a href="%s">neuere bestätigte Version</a> <em>ersetzt</em>.';
$lang['apr_draft']             = 'Diese Version (%s) ist ein <em>Entwurf</em>.';
$lang['apr_approved']          = 'Diese Version (%s) wurde <em>bestätigt</em> durch %s.';
$lang['apr_previous']          = 'Die <a href="%s">zuvor bestätigte Version</a> (%s) ist verfügbar.';
$lang['apr_p_none']            = 'Es gibt keine Dokumente die bestätigt werden müssen';
$lang['apr_p_hdr_page']        = 'Seite';
$lang['apr_p_hdr_previous']    = 'Zuletzt bestätigt';
$lang['apr_p_hdr_updated']     = 'Aktualisiert';
$lang['apr_p_approved']        = 'Von %s am <a href="%s">%s</a>';
$lang['apr_do_approve']        = 'Bestätigen';
$lang['wrong permissions to approve'] = 'Sie haben nicht die nötige Berechtigung um diese Seite zu bestätigen.';
$lang['cannot approve a non-existing revision'] = 'Sie können keine Revision bestätigen die nicht existiert.';
$lang['version approved']      = 'Sie haben das Dokument überprüft.';
$lang['cannot approve error']  = 'Überprüfung konnte aus technischen Gründen nicht gesetzt werden. (Berechtigungsfehler?)';
$lang['approvals']             = 'Überprüfungen: %s/%s';
$lang['approved by']           = 'Überprüft durch: %s';
$lang['approve action']        = 'Dokument bestätigen';


$lang['apr_changemail_text'] = 'Hallo @FULLNAME@!

ein neuer Vorschlag für @TITLE@ auf @DOKUWIKIURL@ ist erstellt worden.

Änderungen: @CHANGES@

Bestätigen: @APPREJ@

--
Diese Mail kommt von DokuWiki auf
@DOKUWIKIURL@';

$lang['apr_approvemail_text'] = 'Hallo @FULLNAME@!

ihr Vorschlag für @TITLE@ auf @DOKUWIKIURL@ ist bestätigt worden.

URL: @URL@

--
Diese Mail kommt von DokuWiki auf
@DOKUWIKIURL@';

$lang['apr_rejectmail_text'] = 'Hallo @FULLNAME@!

ihr Vorschlag für @TITLE@ auf @DOKUWIKIURL@ wurde abgelehnt.

URL: @URL@

--
Diese Mail kommt von DokuWiki auf
@DOKUWIKIURL@';

$lang['apr_do_reject'] = 'Ablehnen';
$lang['apr_do_approve'] = 'Bestätigen';
$lang['apr_mail_subject'] = 'Neuer Vorschlag';
$lang['apr_mail_app_subject'] = 'Vorschlag bestätigt';
$lang['apr_mail_rej_subject'] = 'Vorschlag abgelehnt';
