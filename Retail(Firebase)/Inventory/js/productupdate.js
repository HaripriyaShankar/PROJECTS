function updateproduct(){
    selectedproduct=document.getElementById("productList");
    var productname=document.getElementById("productname");
    var productname = document.getElementById("productname");
  var category = document.getElementById("category");
  var quantity = document.getElementById("quantity");
  var price = document.getElementById("price");
  var limit = document.getElementById("limit");
 
  category.disabled=false;
  quantity.disabled=false;
  price.disabled=false;
  limit.disabled=false;
  productname.value=selectedproduct.value;
    var limit = document.getElementById("limit");
    getcat(); 
    
}
function update(){
    var proddel =  selectedproduct=document.getElementById("productList").value;
    var dbRef1 = firebase.database().ref("products/" + proddel);
  
    dbRef1.once("value", function (snapshot) {
      var exists = snapshot.val() !== null;
  
      if (exists) {
        dbRef1.remove();
        window.open("retailerhome.html", "_self");
      } else if (exists == false) {
        alert("Product does not exist");
        window.open("deleteproduct.html", "_self");
      }
    });
    var productname = getElementVal("productname");
  var category = getElementVal("category");
  var quantity = getElementVal("quantity");
  var price = getElementVal("price");
  var limit = getElementVal("limit");
  saveMessages(productname, category, quantity, price, limit);
  console.log(productname, category, quantity, price, limit);
  alert("Product updated successfully..");
  window.open("retailerhome.html", "_self");
}
const saveMessages = (productname, category, quantity, price, limit) => {
    var productdb = firebase.database().ref("products/" + productname);
    var newProductForm = productdb.push();
  
    newProductForm.set({
      productname: productname,
      category: category,
      quantity: quantity,
      price: price,
      limit: limit,
    });
  };
  
  const getElementVal = (id) => {
    return document.getElementById(id).value;
  };
  function getcat(){
var Db = firebase.database().ref("categoryList");  
select = document.getElementById('category');
var val=1;
Db.on('value', function(snapshot) {
snapshot.forEach(function(childSnapshot) {
var childData = childSnapshot.val();
var newArrayDataOfOjbect = Object.values(childData);      
var catname=Object.values(newArrayDataOfOjbect[0]);
console.log(catname);    
var opt = document.createElement('option');
opt.value = catname;  
opt.innerHTML = catname; 
select.appendChild(opt);
});
val++;
});
}

 
 
  
