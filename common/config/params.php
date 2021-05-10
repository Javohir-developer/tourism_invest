<?php
return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'user.passwordResetTokenExpire' => 3600,
    'upload_dir_file' => "@frontend/web/uploads/",
    'upload_dir_file_src' => getenv('FRONTEND_URL').'uploads/',
    'categories_all_types' => [
        100 => 'Посты-Портал',
        200 => 'Страницы-Портал',
        300 => 'Посты-Центр',
        400 => 'Страницы-Центр',
    ]

];
