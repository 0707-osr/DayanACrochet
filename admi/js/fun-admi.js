function add_products() {
    
    var datos = new FormData($('#products')[0]);
    $.ajax({
        type: "POST",
        url: "../php/add-products.php",
        data: datos,
        contentType: false,
        processData: false,
        success: function (r) {
            if (r == 1) {
                alert("algoe sta fallando");
            }
            else {
                $('#cargar-products').load('../php/ajax-load-products.php');
            }
        }
    });
}

function delete_products(cod) {

     $.ajax({
        type: "GET",
        url: "../php/delete-products.php",
        data: {cod},
        success: function (r) {
            if (r == 1) {
                alert("algoe sta fallando");
            }
            else {
                $('#cargar-products').load('../php/ajax-load-products.php');
            }
        }
    });
}

function delete_users(cod) {

    $.ajax({
       type: "GET",
       url: "../php/delete-user.php",
       data: {cod},
       success: function (r) {
           if (r == 1) {
               alert("algoe sta fallando");
           }
           else {
               $('#cargar-users').load('../php/ajax-load-user.php');
               $('#table-user').DataTable();
           }
       }
   });
}

function aceptar_pedido(cod,fecha) {

    $.ajax({
       type: "GET",
       url: "../php/aceptar-pedido.php",
       data: {cod,fecha},
       success: function (r) {
           if (r == 1) {
               alert("algoe sta fallando");
           }
           else {
            $('#content-pedidos').load('../php/ajax-load-pedidos.php');
           }
       }
   });
}

function cancelar_pedido(cod,fecha) {

    $.ajax({
       type: "GET",
       url: "../php/cancelar-pedido.php",
       data: {cod,fecha},
       success: function (r) {
           if (r == 1) {
               alert("algoe sta fallando");
           }
           else {
            $('#content-pedidos').load('../php/ajax-load-pedidos.php');
           }
       }
   });
}

function add_client(){
    var datos = $('#registro').serialize();
    $.ajax({
        type: "POST",
        url: '../admi/php/add_users.php',
        data: datos,

        success: function (r) {
            if (r == 1) {
                alert("falla del sistema");
            }
            else {
                alert("USUARIO AGREGADO", "a la lista", "success"); 

            }
        }
    });   
}