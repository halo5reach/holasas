$(document).ready(function(){

 // buscar();
});

     
      var ajx=function(){

          var select =$("#select").html();
          var msg =$("#buscar").val();
          if(msg!=""){
            var url="listado/"+select+"/"+msg;
          }else{
            var url="lista/"+select;
          }
          

           $.get(url,function(result){
              $("#tabla").html(result);
            });


      }

      $('#sel').click(function(e){
        var select = e.target.id;


        var url="lista/"+select;

        $.get(url,function(result){
          $("#tabla").html(result);              
        });
      });

      $(function(){
       $('#buscar').keyup(function(e){

              var msg = $(this).val();
              if(msg!=''){

                var select =$("#select").html();
                var url="listado/"+select+"/"+msg;

                 $.get(url,function(result){
                    $("#tabla").html(result);
                  });
              }
           })
      });

      $(document).on("click",".pagination li a",function(e){
        e.preventDefault();
        var url = $(this).attr("href");

        $.get(url,function(result){
          $("#tabla").html(result);
        })
      });

       var ficha_listar=function(id){
          var a="<?php echo csrf_token() ?>";
          $.ajaxSetup({
              headers: {
              'X-CSRF-TOKEN': a
              }
           });

          $.ajax({
              url: 'fichalistar/'+id,
              type: 'GET',                           
              success: function (data) {
                 $("#tabla").html(data);
              }              
          });
      }
      var certificar=function(id,aprendiz,ficha){
          var a="<?php echo csrf_token() ?>";
          $.ajaxSetup({
              headers: {
              'X-CSRF-TOKEN': a
              }
           });
          
          if(confirm('Quieres Certificar al Aprendiz '+aprendiz+' ?')){

          $.ajax({
              url: 'aprendiz/'+id+'/certificar/'+ficha,
              type: 'GET',                           
              success: function (data) {
                 ajx();
              }              
          });
          }
      }

      $(function(){
       $('#buscar_matriculas').keyup(function(e){

              var msg = $(this).val();
              if(msg!=''){

                var select =$("#select").html();
                var url="../../matricula/"+msg;

                 $.get(url,function(result){
                    $("#tabla").html(result);
                  });
              }
           })
      });
