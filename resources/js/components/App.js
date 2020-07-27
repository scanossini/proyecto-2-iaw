import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch } from 'react-router-dom'
import axios from 'axios';
import ListDonantes from './ListDonantes'
const API_URL = 'https://proyecto-2-iaw.herokuapp.com';
var content, element, container;
container = document.getElementById('react-app');

export default class App extends Component {

  state = {
      donantes: []
  }
  componentDidMount() {
      window.axios = require('axios');
      let api_token = document.querySelector('meta[name="api-token"]');
      let token = document.head.querySelector('meta[name="csrf-token"]');
      window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
      window.axios.defaults.headers.common['Authorization'] = 'Bearer ' + api_token.content;
      
      const url = `${API_URL}/API`;
      axios.get(url).then(response => response.data)
      .then((data) => {
          this.setState({ donantes: data })
          console.log(this.state.donantes)
          for(var i = 0; i < this.state.donantes.length; i++) {
            element = document.createElement('div');
            element.className = 'card';
            element.textContent =
              'Nombre: '+ ((this.state.donantes[i]).nombre) + "\n" +
              'Edad: ' + ((this.state.donantes[i]).edad) + "\n" +
              'Tipo de sangre: ' + ((this.state.donantes[i]).tipoSangre) + "\n" +
              'Donaciones disponibles: ' + ((this.state.donantes[i]).donacionesDisp) + "\n"
             ;        
            container.appendChild(element);
            //console.log((this.state.donantes[i]).nombre);    
        }
      })
  }
  render() {  
      return (
            <div className="card">
              <div className="card-body">
                <h5 className="card-title">Steve Jobs</h5>
                <h6 className="card-subtitle mb-2 text-muted">steve@apple.com</h6>
                <p className="card-text">Stay Hungry, Stay Foolish</p>
              </div>
            </div>
          );
      }
}

//export default App;

ReactDOM.render(<App />, document.getElementById('react-app'))