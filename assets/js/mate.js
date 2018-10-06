function sidebar_toggle(){
  ele=document.getElementById('sidebar');
  ele2=document.getElementById('db');
  ele3=document.getElementById('nav');
  c_status=ele.className;
  if (c_status==='active') {
    ele.className='';
    ele2.className='';
    ele3.className='';
  }
  else {
    ele.className='active';
    ele2.className='active';
    ele3.className='active';
  }
}


// toggles lines
function toggle_line(args) {
    var pills = document.getElementsByClassName("pill");
    var details = document.getElementsByClassName("rel");
    document.getElementById('p' + args).className = 'pill active';
    document.getElementById('rel' + args).className = 'rel active';
    var i = 0;
    while (i < pills.length) {
        var pill = pills.item(i).id;
        var detail = details.item(i).id;
        var samepill = document.getElementById('p' + args).id;
        var samedetail = document.getElementById('rel' + args).id;
        if (pill !== samepill) {
            document.getElementById(pill).className = 'pill';
        }
        if (detail !== samedetail) {
            document.getElementById(detail).className = 'rel';
        }
        i++;
    }
}

function notification(){
  var status = document.getElementById('notification').className;

  if (status=='active')
   {
    document.getElementById('notification').className ='inactive';
  }

  else
   {
    document.getElementById('notification').className ='active';
  }

}
