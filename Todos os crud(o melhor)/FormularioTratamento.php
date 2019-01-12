<html>
    <head>
        <title>Tratamento de Formulário</title>
    </head>
    <body>
        
        <?php
        
        /*
        
        RESETANDO A SENHA DO MYSQL NO WAMP
                
        *** Cria arquivo texto na pasta bin do mysql:
        ALTER USER 'root'@'localhost' IDENTIFIED BY 'abacaxi';
        
        *** Desliga wamp
        
        *** Acessa a pasta bin do MySQL via prompt de comando e executa:
        mysqld --init-file=arquivo.txt
        
        CRIANDO O BANCO DE DADOS E A TABELA
        
        USE softblue;

        CREATE TABLE pessoas
        (
        	id INT NOT NULL AUTO_INCREMENT,
        	nome VARCHAR(64) NOT NULL,
        	idade SMALLINT NULL,
        	email VARCHAR(64) NOT NULL,
        	facebook VARCHAR(64) NOT NULL,
        	estadocivil VARCHAR(16) NULL,
        	PRIMARY KEY (id)
        );
        
        */
        
        echo "Nome informado: ".$_POST["nome"]."<br>";
        echo "CPF informado: ".$_POST["cpf"]."<br>";
        echo "E-mail informado: ".$_POST["email"]."<br>";
        echo "E-mail informado: ".$_POST["cidade"]."<br>";
        echo "E-mail informado: ".$_POST["estado"]."<br>";
        
        
        echo "Tamanho de uma string: ".strlen(utf8_decode("André"))."<br>";
        echo "Resultado de filter_var para campo numérico: ".filter_var("5", FILTER_VALIDATE_INT)."<br>";
        
        $resultado = "";
        
        if(isset($_POST["nome"]) == FALSE || strlen(utf8_decode($_POST["nome"])) < 5)
        {
            $resultado = "O nome não é válido.";
        }
        else if(isset($_POST["cpf"]) == FALSE || filter_var($_POST["idade"], FILTER_VALIDATE_INT) == FALSE)
        {
            $resultado = "A idade não é válida.";
        }
        else if(isset($_POST["email"]) == FALSE || filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == FALSE)
        {
            $resultado = "O e-mail não é válido.";
        }
        else
        {
            $resultado = "Sucesso!";
            
            // Bancos de dados (início)
            
            try
            {
                $connection = new PDO("mysql:host=localhost;dbname=softblue", "root", "");
                $connection->exec("set names utf8");
            }
            catch(PDOException $e)
            {
                echo "Falha: ".$e->getMessage();
                exit();
            }
            
            $sql = "INSERT INTO clientes (nome, cpf, email, cidade, estado) VALUES (?, ?, ?, ?, ?)";
            
            $stmt = $connection->prepare($sql);
            
            $stmt->bindParam(1, $_POST["nome"]);
            $stmt->bindParam(2, $_POST["idade"]);
            $stmt->bindParam(3, $_POST["email"]);
            $stmt->bindParam(4, $_POST["cidade"]);
            $stmt->bindParam(5, $_POST["estado"]);
            
            $stmt->execute();
            
            if($stmt->errorCode() != "00000")
            {
                $resultado = "Erro código ".$stmt->errorCode().": ";
                $resultado = $resultado . implode(", ", $stmt->errorInfo());
            }
            
            
            // Bancos de dados (fim)
        }

        echo $resultado;

        ?>
    </body>
</html>
