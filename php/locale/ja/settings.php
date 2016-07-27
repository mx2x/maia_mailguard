<?php
    /*
     * $Id$
     *
     * MAIA MAILGUARD LICENSE v.1.0
     *
     * Copyright 2004 by Robert LeBlanc <rjl@renaissoft.com>
     *                   Motoharu Kubo  <mkubo@3ware.co.jp>
     *                   Oyaji          <oyaji@mail.aconus.com>
     * All rights reserved.
     *
     * Fri Jul 22 2016 YAMAMOTO Takashi <yamachan@piwikjapan.org>
     * - Checked for version 1.0.4
     * 
     * PREAMBLE
     *
     * This License is designed for users of Maia Mailguard
     * ("the Software") who wish to support the Maia Mailguard project by
     * leaving "Maia Mailguard" branding information in the HTML output
     * of the pages generated by the Software, and providing links back
     * to the Maia Mailguard home page.  Users who wish to remove this
     * branding information should contact the copyright owner to obtain
     * a Rebranding License.
     *
     * DEFINITION OF TERMS
     *
     * The "Software" refers to Maia Mailguard, including all of the
     * associated PHP, Perl, and SQL scripts, documentation files, graphic
     * icons and logo images.
     *
     * GRANT OF LICENSE
     *
     * Redistribution and use in source and binary forms, with or without
     * modification, are permitted provided that the following conditions
     * are met:
     *
     * 1. Redistributions of source code must retain the above copyright
     *    notice, this list of conditions and the following disclaimer.
     *
     * 2. Redistributions in binary form must reproduce the above copyright
     *    notice, this list of conditions and the following disclaimer in the
     *    documentation and/or other materials provided with the distribution.
     *
     * 3. The end-user documentation included with the redistribution, if
     *    any, must include the following acknowledgment:
     *
     *    "This product includes software developed by Robert LeBlanc
     *    <rjl@renaissoft.com>."
     *
     *    Alternately, this acknowledgment may appear in the software itself,
     *    if and wherever such third-party acknowledgments normally appear.
     *
     * 4. At least one of the following branding conventions must be used:
     *
     *    a. The Maia Mailguard logo appears in the page-top banner of
     *       all HTML output pages in an unmodified form, and links
     *       directly to the Maia Mailguard home page; or
     *
     *    b. The "Powered by Maia Mailguard" graphic appears in the HTML
     *       output of all gateway pages that lead to this software,
     *       linking directly to the Maia Mailguard home page; or
     *
     *    c. A separate Rebranding License is obtained from the copyright
     *       owner, exempting the Licensee from 4(a) and 4(b), subject to
     *       the additional conditions laid out in that license document.
     *
     * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDER AND CONTRIBUTORS
     * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
     * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
     * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
     * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
     * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
     * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS
     * OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
     * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR
     * TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE
     * USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
     *
     */

    // Page subtitle
    $lang['banner_subtitle'] =  "Mail Filter Settings";

    // Page subtitle
    $lang['banner_subtitle'] =  "メールフィルタの設定";

    // Table headers
    $lang['header_addresses'] =  "メールアドレス";
    $lang['header_miscellaneous'] =  "その他の設定";
    $lang['header_address'] =  "メールアドレス";
    $lang['header_login_info'] =  "ログイン認証タイプ";
    $lang['header_add_email'] =  "新しいメールアドレス/エイリアスを追加";

    // Text messages
    $lang['text_username'] =  "ユーザ名";
    $lang['text_email_address'] =  "メールアドレス";
    $lang['text_password'] =  "パスワード";
    $lang['text_reminders'] =  "隔離エリアの状態通知メールを希望するか";
    $lang['text_charts'] =  "統計値のグラフ化";
    $lang['text_yes'] =  "はい";
    $lang['text_no'] =  "いいえ";
    $lang['text_virus_scanning'] =  "ウィルスチェック";
    $lang['text_enabled'] =  "実施する";
    $lang['text_disabled'] =  "実施しない";
    $lang['text_quarantined'] =  "隔離する";
    $lang['text_labeled'] =  "ラベルを付けて配送する";
    $lang['text_discarded'] =  "破棄する";
    $lang['text_detected_viruses'] =  "検出したウィルス感染メールの処理";
    $lang['text_spam_filtering'] =  "スパムチェック";
    $lang['text_detected_spam'] =  "検出したスパムの処理";
    $lang['text_prefix_subject'] =  "スパムメールの件名に見出しを付加する";
    $lang['text_add_spam_header'] =  "X-Spam:ヘッダを付加するスコア";
    $lang['text_consider_mail_spam'] =  "スパムと判断するスコア";
    $lang['text_quarantine_spam'] =  "スパムを隔離するスコア";
    $lang['text_kill_spam'] =  "スパムを破棄する（隔離しない）スコア";
    $lang['text_attachment_filtering'] =  "添付ファイルタイプによるフィルタリング";
    $lang['text_mail_with_attachments'] =  "危険な添付ファイルを持つメールの処理";
    $lang['text_bad_header_filtering'] =  "不正ヘッダを持つメールのフィルタリング";
    $lang['text_mail_with_bad_headers'] =  "不正ヘッダを持つメールの処理";
    $lang['text_settings_updated'] =  "メールフィルタの設定を更新しました";
    $lang['text_address_added'] =  "メールアドレス %s をリンクしました";
    $lang['text_login_failed'] =  "'%s' の認証が失敗しました";
    $lang['text_primary'] =  "代表メールアドレス";
    $lang['text_no_addresses_linked'] =  "現在メールアドレスはひとつもリンクされていません";
    $lang['text_new_primary_email'] =  "%s を代表メールアドレスに設定しました";
    $lang['text_language'] =  "画面表示に使う言語";
    $lang['text_charset'] =  "画面表示に使う文字セット";
    $lang['text_theme']	= "テーマ";
    $lang['text_truncate_subject'] = "メール一覧での件名の表示桁数（0: 全て表示）";
    $lang['text_truncate_email'] = "メール一覧での差出人の表示桁数（0: 全て表示）";
    $lang['text_spamtrap'] =  "スパムトラップ用のアカウントですか?";
    $lang['text_auto_whitelist'] =  "救出したメールの送信者をホワイトリストに自動登録する";
    $lang['text_popup_viewmail'] =  "メールビューアをポップアップする別ウィンドウで表示する";
    $lang['text_use_suspend_column'] = "「後で」という処理保留カラムを使うか";
    $lang['text_items_per_page'] =  "1 ページに表示するメール件数";
    $lang['text_digest_interval'] = "状態通知メールの送信間隔（時間）（0: 無効）";
    $lang['text_domain_digest_interval'] = "Default Email Digest interval? （0 to deactivate, in hours）";
    $lang['text_new_login_name'] =  "新しいユーザ名";
    $lang['text_new_password'] =  "新しいパスワード";
    $lang['text_confirm_new_password'] =  "新しいパスワード（確認）";
    $lang['text_login_name_empty'] =  "ユーザ名は省略できません";
    $lang['text_login_name_not_allowed'] =  "'@' で始まるユーザ名は使えません";
    $lang['text_password_empty'] =  "パスワードを指定してください";
    $lang['text_password_mismatch'] =  "新しいパスワードとその確認用の値が異なっています";
    $lang['text_login_name_exists'] =  "指定されたユーザ名はすでに他のユーザが使っています";
    $lang['text_password_updated'] =  "パスワードを変更しました";
    $lang['text_credentials_updated'] =  "ユーザ名とパスワードを変更しました";

    // Buttons
    $lang['button_add_email_address'] =  "メールアドレスを追加";
    $lang['button_reset'] =  "リセット";
    $lang['button_update_misc'] =  "設定を更新";
    $lang['button_update_address'] =  "このメールアドレスの設定を更新";
    $lang['button_update_all_addresses'] =  "全メールアドレスの設定を上記に統一";
    $lang['button_make_primary'] =  "代表メールアドレスに変更";
    $lang['button_change_login_info'] =  "ログイン方法を変更";

    // Links
    $lang['link_settings'] =  "メールフィルタの設定に戻る";
?>