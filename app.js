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
  contact: String,
});
mongoose.model('ngos', ngoSchema);  
var ngos = mongoose.model('ngos');

//search request
app.post('/',function(req, res){

	var req_locality = req.body.locality;
	var req_interest = req.body.interest;

	 console.log(req.body);
	// console.log("locality : " + req_locality
	//  	+ ", interest : " + req_interest);

// var Findngo = new ngos();	
// Findngo.find('title: THP',function(err, ngos){
// 	for (var i = 0; i < ngos.length; i++) {
// 		console.log('ID:' + ngos[i]._id);
// 		console.log(ngos[i].description);
// 	}
// });

});

app.listen(9000);
console.log('Project started at http://127.0.0.1:9000');
