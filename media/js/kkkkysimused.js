function loadDoc() 
{
	var xmlhttp;
  if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  } else {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("veelKysimusi").innerHTML =
      this.responseText;
    }
  };
  xmlhttp.open("GET", "/media/txt/kkkKysimused.txt", true);
  xmlhttp.send();
}
 