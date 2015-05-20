// load the things we need
var bodyParser = require('body-parser');
var connect = require('connect');
var mongoose = require('mongoose');
var db = mongoose.connect('mongodb://localhost:27017/ngos');
var express = require('express');
var app = express();


// set the view engine to ejs
app.set('view engine', 'ejs');
app.use(express.static(__dirname + '/public'));

// index page
app.get('/', function(req, res) {
    res.render('index');
});

// use res.render to load up an ejs view file
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));


//MongoDB setup
var ngoSchema = new mongoose.Schema({
  title: String,
  address: String,
  description: String,
  contact: String },
  { collection: 'ngolist'});

var ngo = mongoose.model('ngo', ngoSchema);


//search request
app.post('/',function(req, res){

	var req_locality = req.body.locality.toLowerCase();
	var req_interest = req.body.interest.toLowerCase();

	console.log(req.body);


	ngo.find( { "locality": req_locality } , function(err, docs) {
  		if (err) return console.log(err);
        res.render('ngo', { list: docs });
	});


});

app.post('ngo',function(req, res){

  var req_locality = req.body.locality;
  var req_interest = req.body.interest;

  console.log(req.body);

  ngo.find( { "locality": req_locality } , function(err, docs) {
  		if (err) return console.log(err);
        res.render('ngo', { list: docs });
	});


});

app.listen(9000);
console.log('Project started at http://127.0.0.1:9000');
