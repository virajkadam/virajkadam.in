git init

git config core.fileMode false
git config core.autocrlf false

git add .
git commit -m "'$1'"

git rm -r --cached .
git add .
git commit -m "'$1'"

git pull origin master

chmod -R 777 ../virajkadam.in/
chown -R www-data:www-data ../virajkadam.in/

git push origin HEAD:master