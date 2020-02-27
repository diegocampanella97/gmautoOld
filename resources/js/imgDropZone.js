import { get } from "http";

$(function(){

    if( $("#dropzone").length > 0 ) {
        let token = $('meta[name="csrf-token"').attr('content');
        let uniqueSecret = $('input[name="uniqueSecret"]').attr('value');
        
        let drop = new Dropzone('#dropzone', {
            url :'/aggiungiAuto/img/upload',
            params: {
                _token: token,
                uniqueSecret:uniqueSecret,
            },
            addRemoveLinks: true,
            dictDefaultMessage:"Trascina o seleziona i file",

            init:function(){
                $.ajax({
                    type:'GET',
                    url:'/aggiungiAuto/img',
                    data:{
                        uniqueSecret:uniqueSecret
                    },
                    dataType:'json'
                })
                
                .done(
                    function(data){
                    $.each(data, function(key, value){
                        let file = {
                            servedId:value.id
                        };
                        
                        // console.log(value);
                        drop.options.addedfile.call(drop, file);
                        drop.options.thumbnail.call(drop, file, value.src);
                    });
                });
            }
        });

        


        drop.on("success", function(file, response) {
            file.servedId = response.id;
        });

        drop.on("removedfile", function(file) {
            $.ajax({
                type:'DELETE', 
                url: '/aggiungiAuto/img/remove',
                data: {
                    _token: token,
                    id:file.servedId,
                    uniqueSecret:uniqueSecret,
                },
                dataType: 'json'
            })
        });
    }

})