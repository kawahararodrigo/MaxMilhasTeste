API - Correios
API responsável por consumir informações dos Correios.

Settings:

Lumen Framework - Versão 8.2.3
PHP - Versão 7.3


Requirements:

Lumen Framework


Endpoint API Consumer Correios.

http://localhost
http://localhost/v1/healthy
http://localhost/v1/search/{cep}


Instalação e Configuração:

Fazer o clone projeto

Acessar o diretório api-consumer-correios 
Renomear .env.example  para .env

Instalar dependências do projeto com: composer install


Subir a aplicação:
php -S localhost:8000 -t public


Arquivo Vagrantfile configurado para subir o Zabbix
Placa de rede em brigde 
Redirecionamente 80 8080

Acesso ao Zabbix : http://localhost:8080/zabbix/   ou http://IP/zabbix/

#Usuário defaut#  
Login: Admin
Senha: Zabbix
