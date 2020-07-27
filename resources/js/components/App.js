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
      })
  }
  render() {  
      return (
            <ul className="list-group">
              {this.state.donantes.map(function(item, index) {
                return(
                  <div key={index}>
                    <h5>{item.nombre}</h5>
                    <h6>Edad: {item.edad}</h6>
                    <h6>Tipo de Sangre: {item.tipoSangre}</h6>
                    <h6>Donaciones Disponibles: {item.donacionesDisp}</h6>
                    <img src="data:image/jpg;base64, {item.foto}" className="img-fluid" alt="" />
                    <br />
                  </div>
                )
              }
              )}
            </ul>
          );
      }
}

ReactDOM.render(<App />, document.getElementById('react-app'))