## Projekt Laravel 5

Projekt wykonywany zgodnie z kursem na stronie [http://nepras.pl](http://www.nerpas.pl)

#### Wymagania
Do poprawnego uruchomienia projektu w systemie Windows w wersji wyższej od XP instalujemy:
- git
- php: wersja 5.6 + mod_rewrite
- mysql
- composer
- nodejs

#### Instalacja
- Najpierw klonujemy repozytorium na dysk przy użyciu komendy 
~~~
git clone https://github.com/nepras/laravel5_kurs.git master
~~~

**Przechodzimy w wierszu poleceń do nowo utworzonego folderu master**

- **NodeJS**

Wykonujemy instalację pakietów node, wykonując polecenie:
~~~
npm install
~~~

- **Composer**

Wykonujemy instalację składników zapisanych w composer.json
~~~
composer install
~~~

- **Plik konfiguracyjny .env**
~~~
APP_ENV=local
APP_DEBUG=true
APP_KEY=SomeRandomString

DB_HOST=localhost
DB_DATABASE=laravel5kurs
DB_USERNAME=root
DB_PASSWORD=

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
~~~

- **Plik konfiguracyjny ftp**

W tym projekcie, wykorzystywana jest biblioteka anchu/ftp. Należy uruchomić polecenie tworzące plik
konfiguracyjny ftp z użyciem polecenia `php artisan vendor:publish --provider="Anchu\Ftp\FtpServiceProvider"`. Plik ten zawiera
tajne dane i został wykluczony z repozytorium w pliku `.gitignore`.

- **Instalujemy klucz szyfrujący** 

Będąc w głównym folderze projektu
uruchamiamy polecenie generujące klucz:
~~~
php artisan key:generate
~~~

#### Uruchomienie
Będąc w głównym folderze projektu, wykonujemy polecenie uruchamiające serwer
dla projektu laravel.
~~~
php artisan serve
~~~
Uruchamiamy przeglądarkę internetową pod adresem [http://localhost:8000](http://localhost:8000), aby
sprawdzić efekt działającego projektu.

- **Baza danych**
Tworzymy bazę danych MySql przykładowo o nazwie laravel5kurs. Uzupełniamy dane do połączenia w pliku `.env`

- **Migracja**
Celem utworzenia tabel w bazie danych, wykonujemy polecenie `php artisan migrate`.

- **Przykładowe dane**
Celem dodania przykładowych danych do bazy danych, wykonujemy polecenie `php artisan db:seed`
Przykładowe dane, zawierają autoryzację dla użytkownika o adresie email: `nowak@email.com`, z przypisanym hasłem `nowak`.

- **Podgląd działania**
Przechodzimy na stronę [http://localhost:8000/profil/login](http://localhost:8000/profil/login) i wykonujemy 
logowanie przy użyciu w/w danych. Przykładowo zgodnie z routingiem, przechodzimy na stronę 
[http://localhost:8000/back](http://localhost:8000/back).

