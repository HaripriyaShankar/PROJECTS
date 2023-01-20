function addproduct() {
  var productname = getElementVal("productname");
  var category = getElementVal("category");
  var quantity = getElementVal("quantity");
  var price = getElementVal("price");
  var limit = getElementVal("limit");
  saveMessages(productname, category, quantity, price, limit);
  console.log(productname, category, quantity, price, limit);
  alert("Product added successfully..");
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
