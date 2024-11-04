function copy_text() {
    // Seleciona o elemento que contém as informações
    var texto = document.getElementById("information");

    // Cria um elemento textarea temporário
    var temp = document.createElement("textarea");

    // Adiciona o texto ao elemento temporário
    temp.value = texto.textContent;

    // Adiciona o elemento temporário ao documento (fora da visualização)
    document.body.appendChild(temp);

    // Seleciona todo o texto no elemento temporário
    temp.select();

    // Copia o texto para a área de transferência
    document.execCommand("copy");

    // Remove o elemento temporário
    document.body.removeChild(temp);   


    // Mostra uma mensagem de sucesso (opcional)
    alert("Copied!");
}