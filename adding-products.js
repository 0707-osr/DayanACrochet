//FUNCTION TO CART STORAGE 

function addProduct(product){
    product = product.split(",")
    let p = {
        id:product[0],
        name:product[1],
        price:product[2],
        ranking:product[3],
        matiral:product[4],
        description:product[5],
        url_image:product[6],
        stock:product[7]
    }
    
    
    let data = localStorage.getItem("carrito");
    if(data == null ){
        localStorage.setItem("carrito", JSON.stringify([p]));
    }else{
        console.log("...")
        let list = JSON.parse(localStorage.getItem("carrito"));
        list.push(p);
        localStorage.setItem("carrito", JSON.stringify(list));
    }
}


