import React, { Component } from 'react'
import ReactDOM from 'react-dom'

export default class Busqueda extends Component {
    render(){
        return(
            <div>
                Buscar donantes compatibles con donaciones disponibles
                <br />
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