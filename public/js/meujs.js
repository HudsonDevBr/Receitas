if (document.getElementById("receita") == null) {
    document.getElementById("destaque").remove();
    document.getElementById("maisVistos").remove();
    document.getElementById("catDetalhe").style.flexDirection = "column";
    document.write('<p>Não existem Receitas nessa categoria</p>');
}

