
# Dictionary App
Simple app, that allows users to add words and definitions.





## Features

- Login and register system
- adding new words only for authenticated users
- adding definitions to existing words



## Tech Stack

**Client:** JS, HTML , CSS

**Server:** PHP, Laravel, MySQL


## Installation

1. Clone repository:

```bash
  git clone https://github.com/krystiano13/words.git
  cd words
```

2. Install npm and composer dependencies:

```bash
  npm install
  composer install
```

3. Create a copy of your .env file:

```bash
    cp .env.example .env
```

4. Generate an app encryption key

```bash
    php artisan key:generate
```

5. Create an empty database for our application\
6. In the .env file, add database information to allow Laravel to connect to the database\
7. Migrate the database

```bash
    php artisan migrate
```