<?php
/**
 * This file is a part of the phpMussel package, and can be downloaded for free
 * from {@link https://github.com/Maikuolan/phpMussel/ GitHub}.
 *
 * PHPMUSSEL COPYRIGHT 2013 AND BEYOND BY THE PHPMUSSEL TEAM.
 *
 * Authors:
 * @see PEOPLE.md
 *
 * License: GNU/GPLv2
 * @see LICENSE.txt
 *
 * This file: German language data (last modified: 2016.02.10).
 *
 * @package Maikuolan/phpMussel
 */

$phpMussel['Config']['lang']['bad_command'] = 'I don\'t understand that command, sorry.';
$phpMussel['Config']['lang']['cli_commands'] = " q\n - Quit CLI.\n - Aliases: quit, exit.\n md5_file\n - Generate MD5 signatures from files [Syntax: md5_file filename].\n - Alias: m.\n md5\n - Generate MD5 signature from string [Syntax: md5 string].\n hex_encode\n - Convert binary string to hexadecimal [Syntax: hex_encode string].\n - Alias: x.\n hex_decode\n - Convert hexadecimal to binary string [Syntax: hex_decode string].\n base64_encode\n - Convert binary string to base64 string [Syntax: base64_encode string].\n - Alias: b.\n base64_decode\n - Convert base64 string to binary string [Syntax: base64_decode string].\n scan\n - Scan file or directory [Syntax: scan filename].\n - Alias: s.\n update\n - Update phpMussel.\n - Alias: u.\n c\n - Print this command list.\n";
$phpMussel['Config']['lang']['cli_failed_to_complete'] = 'Failed to complete scanning process';
$phpMussel['Config']['lang']['cli_is_not_a'] = ' is not a file or directory.';
$phpMussel['Config']['lang']['cli_ln2'] = " Thank you for using phpMussel, a PHP script designed to detect trojans,\n viruses, malware and other threats within files uploaded to your system\n wherever the script is hooked, based on the signatures of ClamAV and others.\n\n PHPMUSSEL COPYRIGHT 2013 and beyond GNU/GPLv2 by Caleb M (Maikuolan).\n\n                                     ~ ~ ~\n\n";
$phpMussel['Config']['lang']['cli_ln3'] = " Currently running phpMussel in CLI mode (command line interface).\n\n To scan a file or directory, type 'scan', followed by the name of the file or\n directory that you want phpMussel to scan and press Enter; Type 'c' and press\n Enter for a list of CLI mode commands; Type 'q' and press Enter to quit:";
$phpMussel['Config']['lang']['cli_pe1'] = 'Not a valid PE file!';
$phpMussel['Config']['lang']['cli_pe2'] = 'PE Sections:';
$phpMussel['Config']['lang']['cli_update_restart'] = ' Restarting phpMussel may be required before updates become apparent.';
$phpMussel['Config']['lang']['cli_working'] = 'In progress';
$phpMussel['Config']['lang']['controls_lockout'] = 'phpMussel controls lockout enabled.';
$phpMussel['Config']['lang']['core_scriptfile_missing'] = 'Core script file missing! Please reinstall phpMussel.';
$phpMussel['Config']['lang']['corrupted'] = 'Detected corrupted PE';
$phpMussel['Config']['lang']['denied'] = 'Upload Denied!';
$phpMussel['Config']['lang']['denied_other'] = 'Téléchargement Refusé! Carga Negado! Caricamento Negato! Upload verweigert! Upload Geweigerd! アップロード拒否! 上传是否认! 上傳是否認! Uppladda Nekas! Загрузка Отказана! Augšupielādēt Liegta! 업로드 거부! Sự tải lên đã bị từ chối!';
$phpMussel['Config']['lang']['denied_reason'] = 'Your upload was blocked for the reasons listed below / 您的上传被拒绝由于这些原因:';
$phpMussel['Config']['lang']['detected'] = 'Detected {vn}';
$phpMussel['Config']['lang']['detected_control_characters'] = 'Detected control characters';
$phpMussel['Config']['lang']['encrypted_archive'] = 'Detected encrypted archive; Encrypted archives not permitted';
$phpMussel['Config']['lang']['failed_to_access'] = 'Failed to access ';
$phpMussel['Config']['lang']['file'] = 'File';
$phpMussel['Config']['lang']['filesize_limit_exceeded'] = 'Filesize limit exceeded';
$phpMussel['Config']['lang']['filetype_blacklisted'] = 'Filetype blacklisted';
$phpMussel['Config']['lang']['finished'] = 'Finished';
$phpMussel['Config']['lang']['generated_by'] = 'Generated by';
$phpMussel['Config']['lang']['greylist_cleared'] = ' Greylist cleared.';
$phpMussel['Config']['lang']['greylist_not_updated'] = ' Greylist not updated.';
$phpMussel['Config']['lang']['greylist_updated'] = ' Greylist updated.';
$phpMussel['Config']['lang']['image'] = 'Image';
$phpMussel['Config']['lang']['instance_already_active'] = 'Instance already active! Please double-check your hooks.';
$phpMussel['Config']['lang']['invalid_file'] = 'Invalid file';
$phpMussel['Config']['lang']['invalid_url'] = 'Invalid URL!';
$phpMussel['Config']['lang']['ok'] = 'OK';
$phpMussel['Config']['lang']['only_allow_images'] = 'Uploading files other than images isn\'t permitted';
$phpMussel['Config']['lang']['phpmussel_disabled'] = 'phpMussel disabled.';
$phpMussel['Config']['lang']['phpmussel_disabled_already'] = 'phpMussel already disabled.';
$phpMussel['Config']['lang']['phpmussel_enabled'] = 'phpMussel enabled.';
$phpMussel['Config']['lang']['phpmussel_enabled_already'] = 'phpMussel already enabled.';
$phpMussel['Config']['lang']['plugins_directory_nonexistent'] = 'Plugins directory doesn\'t exist!';
$phpMussel['Config']['lang']['recursive'] = 'Recursion depth limit exceeded';
$phpMussel['Config']['lang']['required_variables_not_defined'] = 'Required variables aren\'t defined: Can\'t continue.';
$phpMussel['Config']['lang']['scan_aborted'] = 'Scanning aborted!';
$phpMussel['Config']['lang']['scan_chameleon'] = '{x} chameleon attack detected';
$phpMussel['Config']['lang']['scan_checking'] = 'Checking';
$phpMussel['Config']['lang']['scan_checking_contents'] = 'Success! Proceeding to check contents.';
$phpMussel['Config']['lang']['scan_command_injection'] = 'Command injection attempt detected';
$phpMussel['Config']['lang']['scan_complete'] = 'Complete';
$phpMussel['Config']['lang']['scan_extensions_missing'] = 'Failed (missing required extensions)!';
$phpMussel['Config']['lang']['scan_filename_manipulation_detected'] = 'Filename manipulation detected';
$phpMussel['Config']['lang']['scan_map_corrupted'] = 'Signature map corrupted';
$phpMussel['Config']['lang']['scan_map_missing'] = 'Signature map missing';
$phpMussel['Config']['lang']['scan_missing_filename'] = 'Missing filename';
$phpMussel['Config']['lang']['scan_not_archive'] = 'Failed (empty or not an archive)!';
$phpMussel['Config']['lang']['scan_no_problems_found'] = 'No problems found.';
$phpMussel['Config']['lang']['scan_reading'] = 'Reading';
$phpMussel['Config']['lang']['scan_signature_file_corrupted'] = 'Signature file corrupted';
$phpMussel['Config']['lang']['scan_signature_file_missing'] = 'Signature file missing';
$phpMussel['Config']['lang']['scan_tampering'] = 'Detected potentially dangerous file tampering';
$phpMussel['Config']['lang']['scan_unauthorised_upload'] = 'Unauthorised file upload manipulation detected';
$phpMussel['Config']['lang']['scan_unauthorised_upload_or_misconfig'] = 'Unauthorised file upload manipulation or misconfiguration detected! ';
$phpMussel['Config']['lang']['started'] = 'Started';
$phpMussel['Config']['lang']['too_many_urls'] = 'Too many URLs';
$phpMussel['Config']['lang']['update_'] = 'phpMussel will now attempt to update itself.';
$phpMussel['Config']['lang']['update_available'] = 'A script update is available.';
$phpMussel['Config']['lang']['update_complete'] = 'Update check completed successfully.';
$phpMussel['Config']['lang']['update_created'] = 'created';
$phpMussel['Config']['lang']['update_deleted'] = 'deleted';
$phpMussel['Config']['lang']['update_err1'] = 'Failed to update: \'update.dat\' missing. Reinstall or update manually.';
$phpMussel['Config']['lang']['update_err2'] = 'Failed to update: \'update.dat\' does not contain any valid update sources. Please update manually.';
$phpMussel['Config']['lang']['update_err3'] = 'Possible hack or forgery detected in the update instructions supplied by the update source; Source may possibly be compromised. Please notify the script author. Updating manually is recommended.';
$phpMussel['Config']['lang']['update_err4'] = 'Missing checksum!';
$phpMussel['Config']['lang']['update_err5'] = 'Missing data!';
$phpMussel['Config']['lang']['update_err6'] = 'Bad data!';
$phpMussel['Config']['lang']['update_err7'] = 'Bad checksum!';
$phpMussel['Config']['lang']['update_failed'] = 'Failed.';
$phpMussel['Config']['lang']['update_fetch'] = 'Attempting to fetch version data from {Location} ...';
$phpMussel['Config']['lang']['update_lock_detected'] = 'Update lock detected: Can\'t continue. Check for corrupt updates or try again later.';
$phpMussel['Config']['lang']['update_not'] = 'NOT {x}';
$phpMussel['Config']['lang']['update_not_available'] = 'No script update is available at this time.';
$phpMussel['Config']['lang']['update_not_possible'] = 'A script update is available, but can\'t be fully updated with this version of the update script. Please update manually.';
$phpMussel['Config']['lang']['update_no_source'] = 'phpMussel has failed to update itself because it could not connect to a valid update source. Updating manually is recommended.';
$phpMussel['Config']['lang']['update_patched'] = 'patched';
$phpMussel['Config']['lang']['update_scriptfile_missing'] = ' Update script file missing! Please reinstall phpMussel.';
$phpMussel['Config']['lang']['update_seconds_elapsed'] = ' seconds elapsed';
$phpMussel['Config']['lang']['update_signatures_available'] = 'A signatures update is available.';
$phpMussel['Config']['lang']['update_signatures_latest'] = 'LATEST SIGNATURES';
$phpMussel['Config']['lang']['update_signatures_not_available'] = 'No signatures update is available at this time.';
$phpMussel['Config']['lang']['update_signatures_yours'] = 'YOUR SIGNATURES';
$phpMussel['Config']['lang']['update_success'] = 'Success.';
$phpMussel['Config']['lang']['update_successfully'] = ' successfully';
$phpMussel['Config']['lang']['update_version_latest'] = 'LATEST SCRIPT VERSION';
$phpMussel['Config']['lang']['update_version_yours'] = 'YOUR SCRIPT VERSION';
$phpMussel['Config']['lang']['update_was'] = '{x}';
$phpMussel['Config']['lang']['update_wrd1'] = 'signatures';
$phpMussel['Config']['lang']['upload_error_1'] = 'Filesize exceeds the upload_max_filesize directive. ';
$phpMussel['Config']['lang']['upload_error_2'] = 'Filesize exceeds form-specified filesize limit. ';
$phpMussel['Config']['lang']['upload_error_34'] = 'Upload failure! Please contact the hostmaster for assistance! ';
$phpMussel['Config']['lang']['upload_error_6'] = 'Upload directory missing! Please contact the hostmaster for assistance! ';
$phpMussel['Config']['lang']['upload_error_7'] = 'Disc-write error! Please contact the hostmaster for assistance! ';
$phpMussel['Config']['lang']['upload_error_8'] = 'PHP misconfiguration detected! Please contact the hostmaster for assistance! ';
$phpMussel['Config']['lang']['upload_limit_exceeded'] = 'Upload limit exceeded';
$phpMussel['Config']['lang']['wrong_password'] = 'Wrong password; Action denied.';
$phpMussel['Config']['lang']['x_does_not_exist'] = 'does not exist';
$phpMussel['Config']['lang']['_exclamation'] = '! ';
$phpMussel['Config']['lang']['_exclamation_final'] = '!';
$phpMussel['Config']['lang']['_fullstop'] = '. ';
$phpMussel['Config']['lang']['_fullstop_final'] = '.';