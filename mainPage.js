const mysql = require("mysql");
const  connection = mysql.createConnection ({
  host: 'localhost',
  port: 3306,
  user: 'root',
  password: '',
  database: 'cats'
});
connection.connect((err) => {
  if (err) throw err;
  console.log('Connected');
  con.query("SELECT * FROM cats", function (err, result, fields) {
  if (err) throw err;
  console.log(result);
  });
});