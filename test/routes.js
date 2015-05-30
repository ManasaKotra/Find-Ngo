var expect = require('chai').expect;
var request = require('supertest');


describe('Get /', function() {
   var app = 'http://localhost:3000/';

  it('returns index.ejs', function() {
    request(app)
      .get('/')
      .end(function(err, res){
        if (err) throw err;
      });
  });
});
