function getcategory(){
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
 
var categoryListDb = firebase.database().ref("categoryList");  
select = document.getElementById('category');
var val=1;
categoryListDb.on('value', function(snapshot) {
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

  
  