function FNameCheck(){
  var name=document.getElementById("Fname").value;
  var namelength=name.length-1;
  var count=0;
  while (namelength >= 0) {
    if (name.charAt(namelength)<'A' || name.charAt(namelength)>'z' || (name.charAt(namelength)<'a' && name.charAt(namelength)>'Z'))
      count++;
    namelength--;
  }
  if (count>0 || name=="" || name==null){
    alert("wrong input")}
}

function AnimalCheck(){
  var animal=document.getElementById("animalname").value;
  var animallength=animal.length-1;
  var count=0;
  while (animallength >= 0) {
    if (animal.charAt(animallength)<'A' || animal.charAt(animallength)>'z' || (animal.charAt(animallength)<'a' && animal.charAt(animallength)>'Z'))
      count++;
    animallength--;
  }
  if (count>0){
    alert("wrong input")}
}

//contest type check
function TypeCheck(){
  var type=document.getElementById("contest-type").value;
  var typelength=type.length-1;
  var count=0;
  while (typelength >= 0) {
    if (type.charAt(typelength)<'A' || type.charAt(typelength)>'z' || (type.charAt(typelength)<'a' && type.charAt(typelength)>'Z'))
      count++;
    typelength--;
  }
  if (count>0){
    alert("wrong input")}}

function LNameCheck(){
  var lname=document.getElementById("Lname").value;
  var n=lname.length-1;
  var count=0;
  while (n >= 0) {
    if (lname.charAt(n)<'A' || lname.charAt(n)>'z' || (lname.charAt(n)<'a' && lname.charAt(n)>'Z'))
      count++;
    n--;
  }
  if (count>0){
    alert("wrong input")}
}

function passcheck(){
  var p1=document.getElementById("pass1").value;
  var p2=document.getElementById("pass2").value;
  var n=p2.length;
  if (p1.substring(0,n) != p2 || p1.length<4){
    document.getElementById("pass2").style.color = "red";}
  else{
    document.getElementById("pass2").style.color = "black";}
}

function minipasscheck(){
  var p1=document.getElementById("pass1").value;
  if (p1.length < 4){
    document.getElementById("pass1").style.color = "red";}
  else{
    document.getElementById("pass1").style.color = "black";}
}

function regvalidation(){
  var p1=document.getElementById("pass1").value;
  var p2=document.getElementById("pass2").value;
  var lname=document.getElementById("Lname").value;
  var lnamelength=lname.length-1;
  var count1=0;
  var count2=0;
  var fname=document.getElementById("Fname").value;
  var fnamelength=fname.length-1;

  if (p1.substring(0,p2.length) != p2 || p1.length<4){
    alert("wrong password");
    return false;
  }

  while (lnamelength >= 0) {
    if (lname.charAt(lnamelength)<'A' || lname.charAt(lnamelength)>'z' || (lname.charAt(lnamelength)<'a' && lname.charAt(lnamelength)>'Z'))
      count1++;
    lnamelength--;
  }
  if (count1>0){
    alert("last name not valid");
    return false;
  }

  while (fnamelength >= 0) {
    if (fname.charAt(fnamelength)<'A' || fname.charAt(fnamelength)>'z' || (fname.charAt(fnamelength)<'a' && fname.charAt(fnamelength)>'Z'))
      count2++;
    fnamelength--;
  }
  if (count2>0 || name=="" || name==null){
    alert("first name not valid");
    return false;}
  return true;
}

function signvalidation(){
  var p1=document.getElementById("pass1").value;
  if (p1.length<4){
    alert ("wrong input")
    return false;
  }
  return true;
}

function contactusvalidation(){
  var first=document.getElementById("Fname").value;
  var last=document.getElementById("Lname").value;
  var firstlength=first.length-1;
  var lastlength=last.length-1;
  var count1=0;
  var count2=0;
  while (firstlength >= 0) {
    if (first.charAt(firstlength)<'A' || first.charAt(firstlength)>'z' || (first.charAt(firstlength)<'a' && first.charAt(firstlength)>'Z'))
      count1++;
    firstlength--;
  }
  if (count1>0){
    alert("wrong input - first name")
    return false;
  }
  while (lastlength >= 0) {
    if (last.charAt(lastlength)<'A' || last.charAt(lastlength)>'z' || (last.charAt(lastlength)<'a' && last.charAt(lastlength)>'Z'))
      count2++;
    lastlength--;
  }
  if (count2>0){
    alert("wrong input - last name")
    return false;
  }
  return true;
}

function animalvalidation(){
  var name=document.getElementById("Fname").value;
  var type=document.getElementById("animaltype").value;
  var namelength=name.length-1;
  var typelength=type.length-1;
  var count1=0;
  var count2=0;

  while (namelength >= 0) {
    if (name.charAt(namelength)<'A' || name.charAt(namelength)>'z' || (name.charAt(namelength)<'a' && name.charAt(namelength)>'Z'))
      count1++;
    namelength--;
  }
  if (count1>0){
    alert("wrong input - name")
    return false;
  }

  while (typelength >= 0) {
    if (type.charAt(typelength)<'A' || type.charAt(typelength)>'z' || (type.charAt(typelength)<'a' && type.charAt(typelength)>'Z'))
      count2++;
    typelength--;
  }
  if (count2>0){
    alert("wrong input - animal type")
    return false;
  }
  return true;
}

function contestvalidation(){
  var name=document.getElementById("Fname").value;
  var namelength=name.length-1;
  var count=0;
  while (namelength >= 0) {
    if (name.charAt(namelength)<'A' || name.charAt(namelength)>'z' || (name.charAt(namelength)<'a' && name.charAt(namelength)>'Z'))
      count++;
    namelength--;
  }
  if (count>0 || name=="" || name==null){
    alert("wrong input - name")
    return false;
  }

  var type=document.getElementById("contest-type").value;
  var typelength=type.length-1;
  var count=0;
  while (typelength >= 0) {
    if (type.charAt(typelength)<'A' || type.charAt(typelength)>'z' || (type.charAt(typelength)<'a' && type.charAt(typelength)>'Z'))
      count++;
    typelength--;
  }
  if (count>0){
    alert("wrong input - type")
    return false;
  }
  return true;
}
