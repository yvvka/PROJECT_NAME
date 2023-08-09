## 環境構築手順

エディター：VS Code

①Docker Desktopを起動させる

②	プロジェクトをVS Codeで開く

Windows PowerShellを開いてUbuntu-20.04を選択し”cd PROJECT_NAME”, ”code .”でVS Codeでプロジェクトを開く

③	Sail を起動させる

VS CodeでUbuntu-20.04（WSL）のターミナルを開き”./vendor/bin/sail shell”でSailを 起動する。
http://localhost/loginにアクセスするとログイン画面が表示される。

## 機能説明
今回作成したTodoアプリは、アカウントを作成してタスクをフォルダで分けて管理することが出来る。

・会員登録(/register)

メールアドレス、ユーザー名、パスワードを設定してアカウントを作成する。
![register-page](https://github.com/yvvka/PROJECT_NAME/assets/96856462/1b956f24-db93-480b-873c-027d5c7e0cb5) 


・ログイン画面(/login)

登録したメールアドレスとパスワードを入力しログインすると自分のフォルダ、タスク一覧ページが表示される。
 ![login](https://github.com/yvvka/PROJECT_NAME/assets/96856462/36000e86-6858-4c6f-b46e-3e909e891ca9)
 
・フォルダ作成(/folders/create)

タスクを区別するフォルダを作成する。 
![folderscreate-page](https://github.com/yvvka/PROJECT_NAME/assets/96856462/6553c880-72e1-4095-a40f-6486cd64b669)

・フォルダとタスク一覧ページ(folders/id/tasks)

作成したフォルダごとに管理されたタスク一覧が表示される。
選択しているフォルダは青くなり、横にタスクのタイトルと状態と期限を見ることができる。タスクの状態は「未着手」「着手中」「完了」がありそれぞれ異なる色で表示されているため進歩状況を容易に見分けることが出来る。
![foldersidtasklist](https://github.com/yvvka/PROJECT_NAME/assets/96856462/f1bd0859-e9a2-448e-ba47-9355890e5220)
  
・タスク作成（/folders/id/tasks/create）

フォルダとタスク一覧ページ(folders/id/tasks)の「タスクを追加する」のボタンを押すとタスク作成ページに飛ぶ。タスクの名前と期限を設定できる。 
![taskcreate](https://github.com/yvvka/PROJECT_NAME/assets/96856462/dd0e6711-6ce2-452e-a331-ced146fa9cf6)

・タスク編集(/folders/id/tasks/task_id/edit)

フォルダとタスク一覧ページ(folders/id/tasks)のタスクに「編集」という項目を押すとタスク編集ページに飛び、タイトルとタスクの進捗状況と期限を変えられることが出来る。 
![taskedit](https://github.com/yvvka/PROJECT_NAME/assets/96856462/197d12ac-68ac-427c-99cf-a0a96904a3a5)




## データベース構成図

![データベース](https://github.com/yvvka/PROJECT_NAME/assets/96856462/9fc3ad76-8515-4a8c-aef3-321381c73656)



参考サイト

環境構築

https://tomosta.jp/2023/04/laravel10/

アプリ製作

https://www.hypertextcandy.com/laravel-tutorial-todo-app-design/

データベース作成

https://www.ntt.com/business/sdpf/knowledge/archive_50.html


