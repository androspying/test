<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'resource_not_found' => 'संसाधन नहीं मिला',
    'error_occured' => 'एक त्रुटि उत्पन्न हुई',
    'refresh' => 'रिफ्रेश करें',
    'no_valid_otp' => 'इस QR कोड में कोई वैध OTP संसाधन नहीं है',
    'something_wrong_with_server' => 'आप के सर्वर में कोई गड़बड़ है',
    'Unable_to_decrypt_uri' => 'URI को डिक्रिप्ट करने में असमर्थ',
    'not_a_supported_otp_type' => 'OTP का यह प्रारूप इस समय समर्थित नहीं है',
    'cannot_create_otp_without_secret' => 'बिना रहस्य के OTP नहीं बनाया जा सकता',
    'data_of_qrcode_is_not_valid_URI' => 'इस QR कोड का डेटा वैध OTP Auth URI नहीं है। QR कोड में शामिल हैं:',
    'wrong_current_password' => 'गलत वर्तमान पासवर्ड, कुछ भी बदला नहीं गया है',
    'error_during_encryption' => 'एन्क्रिप्शन विफल, आपका डेटाबेस अभी भी असुरक्षित है।',
    'error_during_decryption' => 'डिक्रिप्शन विफल, आपका डेटाबेस अभी भी सुरक्षित है। ऐसा मुख्य रूप से एक या अधिक खातों के लिए एन्क्रिप्टेड डेटा की अखंडता की समस्या के कारण होता है।',
    'qrcode_cannot_be_read' => 'यह QR कोड पढ़ा नहीं जा सकता',
    'too_many_ids' => 'क्वेरी पैरामीटर में बहुत सारी आईडी शामिल की गईं, अधिकतम 100 की अनुमति है',
    'delete_user_setting_only' => 'केवल उपयोगकर्ता द्वारा बनाई गई सेटिंग ही मिटाई जा सकती हैं',
    'indecipherable' => '*अस्पष्ट*',
    'cannot_decipher_secret' => 'रहस्य को समझा नहीं जा सकता. यह मुख्य रूप से 2Fauth की .env कॉन्फ़िगरेशन फ़ाइल में गलत APP_KEY सेट या डेटाबेस में संग्रहीत दूषित डेटा के कारण होता है।',
    'https_required' => 'HTTPS संदर्भ आवश्यक है',
    'browser_does_not_support_webauthn' => 'आपका डिवाइस webauthn का समर्थन नहीं करता है. बाद में अधिक आधुनिक ब्राउज़र का उपयोग करके पुनः प्रयास करें',
    'aborted_by_user' => 'उपयोगकर्ता द्वारा निरस्त किया गया।',
    'security_device_already_registered' => 'डिवाइस पहले से ही पंजीकृत है',
    'not_allowed_operation' => 'इस संचालन की अनुमति नहीं है',
    'no_authenticator_support_specified_algorithms' => 'निर्दिष्ट एल्गोरिदम का समर्थन कोई भी प्रमाणक नहीं करता है',
    'authenticator_missing_discoverable_credential_support' => 'प्रमाणक के पास खोजने योग्य क्रेडेंशियल का समर्थन नहीं है',
    'authenticator_missing_user_verification_support' => 'प्रमाणक के पास उपयोगकर्ता के सत्यापन का समर्थन नहीं है',
    'unknown_error' => 'अज्ञात त्रुटि',
    'security_error_check_rpid' => 'सुरक्षा त्रुटि<br/>अपने WEBAUTHN_ID env var की जाँच करें',
    '2fauth_has_not_a_valid_domain' => '2FAuth का डोमेन वैध डोमेन नहीं है',
    'user_id_not_between_1_64' => 'उपयोगकर्ता आईडी 1 से 64 वर्णों के बीच नहीं थी',
    'no_entry_was_of_type_public_key' => 'कोई भी प्रविष्टि "public-key" प्रकार की नहीं थी',
    'unsupported_with_reverseproxy' => 'Not applicable when using an auth proxy or SSO',
    'unsupported_with_sso_only' => 'This authentication method is for administrators only. Users must log in with SSO.',
    'user_deletion_failed' => 'उपयोगकर्ता के कहते को हटाना विफल रहा, कोई डेटा हटाया नहीं गया है',
    'auth_proxy_failed' => 'Proxy प्रमाणीकरण विफल रहा',
    'auth_proxy_failed_legend' => '2Fauth को प्रमाणीकरण प्रॉक्सी के पीछे चलाने के लिए कॉन्फ़िगर किया गया है लेकिन आपकी प्रॉक्सी अपेक्षित हेडर वापस नहीं करती है। अपना कॉन्फ़िगरेशन जांचें और पुनः प्रयास करें।',
    'invalid_x_migration' => 'अमान्य या अपठनीय :appname डेटा',
    'invalid_2fa_data' => 'अमान्य 2FA डेटा',
    'unsupported_migration' => 'डेटा किसी भी समर्थित प्रारूप से मेल नहीं खाता',
    'unsupported_otp_type' => 'ओटीपी का प्रकार असमर्थित',
    'encrypted_migration' => 'अपठनीय, डेटा एन्क्रिप्टेड लगता है',
    'no_logo_found_for_x' => ':service के लिए कोई लोगो उपलब्ध नहीं है',
    'file_upload_failed' => 'फाइल अपलोड असफल रहा',
    'unauthorized' => 'अनधिकृत',
    'unauthorized_legend' => 'आपको इस संसाधन को देखने या यह क्रिया करने की अनुमति नहीं है',
    'cannot_delete_the_only_admin' => 'एकमात्र व्यवस्थापक खाता हटाया नहीं जा सकता',
    'cannot_demote_the_only_admin' => 'केवल बचे ऐड्मिन अकाउंट को नीचा नहीं किया जा सकता',
    'error_during_data_fetching' => '💀डेटा लाने में कुछ गलत हो गया',
    'check_failed_try_later' => 'खोज विफल रही, कृपया बाद में पुनर्प्रयास करें!',
    'sso_disabled' => 'SSO निष्क्रिय है',
    'sso_bad_provider_setup' => 'यह SSO प्रदाता आपकी .env फ़ाइल में पूरी तरह से सेटअप नहीं है',
    'sso_failed' => 'SSO के माध्यम से प्रमाणीकरण अस्वीकृत',
    'sso_no_register' => 'पंजीकरण निष्क्रिय हैं',
    'sso_email_already_used' => 'समान ईमेल पते वाला एक उपयोगकर्ता खाता पहले से मौजूद है लेकिन यह आपकी बाहरी खाता आईडी से मेल नहीं खाता है। यदि आप पहले से ही इस ईमेल के साथ 2FAuth पर पंजीकृत हैं तो SSO का उपयोग न करें।',
    'account_managed_by_external_provider' => 'खाता किसी बाहरी प्रदाता द्वारा प्रबंधित किया गया है',
    'data_cannot_be_refreshed_from_server' => 'सर्वर से डेटा रिफ्रेश नहीं किया जा सकता',
    'no_pwd_reset_for_this_user_type' => 'इस ईमेल के लिए पासवर्ड रीसेट नहीं किया जा सकता है।',
    'cannot_detect_qrcode_in_image' => 'चित्र में QR Code पढ़ा नहीं जा रहा है, कृपया चित्र को क्रॉप करें',
    'cannot_decode_detected_qrcode' => 'QR Code डिकोड नहीं हो रहा है, कृपया चित्र को क्रॉप करें या ठीक करें',
    'qrcode_has_invalid_checksum' => 'QR Code का चेकसम अमान्य है',
    'no_readable_qrcode' => 'कोई QR Code पाठ्य नहीं है',
    'failed_icon_store_database_toggling' => 'Migration of icons failed. The setting has been restored to its previous value.',
];