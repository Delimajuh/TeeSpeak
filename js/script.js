
$(document).ready(function(){
    $(".comprar-btn").click(function(){
        var productId = $(this).data("product-id");
        // Envio da solicitação AJAX para processar a compra
        $.ajax({
            url: "processar_compra.php",
            type: "POST",
            data: { product_id: productId },
            success: function(response){
                // Lógica de manipulação da resposta do servidor (pode exibir uma mensagem de sucesso, etc.)
                console.log(response);
                alert("Compra realizada com sucesso!");
            },
            error: function(xhr, status, error){
                // Lidar com erros de requisição, se houver
                console.error(error);
                alert("Erro ao processar compra. Tente novamente mais tarde.");
            }
        });
    });
});
