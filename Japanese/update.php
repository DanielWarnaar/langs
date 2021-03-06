<?php

// Language definitions used in db_update.php

$lang_update = array(

'Update'						=>	'FluxBB アップデート',
'Update message'				=>	'FluxBBのデータベースをアップグレードします。管理者は以下の手順に従ってアップグレードを行ってください。',
'Note'							=>	'注意:',
'Members message'				=>	'これは管理者向けのページです。メンバーの方はアップグレード操作が完了するまで暫くお待ちください。',
'Administrator only'			=>	'このステップは管理者のみ実行可能です。',
'Database password info'		=>	'FluxBBがセットアップされているデータベースのパスワードを入力してください。パスワードを忘れた場合は\'config.php\'を参照してください。',
'Database password note'		=>	'SQLiteで動かしている（パスワードが不要な）場合はデータベースのファイル名を入力してください。ファイル名は\'config.php\'内の文字列を厳密に入力します。',
'Database password'				=>	'データベースパスワード',
'Next'							=>	'次へ',

'You are running error'			=>	'%1$s のバージョン%2$sが動作しています。FluxBB %3$sが正しく動作するためには、%1$s %4$s以上の環境が必要です。アップグレードを続行する前に%1$sをアップグレードしてください。',
'Version mismatch error'		=>	'バージョンが一致しません。データベース（\'%s\'）は、このスクリプトではアップグレードできません。',
'Invalid file error'			=>	'データベースファイル名が正しくありません。SQLiteを使っている場合は、\'%s\'ファイル内のデータベースファイル名を正しく入力してください。',
'Invalid password error'		=>	'データベースパスワードが正しくありません。\'%s\'ファイル内のデータベースパスワードを正しく入力してください。',
'No password error'				=>	'データベースパスワードを入力してください。',
'Script runs error'				=>	'既に誰かがアップデートスクリプトを実行したようです。もしそうでなければ、\'%s\'ファイルを削除してから再試行してください。',
'No update error'				=>	'フォーラムはアップデート済みです。',

'Intro 1'						=>	'フォーラムのデータベースをアップデートします。処理時間はサーバーの性能やデータベースのサイズによって数秒から数時間まで変化します。必ずデータベースをバックアップしてから実行してください。',
'Intro 2'						=>	'アップデート手順書をまだ読んでない場合は、必ず目を通してから実行してください。',
'No charset conversion'			=>	'<strong>重要！</strong> PHPがISO-8859-1以外のキャラクタセットからUTF-8への変換をサポートしていません。これは現在のキャラクタセットがISO-8859-1でない場合にあなたのデータベースをFluxBBが変換できないことを意味します。この場合は、アップデート手順書に従ってマニュアルで変換する必要があります。',
'Enable conversion'				=>	'<strong>エンコード変換:</strong>  データベースに必要な変更を加えた後に、すべてのテキストを現在のキャラクタセットからUTF-8に変換します。バージョン1.2からアップグレードする場合のみ有効です。',
'Current character set'			=>	'<strong>現在のキャラクタセット:</strong> 主な言語が英語の場合はデフォルト値のままにします。英語でない場合は フォーラムの主な言語のキャラクタセットを入力します。<em>設定を間違えるとデータベースが壊れるのでよく考えて入力してください。 </em> 注意: 元のデータベースがUTF-8の場合でも指定してください。',
'Charset conversion'			=>	'キャラクタセットの変換',
'Enable conversion label'		=>	'<strong>変換する</strong> （データベースのキャラクタセットを変換します）。',
'Current character set label'	=>	'現在のキャラクタセット',
'Current character set info'	=>	'英語のフォーラムであればこのままで問題ありませんが、他の言語の場合は使用中の言語のキャラクタセットを入力してください。',
'Start update'					=>	'アップデート開始',
'Error converting users'		=>	'ユーザー情報の変換エラー',
'Error info 1'					=>	'ユーザー情報の変換に失敗しました。 これはFluxBB v1.2からの変換で酷似してるユーザー名（例えば "bob" や "böb"）がある場合に発生します。',
'Error info 2'					=>	'下は変換に失敗したユーザーです。各ユーザーの新しい名前を選択してください。変名されたユーザーにはユーザー名の変更通知メールが送信されます。',
'New username'					=>	'新しいユーザー名',
'Required'						=>	'(Required)',
'Correct errors'				=>	'次のエラーを修正してください。',
'Rename users'					=>	'ユーザー名を変更',
'Successfully updated'			=>	'データベースは正しく更新されました。%sを見る。',
'go to index'					=>	'フォーラム',

'Unable to lock error'			=>	'ロックに失敗しました。PHPが \'%s\' ディレクトリに書き込めることとアップデートスクリプトが動作中でないことを確認してください。',

'Converting'					=>	'%s を変換中 …',
'Converting item'				=>	'%1$s (%2$s) を変換中 …',
'Preparsing item'				=>	'%1$s (%2$s) を分析中 …',
'Rebuilding index item'			=>	'%1$s (%2$s) の索引を作成しています。',

'ban'							=>	'アクセス制限',
'categories'					=>	'カテゴリー',
'censor words'					=>	'禁止用語',
'configuration'					=>	'設定',
'forums'						=>	'フォーラム',
'groups'						=>	'グループ',
'post'							=>	'投稿',
'ranks'							=>	'ランク',
'report'						=>	'通報',
'topic'							=>	'トピック',
'user'							=>	'ユーザー',
'signature'						=>	'署名',

'Username too short error'		=>	'ユーザー名は２文字以上入力してください。他の長いユーザー名を指定してください。',
'Username too long error'		=>	'ユーザー名は２５文字以下にしてください。他の短いユーザー名を指定してください。',
'Username Guest reserved error'	=>	'ユーザー名に guest は指定できません。他のユーザー名を指定してください。',
'Username IP format error'		=>	'IPアドレス形式のユーザー名は指定できません。他のユーザー名を指定してください。',
'Username bad characters error'	=>	'ユーザー名に \', ", [ , ] などの文字は指定できません。他のユーザー名を指定してください。',
'Username BBCode error'			=>	'ユーザー名にBBCodeを含むことはできません。他のユーザー名を指定してください。',
'Username duplicate error'		=>	'%s というユーザー名は他のユーザーが使用しているか酷似しています。ユーザー名は少なくともアルファベット１文字(a-z または 0-9)が異なっていなければなりません。他のユーザー名を指定してください。',

'JavaScript disabled'			=>	'JavaScript が無効なようです。 %s',
'Click here to continue'		=>	'続行するにはここをクリック',
'Required field'				=>	' は必須です。'

);
