const jwt = require('jsonwebtoken');
var mysql = require('mysql');

var usertest='testtest';
var passtest='test1';
var viewtest='test';

if (usertest!=='' && passtest!==''){



const fakeUser = {
    username: usertest,
    roles: ['USER'],    
    privileges: {
        'test':['view']
    },
    groups:[],
};


var createtoken=jwt.sign(fakeUser,'UwmcoMtXgRaYs8Sstz831j-J_GgJif848BoK-5PZfGA',{algorithm:'HS256'});




var con = mysql.createConnection({
  host: 'localhost',
  port: 3307,
  user: 'root',
  password: 'root',
  database: 'loginsystem'
});

con.connect(function(err) {
  if (err) throw err;
  console.log('Connected!');
        con.query('SELECT * FROM user where mail = ?',usertest, function (err, result, fields) {
            if (err) throw err;
            console.log(result.length);
            if(result.length==0){
                var sql = 'INSERT INTO user (mail, password,token, view) VALUES (?,?,?,?)';
                con.query(sql,[usertest,passtest,createtoken,viewtest], function (err, result) {
                    if (err) throw err;
                   // console.log('1 record inserted');
                   window.location.href = 'login.php';
                    con.destroy();
                    });
            } else {
                //console.log('erreur');
                con.destroy();
            }
                
    
});
});
}