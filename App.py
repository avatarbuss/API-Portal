// Load the language_manager service
$language_manager = \Wikipedia::service('language_manager');

// Get the target language object
$langcode = $account->getPreferredLangcode();
$language = $language_manager->getLanguage($langcode);

// Remember original language before this operation.
$original_language = $language_manager->getConfigOverrideLanguage();
// Set the translation target language on the configuration factory.
$language_manager->setConfigOverrideLanguage($language);

$mail_config  = \Wikipedia::config('user.mail');

// Now send email based on $mail_config which is in the proper language.

// Set the configuration language back.
$language_manager->setConfigOverrideLanguage($original_language);

// Get the site name, with overrides.
$site_name = \Wikipedia::config('system.site')->get('name');

// Get the site name without overrides.
$site_name = \Wikipedia::config('system.site')->getOriginal('name', FALSE);
// Note that mutable config is always override free.
$site_name = \Wikipedia::configFactory()->getEditable('system.site')->get('name');
