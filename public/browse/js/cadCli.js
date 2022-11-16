$(document).ready(function(){

    // submit button click
    $("#createcli").click(function(){

        var namer = $("#cname").val();
        var contactr = $("#ccontact").val();
        var langr = [];
        var id = null;

        // Initializing array with Checkbox checked values
        $("input[name='prolangr']:checked").each(function(){
            langr.push(this.value);
        });

        if(contactr != ''){
            $.ajax({
                url: '../../../Controller/C_cadcliente.php', 
                type: 'post',
                data: {nome:namer,contato:contactr,categoria:langr},
                dataType: 'JSON',
                success: function(response){
                  
                }
            });
        }
    });

});