var AYLIENTextAPI = require('aylien_textapi');
var express = require('express')
var app = express()

app.use(express.static('public'));

var textapi = new AYLIENTextAPI({
  application_id: "892e2f66",
  application_key: "388734a6bf18a5d57932d16b245d9d0a"
});

// Summarize
textapi.summarize({
  url: 'http://techcrunch.com/2015/04/06/john-oliver-just-changed-the-surveillance-reform-debate',
  sentences_number: 3
}, function(error, response) {
  if (error === null) {
    response.sentences.forEach(function(s) {
      console.log(s);
    });
  }
});

// Concepts
textapi.concepts({
  text: 'Apple was founded by Steve Jobs, Steve Wozniak and Ronald Wayne.'
}, function(error, response) {
  if (error === null) {
    Object.keys(response.concepts).forEach(function(concept) {
      var surfaceForms = response.concepts[concept].surfaceForms.map(function(sf) {
        return sf['string'];
      });
      console.log(concept + ": " + surfaceForms.join(","));
    });
  }
});

app.get('/test', function(req, res, next) {
  res.json({ message: 'Hello World' });
});

app.get('/', (req, res) => res.send('index.html'))

app.listen(3000, () => console.log('Example app listening on port 3000!'))