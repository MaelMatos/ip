<?php
$i = 0;
echo "<ul class='nav nav-tabs' id='myTab' role='tablist'>";
$text = [
    "Conceitos de Segurança da Informação",
    "Cartilha de Segurança para Internet",
    "Mecanismos de Segurança",
    "Características de segurança da informação",
    "Políticas de segurança",
    "Criptografia e Firewall",
    "Segurança em redes de computadores e dispositivos móveis",
    "Identificação de vulnerabilidades",
    "Engenharia social",
    "Varredura/análise",
    "Negação de serviço - DoS e DDoS",
    "Testes de penetração e de vulnerabilidades",
    "Injection SQL",
    "Footprint - descoberta de informações"
];

while ($i < 14){
    include "test.php";
    $i= $i+1;
}
echo "</ul>";
?>