var http = require('http');
var url = require('url');

var server = http.createServer(function (req, res) {
    var page = url.parse(req.url).pathname;
    console.log(page);
    res.writeHead(200, { "content-Type": "text/html" });// le code 200 donne un retour positive et mettre en affichage html.
    if (page == '/') {
        res.write('Ceci est la page principale facebook');
    }
    else if (page == '/amazon') {
        res.write('Ceci est la page principale d amazon sur facebook');
    }
    else if (page == '/street4fit') {
        res.write('Ceci est la page principale d amazon sur street4fit');
    }
    else {
        res.write('La page demander n existe pas');
    }
    res.end();
});

server.listen(8080); // Sert a testé le serveur.