#!/bin/bash
cat << "EOF" 
                       __            _ ____      
  _________ __________/ /___ _____  (_) __ \____ 
 / ___/ __ `/ ___/ __  / __ `/ __ \/ / / / / __ \
/ /__/ /_/ / /  / /_/ / /_/ / /_/ / / /_/ / / / /
\___/\__,_/_/   \__,_/\__,_/ .___/_/\____/_/ /_/ 
                          /_/                   
EOF
echo "Subindo container"
docker-compose up -d
echo "Instalando as dependencias do composer no container"
docker exec -it app composer install
echo "Gerando key"
docker exec -it app php artisan key:generate
echo "Realizando migracoes"
docker exec -it app php artisan migrate
echo "Aplicacao rodando na porta 80!"
