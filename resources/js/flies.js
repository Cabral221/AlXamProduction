// var request = require('superagent');

// request.get('http://localhost:8000/sons').end((err, res) => {
//     console.log(res.text);
// })
import Axios from 'axios';

Axios.get('http://localhost:8000/sons').then((res) => {
    console.log(res.data);
});