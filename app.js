var AYLIENTextAPI = require('aylien_textapi')
var express = require('express')
var bodyParser = require('body-parser')
var app = express()

// parse application/x-www-form-urlencoded
app.use(bodyParser.urlencoded({ extended: false }))

// parse application/json
app.use(bodyParser.json())

app.use(express.static('public'));

var ccs = [];

var textapi = new AYLIENTextAPI({
  application_id: "892e2f66",
  application_key: "388734a6bf18a5d57932d16b245d9d0a"
});

// Summarize
function Summarize(textcomponent, size){
  var arr = [];
	textapi.summarize({
  		text: textcomponent,
  		sentences_number: size
	}, function(error, response) {
  	if (error === null) {
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
  ccs = [];
	return textapi.concepts({
  text: textcomponent
	}, function(error, response) {
  	if (error === null) {
    	Object.keys(response.concepts).forEach(function(concept) {
      	var surfaceForms = response.concepts[concept].surfaceForms.map(function(sf) {
        return sf['string'];
        });
        var final = concept + ": " + surfaceForms.join(",");
        ccs.push(final);
        if(ccs.length > 3){
          console.log("loaded");
          console.log(ccs);
          console.log("send concepts");
          return ccs;
        }
      });
    }
	});
}


app.get('/', (req, res) => res.send('index.html'));

app.post("/", function (req, res) {
    console.log("posting");
    // Calls API
    Concept(req.body.name).then(arr => { res.json(arr) }).catch(err => {console.log(err)});
    // Load arr before it is sent
    console.log("arr");
    console.log(arr);
});

app.listen(3000, () => console.log('Example app listening on port 3000!'));

