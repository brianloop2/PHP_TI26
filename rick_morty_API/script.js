
const { createElement } = require("react")

const card = document.getElementById('rick-container')
function  procurarRick(id){
    return fetch("https://rickandmortyapi.com/api/character/" + id)
    // .then = Possui dois argumentos, ambos são "call back functions", sendo uma para o sucesso e outra para o fracasso da promessa.
    .then(function(resposta){
        return resposta.json()  //.json = banco de dados web
    })
}
async function carregarRick(){
    for(let i = 1; i <=20; i++){
        const rickAtual = await procurarRick(i)
        let nome = rickAtual.name 
        let idRick = rickAtual.id
        let imagem = rickAtual.image
        
        const coluna = document.createElement('div')    //criando uma <div>
        coluna.className = 'col';   //dando uma classe na div
        // .innerHTML => importando para o arquivo HTML
        coluna.innerHTML = `        
            <div class="botaoAbrir card h-100 shadow-sm" id="botaoAbrir">
            <div class="botaoAbrir card-body text-center">
                <img src="${imagem}" alt="${nome}">
                <h5 class="card-title">${nome}</h5>
                <p class="card-text text-muted">#${idRick}</p>
            </div>
            </div>
        `
        card.appendChild(coluna)
        
    }
}
//tela q aparece ao clicar no card

// Obtém o elemento que vai abrir o modal
// const botaoAbrir = document.getElementById('botaoAbrir');

// // Adiciona um evento de clique
// botaoAbrir.addEventListener('click', () => {
//   // 1. Cria a div do fundo do modal
//   const modalFundo = document.createElement('div');
//   modalFundo.id = 'modalFundo';
//   modalFundo.style.cssText = `
//     display: flex;
//     justify-content: center;
//     align-items: center;
//     position: fixed;
//     z-index: 1000;
//     left: 0;
//     top: 0;
//     width: 100%;
//     height: 100%;
//     background-color: rgba(0, 0, 0, 0.5);
//   `;

//   // 2. Cria a div do conteúdo do modal
//   const modalConteudo = document.createElement('div');
//   modalConteudo.style.cssText = `
//     background-color: #fff;
//     padding: 20px;
//     border-radius: 8px;
//     width: 90%;
//     max-width: 90vh;
//     height: 90%;
//     max-height: 60vh;
    
//     position: relative; /* Necessário para posicionar o 'x' */
//   `;

//   // 3. Cria o botão de fechar ('x')
//   const botaoFechar = document.createElement('span');
//   botaoFechar.innerHTML = '&times;';
//   botaoFechar.style.cssText = `
//     position: absolute;
//     top: 10px;
//     right: 15px;
//     font-size: 28px;
//     font-weight: bold;
//     color: #888;
//     cursor: pointer;
//   `;

//   // 4. Cria o texto do modal
//   const titulo = document.createElement('h2');
//   titulo.textContent = 'Modal de Exemplo';

//   const paragrafo = document.createElement('p');
//   paragrafo.textContent = 'Este é o conteúdo ';

//   // 5. Adiciona os elementos à div de conteúdo
//   modalConteudo.appendChild(botaoFechar);
//   modalConteudo.appendChild(titulo);
//   modalConteudo.appendChild(paragrafo);

//   // 6. Adiciona a div de conteúdo à div de fundo
//   modalFundo.appendChild(modalConteudo);

//   // 7. Adiciona o modal completo ao corpo da página
//   document.body.appendChild(modalFundo);

//   // Adiciona evento de clique para fechar o modal
//   botaoFechar.addEventListener('click', () => {
//     modalFundo.remove(); // Remove o modal da página
//   });

//   // Fecha o modal ao clicar fora dele
//   modalFundo.addEventListener('click', (evento) => {
//     if (evento.target === modalFundo) {
//       modalFundo.remove();
//     }
//   });
// });
























// function procurarRick(id){
//    const buscador = document.getElementById('buscador')
//     const resultadoBusca = document.getElementById('resultadoRick')

//    return fetch("https://rickandmortyapi.com/api/character/" + id)
//    .then(function(resposta2){
//        return resposta2.json();
//    })
// }
// function procurarRick(id) {
//   const buscador = document.getElementById('buscador');
//   const resultadoBusca = document.getElementById('resultadoRick');

//   return fetch("https://rickandmortyapi.com/api/character/" + id)
//     .then(function(resposta2) {
//       return resposta2.json();
//     });
// }