# Copiando o arquivo de configurações da aplicação
cp app/.env.example app/.env

# Criando os diretórios necessários dentro de storage
cd app && composer storage

# Criando os containers
cd .. && docker-compose up -d