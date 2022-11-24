


$("#form_categorias").submit(function(){
        var nombre = $("#categorias").val();

    if($.trim(nombre)===''){
        alert("agregar categoria\njuansegundo");
        return false;
        }
        return true;
        });
        
$("#form_categorias").submit(function (){
    var nombre = $("#categorias").val();

    if($.trim(nombre)===''){
        alert("debe completar la categoria \nJuan Segundo");
    return false;
       }
    return true;
});

$("#form_productos").submit(function (){
    var producto = $("#pNombre").val();
    var descripciones = $("#descripciones").val();
    var categorias = $("#cate").val();
    var precios = $("#precio").val();
    var imagen = $("#imagen") .val();
    
    var errores = [];
    
    if($.trim(producto)===''){
       errores.push("debe ingresar el producto");
       
    if ($.trim(descripciones)==='')
        errores.push("debe ingresar la descripcion");
    
    if ($.trim(categorias)==='')
        errores.push("debe ingresar la categoria");
    
    if ($.trim(precios)==='')
        errores.push("debe ingresar el precio");
    
    if ($.trim(imagen)==='')
        errores.push("debe ingresar la imagen");
    
    
    if (errores.lenght > 0)
        errores.push("nJuan Segundo");
        alert(errores.join("\n"));
        return false;
       }
        return true;
    
    
});
