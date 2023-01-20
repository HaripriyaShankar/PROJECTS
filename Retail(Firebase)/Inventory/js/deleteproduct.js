const firebaseConfig = {
  apiKey: "AIzaSyBppWHnNYXSpDPyDLPU4n71ET3RtQlnYq0",
  authDomain: "categorylist-7bd45.firebaseapp.com",
  databaseURL: "https://categorylist-7bd45-default-rtdb.firebaseio.com",
  projectId: "categorylist-7bd45",
  storageBucket: "categorylist-7bd45.appspot.com",
  messagingSenderId: "910020944578",
  appId: "1:910020944578:web:6383eb167c973a8c5c115b",
};

firebase.initializeApp(firebaseConfig);

document.getElementById("deletebut").addEventListener("click", deleteprod);
function deleteprod() {
  var proddel = document.getElementById("delprod").value;
  var dbRef1 = firebase.database().ref("products/" + proddel);

  dbRef1.once("value", function (snapshot) {
    var exists = snapshot.val() !== null;

    if (exists) {
      dbRef1.remove();
      alert("Product Deleted Successfully");
      window.open("retailerhome.html", "_self");
    } else if (exists == false) {
      alert("Product does not exist");
      window.open("deleteproduct.html", "_self");
    }
  });
}
