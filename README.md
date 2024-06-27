# easeshop
 projeto próprio
 
Verificação do Método de Requisição:

O código verifica se a requisição é do tipo POST, indicando que o formulário foi submetido.
Obtenção de Dados do Formulário:

Os dados do formulário, como o nome e o preço do produto, são capturados.
Configuração do Upload de Arquivos:

Define-se o diretório de destino para o upload e o caminho completo do arquivo.
A extensão do arquivo é obtida para validação.
Validação da Imagem:

Verifica-se se o arquivo é uma imagem válida.
Verifica-se se a extensão do arquivo é permitida (JPG, JPEG ou PNG).
Processo de Upload:

Se não houver erros, o arquivo é movido para o diretório de destino.
Caso contrário, uma mensagem de erro é exibida.
Conexão com o Banco de Dados:

Estabelece-se uma conexão com o banco de dados usando PDO.
Configurações de conexão, como servidor, nome de usuário, senha e nome do banco de dados, são definidas.
Inserção de Dados no Banco de Dados:

Uma consulta SQL é preparada e executada para inserir os dados do produto (nome, preço, imagem) no banco de dados.
Em caso de sucesso, o usuário é redirecionado para uma página específica.
Erros durante a inserção são capturados e exibidos.
Fechamento da Conexão:

A conexão com o banco de dados é fechada após todas as operações.
Pontos Chave:
Segurança:

Uso de PDO para prevenir SQL Injection.
Validação de imagens para garantir que apenas arquivos permitidos sejam enviados.
Tratamento de Erros:

Mensagens claras para o usuário em caso de falhas durante o upload ou inserção no banco de dados.
Redirecionamento:

Após o sucesso na operação de inserção, redireciona o usuário para uma página específica, melhorando a experiência do usuário.
Esses pontos garantem que o processo de upload e inserção de dados no banco de dados seja seguro, eficiente e claro para o usuário.