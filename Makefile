.PHONY: help sail up down shell composer yarn artisan migrate seed test logs tail-log \
	clear cache-clear routes models tinker fresh restart xdebug ide-helper status check watch yarn-clean

# デフォルトのターゲット
help:
	@echo "使用可能なコマンド:"
	@echo ""
	@echo "【基本コマンド】"
	@echo "  make sail [コマンド]  - Sailコマンドを実行 (例: make sail ps)"
	@echo "  make up              - コンテナを起動"
	@echo "  make down            - コンテナを停止"
	@echo "  make restart         - コンテナを再起動"
	@echo "  make shell           - コンテナのシェルに接続"
	@echo ""
	@echo "【パッケージ管理】"
	@echo "  make composer [コマンド] - Composerコマンドを実行 (例: make composer install)"
	@echo "  make yarn [コマンド]   - yarnコマンドを実行 (例: make yarn install)"
	@echo "  make yarn-clean      - node_modules と package-lock.json を削除して再インストール"
	@echo ""
	@echo "【データベース】"
	@echo "  make migrate         - マイグレーションを実行"
	@echo "  make seed            - シードを実行"
	@echo "  make fresh           - DBを再構築してシードを実行"
	@echo ""
	@echo "【デバッグ】"
	@echo "  make logs            - Laravelのログを表示"
	@echo "  make tail-log        - ログをリアルタイムで監視"
	@echo "  make xdebug          - Xdebugを有効にしてシェルを起動"
	@echo "  make tinker          - Laravelのtinker対話型コンソールを起動"
	@echo "  make clear           - 全キャッシュをクリア"
	@echo ""
	@echo "【開発ユーティリティ】"
	@echo "  make test            - テストを実行"
	@echo "  make routes          - ルート一覧を表示"
	@echo "  make models          - モデル一覧を表示"
	@echo "  make watch           - Viteを使った開発サーバーを起動"
	@echo "  make status          - 環境の状態を確認"
	@echo "  make ide-helper      - IDE Helper用のファイル生成（PHPStorm用）"
	@echo "  make check           - 一括ヘルスチェック（テスト、リント）"
	@echo ""
	@echo "  make artisan [コマンド] - Artisanコマンドを実行 (例: make artisan make:model User)"

# Sailコマンドを実行
sail:
	./vendor/bin/sail $(filter-out $@,$(MAKECMDGOALS))

# コンテナ起動
up:
	./vendor/bin/sail up -d

# コンテナ停止
down:
	./vendor/bin/sail down

# コンテナ再起動
restart:
	./vendor/bin/sail down && ./vendor/bin/sail up -d

# シェルに接続
shell:
	./vendor/bin/sail shell

# Composerコマンド実行
composer:
	./vendor/bin/sail composer $(filter-out $@,$(MAKECMDGOALS))

# yarnコマンド実行
yarn:
	./vendor/bin/sail yarn $(filter-out $@,$(MAKECMDGOALS))

# node_modulesとpackage-lock.jsonを削除して再インストール
yarn-clean:
	@echo "node_modules と関連ファイルを削除中..."
	./vendor/bin/sail exec laravel.test rm -rf node_modules package-lock.json yarn.lock
	@echo "パッケージを再インストール中..."
	./vendor/bin/sail yarn install
	@echo "✓ パッケージを再インストールしました"

# Artisanコマンド実行
artisan:
	./vendor/bin/sail artisan $(filter-out $@,$(MAKECMDGOALS))

# マイグレーション実行
migrate:
	./vendor/bin/sail artisan migrate

# シード実行
seed:
	./vendor/bin/sail artisan db:seed

# テスト実行
test:
	./vendor/bin/sail test

# ログ表示
logs:
	./vendor/bin/sail exec laravel.test cat storage/logs/laravel.log | tail -n 100

# ログをリアルタイムで監視
tail-log:
	./vendor/bin/sail exec laravel.test tail -f storage/logs/laravel.log

# Tinker対話型コンソールを起動
tinker:
	./vendor/bin/sail artisan tinker

# すべてのキャッシュをクリア
clear:
	./vendor/bin/sail artisan cache:clear
	./vendor/bin/sail artisan config:clear
	./vendor/bin/sail artisan route:clear
	./vendor/bin/sail artisan view:clear
	@echo "✓ すべてのキャッシュがクリアされました"

# DBを再構築してシードを実行
fresh:
	./vendor/bin/sail artisan migrate:fresh --seed
	@echo "✓ データベースを再構築し、シードを実行しました"

# ルート一覧を表示
routes:
	./vendor/bin/sail artisan route:list

# モデル一覧を表示
models:
	./vendor/bin/sail artisan model:show

# Xdebugを有効にしてシェルを起動
xdebug:
	XDEBUG_MODE=debug ./vendor/bin/sail shell

# IDE Helper用のファイル生成
ide-helper:
	./vendor/bin/sail artisan ide-helper:generate
	./vendor/bin/sail artisan ide-helper:models -N
	./vendor/bin/sail artisan ide-helper:meta
	@echo "✓ IDE Helper用のファイルが生成されました"

# 環境の状態を確認
status:
	@echo "【Docker コンテナの状態】"
	@./vendor/bin/sail ps
	@echo "\n【ディスク使用状況】"
	@./vendor/bin/sail exec laravel.test df -h
	@echo "\n【Laravel バージョン】"
	@./vendor/bin/sail php artisan --version
	@echo "\n【PHP バージョン】"
	@./vendor/bin/sail php -v | head -n 1
	@echo "\n【MySQL バージョン】"
	@./vendor/bin/sail exec mysql mysql -V
	@echo "\n【Node バージョン】"
	@./vendor/bin/sail node -v

# Viteを使った開発サーバーを起動
watch:
	./vendor/bin/sail yarn run dev

# 一括ヘルスチェック（テスト、リント）
check:
	@echo "テストを実行中..."
	@./vendor/bin/sail test
	@echo "\nコードスタイルをチェック中..."
	@./vendor/bin/sail composer lint
	@echo "\n✓ チェック完了"

# 引数を受け付けるためのダミーターゲット
%:
	@: