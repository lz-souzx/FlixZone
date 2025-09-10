<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Administrador</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Faça o seu login</h1>
<div class="container">
    <div id="box">
     <label for="E-mail">Digite o seu e-mail:</label><br>
    <input type="email" name="email" id="email" required>

    <div>

    <label for="senha">Digite a sua senha:</label><br>
    <input type="password" name="senha" id="senha" required>
    </div>
   

    <form action="/submit" method="POST">
    <label for="ddd">DDD:</label><br>
    <select id="ddd" name="ddd" style="width: 40px;" required>
         <option value="">51</option>
        <option value="11">11 (São Paulo)</option>
        <option value="21">21 (Rio de Janeiro)</option>
        <option value="31">31 (Minas Gerais - Belo Horizonte)</option>
        <option value="41">41 (Paraná - Curitiba)</option>
        <option value="51">51 (Rio Grande do Sul - Porto Alegre)</option>
        <option value="61">61 (Distrito Federal - Brasília)</option>
        <option value="71">71 (Bahia - Salvador)</option>
        <option value="81">81 (Pernambuco - Recife)</option>
        <option value="85">85 (Ceará - Fortaleza)</option>
        <option value="91">91 (Pará - Belém)</option>
        <option value="92">92 (Amazonas - Manaus)</option>
        <option value="93">93 (Pará - Santarém)</option>
        <option value="94">94 (Pará - Marabá)</option>
        <option value="95">95 (Roraima - Boa Vista)</option>
        <option value="98">98 (Maranhão - São Luís)</option>
        <option value="99">99 (Maranhão - Imperatriz)</option>
        <option value="27">27 (Espírito Santo - Vitória)</option>
        <option value="28">28 (Espírito Santo - Linhares)</option>
        <option value="32">32 (Minas Gerais - Juiz de Fora)</option>
        <option value="33">33 (Minas Gerais - Governador Valadares)</option>
        <option value="34">34 (Minas Gerais - Uberaba)</option>
        <option value="35">35 (Minas Gerais - Montes Claros)</option>
        <option value="37">37 (Minas Gerais - Divinópolis)</option>
        <option value="38">38 (Minas Gerais - Teófilo Otoni)</option>
        <option value="42">42 (Santa Catarina - Joinville)</option>
        <option value="43">43 (Paraná - Londrina)</option>
        <option value="44">44 (Paraná - Maringá)</option>
        <option value="45">45 (Paraná - Foz do Iguaçu)</option>
        <option value="46">46 (Paraná - Cascavel)</option>
        <option value="47">47 (Santa Catarina - Blumenau)</option>
        <option value="48">48 (Santa Catarina - Florianópolis)</option>
        <option value="49">49 (Santa Catarina - Chapecó)</option>
        <option value="51">51 (Rio Grande do Sul - Porto Alegre)</option>
        <option value="52">52 (Mato Grosso do Sul - Campo Grande)</option>
        <option value="53">53 (Rio Grande do Sul - Pelotas)</option>
        <option value="54">54 (Rio Grande do Sul - Caxias do Sul)</option>
        <option value="55">55 (Rio Grande do Sul - Santa Maria)</option>
        <option value="62">62 (Goiás - Goiânia)</option>
        <option value="63">63 (Tocantins - Palmas)</option>
        <option value="64">64 (Goiás - Anápolis)</option>
        <option value="65">65 (Mato Grosso - Cuiabá)</option>
        <option value="66">66 (Mato Grosso - Rondonópolis)</option>
        <option value="67">67 (Mato Grosso do Sul - Dourados)</option>
        <option value="68">68 (Acre - Rio Branco)</option>
        <option value="69">69 (Rondônia - Porto Velho)</option>
        <option value="71">71 (Bahia - Salvador)</option>
        <option value="73">73 (Bahia - Feira de Santana)</option>
        <option value="74">74 (Bahia - Juazeiro)</option>
        <option value="75">75 (Bahia - Ilhéus)</option>
        <option value="77">77 (Bahia - Vitória da Conquista)</option>
        <option value="78">78 (Mato Grosso - Sinop)</option>
        <option value="79">79 (Sergipe - Aracaju)</option>
        <option value="81">81 (Pernambuco - Recife)</option>
        <option value="82">82 (Alagoas - Maceió)</option>
        <option value="83">83 (Paraíba - João Pessoa)</option>
        <option value="84">84 (Rio Grande do Norte - Natal)</option>
        <option value="85">85 (Ceará - Fortaleza)</option>
        <option value="86">86 (Piauí - Teresina)</option>
        <option value="87">87 (Pernambuco - Petrolina)</option>
        <option value="88">88 (Ceará - Juazeiro do Norte)</option>
        <option value="89">89 (Piauí - Parnaíba)</option>
        <option value="91">91 (Pará - Belém)</option>
        <option value="92">92 (Amazonas - Manaus)</option>
        <option value="93">93 (Pará - Santarém)</option>
        <option value="94">94 (Pará - Marabá)</option>
        <option value="95">95 (Roraima - Boa Vista)</option>
        <option value="98">98 (Maranhão - São Luís)</option>
        <option value="99">99 (Maranhão - Imperatriz)</option>
    </select>
<br>
    <label for="telefone">Telefone:</label><br>
    <input type="tel" id="telefone" name="telefone" placeholder="0 0000-0000" pattern="\d{4}-\d{4}" required>
<br>
    <button type="submit">Enviar</button>
</form>
 </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>