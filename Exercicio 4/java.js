function InserirNovoPost() {
    let nome = document.getElementById("nome");
    let email = document.getElementById("email");
    let body = document.getElementById("body");
    let tabela = document.getElementById("tabela-pessoas");

    
    fetch('https://jsonplaceholder.typicode.com/comments')
    .then(
        response => response.json()
    )
    .then(
        data => {             
            data.forEach( pessoa => {
                    let linha = tabela.insertRow(-1);
                    
                    let nome = linha.insertCell(0);
                    let email = linha.insertCell(1);                    
                                                             
                    nome.innerHTML = pessoa.name;
                    email.innerHTML = pessoa.email;                   
                    
                }
            )

             
        }
    )
}