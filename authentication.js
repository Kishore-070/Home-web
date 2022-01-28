let a=document.getElementById("left1");
let b=document.getElementById("right1");
let c=document.getElementById("right");
let d=document.getElementById("left");


function Login(){
      a.style.visibility="hidden";
      b.style.visibility="hidden";
      c.style.visibility="visible";
      d.style.visibility="visible";
}

function Register(){
      a.style.visibility="visible";
      b.style.visibility="visible";
      c.style.visibility="hidden";
      d.style.visibility="hidden";
}