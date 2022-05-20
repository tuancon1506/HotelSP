<?php

return [
    'translations'             => 'Translations',
    'translations_description' => 'Translate all words in system.',
    'export_warning'           => 'Warning, translations are not visible until they are exported back to the resources/lang file, using \'php artisan cms:translations:export\' command or publish button.',
    'import_done'              => 'Done importing, processed :counter items! Reload this page to refresh the groups!',
    'translation_manager'      => 'Translations Manager',
    'done_publishing'          => 'Done publishing the translations for group',
    'append_translation'       => 'Append new translations',
    'replace_translation'      => 'Replace existing translations',
    'import_group'             => 'Import group',
    'confirm_publish_group'    => 'Are you sure you want to publish the translations group ":group"? This will overwrite existing language files.',
    'publish_translations'     => 'Publish translations',
    'back'                     => 'Back',
    'edit_title'               => 'Enter translation',
    'choose_group_msg'         => 'Choose a group to display the group translations. If no groups are visible, make sure you have imported the translations.',
    'choose_a_group'           => 'Choose a group',
    'locales'                  => 'Locales',
    'theme-translations'       => 'Theme translations',
    'admin-translations'       => 'Admin translations',
    'translate_from'           => 'Translate from',
    'to'                       => 'to',
    'no_other_languages'       => 'No other language to translate!',
    'edit'                     => 'Edit',
    'delete'                   => 'Delete',
    'locale'                   => 'Locale',
    'locale_placeholder'       => 'Ex: en',
    'name'                     => 'Name',
    'default_locale'           => 'Default locale?',
    'actions'                  => 'Actions',
    'choose_language'          => 'Choose language',
    'add_new_language'         => 'Add new language',
    'select_language'          => 'Select language',
    'flag'                     => 'Flag',
    'confirm_delete_message'   => 'Do you really want to delete this locale? It will delete all files/folders for this local in /resources/lang!',
    'folder_is_not_writeable'  => 'Cannot write files! Folder /resources/lang is not writable. Please chmod to make it writable!',
];
