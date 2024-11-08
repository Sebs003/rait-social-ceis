const mysql = require('mysql2');

const pool = mysql.createPool({
    host: 'localhost',
    user: 'sebastian_sebastian',
    password: 'Showmelove1',
    database: 'sebastian_raitsocial'
}).promise();

module.exports = pool;
