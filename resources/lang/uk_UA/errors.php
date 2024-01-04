<?php

/**
 * firefly.php
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
    '404_header'              => 'Firefly III не може знайти цю сторінку.',
    '404_page_does_not_exist' => 'Запитувана сторінка не існує. Будь ласка, перевірте, правильність URL. Можливо зробили помилку при наборі?',
    '404_send_error'          => 'Якщо ви були автоматично перенаправлені на цю сторінку, прийміть мої вибачення. Помилка була записана до файлів журналу, і я буду вдячний, якщо ви надішлете мені повідомлення про помилку.',
    '404_github_link'         => 'Якщо ви впевнені, що ця сторінка має існувати, створіть звернення <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'whoops'                  => 'Ой',
    'fatal_error'             => 'Сталася фатальна помилка. Перевірте файли журналів у «storage/logs» або скористайтеся «docker logs -f [container]», щоб побачити, що відбувається.',
    'maintenance_mode'        => 'Firefly III знаходиться в режимі обслуговування.',
    'be_right_back'           => 'Незабаром повернусь!',
    'check_back'              => 'Firefly III вимкнено для необхідного обслуговування. Перевірте за секунду.',
    'error_occurred'          => 'Ой! Сталася помилка.',
    'db_error_occurred'       => 'Ой! Сталася помилка бази даних.',
    'error_not_recoverable'   => 'На жаль, цю помилку не можна виправити :(. Firefly III пошкоджено. Помилка:',
    'error'                   => 'Помилка',
    'error_location'          => 'Ця помилка сталася у файлі <span style="font-family: monospace;">:file</span> в рядку :line з кодом :code.',
    'stacktrace'              => 'Трасування стека',
    'more_info'               => 'Дізнатися більше',

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

    'collect_info'            => 'Для отримання додаткової інформації перегляньте каталог <code>storage/logs</code>, який містить файли журналів. Якщо ви використовуєте Docker, скористайтесь <code>docker logs -f [container]</code>.',
    'collect_info_more'       => 'You can read more about collecting error information in <a href="https://docs.firefly-iii.org/how-to/general/debug/">the FAQ</a>.',
    'github_help'             => 'Отримати допомогу на GitHub',
    'github_instructions'     => 'Запрошуємо відкрити нове звернення через проблему <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">на GitHub</a></strong>.',
    'use_search'              => 'Скористайтеся пошуком!',
    'include_info'            => 'Додайте інформацію <a href=":link">з цієї сторінки налагодження</a>.',
    'tell_more'               => 'Дайте нам більше інформації, ніж "Сервіс не працює!"',
    'include_logs'            => 'Додайте журнали помилок (див. вище).',
    'what_did_you_do'         => 'Розкажіть нам, що ви робили.',
    'offline_header'          => 'Ймовірно, ви не в мережі',
    'offline_unreachable'     => 'Firefly III недоступний. Ваш пристрій наразі не в мережі або сервер не працює.',
    'offline_github'          => 'Якщо ви впевнені, що ваш пристрій та сервер підключені до мережі, створіть звернення на <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
];
