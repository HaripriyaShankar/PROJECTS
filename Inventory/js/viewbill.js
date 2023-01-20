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

var productDB = firebase.database().ref("orders");
//document.getElementById("view").addEventListener("click", viewCat);

var val = 1;
productDB.on("value", function (snapshot) {
  document.write("<html>");
  document.write("<center>");
  document.write("<body><p>BILLS</p>");
  document.write(
    "<table><th> S.NO</th><th>CUSTOMER NAME</th><th>CONTACT NUMBER</th><th>MAIL ID</th><th>PRODUCT</th><th>AMOUNT(RS)</th>"
  );
  snapshot.forEach(function (childSnapshot) {
    var childData = childSnapshot.val();
    var newArrayDataOfOjbect = Object.values(childData);
    var catname = Object.values(newArrayDataOfOjbect[0]);

    document.write(
      "<tr><td >" +
        val +
        "</td><td >" +
        catname[2] +
        "</td><td >" +
        catname[3] +
        "</td><td >" +
        catname[1] +
        "</td><td >" +
        catname[4] +
        "</td><td >" +
        catname[0] +
        "</td></tr>"
    );
    var styleEl = document.createElement("style");
    styleEl.innerHTML =
      "html{font-family:Comic Sans MS, Comic Sans, cursive ; font-weight: bolder;font-size: large;}p{font-family:Comic Sans MS, Comic Sans, cursive ; font-weight: bolder;font-size: large; color: white; padding-top: 100px;}html,body{background-color: black;}table,th,td{color:black;border:1px solid black;border-collapse:collapse }table{ position: absolute; width: 60vw; left: 50vw;  top: 50vh;  transform: translate(-50%, -50%);  background-color: #ffbcfe;  padding: 10px;  border-style: solid;  border-color: blanchedalmond;}";
    document.head.appendChild(styleEl);
    val++;
  });
});
val = 1;
