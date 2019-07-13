<?php
/*
 *  Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr5
 *
 *  License: MIT
 *
 *  Romanian Language - Admin
 *  Translation By @BaxAndrei ( https://baxandrei.ro )
 *  Last Update: 26/06/2019
 */

$language = array(
    /*
     *  Admin Control Panel
     */
    // Login
    're-authenticate' => 'Vă rugăm să vă re-autentificati',

    // Sidebar
    'dashboard' => 'Prezentare generala',
    'configuration' => 'Configurație',
    'layout' => 'Aspect',
    'user_management' => 'Gestionarea utilizatorilor',
    'admin_cp' => 'Panou Administrare',
    'administration' => 'Administrare',
    'overview' => 'Prezentare generală',
    'core' => 'Bază',
    'integrations' => 'Integrări',
    'minecraft' => 'Minecraft',
    'modules' => 'Module',
    'security' => 'Securitate',
    'sitemap' => 'Harta site-ului',
    'styles' => 'Stiluri',
    'users_and_groups' => 'Utilizatori și grupuri',
    'query_interval' => 'Intervalul interogării (în minute, trebuie să fie între 5 și 60)',
    'player_graphs' => 'Grafice ale jucătorilor',
    'player_count_cronjob_info' => 'Puteți configura un "cron job" pentru a interoga serverele dvs. la fiecare {x} minute cu următoarea comandă:',

    // Overview
    'running_nameless_version' => 'Rulează versiunea <strong>{x}</strong> a NamelessMC', // Don't replace "{x}"
    'running_php_version' => 'Rulează cu versiunea PHP <strong>{x}</strong>', // Don't replace "{x}"
    'statistics' => 'Statistici',
    'registrations' => 'Înregistrări',
    'topics' => 'Subiecte',
    'posts' => 'Postări',
    'notices' => 'Alerte',
    'no_notices' => 'Momentan nu există alerte.',
    'email_errors_logged' => 'Au fost înregistrate erori de e-mail',

    // Core
    'settings' => 'Setări',
    'general_settings' => 'Setări generale',
    'sitename' => 'Nume site',
    'default_language' => 'Limbă implicită',
    'default_language_help' => 'Utilizatorii vor putea alege din limbile instalate.',
    'install_language' => 'Instalați limba',
    'update_user_languages' => 'Actualizați limbile pentru utilizatori',
    'update_user_languages_warning' => 'Acest lucru va actualiza limba pentru toți utilizatorii de pe site-ul dvs., chiar dacă au selectat deja una!',
    'updated_user_languages' => 'Limbile utilizatorilor au fost actualizate.',
    'installed_languages' => 'Toate limbile noi au fost instalate cu succes.',
    'default_timezone' => 'Fusul orar prestabilit',
    'registration' => 'Înregistrare',
    'enable_registration' => 'Activați înregistrarea?',
    'verify_with_mcassoc' => 'Verificați conturile de utilizator cu MCAssoc?',
    'email_verification' => 'Activați verificarea prin e-mail?',
    'registration_settings_updated' => 'Setările de înregistrare au fost actualizate cu succes.',
    'homepage_type' => 'Tipul paginii principale',
    'post_formatting_type' => 'Tip de formatare textarea',
    'portal' => 'Portal',
    'private_profiles' => 'Profiluri private',
    'missing_sitename' => 'Introduceți un nume de site între 2 și 64 de caractere.',
    'missing_contact_address' => 'Introduceți o adresă de e-mail de la 3 până la 255 de caractere.',
    'use_friendly_urls' => 'SEO URL',
    'use_friendly_urls_help' => 'IMPORTANT: Serverul dvs. trebuie să fie configurat pentru a permite utilizarea fișierelor mod_rewrite și .htaccess pentru a funcționa.',
    'config_not_writable' => 'Fisierul <strong>core/config.php</strong> nu are permisiunea de scriere. Vă rugăm să verificați permisiunile.',
    'settings_updated_successfully' => 'Setările generale au fost actualizate cu succes.',
    'social_media' => 'Social Media',
    'youtube_url' => 'Adresă Youtube',
    'twitter_url' => 'Adresă Twitter',
    'twitter_dark_theme' => 'Utilizați tema închisă Twitter?',
    'discord_id' => 'ID Server Discord',
    'discord_widget_theme' => 'Temă Widget Discord',
    'dark' => 'Închisă',
    'light' => 'Deschisă',
    'google_plus_url' => 'Adresă Google Plus',
    'facebook_url' => 'Adresă Facebook',
    'social_media_settings_updated' => 'Setările sociale au fost actualizate cu succes.',
    'successfully_updated' => 'Actualizat cu succes',
    'debugging_and_maintenance' => 'Depanare și întreținere',
    'maintenance' => 'Întreținere',
    'debugging_settings_updated_successfully' => 'Setările de depanare au fost actualizate cu succes.',
    'enable_debug_mode' => 'Activați modul de depanare?',
    'force_https' => 'Forțează https?',
    'force_https_help' => 'Dacă este activată setarea, toate solicitările către site-ul dvs. vor fi redirecționate către https de la http. Trebuie să aveți un certificat SSL valabil activ pentru ca aceasta să funcționeze corect.',
    'force_www' => 'Forţează www?',
    'contact_email_address' => 'Adresa e-mail de contact',
    'emails' => 'E-mailuri',
    'email_errors' => 'Erori ale e-mailului',
    'registration_email' => 'E-mail de înregistre',
    'contact_email' => 'E-mail de contact',
    'forgot_password_email' => 'E-mail de resetare parolă',
    'unknown' => 'Necunoscut',
    'delete_email_error' => 'Ștergeți eroarea',
    'confirm_email_error_deletion' => 'Sigur doriți să ștergeți această eroare?',
    'viewing_email_error' => 'Vizualizare eroare',
    'unable_to_write_email_config' => 'Imposibil de scris în fișierul <strong>core/email.php</core>. Verificați permisiunile fișierelor.',
    'enable_mailer' => 'Activati PHPMailer?',
    'enable_mailer_help' => 'Activați această opțiune dacă e-mailurile nu sunt trimise în mod implicit. Utilizarea programului PHPMailer necesită un serviciu care să poată trimite e-mailuri, cum ar fi Gmail sau un furnizor SMTP.',
    'outgoing_email' => 'Adresa e-mail afisata la iesire',
    'outgoing_email_info' => 'Aceasta este adresa de e-mail pe care NumelessMC o va utiliza pentru a trimite e-mailuri si care se va afișa utilizatorilor.',
    'mailer_settings_info' => 'Următoarele câmpuri sunt necesare dacă ați activat PHPMailer. Pentru mai multe informații despre completarea acestor câmpuri, consultați <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-SMTP-with-Nameless-(e.g.-Gmail-or-Outlook)" target="_blank">wiki-ul</a>.',
    'host' => 'Gazdă',
    'email_port' => 'Port',
    'email_password_hidden' => 'Parola nu este afișată din motive de securitate.',
    'send_test_email' => 'Trimiteți e-mail de încercare (test)',
    'send_test_email_info' => 'Următorul buton va încerca să trimită un e-mail la adresa dvs. de e-mail, <strong>{x}</strong>. Orice erori întâmpinate în timp ce trimiteți e-mailul vor fi afișate.', // Don't replace {x}
    'send' => 'Trimite',
    'test_email_error' => 'Eroare e-mail de test:',
    'test_email_success' => 'Email-ul de test a fost trimis cu succes!',
    'terms_error' => 'Asigurați-vă că termenii și condițiile nu depășesc 100000 de caractere.',
    'privacy_policy_error' => 'Asigurați-vă că politica de confidențialitate nu depășește 100000 de caractere.',
    'terms_updated' => 'Termenii și condițiile s-au actualizat cu succes.',
    'avatars' => 'Avatare',
    'allow_custom_avatars' => 'Permiteți utilizatorului să utilizeze avatare personalizate?',
    'default_avatar' => 'Avatar implicit',
    'custom_avatar' => 'Avatar personalizat',
    'minecraft_avatar' => 'Avatar Minecraft',
    'minecraft_avatar_source' => 'Sursă avatar Minecraft',
    'built_in_avatars' => 'Serviciu încorporat',
    'minecraft_avatar_perspective' => 'Avatar Minecraft în perspectivă',
    'face' => 'Față',
    'head' => 'Cap',
    'bust' => 'Bust',
    'select_default_avatar' => 'Selectați un nou avatar implicit:',
    'no_avatars_available' => 'Nu există avatare disponibile. Vă rugăm să încărcați mai întâi o imagine nouă.',
    'avatar_settings_updated_successfully' => 'Setările avatarelor s-au actualizat cu succes.',
    'navigation' => 'Navigare',
    'navbar_order' => 'Număr de ordine',
    'navbar_order_instructions' => 'Puteți da fiecărui element un număr mai mare de 0 pentru a ordona elemente în bara de navigare, 1 fiind primul element, iar numerele mai mari urmează după el în ordine crescătoare.',
    'navbar_icon' => 'Pictogramă',
    'navbar_icon_instructions' => 'De asemenea, puteți adăuga o pictogramă în fiecare element de navigare aici, de exemplu utilizând <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank" rel="noopener nofollow">Font Awesome</a>, <a href="https://semantic-ui.com/elements/icon.html" target="_blank" rel="noopener nofollow">Semantic UI</a>.',
    'navigation_settings_updated_successfully' => 'Setările de navigare au fost actualizate cu succes.',
    'dropdown_items' => 'Elemente meniu dropdown',
    'enable_page_load_timer' => 'Activați cronometrarea încărcării paginii?',
    'google_recaptcha' => 'Activați Google reCAPTCHA?',
    'recaptcha_site_key' => 'Cheie site reCAPTCHA',
    'recaptcha_secret_key' => 'Cheie secreta reCAPTCHA',
    'registration_disabled_message' => 'Mesaj afișat când înregistrarea este dezactivată',
    'enable_nicknames_on_registration' => 'Activați poreclele pentru utilizatorii ce se înregistrează?',
    'validation_promote_group' => 'Grupul de post-validare',
    'validation_promote_group_info' => 'Acesta este grupul în care un utilizator va fi promovat după ce și-a validat contul.',
    'login_method' => 'Metoda de conectare',
    'privacy_and_terms' => 'Politica de confidențialitate și termenii și condițiile',

    // Reactions
    'icon' => 'Iconiță',
    'type' => 'Tip',
    'positive' => 'Pozitiv',
    'neutral' => 'Neutru',
    'negative' => 'Negativ',
    'editing_reaction' => 'Modificați reacția',
    'html' => 'HTML iconiță',
    'new_reaction' => '<i class="fa fa-plus-circle"></i> Reacție nouă',
    'creating_reaction' => 'Adaugă reacție',
    'no_reactions' => 'Nu există încă reacții.',
    'reaction_created_successfully' => 'Reacția a fost creată cu succes.',
    'reaction_edited_successfully' => 'Reacția a fost editată cu succes.',
    'reaction_deleted_successfully' => 'Reacția a fost ștearsă cu succes.',
    'name_required' => 'Este necesar un nume',
    'html_required' => 'Câmpul HTML iconiță este necesar',
    'type_required' => 'Este necesar un tip pentru reacție',
    'name_maximum_16' => 'Numele nu trebuie să depășească 16 caractere',
    'html_maximum_255' => 'Câmpul HTML iconiță nu trebuie să depășească 255 de caractere',
    'confirm_delete_reaction' => 'Sigur doriți să ștergeți această reacție?',

    // Custom profile fields
    'custom_fields' => 'Câmpuri personalizate pentru profil',
    'new_field' => '<i class="fa fa-plus-circle"></i> Adăugați un câmp nou',
    'required' => 'Necesar',
    'editable' => 'Editabil',
    'public' => 'Public',
    'text' => 'Text',
    'textarea' => 'Zona Text',
    'date' => 'Dată',
    'creating_profile_field' => 'Adaugă câmp personalizat pentru profil',
    'editing_profile_field' => 'Editare câmp personalizat pentru profil',
    'field_name' => 'Nume câmp',
    'profile_field_required_help' => 'Câmpurile obligatorii trebuie completate de utilizator și vor apărea în timpul înregistrării.',
    'profile_field_public_help' => 'Câmpurile publice vor fi afișate tuturor utilizatorilor, dar dacă acest lucru este dezactivat, numai moderatorii pot vizualiza valorile.',
    'profile_field_error' => 'Introduceți un nume de câmp între 2 și 16 caractere.',
    'description' => 'Descriere',
    'display_field_on_forum' => 'Afișați câmpul pe forum?',
    'profile_field_forum_help' => 'Dacă este activată, câmpul va fi afișat în dreptul postărilor pe forum sub numele utilizatorului.',
    'profile_field_editable_help' => 'Dacă este activată, utilizatorii vor avea permisiunea de a edita câmpul în setările profilului.',
    'no_custom_fields' => 'Momentan nu a fost adăugat nici un câmp personalizat pentru profil.',
    'profile_field_updated_successfully' => 'Câmpul de profil a fost actualizat cu succes.',
    'profile_field_created_successfully' => 'Câmpul de profil a fost creat cu succes.',
    'profile_field_deleted_successfully' => 'Câmpul de profil a fost șters cu succes.',

    // Minecraft
    'enable_minecraft_integration' => 'Activați integrarea Minecraft?',
    'mc_service_status' => 'Starea serviciului Minecraft',
    'service_query_error' => 'Nu se poate obține starea serviciului.',
    'authme_integration' => 'Integrare AuthMe',
    'authme_integration_info' => 'Atunci când integrarea AuthMe este activată, utilizatorii se pot înscrie numai în joc.',
    'enable_authme' => 'Activați integrarea AuthMe?',
    'authme_db_address' => 'IP-ul (gazda) bazei de date AuthMe',
    'authme_db_port' => 'Portul bazei de date AuthMe',
    'authme_db_name' => 'Numele bazei de date AuthMe',
    'authme_db_user' => 'Utilizatorul bazei de date AuthMe',
    'authme_db_password' => 'Parola bazei de date AuthMe',
    'authme_db_password_hidden' => 'Parola pentru baza de date AuthMe este ascunsă din motive de securitate.',
    'authme_hash_algorithm' => 'Algoritmul de criptare AuthMe',
    'authme_db_table' => 'Tabel utilizatori AuthMe',
    'enter_authme_db_details' => 'Vă rugăm să introduceți datele valide ale bazei de date.',
    'authme_password_sync' => 'Sincronizați parolele AuthMe?',
    'authme_password_sync_help' => 'Dacă este activată, ori de câte ori parola utilizatorului este actualizată, parola va fi actualizată și pe site.',
    'minecraft_servers' => 'Servere Minecraft',
    'account_verification' => 'Verificarea contului Minecraft',
    'server_banners' => 'Bannere servere',
    'banner_background' => 'Alegeți imaginea de fundal pentru bannerul serverului:',
    'query_errors' => 'Erori de interogare',
    'add_server' => '<i class="fa fa-plus-circle"></i> Adăugare Server',
    'no_servers_defined' => 'Momentan nu există nici un server.',
    'query_settings' => 'Setări pentru interogări',
    'default_server' => 'Serverul implicit',
    'no_default_server' => 'Nu există server implicit.',
    'external_query' => 'Utilizați o interogare externă?',
    'external_query_help' => 'Dacă interogarea serverului implicită nu funcționează, activați această opțiune.',
    'adding_server' => 'Adăugare server',
    'server_name' => 'Nume server',
    'server_address' => 'Adresă server',
    'server_address_help' => 'Aceasta este adresa IP sau domeniul folosit pentru a vă conecta la serverul dvs., fără port.',
    'server_port' => 'Port server',
    'parent_server' => 'Server părinte',
    'parent_server_help' => 'Un server părinte este de obicei instanța Bungee la care este conectat serverul, dacă există.',
    'no_parent_server' => 'Fără server părinte',
    'bungee_instance' => 'Instanță BungeeCord?',
    'bungee_instance_help' => 'Selectați această opțiune dacă serverul este o instanță BungeeCord.',
    'server_query_information' => 'Pentru a afișa o listă cu jucători online pe site-ul dvs. web, serverul <strong>trebuie</strong> să aibă opțiunea \'enable-query\' activată în fişierul <strong>server.properties</strong>.',
    'enable_status_query' => 'Activați interogarea de stare?',
    'status_query_help' => 'Dacă aceasta este activată, pagina de stare va afișa acest server ca fiind online sau offline.',
    'show_ip_on_status_page' => 'Afișați adresa IP pe pagina de stare?',
    'show_ip_on_status_page_info' => 'Dacă această opțiune este activată, utilizatorii vor putea vizualiza și copia adresa IP a serverului atunci când vizualizează pagina de stare.',
    'enable_player_list' => 'Activați lista de jucători?',
    'pre_1.7' => 'Versiunea Minecraft mai veche decât 1.7?',
    'player_list_help' => 'Dacă această opțiune este activată, pagina de stare va afișa o listă de jucători online.',
    'server_query_port' => 'Port de interogare server',
    'server_query_port_help' => 'Aceasta este opțiunea \'query.port\' din fișierul server.properties al serverului dvs., cu condiția ca opțiunea \'enable-query\' din același fișier să fie setată la \'true\'.',
    'server_name_required' => 'Introduceți numele serverului',
    'server_name_minimum' => 'Asigurați-vă că numele serverului dvs. are cel puțin un caracter',
    'server_name_maximum' => 'Asigurați-vă că numele serverului este de maxim 20 de caractere',
    'server_address_required' => 'Introduceți adresa serverului',
    'server_address_minimum' => 'Asigurați-vă că adresa serverului este de minim un caracter',
    'server_address_maximum' => 'Asigurați-vă că adresa serverului este de maxim 64 de caractere',
    'server_port_required' => 'Introduceți portul serverului',
    'server_port_minimum' => 'Asigurați-vă că portul dvs. de server are cel puțin 2 caractere',
    'server_port_maximum' => 'Asigurați-vă că portul de server este de maxim 5 caractere',
    'server_parent_required' => 'Selectați un server părinte',
    'query_port_maximum' => 'Asigurați-vă că portul de interogare este de maxim 5 caractere',
    'server_created' => 'Serverul a fost salvat cu succes.',
    'confirm_delete_server' => 'Sigur doriți să ștergeți acest server?',
    'server_updated' => 'Serverul a fost actualizat cu succes.',
    'editing_server' => 'Editare server',
    'server_deleted' => 'Serverul a fost șters cu succes.',
    'unable_to_delete_server' => 'Nu se poate șterge serverul.',
    'leave_port_empty_for_srv' => 'Puteți lăsa portul gol dacă acesta este 25565 sau dacă domeniul dvs. utilizează o înregistrare SRV.',
    'viewing_query_error' => 'Vizualizare erorii de interogare',
    'confirm_query_error_deletion' => 'Sigur doriți să ștergeți această eroare de interogare?',
    'no_query_errors' => 'Nu s-au înregistrat erori de interogare.',
    'new_banner' => '<i class="fa fa-plus-circle"></i> Adăugare Banner',
    'purge_errors' => 'Golește erorile',
    'confirm_purge_errors' => 'Sigur doriți să eliminați toate erorile?',
    'email_errors_purged_successfully' => 'Eroare de e-mail au fost eliminate cu succes.',
    'error_deleted_successfully' => 'Eroarea a fost ștearsă cu succes.',
    'no_email_errors' => 'Nu s-au înregistrat erori de e-mail.',
    'email_settings_updated_successfully' => 'Setările pentru e-mail au fost actualizate cu succes.',
    'content' => 'Conţinut',
    'mcassoc_help' => 'Mcassoc este un serviciu extern care poate fi folosit pentru a verifica dacă utilizatorii dețin contul Minecraft la care s-au înregistrat. Pentru a utiliza această funcție, va trebui să vă înscrieți pentru o cheie distribuită <a href="https://mcassoc.lukegb.com/" target="_blank">aici</a>.',
    'mcassoc_key' => 'Cheie partajată mcassoc',
    'mcassoc_instance' => 'Cheia instanței mcassoc',
    'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">Apăsați aici pentru a genera o cheie de instanță</a>',
    'mcassoc_error' => 'Asigurați-vă că ați introdus corect cheia dvs. partajată și că ați generat corect o cheie de instanță.',
    'updated_mcassoc_successfully' => 'Setările mcassoc s-au actualizat cu succes.',
    'force_premium_accounts' => 'Forțează deținere unui cont de Minecraft permium?',
    'status_page' => 'Activați pagina de stare <small>(status)</small>?',
    'minecraft_settings_updated_successfully' => 'Setările au fost actualizate cu succes.',
    'server_id_x' => 'ID server: {x}', // Don't replace {x}
    'server_information' => 'Informații despre server',
    'query_information' => 'Informații privind interogările',
    'query_errors_purged_successfully' => 'Erorile de interogare au fost eliminate cu succes.',
    'query_error_deleted_successfully' => 'Eroarea de interogare a fost ștearsă cu succes.',
    'banner_updated_successfully' => 'Bannerul a fost actualizat cu succes. Ar putea dura ceva timp pentru ca modificările să fie vizibile.',

    // Modules
    'modules_installed_successfully' => 'Toate modulele noi au fost instalate cu succes (daca exista).',
    'enabled' => 'Activat',
    'disabled' => 'Dezactivat',
    'enable' => 'Activează',
    'disable' => 'Dezactivează',
    'module_enabled' => 'Modulul este activat.',
    'module_disabled' => 'Modulul este dezactivat.',
    'author' => 'Autor:',
    'author_x' => 'Autor: {x}', // Don't replace {x}
    'module_outdated' => 'Am descoperit că acest modul este destinat pentru Nameless versiunea {x}, dar utilizati Nameless versiunea {y}', // Don't replace "{x}" or "{y}"
    'find_modules' => 'Găsiți module',
    'view_all_modules' => 'Vizualizați toate modulele',
    'unable_to_retrieve_modules' => 'Imposibil de obținut module',
    'module' => 'Modul',
    'unable_to_enable_module' => 'Modulele incompatibile nu pot fi activate.',

    // Styles
    'templates' => 'Șabloane',
    'panel_templates' => 'Șabloane panou control',
    'template_outdated' => 'Am detectat că șablonul dvs. este destinat versiunii NamelessMC {x}, dar executați versiunea NamelessMC {y}.', // Don't replace "{x}" or "{y}"
    'active' => 'Activ',
    'deactivate' => 'Dezactivare',
    'activate' => 'Activare',
    'warning_editing_default_template' => 'Avertizare! Se recomandă să nu editați șablonul implicit.',
    'images' => 'Imagini',
    'upload_new_image' => 'Încărcați o imagine nouă',
    'reset_background' => 'Resetați fundalul',
    'install' => '<i class="fa fa-plus-circle"></i> Instalare',
    'template_updated' => 'Șablon actualizat cu succes.',
    'default' => 'Implicit',
    'make_default' => 'Setează implicit',
    'default_template_set' => 'Șablonul prestabilit a fost setat la {x} cu succes.', // Don't replace {x}
    'template_deactivated' => 'Șablonul a fost dezactivat.',
    'template_activated' => 'Șablonul a fost activat.',
    'permissions' => 'Permisiuni',
    'setting_perms_for_x' => 'Setați permisiunile pentru șablonul {x}', // Don't replace {x}
    'templates_installed_successfully' => 'Toate șabloanele noi au fost instalate cu succes.',
    'confirm_delete_template' => 'Sigur doriți să ștergeți acest șablon?',
    'delete' => 'Șterge',
    'template_deleted_successfully' => 'Șablonul a fost șters cu succes.',
    'background_image_x' => 'Imagine de fundal: <strong>{x}</strong>', // Don't replace {x}
    'banner_image_x' => 'Imagine banner: <strong>{x}</strong>', // Don't replace {x}
    'background_directory_not_writable' => 'Directorul <strong>uploads/backgrounds</strong> nu poate fi scris!',
    'template_banners_directory_not_writable' => 'Directorul <strong>uploads/template_banners</strong> nu poate fi scris!',
    'template_banner_reset_successfully' => 'Bannerul a fost resetat cu succes.',
    'template_banner_updated_successfully' => 'Bannerul a fost actualizat cu succes.',
    'reset_banner' => 'Resetați bannerul',
    'find_templates' => 'Găsiți șabloane',
    'view_all_templates' => 'Vizualizați toate șabloanele',
    'unable_to_retrieve_templates' => 'Nu s-au putut obține șabloanele',
    'template' => 'Șablon',
    'stats' => 'Statistici',
    'downloads_x' => 'Descărcări: {x}',
    'views_x' => 'Vizualizări: {x}',
    'rating_x' => 'Evaluare: {x}',
    'editing_template_x' => 'Editare șablon: {x}', // Don't replace {x}
	'editing_template_file_in_template' => 'Editare fișier {x} din șablonul {y}', // Don't replace {x} or {y}
    'cant_write_to_template' => 'Nu se poate scrie fișierul! Verificați permisiunile fișierelor.',
	'unable_to_delete_template' => 'Nu se poate șterge complet șablonul. Verificați permisiunile fișierelor.',
	'background_reset_successfully' => 'Imaginea de fundal a fost resetată cu succes.',
	'background_updated_successfully' => 'Imaginea de fundal a fost actualizată cu succes.',
	'unable_to_enable_template' => 'Șabloanele incompatibile nu pot fi activate.',

    // Users & groups
    'users' => 'Utilizatori',
    'groups' => 'Grupuri',
    'group' => 'Grup',
    'new_user' => '<i class="fa fa-plus-circle"></i> Utilizator nou',
    'creating_new_user' => 'Creați un utilizator nou',
    'registered' => 'Înregistrat',
    'user_created' => 'Utilizatorul a fost creat cu succes.',
    'cant_delete_root_user' => 'Nu puteți șterge utilizatorul root (principal)!',
    'cant_modify_root_user' => 'Nu puteți modifica grupul de utilizatori al utilizatorului root (principal)!',
    'user_deleted' => 'Utilizatorul a fost șters cu succes.',
    'confirm_user_deletion' => 'Sigur doriți să ștergeți utilizatorul <strong>{x}</strong>?', // Don't replace {x}
    'validate_user' => 'Activați utilizatorul',
    'update_uuid' => 'Actualizare UUID',
    'update_mc_name' => 'Actualizare nume Minecraft',
    'reset_password' => 'Resetează parola',
    'punish_user' => 'Sanctionați utilizatorul',
    'delete_user' => 'Ștergeți utilizatorul',
    'minecraft_uuid' => 'UUID Minecraft',
    'other_actions' => 'Alte acțiuni',
    'disable_avatar' => 'Dezactivare avatar',
    'select_user_group' => 'Trebuie să selectați un grup de utilizatori.',
    'uuid_max_32' => 'UUID-ul trebuie să aibă maxim 32 de caractere.',
    'title_max_64' => 'Titlul utilizatorului trebuie să aibă maximum 64 de caractere.',
    'group_id' => 'ID group',
    'name' => 'Nume',
    'title' => 'Titlul utilizatorului',
    'new_group' => '<i class="fa fa-plus-circle"></i> Grup nou',
    'group_name_required' => 'Introduceți un nume de grup.',
    'group_name_minimum' => 'Asigurați-vă că numele grupului este de cel puțin 2 caractere.',
    'group_name_maximum' => 'Asigurați-vă că numele grupului este de maximum 20 de caractere.',
    'creating_group' => 'Adăugați un grup nou',
    'group_html_maximum' => 'Asigurați-vă că HTML-ul grupului nu depășește 1024 de caractere.',
    'group_html' => 'HTML grup',
    'group_html_lg' => 'HTML grup (mare) ',
    'group_username_colour' => 'Culoarea grupului',
    'group_staff' => 'Grupul este un grup de personal (staff)?',
    'delete_group' => 'Ștergeți grupul',
    'confirm_group_deletion' => 'Sigur doriți să ștergeți grupul {x}?', // Don't replace {x}
    'group_not_exist' => 'Grupul specificat nu există.',
    'secondary_groups' => 'Grupuri secundare',
    'secondary_groups_info' => 'Utilizatorul va obține orice permisiuni suplimentare din partea acestor grupuri',
    'unable_to_update_uuid' => 'Imposibil de actualizat UUID-ul.',
    'default_group' => 'Grupul este grupul implicit pentru utilizatorii noi?',
    'user_id' => 'ID utilizator',
    'uuid' => 'UUID',
	'group_order' => 'Număr de ordine',
	'group_created_successfully' => 'Grupul a fost creat cu succes.',
	'group_updated_successfully' => 'Grupul a fost actualizat cu succes.',
	'group_deleted_successfully' => 'Grupul a fost șters cu succes.',
	'unable_to_delete_group' => 'Nu se poate șterge un grup prestabilit sau un grup care poate vedea StaffCP. Actualizați mai întâi setările grupului!',
	'can_view_staffcp' => 'Grupul poate vizualiza StaffCP?',
	'user' => 'Utilizator',
	'user_validated_successfully' => 'Utilizatorul a fost validat cu succes.',
	'user_updated_successfully' => 'Utilizatorul a fost actualizat cu succes.',
	'editing_user_x' => 'Editare utilizator: {x}', // Don't replace {x}
	'details' => 'Detalii',

    // Permissions
    'select_all' => 'Selectează tot',
    'deselect_all' => 'Deselectează tot',
    'background_image' => 'Imagine de fundal',
    'can_edit_own_group' => 'Poate edita permisiunile grupurilor proprii',
    'permissions_updated_successfully' => 'Permisiunile s-au actualizat cu succes.',
    'cant_edit_this_group' => 'Nu puteți edita permisiunile acestui grup!',

    // General Admin language
    'task_successful' => 'Sarcina a reușit.',
    'invalid_action' => 'Acțiune nevalidă.',
    'enable_night_mode' => 'Activați modul de noapte',
    'disable_night_mode' => 'Dezactivați modul de noapte',
    'view_site' => 'Vizualizați site-ul',
    'signed_in_as_x' => 'Conectat drept {x}', // Don't replace {x}
    'warning' => 'Avertizare',

    // Maintenance
    'maintenance_mode' => 'Modul de întreținere',
    'maintenance_enabled' => 'Modul de întreținere este activat în prezent.',
    'enable_maintenance_mode' => 'Activați modul de întreținere?',
    'maintenance_mode_message' => 'Mesajul de întreținere',
    'maintenance_message_max_1024' => 'Asigurați-vă că mesajul de întreținere este de maximum 1024 de caractere.',

    // Security
    'acp_logins' => 'Conectări în Panoul de Control',
    'please_select_logs' => 'Selectați jurnalele de afișat',
    'ip_address' => 'Adresa IP',
    'template_changes' => 'Modificări șabloane',
    'file_changed' => 'Fișier modificat',
    'all_logs' => 'Toate jurnalele',
    'action' => 'Acțiune',
    'action_info' => 'Informații despre acțiune',

    // Updates
    'update' => 'Actualizare',
    'current_version_x' => 'Versiune curentă: <strong>{x}</strong>', // Don't replaec {x}
    'new_version_x' => 'Versiune nouă: <strong>{x}</strong>', // Don't replace {x}
    'new_update_available' => 'Există o nouă actualizare disponibilă.',
    'new_urgent_update_available' => 'Există o nouă actualizare urgentă disponibilă. Actualizați cât mai curând posibil!',
    'up_to_date' => 'Instalarea dvs. NamelessMC este actualizată!',
    'urgent' => 'Această actualizare este o actualizare urgentă (importantă).',
    'changelog' => 'Istoric modificări',
    'update_check_error' => 'A apărut o eroare la verificarea pentru actualizări:',
    'instructions' => 'Instrucțiuni',
    'download' => '<i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Descarcă',
    'install_confirm' => 'Asigurați-vă că ați descărcat pachetul și ați încărcat mai întâi fișierele conținute!',
    'check_again' => 'Verificați din nou',

    // Widgets
    'widgets' => 'Piese',
    'widget_enabled' => 'Piesă activată.',
    'widget_disabled' => 'Piesă dezactivată .',
    'widget_updated' => 'Piesă actualizată.',
    'editing_widget_x' => 'Modificare piesă: {x}', // Don't replace {x}
    'module_x' => 'Module: {x}', // Don't replace {x}
    'widget_order' => 'Ordinea piesei',

    // Online users widget
    'include_staff_in_user_widget' => 'Includeți membrii (staff) personalului în widget-ul utilizatorului?',
    'show_nickname_instead_of_username' => 'Afișați porecla utilizatorului în locul numelui de utilizator?',

    // Custom Pages
    'pages' => 'Pagini',
    'custom_pages' => 'Pagini personalizate',
    'new_page' => '<i class="fa fa-plus-circle"></i> Pagină nouă',
    'no_custom_pages' => 'Nici o pagină nu a fost creată încă.',
    'creating_new_page' => 'Creare pagină',
    'page_title' => 'Titlu pagină',
    'page_path' => 'Adresă pagină (cu /, ex: /exemplu)',
    'page_icon' => 'Pictogramă pagină',
    'page_link_location' => 'Locație Link',
    'page_link_navbar' => 'Navigare',
    'page_link_footer' => 'Subsol',
    'page_link_more' => 'Meniul "Mai multe"',
    'page_link_none' => 'Fară',
    'page_content' => 'Conținutul paginii',
    'page_redirect' => 'Redirecționează pagina?',
    'page_redirect_to' => 'Adresa pentru redirecționare (cu http://)',
    'unsafe_html' => 'Permiteți HTML (nesigur) ?',
    'unsafe_html_warning' => 'Activarea acestei opțiuni înseamnă că orice HTML poate fi folosit pe pagină, incluzând JavaScript potențial periculos. Activați acest lucru numai dacă sunteți sigur că codul dvs. HTML este sigur.',
    'include_in_sitemap' => 'Includeți în harta site-ului?',
    'sitemap_link' => 'Adresă hartă site:',
    'page_permissions' => 'Permisiuni pentru pagină',
    'view_page' => 'Vizualizare pagină?',
    'editing_page_x' => 'Editare pagină: {x}', // Don't replace {x}
    'unable_to_create_page' => 'Imposibil de creat pagina:',
    'page_title_required' => 'Este necesar un titlu pentru pagină.',
    'page_url_required' => 'Este necesară o cale pentru pagină.',
    'link_location_required' => 'Este necesar să selectați localizarea paginii.',
    'page_title_minimum_2' => 'Titlul paginii trebuie să aibă cel puțin 2 caractere.',
    'page_url_minimum_2' => 'Calea paginii trebuie să aibă cel puțin 2 caractere.',
    'page_title_maximum_30' => 'Titlul paginii trebuie să aibă maximum 30 de caractere.',
    'page_icon_maximum_64' => 'Pictograma paginii trebuie să aibă maximum 64 de caractere.',
    'page_url_maximum_20' => 'Calea paginii trebuie să aibă maximum 20 de caractere.',
    'page_content_maximum_100000' => 'Conținutul paginii trebuie să aibă maximum 100000 de caractere.',
    'page_redirect_link_maximum_512' => 'Legătura redirecționării paginii trebuie să aibă maximum 512 caractere.',
    'confirm_delete_page' => 'Sigur doriți să ștergeți această pagină?',
    'page_created_successfully' => 'Pagina a fost creată cu succes.',
    'page_updated_successfully' => 'Pagina a fost actualizată cu succes.',
    'page_deleted_successfully' => 'Pagina a fost ștearsă cu succes.',

    // API
    'api' => 'API',
    'enable_api' => 'Activare API?',
    'api_info' => 'API permite ca pluginurile și alte servicii să interacționeze cu site-ul dvs. web, cum ar fi <a href="https://namelessmc.com/resources/resource/5-namelessplugin/" target="_blank" >pluginul oficial Nameless</a>.',
    'enable_legacy_api' => 'Activați API-ul vechi?',
    'legacy_api_info' => 'API-ul vechi permite pluginurilor care utilizează API-ul versiunii vechi Nameless 1 să lucreze cu site-ul dvs. Nameless versiunea 2.',
    'confirm_api_regen' => 'Sigur doriți să vă regenerați cheia API?',
    'api_key' => 'Cheia API',
    'api_url' => 'Adresa URL API',
    'copy' => 'Copiați',
    'api_key_regenerated' => 'Cheia API a fost regenerată cu succes.',
    'api_registration_email' => 'API pentru înregistrarea e-mail',
    'show_registration_link' => 'Afișați linkul de înregistrare',
    'registration_link' => 'Link-ul de înregistrare',
    'link_to_complete_registration' => 'Adresa pentru finalizarea înregistrări:', // Don't replace {x}
    'api_verification' => 'Activați verificarea API?',
    'api_verification_info' => 'Dacă este activat, conturile pot fi verificate numai prin API, de exemplu, utilizând pluginul oficial Nameless in joc.<strong> Această opțiune va înlocui verificarea prin e-mail și conturile vor fi activate automat! </strong> <br />Ar trebui să vă configurați grupul implicit pentru a avea permisiuni limitate și apoi să actualizați grupul de post-validare (în Panou de Control -> Configurație -> Înregistrare) cu permisiunile obișnuite.',
    'enable_username_sync' => 'Activați sincronizarea numelor de utilizator?',
    'enable_username_sync_info' => 'Dacă este activat, numele de utilizator de pe site va fi actualizat pentru a se potrivi cu numele de utilizator din joc.',
    'api_settings_updated_successfully' => 'Setările API s-au actualizat cu succes.',
    'group_sync' => 'Sincronizare grup',
    'group_sync_info' => 'Puteți configura API-ul pentru a actualiza automat grupul unui utilizator de pe site atunci când i se schimbă grupul din joc. Trebuie doar să introduceți numele grupului în joc și grupul de pe site care ar trebui să se sincronizeze automat, mai jos.',
    'ingame_group' => 'Numele grupului în joc',
    'website_group' => 'Grupul de pe site',
    'set_as_primary_group' => 'Setați ca grup implicit?',
    'set_as_primary_group_info' => 'Dacă este activat, grupul principal (implicit) de pe site al utilizatorului va fi actualizat. Dacă este dezactivat, grupul din joc al utilizatorului va fi adăugat la grupurile secundare ale utilizatorului de pe site.',
    'ingame_group_maximum' => 'Asigurați-vă că numele grupului este de maxim 64 de caractere.',
    'select_website_group' => 'Selectați un grup de pe site.',
    'ingame_group_already_exists' => 'O regulă de sincronizare a fost deja creată pentru acest grup din joc.',
    'group_sync_rule_created_successfully' => 'Regula de sincronizare a grupului a fost creată cu succes.',
    'group_sync_rules_updated_successfully' => 'Regula de sincronizare a grupului a fost actualizată cu succes.',
    'group_sync_rule_deleted_successfully' => 'Regula de sincronizare a grupului a fost ștearsă cu succes.',
    'existing_rules' => 'Reguli existente',
    'new_rule' => 'Regulă nouă',

    // File uploads
    'drag_files_here' => 'Trageți fișierele aici pentru a le încărca.',
    'invalid_file_type' => 'Tip de fișier nevalid!',
    'file_too_big' => 'Fișierul este prea mare! Fișierul are {{filesize}} iar limita maximă este {{maxFilesize}}', // Don't replace {{filesize}} or {{maxFilesize}}
    'allowed_proxies' => 'Proxy-uri permise',
    'allowed_proxies_info' => 'Adăugați câte un IP pe linie pentru a separa IP-urile proxy permise.',

    // Error logs
    'error_logs' => 'Jurnale eroare',
    'notice_log' => 'Jurnale notificare',
    'warning_log' => 'Jurnale avertismente',
    'custom_log' => 'Jurnale personalizate',
    'other_log' => 'Jurnale diverse',
    'fatal_log' => 'Jurnale erori fatale',
    'log_file_not_found' => 'Fișierul jurnalului nu a fost găsit.',
    'log_purged_successfully' => 'Jurnalul a fost curățat cu succes.',

    // Hooks
    'discord_hooks' => 'Discord Hooks',
    'discord_hooks_info' => 'Trimiteți un mesaj unui canal Discord atunci când se întâmplă ceva pe site-ul dvs. Creați un Discord hook în Setările serverului de Discord -> fila Webhooks.',
    'discord_hook_url' => 'Adresa Discord webhook',
    'discord_hook_events' => 'Activează evenimentele Discord hook (Ctrl+click pentru a selecta mai multe evenimente)',
    'register_hook_info' => 'Înregistrare cont utilizator',
    'validate_hook_info' => 'Validare cont utilizator',
    'delete_hook_info' => 'Ştergere utilizator',

    // Sitemap
    'unable_to_load_sitemap_file_x' => 'Imposibil de încărcat fișierul hartă site {x}', // Don't replace {x}
    'sitemap_generated' => 'Harta site-ului a fost generată cu succes',
    'sitemap_not_writable' => 'Directorul <strong>cache/sitemaps</strong> nu poate fi scris.',
    'cache_not_writable' => 'Directorul <strong>cache</strong> nu poate fi scris.',
    'generate_sitemap' => 'Generați harta site-ului',
    'download_sitemap' => 'Descărcați harta site-ului',
    'sitemap_not_generated_yet' => 'O hartă a site-ului nu a fost încă generată!',
    'sitemap_last_generated_x' => 'Harta site-ului a fost generată: {x}', // Don't replace {x}

    // Page metadata
    'page_metadata' => 'Metadatele paginilor',
    'metadata_page_x' => 'Vizualizarea metadatelor pentru pagina: {x}', // Don't replace {x}
    'keywords' => 'Cuvinte cheie',
    'description_max_500' => 'Descrierea trebuie să aibă cel mult 500 de caractere.',
    'page' => 'Pagină',
    'metadata_updated_successfully' => 'Metadatele s-au actualizat cu succes.',

    // Dashboard
    'total_users' => 'Total utilizatori',
    'total_users_statistic_icon' => '<i class="fas fa-users"></i>',
    'recent_users' => 'Utilizatori noi',
    'recent_users_statistic_icon' => '<i class="fas fa-users"></i>',
    'average_players' => 'Media jucătorilor',
    'nameless_news' => 'Știri NamelessMC',
    'unable_to_retrieve_nameless_news' => 'Nu se pot obține cele mai recente știri',
    'confirm_leave_site' => 'Sunteți pe cale să părăsiți acest site! Sunteți sigur că doriți să vizitați <strong id="leaveSiteURL">{x}</strong> ?', // don't replace {x} and make sure it has the id leaveSiteURL
    'server_compatibility' => 'Compatibilitatea serverului',
    'issues' => 'Probleme',

    // Other
    'source' => 'Sursă',
    'support' => 'Asistenţă',
    'admin_dir_still_exists' => 'Warning! The <strong>modules/Core/pages/admin</strong> directory still exists. Please remove this directory.',
    'mod_dir_still_exists' => 'Warning! The <strong>modules/Core/pages/mod</strong> directory still exists. Please remove this directory.'
);
