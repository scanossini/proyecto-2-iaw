import React, { Component } from 'react'
import ReactDOM from 'react-dom'

var donantes;

export default class Busqueda extends Component {
    constructor(props) {
        super(props);
        this.state = {value: ''};
        donantes = this.props.donantesFromParent;
    
        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    handleChange(event) {
        this.setState({value: event.target.value});
      }
  
    handleSubmit(event) {
        alert('A name was submitted: ' + this.state.value);
        event.preventDefault();
    }

    render(){
        return(
            <div>
                <h5 className="textoBusqueda">Buscar donantes compatibles con donaciones disponibles.</h5>
                <br />
                <form onSubmit={this.handleSubmit}>     
                    <label className="textoBusqueda">           
                        Tipo de sangre del paciente a recibir la donación:
                        <select className="form-control" value={this.state.value} onChange={this.handleChange}>
                            <option value="O-">O-</option>
                            <option value="O+">O+</option>
                            <option value="A-">A-</option>
                            <option value="A+">A+</option>
                            <option value="B-">B-</option>
                            <option value="B+">B+</option>
                            <option value="AB-">AB-</option>
                            <option value="AB+">AB+</option>
                        </select>
                    </label>
                    <input type="submit" value="Buscar" />
                </form>
            </div>
        )
    }
}