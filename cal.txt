function cal()
{
    num1 = window.document.getElementById("no1")
    num2 = window.document.getElementById("no2")
    opt = document.getElementById("op")
    result=document.getElementById("result")
    img=document.getElementById("mood");
    msg1=document.getElementById("msg1");
    msg2=document.getElementById("msg2")
        
    no1=parseFloat(num1.value);
    no2=parseFloat(num2.value);
    if(no1<10)
    {
        msg1.innerHTML="Invalid Number"
    }
    else if(no2<10)
    {
        msg2.innerHTML="Invalid Number"
    }
    else
    {
    //var res=0.0;
    msg1.innerHTML=""
    msg2.innerHTML=""
    img.style.width="50px"
    img.style.height="50px"
    var res
    if(opt.value=="+")
    res=no1+no2;
    else if(opt.value=="-")
    res=no1-no2;
    else if(opt.value=="*")
    res=no1*no2;
    else if(opt.value=="/")
    res=no1/no2;
    if(res>=100)
    {
    img.src="img/happy.jpg"
    result.style.color="blue"
    }
    else
    {
    img.src="img/sad.jpg"
    result.style.color="red"
    }
    result.innerHTML=res;
    }
}