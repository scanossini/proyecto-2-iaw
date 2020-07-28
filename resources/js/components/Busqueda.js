import React, { Component } from 'react'
import ReactDOM from 'react-dom'

export default class Busqueda extends Component {
    render(){
        return(
            <div>
                <br />
                <h6 className="textoBusqueda">Buscar donantes compatibles con donaciones disponibles.</h6>
                <br />
                <h6 className="textoBusqueda">Tipo de sangre del paciente a recibir la donación:</h6>
                <select name="tipoSangre" id="tipoSangre" className="form-control">
                    <option value="O-">O-</option>
                    <option value="O+">O+</option>
                    <option value="A-">A-</option>
                    <option value="A+">A+</option>
                    <option value="B-">B-</option>
                    <option value="B+">B+</option>
                    <option value="AB-">AB-</option>
                    <option value="AB+">AB+</option>
                    </select>
            </div>
        )
    }
}