var $conteudogeneral = document.querySelector(".conteudo-general");
var $conteudoEmArray = [].slice.call(document.querySelectorAll(".content"));
var $botoesDeFechar = [].slice.call(
  document.querySelectorAll(".content-botao-fechar")
);

setTimeout(function () {
  $conteudogeneral.classList.remove("js-conteudo-general");
}, 200);

$conteudoEmArray.forEach(function ($content) {
  $content.addEventListener("click", function () {
    if (this.classList.contains("caixa-conteudo-ativo")) return;
    $conteudogeneral.classList.add("caixa--content-ativo");
    this.classList.add("caixa-conteudo-ativo");
  });
});

$botoesDeFechar.forEach(function ($btn) {
  $btn.addEventListener("click", function (e) {
    e.stopPropagation();
    $conteudogeneral.classList.remove("caixa--content-ativo");
    document
      .querySelector(".content.caixa-conteudo-ativo")
      .classList.remove("caixa-conteudo-ativo");
  });
});