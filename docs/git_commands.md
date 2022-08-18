Задание имени пользователя и почтового адреса
git config --global user.name "mmxim.g"
git config --global user.email "ciremunsi@gmail.com"

Инициализация git
git init

Добавление файлов в репозиторий:
git add <file name>

Добавление всех файлов проекта в репозиторий:
git add .
git commit -m "Comment"

Просмотр состояния (статус) репозитория:
git status

Просмотр истории коммитов:
git log развернуто
git log --oneline сокращенный вариант

Отмена изменений
git reset --<хэш коммита к которому нужно откатиться>
git reset --d45dkf4

Github генерация access token
- правый верхний угол экрана опции аккаунта - Settings - Developer settings - Personal access token - 
Generate new token


Добавление на Github
git remote add origin https://github.com/gibonomakaka/poligon.local.git
git branch -M main
git push -u origin main

Получение изменений с github:
git pull origin main
