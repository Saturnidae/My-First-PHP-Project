<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Teste
    <?php
        echo "Hello World";
        function mostraGatinhos() {
            for($i = 0; $i < 80; $i++ ) {
            
            
                echo date("s")%2;
    
    
                if(date("s")%2 === 1) {
                    echo '      <img src="https://www.whiskas.com.br/sites/g/files/fnmzdf2156/files/inline-images/e-normal-gato-dormir-tanto-03.png" alt="" width="200"> 
                     <img src="https://www.zooplus.pt/magazine/wp-content/uploads/2021/05/nebelung-moechtet-spielen-1024x684-1.jpeg" alt="" width="200">';
                } else {
                    echo '      
                    <img src="https://www.zooplus.pt/magazine/wp-content/uploads/2021/05/nebelung-moechtet-spielen-1024x684-1.jpeg" alt="" width="200">
                    <img src="https://www.whiskas.com.br/sites/g/files/fnmzdf2156/files/inline-images/e-normal-gato-dormir-tanto-03.png" alt="" width="200"> 
    
                     ';
                }
                echo "<br/>";
                
            }
        }

        mostraGatinhos();
        


    ?>



</body>
</html>