var custArr = [];
var productArr = [];
var values = 0;
var getprod = [];
var index = 0;
var order = [];
var orderforone;
var total = 0;

function addproduct() {
  var product = document.getElementById("prodname1").value;
  var quantity = document.getElementById("quantity").value;
  if (product == "select") alert("Select the product");
  else {
    if (quantity == "") {
      alert("Enter the quantity");
    } else {
      getprod = getproddet();
      var actualstock = parseInt(getprod[4], 10);
      if (actualstock >= parseInt(quantity, 10)) {
        var i = values;

        productArr[i] = product;
        i++;
        productArr[i] = quantity;
        values = i + 1;
        alert("product added successfully..");
        var amount = parseInt(quantity, 10) * parseInt(getprod[2]);
        total = total + amount;
        var orderdetails =
          "productname:" +
          product +
          " Quantity:" +
          quantity +
          " price per unit:" +
          parseInt(getprod[2]) +
          " Amount:" +
          amount;
        order[index++] = orderdetails;
        update(product, quantity);
        document.getElementById("prodname1").options.length = 0;
        loadproducts();
      } else {
        alert("out of stock");
      }
    }
  }
}

function getproddet() {
  var newArrayDataOfOjbect = [];
  var prodname = document.getElementById("prodname1").value;
  var dbRef1 = firebase.database().ref("products/" + prodname);
  dbRef1.on("value", function (snapshot) {
    snapshot.forEach(function (childSnapshot) {
      var childData = childSnapshot.val();
      newArrayDataOfOjbect = Object.values(childData);
    });
  });
  return newArrayDataOfOjbect;
}

function start() {
  var product = document.getElementById("prodname1");
  var quantity = document.getElementById("quantity");
  var addprod = document.getElementById("addprod");
  var checkout = document.getElementById("checkout");
  product.disabled = false;
  quantity.disabled = false;
  addprod.disabled = false;
  checkout.disabled = false;
  var custname = document.getElementById("custname");
  var email = document.getElementById("email");
  var phno = document.getElementById("phno");
  custname.disabled = true;
  email.disabled = true;
  phno.disabled = true;
  loadproducts();
  orderforone = custname.value + " " + email.value + " " + phno.value + " ";
  order[index++] = orderforone;
}

function checkoutval() {
  var custname = document.getElementById("custname").value;
  var email = document.getElementById("email").value;
  var phno = document.getElementById("phno").value;

  saveMessages(custname, email, phno, total);

  saveMessages3();
  if (total > 0) {
    alert("Total amount is:" + total);
    alert("Thank you :)");
  } else {
    alert("You have not puchased anything:Anyways Thank you");
  }
}
const getElementVal = (id) => {
  return document.getElementById(id).value;
};

const saveMessages = (custname, email, phno, total) => {
  var productdb = firebase.database().ref("orders/" + custname + phno);
  var newProductForm = productdb.push();

  newProductForm.set({
    customername: custname,
    customeremail: email,
    customerphno: phno,
    orderdetails: productArr,
    amt: total,
  });
};
function update(prodtobeupdate, quantity) {
  var prod = [];
  prod = getproddet();
  var proddel = prodtobeupdate;
  var dbRef1 = firebase.database().ref("products/" + proddel);

  dbRef1.once("value", function (snapshot) {
    var exists = snapshot.val() !== null;

    if (exists) {
      dbRef1.remove();
    } else if (exists == false) {
      alert("Product does not exist");
    }
  });

  var productname = prod[3];
  var category = prod[0];
  var quantity = parseInt(prod[4], 10) - parseInt(quantity, 10);
  var price = prod[2];
  var limit = prod[1];
  saveMessages1(productname, category, quantity, price, limit);
}

const saveMessages1 = (productname, category, quantity, price, limit) => {
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
function loadproducts() {
  var productListDb = firebase.database().ref("products");
  select = document.getElementById("prodname1");
  productListDb.on("value", function (snapshot) {
    snapshot.forEach(function (childSnapshot) {
      var childData = childSnapshot.val();
      var newArrayDataOfOjbect = Object.values(childData);
      var catname = Object.values(newArrayDataOfOjbect[0]);

      var opt = document.createElement("option");

      opt.value = catname[3];
      opt.innerHTML = catname[3];
      select.appendChild(opt);
    });
  });
}

const saveMessages3 = () => {
  var custname = document.getElementById("custname").value;
  var phno = document.getElementById("phno").value;
  var productdb = firebase.database().ref("bills/" + custname + phno);
  var newProductForm = productdb.push();
  newProductForm.set({
    billdetails: order,
  });
};
