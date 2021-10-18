<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora - PHP</title>
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    <script type="text/javascript" src="calc.js"></script>
</head>
<body>
    <div class="fundo">
        <div class="calculadora">
            <h1>Calculadora</h1>
            <form method="GET" action="calc.php">
             <input type="text" name="resultado" id="resultado" value="
                    <?php echo (!empty($_GET['total']) ? $_GET['total'] : ''); ?>"></input>
             <table>
                <tr>
                    <td><button class="botao" onclick="clean()">C</button></td>
                    <td><button class="botao" onclick="back()"><</button></td>
                    <td><button class="botao" onclick="insert('/')">></button></td>
                    <td><button class="botao" onclick="insert('*')">X</button></td>
                 </tr>
                 <tr>
                    <td><button class="botao" onclick="insert('7')">7</button></td>
                    <td><button class="botao" onclick="insert('8')">8</button></td>
                    <td><button class="botao" onclick="insert('9')">9</button></td>
                    <td><button class="botao" onclick="insert('-')">-</button></td>
                 </tr>
                 <tr>
                    <td><button class="botao" onclick="insert('4')">6</button></td>
                    <td><button class="botao" onclick="insert('5')">5</button></td>
                    <td><button class="botao" onclick="insert('6')">4</button></td>
                    <td><button class="botao" onclick="insert('+')">+</button></td>
                 </tr>
                 <tr>
                    <td><button class="botao" onclick="insert('1')">3</button></td>
                    <td><button class="botao" onclick="insert('2')">2</button></td>
                    <td><button class="botao" onclick="insert('3')">1</button></td>
                    <td rowspan="2">
                        <button type="submit" class="botao" style="height: 106px">=</button>
                    </td>
                 </tr>
                 <tr>
                    <td colspan="2"><button class="botao" style="width: 106px;" onclick="insert('0')">0</button></td>
                    <td><button class="botao" onclick="insert('.')">.</button></td>
                 </tr>
             </table>
        </div>
    </div>
</body>
</html>