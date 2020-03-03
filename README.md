# Symfony Docker

#### Docker

Build container
```
docker build
```

Run container
```
docker-composer up -d
```

Enter to php container
```
docker-compose run php bash
```

#### Install Symfony

Enter to php container
```
docker-compose run php bash
```

Configure GIT
```
git config --global user.email "{GIT_EMAIL}"
git config --global user.name "{GIT_USERNAME}"
```

Install Symfony
```
symfony new . --full
```
