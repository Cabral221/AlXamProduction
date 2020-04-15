import React from 'react';
import ReactDOM from 'react-dom';

import Player from './Player';
import '../App.css';

function App() {
    return (
        <div className="app">
          <div className="title">Music Box</div>
          <Player  />    
        </div>
    );
}

export default App;

if (document.getElementById('jp')) {
    ReactDOM.render(<App />, document.getElementById('jp'));
}
