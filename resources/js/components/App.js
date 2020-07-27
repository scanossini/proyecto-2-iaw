import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import axios from 'axios';

const API_URL = 'https://proyecto-2-iaw.herokuapp.com';
var container = document.getElementById('react-app');

const photoStyle = {
  width: '100x',
  height: '100px',
  objectFit: 'cover',
  borderRadius: '50%'
}

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
            <ul className="ulStyle">
              {this.state.donantes.map(function(item, index) {
                return(
                  <div key={index}>
                    <h5>{item.nombre}</h5>
                    <h6>Edad: {item.edad}</h6>
                    <h6>Tipo de Sangre: {item.tipoSangre}</h6>
                    <h6>Donaciones Disponibles: {item.donacionesDisp}</h6>
                    <img src={`data:image/jpeg;base64,${item.foto}`} className="img-fluid" style={photoStyle} alt=""  />
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