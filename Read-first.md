◯初期構成
・inc
・gulpfile.js
・packeage.json
・src(中身の階層に基づきgulpfileを書き換える)
・各種PHPテンプレート

◯下記のコードを実行
npm install
→各モジュールなどが生成される。

※本番用フォルダの生成（初回のみ実行でOK）
npx gulp build
→css、js、imgがプロジェクト直下に生成される

◯watchとブラウザの起動（コーディングの際は必ず起動）
npx gulp dev

☆重要プロジェクトURLの設定について
・gulpfile.jsの30行目に、下記のように記述されています。
const projectUrl = "http://gulp-for-wordpress.local/";
このURLは、それぞれのLocalのURLを指定してください。
確認方法は、Localの「Open Site」をクリックしていただき、そこで表示されたURLに書き換えてからターミナルにコマンドを入力してください。

☆Sassパーシャルファイルの自動登録について
・gulpが起動しているときのみ、実行されます。
・新しくパーシャルファイルを作りたい場合、各フォルダ内にて「◯◯.scss」を作成します
・自動でindex.scssに登録されます。

☆Webp変換について
・gulpが起動しているときのみ、実行されます。
・srcのimgフォルダ内に、png、jpeg、svgなどそのまま格納してください
・本番用のimgフォルダ内に自動でwebpとしてコピーされます。

☆サーバーにアップロードするとき
・不要ファイルやパッケージを、exclude-aio-migration.phpに登録
・All-in-one-migrationでエクスポート