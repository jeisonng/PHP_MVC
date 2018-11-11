$(document).ready(function () {
    var DIRPAGE="http://"+document.location.hostname+"/mvc/";
    $('#FormSeleciona').on('submit',function (event) {
        event.preventDefault();
        var dados=$(this).serialize();

        $.ajax({
            url: DIRPAGE+'cadastro/seleciona',
            method: 'post',
            dataType: 'html',
            data: dados,
            success:function (dados) {
                $('.resultado').html(dados);
            }

        });

    });
    $(document).on('click','.imageEdit', function () {
        var imgrel=$(this).attr('rel');
        $.ajax({
           url:DIRPAGE+'cadastro/puxaDB/'+imgrel,
           method:'post',
            dataType: 'html',
            data: {'Id':imgrel},
            success:function(data){
               $('.resultadoformulario').html(data);
            }
        });
    });
});