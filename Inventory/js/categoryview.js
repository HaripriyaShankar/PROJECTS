
const firebaseConfig = {
    apiKey: "AIzaSyBppWHnNYXSpDPyDLPU4n71ET3RtQlnYq0",
    authDomain: "categorylist-7bd45.firebaseapp.com",
    databaseURL: "https://categorylist-7bd45-default-rtdb.firebaseio.com",
    projectId: "categorylist-7bd45",
    storageBucket: "categorylist-7bd45.appspot.com",
    messagingSenderId: "910020944578",
    appId: "1:910020944578:web:6383eb167c973a8c5c115b"
  };
  firebase.initializeApp(firebaseConfig);

  // reference your database
  var categoryListDb = firebase.database().ref("categoryList");
  //document.getElementById("view").addEventListener("click", viewCat);
  

    var val=1;
  categoryListDb.on('value', function(snapshot) {
    document.write("<html>");
    document.write("<center>")
    document.write("<body><p>LIST OF CATEGORIES</p>");
    document.write("<table><th> S.NO</th><th> CATEGORY NAME</th>");
    snapshot.forEach(function(childSnapshot) {
      var childData = childSnapshot.val();
      var newArrayDataOfOjbect = Object.values(childData);      
      var catname=Object.values(newArrayDataOfOjbect[0]);
      console.log(catname);        
      document.write("<tr><td >" + val + "</td><td >" + catname[0] + "</td></tr>"); 
        var styleEl = document.createElement('style');
styleEl.innerHTML = 'html{font-family:Comic Sans MS, Comic Sans, cursive ; font-weight: bolder;font-size: large;}p{font-family:Comic Sans MS, Comic Sans, cursive ; font-weight: bolder;font-size: large; color: white; padding-top: 100px;}html,body{background-color: black;}table,th,td{color:black;border:1px solid black;border-collapse:collapse }table{ position: absolute; width: 400px;  left: 50vw;  top: 50vh;  transform: translate(-50%, -50%);  background-color: #ffbcfe;  padding: 10px;  border-style: solid;  border-color: blanchedalmond;}';
document.head.appendChild(styleEl);
val++;



     
      
      
           
    });
});
val=1;



