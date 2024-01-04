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
    'greeting'                                => '안녕하세요!',
    'closing'                                 => '삐빅-',
    'signature'                               => 'Firefly III 메일 봇',
    'footer_ps'                               => '추신: 이 메시지는 :ipAddress의 요청으로 발송되었습니다.',

    // admin test
    'admin_test_subject'                      => 'Firefly III 설치 테스트 메시지',
    'admin_test_body'                         => '이것은 Firefly III 인스턴스의 테스트 메시지 입니다. :email로 보냈습니다.',

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
    'invitation_created_subject'              => '초대장이 생성되었습니다',
    'invitation_created_body'                 => '관리자:email 가 이메일 주소 ":invitee"에 대한 초대장을 생성하였습니다. 초대는 48시간동안 유효합니다.',
    'invite_user_subject'                     => '당신은 Firefly III 계정을 생성하도록 초대되었습니다.',
    'invitation_introduction'                 => '당신은 **:host**에서 Firefly III 계정을 생성하도록 초대받았습니다. Firefly III는 개인이 직접 호스팅하는 개인 재무 관리 프로그램입니다. 모든 멋진 이들이 사용하고 있습니다.',
    'invitation_invited_by'                   => '당신은 ":admin"에게 초대를 받았고 이 초대는 ":invitee"에게 전송되었습니다. 본인이 맞으신가요?',
    'invitation_url'                          => '초대장은 48시간 동안 유효하며, [Firefly III](:url)로 이동하여 교환할 수 있습니다. 즐기세요!',

    // new IP
    'login_from_new_ip'                       => 'Firefly III에 새로 로그인',
    'slack_login_from_new_ip'                 => 'IP :ip (:host) 에서 새로운 Firefly III 로그인',
    'new_ip_body'                             => 'Firefly III가 알 수 없는 IP 주소에서 계정에 새로 로그인한 것을 감지했습니다. 아래 IP 주소에서 로그인한 적이 없거나 로그인한 지 6개월이 넘은 경우 Firefly III에서 경고 메시지를 표시합니다.',
    'new_ip_warning'                          => '이 IP 주소 또는 로그인을 알고있는 경우 이 메시지를 무시해도 됩니다. 로그인하지 않았거나 무슨 내용인지 모르겠다면 비밀번호 보안을 확인하고 비밀번호를 변경한 후 다른 모든 세션에서 로그아웃하세요. 이렇게 하려면 프로필 페이지로 이동합니다. 물론 이미 2단계 인증을 사용 중이시겠죠? 안전하게 지내세요!',
    'ip_address'                              => 'IP 주소',
    'host_name'                               => '호스트',
    'date_time'                               => '날짜 + 시간',

    // access token created
    'access_token_created_subject'            => '새로운 엑세스 토큰이 생성됨',
    'access_token_created_body'               => '누군가(아마도 당신이) 방금 당신의 사용자 계정에 대한 새로운 Firefly III API 액세스 토큰을 생성하였습니다.',
    'access_token_created_explanation'        => '이 토큰을 사용하여 Firefly III API를 통해 당신의 **모든** 재정 기록을 접근할 수 있습니다.',
    'access_token_created_revoke'             => '당신이 생성한 것이 아니라면 :url 에서 최대한 빨리 이 토큰을 취소하세요',

    // registered
    'registered_subject'                      => 'Firefly III에 오신 것을 환영합니다!',
    'registered_subject_admin'                => '새로운 사용자가 등록됨',
    'admin_new_user_registered'               => '새로운 사용자가 등록되었습니다. **:email** 사용자에게 ID #:id가 부여되었습니다.',
    'registered_welcome'                      => '[Firefly III](:address)에 오신 것을 환영합니다. 귀하의 등록이 완료되었으며, 확인을 위한 이메일입니다. 야호!',
    'registered_pw'                           => '이미 비밀번호를 잊어버렸다면 [비밀번호 초기화 도구](:address/password/reset)를 이용하여 비밀번호를 초기화하세요.',
    'registered_help'                         => '각 페이지의 오른쪽 상단에 도움말 아이콘이 있습니다. 도움이 필요하다면 클릭하세요!',
    'registered_closing'                      => '즐기세요!',
    'registered_firefly_iii_link'             => 'Firefly III:',
    'registered_pw_reset_link'                => '비밀번호 초기화:',
    'registered_doc_link'                     => '문서:',

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
    'new_version_email_subject'               => '새로운 Firefly III 버전을 사용할 수 있습니다',

    // email change
    'email_change_subject'                    => '당신의 Firefly III 이메일 주소가 변경되었습니다',
    'email_change_body_to_new'                => '당신 또는 당신의 Firefly III 계정에 접근할 수 있는 누군가가 이메일 주소를 변경했습니다. 이 메시지를 예상하지 못했다면 그것을 무시하고 삭제하기 바랍니다.',
    'email_change_body_to_old'                => '당신 또는 당신의 Firefly III 계정에 액세스할 수 있는 누군가가 당신의 이메일 주소를 변경했습니다. 예상하지 못한 일이라면 **반드시** 아래의 "실행 취소" 링크를 따라 계정을 보호해야 합니다!',
    'email_change_ignore'                     => '당신이 이러한 변경을 시작하셨다면 이 메시지는 무시해도 됩니다.',
    'email_change_old'                        => '이전 이메일 주소는 :email입니다',
    'email_change_old_strong'                 => '이전 이메일 주소는 **:email**입니다',
    'email_change_new'                        => '새로운 이메일 주소는 :email입니다',
    'email_change_new_strong'                 => '새로운 이메일 주소는 **:email**입니다',
    'email_change_instructions'               => '이 변경 사항을 확인하기 전까지는 Firefly III를 사용할 수 없습니다. 아래 링크를 따라 확인하시기 바랍니다.',
    'email_change_undo_link'                  => '변경을 취소하려면 이 링크를 클릭하세요:',

    // OAuth token created
    'oauth_created_subject'                   => '새로운 OAuth 클라이언트가 생성되었습니다',
    'oauth_created_body'                      => '누군가(당신이길 바랍니다) 방금 사용자 계정에 대한 새로운 Firefly III API OAuth 클라이언트를 만들었습니다. 레이블은 ":name"이고 콜백 URL은 `:url`입니다.',
    'oauth_created_explanation'               => '이 클라이언트를 사용하여 Firefly III API를 통해 당신의 **모든** 재정 기록을 접근할 수 있습니다.',
    'oauth_created_undo'                      => '당신이 생성한 것이 아니라면 `:url`에서 최대한 빨리 이 클라이언트를 취소하세요',

    // reset password
    'reset_pw_subject'                        => '비밀번호 재설정 요청',
    'reset_pw_instructions'                   => '누군가 비밀번호 재설정을 시도했습니다. 본인인 경우 아래 링크를 따라 비밀번호를 재설정하세요.',
    'reset_pw_warning'                        => '링크가 실제로 예상한 Firefly III로 연결되는지 **꼭** 확인하세요!',

    // error
    'error_subject'                           => 'Firefly III에서 오류 발견',
    'error_intro'                             => 'Firefly III v:version에서 오류가 발생했습니다: <span style="font-family: monospace;">:errorMessage</span>',
    'error_type'                              => '오류 유형은 ":class"입니다.',
    'error_timestamp'                         => '오류 발생 시간: :time',
    'error_location'                          => '이 오류는 "<span style="font-family: monospace;">:file</span>" 파일의 :line 라인 :code에서 발생하였습니다.',
    'error_user'                              => '사용자 #:id, <a href="mailto::email">:email</a>이(가) 오류를 발생시켰습니다.',
    'error_no_user'                           => '이 오류로 인해 로그인한 사용자가 없거나 사용자가 감지되지 않았습니다.',
    'error_ip'                                => '이 오류와 관련된 IP 주소: :ip',
    'error_url'                               => 'URL: :url',
    'error_user_agent'                        => '유저 에이전트: :userAgent',
    'error_stacktrace'                        => '전체 스택 추적은 다음과 같습니다. Firefly III의 버그라고 생각되면 이 메시지를 <a href="mailto:james@firefly-iii.org?subject=BUG!">james@firefly-iii.org</a> 으로 전달해 주세요. 방금 발생한 버그를 수정하는 데 도움이 될 수 있습니다.',
    'error_github_html'                       => '원한다면 <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>에 새로운 이슈를 오픈할 수 도 있습니다.',
    'error_github_text'                       => '원한다면 https://github.com/firefly-iii/firefly-iii/issues 에 새로운 이슈를 오픈할 수도 있습니다.',
    'error_stacktrace_below'                  => '전체 스택 추적은 다음과 같습니다:',
    'error_headers'                           => '다음 헤더도 관련이 있을 수 있습니다:',

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
    'new_journals_subject'                    => 'Firefly III가 새로운 거래를 생성하였습니다|Firefly III가 :count개의 새로운 거래를 생성하였습니다',
    'new_journals_header'                     => 'Firefly III가 새로운 거래를 생성하였습니다. Firefly III 설치에서 찾을 수 있습니다:|Firefly III가 :count개의 새로운 거래를 생성하였습니다. Firefly III 설치에서 찾을 수 있습니다:',

    // bill warning
    'bill_warning_subject_end_date'           => '":name" 청구서가 :diff일 후 만료됩니다',
    'bill_warning_subject_now_end_date'       => '":name" 청구서가 오늘 만료됩니다',
    'bill_warning_subject_extension_date'     => '":name" 청구서가 :diff일 내에 연장되거나 취소될 예정입니다',
    'bill_warning_subject_now_extension_date' => '":name" 청구서가 오늘 연장되거나 취소될 예정입니다',
    'bill_warning_end_date'                   => '**":name"** 청구서는 :date에 만료됩니다. 약 **:diff 일** 남았습니다.',
    'bill_warning_extension_date'             => '**":name"** 청구서는 :date에 연장되거나 취소될 예정입니다. 약 **:diff 일** 남았습니다.',
    'bill_warning_end_date_zero'              => '**":name"** 청구서는 :date에 만료됩니다. **오늘**까지 입니다!',
    'bill_warning_extension_date_zero'        => '**":name"** 청구서는 :date에 연장되거나 취소될 예정입니다. **오늘**까지 입니다!',
    'bill_warning_please_action'              => '적절한 조치를 취하시기 바랍니다.',
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