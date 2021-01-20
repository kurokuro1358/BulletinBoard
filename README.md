# ネット掲示板（虎虎虎）
- ## アプリの概要について  
    - ### __開発背景__　　
        誰でも登録なしで掲示板に書き込めるサイトを作りたいと思い開発しました。
    - ### __開発期間__
        ２日
    - ### __開発人数__  
        １人
    - ### __役割__
        設計、コーディング

- ## 使用言語・OSについて  
    - ### __使用言語__
        PHP 7.4.12  
        MySQL 5.7.32
    - ### __開発環境__
        MAMP 6.3

- ## 環境構築の手順  
    1. [MAMP](https://www.mamp.info/de/downloads/)をダウンロードする。  　　
    ![MAMPのダウンロード画面](https://dl.dropboxusercontent.com/s/w8x7xsr628gzjl4/mamp.png)

    2. MAMPを起動する。
    ![MAMPを起動した画面](https://dl.dropboxusercontent.com/s/91ka1f0bsgxczvt/startMamp.png)

    3. MAMPの起動画面から、Preferences -> Server -> Choose... からDocument rootに作業ディレクトリを選択し、OKを押す。
    ![Document rootをカレントディレクトリに設定する画面](https://dl.dropboxusercontent.com/s/xkvse72e6sd79x1/setMamp.png)

    4. ホーム画面から右上のStartを押し、サーバーを起動する。デェフォルトでは、ポート番号は8888に設定してある。詳細は、Preferences -> Portsから確認できる。
    ![ポート番号を確認できる画面](https://dl.dropboxusercontent.com/s/vgnjhfz2li1ktgx/Server.png)
    
    5. Google Chromeを開き、[http://localhost:8888/phpmyadmin/](http://localhost:8888/phpmyadmin/)にアクセスする。
    ![phpMyAdmin](https://dl.dropboxusercontent.com/s/yjw28eixqkdvdz6/phpmyadmin.png)

    6. ユーザーアカウント -> ユーザーアカウントを追加する から新たにユーザーアカウントを作成し、グローバル特権に全てチェックする。  
    ユーザー名：kurokuro   
    ホスト名：localhost  
    パスワード：secret

- ## デモ
    1. サーバーを起動した状態で、[http://localhost:8888/](http://localhost:8888/)にアクセスする。  
    ![ホーム画面](https://dl.dropboxusercontent.com/s/gnvl93m117i1fw5/tora_index.png)  

    2. ページ上部の記事作成より、記事を作成する。  
    ![記事作成画面](https://dl.dropboxusercontent.com/s/r2pzn6hvcbcg7ev/tora_create.png)  

    3. [ホーム画面](http://localhost:8888/)に戻り、投稿を確認する。  
    ![ホーム画面](https://dl.dropboxusercontent.com/s/1kqsa5n3piga6rf/article.png)


- ## 注意した機能や工夫した点  
    - 誰でも、登録などの面倒な作業をしなくても、簡単に投稿ができるようにしました。
    - どの端末からでも見栄えが良いように、Bootstrapを用いて、レスポンシブデザインに対応させました。
    - よく使う機能に関しては、関数としてまとめ、template.phpにまとめました。
