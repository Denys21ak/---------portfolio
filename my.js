let h1 = 2;
if(h1>10){
let result = 'good';
} else {
  result = 'ok';
}
console.log(result + 'Using if');


document.forms.publish.onsubmit = function() {
  var num1 = this.num1.value;
  var num2 = this.num2.value;
  if(num1>num2){
    alert('Число '+ num1 + ' Більше за число ' + num2)
  }else{
    alert('Число '+ num1 + ' Менше за число ' +num2)
  }
  return false;
};



document.getElementById('close').onclick = function() { 
  document.getElementById('bt2').style.display = "none";
  document.getElementById('bt').style.display = "none";
}


