var AYLIENTextAPI = require('aylien_textapi')
var express = require('express')
var bodyParser = require('body-parser');
var request = require('request-promise');
var Promise = require("bluebird");
var app = express()

// parse application/x-www-form-urlencoded
app.use(bodyParser.urlencoded({ extended: false }))

// parse application/json
app.use(bodyParser.json())

app.use(express.static('public'));

var arr = [];
var summary = "";

var textapi = new AYLIENTextAPI({
  application_id: "892e2f66",
  application_key: "388734a6bf18a5d57932d16b245d9d0a"
});

// Summarize
function Summarize(name, textcomponent, size){
  var smm = [];
  arr = [];
  console.log("summ");
  return new Promise(function(resolve, reject) {
	   textapi.summarize({
      text: textcomponent,
      title: name,
      sentences_number: size
    }, function(error, response) {
    if (error === null) {
      response.sentences.forEach(function(s) {
        console.log(s);
        smm.push(s);
      if(smm.length > size-1){
        console.log("summary sentences");
        arr = smm;
        resolve(smm); // TEST
       }
      });
    } else {
      console.log(error);
    }
    });
  });
}

// Concepts
function Concept(name, textcomponent){
  var ccs = [];
  return new Promise(function(resolve, reject) {
        //var result = 'A is done'
        //resolve(result);
        textapi.concepts({
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
          arr = ccs;
          resolve(ccs);
        }
      });
      } else {
        console.log(error);
      }
  });
  });
}


app.get('/', (req, res) => res.send('index.php'));

app.post("/summary", function (req, res) {
    console.log("posting");
    // Calls API
    Summarize(req.body.name, req.body.text, 5).then(function(){
      res.send(arr);
    });
    // Make sure arr is changed before res.json is called
});
app.post("/concept", function (req, res) {
    console.log("posting");
    // Calls API
    Concept(req.body.name, req.body.text).then(function(){
      res.send(arr);
    });
    // Make sure arr is changed before res.json is called
});


app.listen(3000, () => console.log('Example app listening on port 3000!'));

