document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.descricaolong');

    tabs.forEach(tab => tab.addEventListener('click', () => tabClicada(tab)));

    function tabClicada(tab) {
        const contents = document.querySelectorAll('.content');
        tabs.forEach(tab => tab.classList.remove('active'));
        tab.classList.add('active');
        contents.forEach(content => content.classList.remove('show'));
        const contentID = tab.getAttribute('content-id');
        const content = document.getElementById(contentID);
        content.classList.add('show');
        
    }

    // Mostrar o conteúdo padrão ao carregar a página
    const defaultContent = document.querySelector('.content.show');
    if (!defaultContent) {
        const firstContent = document.querySelector('.content');
        firstContent.classList.add('show');
    }
});