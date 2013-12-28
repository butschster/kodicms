INSERT INTO `__TABLE_PREFIX__email_templates` (`id`, `created_on`, `email_type`, `status`, `email_from`, `email_to`, `subject`, `message`, `message_type`, `bcc`, `reply_to`, `cc`) VALUES
(1, '2013-12-14 01:45:09', 1, 1, '{default_email}', '{email}', '{site_title}: Ссылка для восстановления пароля', '<h3>Здраствуйте {username}!</h3>Чтобы восстановить &nbsp;пароль от своего аккаунта, пройдите, пожалуйста, по ссылке:  <a href="{base_url}{reflink}">{base_url}{reflink}</a>&nbsp;или введите код&nbsp;<b>{code}</b> вручную на странице восстановления.<p>----------------------------------------</p><p>Данное письмо сгенерировано автоматически, отвечать на него не нужно.<span style="line-height: 1.45em;"></span></p>\n', 'html', NULL, NULL, NULL),
(2, '2013-12-14 15:00:31', 3, 1, '{email_from}', '{email}', '{site_title}: Новый пароль от вашего аккаунта', '<h3>Здраствуйте {username}!</h3>Ваш новый пароль:&nbsp;<b>{password}</b><p></p><p>Всегда храните свой пароль в тайне и&nbsp;не сообщайте его никому.<br></p><p>----------------------------------------</p><p><p>Данное письмо сгенерировано автоматически, отвечать на него не нужно.</p></p><p></p>', 'html', NULL, NULL, NULL);

INSERT INTO `__TABLE_PREFIX__email_types` (`id`, `code`, `name`, `data`) VALUES
(1, 'user_request_password', 'Запрос на восстановление пароля', 'a:4:{s:4:"code";s:48:"Код восстановления пароля";s:8:"username";s:31:"Имя пользователя";s:5:"email";s:30:"Email пользователя";s:7:"reflink";s:61:"Ссылка для восстановления пароля";}'),
(3, 'user_new_password', 'Новый пароль', 'a:3:{s:8:"password";s:23:"Новый пароль";s:5:"email";s:30:"Email пользователя";s:8:"username";s:31:"Имя пользователя";}');