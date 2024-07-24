const linksFiltro = document.querySelectorAll('.row.text-center .col a');
const itensResultados = document.querySelectorAll('#resultados .col');

linksFiltro.forEach(link => {
    link.addEventListener('click', (event) => {
        event.preventDefault();
        
        // Extrai a letra do texto do link (considerando que o texto é apenas a letra)
        const letraFiltro = link.textContent.trim().toUpperCase(); 

        itensResultados.forEach(item => {
            const titulo = item.querySelector('h6').textContent;
            const primeiraLetra = titulo.charAt(0).toUpperCase();

            if (letraFiltro === '#' || primeiraLetra === letraFiltro) {
                item.style.display = 'block'; // Exibe o item
            } else {
                item.style.display = 'none'; // Oculta o item
            }
        });
    });
});