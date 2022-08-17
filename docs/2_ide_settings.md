1. Установка plugins:
1.1 File->settings->plugin(Cntr+Alt+S)->search->laravel plugin
Установить расширения: Laravel, Blade
1.2 Установка Laravel IDE Helper
Внимание: перед установкой проверить какую версию Laravel и php поддерживает устанавливаемый пакет.
1.2.1 Ресурс: https://github.com/barryvdh/laravel-ide-helper
1.2.2 Установка: php composer.phar require --dev barryvdh/laravel-ide-helper
Установка конкретной версии: php composer.phar require --dev barryvdh/laravel-ide-helper ^2.1
1.2.3 В файл laravel.json в секцию "scripts" добавть настройки:
"post-update-cmd": [
        "Illuminate\\Foundation\\ComposerScripts::postUpdate",
        "@php artisan ide-helper:generate",
        "@php artisan ide-helper:meta"
    ]
Запуск скрипта после команды php composer.phar update

2. Установка рабочих папок/файлов в проекте
2.1 File->settings->Directories

3. Установка Laravel Debugbar
Внимание: перед установкой проверить какую версию Laravel и php поддерживает устанавливаемый пакет.
3.1 Ресурс: https://github.com/barryvdh/laravel-debugbar
3.2 Установка: php composer.phar require barryvdh/laravel-debugbar --dev
Установка конкретной версии: php composer.phar require barryvdh/laravel-debugbar ^3.2  --dev

