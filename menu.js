let selectName = document.querySelector("#name");
let selectType = document.querySelector("#type");

let container = document.querySelector(".main");

selectName.addEventListener("change",function(){
    let nameValue = this.value;
    
    
    let http = new XMLHttpRequest();
    
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            let response = JSON.parse(this.responseText);
            let out = "";
            for(let item of response){
                out +=`
            <div class="card">
            <div class="image">
                <img src="${item.image}" alt="">
            </div>
            <div class="caption">
                <p class="product_name product type">${item.type}</p>
                <p class="product_name product name">${item.name}</p>
                <p class="product_model product">${item.model}</p>
                <p class="price"><b>$ ${item.price}</b></p>
            </div>
            <button class="add" data-id="${item.id}" >Add to cart</button>
        </div>
                `;
            }
            
            container.innerHTML = out;
            
            
            
        }
    }
    
     
    
    http.open('POST', "menu.php", true);
    http.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    http.send("name="+nameValue);
});






































selectType.addEventListener("change",function(){
    let typeValue = this.value;
    
    
    let http = new XMLHttpRequest();
    
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            let response = JSON.parse(this.responseText);
            let out = "";
            for(let item of response){
                out +=`
            <div class="card">
            <div class="image">
                <img src="${item.image}" alt="">
            </div>
            <div class="caption">
                <p class="product_name product type">${item.type}</p>
                <p class="product_name product name">${item.name}</p>
                <p class="product_model product">${item.model}</p>
                <p class="price">$ <b>${item.price}</b></p>
            </div>
            <button class="add" data-id="${item.id}" >Add to cart</button>
        </div>
                `;
            }
            
            container.innerHTML = out;
            
            
            
        }
    }
    
     
    
    http.open('POST', "menu.php", true);
    http.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    http.send("type="+typeValue);
});

























let selectPrice = document.querySelector("#price");

selectPrice.addEventListener("change", function() {
  let priceValue = this.value;
  
  let http = new XMLHttpRequest();
  
  http.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      let response = JSON.parse(this.responseText);
      let out = "";
      for (let item of response) {
        out += `
          <div class="card">
            <div class="image">
              <img src="${item.image}" alt="">
            </div>
            <div class="caption">
              <p class="product_name product type">${item.type}</p>
              <p class="product_name product name">${item.name}</p>
              <p class="product_model product">${item.model}</p>
              <p class="price"><b>$ ${item.price}</b></p>
            </div>
            <button class="add" data-id="${item.id}" >Add to cart</button>
          </div>
        `;
      }
      
      container.innerHTML = out;
    }
  }
  
  http.open("POST", "menu.php", true);
  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  http.send("price=" + priceValue);
});


