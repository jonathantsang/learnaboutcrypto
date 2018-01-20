var AYLIENTextAPI = require('aylien_textapi')
var express = require('express')
var bodyParser = require('body-parser');
var app = express()

app.use(express.static('public'));

var textapi = new AYLIENTextAPI({
  application_id: "892e2f66",
  application_key: "388734a6bf18a5d57932d16b245d9d0a"
});

// Summarize
function Summarize(textcomponent, size){
	textapi.summarize({
  		text: textcomponent,
  		sentences_number: size
	}, function(error, response) {
  	if (error === null) {
  		var arr = [];
    	response.sentences.forEach(function(s) {
      		console.log(s);
      		arr.push(s);
    	});
    	return s; // TEST
  	}
	});
}

// Concepts
function Concept(textcomponent){
	textapi.concepts({
  text: textcomponent
	}, function(error, response) {
  	if (error === null) {
    	Object.keys(response.concepts).forEach(function(concept) {
      	var surfaceForms = response.concepts[concept].surfaceForms.map(function(sf) {
        return sf['string'];
      });
      var final = concept + ": " + surfaceForms.join(",");
      console.log(final);
      return final;
    });
  }
	});
}


app.get('/', (req, res) => res.send('index.html'));

app.post("/", function (req, res) {
    console.log(req.body);
    res.send(req.body);
});

app.listen(3000, () => console.log('Example app listening on port 3000!'))