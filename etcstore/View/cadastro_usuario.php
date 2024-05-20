<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Usuário</title>
  <link rel="stylesheet" href="../CSS/estilo.css">
  <link rel="stylesheet" href="../CSS/estilo_cadastro.css">
</head>
<body> 
   <!--inicio barra de navegação-->
  <div class="container_nav">
    <nav>
      <ul>
        <li id="logo">
          LOJA  DE INFORMATICA
        </li>
        <li>
          <a href="home.html" class="item_menu">Home</a>
        </li>
        <li>
          <a href="#" class="item_menu">Produtos</a>
        </li>
        <li>
          <a href="cadastro_usuario.html" class="item_menu">Cadastro de Usuário</a>
        </li>
        <li>
          <a href="login.html" class="item_menu">Login</a>
        </li>
      </ul>
    </nav>
  </div>

  <!--fim barra de navegação-->
  <div id="container_cadastro">
    <h1>CADASTRO DE USUÁRIO</h1>
    <form action="../Control/cadastroUsuarioControl.php" method="POST" id="formulario_cadastro">
    <fieldset>
        <legend>
            DADOS PESSOAIS:
        </legend>
      <div>
        NOME:<br/><input type="text" name="nome" class="input_text" >
      </div>
      <div>
        CPF/CNPJ:<br/> <input type="text" name="cpf_cnpj" class="input_text_num" >
      </div>
    </fieldset>
    <fieldset>
        <legend>
           DADOS DO ENDEREÇO
        </legend>
      <div>
      <div>
        ENDEREÇO:<br/><input type="text" name="endereco" class="input_text"  >
      </div>
      <div>
        NÚMERO: <br/><input type="text" name="numero" class="input_text_num" >
      </div>
      <div>
        COMPLEMENTO:<br/><input type="text" name="complemento" class="input_text">
      </div>
      <div>
        BAIRRO:<br/><input type="text" name="bairro" class="input_text">
      </div>
      <div>
        CIDADE:<br/><input type="text" name="cidade" class="input_text">
      </div>
      <div>
        UF:<br/><select name="uf">
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>
      </div>
      <div>
        CEP: <br/><input type="text" name="cep" class="input_text_num" >
      </div>
    </fieldset>
    <fieldset>
        <legend>
           INFORMAÇÕES PARA LOGIN
        </legend>
      <div>
    <div>
        LOGIN:<br/><input type="text" name="loginEmail" class="input_text"  >
      </div>
      <div>
        SENHA: <br/><input type="text" name="senha" class="input_text_num" >
      </div>
      <div>
        TIPO DE USUÁRIO: <br/><select name="tipoUsuario">
            <option value="a">Administrador</option>
            <option value="f">Funcionário</option>
            <option value="c">Cliente</option>
        </select>
      </div>
    </fieldset>
      <div id="submit_cadastro">
        <input type="submit" value="Cadastrar">
      </div>
    </form>

    </div>
    
  
</body>
</html>